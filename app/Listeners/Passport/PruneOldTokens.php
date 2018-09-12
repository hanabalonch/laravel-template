<?php

namespace App\Listeners\Passport;

use Illuminate\Contracts\Queue\ShouldQueue;
use Laravel\Passport\Events\RefreshTokenCreated;

class PruneOldTokens implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RefreshTokenCreated  $event
     * @return void
     */
    public function handle(RefreshTokenCreated $event)
    {
        //
    }
}
