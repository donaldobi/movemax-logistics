<?php

namespace App\Http\Controllers;

use App\Models\ShippingEstimate;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = ShippingEstimate::query();

        // Search functionality
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%")
                  ->orWhere('email', 'like', "%{$searchTerm}%")
                  ->orWhere('pickup_location', 'like', "%{$searchTerm}%")
                  ->orWhere('delivery_location', 'like', "%{$searchTerm}%");
            });
        }

        // Pagination
        $estimates = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard', compact('estimates'));
    }

    public function destroy($id)
    {
        $estimate = ShippingEstimate::findOrFail($id);
        $estimate->delete();

        return redirect()->route('dashboard')->with('success', 'Shipping estimate request deleted successfully.');
    }
}
