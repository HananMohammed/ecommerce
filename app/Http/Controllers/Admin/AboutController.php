<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\model\About;
use App\Http\Requests\AboutRequest;

class AboutController extends Controller
{
    private $about ;

    /**
     * AboutController constructor.
     * @param About $about
      */
    public function __construct(About $about  )
    {
        $this -> about = $about ;
     }

    public function edit()
    {
        $about = $this->about->first();
        return view('admins.author_admin.about.edit' ,compact('about'));
    }

    /**
     * @param AboutRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AboutRequest $request )
    {

        About::first()->update([

            'about_en' => $request -> about_en ,
            'about_ar' => $request -> about_ar ,
        ]);

        return redirect()->back();
    }

}
