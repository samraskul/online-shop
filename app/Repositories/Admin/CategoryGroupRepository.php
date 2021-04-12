<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CategoryGroup;
use App\Repositories\BaseRepository;

/**
 * Class CategoryGroupRepository
 * @package App\Repositories\Admin
 * @version April 11, 2021, 1:23 pm UTC
*/

class CategoryGroupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id',
        'parent_id'
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
        return CategoryGroup::class;
    }
}
