<?php
namespace App\Http\Controllers\Admin;
use App\ContactForm;
use App\Http\Controllers\Controller;
use App\repository\CrudRepository;
class DownloadAttachController extends Controller
{
    public function download( CrudRepository $crud ,ContactForm $model ,$id){
         $data=$crud->getById($model,$id);
         $files=$data->get()->pluck('file') ;
        foreach ($files as $file){
          $download=  $data->where('id',$id)->where('file',$file)->get();
        }
          $final=implode($download->pluck('file')->toArray());
          $pathToFile=public_path('image/'.$final);
        // dd($pathToFile);
        return response()->download($pathToFile);
    }

}
