@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('mail.addMail')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dmail.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="mail">{{trans('mail.mail')}}</label>
                                    <input type="text"   name="mail" id="mail" class="form-control">
                                    @if($errors->has('mail'))
                                        {{--                                                {{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('mail')[0] }}</span>
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


                                    <th>{{trans('mail.mail')}} </th>
                                    <th>{{trans('tables.createdBy')}} </th>
                                    <th>{{trans('tables.createdTime')}} </th>
                                    <th>{{trans('tables.delete')}}</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($mailArray as $mail )
                                    <tr>


                                        <td>{{$mail->mail}}</td>

                                        <td>{{$mail->user->name}}</td>
                                        <td>{{$mail->created_at}}</td>
                                        <td> <form method="post" action="{{route('dmail.destroy',[$mail->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>

                                    <th>{{trans('mail.mail')}} </th>
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