<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AttributeGroup|null $attributeGroup
 * @property-read \App\Models\Place|null $place
 * @method static \Database\Factories\CustomPlaceAttributeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPlaceAttribute whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CustomPlaceAttribute extends Model
{
    use HasFactory;

    /**
     * Get the attribute group associated with the custom place attribute.
     */
    public function attributeGroup()
    {
        return $this->belongsTo(AttributeGroup::class);
    }

    /**
     * Get the place associated with the custom place attribute.
     */
    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
