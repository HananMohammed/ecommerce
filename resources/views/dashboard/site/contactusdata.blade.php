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
                        <div> {{trans('dhome.contact')}} </div>
                    </div>


                </div>
            </div>

            <div class="card p-3">
                <div class="card-body">
                    <form method="post" action="{{ route('contactus.store') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="addressen">{{trans('dhome.contactadd')}}</label>
                            <input type="text"   name="addressen" id="addressen" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="addressar">{{trans('dhome.contactaddar')}}</label>
                            <input type="text"   name="addressar" id="addressar" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">{{trans('dhome.contactaEm')}}</label>
                            <input type="email"   name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">{{trans('dhome.contactaphone')}}</label>
                            <input type="text"   name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="map">{{trans('dhome.contactamap')}}</label>
                            <input type="text"    name="map" id="map" class="form-control">
                        </div>



                        <button class="btn btn-success" type="submit">{{trans('dhome.addserv')}}</button>
                    </form>
                </div>
            </div>


@endsection