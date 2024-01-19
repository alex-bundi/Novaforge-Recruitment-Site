<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantInfo extends Model
{
    protected $table = 'applicant_info';
    protected $primaryKey = 'appInfo';

    public function persoInfo () {
        return $this->belongsTo('user_id', 'user_id');
    }
}
