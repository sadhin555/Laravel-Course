<?php

namespace App\Models;

use App\Events\UserCreatedEvent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $with = [
    //     'info'
    // ];
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // protected $dispatchesEvents = [
    //     "created" => UserCreatedEvent::class
    // ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function info() : HasOne
    // {
    //     return $this->hasOne(Info::class,'user_id','id')->withDefault([
    //         "address" => "Default",
    //         "zip_code" => "123",
    //     ]);
    // }

    public function info()
    {
        return $this->morphOne(Info::class,"infoable");
    }
    public function posts():HasMany{
        return $this->hasMany(Post::class);
    }

    public function skills(){
        return $this->belongsToMany(Skill::class,"skill_users");
    }

    // protected static function booted()
    // {
    //     static::created(function ($user) {
    //         info("I am from call back");
    //     });

    //     static::deleted(function ($user) {
    //         info($user);
    //         info("I am from call back deleted");
    //     });
    // }

}

