<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] all()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category find($id, $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category findOrFail($id, $columns = ['*'])
 * @method static ...
 */
class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $guarded = [];
}
