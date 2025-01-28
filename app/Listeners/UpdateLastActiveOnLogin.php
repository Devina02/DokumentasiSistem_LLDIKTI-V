<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Carbon\Carbon;

class UpdateLastActiveOnLogin
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Authenticated  $event
     * @return void
     */
    public function handle(Authenticated $event)
    {
        // Update last_active saat login
        $user = $event->user;
        
        if ($user && $user->role === 'admin') {
            $user->update([
                'last_active' => Carbon::now(),
            ]);
        }
    }
}
