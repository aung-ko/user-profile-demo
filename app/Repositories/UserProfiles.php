<?php

namespace App\Respositories;

use App\UserProfile;

class UserProfiles
{
    public function all()
    {
        return UserProfile::select()
            ->filter(request(['name', 'gender', 'marital_status', 'address', 'birthday']))
            ->get();
    }

}
