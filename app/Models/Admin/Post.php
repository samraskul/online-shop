<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models\Admin
 * @version March 21, 2021, 9:10 am UTC
 *
 * @property string $title
 * @property string $content
 * @property integer $user_id
 * @property integer $category_id
 * @property boolean $is_active
 */
class Post extends Model
{

    use HasFactory;

    public $table = 'posts';
    



    public $fillable = [
        'title',
        'content',
        'user_id',
        'category_id',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'user_id' => 'integer',
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
