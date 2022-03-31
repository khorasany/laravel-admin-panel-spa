<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesList extends Model
{
    use HasFactory;

    protected $fillable = [
      'role_name',
      'slug',
    ];
}
