@extends('admins.layouts.master')
@section('title') Mission @endsection
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('mission.mission')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{route('admin.mission.update')}}"  >
                                @csrf
                        @method('put')

                                <div class="form-group">
                                    <label for="mission_ar">{{trans('mission.missionAr')}}</label>
                                    <textarea type="text"    name="mission_ar" id="mission_ar" class="form-control">{{$mission->mission_ar}}</textarea>
                                    @error('mission_ar')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="mission_en">{{trans('mission.missionEn')}}</label>
                                    <textarea type="text"    name="mission_en" id="mission_en" class="form-control">{{$mission->mission_en}}</textarea>
                               @error('mission_en')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="vissionAr">{{trans('mission.vissionAr')}}</label>
                                    <textarea type="text"    name="vission_ar" id="vission_ar" class="form-control">{{$mission->vission_ar}}</textarea>
                                    @error('vission_ar')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="vissionEn">{{trans('mission.vissionEn')}}</label>
                                    <textarea type="text"    name="vission_en" id="vission_en" class="form-control">{{$mission->vission_en}}</textarea>
                                    @error('vission_en')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
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
