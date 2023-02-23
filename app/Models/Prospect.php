<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;
protected $fillable = [
'region_id'
];
    public function region()

    {
        return $this->belongsTo(Region::class);
    }
}

