<?php

namespace App\Http\Controllers;

use App\Models\ShippingEstimate;
use Illuminate\Http\Request;
use App\Mail\ShippingEstimateSubmitted;
use Illuminate\Support\Facades\Mail;

class ShippingEstimateController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'pickup_location' => 'required|string|max:255',
                'pickup_address' => 'required|string',
                'mobile' => 'required|string|max:20',
                'item_weight' => 'required|numeric|min:0',
                'delivery_location' => 'required|string|max:255',
                'delivery_address' => 'required|string',
                'item_description' => 'required|string',
                'delivery_cost' => 'required|numeric|min:0',
            ]);
    
            $estimate = ShippingEstimate::create($validated);
    
            // Send email
            Mail::to('admin@movemax.com')->send(new ShippingEstimateSubmitted($estimate));
    
            return redirect()->route('index')
                ->with('success', 'Your estimate request has been received. We will contact you shortly with the final cost.')
                ->withFragment('contact');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->route('index')
                ->withErrors($e->validator)
                ->withInput()
                ->withFragment('contact');
        }
    }
}