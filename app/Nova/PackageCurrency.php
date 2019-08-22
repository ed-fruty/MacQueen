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
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAB6klEQVRIx2NgoDNgBmJBCjEzPgtmiDnE/qcEg8zAbTwjy2qTGbf/U4JBZgwOCzwX3/+/9uqH/x2HX4H5qRufgPnYMEgtyRZErn74HwQOP/wC5oMswgVAakm2wG7u3f/5257+j137CMz3WXIfzMeGQWoHXxwELn/w/87bn/9XXfkA5lfufg7mY8MgtYMvDsxm3v7vMO/uf5s5d8B8y1l3wHxsGKR28FlAShBFrL7/32zWOaC66yALTgNNYqdKJF968eZ/64nJ/33WhwNxwH/v9cH/TSot/vPL8z8BmqZBUTI1m3Xxv+eaVLDBIFxxqBrO9ljm819AWeAl0EQBsjNa1KZuuIFNJ1r+X3p9+f/Ca0v++64PBIvZ9Nr/A5rYSFYc/Pn353/I5gi4BWdenv2fvTf//+JrS/9Hbo2Bi/MrCdwnq7BbcvEh3BAQbj3R8f/Cq4v/2052oYiLm0p8IysOTGdeB0cozKAJ5yb9D9sc/f/y66v/43ckw8WFNIWfkx3JLitq4Aatu73h/6HHh/+fenHmf+CmULCY0yy3f0xMTNPIrjLlAmL+eywPhFvSdrITHsHea/3/ixmJfweaJ0tJpW8moCLw2qbH/h9yuINcLmYMNtyFGq0QUDpv5FcUuCduIvENFObQYIG7HACrCOEg6S4xHwAAAABJRU5ErkJggg==">';
    public static function authorizable() { return true; }

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
