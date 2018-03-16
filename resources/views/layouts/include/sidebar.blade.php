<div id="sidebar-wrapper">
    <nav id="spy">
        <ul class="sidebar-nav nav">

            <li class="logo adv_center">
                <img src="/img/logo.png" alt="GoPetie Logo" class="img-responsive gologo">
            </li>
            <li class="adv_center">
                <img src="{{Auth::user()->picture?:'/img/user.png'}}" class="img-responsive side-bar-img" >

                <span class="white_color-text"><h4>{{Auth::user()->name}}</h4></span>
                <span class="white_color-text"><h5>{{Auth::user()->city}}</h5></span>
            </li>

            <li>
                <a href="{{ URL::to('home') }}" >
                    <i class="fa fa-file-text-o" style="margin-left: -21px;"></i> All Posts</a>
            </li>

            <li>
                <a href="{{ URL::to('posts') }}" >
                    <i class="fa fa-file-text-o" style="margin-left: -21px;"></i> My Posts</a>
            </li>

            <li>
                <a href="{{ URL::to('posts/create') }}" >
                    <i class="fa fa-file-text-o" style="margin-left: -21px;"></i>Create Post</a>
            </li>

             <li >
                <a href="{{URL::to(Auth::user()->id."/edit")}}" >
                    <i class="fa fa-paw" style="margin-left: -21px;"></i> My Account</a>
            </li>

            <li >
                <a href="{{URL::to(Auth::user()->id."/change-password")}}" >
                    <i class="fa fa-paw" style="margin-left: -21px;"></i> Change Password</a>
            </li>


        </ul>
    </nav>
</div>