<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;

class UserPackageReservation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\UserPackageReservation';
    public static $group='Packages';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAB8klEQVRIx82UTygEURzH9yYuHMjFSVpJ4UqtZnaeHWv2yZ+Ui4McEBd/yoUk2puDAytKu2gR5V/+lBQu7i7cOLg42i2y2/bze2OX2dk3u2+Xg1efmmbe7/N97/1eY7P9h6EoSinSjYw6nc6JOO1/Ia5B0QkSQ8BERJKkut/I+5iEIzbyhhzh3Pqs5FjUk0Fshu1wWEhOCCmPrwyyDcGdOESOJpCDPMFlWjmltAAnvYvIersIzA25QFGSd4GNL063+uZMUv+kCo8bGsAZ1bmYd4Pa9DMHj1hK19wBEamZu1UN2jQlUTNoGSDL8pSo1Mxz0KMHMIdlgEqkOTZJVGqG1bqINGsZcO2tvWkiuQew2mtv3ZVlAGzZwwczju+C+0UHTNMyuF9ypMh43/TaoD1kHbBduQf7DT+SpS/Jg68xNSD+bW9FhvGgG7SACh6/Cv3r8gvxqxo/4LQiD47kHdEjWdttAQWlPJx+F78XcE47ReS3B1qSMDGM77g7gf22IhREMgWM4bFkClACzfxfBwqWk4SHBGIbVUl4TGLziIeELHrhLkHxkzEktlkN0YV8HfZMA0IBr9Y36pxWm0OMjP/miL5DjmkxnLb6UPjBaXI0pyZzgy66CuGstQPFI1/gM75jVzHra5rtYKtkR4HSsA4+G1f+CURRbYd03jQhAAAAAElFTkSuQmCC">';

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
            BelongsTo::make('User','user'),
            BelongsTo::make('Package','package'),
            BelongsTo::make('PackageHotel','package_hotel'),
            BelongsTo::make('CCurrency','currency'),
            BelongsTo::make('PackageStatus','package_status'),
            Currency::make('total_price')->sortable(),
            Number::make('adults_no'),
            Number::make('children_no'),
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
