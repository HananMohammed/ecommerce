@extends('dashboard.layaout.home')

@section('content')
    <?php $title='title_'.trans('systems.lang')?>

    <div class="app-main__outer">
        <div class="app-main__inner">
    <div class="row">

        <div class="col-md-6 m-t-5 ">
          <a href="{{route('dslider.create')}}">  <button type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg">{{trans('slider.addSlide')}} <i class="fas fa-plus"></i></button></a>
        </div>
        <br>
        <div class="col-md-12">
            <div class="card-body">
                <h5 class="card-title">{{trans('slider.allSlides')}}</h5>
                <div class="main-card p-5 card">
{{--                    @if(count($barnds)>0)--}}
                        <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>{{trans('slider.slide')}}</th>
                                <th>{{trans('slider.title')}}</th>
                                <th>{{trans('tables.createdBy')}} </th>
                                <th>{{trans('tables.createdTime')}} </th>
                                <th>{{trans('tables.edit')}}</th>
                                <th>{{trans('tables.delete')}}</th>


                            </tr>
                            </thead>
                            <tbody>



                            @foreach($slides as $slide )
                                <tr>
                                    <td>{{$slide->id}}</td>
                                     <td>{{$slide->$title}}</td>
                                    <td>{{ implode(',' ,$slide->user()->get()->pluck('name')->toArray())  }}</td>
                                    <td>{{$slide->created_at}}</td>
                                    <td><a href="{{route('dslider.edit',[$slide->id])}}" class="btn btn-primary">{{trans('tables.edit')}}</a></td>
                                    <td> <form method="post" action="{{route('dslider.destroy',[$slide->id])}}">@csrf @method('delete')<button type="submit" class="btn btn-danger">{{trans('tables.delete')}}</button></form></td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{{trans('slider.slide')}}</th>
                                <th>{{trans('slider.title')}}</th>
                                <th>{{trans('tables.createdBy')}} </th>
                                <th>{{trans('tables.createdTime')}} </th>
                                <th>{{trans('tables.edit')}}</th>
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
