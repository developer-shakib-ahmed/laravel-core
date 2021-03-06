<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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


    /**
     * Practice here laravel Accessors concept
     */
    public function getNameAttribute( $value )
    {
        return lcfirst( $value );
    }
    public function getEmailAttribute( $value )
    {
        return $value . '.bd';
    }


    /**
     * Practice here laravel Mutator concept
     */
    public function setNameAttribute( $value )
    {
        // This is work when new data add on database.
        $this->attributes['name'] = 'Mr ' . $value;
    }

}
