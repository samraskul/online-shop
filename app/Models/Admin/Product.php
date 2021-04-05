<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models\Admin
 * @version March 20, 2021, 12:34 am UTC
 *
 * @property string $name
 * @property integer $category_id
 * @property integer $user_id
 * @property integer $price
 * @property integer $discount
 * @property string $short_description
 * @property string $long_description
 * @property string $specification
 * @property bool $is_available
 * @property integer $stock
 * @property number $rate
 * @property string $brand
 * @property string $model
 * @property string $color
 * @property string $size
 * @property string $material
 * @property string $group
 */
class Product extends Model
{

    use HasFactory;

    public $table = 'products';
    



    public $fillable = [
        'name',
        'category_id',
        'user_id',
        'price',
        'discount',
        'short_description',
        'long_description',
        'specification',
        'is_available',
        'stock',
        'rate',
        'brand',
        'model',
        'color',
        'size',
        'material',
        'group'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'category_id' => 'integer',
        'user_id' => 'integer',
        'price' => 'integer',
        'discount' => 'integer',
        'short_description' => 'string',
        'stock' => 'integer',
        'rate' => 'float',
        'brand' => 'string',
        'model' => 'string',
        'color' => 'string',
        'size' => 'string',
        'material' => 'string',
        'group' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
