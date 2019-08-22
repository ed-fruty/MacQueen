<?php

namespace App\Providers;

use App\Nova\Admin;
use App\Nova\Blog\Article;
use App\Nova\Blog\ArticleTag;
use App\Nova\Blog\BlogCategory;
use App\Nova\Blog\GeneralArticleTag;
use App\Nova\City;
use App\Nova\Contact;
use App\Nova\Country;
use App\Nova\Currency;
use App\Nova\GeneralCurrency;
use App\Nova\GeneralPackagesHotelAmenity;
use App\Nova\GeneralPackagesInclusion;
use App\Nova\GeneralPackagesType;
use App\Nova\MacqueenProviders\Provider;
use App\Nova\MacqueenProviders\ProviderCreditDeal;
use App\Nova\Metrics\Contacts;
use App\Nova\Metrics\Packages;
use App\Nova\Metrics\UserPackageReservation;
use App\Nova\Metrics\UserPackagesReservation;
use App\Nova\Metrics\Users;
use App\Nova\Package;
use App\Nova\PackageCategory;
use App\Nova\PackageCurrency;
use App\Nova\PackageExclusion;
use App\Nova\PackageHotel;
use App\Nova\PackageHotelAmenity;
use App\Nova\PackageHotelImage;
use App\Nova\PackageHotelRoom;
use App\Nova\PackageInclusion;
use App\Nova\PackageStatus;
use App\Nova\PackageType;
use App\Nova\PrivacyPolicy;
use App\Nova\Setting;
use App\Nova\TermsCondition;
use App\Nova\User;
use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;
use Anaseqal\NovaSidebarIcons\NovaSidebarIcons;
class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Users(),
            new Contacts(),
            new Packages(),
            (new UserPackageReservation)->width('1/2'),
            (new UserPackagesReservation())->width('1/2'),
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaSidebarIcons,
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /**
     * Register the application's Nova resources.
     *
     * @return void
     */
    protected function resources()
    {
        Nova::resources([
            Admin::class,
            User::class,
            BlogCategory::class,
            Article::class,
            GeneralArticleTag::class,
            ArticleTag::class,
            TermsCondition::class,
            PrivacyPolicy::class,
            Country::class,
            City::class,
            Contact::class,
            Setting::class,

            PackageCategory::class,
            GeneralPackagesType::class,
            GeneralPackagesInclusion::class,
            GeneralPackagesInclusion::class,
            Package::class,
            PackageType::class,
            PackageInclusion::class,
            PackageExclusion::class,
            PackageHotel::class,
            GeneralPackagesHotelAmenity::class,
            PackageHotelAmenity::class,
            PackageHotelImage::class,
            PackageHotelRoom::class,
            \App\Nova\UserPackageReservation::class,
            PackageStatus::class,
            Currency::class,
            Provider::class,
            ProviderCreditDeal::class,







        ]);
    }
}
