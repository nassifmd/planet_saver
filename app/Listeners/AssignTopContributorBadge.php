<?php

namespace App\Listeners;

use App\Models\Badge;
use App\Models\User;
use App\Events\UserPostedAPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssignTopContributorBadge implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  UserPostedAPost  $event
     * @return void
     */
    public function handle(UserPostedAPost $event)
    {
        $user = $event->user;

        $postCountThreshold = 10;

        $postCount = $user->posts()->count();

        // Check if the user meets the criteria to be a top contributor
        if ($postCount >= $postCountThreshold) {

            $badge = Badge::where('name', 'Top Contributor')->first();

            // Assign the badge to the user
            $user->badge()->associate($badge);
            $user->save();
        }
    }
}
