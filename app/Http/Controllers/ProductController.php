<?php

namespace App\Http\Controllers;

use App\Models\AddressOfUsers;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //PublicViews
    public function homeview()
    {
        $products = Product::where('product_status', 'active')->orderBy('product_soldout_total', 'desc')->take(6)->get();
        return view('welcome', compact(['products']));
    }
    public function shopview()
    {
        $products = Product::where('product_status', 'active')->orderBy('product_soldout_total', 'desc')->get();
        return view('shop', compact(['products']));
    }


    public function detailProductView($id)
    {
        $products = Product::where('id', $id)->first();
        $addersUsers = AddressOfUsers::where('id_users', auth()->user()->id)->get();


        return view('detailProduct', with(compact('products', 'addersUsers')));
    }




    // Seller


    public function index()
    {
        $categorys = ProductCategory::all();


        $products = Product::filter(request(['search', 'category', 'product_status']))->where('id_seller', auth()->user()->id)->with('categorys:id,category')->paginate(2);
        return view('Seller.Dashboard', compact(['products']), compact(['categorys']));
    }

    public function routeupload()
    {
        $categorys = ProductCategory::all();

        return view('Seller.Tambahbarang', compact(['categorys']));
    }
    public function routeedit($id)
    {
        $products = Product::where('id', $id)->first();

        return view('Seller.Editbarang', compact(['products']));
    }
    public function routeedit_action(Request $request, $id)
    {
        $data = Product::find($id);

        $request->validate(
            [
                'productname' => 'required',
                'productimg' => 'required',
                'productprice' => 'required',
                'product_condition' => 'required',
            ]
        );

        $data->update([
            'product_name' => $request->productname,
            'product_banner' => $request->productimg,
            'product_price' => $request->productprice,
            'product_condition' => $request->product_condition,


        ]);

        return redirect("admin");
    }



    public function addproduct(Request $request)
    {

        $request->validate(
            [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
                'productname' => 'required',
                'productprice' => 'required',
                'product_condition' => 'required',
                'product_stock' => 'required',
                'product_description' => 'required',
                'category' => 'required',
            ]
        );

        $image_path = $request->file('image')->store('product-banner', 'public');

        $url = "http://192.168.182.80:8000/storage/";

        $product = new Product([
            'product_name' => $request->productname,
            'product_banner' => $url . $image_path,
            'product_price' => $request->productprice,
            'product_condition' => $request->product_condition,
            'id_category' => $request->category,
            'product_description' => $request->product_description,
            'product_stock' => $request->product_stock,
            'product_status' => "not active",
            'product_soldout_total' => "0",
            'id_seller' => auth()->user()->id
        ]);
        $product->save();

        if ($product != null) {
            if ($product->product_stock > 0) {
                $product->update([
                    'product_status' => "active"
                ]);
                return redirect("seller");
            } else {
                return redirect("seller");
            }
        }
    }

    public function deleteproduct($id)
    {

        Product::where('id', $id)->delete();


        return redirect("seller");
    }

    public function searchGetall()
    {
        $products = Product::where('product_status', 'active')->get();
        return view('search', compact(['products']));
    }
    public function search()
    {
        // if ($request->query != "") {

        $products = Product::where('product_status', 'active')->where('product_name', 'like', "%" . request('query') . "%")->get();
        return view('search', compact(['products']));
        // }

        // $products = Product::where('product_status', 'active')->get();
        // return view('search', compact(['products']));
    }
}
