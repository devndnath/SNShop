<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryFormRequest $request)
    {
        $validatedData=$request->validated();

        $category = new Category;
        $category->name=$validatedData['name'];
        $category->slug=Str::slug($validatedData['name']);

        if($request->hasFile('image')){

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image=$filename;

        }


        $category->save();
        return redirect('admin/category')->with('message','Category Added Successfully');

        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $category=Category::orderBy('id','DESC')->get();
        return view('backend.categories.index',['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
