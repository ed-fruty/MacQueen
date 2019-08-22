<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PackageStatus extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\PackageStatus';
    public static $group='Packages';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAA9ElEQVRIx2NgGAWkgseFMpw0M/w/AwPjs1ql9f8bGJiobvizOuV0oOFbn9Up/Qfibc9qldNQ5cHiRGMMC942qPABJa5CFCiee9WgzUNVC6CGHAUa3gSkj9Ak/F+XqfOC2C9KxLn/hzIwj6ai0VQ0zFPRrMgd2jRLRXOitofOjtz2e07Etg7iUxHYYgcWZNe9K1fiB6o9AcIgNkhsdsS2cJDhQPx/dtTWBqJT0ZMGFRmwAUBNQM1/Zkduj4FZAjMc5nKw4RHb68lKRbOitpWDDUCyhCjDSUlF6JYQNJwcAA2q/1CDMcOcKkkR4RPquRyrT/C4HAApV2cQGRR5xQAAAABJRU5ErkJggg==">';
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
