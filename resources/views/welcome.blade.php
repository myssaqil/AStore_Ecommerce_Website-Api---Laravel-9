<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Css/Welcome.css')}}" />
    <link rel="stylesheet" href="{{asset('Css/public.css')}}" />
    <title>Home | AStore</title>
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

                        <li><a class="dropdown-item" href="/history">
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



    <div class="header">
        <!-- <img src="{{asset('Assets/Svg/Bg-Welcome.svg')}}" alt="" > -->
        <div class="wrapper-header-top">
            <div class="wrapper-header">
                <h1 class="title-head">Shop for Fashion & Electronics Online at A-Store</h1>
                <p class="subtitle-head">A-Store is at the forefront of online shopping, providing a growing number of local and international brands to consumers across Indonesia. We have more than -+1000 products to meet your needs, from electronics to fashion, shoes to sandals, sportswear to watches, and many more.</p>
            </div>

            <div class="wrapper-anim">
                <lottie-player src="{{asset('Assets/Anim/ecommerce-anim.json')}}" background="transparent" speed="1" class="anim-ecommerce" loop autoplay></lottie-player>
            </div>
        </div>

        <button class="btn-head" id="btnbuy">Let's Buy Now <img src="{{asset('Assets/Svg/dollaricons.svg')}}" class="icons-btn-head" alt=""></button>

    </div>
    <div class="category-box">
        <h1 class="title-head">Product Categories</h1>
        <p class="subtitle-head-category">Sed ut perspiciatis unde omnis iste natuser sit voluptatem accusantium dolore.</p>
        <div class="wrapper-category">
            <div class="grid-item">
                <img src="{{asset('Assets/Svg/wifi-icons.svg')}}" width="80px" height="80px" alt="">
                <h1 class="title-category">Furniture</h1>
            </div>
            <div class="grid-item">
                <img src="{{asset('Assets/Svg/fashionicons.svg')}}" width="80px" height="80px" alt="">
                <h1 class="title-category">Fashion</h1>
            </div>
            <div class="grid-item">
                <img src="{{asset('Assets/Svg/pc-icons.svg')}}" width="80px" height="80px" alt="">
                <h1 class="title-category">Pc / Laptop</h1>
            </div>
            <div class="grid-item">
                <img src="{{asset('Assets/Svg/mobile-icons.svg')}}" width="80px" height="80px" alt="">
                <h1 class="title-category">Handphone</h1>
            </div>
            <div class="grid-item">
                <img src="{{asset('Assets/Svg/camera-icons.svg')}}" width="80px" height="80px" alt="">
                <h1 class="title-category">Photography</h1>
            </div>
            <div class="grid-item">
                <img src="{{asset('Assets/Svg/television-icons.svg')}}" width="80px" height="80px" alt="">
                <h1 class="title-category">Television</h1>
            </div>

        </div>
    </div>

    <div class="boxpopular">

        <h1 class="title-head">Most Popular</h1>
        <br>
        <div class="gridview-popular">
            @foreach($products as $product)
            <a href="product/detail/{{$product->id}}" class="grid-item-product mt-5">
                <div>
                    <img src="{{$product->product_banner}}" class="img-product" alt="">
                    <div class="wrapper-product-req">

                        <h1 class="title-product">{{$product->product_name}}</h1>
                        <h1 class="price-product">Rp.{{$product->product_price}}</h1>
                        <h1 class="details-product">{{$product->product_soldout_total}} Terjual</h1>
                        <h1 class="details-product">Jakarta Barat</h1>
                    </div>
                </div>
            </a>
            @endforeach



        </div>
        <div class="gridview-popular">
            <div class="grid-item-ft">
                <img src="{{asset('Assets/Svg/shipping-icons.svg')}}" width="40px" class="icons-ft" height="40" alt="">
                <div>
                    <h1 class="txt-title-ft">100% Free Shipping</h1>
                    <p class="txt-subtile-ft">We ship all our products for free as long as you buying within the USA.</p>
                </div>
            </div>

            <div class="grid-item-ft">
                <img src="{{asset('Assets/Svg/24/7-icons.svg')}}" width="40px" class="icons-ft" height="40" alt="">
                <div>
                    <h1 class="txt-title-ft">24/7 Support</h1>
                    <p class="txt-subtile-ft">Our support team is extremely active, you will get response within 2 minutes.
                    </p>
                </div>
            </div>

            <div class="grid-item-ft">
                <img src="{{asset('Assets/Svg/return-icons.svg.svg')}}" width="40px" height="40" class="icons-ft" alt="">
                <div>
                    <h1 class="txt-title-ft">30 Day Return</h1>
                    <p class="txt-subtile-ft">Our 30 day return program is open from customers, just fill up a simple form.</p>
                </div>
            </div>


        </div>

    </div>
    <div class="category-box">
        <h1 class="title-head">About</h1>
        <p class="subtitle-head">A-Store is at the forefront of online shopping, providing a growing number of local and international brands to consumers across Indonesia. We have more than -+1000 products to meet your needs, from electronics to fashion, shoes to sandals, sportswear to watches, and many more.</p>
        <p class="subtitle-head">Begin your style discovery by owning some important basic fashion equipment, such as denim jeans shirts and pants, Koko shirts and robes, and other basic fashion needs.</p>
        <p class="subtitle-head">Find thousands of local and international brands to complement your fashion needs. Whatever your reason, enjoy free 30 days easy returns throughout Indonesia. A-Store guarantees 100% authentic & quality products and the best online fashion shopping experience.</p>
    </div>

    <div class="box-contact" style="display: flex; align-items: center; flex-direction: column;">
        <h1 class="title-head-contact">Contact</h1>
        <p class="subtitle-head-contact">Jangan ragu untuk berkomunikasi dengan kami, kami ingin menjalin silaturahmi dengan sebaik-baiknya.
        </p>

        <div class="d-flex flex-row" style="justify-content: space-between; width: 100%;">
            <div style="width: 50%;">
                <h1 class="title-head-contact-2">Alamat Kami</h1>
            </div>
            <div style="width: 50%;">
                <h1 class="title-head-contact-2">Sampaikan Saran Terbaikmu</h1>
                <input type="text" class="form-control mt-2 mb-2" placeholder="Nama" required>
                <input type="email" class="form-control mt-2 mb-2" placeholder="Email" required>
                <input type="number" class="form-control mt-2 mb-2" placeholder="Phone" required>
                <textarea type="number" rows="8" class="form-control mt-2 mb-2" placeholder="Tell Us About Project" required></textarea>
                <button class="btn-contact">Send</button>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="left-footer">
            <img src="{{asset('Assets/Svg/logo.svg')}}" alt="" class="me-5 ms-3">
        </div>
        <div class="right-footer">
            <div class="container-support-foot">
                <h4 class="title-foot">Support</h4>
                <br>
                <p class="action-foot">Help Centre</p>
                <p class="action-foot">Account information</p>
                <p class="action-foot">About</p>
                <p class="action-foot">Contact us</p>
            </div>
            <div class="container-help-foot">
                <h4 class="title-foot">Help and Solution</h4>
                <br>
                <p class="action-foot">Talk to support</p>
                <p class="action-foot">Support docs</p>
                <p class="action-foot">System status</p>
                <p class="action-foot">Location</p>

            </div>
            <div class="container-product-foot">
                <h4 class="title-foot">Product</h4>
                <br>
                <p class="action-foot">Update</p>
                <p class="action-foot">Security</p>
                <p class="action-foot">Beta test</p>
                <p class="action-foot">Pricing productpp</p>
            </div>
        </div>
    </div>


    <script src=" https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        let btnbuy = document.getElementById('btnbuy')
        const txtefault = btnbuy.textContent

        function changeElementBtn() {
            btnbuy.textContent = "🥵🥵🥵🥵🥵"
        }

        function defaultElementBtn() {
            btnbuy.textContent = txtefault
        }
    </script>
</body>

</html>