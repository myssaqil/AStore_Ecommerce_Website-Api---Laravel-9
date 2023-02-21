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
    <div class="d-flex flex-column" style="justify-content: center; align-items: center; min-height: 100vh;">
        <form form method="POST" action="{{ route('product_add_admin.action')}}" enctype="multipart/form-data">
            @csrf
            <div class="row row-cols-3 pt-3">
                <div class="col text-end">
                    <label class="form-label">Nama Produk</label>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="productname" style="min-width: 380px" aria-describedby="emailHelp" required>
                </div>
            </div>
            <label class="block mb-4">
                <span class="sr-only">Choose File</span>
                <input type="file" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                @error('image')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </label>
            <div class="row row-cols-3 pt-3">
                <div class="col text-end">
                    <label class="form-label">Harga Produk</label>
                </div>
                <div class="col-4">
                    <input type="number" class="form-control" name="productprice" style="min-width: 380px" aria-describedby="emailHelp" required>
                </div>
            </div>
            <div class="row row-cols-3 pt-3">
                <div class="col text-end">
                    <label class="form-label">Stock Produk</label>
                </div>
                <div class="col-4">
                    <input type="number" class="form-control" name="product_stock" style="min-width: 380px" aria-describedby="emailHelp" required value="0">
                </div>
            </div>


            <div class="row row-cols-3 pt-3">
                <div class="col text-end">
                    <label class="form-label">Description Produk</label>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="product_description" style="min-width: 380px" aria-describedby="emailHelp" required>
                </div>
            </div>


            <select name="product_condition" id="toy-id">
                <option value="Baru">Baru</option>
                <option value="Bekas">Bekas</option>
            </select>

            <select name="category" id="toy-id">
                @foreach($categorys as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
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