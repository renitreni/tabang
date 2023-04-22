<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        "agency_id",
        "fullname",
        "status",
        "arrival",
        "departure",
        "FRA_id",
        "employer"
    ];
}
