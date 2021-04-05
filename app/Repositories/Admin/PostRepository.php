<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Post;
use App\Repositories\BaseRepository;

/**
 * Class PostRepository
 * @package App\Repositories\Admin
 * @version March 21, 2021, 9:10 am UTC
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'user_id',
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
