<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    public function userpayee()
    {
        return $this->belongsToMany(User::class);
    }
    public function userrecipient()
    {
        return $this->belongsToMany(User::class);
    }
    public function subscription()
    {
        return $this->hasMany(SubscriptionItem::class,'subscription_id');
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class,'subscription_id');
    }
}
