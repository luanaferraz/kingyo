<?php

namespace App\Repositories;


use App\Models\Petdoc;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;


/**
 * Class PetdocRepository
 * @package App\Repositories
 * @version October 26, 2019, 6:03 pm UTC
*/

class PetdocRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pet_id',
        'file'
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
        return Petdoc::class;
    }

    function create_with_upload ($attributes) {

        $file = $attributes['file'];
        $attributes['file'] =  $this->imgUpload($file,'petdocs');
        $temporarySkipPresenter = $this->skipPresenter;
        $this->skipPresenter(true);
        $model = parent::create($attributes);
        $this->skipPresenter($temporarySkipPresenter);
        $model = $this->updateRelations($model, $attributes);
        $model->save();

        return $this->parserResult($model);

    }

    public function update_with_upload(array $attributes, $id)
    {
        $petdocs = $this->findWithoutFail($id);
        $file = isset ($attributes['file']) ? $attributes['file'] : '';
        if(!empty($file)){
            \File::delete(public_path('uploads/petdocs/'.$petdocs->file));
            \File::delete(public_path('uploads/petdocs/sm'.$petdocs->file));

            $attributes['file'] =  $this->imgUpload($file,'petdocs');
        }

        // Have to skip presenter to get a model not some data
        $temporarySkipPresenter = $this->skipPresenter;
        $this->skipPresenter(true);
        $model = parent::update($attributes, $id);
        $this->skipPresenter($temporarySkipPresenter);

        $model = $this->updateRelations($model, $attributes);
        $model->save();

        return $this->parserResult($model);
    }

    function destroy_with_upload ($id, $petdoc) {
        $imagem = $petdoc->file;
        if ($petdoc->destroy($id)) {
            \File::delete(public_path('uploads/petdocs/'.$imagem));
            \File::delete(public_path('uploads/petdocs/sm'.$imagem));
        }
    }


    public function imgUpload($file, $path){
        $width= 1280;
        $height=720;

        $path = public_path('uploads/'.$path.'/');
        if (!file_exists($path)) {
            File::makeDirectory($path, 0755, true, true);
        }
        $file_name = Carbon::now()->timestamp . uniqid().'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize($width, $height)->save($path.$file_name);
        Image::make($file)->resize($width/6, $height/6)->save($path.'sm'.$file_name);

        return $file_name;
    }



}

