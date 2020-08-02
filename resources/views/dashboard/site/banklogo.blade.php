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
                        <div> {{trans('dhome.bankl')}} </div>
                    </div>


                </div>
            </div>

            <div class="card p-3">
                <div class="card-body">
                    <form method="post" action="{{ route('banklogo.store') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="brandnameen">{{trans('dhome.slt')}}</label>
                            <input type="text"   name="brandnameen" id="brandnameen" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="brandnamear">{{trans('dhome.sltar')}}</label>
                            <input type="text"   name="brandnamear" id="brandnamear" class="form-control">
                        </div>


                        <div class="position-relative form-group">
                            <label for="slideimage" class="">{{trans('dhome.sli')}}</label>
                            <input name="barndlogo" id="barndlogo" type="file" class="form-control-file">
                        </div>
                        <button class="btn btn-success" type="submit">{{trans('dhome.slibf')}}</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title">{{trans('dhome.allslider')}}</h5>
                    <div class="main-card p-5 card">
                        @if(count($logobank)>0)
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>title</th>

                                    <th>created by </th>
                                    <th>created at </th>
                                    <th>Edit</th>
                                    <th>Delete</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($logobank as $logoban )
                                    <tr>
                                        <td>{{$logoban->brandnameen}}</td>

                                        <td>{{$logoban->user->name}}</td>
                                        <td>{{$logoban->created_at}}</td>
                                        <td><a href="{{route('banklogo.edit',[$logoban->id])}}" class="btn btn-primary">{{trans('dcars.edit')}}</a></td>
                                        <td> <form method="post" action="{{route('banklogo.destroy',[$logoban->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('dcars.delete')}}</button></form></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>title</th>

                                    <th>created by </th>
                                    <th>created at </th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        @else
                            <p class="text-center font-weight-bold">no brands Added</p>
                        @endif
                    </div>
                </div>
            </div>

@endsection