<?php

namespace App\Policies;

use App\Models\Advantages;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdvantagesPoliyc
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return Advantages::query()->get()->count() < 5;
    }

}
