@extends('dashbord.layaout.layout')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">

            <div class="app-page-title">
                @include('dashbord.inc.massage')
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div> {{trans('dhome.b8')}} </div>
                    </div>


                </div>
            </div>
            <div class="card p-3">
                <div class="card-body">
                    <form method="post" action="{{ route('slider.update',[$sliderhome->id]) }}" enctype="multipart/form-data" >
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="imagetitle">{{trans('dhome.slt')}}</label>
                            <input type="text"  value="{{$sliderhome->titleen}}"  name="titleen" id="imagetitle" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="imagetitle">{{trans('dhome.sltar')}}</label>
                            <input type="text" value="{{$sliderhome->titlear}}"   name="titlear" id="imagetitle" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="slogan">{{trans('dhome.sls')}}</label>
                            <input type="text" value="{{$sliderhome->sloganen}}"  name="sloganen" id="slogan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="slogan">{{trans('dhome.slsen')}}</label>
                            <input type="text" value="{{$sliderhome->sloganar}}"  name="sloganar" id="slogan" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="slideimage" class="">{{trans('dhome.sli')}}</label>
                            <input name="image" id="slideimage" type="file" class="form-control-file">
                        </div>
                        <button class="btn btn-success" type="submit">{{trans('dhome.slibu')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection