<?php

namespace App\Nova;

use Carbon\Carbon;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class PackageHotel extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\PackageHotel';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';
    public static $group='Packages';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAA10lEQVRIx2NgGFZAruuJj1z703JcWL7jaYlM32Mh8i3oePoDiP/jx88qKLEAbIhYxmEwBrEdZr/+H7z8HRynbfy4e8LJn+W4cP/JH94ELeB1XwjGIHbviR//J5z6SQr+QZIPSDQcjAlagIxhmkRTD4AxiB084w6YDaLR5YiyADmI6GYBzYMI5FqYiws3vAazQTS6HFEWYItkmgcRzX1AlTiQrrlxBB1TNYikyi42oGOqWoANUDWI8FlAlUjGZwHNg4hmPija++0IqZgkC1K2fm0gFQ+vhgQAbwV3AO9KYT8AAAAASUVORK5CYII=">';


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
            BelongsTo::make('Package','package'),
            BelongsTo::make('GeneralPackagesType','general_package_type'),
            Text::make('name')->sortable(),
            Image::make('default_image')->disk('public')->path('PackageHotels/'.Carbon::now()->format('FY')),
            BelongsTo::make('Country','country')->sortable(),
            BelongsTo::make('City','city')->sortable(),
            Place::make('address'),
            Trix::make('description'),
            Text::make('long'),
            Text::make('lat'),
            Number::make('rate')->rules('numeric','max:5','min:0'),
            HasMany::make('PackageHotelImages','package_hotel_images'),
            HasMany::make('PackageHotelAmenities','package_hotel_amenities'),
            HasMany::make('PackageHotelRooms','package_hotel_rooms'),
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
