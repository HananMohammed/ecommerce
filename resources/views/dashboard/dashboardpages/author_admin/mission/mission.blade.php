@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('mission.mission')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dmission.store') }}"  >
                                @csrf
{{--                                @method('put')--}}
                                <div class="form-group">
                                    <label for="missionAr">{{trans('mission.missionAr')}}</label>
                                    <textarea type="text"    name="mission_ar" id="missionAr" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="missionEn">{{trans('mission.missionEn')}}</label>
                                    <textarea type="text"    name="mission_en" id="missionEn" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="vissionAr">{{trans('mission.vissionAr')}}</label>
                                    <textarea type="text"    name="vission_ar" id="vissionAr" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="vissionEn">{{trans('mission.vissionEn')}}</label>
                                    <textarea type="text"    name="vission_en" id="vissionEn" class="form-control"></textarea>
                                </div>


                                <br>
                                <button class="btn btn-success" type="submit">{{trans('mission.add')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
