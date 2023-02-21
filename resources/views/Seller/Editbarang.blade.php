<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>EcoFam Website | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- HeaderNavbar -->
    <div class="wrapper ">
        <form form method="POST" action="{{ route('product_edit_admin.action', $products->id)}}">
            @csrf
            @method('PUT')
            <div class="row row-cols-3 pt-3">
                <div class="col text-end">
                    <label class="form-label">Nama Produk</label>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="productname" style="min-width: 380px" aria-describedby="emailHelp" required value="{{$products->product_name}}">
                </div>
            </div>
            <div class="row row-cols-3 pt-3">
                <div class="col text-end">
                    <label class="form-label">Image Produk</label>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="productimg" style="min-width: 380px" aria-describedby="emailHelp" required value="{{$products->product_banner}}">
                </div>
            </div>
            <div class="row row-cols-3 pt-3">
                <div class="col text-end">
                    <label class="form-label">Harga Produk</label>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="productprice" style="min-width: 380px" aria-describedby="emailHelp" required value="{{$products->product_price}}">
                </div>
            </div>



            <select name="product_condition" id="toy-id">
                <option value="Baru">Baru</option>
                <option value="Bekas">Bekas</option>
            </select>


            <div class="row row-cols-3 pt-3">
                <div class="col">
                </div>
                <div class="col text-start">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>




    </div>

    </form>

    </div class="container">



    <!--js link--->
    <script type="text/javascript" src="assets/script.js"></script>
</body>

</html>