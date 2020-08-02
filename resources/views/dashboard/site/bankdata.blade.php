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
                        <div> {{trans('dhome.bankd')}} </div>
                    </div>


                </div>
            </div>

            <div class="card p-3">
                <div class="card-body">
                    <form method="post" action="{{ route('bankdata.store') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="titleen">{{trans('dhome.sertitleen')}}</label>
                            <input type="text"   name="titleen" id="titleen" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="titlear">{{trans('dhome.sertitlear')}}</label>
                            <input type="text"   name="titlear" id="titlear" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="disen">{{trans('dhome.strdisen')}}</label>
                            <textarea type="text"   name="disen" id="disen" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="disar">{{trans('dhome.strdisar')}}</label>
                            <textarea type="text"   name="disar" id="disar" class="form-control"></textarea>
                        </div>



                        <button class="btn btn-success" type="submit">{{trans('dhome.addserv')}}</button>
                    </form>
                </div>
            </div>


@endsection