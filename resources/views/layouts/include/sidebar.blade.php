<div id="sidebar-wrapper">
    <nav id="spy">
        <ul class="sidebar-nav nav">

            <li class="logo adv_center">
                <img src="img/logo.png" alt="GoPetie Logo" class="img-responsive gologo">
            </li>
            <li class="adv_center">
                <img src="img/user.png" class="img-responsive side-bar-img" >

                <span class="white_color-text"><h4>Eric Garcetti</h4></span>
                <span class="white_color-text"><h5>Los Angeles, CA</h5></span>
            </li>
            <li>
                <a href="history.html" >
                    <i class="fa fa-file-text-o" style="margin-left: -21px;"></i> History</a>
            </li>
            </li>
            <li>
                <a href="messages.html" >
                    <i class="fa fa-history" style="margin-left: -21px;"></i>Messages
                </a>
            </li>
            <li>
                <a href="license_form.html" >
                    <i class="icon-envelope-open icons"></i>License Form</a>
            </li>

            <li >
                <a href="{{URL::to(Auth::user()->id."/edit")}}" >
                    <i class="fa fa-paw" style="margin-left: -21px;"></i> My Account</a>
            </li>

        </ul>
    </nav>
</div>