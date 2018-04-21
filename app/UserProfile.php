<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $guarded = [];
    
    public function scopeFilter($query, $filter)    
    {
        if (array_key_exists('name', $filter)) {
            $query->where('name', $filter['name']);
        }

        if (array_key_exists('gender', $filter)) {
            $query->where('gender', $filter['gender']);
        }

        if (array_key_exists('marital_status', $filter)) {
            $query->where('marital_status', $filter['marital_status']);
        }

        if (array_key_exists('address', $filter)) {
            $query->where('address', 'like', '%' . $filter['address'] . '%');
        }

        if (array_key_exists('birthday', $filter)) {
            $query->where('birthday', $filter['birthday']);
        }
    }
}
