<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function invoiceitem()
    {
        return $this->hasMany(InvoiceItem::class);
    }
    public function userpayee()
    {
        return $this->belongsTo(User::class);
    }
    public function userrecipient()
    {
        return $this->belongsTo(User::class,);
    }
    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

}

