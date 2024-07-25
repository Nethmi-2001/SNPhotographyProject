<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Laravel\Fortify\TwoFactorAuthenticatable;
//use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
  //  use HasProfilePhoto;
    use Notifiable;
    //use TwoFactorAuthenticatable;

   
    protected $fillable = [
        'location_id',
        'location_name',
        
    ];
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
  //  protected $fillable = [
    //    'name', 'email', 'password',
    //];

    public function photographers()
    {
        return $this->hasMany(Photographer::class);
    }
}
   
    
    