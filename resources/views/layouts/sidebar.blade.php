<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
        target="_blank">
        <img src="{{ asset('image\logo_sementara.png') }}" class="navbar-brand-img" width="40" height="50"
            alt="main_logo">
        <span class="ms-1 text-sm text-dark">ProTrack</span>
    </a>
</div>
<hr class="horizontal dark mt-0 mb-2">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">

        {{-- ADMIN --}}
        <li class="nav-item">
            <a class="nav-link text-dark" href="">
                <i class="material-symbols-rounded opacity-5">dashboard</i>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Main Menu</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="">
                <i class="material-symbols-rounded opacity-5">inventory_2</i>
                <span class="nav-link-text ms-1">Data Barang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="">
                <i class="material-symbols-rounded opacity-5">move_to_inbox</i>
                <span class="nav-link-text ms-1">Barang Masuk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="">
                <i class="material-symbols-rounded opacity-5">outbox</i>
                <span class="nav-link-text ms-1">Barang Keluar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="">
                <i class="material-symbols-rounded opacity-5">assignment</i>
                <span class="nav-link-text ms-1">Permintaan</span>
            </a>
        </li>

        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ asset('template/pages/profile.html') }}">
                <i class="material-symbols-rounded opacity-5">person</i>
                <span class="nav-link-text ms-1">Profile</span>
            </a>
        </li>
    </ul>
</div>
<div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
        <a class="btn bg-gradient-dark w-100"
            href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">
            <i class="material-symbols-rounded me-2">logout</i>
            Log Out
        </a>
    </div>
</div>
