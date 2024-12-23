<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Microsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MicrositeController extends Controller
{
    public function index($micrositeSlug)
    {
        // Find the Microsite by the slug
        $microsite = Microsite::where('microsite', $micrositeSlug)->firstOrFail();

        // Fetch links related to the Microsite
        $links = $microsite->links()->orderBy('order')->get(); // Assuming the relationship is defined as `links` in the Microsite model

        // Return a view with the Microsite and its related Links
        return view('microsite', compact('microsite', 'links'));
    }

    // Show the form for creating a new microsite
    public function showMicrositeForm()
    {
        $user = Auth::user();
        $microsites = $user->microsite;

        return view('cekLink', compact('microsites')); // Display the form
    }

    // Handle the creation of the new microsite
    public function createMicrosite(Request $request)
    {

        $request->validate([
            'microsite' => 'required|string|max:255|unique:microsites,microsite|regex:/^[a-zA-Z0-9_-]+$/',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Retrieve the registered user from the session
        $userId = Auth::id();

        // Create the Microsite and associate it with the user
        $microsite = Microsite::create([
            'microsite' => $request->microsite,
            'title' => $request->title,
            'description' => $request->description,
            'icon'  => 'logo-blue.png',
            'user_id' => $userId,
        ]);

        // Redirect to the dashboard or another page
        return redirect()->route('cek-link')->with('success', 'Microsite successfully created.');
    }

    public function deleteMicrosite($id)
    {
        // Retrieve the microsite by ID and ensure it belongs to the authenticated user
        $microsite = Microsite::where('id', $id)->where('user_id', Auth::id())->first();

        // Check if the microsite exists and belongs to the user
        if (!$microsite) {
            return redirect()->route('cek-link')->with('error', 'Microsite not found or you do not have permission to delete it.');
        }

        // Delete the microsite
        $microsite->delete();

        // Redirect to the dashboard or another page with a success message
        return redirect()->route('cek-link')->with('success', 'Microsite deleted successfully.');
    }
}
