<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function addOrders(Request $request)
    {

        $request->validate(
            [
                'price' => 'required',
                'product_count' => 'required',
                'adders' => 'required',
                'sellerID' => 'required',
                'productID' => 'required'
            ]
        );

        $total = $request->product_count * $request->price;


        $orders = new Orders([
            'total' => $total,
            'status' => "Menunggu Konfirmasi",
            'product_count' => $request->product_count,
            'adders_user_id' => $request->adders,
            'user_id' => auth()->user()->id,
            'seller_id' => $request->sellerID,
            'product_id' => $request->productID,
        ]);
        $orders->save();

        $products = Product::where('id', $request->productID)->first();

        $stockNew = $products->product_stock - $request->product_count;
        $soldOutCount = $products->product_soldout_total +  $request->product_count;

        $products->update([
            'product_stock' => $stockNew,
            'product_soldout_total' => $soldOutCount
        ]);

        return back();
    }


    public function getHistoryUsers()
    {
        $ordersUser = Orders::where('user_id', auth()->user()->id)->with('products:id,product_name,product_banner')->get();



        return view('Order_history', with(compact('ordersUser')));
    }
}
