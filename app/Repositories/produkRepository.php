<?php

namespace App\Repositories;

use App\Models\produk;
use App\Repositories\BaseRepository;

/**
 * Class produkRepository
 * @package App\Repositories
 * @version July 30, 2022, 2:55 am UTC
*/

class produkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_produk',
        'harga',
        'foto'
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
        return produk::class;
    }
}
