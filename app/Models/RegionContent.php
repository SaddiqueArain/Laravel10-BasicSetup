<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionContent extends Model
{
    use HasFactory;
    public function roadmapstep()
    {
        return $this->belongsTo(RoadmapStep::class);
    }
    public function content()
    {
        return $this->hasMany(Content::class);
    }
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

}
