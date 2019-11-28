<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserGroup extends Model
{
    protected $table = 'user_group';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
