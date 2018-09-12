<?php

namespace App\Listeners\Passport;

use Illuminate\Contracts\Queue\ShouldQueue;
use Laravel\Passport\Events\AccessTokenCreated;

class RevokeOldTokens implements ShouldQueue
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
     * @param  AccessTokenCreated  $event
     * @return void
     */
    public function handle(AccessTokenCreated $event)
    {
        //
    }
}
