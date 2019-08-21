<?php

namespace App\Nova;

use Carbon\Carbon;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PackageCategory extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\PackageCategory';
    public static $group = 'Packages';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABFUlEQVRIx2NgoDeYcPJnObG4//h3BdItOPXzPzF4yZXf/yef/vmo//QPJZpYsPPB7/+nX/75P+UMiZaQYsHDr/9It4RUC0i2hBwL4Jac/fmAahbgwoPLgtAFT+E0PjxqAe0tiFz8HCduOfSNcgsC5j7Bikt3fPhfsffQ/7BVxf/dFvmDsfMC9/1O8918KfJB9NIX//tO/vifvnkWyEDseL57K9k+SFn9CuxyZANhAMWShW4+ZPmg48g3cLAQtGCB+z6yfNBz/Pt/90UBKAajA6gFn8guKoi04CPZFoStJiKIFnrsJduCyr2HCVrgssDdG9OC0z87iMWx65qO4UqmTgvcmqnSCgElRVBqAeLPYAwMFmSXAwD9Y3273XId6QAAAABJRU5ErkJggg==">';



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
            Image::make('image')->disk('public')->path('PackageCategories/'.Carbon::now()->format('FY'))
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
