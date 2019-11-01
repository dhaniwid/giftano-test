<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return Category::all();
    }

    public function show(Category $category){
        return $category;
    }

    public function create(request $request){
        $data = new Category;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->save();

        return response()->json($post, 201);
    }

    public function update(request $request, $id){
        $name = $request->name;
        $description = $request->description;
        $status = $request->status;

        $data = Category::find($id);

        $data->name = $name;
        $data->description = $description;
        $data->status = $status;
        $data->save();

        return response()->json($data);
    }

    public function delete($id){
        $data = Category::find($id);
        $data->delete();

        return response()->json(null, 204);
    }
}
