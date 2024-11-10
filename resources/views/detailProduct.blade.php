<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Css/public.css')}}" />
    <link rel="stylesheet" href="{{asset('Css/Detail.css')}}" />
    <title>Shop | AStore</title>
    <link data-default-icon="{{asset('Assets/Svg/logo.svg')}}" rel="icon" sizes="192x192" href="{{asset('Assets/Svg/logo.svg')}}">
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 bg-body rounded">
        <div class="container-fluid">
            <img src="{{asset('Assets/Svg/logo.svg')}}" alt="" class="me-5 ms-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item me-3 ms-3">
                        <a class="nav-link" aria-current="page" href="/">HOME</a>
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


    <!-- End Navbar -->

    <form action="{{ route('addOrders.action', $products->id)}}" method="POST">
        @csrf
        <div class="container-detail">
            <img src="{{$products->product_banner}}" class="img-banner" alt="">
            <div class="wrapper-detail-product">
                <h1 class="title-product-detail">{{$products->product_name}}</h1>
                <h1 class="price-product-detail">Rp.{{$products->product_price}}</h1>
                <h1 class="desc-product-detail">Description</h1>
                <p class="desc-product-detail-content">Hello world</p>
                <h1 class="desc-product-detail">Location : Hallo</h1>
                <h1 class="desc-product-detail" id="stock-count">Stock : {{$products->product_stock}}</h1>


                <div class="wrapper-increment">
                    <button type="button" onclick="Decrement()" class="btn btn-dark" id="btnDecrement">-</button>

                    <input type="number" class="form-control ms-2 me-2" name="product_count" style="width: 13%; text-align: center;" aria-describedby="emailHelp" required value="1" min="1" max="{{$products->product_stock}}" id="input-quantity" onkeyup="quantityValidation()">

                    <button type="button" onclick="Increment()" class="btn btn-dark" id="btnIncrement">+</button>
                </div> 
                <p id="warning-txt"></p>

                <input type="hidden" value="{{$products->product_price}}" name="price">
                <input type="hidden" value="{{$products->id_seller}}" name="sellerID">
                <input type="hidden" value="{{$products->id}}" name="productID">

                <select class="form-select mb-2 mt-2" aria-label="Default select example" name="adders">
                    <option selected>Pilih alamat anda</option>
                    @foreach($addersUsers as $addersUser)
                    <option value="{{$addersUser->id}}">{{$addersUser->adders}}</option>
                    @endforeach
                </select>


                <h1 class="price-product-detail" id="total-price">Rp.{{$products->product_price}}</h1>
                <button type="submit" onclick="" class="btn btn-dark mt-1" id="btn-co" style="width: 150px;">Checkout</button>
            </div>
        </div>
    </form>



    <script src=" https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        let inputQuantity = document.getElementById('input-quantity')
        let warningTxt = document.getElementById('warning-txt')
        let stockCount = "{{$products->product_stock}}"
        let btnCheckout = document.getElementById('btn-co')
        let btnIncrement = document.getElementById('btnIncrement')
        let btnDecrement = document.getElementById('btnDecrement')
        let txttotal = document.getElementById('total-price')
        const stockCountInt = parseInt(stockCount)
        const priceproduct = parseInt("{{$products->product_price}}")
        let total = 0

        function totalPrice() {
            total = priceproduct * inputQuantity.value
            txttotal.textContent = "Rp." + total
        }


        if (inputQuantity.value - 1 == 0) {
            btnDecrement.disabled = true
            btnCheckout.disabled = false
            btnIncrement.disabled = false
        }

        function Increment() {

            if (inputQuantity.value > stockCountInt) {
                inputQuantity.value = stockCountInt
                warningTxt.textContent = "Sorry, only " + stockCountInt + " left in stock"

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = true
                btnDecrement.disabled = false
                totalPrice()
            } else if (inputQuantity.value == stockCountInt) {
                warningTxt.textContent = ""

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = true
                btnDecrement.disabled = false
                totalPrice()
            } else if (inputQuantity.value == 0) {
                warningTxt.textContent = "Sorry, the number of items cannot be less than 1"
                inputQuantity.value++


                //Onoff Button
                btnCheckout.disabled = true
                btnIncrement.disabled = false
                btnDecrement.disabled = true
                totalPrice()
            } else if (inputQuantity.value < 0) {
                inputQuantity.value = 1
                warningTxt.textContent = "Sorry, the number of items cannot be less than 1"
                inputQuantity.value++


                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = false
                btnDecrement.disabled = true
                totalPrice()
            } else {
                warningTxt.textContent = ""
                inputQuantity.value++

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = false
                btnDecrement.disabled = false
                totalPrice()
            }


        }

        function Decrement() {
            if (inputQuantity.value > stockCountInt) {
                inputQuantity.value = stockCountInt
                warningTxt.textContent = "Sorry, only " + stockCountInt + " left in stock"
                inputQuantity.value--

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = true
                btnDecrement.disabled = false
                totalPrice()
            } else if (inputQuantity.value == stockCountInt) {
                warningTxt.textContent = ""
                inputQuantity.value--

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = true
                btnDecrement.disabled = false
                totalPrice()
            } else if (inputQuantity.value - 1 == 0) {
                btnDecrement.disabled = true
                btnCheckout.disabled = false
                btnIncrement.disabled = false
                totalPrice()
            } else if (inputQuantity.value == 0) {
                warningTxt.textContent = "Sorry, the number of items cannot be less than 1"



                //Onoff Button
                btnCheckout.disabled = true
                btnIncrement.disabled = false
                btnDecrement.disabled = true
                totalPrice()
            } else if (inputQuantity.value < 0) {
                inputQuantity.value = 1
                warningTxt.textContent = "Sorry, the number of items cannot be less than 1"



                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = false
                btnDecrement.disabled = true
                totalPrice()
            } else {
                warningTxt.textContent = ""
                inputQuantity.value--

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = false
                btnDecrement.disabled = false
                totalPrice()
            }
        }


        function quantityValidation() {
            if (inputQuantity.value > stockCountInt) {
                inputQuantity.value = stockCountInt
                warningTxt.textContent = "Sorry, only " + stockCountInt + " left in stock"

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = true
                btnDecrement.disabled = false
                totalPrice()
            } else if (inputQuantity.value == stockCountInt) {
                warningTxt.textContent = ""

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = true
                btnDecrement.disabled = false
                totalPrice()
            } else if (inputQuantity.value == 0) {
                warningTxt.textContent = "Sorry, the number of items cannot be less than 1"


                //Onoff Button
                btnCheckout.disabled = true
                btnIncrement.disabled = false
                btnDecrement.disabled = true
                totalPrice()
            } else if (inputQuantity.value < 0) {
                inputQuantity.value = 1
                warningTxt.textContent = "Sorry, the number of items cannot be less than 1"


                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = false
                btnDecrement.disabled = true
                totalPrice()
            } else {
                warningTxt.textContent = ""

                //Onoff Button
                btnCheckout.disabled = false
                btnIncrement.disabled = false
                btnDecrement.disabled = false
                totalPrice()
            }
        }
    </script>

</body>

</html>