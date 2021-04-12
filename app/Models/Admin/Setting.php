<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Setting
 * @package App\Models\Admin
 * @version April 10, 2021, 10:06 pm UTC
 *
 * @property string $name
 * @property string $title
 * @property string $content
 */
class Setting extends Model
{

    use HasFactory;

    public $table = 'settings';
    



    public $fillable = [
        'name',
        'title',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'title' => 'string'
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
