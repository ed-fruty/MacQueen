<?php

namespace App\Nova;

use Carbon\Carbon;
use Hubertnnn\LaravelNova\Fields\DynamicSelect\DynamicSelect;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Package extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\Package';
    public static $group = 'Packages';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLUlEQVRIx2NgoDeYcPJnObG4//h3BdItOPXzPzF4yZXf/yef/vmo//QPJZpYsPPB7/+nX/75P+UMiZaQYsHDr/9It4RUC0i2hBwL4Jac/fmAahbgwoPLgsjFz+E0Pky2BQFzn8BpfHjUBwPjg8x1b/53HvkGxlT1QcbaN/8nH/v8/0xd8f8v3hL/v7sL/T9bU/B/6uG3/8/V5P3/b8vwDoif/rdj6PivzcBGsg9Kt334f7q+BGQQCv7sI4Uh9t+GoZ1kH/Sf/Al2OYZh2PEzkn3Qd/IHdtdix4/JKirO1BURa0EXWRZMO/zm/+swHUKGX/pvzcBLdmE3Z/f9/29CtXAZfuW/JYM09mR6+mcHsXju7vv9z6NMr6OlnJX/HRgEqNoSARqcAMQ3QTS6HABHTlMbKXCoMgAAAABJRU5ErkJggg==">';



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
            Image::make('image')->disk('public')->path('Packages/'.Carbon::now()->format('FY')),
            Text::make('name')->sortable(),
            Trix::make('description'),
            BelongsTo::make('Country'),
            BelongsTo::make('City'),
            BelongsTo::make('PackageCategory'),
            Number::make('days'),
            Number::make('nights'),
            HasMany::make('PackageHotels','package_hotels'),
            HasMany::make('PackageInclusions','packageinclusions'),
            HasMany::make('PackageTypes','package_types'),
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
