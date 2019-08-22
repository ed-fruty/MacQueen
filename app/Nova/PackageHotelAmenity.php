<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class PackageHotelAmenity extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Packages\PackageHotelAmenity';
    public  static $group='Packages';
    public static $icon ='<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAC6klEQVRIx92VXUiTURzGz0VZurRpzlA2L1JDq4um9ImlkqEDtSgQqYWJFFhpmDXNFF3GpiIrCiL7IMPsJrMS+8BMu5iTRKk0M5I0y/ILy4+pGbWn95y5teXclkEXHXjgec/ePb/z/v//dyPkf1tiTipOxbOIfhY013CHhX6bx4RZrTqh/A0sKrtFx90zxd3LmwtgmUtYCrzzP8Jb8R6iU93wVvawa9+iXiyflmdUJvjuwiZXgUj9u3iL3e5xORKbAPeEGjhHXIOnrAXxFSM40zhll1QN41gVEvOVy3KyChAkqcHfcQtex9sgq9baDaDampAOmmW9RCYyALYUtmH9yefM7ynpZl5WNYT0+0PMS6922w/wOKCBa+wdeGW+MgJ8UjUQ7HvCfITqNfMHy/twqLyf+QhVu/0A0x4YANnVwzjx8AvzeXVa5gvrJ5iop3t2A+gECXPfQqT4YAQklvWw0lB/pHKQefnjUchrx5ine3YDvLiTe3CNFuZ0/LsS0VPGXuxkPuX2APM5NSPIrRllPqWi/w+eIOMlliY/ZWUyAGiNaTmoV6rHmS9qmGTKe/QZZx904ZxmxADwtwRYzQvaBXdpqZmO3v00a4lk19tRnySFNsQR2ETwPcwB9ZF+WMkjvZYgbvMEvoML/MInfynsW9qNFyw0WNECcVYz83FX3iE0oxYD23xYMKLcAU0VsH8tux7ZSBC4iPRzmXxbv0/JaSWaH5be2NZjifpwqp0isJURbdxrEhMd93253YB1uc+wIr1R/wTFHRgPdbIKoAp0Jl12A0x7EKdUmwXNBohZQiZsAZSHL9Wx0AJucuj0UH9aPcwaagyLXAyUFQDSADNAsAtrttWVL8mrRPzNvhlq3isxB5QqgN3+xr3uNUQ3n5DztgB01C6QmX+dlwMciXZ4wzRguycw0AOkhuvHNZgg0o1McveJbAGswoO4UaTTYloWenKJPjz8b8INi89JLnYmndFcQ2nNp8tiPPlP349Vu+7M7VkAAAAASUVORK5CYII=">';



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
            BelongsTo::make('PackageHotel','package_hotel'),
            BelongsTo::make('GeneralPackagesHotelAmenity','general_package_hotel_amenity'),
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
