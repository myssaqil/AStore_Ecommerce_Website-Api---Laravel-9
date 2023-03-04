<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>

    <!-- Bootstrap CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- HEADER START -->
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


                <a class="nav-link " aria-current="page" href="/search"><img src="{{asset('Assets/Svg/SearchIcons.svg')}}" style="width: 30px; height: 30px;" alt=""></a>
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


                        <li><a class="dropdown-item" href="/profile">
                                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                    <div class="col ms-3">
                                        <img src="{{asset('Assets/Svg/CartIcons.svg')}}" alt="" style="height: 15px; width: 15px;">
                                    </div>
                                    <div class="col">
                                        Akun
                                    </div>
                                </div>
                            </a></li>

                        <li><a class="dropdown-item" href="/seller">
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
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>

        <!-- .container start -->
        <div class="container py-5">

            <!-- .row start -->
            <div class="row">

                <!-- .col start -->
                <div class="col-lg-4 mb-2">

                    <div class="card text-center p-5">

                        <div class="card-body">

                            <?php if (auth()->user()->image != "") { ?>
                                <img src="{{auth()->user()->image}}" alt="Profil Picture" class="img img-thumbnail rounded-circle w-50">
                            <?php } else {
                            ?>
                                <img src="{{asset('Assets/Svg/AccountIcons.svg')}}" alt="Profil Picture" class="img img-thumbnail rounded-circle w-50">
                            <?php } ?>

                            <h2>{{auth()->user()->username}}</h2>

                            <p class="card-text text-muted">
                                {{auth()->user()->email}}
                            </p>

                            <button class="btn btn-success btn-sm mt-2">
                                <i class="fa-solid fa-pencil me-1"></i> Ubah Profil
                            </button>
                            <button class="btn btn-success btn-sm mt-2">
                                <i class="fa-solid fa-pencil me-1"></i> Ubah Kata Sandi
                            </button>

                        </div>

                    </div>

                </div>
                <!-- .col end -->

                <!-- .col start -->
                <div class="col-lg-8">

                    @foreach($adders as $adderses)

                    <div class="shadow border rounded p-5 mb-5">
                        <h2>{{$adderses->name}}</h2>

                        <p>{{$adderses->adders}}</p>

                    </div>
                    @endforeach

                    <div class="row d-flex p-5" style="justify-content: end;">
                        <button class="btn btn-success btn-sm mt-2" style="width: 50%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fa-solid fa-add me-1"></i> Tambah alamat
                        </button>

                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <form action="{{ route('alamat.action')}}" method="POST">
                                @csrf
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Alamat</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                                                <textarea name="adders" class="form-control" cols="30" rows="10"></textarea>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>



                </div>
                <!-- .col end -->

            </div>
            <!-- .row end -->

        </div>
        <!-- .container end -->

    </section>
    <!-- CONTENT END -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>