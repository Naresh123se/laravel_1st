<div class="nav1   ">
    <div class="container con11 ">

        <nav class="navbar navbar-expand-lg nbl ">
            <a class=" " href="/">
                <img src="{{ asset('/images/logo.svg') }}" alt="Image" width="80" height="60" alt=""
                    class="mr-5">
            </a>

            <div class="collapse navbar-collapse">

                <div class="ml-auto">
                    <ul class=" menunav">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ Request::is('menu') ? 'active' : '' }}">
                            <a class="nav-link" href="/menu">Menu</a>
                        </li>
                        <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                            <a class="nav-link" href="/about-us" style="color: black;">About Us</a>
                        </li>
                        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="/contact" style="color: black;">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            @auth
                            @if (Auth::user()->role == 'admin')
                            <a class="nav-link dropdown-toggle" style="color: black;" href=""
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}" style="color: black;">Dashboard</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}" style="color: black;">Logout</a>
                            </div>
                            @else
                            @if (Auth::user()->email_verified_at)
                            <a class="nav-link dropdown-toggle" style="color: orangered;" href=""
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('my-profile') }}" style="color: black;">My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('my-orders') }}" style="color: black;">My Orders</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="color: black;">Logout</button>
                                </form>
                            </div>
                            @else
                            <a class="nav-link dropdown-toggle" style="color: orangered;" href=""
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('verify-email') }}" style="color: black;">Verify Email</a>
                            </div>
                            @endif
                            @endif
                            @else
                            <a class="nav-link" style="color: black;" href="" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('login') }}" style="color: black;">Login</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('register') }}" style="color: black;">SignUp</a>
                            </div>
                            @endauth
                        </li>
                        @auth
                        <li class="nav-item">
                            @php
                            $cartCount = App\Helpers\CartHelper::CartCount();
                            @endphp
                            @if (Auth::user()->email_verified_at)
                            <div class="cart-container">
                                <a class="cart" href="{{ url('/cart', Auth::user()->id) }}" style="text-decoration: none">
                                    <img src="{{ asset('/images/cart.png') }}" alt="Cart Icon" width="20" height="20">
                                </a>
                                ({{ $cartCount }})
                            </div>
                            @else
                            <div class="cart-container">
                                <a class="cart disabled" href="{{ url('/cart', Auth::user()->id) }}"
                                    style="text-decoration: none; pointer-events: none;">
                                    <img src="{{ asset('/images/cart.png') }}" alt="Cart Icon" width="20" height="20">
                                </a>
                                ({{ $cartCount }})
                            </div>
                            @endif
                        </li>
                        @endauth
                    </ul>
                </div>

            </div>
        </nav>

    </div>
</div>