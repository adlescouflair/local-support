<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        "id",
        "name",
        "type", 
        "description", 
        "website",
        "email", 
        "phone"
    ];


    public $incrementing = false;
    protected $keyType = 'string';
}
