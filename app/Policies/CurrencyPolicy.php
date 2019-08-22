<?php

namespace App\Policies;

use App\Admin;
use App\User;
use App\Currency;
use Illuminate\Auth\Access\HandlesAuthorization;

class CurrencyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any currencies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the currency.
     *
     * @param  \App\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function view(Admin $user, Currency $currency)
    {
        return true;

    }

    /**
     * Determine whether the user can create currencies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the currency.
     *
     * @param  \App\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function update(Admin $user, Currency $currency)
    {
        return false;

    }

    /**
     * Determine whether the user can delete the currency.
     *
     * @param  \App\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function delete(Admin $user, Currency $currency)
    {
        return false;

    }

    /**
     * Determine whether the user can restore the currency.
     *
     * @param  \App\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function restore(Admin $user, Currency $currency)
    {
        return false;

    }

    /**
     * Determine whether the user can permanently delete the currency.
     *
     * @param  \App\User  $user
     * @param  \App\Currency  $currency
     * @return mixed
     */
    public function forceDelete(Admin $user, Currency $currency)
    {
        return false;

    }
}
