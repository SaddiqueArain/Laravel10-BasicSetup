<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Appointment extends Model
{
    use HasFactory;

    protected $casts = [
        'start_time' => 'datetime',
        'end_time'=>'datetime'
    ];

protected $fillable=['communication_type','token','start_time','end_time','total_time'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
