<div class="topbar transition">
    <div class="bars">
        <button type="button" class="btn transition" id="sidebar-toggle">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="menu">
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="#" role="button">{{Auth::user()->name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" role="button" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
