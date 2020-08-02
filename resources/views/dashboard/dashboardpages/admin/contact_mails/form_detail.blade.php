@extends('dashboard.layaout.layout')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
            <div class="card col-12 col-md-8">
                <div class="card-header text-white bg-dark ml-5 d-flex justify-content-center" style="text-align: center!important;">{{trans('contact.name')}}:{{$data->name}}</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{trans('contact.email')}}:{{$data->email}}</li>
                    <li class="list-group-item">{{trans('contact.phone')}}:{{$data->phone}}</li>
                    <li class="list-group-item">{{trans('contact.subject')}}:{{$data->subject}}</li>
                </ul>
                <div class="card-footer mb-5"> {{trans('contact.message')}}: <textarea class="container-fluid border-0 ">{{$data->message}}</textarea></div>
                <form method="post" action="{{route('admin.download',[$data->id])}}" enctype="multipart/form-data">@csrf <button type="submit" class="btn btn-success mb-5 ml-5" style="margin-right: 15rem!important;">{{trans('contact.download')}} </button></form>
            </div>
            </div>
        </div>
    </div>
@endsection
