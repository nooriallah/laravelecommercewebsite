<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $usertype = Auth::user()->usertype;

        return match ($usertype) {
            "1" => view("backend.index"),
            default => view("frontend.home")
        };
    }

    public function logout(Request $request)
    {
        //        Auth::logout();
        Auth::guard('web')->logout();
        return redirect('/');
    }


    public function addToCart(Request $request, string $id)
    {

        $product = Product::find($id);
        $user = Auth::user();
        $cart = new Cart();

        if (Auth::check()) {

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->product_title = $product->title;
            if ($product->deiscount_price != null) {
                $cart->price = $product->deiscount_price;
            } else {
                $cart->price = $product->price;
            }
            $cart->total_price = (int)$cart->price * (int)$request->quantity;

            $cart->image = $product->image;
            $cart->product_id = $product->id;

            $cart->quantity = $request->quantity;

            $cart->save();
            // This is a simple comment for testing photography
            // In our shenaas company we wanna use these photos on our social media,
            // Website, LikedIN, Youtube, FaceBook,

            return redirect()->back();

        } else {
            return redirect("login");
        }
    }


    public function showCart()
    {

        $user_id = Auth::id();
        $cart_items = Cart::where("user_id", $user_id)->get();

        $total_product = $cart_items->sum('quantity');


        return view("frontend.cart", compact("cart_items", "total_product"));


    }

    public function removeItem(string $id)
    {

        $item = Cart::find($id);
        if ($item) {
            $item->delete();
        }

        return redirect()->back();
    }


    public function cashOrder() {

        $cart_data = Cart::where("user_id", Auth::id())->get();

        foreach ($cart_data as $data) {

            $order = new Order();

            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;

            $order->product_id = $data->product_id;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->total_price = $data->total_price;
            $order->image = $data->image;

            $order->payment_status = "COD";
            $order->delivery_status = "Processing";

            $order->save();

            $cart = Cart::find($data->id);

            $cart->delete();



        }

            return redirect()->back();


    }



    public function stripePay() {


        return view("frontend.stripe");

    }


}
