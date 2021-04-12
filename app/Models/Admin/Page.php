<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Page
 * @package App\Models\Admin
 * @version April 12, 2021, 12:59 am UTC
 *
 * @property string $title
 * @property string $content
 * @property integer $admin_id
 * @property boolean $is_active
 */
class Page extends Model
{

    use HasFactory;

    public $table = 'pages';
    



    public $fillable = [
        'title',
        'content',
        'admin_id',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'admin_id' => 'integer',
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
