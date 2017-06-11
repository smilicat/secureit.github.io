   <!-- Navigation -->
      <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand"  href="/">Secure<strong>IT</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="nav navbar-nav navbar-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
            @else

             <li class="nav navbar-nav navbar-right">
                                <a href="#" class="nav navbar-nav navbar-right dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="nav navbar-nav navbar-right dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>
                                </ul>
                                @if (Route::has('login'))
                <ul class="nav navbar-nav navbar-right">
                      @if (Auth::check())
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                     <li>
                        <a href="{{ url('/news') }}">News</a>
                    </li>
                    <li>
                        <a href="{{ url('/property') }}">Properties</a>
                    </li>

                    <li>
                        <a href="{{ url('/page/contact') }}">Contact Us</a>
                    </li>
                    @else
                      <a href="{{ url('/page/contact') }}">Contact Us</a>
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                    
                    
                </ul>
            </div>
                @endif
                            </li>

                @endif
               
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    