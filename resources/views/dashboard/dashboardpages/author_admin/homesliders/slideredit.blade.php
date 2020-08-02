@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('slider.addSlide')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dslider.update',[$slider->id]) }}" enctype="multipart/form-data" >
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="title_en">{{trans('slider.title_en')}}</label>
                                    <input type="text" value="{{$slider->title_en}}"   name="title_en" id="title_en" class="form-control">
                                    @error('title_en')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title_ar">{{trans('slider.title_ar')}}</label>
                                    <input type="text" value="{{$slider->title_ar}}"  name="title_ar" id="title_ar" class="form-control">
                                    @error('title_ar')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description_en">{{trans('slider.description_en')}}</label>
                                    <input type="text" value="{{$slider->description_en}}"  name="description_en" id="description_en" class="form-control">
                                    @error('description_en')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description_ar">{{trans('slider.description_ar')}}</label>
                                    <input type="text" value="{{$slider->description_ar}}"  name="description_ar" id="description_ar" class="form-control">
                                    @error('description_ar')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alt">{{trans('slider.alt')}}</label>
                                    <input type="text"  value="{{$slider->alt}}"  name="alt" id="alt" class="form-control">
                                    @error('alt')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="image_path" class="form-control">
                                    @error('image_path')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">{{trans('slider.addSlide')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
