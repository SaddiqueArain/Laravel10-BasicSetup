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
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
//    public $timestamps = false;

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

    public function userrolemap()
    {
        return $this->hasMany(RoleUser::class);
    }

    public function agentagreement()
    {
        return $this->hasMany(AgentAgreement::class,'agent_id');
    }

    public function entrepreneurdocument()
    {
        return $this->hasMany(EntrepreneurDocument::class,'entrepreneur_id');
    }
    public function entrepreneurdocumentagent()
    {
        return $this->hasMany(EntrepreneurDocument::class,'agent_id');
    }
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function roleusers()
    {
        return $this->belongsToMany(RoleUser::class,'role_user','user_id','role_id');
    }


    //Transaction

    public function userpayee()
    {
        return $this->hasMany(Invoice::class,'payee_id');
    }
    public function userrecipient()
    {
        return $this->hasMany(Invoice::class,'recipient_id');
    }
    public function userappointment()
    {
        return $this->hasMany(Invoice::class,'appointment_id');
    }

//Appointment tables
    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'entrepreneur_id');
    }
    public function appointmenttype()
    {
        return $this->hasMany(AppointmentType::class,'agent_id');
    }

    //////scoreboard

    public function scoreboard()
    {
        return $this->hasMany(Scoreboard::class,'user_id');
    }

    ////media
    public function media()
    {
        return $this->hasMany(Media::class);
    }

    ////subscription

    public function usersubscriptionpayee()
    {
        return $this->hasMany(Subscription::class,'payee_id');
    }
    public function usersubscriptionrecipient()
    {
        return $this->hasMany(Subscription::class,'recipient_id');
    }
}
