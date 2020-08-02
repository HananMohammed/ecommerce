<?php


namespace App\repository;


use App\Fruits;
use App\News;
use App\Subscriber;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\Array_;

class DashboaredRepository
{



    /**
     *
     * @return Collection
     */
    public function getProduct(): Collection
    {
       return  Fruits::all();
    }



    /**
     * @return Collection
     */
    public function getNews(): Collection
    {
       return News::all();
    }
    public function  getsuds()
    {
        return Subscriber::orderBy('id', 'DESC')->get();
    }

    /**
     * @param Collection $collection
     * @return int
     */
    public function returnCount (Collection $collection)
    {
        return count($collection);
    }

    /**
     * @return array
     */
    public function DashBoardData ()
    {

        return[
            'product'=>$this->returnCount($this->getProduct()),
            'news'=>$this->returnCount($this->getNews()),
            'subs'=>$this->returnCount($this->getsuds()),
            'subc'=>$this->getsuds(),
        ];

    }

}
