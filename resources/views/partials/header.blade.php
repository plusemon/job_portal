<!-- Start Menu Area -->
<div class="menu_area sticky">
    <div class="container">
        <div class="header_menu">
            <div class="menu_logo">
                <h2>
                    <a href="{{ url('/') }}">Job<span>Panel</span></a>
                </h2>
            </div>
            <div class="menues">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                   @guest
                   <li><a href="{{ url('seeker/resume/create') }}">Jobseeker</a></li>
                   <li><a href="{{ url('employer/company/create') }}">Employer</a></li>

                   @endguest
                </ul>
            </div>
            <div class="menu_login_area">
                <div class="dropdown bg-transparent">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                       @auth
                       <img src="{{ asset('public/storage'.Auth::user()->avater) }}" alt="..." class="rounded-circle"
                       style="width: 32px">
                       @endauth
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @guest
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        @else

                        @if (Auth::user()->role == 'seeker')
                        <a class="dropdown-item" href="{{ url('seeker') }}">Dashboard</a>
                        @endif
                        @if (Auth::user()->role == 'admin')
                        <a class="dropdown-item" href="{{ url('admin') }}">Dashboard</a>
                        @endif
                        @if (Auth::user()->role == 'employer')
                        <a class="dropdown-item" href="{{ url('employer') }}">Dashboard</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Menu Area -->