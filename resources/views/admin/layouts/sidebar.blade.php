<aside class="main-sidebar elevation-4" style="background: linear-gradient(145deg, #5D44F8, #6F53F9);">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link" style="text-align: center; padding: 15px 0;">
        <img src="{{ asset('images/logo12.png') }}" alt="Logo" class="brand-image img-circle elevation-2" style="width: 40px;">
        <span class="brand-text font-weight-bold" style="color: #fff; font-size: 18px;">ADMIN</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style="padding-top: 10px;">
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="font-size: 16px;">
                <li class="nav-item" style="border-bottom: 2px solid #e0e0e0;">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link" style="color: #fff; padding: 12px 15px; border-radius: 5px; transition: background 0.3s, color 0.3s;">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: #fff;"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item" style="border-bottom: 2px solid #e0e0e0;">
                    <a href="{{ route('admin.category') }}" class="nav-link" style="color: #fff; padding: 12px 15px; border-radius: 5px; transition: background 0.3s, color 0.3s;">
                        <i class="nav-icon fas fa-hamburger" style="color: #fff;"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item" style="border-bottom: 2px solid #e0e0e0;">
                    <a href="{{ route('admin.products') }}" class="nav-link" style="color: #fff; padding: 12px 15px; border-radius: 5px; transition: background 0.3s, color 0.3s;">
                        <i class="nav-icon fas fa-pizza-slice" style="color: #fff;"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item" style="border-bottom: 2px solid #e0e0e0;">
                    <a href="{{ route('admin.orders') }}" class="nav-link" style="color: #fff; padding: 12px 15px; border-radius: 5px; transition: background 0.3s, color 0.3s;">
                        <i class="nav-icon fas fa-shopping-bag" style="color: #fff;"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item" style="border-bottom: 2px solid #e0e0e0;">
                    <a href="{{ route('admin.users') }}" class="nav-link" style="color: #fff; padding: 12px 15px; border-radius: 5px; transition: background 0.3s, color 0.3s;">
                        <i class="nav-icon fas fa-users" style="color: #fff;"></i>
                        <p>Customers</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<style>
    .nav-link:hover {
        background-color: #3E2CBB;
        color: #fff;
    }
    .nav-link i {
        transition: color 0.3s;
    }
    .nav-link:hover i {
        color: #fff;
    }
</style>
