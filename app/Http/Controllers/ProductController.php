<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.product.index")->with("products", Product::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("backend.product.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "title" => "required",
            "price" => "required",
            "discount_price" => "nullable",
            "category" => "required",
            "description" => "required",
            "quantity" => "required",
            "image" => "required|image",
        ]);

        $product = new Product();

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category = $request->category;
        $product->quantity = $request->quantity;

        $imagename = "no-image.jpg";
        if ($request->hasFile("image")) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('productimages/', $imagename);
        }

        $product->image = $imagename;

        $product->save();

        return redirect()->back()->with("message", "Product added successfully");


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("frontend.single_product", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view("backend.product.edit", compact("product", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            "title" => "required",
            "price" => "required",
            "discount_price" => "nullable",
            "category" => "required",
            "description" => "required",
            "quantity" => "required",
            "image" => "nullable|image",
        ]);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category = $request->category;
        $product->quantity = $request->quantity;


        if ($request->hasFile("image")) {
            if ($product->image) {
                File::delete(public_path('/productimages/' . $product->image));
            }
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('/productimages/'), $imagename);
            $product->image = $imagename;
        }

        $product->update();

        return redirect()->back()->with("message", "Product updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
//        File::delete(public_path('/productimages/' . $product->image));

        $product->delete();

        return redirect()->back()->with("message", "Product deleted successfully");
    }

    /**
     * Trashed the specified resource from storage.
     */
    public function trashed()
    {
        $products = Product::onlyTrashed()->get();
        return view("backend.product.trashed", compact("products"));
    }

    /**
     * Restore the specified resource from storage.
     */
        public function restore($id)
        {
            
            $product = Product::withTrashed()->find($id);
            
            $product->restore();

            return redirect(route('products.index'))->with("message", "Product restored successfully");
        }
}
