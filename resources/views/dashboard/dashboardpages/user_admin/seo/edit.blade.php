@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{trans('seo.seo')}}</h5>
                        <div class="main-card p-5 card">
                            <form method="post" action="{{ route('dseo.store') }}"  >
                                @csrf
                                {{-- @method('put')--}}

                              <!--***************************title -description -keyword****************************************-->
                                <div class="form-group">
                                    <label for="title_en">{{trans('seo.titleeng')}}</label>
                                    <input type="text"    name="title_en" id="title_en" class="form-control" >
                                    @error('title_en')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title_ar">{{trans('seo.titlear')}}</label>
                                    <input type="text"    name="title_ar" id="title_ar" class="form-control" >
                                    @error('title_ar')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                    <div class="form-group">
                                        <label for="description_en	">{{trans('seo.desceng')}}</label>
                                        <input type="text"    name="description_en" id="description_en" class="form-control" >
                                        @error('description_en')
                                        <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description_ar">{{trans('seo.descar')}}</label>
                                        <input type="text"    name="description_ar" id="description_ar" class="form-control" >
                                        @error('description_ar')
                                        <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword_en">{{trans('seo.keywordeng')}}</label>
                                        <input type="text"    name="keyword_en" id="keyword_en" class="form-control" >
                                        @error('keyword_en')
                                        <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword_ar">{{trans('seo.keywordar')}}</label>
                                        <input type="text"    name="keyword_ar" id="keyword_ar" class="form-control" >
                                        @error('keyword_ar')
                                        <div  style="color: darkred; font-weight: bold">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--***********************end title -description -keyword********************************************-->

                                <div class="form-group">
                                    <label for="script_head">{{trans('seo.scripthead')}}</label>
                                    <input type="text"    name="script_head" id="script_head" class="form-control" >
                                    @error('script_head')
                                    <div style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="script_footer">{{trans('seo.scriptfooter')}}</label>
                                    <input type="text"    name="script_footer" id="script_footer" class="form-control" >
                                    @error('script_footer')
                                    <div  style="color: darkred; font-weight: bold">{{ $message }}</div>
                                    @enderror
                                </div>


                                <br>
                                <button class="btn btn-success" type="submit">{{trans('seo.addseo')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
