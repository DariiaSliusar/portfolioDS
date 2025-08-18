<header>
    <nav>
        <ul>
            <li><img src="../assets/img/logo.png" alt=""></li>
        </ul>
        <ul class="header-profile">
            @if (Auth::user())
                <li class="avatar-item">
                    @if(Auth::user()->image)
                        <img src="{{ asset('images/' . Auth::user()->image) }}" alt="" class="avatar-img">
                    @else
                        <img src="{{ asset('template/assets/img/avatar.jpg') }}" alt="" class="avatar-img">
                    @endif
                </li>
                <li>
                    @if(Auth::user()->email)
                        <span>{{ Auth::user()->email }}</span>
                    @else
                        <span>dariiasliusar.com</span>
                    @endif
                </li>
            @endif
        </ul>
    </nav>
    <span class="header-profile-nav">
        <span> <i class="fa fa-sort-up"></i></span>
        <ul>
            <li><a href="profile.html">Profile</a></li>
            <hr class="hr">
            <li><a href="#">Message</a></li>
            <hr class="hr">
            <li>
                <a href="{{ route('logout') }}">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <span onclick="event.preventDefault(); this.closest('form').submit();">
                            Logout
                        </span>
                    </form>
                </a>
            </li>
        </ul>
    </span>
</header>
