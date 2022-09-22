<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{

    public $timestamps = false;
    public $table = 'role_user';
    protected $fillable=['user_id','role_id'];
}
