<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'doctor';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function experiences(){
        return $this->hasMany(DoctorExperience::class,'doctor_id');
    }
    public function educations(){
        return $this->hasMany(DoctorEducation::class,'doctor_id');
    }
    public function appointments(){
        return $this->hasMany(Appointment::class,'doctor_id');
    }
}
