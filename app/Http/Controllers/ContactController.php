<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('admin.messages', compact('messages'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);

            // Store in database
            Message::create($validated);

            // Send email
            Mail::raw("New message from: {$validated['name']}\nEmail: {$validated['email']}\n\nMessage:\n{$validated['message']}", function($message) use ($validated) {
                $message->to(env('ADMIN_EMAIL'))
                        ->subject("New Contact Form Message from {$validated['name']}");
                $message->from($validated['email'], $validated['name']);
            });

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return back()->with('error', 'There was an error sending your message. Please try again later.');
        }
    }
}
