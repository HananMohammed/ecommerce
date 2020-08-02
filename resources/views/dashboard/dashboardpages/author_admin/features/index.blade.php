@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('features.feature')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dfeatures.store') }}"  >
                                @csrf
                                {{--                                @method('put')--}}
                                <div class="form-group">
                                    <label for="features_en">{{trans('features.feature_en')}}</label>
                                    <textarea type="text"    name="features_en" id="features_en" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="features_ar">{{trans('features.feature_ar')}}</label>
                                    <textarea type="text"    name="features_ar" id="features_ar" class="form-control"></textarea>
                                </div>


                                <br>
                                <button class="btn btn-success" type="submit">{{trans('features.addfeature')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
