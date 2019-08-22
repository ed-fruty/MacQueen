<?php

namespace App\Policies\Admin;

use App\Admin;
use App\User;
use App\MacqueenProviders\Provider;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProvidersPolicy
{

    use HandlesAuthorization;

    public function viewAny(Admin $user)
    {
        return true;
    }


    public function view(Admin $user, Provider $provider)
    {
        return true;
    }

    /**
     * Determine whether the user can create providers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the provider.
     *
     * @param  \App\User  $user
     * @param  \App\Provider  $provider
     * @return mixed
     */
    public function update(Admin $user, Provider $provider)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the provider.
     *
     * @param  \App\User  $user
     * @param  \App\Provider  $provider
     * @return mixed
     */
    public function delete(Admin $user, Provider $provider)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the provider.
     *
     * @param  \App\User  $user
     * @param  \App\Provider  $provider
     * @return mixed
     */
    public function restore(Admin $user, Provider $provider)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the provider.
     *
     * @param  \App\User  $user
     * @param  \App\Provider  $provider
     * @return mixed
     */
    public function forceDelete(Admin $user, Provider $provider)
    {
        return false;
    }
}
