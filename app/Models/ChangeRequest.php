<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $place_id
 * @property string $contents
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ChangeRequestFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest wherePlaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangeRequest whereUserId($value)
 * @mixin \Eloquent
 */
class ChangeRequest extends Model
{
    use HasFactory;
}
