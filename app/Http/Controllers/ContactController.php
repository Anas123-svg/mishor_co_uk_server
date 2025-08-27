<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ContactConfirmationMail;

class ContactController extends Controller
{
public function store(Request $request)
{
    try {
        // Validate request
        $validated = $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|email',
            'whatsapp'        => 'nullable|string|max:20',
            'phone'           => 'nullable|string|max:20',
            'message'         => 'required|string',
            'location'        => 'nullable|string|max:255',
            'project_details' => 'nullable|string',
            'images'          => 'nullable|array',
            'images.*'        => 'string',
        ]);

        // Send confirmation email to user
        Mail::to($validated['email'])->send(new ContactConfirmationMail($validated));

        // Send original message to admins
        Mail::to(['m.anastebrw2@gmail.com'])->send(new ContactMail($validated));

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully!'
        ], 200);

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Validation errors
        return response()->json([
            'success' => false,
            'errors' => $e->errors()
        ], 422);

    } catch (\Exception $e) {
        // General errors
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong while sending your message.',
            'error' => $e->getMessage()
        ], 500);
    }
}

}

