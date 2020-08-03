<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\model\About;
use App\Http\Requests\AboutRequest;
use App\model\Slider;

class AboutController extends Controller
{
    private $about ;
    private $crud ;

    /**
     * SliderController constructor.
     * @param Slider $slider
     */
    public function __construct( About $about)
    {
        $this->about = $about ;
    }
    public function edit()
    {
        $about = $this->about->first();
        return view('dashboard.dashboardpages.author_admin.about.edit' ,compact('about'));
    }

    public function update(AboutRequest $request )
    {

        About::first()->update([

            'about_en' => $request -> about_en ,
            'about_ar' => $request -> about_ar ,
        ]);

        return redirect()->back();
    }

}
