<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
@if (Auth::user()->role_id == 1)
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-left justify-content-left" href="#">
        <div class="sidebar-brand-text">Rental Mobil</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Menu Utama
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('dashboard')}}" >
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>
    <li class="nav-item {{ (request()->route()->uri == 'car' || request()->route()->uri == 'Category') ? 'active' : '' }}">
        <a class="nav-link" href="#"  data-toggle="collapse" data-target="#car" aria-expanded="true" aria-controls="car">
            <i class="fas fa-fw fa-car"></i>
            <span>Data Mobil</span>
        </a>
        <div id="car" class="collapse {{ (request()->route()->uri == 'car' || request()->route()->uri == 'Category') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ (request()->route()->uri == 'car' || request()->route()->uri == 'car-show/{slug}' || request()->route()->uri == 'car-edit/{slug}' || 
            request()->route()->uri == 'car-delete/{slug}' || request()->route()->uri == 'car-create') ? 'active' : '' }}" href="car">Mobil</a>
            <a class="collapse-item {{ (request()->route()->uri == 'Category' || request()->route()->uri == 'Category-create' || 
            request()->route()->uri == 'Category-edit/{slug}' || request()->route()->uri == 'Category-delete/{slug}') ? 'active' : '' }}" href="Category">Merk</a>
            </div>
        </div>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-car"></i>
            <span>Mobil</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-car"></i>
            <span>Merk</span>

        </a>
    </li> --}}
    <li class="nav-item {{ (request()->route()->uri == 'customer' || request()->route()->uri == 'customer-show/{slug}' || request()->route()->uri == 'customer-edit/{slug}' || 
        request()->route()->uri == 'customer-delete/{slug}' || request()->route()->uri == 'customer-create') ? 'active' : '' }}">
        <a class="nav-link" href="customer">
            <i class="fas fa-fw fa-user"></i>
            <span>Customer</span>
        </a>
    </li>
    <li class="nav-item {{ (request()->route()->uri == 'transaksi' || request()->route()->uri == 'transaksi-edit/{id}' || request()->route()->uri == 'transaksi-destroy/{id}' || 
        request()->route()->uri == 'transaksi-create') ? 'active' : '' }}">
        <a class="nav-link" href="transaksi">
            <i class="fas fa-fw fa-book"></i>
            <span>Transaksi</span>
        </a>
    </li>
@else
    <a class="sidebar-brand d-flex align-items-left justify-content-left" href="#">
        <div class="sidebar-brand-text"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Menu Utama
    </div>
    
    <li class="nav-item">
        <a class="nav-link" href="profile">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Category">
            <i class="fas fa-fw fa-user"></i>
            <span>Merk</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-cog"></i>
            <span>Transaksi</span>
        </a>
    </li>
@endif
</ul>
<!-- End of Sidebar -->
