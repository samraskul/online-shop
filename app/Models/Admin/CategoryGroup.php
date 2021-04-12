<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CategoryGroup
 * @package App\Models\Admin
 * @version April 11, 2021, 1:23 pm UTC
 *
 * @property string $name
 * @property integer $category_id
 * @property integer $parent_id
 */
class CategoryGroup extends Model
{

    use HasFactory;

    public $table = 'category_groups';
    



    public $fillable = [
        'name',
        'category_id',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'category_id' => 'integer',
        'parent_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
