<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentAgreement extends Model
{
    use HasFactory;
    public function useragent ()
    {
        return $this->belongsTo(User::class);
    }
    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
