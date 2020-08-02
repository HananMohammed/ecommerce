<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlidersUpdate;
use App\repository\CrudRepository;
use App\repository\SliderRepositry;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\Sliders;

class SliderController extends Controller
{
    private $sliderrepo;
    /**
     * SliderController constructor.
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crudRepository,Slider $slider)
    {
        $slides = $crudRepository->getAllData($slider);

        return view('dashboard.dashboardpages.author_admin.homesliders.slider', compact('slides'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.dashboardpages.author_admin.homesliders.shomesliderform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  SliderRepositry $SliderRepositry
     * @return \Illuminate\Http\Response
     */
    public function store(Sliders $request,CrudRepository $crudRepository,Slider $slider)
    {
          $crudRepository->store($request,$slider);
        return redirect(route('dslider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id,CrudRepository $crudRepository,Slider $modelname )
    {
        $slider=$crudRepository->getById($modelname,$id);
         return view('dashboard.dashboardpages.author_admin.homesliders.slideredit',compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     * ,
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update( CrudRepository $crudRepository , Slider $slider ,SlidersUpdate $request ,$id)
    {
        //
        $crudRepository->update( $request,$id,$slider);
        // $updateslide=$this->sliderrepo->updateSlider($request,$id);
        return redirect()->route('dslider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy( CrudRepository $crudRepository , Slider $slider ,$id)
    {
        //
        $crudRepository->delete($id,$slider);
        return redirect()->back();
    }
}
