@extends('admins.layouts.master')
@section('title') Slider Create @endsection
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('slider.addSlide')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('admin.slider.store') }}" enctype="multipart/form-data" >
                            @csrf
                                <div class="row">
                                <div class=" col-lg-5 mr-1 form-group">
                                    <label for="title_en">{{trans('slider.title_en')}}</label>
                                    <input type="text"   name="title_en" id="title_en"  value="{{old('title_en')}}" class="form-control">
                                    @error('title_en')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class=" col-lg-5 mr-1 form-group">
                                    <label for="title_ar">{{trans('slider.title_ar')}}</label>
                                    <input type="text"   name="title_ar" id="title_ar" value="{{old('title_ar')}}"class="form-control">
                                    @error('title_ar')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-5 mr-1 form-group">
                                    <label for="description_en">{{trans('slider.description_en')}}</label>
                                    <input type="text"   name="description_en" id="description_en"  value="{{old('description_en')}}" class="form-control">
                                    @error('description_en')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-5 mr-1 form-group">
                                    <label for="description_ar">{{trans('slider.description_ar')}}</label>
                                    <input type="text"   name="description_ar" id="description_ar" value="{{old('description_ar')}}" class="form-control">
                                    @error('description_ar')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class=" col-lg-10 form-group">
                                    <label for="alt">{{trans('slider.alt')}}</label>
                                    <input type="text"   name="alt" id="alt" value="{{old('alt')}}" class="form-control">
                                    @error('alt')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>

                                    <div class=" col-lg-10 control-group input-group" style="margin-top:10px">
                                        <input type="file" name="image_path" id ="single-image" class="form-control"  onchange="uploadImage()">
                                    </div>
                                @error('image_path')
                                <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                @enderror
                                </div>
                                <br>
                                <div id ="image"></div>
                                <br>
                                <button class="btn btn-success" type="submit" style="margin-left: 35%;" >{{trans('slider.addSlide')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
