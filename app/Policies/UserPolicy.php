<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $CurrenUser, User $user)
    {
        return $CurrenUser->id === $user->id;
    }

    public function destroy(User $CurrenUser, User $user)
    {
        return  $CurrenUser->is_admin && $CurrenUser->id !== $user->id;
    }
}
