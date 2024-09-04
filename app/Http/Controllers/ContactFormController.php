<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function show()
    {
        $latestMessage = ContactForm::latest()->first();
        return view('contact', compact('latestMessage'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = ContactForm::create($validated);

        Mail::to('admin@movemax.com')->send(new ContactFormSubmitted($contact));

        return redirect()->route('contact')
            ->with('success', 'Your message has been sent successfully. We will get back to you soon!')
            ->withFragment('contact-form');
    }
}