<?php

namespace App\Nova\MacqueenProviders;

use App\Nova\Resource;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProviderCreditDeal extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\MacqueenProviders\ProviderCreditDeal';
    public static $icon='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAAFAUlEQVRIx7WWTVAbZRjH8aTjzYMXHS968O7Bqzp6V2e86EVPjm2BamlpUgKEhGSzm92QxlA+SjZfJNlsPvgIhM/SEgq0gVKgKYXyJZRS0hYhpcXSWv7uuwyUNERbR3fmmdndmX1+7/P+/8/zbk7OK14Vh/j3c/6vi861vcP97L7AaJoXuQLPIHn+z5Krf7C/Ycq1H2aPe2eopt/WteE5qMWpbaMycJ87wh+y5Flef+WkNT/WvGk+avuQzbV/xR11VrMF3hm6Nj5HtS3DqG0FzZ6DQd2M0vA0dLWX/2AL/ctsvqvGdIT/knxHvs+a3JTv/Jr7pX6BU4pTrDaSYKz9N6iWpQ2qKwnG0gejLgp91wrUFx+gpHEWBk0LdFwPShpmoQ5Nb5efGdigqbZ7xuKGJHdCuFshLTIDYiwUfFT7MnSxddC2YTDmXrDSihlp5VTzAnRDj+Vghjeh6rmHIinUwgT0dAc0zlGUeRPQVg1C1XZbqnIGEiyaCTkZqKVaFqGTVmqQVqfvTkIX39xLToIdfQJ+BqgY2ZQh+6NY+lbtSUDVsYxS/ySB+DMg3HGv3hCaSUt6UJjHtlB8/j5U0VuwMFFUqoMo919LA6rrr4FVhc2ZkKOufIMw+Tzh5U1QkUXoY6k0CNGEAKyaMBZGRzAabQdbN5gG0dhHwB3zHsuAsHn8t7Rr7M/dZCbbEBz6EFymCM5oG2A9fQ5G9zi04dkdwPhV3BnrBa/1oySykAbR1g1Bsv13mZrk2j+lLbGNXYi+bx0WczfEqjasLdxA8mYCo90DaLR37QDGe2Ev96MseDNDH31F7zNTHv9J5nYd5t9j1U1rsoNGtsCNPZFhxFmkkoHWPmytzkoxjfXpPjiyAEjQ6uanpp+c7x7YK2yhmNTFdyqhhp/roO9PwaIQsDp/HanZi1ib7MHZMv+BgKKeu2CUgUdZG5JVBFqI2HJiqV84fghU4zx+5TpxLXYJt0fOI+ZrkiGBiqBsW1mD/nUY4ht7vcOUNMWyT9g8/gvG2JUiEDo0DfMxN0RLBJfaLmIq1o06jQirIYJEZ6sM07rH5MTlA1IDxyXXtS7CQLU/4/Kdn2WFIAevSbNokVQhV9N5B1a6FZca21Cl8slmKOu+B5vGj+tdUVgru1EkjR1j5QVUqQV4zH54DPXPqhWOpTOF9hMkXxZdfN8Y6c6H+/vlrCaA2mKffE/6hOHj6HI0orY8BIsujHiziMeLYcwPirg7HsCj+TDOuzwPqk86G7OCuJP+QUrqh71xEpzE6QK3ZIAHMoSIWy0Bqou9GIr4sXUrjPF2AbWnnHCUuTA3IMrv2us8KWsB//2BEEse/zarFFepzpW0CbDb8fKsal9CValPrmBLCnupC1MXRMz1ixBotwxJTYcIeCKrPswp4SNWIT7USwlfHCu7A9Fr3lkxCYFxw0O50GnzYnUiuPe+TuW88/dHblHDx+ypYErfsZIJiS6hnhP2kt2+EsDVqIB+0Yuw2b0P4lr+x5PSckL4gFUGklTDXBqE9EO1wrVNRCbbRbTosHnQ6/HJVRHA/UQQNUrH8EsdydQhz1tGRXCKrk9sE4hWmrJMccNa5XG7mriIJCTOqte5EKxwIzkWlMEi6/6dy3d8/tJnP/lhkM6IPqa06SmjjUySZ2JPYlPiIiLyymhQmgYhuQICqFI6df/q74U478UGJjatUTgmiMhEA7JF+yv4Cyu16wkZthobAAAAAElFTkSuQmCC">';
    public static $group='Providers';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
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
            BelongsTo::make('Provider','provider')->sortable(),
            Text::make('title')->sortable(),
            Textarea::make('description'),
            Date::make('date')->sortable(),
            Currency::make('credit')->sortable(),
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
