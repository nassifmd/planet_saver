<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tree;
use App\Models\RedeemedTree;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\CongratulatoryEmail;
use Illuminate\Support\Facades\Auth;


class RedeemController extends Controller
{
     public function showRedemptionForm()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        if (!$user) {
            // Handle the case where the user is not authenticated
            // You can redirect them to the login page or perform any other desired action
        }

        // Replace this code with your own logic to determine the top player ID
        $topPlayer = User::orderBy('score', 'desc')->first();
        $topPlayerId = $topPlayer->id;

        // Retrieve the top player
        $topPlayer = User::find($topPlayerId);

        // Check if the top player is eligible to redeem a tree
        if ($this->isEligibleForRedemption($topPlayer)) {
            // Retrieve available tree options
            $trees = Tree::all();

            // Count the number of redeemed trees for the user
            $redeemedTreeCount = $user->redeemedTrees()->count();

            return view('redeem.form', compact('user', 'topPlayer', 'trees', 'topPlayerId', 'redeemedTreeCount'));
        } else {
            return redirect()->route('dashboard')->with('error', 'Sorry, you are not eligible to redeem a tree at this time.');
        }
    }
    

    public function redeemTree(Request $request, $topPlayerId)
    {
        // Retrieve the authenticated user
        $user = Auth::user();
    
        if (!$user) {
            // Handle the case where the user is not authenticated
            // You can redirect them to the login page or perform any other desired action
        }

        // Retrieve the selected tree ID from the form submission
    $selectedTreeId = $request->input('tree_id');

   // Retrieve the selected tree ID from the form submission
   $selectedTreeId = $request->input('tree_id');

    // Retrieve the top player
    $topPlayer = User::find($topPlayerId);

    if (!$topPlayer) {
        return redirect()->route('dashboard')->with('error', 'Top player not found.');
    }

    // Check if the top player is eligible to redeem a tree
    if (!$this->isEligibleForRedemption($topPlayer)) {
        return redirect()->route('dashboard')->with('error', 'Sorry, you are not eligible to redeem a tree at this time.');
    }

    // Retrieve the selected tree based on the ID
    $selectedTree = Tree::find($selectedTreeId);

    if (!$selectedTree) {
        return redirect()->route('dashboard')->with('error', 'Selected tree not found.');
    }

    // Perform any validation or additional logic here
    // ...

    // Update the top player's redeemed tree
    $topPlayer->redeemed_tree_id = $selectedTreeId;
    $topPlayer->save();

    // Send an email to the user
    $this->sendRedemptionEmail($topPlayer, $selectedTree);

    // Set a success message to be displayed on the form
    $redeemedResponse = 'Congratulations! You have successfully redeemed your tree for planting.';

    // Redirect back to the form with the success message
    return redirect()->route('redeem.tree')->with('success', $redeemedResponse);
    }
    


    private function isEligibleForRedemption($user)
    {
        $now = Carbon::now();
        $endOfMonth = Carbon::now()->endOfMonth();

        // Check if the current date is within 5 days leading up to the end of the month
        return $now->diffInDays($endOfMonth, false) <= 5;
    }

    private function sendRedemptionEmail($user, $tree)
{
    Mail::to($user->email)->send(new CongratulatoryEmail($user, $tree));
}
}