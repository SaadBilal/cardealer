<ul>
    <li><a href={{ url('/') }}>Home</a></li>
    <li><a href={{ url('/car') }}>Inventory</a></li>
    <li><a href={{ url('/offer') }}>Offers</a></li>
    @if(Auth::guest())
        <li><a href={{ url('/auth/login') }}>Login</a></li>
    @else
        (^^,) Hello Master!
        <li><a href={{ url('/auth/logout') }}>Logout</a></li>
    @endif
</ul>
