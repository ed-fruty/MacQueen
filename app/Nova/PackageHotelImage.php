<?php

namespace App\Nova;

use Carbon\Carbon;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class PackageHotelImage extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\PackageHotelImage';
    public  static $group='Packages';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAA/klEQVRIx2NgoDeYcPJnObG4//h3BdItOPXzPzF4yZXf/yef/vmo//QPJZpYsPPB7/+nX/75P+UMiZaQYsHDr/9It4RUC0i2hBwL4Jac/fmAahbgwqMW0M6C6h3vMcQy1r3533zwK+UWlG97+18y49D/0i1vUMQN2m6BLaHIgu6j3/6rl5z4L5p64L9q8fH/XUB+8bb3YEyVIHLrvQ42HIade679V62/9l+l9ur/lkPfKLMgd93L/2JpB1AskCg6+1+y7BIYW3Tf/t938gf5FkTOffDfb8otOHbtu/HfsOXaf/OOm/8D5j4B4+rdn0bzwagF6Bac/tlBCaZ7KwUArURIN5BVqd4AAAAASUVORK5CYII=">';


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
            BelongsTo::make('PackageHotel','package_hotel')->sortable(),
            Image::make('image')->disk('public')->path('PackageHotels'.Carbon::now()->format('FY'))
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
