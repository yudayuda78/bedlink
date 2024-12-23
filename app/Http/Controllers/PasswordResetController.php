<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    public function showResetForm()
    {
        return view('passwords.email');
    }

    public function sendResetLink(Request $request, User $user)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'We couldn\'t find a user with that email.']);
        }

        // Create a token and insert it into the password_resets table
        $token = Str::random(60);
        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => $token, // Store raw token instead of hashing it
            'created_at' => Carbon::now(),
        ]);

        // Send email with reset link
        Mail::send('passwords.reset-email', ['token' => $token], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Reset Password Notification');
        });

        return back()->with('success', 'We have emailed your password reset link!');
    }

    public function showNewPasswordForm($token)
    {
        return view('passwords.reset', ['token' => $token]);
    }

    public function updatePassword(Request $request, $token)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // Find token in the password_resets table
        $passwordReset = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $token) // Compare raw token
            ->first();

        if (!$passwordReset) {
            return back()->withErrors(['token' => 'Invalid token.']);
        }

        // Check if token is expired
        if (Carbon::parse($passwordReset->created_at)->addMinutes(60)->isPast()) {
            return back()->withErrors(['token' => 'This token has expired.']);
        }

        // Update the user's password
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'No user found with this email address.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        // Delete token after reset
        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('success', 'Password has been reset!');
    }
}
