<?php

namespace App\Http\Controllers;

use App\Models\FireSafety;
use Illuminate\Http\Request;

class FireSafetyController extends Controller
{
public function index()
{
    $fireSafety = FireSafety::all()->map(function ($item) {
        return [
            'id' => $item->id,
            'title' => $item->title,
            'description' => $item->description,
            'content' => $item->content,
            'img' => is_array($item->images) && count($item->images) > 0 ? $item->images[0] : null,
            'created_at' => $item->created_at,
            'updated_at' => $item->updated_at,
        ];
    });

    return response()->json($fireSafety, 200);
}

    public function show($id)
    {
        $fireSafety = FireSafety::find($id);
        if (!$fireSafety) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        return response()->json($fireSafety, 200);
    }

public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'images' => 'nullable|array',
        ]);

        $fireSafety = FireSafety::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'content' => $validated['content'],
            'images' => $validated['images'] ?? [],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Fire safety record created successfully',
            'data' => $fireSafety
        ], 201);

    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'success' => false,
            'message' => 'Validation error',
            'errors' => $e->errors()
        ], 422);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong while creating fire safety record',
            'error' => $e->getMessage()
        ], 500);
    }
}


    public function update(Request $request, $id)
    {
        $fireSafety = FireSafety::find($id);
        if (!$fireSafety) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string|max:255',
            'content' => 'sometimes|string',
            'images' => 'nullable|array',
        ]);

        $fireSafety->update($validated);

        return response()->json($fireSafety, 200);
    }

    public function destroy($id)
    {
        $fireSafety = FireSafety::find($id);
        if (!$fireSafety) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $fireSafety->delete();
        return response()->json(['message' => 'Deleted Successfully'], 200);
    }
}
