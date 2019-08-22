<?php

namespace App\Nova\MacqueenProviders;

use App\Currency;
use App\Nova\Resource;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Provider extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\MacqueenProviders\Provider';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAD+UlEQVRIx7VVW1NbZRRF3/wD+qbjr9BX/4Azvvjqo85QrJe2Q82d5nznmnA7UAhtQmmBkoRcSMiFNIFAgk0gdSpKCgUKtVChEAQrJaXt8jsHCQOhTjPiN7PnnJyZvVb2+tbeu6qqgtNwtuM9JapO+6AKb1lqrn0p1bpmBY1nTXlXvp0KuKXG8bH1m+vDgpyeJ4O/weCcAZFTO9K57nGx2v5RRf9SPNP1oZJkre78XKpxMNJ33XdEEsmT6OMi3zoOQYqDcBGQhhEYPPPgxNimeL7vnuVMJ1FylFwF48TqpO+7raJxIC9Yhqf4q7lZLrD4B7m1Cv7KBETTALj+OTATu9AknsB0Ywq83gdzSxq6wCJMztmX5o6JHdI4WuCY0Lp4obe5nKDWmSapbbD+RYgkDPFSEGL9MFgFOPtMBedyRXDZP1USTXwVpp5fYG7PQN9/H5x5EIa+PHSRZQh6T/4EAleIJNYp2A6Y23+pgMfjcv4lbDMvYEhuUJI16IJL0MZ+Vwm1sVWVVBdYgmDw/1h+mbWuG2xk5UTggyCTu6hLbUIbXUEzG4CrLYw23r9f0T+h98yBN/qDJ0nUwAYelsAk9wyaW0fB07IJTTz4roDLjB/zuRyWfxqBTRo4QqDIJOm8V8srON97jnPNloCaLVF42gaRCafgtkVhY/1okcKQL3kxN5nDyt0k7Ewf9P6FIwR1XT9DrHUZygm+vvYJb8s+VcBZKoVysZbuKdiIDwu5O3i+uYDtlRlsPPhVBXeYnTB654+AK8G0pl9R235aRiB+1fUudc+qQlB/dw8sdYyq++gWmupvIdoTR3HjPrbm04javaijDjoOrgRHwsXGs13vn9hs0kXXowNLqs8MdVR2F03WGPLjWTyZHkVhOoHJQAC8faIEahzdKFlX0Hq2X9vNgsZ9mfUuqASNchLyxV7IJg+SviQWbsdh099E4roPDzNDsDWE9pturIDW6T1oR9bVvuDrgn2vJVBHBYkUVGloF7eIYQQcQ7iXjKGD9YJJbtLL9mApE4WduA6tScH35YnsSdVXPvjXmSRpPGPs4KOSm5ocGTgtfZA7J9TfelrhTYsbzvp+aMPLh/akQ1AwBabfaOaLGk+h1M302U6l6WiKlmaRLCdgN/TA4J491N7of/7Gu0LQ9F/gm1LFgyrY2BqVp1Ai0A49BnFMquNCtaZ1GDwTMle2B35wuvn2TPH4uCjzffMYeDYUqnjRGI3Gt0VNf5A2355i1eME2jgFl9MQmMHUf9podHDV0x3xTO2JAwKqObEkwJNw+FRWp2QK1ohM6ClJb6v6cyT0iueHpFNd/KLJ95mo827xOu8LXop+UfV/HOu3zneUqCTnb+/v2w4MDmqwAAAAAElFTkSuQmCC">';
    public static $group='Providers';
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
            Number::make('commission_rate'),
            Number::make('remaining_credit'),
            BelongsTo::make('Currency','currency','App\Nova\Currency'),
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
