<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlidersUpdate;
use App\repository\CrudRepository;
use App\model\Slider;
use App\Http\Requests\Sliders;

class SliderController extends Controller
{
    private $slider ;
    private $crud ;

    /**
     * SliderController constructor.
     * @param CrudRepository $crud
     * @param Slider $slider
     */
    public function __construct(CrudRepository $crud , Slider $slider)
    {
          $this->slider = $slider ;
          $this->crud   = $crud ;

    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slides = $this->crud->getAllData($this->slider);

        return view('dashboard.dashboardpages.author_admin.slider.index', compact('slides'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.dashboardpages.author_admin.slider.create');

    }

    /**
     * @param Sliders $request
     * @return   \Illuminate\Routing\Redirector
     */
    public function store(Sliders $request)
    {
          $this->crud->store($request,$this->slider);
          return redirect(route('admin.slider.index'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
          $slider=$this->crud->getById($this->slider,$id);

         return view('dashboard.dashboardpages.author_admin.slider.update',compact('slider'));

    }

    /**
     * @param SlidersUpdate $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( SlidersUpdate $request , $id)
    {
        $this->crud->update( $request,$id,$this->slider);

        return redirect()->route('admin.slider.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy( $id)
    {
        $this->crud->delete($id,$this->slider);

        return redirect()->back();
    }
}
