<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadmapStep extends Model
{
    use HasFactory;

    public function regioncontent()
    {
        return $this->hasMany(RegionContent::class,'roadmap_step_id');
    }
    public function content()
    {
        return $this->belongsTo(Content::class,'roadmap_step_id');
    }
}

