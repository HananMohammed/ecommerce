@extends('dashboard.layaout.home')
{{--@php--}}
{{--dd($data);--}}
{{--@endphp--}}
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('map.addmap')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dmap.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="name">{{trans('map.name')}}</label>
                                    <input type="text"  name="name" id="name" class="form-control">
                                    @if($errors->has('name'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name')[0] }}</span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label for="map">{{trans('map.link')}}</label>
                                    <input type="text" name="map" id="map"  class="form-control">

                                    @if($errors->has('map'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('map')[0] }}</span>
                                    @endif

                                </div>


                                <br>
                                <button class="btn btn-success" type="submit">{{trans('mail.addMail')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('mail.allMail')}}</h5>
                        <div class="main-card p-5 card">
                            {{--                    @if(count($barnds)>0)--}}
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>


                                    <th>{{trans('map.name')}} </th>
                                    <th>{{trans('map.link')}} </th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.delete')}}</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $map )
                                    <tr>


                                        <td>{{$map->name}}</td>
                                        <td>{{$map->map}}</td>
                                        <td>{{$map->user->name}}</td>
                                        <td>{{$map->created_at}}</td>
                                        <td> <form method="post" action="{{route('dmap.destroy',[$map->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('map.delete')}}</button></form></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>

                                    <th>{{trans('map.name')}} </th>
                                    <th>{{trans('map.link')}} </th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.delete')}}</th>

                                </tr>
                                </tfoot>
                            </table>
                            {{--                    @else--}}
                            {{--                        <p class="text-center font-weight-bold">no brands Added</p>--}}
                            {{--                    @endif--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
