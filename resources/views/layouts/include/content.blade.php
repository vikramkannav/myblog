<div id="page-content-wrapper">
    <div class="content-header">
        <div class="col-md-12">
            <div class="col-xs-2">
                                             <span id="home">
                                            <a id="menu-toggle" href="#">
                                                <i class="fa fa-bars ext"></i>
                                            </a>

                                        </span>

            </div>


            <div class="col-xs-8 col-sm-8 text-center"><h3>My India</h3>

            </div>
            <!--add for logout--------------->
            @include('layouts.include.logout')


        </div>
    </div>

    <div class="page-content inset" data-spy="scroll" data-target="#spy">


        <br/>


        <div class="row">
            <div class="col-md-12 adv_center">
                <img src="/img/logo.png" alt="GoPetie Logo" class="img-responsive">


                <h3>Welcome to the India.</h3>


            </div>

        </div>
        <div class="clearfix">&nbsp;</div>
        @yield('content')

    </div>

</div>
