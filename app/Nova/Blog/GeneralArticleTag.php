<?php

namespace App\Nova\Blog;

use App\Nova\Resource;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class GeneralArticleTag extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Blog\GeneralArticleTag';
    public static $group='Blog';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABdElEQVRIx2NgGHHg/yGOmP8H2cqxY/aS/wdZDck3/CBHA9CQ/wTwr//7WQ2obDjbm/8H2PuAat5C+RXUdnkPRB17P9SCeioHC9AHYMM53pFkAZFhjs3CehoaToQFlBlOwALKDcdjASmG/9vK/f/3RIn/v9pkwfS/bdxI8hzxmIbv53AhyvAD7P9/tcr9/+Ju8v+LsxkCA/kgy3C7/gB7ETEWgA0HG2iFZgGcX4bdgr0c8kAD3hMKFrDLgYb9OXn0/681y8GGgmgQH2rJty/O5uI4CjJWI0R2x8S/J0rCXfxr+YL/IPD3xjUwDbMMiuPxlJa4LYEHDxT/vXYZYsntG/+/uJgjyZlXEiiSsVsCSi0IHyyE+uAqwgcwS1zM4ogo9zEtASVFYuLgs5uVGJGVC6YloKSINxW5mJWSWIOxmqGkrv1s9aCkCEktZsiWfPviZF5CXk12hFPu/yH2wv8HOBxhYqCkCEotX5zMykFhTnSwDDkAAFLsIvBF5behAAAAAElFTkSuQmCC">';


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
            Text::make('name')->sortable(),
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
