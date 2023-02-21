<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function sellerRegister(Request $request)
    {
        $request->validate(
            [
                'shop_name' => 'required',
                'shop_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'adderss' => 'required',
                'complete_address' => 'required',
            ]
        );


        if ($request->shop_image != null) {
            $image_path = $request->file('shop_image')->store('seller-banner', 'public');
        } else {
            $image_path = "";
        }


        $url = "http://127.0.0.1:8000/storage/";

        $sellerData = new Seller([
            'shop_name' => $request->shop_name,
            'shop_image' => $image_path != "" ? $url . $image_path : "",
            'adderss' => $request->adderss,
            'complete_address' => $request->complete_address,
            'income' => "0",
            'id_user' => auth()->user()->id
        ]);
        $sellerData->save();

        if ($sellerData != null) {
            auth()->user()->update([
                'role' => "seller",
            ]);

            return redirect("seller");
        } else {
            return redirect("/");
        }
    }
}
