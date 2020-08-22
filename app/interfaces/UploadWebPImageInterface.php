<?php


namespace App\interfaces;


interface UploadWebPImageInterface
{
    /**
     * @param $fileRequest
     * @return mixed
     */
    public function upload_image($fileRequest) ;

    /**
     * @param $fileRequests
     * @return mixed
     */
    public function upload_images($fileRequests) ;

}
