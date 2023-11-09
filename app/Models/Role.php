<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    const APPLICATION_ADMIN = 1;
    const ORGANIZATION_ADMIN = 2;
    const ORGANIZATION_USER = 3;
    const USER = 4;


    protected $fillable = ["name"];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);

    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
