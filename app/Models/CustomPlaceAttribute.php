<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $place_id
 * @property int $attribute_group_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CustomPlaceAttributeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute whereAttributeGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute wherePlaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute whereValue($value)
 * @mixin \Eloquent
 */
class CustomPlaceAttribute extends Model
{
    use HasFactory;
}
