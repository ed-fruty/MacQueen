<?php

namespace App\Nova;

use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Country extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Country';

    /**
     * The icon of the resource.
     *
     * @var string
     */
//    public static $icon = '
//        <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
//            <path fill="var(--sidebar-icon)" d="M4.06 13a8 8 0 0 0 5.18 6.51A18.5 18.5 0 0 1 8.02 13H4.06zm0-2h3.96a18.5 18.5 0 0 1 1.22-6.51A8 8 0 0 0 4.06 11zm15.88 0a8 8 0 0 0-5.18-6.51A18.5 18.5 0 0 1 15.98 11h3.96zm0 2h-3.96a18.5 18.5 0 0 1-1.22 6.51A8 8 0 0 0 19.94 13zm-9.92 0c.16 3.95 1.23 7 1.98 7s1.82-3.05 1.98-7h-3.96zm0-2h3.96c-.16-3.95-1.23-7-1.98-7s-1.82 3.05-1.98 7zM12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20z"
//            />
//        </svg>
//    ';
    public static $icon ='';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name','country_code'
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
            Text::make('name')->sortable(),
            Text::make('country_code')->sortable(),
            HasMany::make('Cities','cities')

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
