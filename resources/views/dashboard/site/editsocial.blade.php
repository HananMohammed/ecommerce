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
                        <div> {{trans('dhome.social')}} </div>
                    </div>


                </div>
            </div>

            <div class="card p-3">
                <div class="card-body">
                    <form method="post" action="{{ route('social.update',[$social->id])  }}" enctype="multipart/form-data" >
                        @csrf
                        @method('put')
                       <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" value="{{$social->name}}"  name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="link">link</label>
                    <input type="text" value="{{$social->link}}"    name="link" id="link" class="form-control">
                </div>

                <div class="form-group">
                    <label for="icon">font awsom icon</label>
                    <input type="text" value="{{$social->icon}}"  name="icon" id="icon" class="form-control">
                </div>

                        <button class="btn btn-success" type="submit">Update</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
            </div>
        </div>
    </div>
@endsection