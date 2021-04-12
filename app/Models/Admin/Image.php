<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Image
 * @package App\Models\Admin
 * @version April 10, 2021, 10:07 pm UTC
 *
 * @property string $url
 * @property string $type
 * @property integer $imageable_id
 * @property string $imageable_type
 * @property integer $admin_id
 */
class Image extends Model
{

    use HasFactory;

    public $table = 'images';
    



    public $fillable = [
        'url',
        'type',
        'imageable_id',
        'imageable_type',
        'admin_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'url' => 'string',
        'type' => 'string',
        'imageable_id' => 'integer',
        'imageable_type' => 'string',
        'admin_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
