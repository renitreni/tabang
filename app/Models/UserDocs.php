<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class UserDocs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nbi',
        'police',
        'birth_cert',
        'tor',
        'sss',
        'tin',
        'philhealth',
        'resume'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
