<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 *
 * @method static Builder|PasswordCode newModelQuery()
 * @method static Builder|PasswordCode newQuery()
 * @method static Builder|PasswordCode query()
 * @method static Builder|PasswordCode whereCode($value)
 * @method static Builder|PasswordCode whereCreatedAt($value)
 * @method static Builder|PasswordCode whereId($value)
 * @method static Builder|PasswordCode whereUpdatedAt($value)
 * @method static Builder|PasswordCode whereUserId($value)
 *
 * @mixin Eloquent
 */
class PasswordCode extends Model
{
    protected $fillable = [
        'user_id',
        'code',
    ];

    public static function getCode(int $code): Builder
    {
        return self::query()->where('code', $code)
            ->where('created_at', '>', now()->subHour())
            ->latest();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
