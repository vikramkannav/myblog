<div class="col-xs-1 adv_right" >
    <div class="logout_btn" style="line-height: 0!important;">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class=" blue_color-text icon-logout icons"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>