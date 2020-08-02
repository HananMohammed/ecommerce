
@extends('dashboard.layaout.home')
{{--@php--}}
{{--//print_r($_REQUEST)--}}
{{--@endphp--}}
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('project.addproject')}}</h5>
                        <div class="main-card p-5 card">

                            <form method="post" action="{{ route('dcategory.store') }}" enctype="multipart/form-data" >
                                @csrf

                                <div class="form-group">
                                    <label for="name_en">{{trans('project.name_en')}}</label>
                                    <input type="text"   name="name_en"   value="{{ old('name_en') }}" id="name_en" class="form-control">
                                    @if($errors->has('name_en'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name_en')[0] }}</span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="name_ar">{{trans('project.name_ar')}}</label>
                                    <input type="text"   name="name_ar"   value="{{ old('name_ar') }}" id="name_ar" class="form-control">
                                    @if($errors->has('name_ar'))
                                        {{--{{dd($errors->get('about_certificates_ar')[0])}}--}}
                                        <span class="error">{{ $errors->get('name_ar')[0] }}</span>
                                    @endif

                                </div>

                                <br>
                                <button class="btn btn-success" type="submit">{{trans('project.addproject')}}</button>

                            </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
