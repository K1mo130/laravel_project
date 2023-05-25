<header>
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ route('profile.show') }}">Profile</a>
                <a href="{{ route('logout') }}">Log out</a>
            @else
                <a href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</header>