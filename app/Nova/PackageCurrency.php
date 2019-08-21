<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PackageCurrency extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\PackageCurrency';
    public static $group='Packages';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAACX0lEQVRIx2NgGDHAKShI3tYjOMbeJzDRxTdUjmoG2/qGGzl5hz209wr57+Ad8g+EQWxH79DHDp7hFhRbYO8dkusANHDtpm3/YWD/4eP/QWL23qF1VPGFq39UlX9k0s8fP3/+//v37/+soqpvrgGRy6gaBznF1Wl///37e/DI8f9uAVHPnIBBBwyq1/aeIW9sfULNyDbYOTBQ2NE7rKpvyqxGUPCcvXD5P9Dw7w4+Yc0OPhEOjj6B+gwNDUzkhb9nsK+zX+Sn7OLqbzdu3YHHwckz5/+n5pZ9d/YL/2rnFRxGtuFOPmF/tu3a9x8X2LXv0H+QGpItAQWLi3/kp83bd/8nBHbvP/wf5BMHr1AJoi0AhXliZtGPf//+/X//+cf//Rcf/d934dH/kzee/f/w5QfY4JuP3/1/D2Wn5Zd/AybnJqIt8AyJO79u03aw5ltP3/1ffejm/0v3Xv0/dPnx/yV7r/3/8v3X/22n74HlYEHlHhhzjWgL3AKj3589fwluAciwR68+gV298+z9/1cfvkGx4Pbd++BgItoCF7+IryBNyBacu/Py/+HLT8AYxEa24NGTZ6Ci4/fgtgAUB6DIPnf75f+bT95R34I3H7/9X7zn6v/rj97+f/rm8/8Nx26TZ4GLSyi/s2/4zzv3IBa8fP/1/+mbz8HsBy8//t926h44Va05fBMsBwKPnwIt8An7C8o/hFNQQNS0nJKaH3/+/PlPLAAWgv8LKxu/OftHziZsgX9ki3tg9M/gmLRvpGCPoOifwNzfTjiMgCWjg2eQhYN3sAsp2NEr2JzsUnVQAwB8rqOPXEW2eAAAAABJRU5ErkJggg==">';

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
        'name',
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
            Text::make('name'),
            Text::make('code'),
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
