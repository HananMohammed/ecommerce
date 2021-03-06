<div class="outer-nav">
    <!--Top Nav -->
    <nav class=" top-nav navbar navbar-expand-md navbar-light ">
        <button class="navbar-toggler" id="media-navbar" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="container">
                <div class="ul1">
                    <ul class="navbar-nav">
                        <li class="nav-item" ><a  class="nav-link" id="language" href="{{route('lang',trans('nav.langval'))}}"> @lang('nav.lang')</a></li>
                    </ul>
                </div>
                <div class="ul2">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('front.homepage')}}">@lang('nav.home') <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('nav.categories')
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">category 1</a></li>
                                <li><a class="dropdown-item" href="#">category 2</a></li>
                                <li><a class="dropdown-item" href="#">category 3</a></li>
                                <li><a class="dropdown-item" href="#">category 1</a></li>
                                <li><a class="dropdown-item" href="#">category 2</a></li>
                                <li><a class="dropdown-item" href="#">category 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('nav.brand')
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">brand 1</a></li>
                                <li><a class="dropdown-item" href="#">brand 2</a></li>
                                <li><a class="dropdown-item" href="#">brand 3</a></li>
                                <li><a class="dropdown-item" href="#">brand 1</a></li>
                                <li><a class="dropdown-item" href="#">brand 2</a></li>
                                <li><a class="dropdown-item" href="#">brand 3</a></li>
                                <li><a class="dropdown-item" href="#">brand 1</a></li>
                                <li><a class="dropdown-item" href="#">brand 2</a></li>
                                <li><a class="dropdown-item" href="#">brand 3</a></li>
                                <li><a class="dropdown-item" href="#">brand 1</a></li>
                                <li><a class="dropdown-item" href="#">brand 2</a></li>
                                <li><a class="dropdown-item" href="#">brand 3</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('nav.contact')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span><span class="fas fa-sign-in-alt"></span>@lang('nav.login')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user-plus"></i>@lang('nav.register')</a>
                        </li>

                    </ul>

                </div>
            </div>


        </div>
    </nav>
    <!--Second Nav-->
    <div class="row m-auto">
        <div class="col-md-2 ">
            <a class="navbar-brand" href="{{route('front.homepage')}}">
                <img src="{{asset_public('images/[pro-demo.livelycart.com][190]logo.png')}}">
            </a>
        </div>

        <div class="col-lg-6 col-md-4  m-auto" >
            <form class="form-group">
                <div class="input-group  nav-search" >
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <span class="input-group-text bg-light " id="basic-addon1"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2 col-sm-12 m-auto nav-login">
            <div class="btn-group nav-login" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light" style="line-height: 0!important;"><i class="fas fa-shopping-cart"></i> <label># item </label>/ <label>$ 0.00 USD </label></button>
                <button type="button" class="btn btn-secondary">login</button>
             </div>
        </div>

    </div>
</div>


<div class="wrapper">
        <ul class="navbar-nav ">
            <br>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('front.homepage')}}">@lang('nav.home') <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('nav.categories')
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">category 1</a></li>
                    <li><a class="dropdown-item" href="#">category 2</a></li>
                    <li><a class="dropdown-item" href="#">category 3</a></li>
                    <li><a class="dropdown-item" href="#">category 1</a></li>
                    <li><a class="dropdown-item" href="#">category 2</a></li>
                    <li><a class="dropdown-item" href="#">category 3</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('nav.brand')
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">brand 1</a></li>
                    <li><a class="dropdown-item" href="#">brand 2</a></li>
                    <li><a class="dropdown-item" href="#">brand 3</a></li>
                    <li><a class="dropdown-item" href="#">brand 1</a></li>
                    <li><a class="dropdown-item" href="#">brand 2</a></li>
                    <li><a class="dropdown-item" href="#">brand 3</a></li>
                    <li><a class="dropdown-item" href="#">brand 1</a></li>
                    <li><a class="dropdown-item" href="#">brand 2</a></li>
                    <li><a class="dropdown-item" href="#">brand 3</a></li>
                    <li><a class="dropdown-item" href="#">brand 1</a></li>
                    <li><a class="dropdown-item" href="#">brand 2</a></li>
                    <li><a class="dropdown-item" href="#">brand 3</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">@lang('nav.contact')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span><span class="fas fa-sign-in-alt"></span>@lang('nav.login')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-plus"></i>@lang('nav.register')</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item" >
                <a  class="nav-link" id="language" href="{{route('lang',trans('nav.langval'))}}"> @lang('nav.lang')</a>
            </li>

        </ul>

    </div>


