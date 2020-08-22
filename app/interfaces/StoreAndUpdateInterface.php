<?php


namespace App\interfaces;


interface StoreAndUpdateInterface
{
    /**
     * @param $request
     * @param $model
     * @return mixed
     */
    public function store($request , $model);

    /**
     * @param $id
     * @param $request
     * @param $model
     * @return mixed
     */
    public function update($id , $request , $model );

}
