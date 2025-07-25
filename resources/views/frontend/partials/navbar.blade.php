<nav class="navbar navbar-expand-lg navbar-light bg-light-pink">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.home') ? 'active' : '' }} fw-medium" href="{{ route('frontend.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.shop') ? 'active' : '' }} fw-medium" href="{{ route('frontend.shop') }}">Shop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-medium" href="#" role="button"
                        data-bs-toggle="dropdown">
                        Categories
                    </a>
                    <ul class="dropdown-menu rounded-3">
                        <li><a class="dropdown-item" href="shop.html?category=clothing">Baby Clothing</a></li>
                        <li><a class="dropdown-item" href="shop.html?category=toys">Toys & Games</a></li>
                        <li><a class="dropdown-item" href="shop.html?category=feeding">Feeding</a></li>
                        <li><a class="dropdown-item" href="shop.html?category=care">Baby Care</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.contact') ? 'active' : '' }} fw-medium" href="{{ route('frontend.contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
