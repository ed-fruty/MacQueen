<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class GeneralPackagesExclusion extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\GeneralPackagesExclusion';
    public static $group='Packages';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABsUlEQVRIia2Tz0oCURSHp+gVWrfqPQLfooXmulaGmruBpAxbVZDlTDFgJURomX9IMyVHU3QYKwoSLYpq0SKKogj0NFcQRufOeEc98EPF6/m835xDUbKaczOgM1c0TQ9TpIV+tL4bgmi6oBl0RgYRKYAhYkCcL0G3QmfQ2cBJpvlqd3tLRBC9gIb0/jCRbd2kOHAAqnYIWxg4oBMi6eIHBlBL34DKw7PmdPUN6HYzYsATx0HOYNDUIj+fLFzCiu+IHPAhik0ITksknQcuFoad8zAcl1PAVwSIXhSBv671ryhfK4PFvwhGxtYWE2sHZ5AB85ZjtGdF06tLisaY3E8ys2O6FFUfX4CJBRXNFsIeCAhxHESYoOkRYkX1Rh2rBTVHhbuJyWszEyvyxaPYJloAKQliRXuZiEILyu1rtfl963OHrjdiRSHxTPGv1UoG+CEGoDnvQdEdMeD9+7M557oeMmtd07VoGym/HsDf1LZ1XAHAxbHMQiRbhlPxBmZ8TpJFAyNrt+AWzaUW1+a+5yCZz3GxhDDNzX+pNZY0NrDN9RTaULREaM7RKEr5RQ8UOe/U8g9uy1FHe2YnUAAAAABJRU5ErkJggg==">';

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
