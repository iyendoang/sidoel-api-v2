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
        'name',
        'address',
        'logo',
        'token',
        'status',
        'start_date',
        'end_date',
        'last_login',
    ];

    protected $casts = [
        'last_login' => 'datetime',
    ];

    public function getExpirationTimeAttribute()
    {
        if (!is_null($this->end_date)) {
            $expirationTime = new Carbon($this->end_date);
            return $expirationTime->diffForHumans();
        }
        return 'No expiration time set';
    }

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
}
