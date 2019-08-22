<?php

namespace App\Policies\Admin;

use App\Admin;
use App\User;
use App\Packages\PackageStatus;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackageStatusPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any package statuses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(Admin $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the package status.
     *
     * @param  \App\Admin  $user
     * @param  \App\Packages\PackageStatus  $packageStatus
     * @return mixed
     */
    public function view(Admin $user, PackageStatus $packageStatus)
    {
        return true;

    }

    /**
     * Determine whether the user can create package statuses.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return false;

    }

    /**
     * Determine whether the user can update the package status.
     *
     * @param  \App\Admin  $user
     * @param  \App\Packages\PackageStatus  $packageStatus
     * @return mixed
         */

    public function update(Admin $user, PackageStatus $packageStatus)
    {
        return true;

    }

    /**
     * Determine whether the user can delete the package status.
     *
     * @param  \App\User  $user
     * @param  \App\PackageStatus  $packageStatus
     * @return mixed
     */
    public function delete(Admin $user, PackageStatus $packageStatus)
    {
        return false;

    }

    /**
     * Determine whether the user can restore the package status.
     *
     * @param  \App\User  $user
     * @param  \App\PackageStatus  $packageStatus
     * @return mixed
     */
    public function restore(User $user, PackageStatus $packageStatus)
    {
        return false;

    }

    /**
     * Determine whether the user can permanently delete the package status.
     *
     * @param  \App\User  $user
     * @param  \App\PackageStatus  $packageStatus
     * @return mixed
     */
    public function forceDelete(Admin $user, PackageStatus $packageStatus)
    {
        return false;

    }
}
