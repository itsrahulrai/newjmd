<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup; // Import the Signup model
use App\Models\Transaction; // Import the Transaction model
use App\Models\Commission; // Import the Commission model
use Illuminate\Support\Str; // Import the Str helper

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Handle user registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:signup',
            'password' => 'required|confirmed|min:6',
            'referral_code' => 'nullable|exists:signup,referral_code',
        ]);

        // Find the parent by referral code
        $parent = Signup::where('referral_code', $request->referral_code)->first();

        // Create the new user
        $user = Signup::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'parent_id' => $parent ? $parent->id : null,
            'referral_code' => Str::random(10), // Generate a unique referral code
        ]);

        // Distribute commission for the parent
        if ($parent) {
            $this->distributeCommissions($parent, $user);
        }

        return response()->json(['message' => 'User registered successfully']);
    }

    // Distribute commission when a user recharges
    public function recharge(Request $request, $userId)
    {
        $request->validate(['amount' => 'required|numeric|min:0.01']);

        $user = Signup::findOrFail($userId);

        // Record the transaction
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
        ]);

        // Distribute commissions to parent and grandparent
        $this->distributeCommissions($user, $transaction->amount);

        return response()->json(['message' => 'Recharge successful']);
    }

   // Distribute commission based on the recharge amount
private function distributeCommissions(Signup $user, $amount)
{
    // Get the parent and grandparent
    $parent = $user->parent;
    $grandparent = $parent ? $parent->parent : null;

    // Parent receives 7% commission
    if ($parent) {
        $parentCommission = ($amount * 7) / 100;

        Commission::create([
            'user_id' => $parent->id,         // Parent receiving commission
            'ref_user_id' => $user->id,       // User who made the recharge
            'amount' => $parentCommission,    // Commission amount
            'relationship' => 'Parent',       // Relationship to user
            'percentage' => 7,                // Add 7% commission
        ]);
    }

    // Grandparent receives 2% commission
    if ($grandparent) {
        $grandparentCommission = ($amount * 2) / 100;

        Commission::create([
            'user_id' => $grandparent->id,    // Grandparent receiving commission
            'ref_user_id' => $user->id,       // User who made the recharge
            'amount' => $grandparentCommission, // Commission amount
            'relationship' => 'Grandparent',  // Relationship to user
            'percentage' => 2,                // Add 2% commission
        ]);
    }
}


   
}
