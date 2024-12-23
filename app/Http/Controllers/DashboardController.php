<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use App\Models\Link;
use App\Models\User;
use App\Models\Microsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index($micrositeName)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Get the related microsite
        $microsite = $user->microsite()->where('microsite', $micrositeName)->firstOrFail();

        // Fetch links associated with the selected microsite
        $links = Link::where('microsite_id', $microsite->id)
            ->orderByRaw('COALESCE(`order`, 999999) ASC')
            ->get();

        // Pass the microsite name and the links to the view
        return view('edit-link', compact('links', 'microsite'));
    }
    public function reorder(Request $request)
    {
        $order = $request->input('order');

        foreach ($order as $index => $linkId) {
            Link::where('id', $linkId)->update(['order' => $index]);
        }

        return response()->json(['success' => true]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'type' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'microsite_id' => 'required|exists:microsites,id',
        ]);

        // Create the link associated with the given microsite_id
        $microsite = Microsite::findOrFail($request->microsite_id);

        Link::create([
            'title' => $request->title,
            'url' => $request->url,
            'type' => $request->type,
            'icon' => $request->icon,
            'microsite_id' => $microsite->id,
        ]);

        // Redirect back to the edit page for the correct microsite
        return redirect()->route('dashboard.edit-link', ['microsite' => $microsite->microsite]);
    }

    public function editLink(Request $request, $id)
    {
        $link = Link::where('id', $id)->firstOrFail();
        $request->validate([
            'title' => 'string|max:255',
            'url' => 'url|max:255',
            'icon' => 'string|max:255',
        ]);

        $link->url = $request->input('url');
        $link->title = $request->input('title');
        $link->icon = $request->input('icon');
        $link->save();

        return redirect()->back()->with('success', 'Saving successfully');
    }

    public function deleteLink($id)
    {
        // Find the link by ID
        $link = Link::where('id', $id)->firstOrFail();

        // Delete the link
        $link->delete();

        // Redirect to the dashboard with a success message
        return redirect()->back()->with('success', 'Link deleted successfully');
    }

    public function showPersonalization($micrositeName)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Get the related microsite
        $microsite = $user->microsite()->where('microsite', $micrositeName)->firstOrFail();
        $micrositeId = $microsite->id;

        return view('personalization', compact('microsite'));
    }

    public function editPersonalization(Request $request, $id)
    {
        $microsite = Microsite::where('id', $id)->firstOrFail();

        $request->validate([
            'microsite' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('img/logo/');
            $image->move($destinationPath, $imageName);

            $microsite->icon = $imageName;
        }

        $microsite->microsite = $request->input('microsite');
        $microsite->title = $request->input('title');
        $microsite->description = $request->input('description');
        $microsite->save();

        return redirect()->back()->with('success', 'Saving successfully');
    }
    public function showAccount()
    {
        $user = Auth::user();
        return view('account', compact('user'));
    }
    public function editAccount(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $request->validate([
            'email' => 'required|email:dns',
            'name' => 'required|max:255',
        ]);

        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        return redirect()->route('dashboard.account')->with('success', 'Profile updated successfully');
    }
    public function editPassword(Request $request)
    {

        $user = User::find(Auth::user()->id);

        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update(['password' => Hash::make($request->password)]);

            return back()->with('success', 'Password updated successfully');
        }

        return back()->withErrors([
            'error' => 'Password Salah',
        ]);
    }
}
