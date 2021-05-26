<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorEducation extends Model
{

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
