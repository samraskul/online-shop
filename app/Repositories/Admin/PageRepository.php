<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Page;
use App\Repositories\BaseRepository;

/**
 * Class PageRepository
 * @package App\Repositories\Admin
 * @version April 12, 2021, 12:59 am UTC
*/

class PageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
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
        return Page::class;
    }
}
