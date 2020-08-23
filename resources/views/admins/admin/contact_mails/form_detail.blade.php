@extends('admins.layouts.master')
@section('content')
     <div class="app-main__outer  ">
        <div class="app-main__inner">
            <div class="row">
            <div class="card col-12 col-md-8">
                <div class="card-header text-white bg-dark ml-5 d-flex justify-content-center" style="text-align: center!important;">@lang('contact.name'):{{$data[0]->name}}</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><label class="text-success pr-3 ">@lang('contact.email'):</label>{{$data[0]->email}}</li>
                    <li class="list-group-item"><label class="text-success pr-3 ">@lang('contact.phone'):</label>{{$data[0]->phone}}</li>
                    <li class="list-group-item"><label class="text-success pr-3 ">@lang('contact.subject'): </label>{{$data[0]->subject}}</li>
                </ul>
                <div class="card-footer mb-5"><label class="text-success pr-3 "> @lang('contact.message'): </label><textarea class="container-fluid border-0 ">{{$data[0]->message}}</textarea></div>
                <form method="post" action="{{route('admin.download',[$data[0]->id])}}" enctype="multipart/form-data">@csrf <button type="submit" class="btn btn-success mb-5 ml-5" style="margin-right: 15rem!important;">@lang('contact.download') </button></form>
            </div>
            </div>
        </div>
    </div>
@endsection
