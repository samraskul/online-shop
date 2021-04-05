<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models\Admin
 * @version March 21, 2021, 8:22 am UTC
 *
 * @property string $name
 * @property string $type
 * @property integer $parent_id
 */
class Category extends Model
{

    use HasFactory;

    public $table = 'categories';
    



    public $fillable = [
        'name',
        'type',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'string',
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

    
}
