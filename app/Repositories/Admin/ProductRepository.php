<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories\Admin
 * @version April 11, 2021, 1:51 pm UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id',
        'is_active',
        'admin_id',
        'price',
        'discount',
        'short_description',
        'long_description',
        'specification',
        'is_available',
        'views',
        'stock',
        'rate',
        'brand',
        'model',
        'color',
        'size',
        'material'
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
        return Product::class;
    }
}
