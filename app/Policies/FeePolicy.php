<?php

namespace App\Policies;

use App\Models\Fee;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FeePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Fee $fee): bool
    {
        return $user->isAdmin() || $user->id === $fee->user_id;
    }

}
