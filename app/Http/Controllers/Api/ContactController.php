<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        $contact = Contact::create($validated);

        return response()->json([
            'message' => 'Contact message sent successfully',
            'contact' => $contact
        ], 201);
    }

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return response()->json($contacts);
    }

    public function show(Contact $contact)
    {
        return response()->json($contact);
    }

    public function markAsRead(Contact $contact)
    {
        $contact->update(['is_read' => true]);

        return response()->json([
            'message' => 'Contact marked as read',
            'contact' => $contact
        ]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return response()->json([
            'message' => 'Contact deleted successfully'
        ]);
    }
}
