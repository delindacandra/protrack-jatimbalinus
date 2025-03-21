<div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            {{-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">{{$breadcrumb->section}}</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$breadcrumb->list}}</li> --}}
        </ol>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <ul class="navbar-nav d-flex align-items-center  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item dropdown pe-3 d-flex align-items-center">
            </li>
            <li class="nav-item d-flex align-items-center">
                <a href="{{ asset('template/pages/sign-in.html" class="nav-link text-body font-weight-bold px-0') }}">
                    <i class="material-symbols-rounded">account_circle</i>
                </a>
            </li>
        </ul>
    </div>
</div>
