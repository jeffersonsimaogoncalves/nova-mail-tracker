<?php

namespace Stonkeep\NovaMailTracker;

use jdavidbakr\MailTracker\Model\SentEmail;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;

class EmailsPerDay extends Trend
{

    /**
     * Calculate the value of the metric.
     *
     * @param  NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->countByDays($request, SentEmail::class)->showLatestValue();
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            7  => '1 '.__('Week'),
            14 => '2 '.__('Weeks'),
            30 => '30 '.__('Days'),
            60 => '60 '.__('Days'),
            90 => '90 '.__('Days'),
        ];
    }

}