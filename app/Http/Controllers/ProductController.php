<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function show(Product $product){
        return $product;
    }

    public function create(request $request){
        $data = new Product;
        $data->name = $request->name;
        $data->status = $request->status;
        $data->category_id = $request->category_id;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->save();

        return response()->json($data, 201);
    }

    public function update(request $request, $id){
        $name = $request->name;
        $status = $request->status;
        $category_id = $request->category_id;
        $description = $request->description;
        $price = $request->price;

        $data = Product::find($id);

        $data->name = $name;
        $data->status = $status;
        $data->category_id = $category_id;
        $data->description = $description;
        $data->price = $price;
        $data->save();

        return response()->json($data);
    }

    public function delete($id){
        $data = Product::find($id);
        $data->delete();

        return response()->json(null, 204);
    }
}
