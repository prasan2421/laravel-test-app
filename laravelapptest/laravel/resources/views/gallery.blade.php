@extends('index1')

@section('title')
   gallery
    @yield('title')
@stop

@section('body')
    <section>
        <div class="container mar-top-25px">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab">FIRST</a></li>
                                <li><a href="#tab2default" data-toggle="tab">SECOND</a></li>
                                <li><a href="#tab3default" data-toggle="tab">THIRD</a></li>
                                <li><a href="#tab4default" data-toggle="tab">FOURTH</a></li>

                            </ul>
                        </div>
                        <hr>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">

                                    <!----------------inside gallery------------------->



                                    <section>
                                        <div class="gallery-wrapper">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/1(1).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/2(2).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/3.jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/5.jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/6.jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/4.jpg')}}" class="img-responsive"></div></div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-----------------end galery---------------------->

                                </div>
                                <div class="tab-pane fade" id="tab2default">
                                    <!----------------inside gallery------------------->



                                    <section>
                                        <div class="gallery-wrapper">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/1(1).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/2(2).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/3).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/5.jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/6.jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/4.jpg')}}" class="img-responsive"></div></div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-----------------end galery---------------------->
                                </div>
                                <div class="tab-pane fade" id="tab3default">
                                    <!----------------inside gallery------------------->



                                    <section>
                                        <div class="gallery-wrapper">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/1(1).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/2(2).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/3).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/5).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/6).jpg')}}" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="{{URL::asset('images/4).jpg')}}" class="img-responsive"></div></div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-----------------end galery---------------------->
                                </div>
                                <div class="tab-pane fade" id="tab4default">
                                    <!----------------inside gallery------------------->



                                    <section>
                                        <div class="gallery-wrapper">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="images/1(1).jpg" class="img-responsive imghvr-fade"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="images/2(2).jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="images/3.jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="images/5.jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="images/6.jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery"><img src="images/4.jpg" class="img-responsive"></div></div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-----------------end galery---------------------->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @stop

@section('javascriptfiles')
            <!--jquery-->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="{{URL::asset('/assets/js/vendor/jquery.min.js')}}"><\/script>')</script>
    <!--navbar toggle-->





    <!--
    <script>
        $(document).ready(function () {
                  $(".navbar-toggle").on("click", function () {
                        $(this).toggleClass("active");
                  });
            });
        </script>
        -->


    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

    <!--full screen nav overflow-->
    <script>
        $(document).ready(function(){
            $(".hamburger-icon").click(function() {
                $("body").css({"overflow":"hidden"});
            });
            $(".closebtn").click(function() {
                $("body").css({"overflow":"auto"});
            });

        });
    </script>
    @stop