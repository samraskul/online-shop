<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Post;
use App\Repositories\BaseRepository;

/**
 * Class PostRepository
 * @package App\Repositories\Admin
 * @version April 10, 2021, 10:06 pm UTC
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'content',
        'admin_id',
        'category_id'
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
        return Post::class;
    }
}
