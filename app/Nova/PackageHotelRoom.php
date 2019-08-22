<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PackageHotelRoom extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\PackageHotelRoom';
    public  static $group='Packages';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAA8UlEQVRIx2NgGAXUAr7rAn181gecAuIvINp7bZA3tQ3/D8KnX5z5D2P7rg8IoIoF3usDTsMMXXBlEdwCID5JFQuABn2CGQoCSBZ8oroP0Cygjg9AEYrVgg3+XkQb8n8Gw38wns7QgMeSk0D8GUyTYjgxFlAMkC34v8PP+/923yf/t/s9/r/N15P6FoAM3u77H4ofzdZY3zBHfcN/IvGfOWob5tPSArAl+C0ABgvUkkfA4PIgw4L/OC34sLr4/8N9z1HwvuLT/6lmwY+FlmBLkPGj7vT/5+IjiMbnE0O+4Q4iKuEBtICCjAZOIANmwSjABQA8qAxwWHKiggAAAABJRU5ErkJggg==">';

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
            BelongsTo::make('PackageHotel','package_hotel'),
            Text::make('name'),
            Number::make('max_adult_no'),
            Number::make('max_children_no'),
            Currency::make('adult_price'),
            Currency::make('children_price'),
            BelongsTo::make('Currency','currency'),
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
