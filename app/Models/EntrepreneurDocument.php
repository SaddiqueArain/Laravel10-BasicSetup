<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntrepreneurDocument extends Model
{
    use HasFactory;
    public function userentrepreneur()
    {
        return $this->belongsTo(User::class);
    }
    public function useragent()
    {
        return $this->belongsTo(User::class);
    }
    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
