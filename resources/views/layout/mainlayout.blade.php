<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GymBrot - Tempat Beli Alat GYM Kamu!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg p-0 bg-white shadow-sm fixed-top">
        <div class="container">
            <a href="/store" class=" n-semibold"><img src="{{asset('assets/img/maskot/maskot.webp')}}" width="130px" alt=""><img src="{{asset('assets/img/maskot/icon.png')}}" width="100px"></a>
            <button class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-lg-5 mx-md-0 mx-0 w-100 mt-2 mt-lg-0">
                    <li class="nav-item w-100">
                        <form class="d-flex input-group w-100" action="/search" method="get" role="search">
                            <input class="form-control " name="q" autocomplete="off" type="search" placeholder="Lagi khilaf apa hari ini?" >
                            <button class="input-group-text bg-org text-white border-0 " id="basic-addon2"><i class="bi bi-search"></i></button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex">
                    <li class="nav-item mx-1 d-inline-block ">
                        <a href="/transaksi" class="nav-link color-org"><i class="bi bi-box2"></i> <span class="d-inline d-md-inline d-lg-none ms-2">Transaksi</span></a>
                    </li>
                    <li class="nav-item mx-1 d-inline-block  ">
                        <a href="/cart" class="nav-link color-org"><i class="bi bi-cart"></i> <span class="d-inline d-md-inline d-lg-none ms-2">Cart</span></a>
                    </li>
                    <li class="nav-item mx-1 d-inline-block ">
                        <a href="/wishlist" class="nav-link color-org pb-0"><i class="bi bi-heart"></i> <span class="d-inline d-md-inline d-lg-none ms-2">Wishlist</span> </a>
                    </li>
                    <li class="nav-item mx-4 ">
                        <div style="width: 1px; background: #dee2e6; height: 100%"></div>
                    </li>
                <ul class="navbar-nav">
                    @if (Auth::user())
                    <li class="nav-item mx-1 dropdown">
                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle "><img src="{{asset('assets/img/maskot/face.png')}}"  width="25px" alt=""></a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow position-absolute w-100">
                            <li class=" py-2"><img src="{{asset('assets/img/maskot/face.png')}}" class="mx-3" width="37px" alt=""> <span>{{Auth::user()->name}}</span></li>
                            <hr class="my-2">
                            <li><a href="/wishlist" class="dropdown-item py-2 opacity-75"><i class="bi bi-heart mx-3"></i> My Wishlist</a></li>
                            <li><a href="/cart" class="dropdown-item py-2 opacity-75"><i class="bi bi-cart mx-3"></i> My Cart</a></li>
                            <li><a href="/order" class="dropdown-item py-2 opacity-75"><i class="bi bi-clock-history mx-3"></i> Order History</a></li>
                            <hr class="my-2">
                            <li><a href="/logout" class="dropdown-item py-2 opacity-75"><i class="bi bi-box-arrow-right mx-3"></i> Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item mx-1 ">
                        <a href="/auth/login" class="nav-link color-org ">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> --}}

    <nav class="navbar bg-white py-3 shadow-sm navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-lg-block d-none" href="#">GymBrot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">GymBrot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="d-flex input-group w-100" action="/search" method="get" role="search">
                                <button class="input-group-text bg-org text-white border-0 " id="basic-addon2"><i class="bi bi-search"></i></button>
                                <input class="form-control fs-sm" name="q" autocomplete="off" type="search" placeholder="Lagi khilaf apa hari ini?">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav mx-lg-3 mx-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-box me-1"></i> <span>Category</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <hr class="my-3 d-lg-none d-block">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a style="white-space: nowrap" class="nav-link fs-sm py-0" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                                <div class="d-flex align-items-center "><img src="https://th.bing.com/th/id/OIP.Nen6j3vBZdl8g8kzNfoEHQAAAA?pid=ImgDet&rs=1" class="rounded-circle me-2" width="37" alt=""> Muhammad Ilyasa</div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
            <a class="navbar-brand d-lg-none d-block" href="#">GymBrot</a>
        </div>
    </nav>

    @yield('content')

    <script src="/assets/js/jquery-3.6.4.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
