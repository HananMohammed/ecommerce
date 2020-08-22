<?php


namespace App\interfaces_Implementation ;

use App\interfaces\UploadWebPImageInterface ;
use WebPConvert\WebPConvert;

class UploadWebPImageImp implements UploadWebPImageInterface
{

    /**
     * @param $fileRequest
     * @return mixed|string
     */
    public function upload_image($fileRequest)
    {
        $imageName = 'image'. time() . '.' . $fileRequest->getClientOriginalExtension();

        $fileRequest->move(public_path('image'), $imageName);

        $source =public_path('image/'.$imageName) ;

        $output = $source.'.webp';

        WebPConvert::convert( $source , $output) ;

        return $imageName ;

    }

    /**
     * @param $fileRequests
     * @return false|mixed|string
     */
    public function upload_images($fileRequests)
    {
        $totalImages = [];

        for($i=0 ; $i<count($fileRequests) ; $i++)
        {
            $imageName = 'image'. time() . $i . '.' . $fileRequests[$i]->getClientOriginalExtension();

            $fileRequests[$i]->move(public_path('image'), $imageName);

            $source =public_path('image/'.$imageName) ;

            $output = $source.'.webp';

            WebPConvert::convert( $source , $output) ;

            $totalImages[] = $imageName ;
        }

        return  json_encode($totalImages) ;
    }
}
