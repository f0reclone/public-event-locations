<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $is_custom
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AttributeGroupFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereIsCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AttributeGroup extends Model
{
    use HasFactory;
}
