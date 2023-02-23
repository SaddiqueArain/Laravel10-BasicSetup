<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function agentagreement()
    {
        return $this->hasMany(AgentAgreement::class, 'document_id');
    }
    public function entrepreneurdocument()
    {
        return $this->hasMany(EntrepreneurDocument::class, 'document_id');
    }
}
