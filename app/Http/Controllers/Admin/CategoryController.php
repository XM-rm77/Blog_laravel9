<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class CategoryController extends Controller
{
    public function index()
    
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'category_name' => 'required|string|unique:categories|max:250',
            'status' => 'required'
        ]);

        try {
            $data = Category::create($attr);
            if($data){
                return to_route('category.index')->with(key:'message', value:'Category successfully created');
            }        
        } catch(\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request){
        if ($request->ajax()){
            $category = Category::find($request->id);
            if ($category) {
                return response()->json($category, 200);
            } else{
                $errors = "Please enter correctly";
                return response()->json(['errors' => $errors], 200);
            }
        }
        $attr = $request->validate([
            'category_name' => 'required|string|max:250|unique:categories,id,'.$request->category_id,
            'status' => 'required'
        ]);

        try {
            $data = Category::findOrFail($request->category_id);
            if ($data){
                $data->update($attr);
                return to_route('categories.index')->with('message', 'Category updated');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return to_route('category.index')->with('message', 'Category deleted');
        
    }
}
