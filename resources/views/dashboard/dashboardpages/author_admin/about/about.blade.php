@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('about.about')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dabout.store') }}"  >
                                @csrf
{{--                                @method('put')--}}
                                <div class="form-group">
                                    <label for="aboutAr">{{trans('about.aboutAr')}}</label>
                                    <textarea type="text"    name="about_ar" id="aboutAr" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="aboutEn">{{trans('about.aboutEn')}}</label>
                                    <textarea type="text"    name="about_en" id="aboutEn" class="form-control"></textarea>
                                </div>


                                <br>
                                <button class="btn btn-success" type="submit">{{trans('about.addAbout')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
