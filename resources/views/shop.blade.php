<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Css/public.css')}}" />
    <title>Shop | AStore</title>
    <link data-default-icon="{{asset('Assets/Svg/logo.svg')}}" rel="icon" sizes="192x192" href="{{asset('Assets/Svg/logo.svg')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 bg-body rounded">
        <div class="container-fluid">
            <img src="{{asset('Assets/Svg/logo.svg')}}" alt="" class="me-5 ms-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item me-3 ms-3">
                        <a class="nav-link active" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item me-3 ms-3">
                        <a class="nav-link " aria-current="page" href="/shop">SHOP</a>
                    </li>

                </ul>


                <a class="nav-link " aria-current="page" href="#"><img src="{{asset('Assets/Svg/SearchIcons.svg')}}" style="width: 30px; height: 30px;" alt=""></a>
                @auth

                <a class="nav-link " aria-current="page" href="#"><img src="{{asset('Assets/Svg/CartIcons.svg')}}" style="width: 30px; height: 30px;" alt=""></a>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (auth()->user()->image != "") { ?>
                                <img src="{{auth()->user()->image}}" width="30px" height="30px" style="object-fit: cover; border-radius: 100%;" alt="" class="me-3">{{auth()->user()->username}}</a>
                    <?php } else {
                    ?>
                        <img src="{{asset('Assets/Svg/AccountIcons.svg')}}" width="30px" height="30px" alt="" class="me-3">{{auth()->user()->username}}</a>
                    <?php } ?>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">


                        <li><a class="dropdown-item" href="#">
                                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                    <div class="col ms-3">
                                        <img src="{{asset('Assets/Svg/CartIcons.svg')}}" alt="" style="height: 15px; width: 15px;">
                                    </div>
                                    <div class="col">
                                        Akun
                                    </div>
                                </div>
                            </a></li>

                        <li><a class="dropdown-item" href="#">
                                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                    <div class="col ms-3">
                                        <img src="{{asset('Assets/Svg/CartIcons.svg')}}" alt="" style="height: 15px; width: 15px;">
                                    </div>
                                    <div class="col">
                                        Seller
                                    </div>
                                </div>
                            </a></li>

                        <li><a class="dropdown-item" href="#">
                                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                    <div class="col ms-3">
                                        <img src="{{asset('Assets/Svg/CartIcons.svg')}}" alt="" style="height: 15px; width: 15px;">
                                    </div>
                                    <div class="col">
                                        Chat
                                    </div>
                                </div>
                            </a></li>

                        <li><a class="dropdown-item" href="#">
                                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                    <div class="col ms-3">
                                        <img src="{{asset('Assets/Svg/CartIcons.svg')}}" alt="" style="height: 15px; width: 15px;">
                                    </div>
                                    <div class="col">
                                        History
                                    </div>
                                </div>
                            </a></li>


                        <li>
                            <form method="POST" action="{{ route('logout.action')}}">
                                @csrf
                                <button class="dropdown-item">
                                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                        <div class="col ms-3">
                                            <img src="{{asset('Assets/Svg/CartIcons.svg')}}" alt="" style="height: 15px; width: 15px;">
                                        </div>
                                        <div class="col">
                                            Logout
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </li>


                    </ul>
                    </li>
                </ul>
                @else
                <button class="signin-btn me-3 ms-2" onclick="window.location.href=`{{ url('login') }}`">SIGN IN</button>
                <button class="signup-btn" onclick="window.location.href=`{{ url('user/register') }}`">SIGN UP</button>
                @endauth

            </div>
        </div>
    </nav>


    <!-- End Navbar -->




</body>

</html>