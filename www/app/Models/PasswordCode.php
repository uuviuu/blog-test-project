<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordCode extends Model
{
    protected $fillable = [
        'user_id',
        'code',
    ];

    public static function getCode(int $code): ?PasswordCode
    {
        return self::where('code', $code)
            ->where('created_at', '>', now()->subHour())
            ->first();
    }
}
