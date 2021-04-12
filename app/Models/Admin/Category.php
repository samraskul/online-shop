<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models\Admin
 * @version April 10, 2021, 10:06 pm UTC
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
