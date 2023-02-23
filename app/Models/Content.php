<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    public function roadmapstep()
    {
        return $this->hasMany(RoadmapStep::class);
    }
    public function regioncontent()
    {
        return $this->belongsTo(RegionContent::class,'original_content_id');
    }

}
