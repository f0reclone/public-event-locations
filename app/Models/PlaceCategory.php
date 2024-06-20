<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $image_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Image $image
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Place> $places
 * @property-read int|null $places_count
 * @method static \Database\Factories\PlaceCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlaceCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlaceCategory extends Model
{
    use HasFactory;

    public function places(): HasMany {
        return $this->hasMany(Place::class);
    }

    public function image(): BelongsTo {
        return $this->belongsTo(Image::class);
    }
}
