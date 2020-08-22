<?php


namespace App\interfaces_Implementation ;

use App\interfaces\StoreAndUpdateInterface ;

class StoreAndUpdateImp implements StoreAndUpdateInterface
{
    private $uploadImage ;

    /**
     * StoreAndUpdateImp constructor.
     * @param UploadWebPImageImp $uploadImage
     */
    public function __construct(UploadWebPImageImp $uploadImage )
        {
            $this->uploadImage = $uploadImage ;
        }

    /**
     * @param $request
     * @param $model
     * @return mixed|void
     */
    public function store($request, $model)
    {
        foreach ( $request->input() as $key => $value){
            if($key !='_token' && $key != '_method')
            {
                (is_array($value)) ? $model->$key = json_encode($value)
                                   : $model->$key = $value ;
            }
        }
        if(is_array($request->file()))
        {

            foreach ( $request->file() as $key => $value)
            {
                $model->$key = is_array($value) ? $this->uploadImage->upload_images($value)
                                                : $this->uploadImage->upload_image($value);
            }

        }

        $model->created_by = auth()->user()->id;

        $model -> save() ;
    }

    /**
     * @param $id
     * @param $request
     * @param $model
     * @return mixed|void
     */
    public function update($id, $request, $model)
    {
         $requiredModel = $model->find($id);

         foreach ( $request->input() as $key => $value){

             if($key != "_token" && $key != "_method"){

                 (is_array($value)) ? $requiredModel->$key = json_encode($value)
                                    : $requiredModel->$key = $value ;

             }

         }

         if( is_array($request->file()))
         {
             foreach ( $request->file() as $key => $value )
             {
                 $requiredModel -> $key = (is_array($value)) ? $this->uploadImage->upload_images($value)
                                                             : $this->uploadImage->upload_image($value) ;
             }
         }

        $requiredModel->created_by = auth()->user()->id;

        $requiredModel -> save() ;
    }
}
