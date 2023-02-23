<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentType extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class,'appointment_type_id');
    }
    public function media()
    {
        return $this->hasOne(Media::class);
    }
}
