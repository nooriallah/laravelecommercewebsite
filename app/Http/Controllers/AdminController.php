<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function category(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('backend.category');
    }

    public function add_category(Request $request) {

        $category = new Category();

        $category->category_name = $request->input('category_name');

        $category->save();

        return redirect()->back()->with('message', 'Successfully added new category!');

    }


    public function orders() {
        $orders = Order::all();
        return view("backend.orders.index", compact("orders"));
    }


    public function delivered($id)
    {
        $deliver_product = Order::find($id);

        $deliver_product->delivery_status  = "Proceed";
        $deliver_product->update();
        return redirect()->back();

    }


}
