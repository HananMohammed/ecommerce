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
                    <form method="post" action="{{ route('social.store') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text"   name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="link">link</label>
                            <input type="text"   name="link" id="link" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="icon">font awsom icon</label>
                            <input type="text"   name="icon" id="icon" class="form-control">
                        </div>


                        <button class="btn btn-success" type="submit">{{trans('dhome.slibf')}}</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title">{{trans('dhome.social')}}</h5>
                    <div class="main-card p-5 card">
                        @if(count($socials)>0)
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>name</th>


                                    <th>created at </th>
                                    <th>Edit</th>
                                    <th>Delete</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($socials as $social )
                                    <tr>
                                        <td>{{$social->name}}</td>


                                        <td>{{$social->created_at}}</td>
                                        <td><a href="{{route('social.edit',[$social->id])}}" class="btn btn-primary">Edie</a></td>
                                        <td> <form method="post" action="{{route('social.destroy',[$social->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">Delete</button></form></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>title</th>
                                    <th>created at </th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        @else
                            <p class="text-center font-weight-bold">no Social Added</p>
                        @endif
                    </div>
                </div>
            </div>

@endsection