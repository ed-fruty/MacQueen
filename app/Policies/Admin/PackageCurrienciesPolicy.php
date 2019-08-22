<?php

namespace App\Policies\Admin;

use App\Admin;
use App\User;
use App\Packages\PackageCurrency;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackageCurrienciesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any package currencies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        return true;

    }

    /**
     * Determine whether the user can view the package currency.
     *
     * @param  \App\User  $user
     * @param  \App\PackageCurrency  $packageCurrency
     * @return mixed
     */
    public function view(Admin $user, PackageCurrency $packageCurrency)
    {
        return true;

    }

    /**
     * Determine whether the user can create package currencies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return false;

    }

    /**
     * Determine whether the user can update the package currency.
     *
     * @param  \App\User  $user
     * @param  \App\PackageCurrency  $packageCurrency
     * @return mixed
     */
    public function update(Admin $user, PackageCurrency $packageCurrency)
    {
        return true;

    }

    /**
     * Determine whether the user can delete the package currency.
     *
     * @param  \App\User  $user
     * @param  \App\PackageCurrency  $packageCurrency
     * @return mixed
     */
    public function delete(Admin $user, PackageCurrency $packageCurrency)
    {
        return false;

    }

    /**
     * Determine whether the user can restore the package currency.
     *
     * @param  \App\User  $user
     * @param  \App\PackageCurrency  $packageCurrency
     * @return mixed
     */
    public function restore(Admin $user, PackageCurrency $packageCurrency)
    {
        return false;

    }

    /**
     * Determine whether the user can permanently delete the package currency.
     *
     * @param  \App\User  $user
     * @param  \App\PackageCurrency  $packageCurrency
     * @return mixed
     */
    public function forceDelete(Admin $user, PackageCurrency $packageCurrency)
    {
        return false;
    }
}
