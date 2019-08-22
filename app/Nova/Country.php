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
    public static $group ='Destination';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAChElEQVRIx8VWz2vTUByvBw8ePPgveNTjwJO3yZLn5hTGwE0QvBQPlg1RdrKIIIoZQ2E6m6R1m3jYUSnSJq1oZzeGG+mGGwPb2clQZN0vLXatTb++74PEbEkg1cAehL7kffL5vPdtvt/PNxA4yBF/0n5MkfgeVeLOz0ZaDnt5ByBwKCm1tSRk7pQjIBVrP66IXJ8SJWlV5H9TAcBLlcm2KvERNcKf3v/O1FD3kZTInaG4RxT3FfFJib9tISUnFIkM0sW8QTg1cbH+afIGbOcfQrW8AquaBG9GLzSYWJQs4CaSEgmqMh9XZH4Xn6djHfX510GwCeANPpx7daXx5cMtqKw9Bdh8/vcyRqMK5VIOljL3qBBhRJkXXfXlt/2wsSyAXhpjeFeBPaROApah1zahvDrsiP9vAW1SBaGvl61piTAI14h3ga3CCGjJsE1gq/QdtPeqOc9lUyY+p4S9CyC5ECI2ASQX+i/tPYrLiT2HyDy+27BgEWec3LOAeXwPAkiOeN++Il9C1IxAUyH6kR1kv5XFx1Aryv6GaOfdA5hubYXC3asw29UBS9cv+xyijXHI3wkykRnSBr8+DrOkMnLAOv+nEGFYcOczhGMixaEQI8TkMvLBnFvC4jlEtRURFkO9bOefKfmafNM1QpiQtqxv9ivCgqZX1/37D7DkYunFEoyl2PCHBWVA3/mWoWW04iiAJR5LPZZ8VwE0i3TsnM5IZbKrymfjaCpoLtRY5pmpPOvUi3MjUP2ZZ2aEpjQ90aNbnK+A5oUmZhOgiyVF5MepQ3W/jHYe3W+NCZE7qcjcfSq8bhBSMiTPKiIZwHVHH0aDRqNGw/Zi7NgAYCOADQE2BgfamfwB3p1UymbVfpcAAAAASUVORK5CYII=">';

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
