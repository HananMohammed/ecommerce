@extends('dashboard.layaout.home')

@section('content')
    <div class="app-main__outer"  >
    <div class="app-main__inner "style="padding: 30px 30px 0;flex: 1;display: block ;width: 1060px;float: left;" >
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-chart-pie  metismenu-icon">
                    </i>
                </div>
                <div>{{trans('dash.title')}}

                </div>
            </div>

        </div>
    </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">

                            <div class="widget-heading">{{trans('dash.croups')}}<h3 class="text-center"></h3></div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{trans('dash.news')}}<h3 class="text-center"></h3></div>

                        </div>
                        <div class="widget-content-right">
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-grow-early">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{trans('dash.subscribers')}}:<h3 class="text-center"></h3></div>

                        </div>
                        <div class="widget-content-right">
                             </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-premium-dark">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Products Sold</div>
                            <div class="widget-subheading">Revenue streams</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">{{trans('dash.subscribe')}}

                </div>
                <div class="table-responsive">
                    <table id="example" class="display nowrap mb-0 table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr>

                            <th>{{trans('dash.name')}} </th>
                            <th>{{trans('dash.mails')}} </th>
                            <th>{{trans('dash.role')}} </th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $user )
                            <tr>


                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{implode(' , ' ,$user->roles()->get()->pluck('name')->toArray())}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th># </th>
                            <th>{{trans('dash.mails')}} </th>

                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
