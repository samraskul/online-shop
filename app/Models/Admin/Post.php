<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models\Admin
 * @version April 10, 2021, 10:06 pm UTC
 *
 * @property string $title
 * @property string $description
 * @property string $content
 * @property integer $admin_id
 * @property integer $category_id
 * @property boolean $is_active
 */
class Post extends Model
{

    use HasFactory;

    public $table = 'posts';
    



    public $fillable = [
        'title',
        'description',
        'content',
        'admin_id',
        'category_id',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'admin_id' => 'integer',
        'category_id' => 'integer',
        'is_active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
