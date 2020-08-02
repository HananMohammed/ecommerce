@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('social.addsocial')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dsocial.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="link">{{trans('social.link')}}</label>
                                    <input type="text"   name="link" id="link" class="form-control">
                                    @if($errors->has('link'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('link')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <select name="icon" class="custom-select" required>
                                        <option value="" selected >{{trans('social.icon')}}</option>
                                        @foreach($soialArray as $icon)
                                        <option value="{{$icon->id}}"><p>{{$icon->icon}}</p></option>
                                        @endforeach

                                    </select>
                                    @if($errors->has('icon'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('icon')[0] }}</span>
                                    @endif

                                </div>



                                <br>
                                <button class="btn btn-success" type="submit">{{trans('social.addsocial')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('social.allsocial')}}</h5>
                        <div class="main-card p-5 card">
                            {{--                    @if(count($barnds)>0)--}}
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>


                                    <th>{{trans('social.social')}} </th>
                                    <th>{{trans('social.link')}} </th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.delete')}}</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sData as $data )
                                    <tr>


                                        <td>{{$data->socailIcon->name}}</td>
                                        <td><a href=" {{$data->link}}" target="_blank">{{$data->link}}</a></td>
                                        <td>{{$data->user->name}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td> <form method="post" action="{{route('dsocial.destroy',[$data->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>

                                    <th>{{trans('social.social')}} </th>
                                    <th>{{trans('social.link')}} </th>
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