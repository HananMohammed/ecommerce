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
                <form method="post" action="{{ route('banklogo.update',[$banklogo->id])  }}" enctype="multipart/form-data" >
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="brandnameen">{{trans('dhome.slt')}}</label>
                        <input type="text" value="{{$banklogo->brandnameen}}"   name="brandnameen" id="brandnameen" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="brandnamear">{{trans('dhome.sltar')}}</label>
                        <input type="text" value="{{$banklogo->brandnamear}}"  name="brandnamear" id="brandnamear" class="form-control">
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
        </div>
    </div>
</div>
@endsection