<nav class="d-flex flex-column flex-shrink-0 p-3 bg-light border-end" style="width: 250px; height: 100vh;">
    <div class="text-center py-4">
        @auth
            <img src="{{ Auth::user()->profile_pic_url }}" alt="Profile Picture" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
            <h3 class="h6">{{ Auth::user()->username }}</h3>
        @else
            <p>User not found</p>
        @endauth
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
            <a href="{{ url('/') }}" class="nav-link link-dark {{ Request::is('/') ? 'active' : '' }}" aria-current="page">
                <i class="bi bi-house-door-fill me-2"></i>Home
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ url('/dashboard') }}" class="nav-link link-dark {{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i>Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ url('/orders') }}" class="nav-link link-dark {{ Request::is('orders') ? 'active' : '' }}">
                <i class="bi bi-journal-text me-2"></i>Orders
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ url('/products') }}" class="nav-link link-dark {{ Request::is('products') ? 'active' : '' }}">
                <i class="bi bi-basket me-2"></i>Products
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ url('/customers') }}" class="nav-link link-dark {{ Request::is('customers') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i>Customers
            </a>
        </li>
        <!-- Additional links can be added here -->
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Settings</strong>
        </a>
        <!-- Settings Dropdown -->
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
</nav>
