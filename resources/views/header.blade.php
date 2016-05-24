<nav class="navbar unique-color-dark navbar-fixed-top z-depth-1" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="{{ URL::asset('/') }}">ArcadeCrafts</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    @if (Session::has('username'))
                        <li class="dropdown hidden-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Session::get('username')}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="divider hidden-lg"></li>
                                <li><a href="{{ URL::asset('/member#info') }}">帳號資訊</a></li>
                                <li><a href="{{ URL::asset('/member#record') }}">交易記錄</a></li>
                            </ul>
                        </li>
                    @else
                        <a class="nav-link" href="{{ URL::asset('/register') }}">免費註冊</a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">客服中心</a>
                </li>
                <li class="nav-item">
                    @if (Session::has('username'))
                        <a class="nav-link" href="{{ URL::asset('/logout') }}">登出</a>
                        @else
                        <a class="nav-link" href="{{ URL::asset('/login') }}">登入</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>