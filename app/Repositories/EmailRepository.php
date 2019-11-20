<?php

namespace App\Repositories;

use App\Models\Email;
use InfyOm\Generator\Common\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Class PaginaRepository
 * @package App\Repositories\Admin
 * @version July 4, 2018, 2:24 pm UTC
 *
 * @method Pagina findWithoutFail($id, $columns = ['*'])
 * @method Pagina find($id, $columns = ['*'])
 * @method Pagina first($columns = ['*'])
*/
class EmailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [

    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Email::class;
    }

}
