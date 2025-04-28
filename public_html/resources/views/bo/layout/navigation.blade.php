<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <div id="nav_img_logo">
                        <img src="{{ asset('bo/images/huntr_logo_white2.png') }}" />
                    </div>

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::guard('web')->user()->email }}</strong>
                            </span> <span class="text-muted text-xs block"> admin <b class="caret"></b></span>
                        </span>
                    </a>

                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>

                <div class="logo-element">
                    GOJI BERRY
                </div>
            </li>
            <?php
                $url = \Request::url();
            ?>
            <li class="active">
                <a href="{{ route('news.index') }}"><i class="fa fa-book"></i> <span class="nav-label">News</span></a>
            </li>
        </ul>
    </div>
</nav>