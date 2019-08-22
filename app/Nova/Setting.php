<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Setting extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Setting';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAABmJLR0QA/wD/AP+gvaeTAAAEW0lEQVRIx7VWa2zbVBQu4yHxGqCBEGIgJCQk/iAhJoY0EA8JIX4hJIb4AfvBD/gzNEYTx+mLVJS2sZ00faydazuxnbRN3ZQqS9quol1p1422EI2+JrZsQmI8VokVOrFqGosP59ykVTJgLF1n6chO7r3fd79zv3PskpINuHhR/RMDKNy1wQdKbtS107Ju5kVlZZWsvMZ4eMPAeZ/6tKtefrQE4CaXpO7hRW1xlYiFpC0jucfjsW4rleT7XZL2/LqIEOEWBJxjSgRtjsArGw27JToIWvwQtFlDUN3SYWdJ1ZN4X+IF9aynKbJ5PWezO1+FGPwCEkfnYWDq+FokJxcgEElA/jyXqIpFk5V5tZdx8QKmyq5qDttJJIpPzIDfiENVU9gWkLxv/Bj0Ty1ArRy1aR7OP+OWlLfWlUp3g7qDdtvWPcSU+PS+VQWUNrtW7rbp/2B8NKcq+O512Fx7k0BCB8YYWWVAz/CCMsvGJC1BY5TarqHJnGHUvesmcwvBFwlEjn3JyOoUixx42SVqPW5RvVDdHMnQ/3pyPKtM0Hati4jzKltRRSedRU1rlz2AZoiNpuCz1k7mwE+bwpno8BTbhKj15tKrHSkTlaeuCiw6zO2C0zy9Gl4ustUtKJ/nu6ylaxDNkHVhfGJ2zZFK30iBG1Fxx/+QhV4SnQasRh0feozzanfj4l8YgIQ1hPe6dgv0xBh0D0+D2X94TZGbFbeawbhQ7gs+kl+smyjoeZ/Hukt0GJWSUz+bTya6jLTIGbvL0SCcpLzqaQjdiwWrYFozBR0kGzHqkbi5bf84M8FpvC869VS9w3xH4owTBN5cEbXbanpB8yZgX3UMAmWdNiN1GEekUvM9vKcx1a+wcxSVi2u90as++5/pavooshlBfiUgIaeiP/oNpOf+gFML59fixMzv0KOOQb5aPMtZayc14mvs+pLTrMoHMAODDPzY0Z/BkkchKCYhph2G+elFODV/Hvaj2kJCfRc1Z15SnqGg/nmV5irf4XXoNZhG8LvCcBIVpcZ/xOcIpY3iHIE2VnRmiPB46jcQORMkp3EZY4/8gXxrUfXj5cxtBNjVOsJUmY0HCewS7npH1pn62zTeiwppnNTS71q3saXoYpVKjddp8XDfDANr8Vg2Ou/bglLgzKWQlGTjcXOSkeEmnyyazMeFnqPFMWWMgem+AQJb8X1iPJF1a/gFSmlP+1dsPBw4yMjQoQ8W+0LchDX0IRrF9rs7GNjXI6cRjM7FXKGSQFV/+fmwTab5/rtz7MzQ+pcw3iguhVe40crtngh1/wBLaaRxCFITZwrOK9+N10xGqcBFy/kAhw7MF9QYRXp+GRId0wVEaKIf/Hut24tSh7tz4OKfsm3KXCQgubYPQr5+6N4/ApqQBOwmrINgh0nj/Gp8XsLn4t/A9CWEredOem74OPwQOrEdd33xChXL2C+99S75HppXx3fct2GfbFJp8LWCs6mIPl5yo65/e8VcL+bfd/Lvp/6f7gQAAAAASUVORK5CYII=">';

    public static function authorizable() { return true; }
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
            Text::make('email'),
            Text::make('facebook'),
            Text::make('twitter'),
            Text::make('instagram'),
            Text::make('mobile'),
            Text::make('address'),
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
