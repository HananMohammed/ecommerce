@extends('admins.layouts.master')
@section('title') Phones @endsection
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('phone.addPhone')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('admin.phone.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="phone">{{trans('phone.phone')}}</label>
                                    <input type="text"   name="phone" id="phone" class="form-control">
                                    @if($errors->has('phone'))
                                        <span class="error">{{ $errors->get('phone')[0] }}</span>
                                    @endif

                                </div>



                                <br>
                                <button class="btn btn-success" type="submit">{{trans('phone.addPhone')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('phone.allPhone')}}</h5>
                        <div class="main-card p-5 card">
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>

                                    <th>{{trans('phone.phone')}} </th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.delete')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($phone as $phone )
                                    <tr>


                                        <td>{{$phone->phone}}</td>
                                         <td>{{implode($phone->user()->pluck('name')->toArray())}}</td>
                                         <td>{{$phone->created_at}}</td>
                                        <td> <form method="post" action="{{route('admin.phone.destroy',[$phone->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>

                                    <th>{{trans('phone.phone')}} </th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.delete')}}</th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
