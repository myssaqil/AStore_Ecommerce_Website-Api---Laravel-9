<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astore - Search</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{asset('Css/SearchAssets/assets/images/logo/favicon.ico')}}" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{asset('Css/SearchAssets/assets/css/style-prefix.css')}}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Css/public.css')}}" />
    <link rel="stylesheet" href="{{asset('Css/welcome.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <header>

        <div class="header-main">

            <div class="container">

                <img src="{{asset('Assets/Svg/logo.svg')}}" alt="" class="me-5 ms-3">

                <div class="header-search-container mt-2">

                    <form action="search">
                        <input name="query" class="search-field" placeholder="Enter your product name...">

                        <button class="search-btn" type="submit">
                            <ion-icon name="search-outline"></ion-icon>
                        </button>
                    </form>

                </div>

            </div>
    </header>


    <main>
        <div class="boxpopular">
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


        </div>

        </div>

    </main>

    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>