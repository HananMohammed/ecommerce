<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top ">
    <div class="container-fluid">
    <a href="#" class="navbar-brand font-italic font-weight-bold " > <img   style="max-height:50px;" src="{{URL::asset('public/images/person.svg')}}"> Hanan Portfolio</a>
        <div class="languages px-4">
            <a class="text-uppercase mainclr2" href="{{route('lang',[trans('nav.langval')])}}">{{trans('nav.langval')}}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenue">
        <span class="navbar-toggler-icon"></span>
    </button>

       <div class="collapse navbar-collapse "  id ="navMenue">
           <ul class="navbar-nav  ml-auto ">
           <li class="nav-item " >
               <a href="#" class="nav-link">{{trans('webnav.home')}}</a>
           </li>
           <li class="nav-item">
               <a href="#" class="nav-link">{{trans('webnav.about')}}</a>
           </li>
           <li class="nav-item ">
               <a href="#" class="nav-link">{{trans('webnav.skills')}}</a>
           </li>
           <li class="nav-item">
               <a href="#" class="nav-link">{{trans('webnav.resume')}}</a>
           </li>
           <li class="nav-item">
               <a href="#" class="nav-link">{{trans('webnav.services')}}</a>
           </li>
           <li class="nav-item">
               <a href="#" class="nav-link">{{trans('webnav.projects')}}</a>
           </li>
           <li class="nav-item">
               <a href="#" class="nav-link">{{trans('webnav.Subscribe')}}</a>
           </li>
           <li class="nav-item ">
               <a href="#" class="nav-link" data-target="#contact_us">{{trans('webnav.contact')}}</a>
           </li>
           </ul>
       </div>

    </div>
</nav>
