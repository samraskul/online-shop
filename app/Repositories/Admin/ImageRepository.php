<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Image;
use App\Repositories\BaseRepository;

/**
 * Class ImageRepository
 * @package App\Repositories\Admin
 * @version April 10, 2021, 10:07 pm UTC
*/

class ImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'url',
        'type',
        'imageable_id',
        'imageable_type',
        'admin_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Image::class;
    }
}
