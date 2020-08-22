<?php
namespace App\Http\Controllers\Admin;
use App\ContactForm;
use App\Http\Controllers\Controller;
 class DownloadAttachController extends Controller
{
    public function download( ContactForm $model ,$id){
        $data = $model -> where('id' ,$id) ;
          $files=$data->get()->pluck('file') ;
        foreach ($files as $file){
          $download=  $data->where('id',$id)->where('file',$file)->get();
        }
          $final=implode($download->pluck('file')->toArray());
          $pathToFile=public_path('image/'.$final);
         return response()->download($pathToFile);
    }

}
