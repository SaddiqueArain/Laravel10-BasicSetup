<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'name',
        'description',
        'price',
        'sku',
        'quantity',
        'is_published'
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function gusers()
    {
        return $this->belongsToMany(User::class,'product_users');
    }
}
