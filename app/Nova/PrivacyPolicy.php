<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PrivacyPolicy extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\PrivacyPolicy';
    public static $group = 'Static Pages';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABfUlEQVRIx+2UMUvDQBzFX3FyEpxEP4KCi/gFFP0g4uomQqe0l1xT0cvl0ooWLK1QlCoqbUHQDoIuXcXJzUUEXcSqmTyH2KZJtU1qwaUP3nAHye94/8cfGKhvkjKCmDnXdk8MBcSQHvckja+CGJ+gVgGMDXsAuZJE9dZxTwCVzYJabyjXJLYP3kHFPeJssj8AhY1CNZ+wf+784OJGIrllQ+UrTYDYk8hXHHcEOHl6XSwOQeUadKuO4yuJnUMbVJxBysj3N/Mghu5xB4BEruS69TWELUATL6DiAbo+0tsgieFm+VOeKptoZu8pgDkFyqOgZu5vAL9ifBFUPEJP1ZE5sqGZNpT1sc4AkXft9No7k1bFN6eRTNebD0oXXkH4UjjAbzNpiIpnVGoOIHsqQVPVcBF1iyyR2sVGxoYmPpCw7kB5tL8Alc2A8GUo1niwFvkjapsJX/M4dE27AbInrkOvhSARhanx/wD8tfSfG0ut62ILtuwufefr4IttoID6AsvwwOAd5AmMAAAAAElFTkSuQmCC">';



    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('title'),
            Text::make('description'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
