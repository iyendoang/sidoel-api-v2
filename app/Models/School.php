<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'nsm',
        'npsn',
        'level',
        'name',
        'address',
        'logo',
        'token',
        'status',
        'start_date',
        'end_date',
        'last_login',
        'expiration_time',
    ];

    protected $casts = [
        'last_login' => 'datetime',
        'expiration_time' => 'datetime',
    ];

    public function getLogoAttribute($logo)
    {
        return asset('/storage/schools/' . $logo);
    }

    public function getLastLoginAttribute($value)
    {
        if (is_null($value)) {
            return 'never logged in';
        }
        $lastLogin = new Carbon($value);
        return $lastLogin->diffForHumans();
    }
    public function getExpirationTimeAttribute($value)
    {
        if (is_null($value)) {
            return 'not found';
        }
        $expirationTime = new Carbon($value);
        return $expirationTime->diffForHumans();
    }
}
