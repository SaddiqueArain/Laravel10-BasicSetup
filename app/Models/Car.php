<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Passport\HasApiTokens;
use Laravel\Sanctum\HasApiTokens;

class Car extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable=['name','model','color'];
}
