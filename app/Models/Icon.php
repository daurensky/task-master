<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Icon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Icon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Icon query()
 * @property int $id
 * @property string $name
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Icon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Icon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Icon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Icon wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Icon whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Icon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
    ];
}
