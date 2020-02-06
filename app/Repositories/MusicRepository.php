<?php

namespace App\Repositories;

use App\Models\Music;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MusicRepository
 * @package App\Repositories
 * @version November 30, 2017, 3:13 pm UTC
 *
 * @method Music findWithoutFail($id, $columns = ['*'])
 * @method Music find($id, $columns = ['*'])
 * @method Music first($columns = ['*'])
*/
class MusicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'memo',
        'author'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Music::class;
    }
}
