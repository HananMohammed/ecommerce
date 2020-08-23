<?php

namespace App\Http\Controllers\Admin;

use App\interfaces_Implementation\StoreAndUpdateImp ;
use App\Http\Controllers\Controller;
use App\Http\Requests\Sliders;
use App\Http\Requests\SlidersUpdate;
use App\model\Slider;

class SliderController extends Controller
{
    private $slider ;
    private  $storeAndUpdate ;

    /**
     * SliderController constructor.
     * @param StoreAndUpdateImp $storeAndUpdate
     * @param Slider $slider
     */
    public function __construct( Slider $slider , StoreAndUpdateImp $storeAndUpdate )
    {
          $this->slider = $slider ;
          $this->storeAndUpdate = $storeAndUpdate;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slides = $this->slider->all();

        return view('admins.author_admin.slider.index', compact('slides'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admins.author_admin.slider.create');

    }

    /**
     * @param Sliders $request
     * @return   \Illuminate\Routing\Redirector
     */
    public function store(Sliders $request)
    {
          $this->storeAndUpdate->store($request,$this->slider);
          return redirect(route('admin.slider.index'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
          $slider=$this->slider->find($id);

         return view('admins.author_admin.slider.update',compact('slider'));

    }

    /**
     * @param SlidersUpdate $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( SlidersUpdate $request , $id)
    {

        $this->storeAndUpdate->update( $id , $request ,$this->slider );
        return redirect()->route('admin.slider.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy( $id)
    {
        $this->slider->find($id)->delete();

        return redirect()->back();
    }
}
