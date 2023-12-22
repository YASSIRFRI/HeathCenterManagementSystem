{{-- sidebar.blade.php --}}

<nav class="sidebar">
    <div class="sidebar-profile text-center">
        @auth
            <img src="{{ Auth::user()->profile_pic_url }}" alt="Profile Picture" class="profile-pic img-fluid rounded-circle mb-3">
            <h3 class="username">{{ Auth::user()->username }}</h3>
        @else
            <p>User not found</p>
        @endauth
    </div>
    <hr>
    <ul class="nav flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                <i class="bi bi-house-door-fill me-2"></i>Home
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i>Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/orders') }}" class="nav-link {{ Request::is('orders') ? 'active' : '' }}">
                <i class="bi bi-journal-text me-2"></i>Orders
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/products') }}" class="nav-link {{ Request::is('products') ? 'active' : '' }}">
                <i class="bi bi-basket me-2"></i>Products
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/customers') }}" class="nav-link {{ Request::is('customers') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i>Customers
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Settings</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
</nav>
