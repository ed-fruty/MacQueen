<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Currency extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Currency';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAADDklEQVRIibXVyU8TYRQAcBMvxpMnb148GGPi3cST/4PGk7KEgpRFpBvdpC1dmCltkRCFmM43My1SSncqa4EiaGllKS4sEhQs6MGIxoOJgfbZKWttC6GtX/Iyc+n79S0zc+pUHo+hBp2TFaIz+cyZcvQVSKWrpm7knKhRbrqPKc3zuMz0XMulpLpK4rahkryuYxMX4vdu5poTgElMCkzfua0M9IHS74WHDhvUE5YfCkNHRKMwreB8alXLIZdxLjnQXtp+9sQALqblmMGypVgYBPniEPBne6A25DyISSdwJxxQE7IDv42K4dVEyckrMFi2MwFcvx0wIf0Lq6O/8NpI4LUSoOWiMX0VydFVEMKcASYkXVaIt4tSc8xX1HUIBM0EYDzyU1MVcVNXha7lDCRi3AYNMjKqEqEou5OAgn4jqEVU5NgKtBJa2JhhBo/f+cCxPAF4uA8eTDqgaISCOz5jUmhE5M+sAd/HILxcmwJifgTmN97Ak9m+FIAJtZj8nRWgmxuA6chs4p6poHTUBO/Xw8Aeo1MQhYL8w7wBTgRg8dZsfvsAaGE0qUXexTGQB2wpiFiLovpKdDUJwKVmebohc0KufWj561sQT7mheBcoGCZgcX0OWCNkClKvRlFdBXXpoAKRSYrpLVvMU/xvBa92+9+99AJ8K5OgDDoguBqCwjjAJCsbTR264BGKqaSk4wCg6fO4zBzVPLOD2uMCwYwnaT3rXrsTA2aqYPl3eq+f8gDbnzqHPUAtQc6kNllvWU/jQnpTGeiFuoAb1AoaauP/9jAkCLogvDYDrTPetImTK0CutBvF9E7LJzcE/bYYb9gOwp5uEHpt+1vEDLkk3vfw2jQ0T3vSAy1HAEkQl/zMH7LFZMZO4I07gAEPP2gM9DTcmx2QDhJZu0CkT92anIDDUPx7ELnnQjv7jhNQ7D0CkJDO47NmgDQCtFnqMEKF2QhFcaS8Kw8VZIJYTmPi+1BmNcLdwTwC6SCWkwB5PcovsHeaKtHlRgH6zu4wgkj3H4C9YygnLspU1JK8AbVk8/u/GBmuNpi8JBAAAAAASUVORK5CYII=">';
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'currency_name_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'currency_name_en',
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
            Text::make('currency_name')->sortable(),
            Text::make('currency_name_en')->sortable(),
            Text::make('iso4217_alpha3'),
            Text::make('iso4217_num3'),
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
