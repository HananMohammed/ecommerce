<div class="app-main" >
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
        </div>
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">{{trans('dashboards.title')}}</li>
                    @can('manage.users')
                    <li>
                        <a href="#">
                            <i class="metismenu-icon fas fa-cog"></i>
                            {{trans('dashboards.setting')}}
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            @can('admin.dashboard')
                            <li>
                                <a href="{{route('register')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('dashboards.addAdmin')}}
                                </a>
                            </li>
                            @endcan
                            @can('admin.dashboard')
                                <li>
                                    <a href="{{route('admin.dmails.index')}}">
                                        <i class="fa fa-envelope-o"></i>
                                        {{trans('dashboards.mails')}}
                                    </a>
                                </li>
                            @endcan
                            <li>
                                <a href="{{route('admin.users.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('dashboards.removeadmin')}}
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('author.dashboard')
                    <li>
                        <a href="#">
                            <i class="metismenu-icon fas fa-home"></i>
                            {{trans('dashboards.homePage')}}
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>

                            <li>
                                <a href="{{route('admin.slider.index')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('dashboards.slider')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.about.edit')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('about.about')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.mission.edit')}}">
                                    <i class="metismenu-icon"></i>
                                    {{trans('mission.mission')}}
                                </a>
                            </li>
                        </ul>
                    </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon far fa-id-card"></i>
                                {{trans('dashboards.contactUs')}}
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('admin.phone.index')}}">
                                        <i class="metismenu-icon"></i>
                                        {{trans('phone.addPhone')}}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('admin.email.index')}}">
                                        <i class="metismenu-icon"></i>
                                        {{trans('mail.addMail')}}
                                    </a>
                                </li>
{{--                                <li>--}}
{{--                                    <a href="{{route('dmap.index')}}">--}}
{{--                                        <i class="metismenu-icon"></i>--}}
{{--                                        {{trans('map.addmap')}}--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="{{route('daddress.index')}}">--}}
{{--                                        <i class="metismenu-icon"></i>--}}
{{--                                        {{trans('address.addAddress')}}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{route('dsocial.index')}}">--}}
{{--                                        <i class="metismenu-icon"></i>--}}
{{--                                        {{trans('social.addsocial')}}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </li>



                    @endcan
                    @can('author.user')
                        <li>
                            <a href="#">
                                <i class="metismenu-icon fas fa-newspaper"></i>
                                {{trans('project.project')}}
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                @can('author.dashboard')
{{--                                <li>--}}
{{--                                    <a href="{{route('dcategory.index')}}">--}}

{{--                                        {{trans('project.category')}}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{route('dproject.index')}}">--}}

{{--                                            {{trans('project.allproject')}}--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                @endcan

                                @can('user.dashboard')
{{--                                <li>--}}
{{--                                    <a href="{{route('dseo.index')}}">--}}

{{--                                        {{trans('seo.addseo')}}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('user.dashboard')
                        <li>
                            <a href="#">
                                <i class="metismenu-icon fas fa-file-code"></i>
                                {{trans('seo.seo')}}
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>

{{--                                <li>--}}
{{--                                    <a href="{{route('dseo.index')}}">--}}

{{--                                        {{trans('seo.addseo')}}--}}
{{--                                    </a>--}}
{{--                                </li>--}}

                            </ul>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </div>


