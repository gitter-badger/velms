<?php

namespace Velms\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
    }

    public function before($user)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }
}
