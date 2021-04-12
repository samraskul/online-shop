<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models\Admin
 * @version April 11, 2021, 1:51 pm UTC
 *
 * @property string $name
 * @property integer $category_id
 * @property boolean $is_active
 * @property integer $admin_id
 * @property number $price
 * @property integer $discount
 * @property string $short_description
 * @property string $long_description
 * @property string $specification
 * @property boolean $is_available
 * @property integer $views
 * @property integer $stock
 * @property number $rate
 * @property string $brand
 * @property string $model
 * @property string $color
 * @property string $size
 * @property string $material
 */
class Product extends Model
{

    use HasFactory;

    public $table = 'products';
    



    public $fillable = [
        'name',
        'category_id',
        'is_active',
        'admin_id',
        'price',
        'discount',
        'short_description',
        'long_description',
        'specification',
        'is_available',
        'views',
        'stock',
        'rate',
        'brand',
        'model',
        'color',
        'size',
        'material'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'category_id' => 'integer',
        'is_active' => 'boolean',
        'admin_id' => 'integer',
        'price' => 'float',
        'discount' => 'integer',
        'short_description' => 'string',
        'is_available' => 'boolean',
        'views' => 'integer',
        'stock' => 'integer',
        'rate' => 'float',
        'produce_date' => 'string',
        'brand' => 'string',
        'model' => 'string',
        'color' => 'string',
        'size' => 'string',
        'material' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];
    
    public function category_groups()
    {
        return $this->belongsToMany(CategoryGroup::class);
    }

    protected $with = ['images']; 
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
