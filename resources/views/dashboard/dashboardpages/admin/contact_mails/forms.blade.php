@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('forms.individual')}}</h5>
                        <div class="main-card p-5 card">
                            @if(count($data)>0)
                                <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>{{trans('forms.name')}}</th>
                                        <th>{{trans('forms.email')}} </th>
                                        <th>{{trans('forms.phone')}} </th>
                                        <th>{{trans('tables.createdTime')}} </th>
                                        <th> {{trans('forms.Details')}}</th>
                                        <th>{{trans('tables.delete')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $data)
                                        <tr>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td>{{$data->created_at}}</td>
                                            <td><a href="{{route('admin.dmails.show',[$data->id])}}" class="btn btn-primary">{{trans('forms.details')}}</a></td>
                                            <td> <form method="post" action="{{route('admin.dmails.destroy',[$data->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            @else
                                <p class="text-center font-weight-bold">No mails sent</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
