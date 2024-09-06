<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        $contacts = ContactForm::query();

        if ($request->has('search')) {
            $search = $request->get('search');
            $contacts->where(function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        $contacts = $contacts->latest()->paginate(10);

        return view('contacts', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = ContactForm::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact form entry deleted successfully.');
    }
}