<?php

namespace Stonkeep\NovaMailTracker;


use Illuminate\Http\Request;
use jdavidbakr\MailTracker\Model\SentEmail;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Resource;

class MailTracker extends Resource
{
    public static $group = 'Admin';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = SentEmail::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

//    /**
//     * Get the logical group associated with the resource.
//     *
//     * @return string
//     */
//    public static function group(): string
//    {
//        return __('nova-permission-tool::navigation.sidebar-label');
//    }

    public static function label()
    {
        return 'Mails Tracker';
    }

    public static function singularLabel()
    {
        return 'Mail';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  Request  $request
     * @return array
     */
    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make('sender_name'),
            Text::make('sender_email'),
            Text::make('recipient_name'),
            Text::make('recipient_email'),
            Textarea::make('content')->hideFromIndex(),
            Text::make('opens')->hideFromIndex(),
            Text::make('clicks')->hideFromIndex(),
            Text::make('message_id')->hideFromIndex(),
            Text::make('meta')->hideFromIndex(),
            Date::make('opened_at')->hideFromIndex(),
            Date::make('clicked_at')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  Request  $request
     * @return array
     */
    public function cards(Request $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  Request  $request
     * @return array
     */
    public function filters(Request $request): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  Request  $request
     * @return array
     */
    public function lenses(Request $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  Request  $request
     * @return array
     */
    public function actions(Request $request): array
    {
        return [];
    }
}