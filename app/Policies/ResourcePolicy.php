<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Laravel\Nova\Http\Requests\NovaRequest;

class ResourcePolicy
{
    use HandlesAuthorization;

    public function viewAny($user)
    {

        // Only admins can view the resource list
        return $user;
    }

    public function view($user, $model)
    {
        // Only admins can view individual resources
        return $user;
    }

    public function create($user)
    {
        // Only admins can create new resources
        return $user->is_admin;
    }
//
    public function update($user, $model)
    {
        // Only admins can update resources
        return $user->is_admin;
    }
//
    public function delete($user, $model)
    {
        // Only admins can delete resources
        return $user->is_admin;
    }
//
    public function restore($user, $model)
    {
        // Only admins can restore deleted resources
        return $user->is_admin;
    }
//
    public function forceDelete($user, $model)
    {
        // Only admins can force delete resources
        return $user;
    }
}

