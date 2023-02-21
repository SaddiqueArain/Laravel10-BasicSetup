<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = false;
    protected $table = 'users';
    protected $fillable=[
        'role_id',
        'region_id',
        'stripe_account_id',
        'stripe_onboarded',
        'account_status',
        'current_roadmap_step',
        'photo',
        'full_name',
        'email',
        'phone',
        'password',
        'gender',
        'pronouns',
        'company_name',
        'job_title',
        'timezone',
        'tfa_enabled',
        'social_linked',
        'social_twitter',
        'social_instagram',
        'social_other',
        'availability_settings',
        'logo',
        'primary_color',
        'secondary_color',
        'billing_address',
        'last_login'
    ];



    public function regions()
    {
        return $this->belongsTo(Region::class,'region_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
