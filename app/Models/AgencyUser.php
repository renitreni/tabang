<?php

namespace App\Models;

use App\Models\Agency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgencyUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'user_id',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }


    public function agency(): HasOne
    {
        return $this->hasOne(Agency::class, 'id', 'agency_id');
    }
}
