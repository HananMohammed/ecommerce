<?php


namespace App\repository;


use App\abstracts\CrudAbstract;
use App\Phones;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CrudRepository
{
    /**
     * @param $modelName
     * @return Collection
     */
    public function getAllData($modelName): Collection
    {
     // dd(  $modelName::get());
      return $modelName::get();
    }

    /**
     * @param $modelName
     * @param $id
     * @return Collection
     */
    public function getById($modelName,$id)
    {

        return $modelName::find($id);
    }

    /**
     * @param FormRequest $request
     * @param $modelName
     */
    public function store(FormRequest $request,$modelName)
    {
   //dd($modelName);

        foreach ($request->input() as $key=>$filed){

            if($key!='_token'&& $key!='_method'){
                if (is_array($filed)){
                    $modelName->$key =json_encode( $filed);
                }else {
                    $modelName->$key = $filed;
                }

            }



        }

        if(is_array($request->file())){

            foreach ($request->file() as $key=>$filed){
                if(!is_array($filed)){
                    //just one image
                    $image=new UploadImage('image','image',$filed);
                    $modelName->$key=$image->UploadeImage();
                }else{
                    //array of images
                    $images=new UploadImage('image','image',$filed);
                    $modelName->$key=json_encode($images->uploadeImages());
                }

            }
        }

        $modelName->created_by=Auth::id();
     // dd($modelName);
        $modelName->save();
    }

    /**
     * @param FormRequest $request
     * @param $id
     * @param $modelName
     */
    public function update(FormRequest $request, $id,$modelName)
    {

        $requrd=$modelName::find($id);
        foreach ($request->input() as $key=>$filed){

            if($key!='_token' && $key!='_method'){
                if (is_array($filed)){
                  //  dd($request);
                    $requrd->$key =json_encode( $filed);
                }else {
                    $requrd->$key = $filed;
                }
               // $requrd->$key=$filed;
            }

        }
        if(is_array($request->file())){

            foreach ($request->file() as $key=>$filed){
                if(!is_array($filed)){
                    //just one image
                    $image=new UploadImage('image','image',$filed);
                    $requrd->$key=$image->UploadeImage();
                }else{

                    //array of images
                    $images=new UploadImage('image','image',$filed);
                    $requrd->$key=json_encode($images->uploadeImages());
                }

            }
        }
        $requrd->save();
    }

    /**
     * @param $id
     * @param $modelName
     */
    public function delete($id,$modelName)
    {

        $deletedRecoded=  $modelName::find($id);
        $deletedRecoded->delete();
    }
    public  function Phones (){
        return Phones::get();
    }

    public  function deleteBrand($brandId, $brandModelName ,$classModelName ,$productModelName){
      //  $brandClass = $classModelName::get($brandId);
        $brandClass = $classModelName::where('brand_id',$brandId)->get() ;
        $carProduct = $productModelName::where('brand_id' ,$brandId)->get();
       // $product=$productModelName::get($brandId);
        //dd(is_countable($brandClass));
        if( count($brandClass)==null&&count($carProduct)==null){

               $this->delete($brandId,$brandModelName);

        }else{

          return redirect()->back()->with('msg' ,'Can\'t delete this brand because it contain brand classes or cars ');

        }


    }

    /**
     * retrve daea where id =$id
     * @param $modelname
     * @param $filed
     * @param $id
     */
    public function getWhereId($modelname,$filed,$id)
    {

        return $modelname::where($filed, $id)->get();

    }
}
