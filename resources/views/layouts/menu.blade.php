<li class="nav-item {{ Request::is('produks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('produks.index') }}">
        <i class="nav-icon icon-basket"></i>
        <span>Produk</span>
    </a>
</li>
<li class="nav-item {{ Request::is('produks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon icon-arrow-left"></i>
        <span>Logout</span>
    </a>
</li>
