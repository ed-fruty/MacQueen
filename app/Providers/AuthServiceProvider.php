<?php

namespace App\Providers;

use App\Currency;
use App\MacqueenProviders\Provider;
use App\Packages\PackageStatus;
use App\Policies\Admin\PackageStatusPolicy;
use App\Policies\Admin\ProvidersPolicy;
use App\Policies\CurrencyPolicy;
use App\Policies\SettingPolicy;
use App\Setting;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//         'App\Setting' => 'App\Policies\ModelPolicy',
        Setting::class=>SettingPolicy::class,
        PackageStatus::class=>PackageStatusPolicy::class,
        Currency::class=>CurrencyPolicy::class,
        Provider::class=>ProvidersPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
