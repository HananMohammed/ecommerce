<?php

namespace App\repositoryhome;
use Mail;

use App\Http\Requests\ContactFormReq;
class ContactRepo{
    public function sendMail(ContactFormReq $request ){
           $data=[
               'name'=>$request->name,
               'email'=>$request->email,
               'phone'=>$request->phone,
               'subject'=>$request->subject,
               'message'=>$request->message
           ];
           if (isset($request->file)){
               $file = $request->file;
               Mail::send('email', $data,function ($message) use ($file){
                $message->to('hananmohammed2468@gmail.com', 'hanan-contact')->subject('Hanan portfolio contact form ');
                $message->attach($file->getRealPath(), array(
                           'mime' => $file->getMimeType())
                   );

                   $message->from('server@akwanmedia.com', 'server');
               });

           }else{
               Mail::send('email', $data, function ($message) {

                   $message->to('hananmohammed2468@gmail.com', 'hanan-contact')->subject('Hanan portfolio contact form ');
                   $message->from('server@ehm-eg.com', 'server');
               });

           }
    }
}

?>
