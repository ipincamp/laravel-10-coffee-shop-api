<?php

namespace App\Policies;

use App\Models\Cart;
use App\Models\User;

class CartPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Cart $cart): bool
    {
        return $user->id === $cart->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user, Cart $cart): bool
    {
        return $user->id === $cart->user_id;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Cart $cart): bool
    {
        return $user->id === $cart->user_id;
    }
}
