<?php

namespace App;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait Likable
{
    public function like($user = null)
    {
        $user = $user ?: Auth::user();
        return $this->likes()->attach($user);
    }

    public function likes()
    {
        return $this->morphToMany(User::class, 'likable')->withTimestamps();
    }
}
