@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('address.addAddress')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('daddress.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="address">{{trans('address.address_en')}}</label>
                                    <input type="text"   name="address_en" id="address" class="form-control">
                                    @if($errors->has('address'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('address')[0] }}</span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label for="address_ar">{{trans('address.address_ar')}}</label>
                                    <input type="text"   name="address_ar" id="address_ar" class="form-control">
                                    @if($errors->has('address_ar'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('address_ar')[0] }}</span>
                                    @endif

                                </div>


                                <br>
                                <button class="btn btn-success" type="submit">{{trans('address.addAddress')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('address.allAddress')}}</h5>
                        <div class="main-card p-5 card">
                            {{--                    @if(count($barnds)>0)--}}
                            <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>


                                    <th>{{trans('address.address_en')}} </th>
                                    <th>{{trans('address.address_ar')}} </th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.delete')}}</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($addressArray as $address )
                                    <tr>


                                        <td>{{$address->address_en}}</td>
                                        <td>{{$address->address_ar}}</td>

                                        <td>{{$address->user->name}}</td>
                                        <td>{{$address->created_at}}</td>
                                        <td> <form method="post" action="{{route('daddress.destroy',[$address->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>

                                    <th>{{trans('address.address_en')}} </th>
                                    <th>{{trans('address.address_ar')}} </th>
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