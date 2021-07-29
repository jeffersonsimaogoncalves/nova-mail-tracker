<?php

namespace Stonkeep\NovaMailTracker;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaMailTracker extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::resources([
            MailTracker::class,
        ]);
    }
}
