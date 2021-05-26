<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','doctor_id','date','time'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);

    }
}
