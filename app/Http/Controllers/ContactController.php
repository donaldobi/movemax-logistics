<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    // Show the contact form.
    public function show()
    {
        return view('contact');
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

        // Create a new ContactForm instance and save it to the database
        $contact = ContactForm::create($validated);

        // Send email
        Mail::to('admin@movemax.com')->send(new ContactFormSubmitted($contact));

        return back()->with('success', 'Your message has been sent successfully. We will get back to you soon!');
    }
}