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
        $user = Auth::user();

        $topPlayer = User::orderBy('score', 'desc')->first();
        $topPlayerId = $topPlayer->id;

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
        $user = Auth::user();

    $selectedTreeId = $request->input('tree_id');

   $selectedTreeId = $request->input('tree_id');

    $topPlayer = User::find($topPlayerId);

    if (!$topPlayer) {
        return redirect()->route('dashboard')->with('error', 'Top player not found.');
    }

    if (!$this->isEligibleForRedemption($topPlayer)) {
        return redirect()->route('dashboard')->with('error', 'Sorry, you are not eligible to redeem a tree at this time.');
    }

    $selectedTree = Tree::find($selectedTreeId);

    if (!$selectedTree) {
        return redirect()->route('dashboard')->with('error', 'Selected tree not found.');
    }

    $topPlayer->redeemed_tree_id = $selectedTreeId;
    $topPlayer->save();

    $this->sendRedemptionEmail($topPlayer, $selectedTree);

    $redeemedResponse = 'Congratulations! You have successfully redeemed your tree for planting.';

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