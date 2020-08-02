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
                        <div> {{trans('dhome.aboutus')}} </div>
                    </div>


                </div>
            </div>

            <div class="card p-3">
                <div class="card-body">
                    <form method="post" action="{{ route('abutus.store') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="comnameen">{{trans('dhome.aboutcomnameen')}}</label>
                            <input type="text"   name="comnameen" id="comnameen" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="comnamear">{{trans('dhome.aboutcomnamear')}}</label>
                            <input type="text"   name="comnamear" id="comnamear" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="disen">{{trans('dhome.aboutdisen')}}</label>
                            <textarea type="text"   name="disen" id="disen" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="disar">{{trans('dhome.aboutdisar')}}</label>
                            <textarea type="text"   name="disar" id="disar" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="missionen">{{trans('dhome.missionen')}}</label>
                            <textarea type="text"   name="missionen" id="missionen" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="missionar">{{trans('dhome.missionar')}}</label>
                            <textarea type="text"   name="missionar" id="missionar" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="vissionen">{{trans('dhome.vissionen')}}</label>
                            <textarea type="text"   name="vissionen" id="vissionen" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="vissionar">{{trans('dhome.vissionar')}}</label>
                            <textarea type="text"   name="vissionar" id="vissionar" class="form-control"></textarea>
                        </div>

                        <button class="btn btn-success" type="submit">{{trans('dhome.addaboutus')}}</button>
                    </form>
                </div>
            </div>


@endsection