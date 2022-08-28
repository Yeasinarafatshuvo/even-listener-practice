<?php

namespace App\Providers;

use App\Providers\UserSubscribedMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmailOwnerAboutSubscription
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
     * @param  \App\Providers\UserSubscribedMessage  $event
     * @return void
     */
    public function handle(UserSubscribedMessage $event)
    {
        //
    }
}
