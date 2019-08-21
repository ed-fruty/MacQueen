<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Contact extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Contact';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABF0lEQVRIx2NgoDUomXq4gZaYoWTakf+0xGALZu9/+P/Qi/9UxSAzh7EFux78/F8w6/T/4PodYBrEp6oFDSuv/ver2grHDauuosgvO/fuf/fWOzgxQQuK555BsQDER5bv2HgLRR4dE7Rg7tEX//2rt4EVg+h5x15QP5JXXXz/v3/7PTCNLkdxEBHCFAXR3id//rdvuPk/rnP//8Ca7WC6HWjgPqA4xUEEMjxj0lGsrsqYfAxuCdlBBHI5Pq+DgoaiIAIFBz6NcV37KQuitvU3/reuxY1B8qOF3f91Vz6A+cgYnyHIGKSXoAUwCWSMywJ0ddjMwVllwutrQtUiqN4FqcVZZeKqrEGaph92IFixA9XgazzQvNUCAGpffLY8Op9fAAAAAElFTkSuQmCC">';


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
            Text::make('email'),
            Text::make('mobile'),
            Textarea::make('message'),
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
