<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid" >
            <p class="lead">{{trans('contact.text1')}}</p>
            <h1>{{trans('contact.text2')}}</h1>
            <hr class="line">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
<!-- Contact Form -->
    <div class="contact-section">
        <div class="row">
            <div class="col-lg-7 ml-3 contact-msg">
                <form action="{{route('form.store')}}"  method="post" enctype="multipart/form-data">
                                      @csrf
                    <h1 class="mr-5"> {{trans('contact.msg')}}</h1>
                    <div class="row ">

                            <div class="  col-lg-5 col-xs-10 form-group">
                                <input type="text" class="form-control" name="name" placeholder="{{trans('contact.name')}}" >
                                @error('name')
                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="  col-lg-5 col-xs-10 form-group">
                                <input type="email" class="form-control" name="email" placeholder="{{trans('contact.email')}}">
                                @error('email')
                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="  col-lg-5 col-xs-10 form-group">
                               <input type="phone" class="form-control" name="phone" placeholder="{{trans('contact.phone')}}">
                                @error('phone')
                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="  col-lg-5 col-xs-10 form-group">
                            <input type="file" class="form-control" name="file" placeholder="{{trans('contact.file')}}">
                                @error('file')
                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="  col-lg-10 col-xs-10 form-group">
                                <input type="text" class="form-control" name="subject"placeholder="{{trans('contact.subject')}}" >
                            </div>
                        @error('subject')
                        <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                            <div class="  col-lg-10 col-xs-10 form-group form-message">
                                <textarea name="message" rows="5" class="form-control" placeholder="{{trans('contact.message')}}" ></textarea>
                            </div>
                        @error('message')
                        <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                       <div class="col-12 form-submit">
                           <input type="submit" class="btn btn-main " value="{{trans('contact.send')}}">
                       </div>
                     </div>
                </form>

            </div>

            <div class="col-12 col-lg-7">
            </div>
        </div>
    </div>
</div>


