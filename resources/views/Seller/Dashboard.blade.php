<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-row">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 15%; min-height: 100vh;">
            <img src="{{asset('Assets/Svg/logo.svg')}}" style="height: 35px;">
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Product
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Product not active
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Order request
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Order in progress
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Order successful
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Order failed
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Chat
                    </a>
                </li>


            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">


                    <?php if (auth()->user()->image != "") { ?>
                        <img src="{{auth()->user()->image}}" alt="" width="32" height="32" class="rounded-circle me-2">
                    <?php } else {
                    ?>
                        <img src="{{asset('Assets/Svg/AccountIcons.svg')}}" alt="" width="32" height="32" class="rounded-circle me-2">
                    <?php } ?>





                    <strong>{{auth()->user()->username}}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="/">Back to user</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div class="d-flex flex-column" style="width: 85%; padding: 20px;">
            <div class="d-flex flex-row">
                <button type="button" onclick="window.location.href=`{{ url('seller/product/add') }}`" class="btn btn-dark" style="width: 150px;">Tambah Barang</button>
                <form action="seller">



                    <div class="d-flex flex-row ms-3">
                        <select name="category" class="me-3" id="toy-id">
                            <option value="">Pilih status product</option>
                            @foreach($categorys as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select>

                        <select name="product_status" class="me-3" id="toy-id">
                            <option value="">Pilih status product</option>
                            <option value="active">Active</option>
                            <option value="not active">Not Active</option>
                        </select>

                        <div class="search d-flex">
                            <i class="fa fa-search"></i>
                            <input type="text" name="search" class="form-control" placeholder="Have a question? Ask Now" value="">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>

                </form>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Soldout</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->product_name}}</th>
                        <td>{{$product->product_soldout_total}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>{{$product->product_stock}}</td>
                        <td>{{$product->categorys->category}}</td>
                        <td>{{$product->product_status}}</td>
                        <td>
                            <button type="button" class="btn btn-primary mb-2" style="width: 150px;" onclick="window.location.href=`{{ url('seller/product/edit/'.$product->id) }}`">Edit Barang</button>

                            <form method="post" action="{{ route('delete_product.action', $product->id)}}">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-danger" style="width: 150px;">Hapus Barang</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>




    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>