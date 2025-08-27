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

        Mail::to($validated['email'])->send(new ContactConfirmationMail($validated));

        Mail::to(['m.anastebrw2@gmail.com'])->send(new ContactMail($validated));

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully!'
        ]);
    }
}

