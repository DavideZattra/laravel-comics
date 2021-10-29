<header>
    <nav class="top-navbar">
        <ul>
            <li><a href="#">dc power visa</a></li>
            <li><a href="#">additional dc sites</a></li>
        </ul>
    </nav>

    <nav class="main-navbar">
        
        <ul>
            <li><a href="#"><img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo"></a></li>
            <li class="{{request()->routeIs('characters') ? 'active' : ''}}"><a href="{{ route('characters') }}">characters</a></li>
            <li class="{{request()->routeIs('comics') ? 'active' : ''}}"><a  href="{{ route('comics') }}">comics</a></li>
            <li class="{{request()->routeIs('movies') ? 'active' : ''}}"><a href="{{ route('movies') }}">movies</a></li>
            <li class="{{request()->routeIs('tv') ? 'active' : ''}}"><a href="{{ route('tv') }}">tv</a></li>
            <li class="{{request()->routeIs('games') ? 'active' : ''}}"><a href="{{ route('games') }}">games</a></li>
            <li class="{{request()->routeIs('collectibles') ? 'active' : ''}}"><a href="{{ route('collectibles') }}">collectibles</a></li>
            <li class="{{request()->routeIs('videos') ? 'active' : ''}}"><a href="{{ route('videos') }}">videos</a></li>
            <li class="{{request()->routeIs('fans') ? 'active' : ''}}"><a href="{{ route('fans') }}">fans</a></li>
            <li class="{{request()->routeIs('news') ? 'active' : ''}}"><a href="{{ route('news') }}">news</a></li>
            <li class="{{request()->routeIs('shop') ? 'active' : ''}}"><a href="{{ route('shop') }}">shop</a></li>
            <li class="searchbar">
                <input type="text" placeholder="search">             
            </li>
        </ul>
    </nav>
</header>