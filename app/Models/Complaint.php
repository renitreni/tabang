<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'user_id',
        'full_name',
        'birthdate',
        'gender',
        'passport_no',
        'occupation',
        'email',
        'contact_person',
        'contact_1',
        'contact_2',
        'complaint',
        'longitude',
        'latitude'
    ];
}
