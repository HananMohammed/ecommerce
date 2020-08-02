
@extends('dashboard.layaout.home')
{{--@php--}}
{{--//print_r($_REQUEST)--}}
{{--@endphp--}}
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('project.addproject')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dproject.store') }}" enctype="multipart/form-data" >
                                @csrf


                                <div class="form-group">
                                    <label for="proj_name_en">{{trans('project.proj_name_en')}}</label>
                                    <input type="text"   name="proj_name_en"   value="{{ old('proj_name_en') }}" id="proj_name_en" class="form-control">
                                    @if($errors->has('proj_name_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('proj_name_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="proj_name_ar">{{trans('project.proj_name_ar')}}</label>
                                    <input type="text"   name="proj_name_ar"   value="{{ old('proj_name_ar') }}" id="proj_name_ar" class="form-control">
                                    @if($errors->has('proj_name_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('proj_name_ar')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="link">{{trans('project.link')}}</label>
                                    <input type="text"   name="link"   value="{{ old('link') }}" id="link" class="form-control">
                                    @if($errors->has('link'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('link')[0] }}</span>
                                    @endif

                                </div>
                                <div class="input-group form-group control-group increment2" >
                                    <label for="color">{{trans('project.images')}}  </label>
                                    <input type="file" id="imagename" name="images[]" class="form-control">

                                    <div class="input-group-btn">
                                        <button class="btn btn-success add_image" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                    @if($errors->has('images'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('images')[0] }}</span>
                                    @endif
                                </div>

                                <div class="clone2 hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="images[]" class="form-control">
                                       
                                        @if($errors->has('images'))
                                            {{--                                                {{dd($errors)}}--}}
                                            <span class="error">{{ $errors->get('images')[0] }}</span>
                                        @endif
                                    </div>
                                </div>

<div style="width:100%;height: 10px;"></div>

                                @php
                                    $name='name_'.trans('systems.lang');

                                @endphp
                                <div class="form-group">
                                    <select name="category_id" class="form-control form-control-sm">
                                        <option>Select Category</option>
                                        @foreach($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->$name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))

                                        <span class="error">{{$errors->get('category_id')[0]}}</span>
                                    @endif
                                </div>





                                <br>
                                <button class="btn btn-success" type="submit">{{trans('project.addproject')}}</button>

                            </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
