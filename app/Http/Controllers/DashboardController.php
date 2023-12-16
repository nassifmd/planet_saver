<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\RedeemedTree;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class DashboardController extends Controller
{

        public function index()
    {
        // Retrieve the authenticated user
        $user = auth()->user();

        // Calculate the start and end dates for the current month
        $currentMonthStart = Carbon::now()->startOfMonth();
        $currentMonthEnd = Carbon::now()->endOfMonth();

        // Retrieve the top player for the current month
        $topPlayer = User::whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
            ->orderBy('score', 'desc')
            ->first();

        // Get the top users based on their score
        $topUsers = User::orderBy('score', 'desc')->take(3)->get();

        // Get the top player's ID
        $topPlayerId = $topPlayer ? $topPlayer->id : null;

        // Get all users ordered by correct answers and wrong answers
        $users = User::orderByDesc('correct_answers')
            ->orderBy('wrong_answers')
            ->get();

        // Calculate the redeemed trees count
        $redeemedTreesCount = 0; // Default value

        if ($user) {
            $redeemedTreesCount = DB::table('users')->join('trees', 'users.redeemed_tree_id', '=', 'trees.id')
                ->where('users.id', $user->id)
                ->count();
        }

        // Get the rank of the authenticated user
        $rank = $users->search(function ($item) use ($user) {
            return $item->id === $user->id;
        });

        // Pass the necessary data to the view
        return view('dashboard.index', compact('user', 'topPlayer', 'topUsers', 'topPlayerId', 'users', 'redeemedTreesCount', 'rank'));
    }

        public function dashboard()
    {
        // Get the top three users based on their scores
        $topUsers = User::orderBy('score', 'desc')->take(3)->get();

        return view('dashboard', compact('topUsers'));
    }

    public function calculateTopPlayer()
    {
        // Get the current month
        $currentMonth = Carbon::now()->format('m');

        // Calculate the top player based on their overall performance for the current month
        $topPlayer = User::whereMonth('created_at', $currentMonth)
            ->orderBy('score', 'desc')
            ->first();

        // Send congratulatory email to the top player
        if ($topPlayer) {
            $topPlayerId = $topPlayer->id; // Store the top player's ID

            // Get the top player and their email address
            $topPlayer = User::find($topPlayerId);
            $email = $topPlayer->email;

            // You can use Laravel's Mail class to send the email
            // For example:
            Mail::to($email)->send(new CongratulatoryEmail($topPlayer));
        }
    }


}