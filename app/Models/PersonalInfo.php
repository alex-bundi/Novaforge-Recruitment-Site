<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApplicantInfo;


class PersonalInfo extends Model
{
    protected $table = 'personal_info';
    protected $primaryKey = 'user_id';
    protected $fillable = ['firstName', 'secondName', 'lastName', 'dob', 'email'];
    protected $dates = ['dob'];

    public function appliInfo() {
        return $this->hasOne(ApplicantInfo::class, 'user_id', 'user_id');
    }
}
