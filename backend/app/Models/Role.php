<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get the users for this role.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
