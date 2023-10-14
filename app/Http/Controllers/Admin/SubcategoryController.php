<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Subcategories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SubcategoryFormRequest;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::orderBy('id','DESC')->get();
        return view('backend.subcategories.index',['category'=>$category]);
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
    public function store(SubcategoryFormRequest $request)
    {
        $validatedData=$request->validated();

        $subcategory = new Subcategories;
       
        $subcategory->parent_category=$validatedData['parent_category'];
        if( $subcategory->parent_category=='1'){
            return redirect('admin/sub-category')->with('error','Select A Parent Category');

            
        }
        else{
            $subcategory->name=$validatedData['name'];
        $subcategory->slug=Str::slug($validatedData['slug']);

        if($request->hasFile('image')){

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/subcategory/',$filename);
            $subcategory->image=$filename;

        }


        $subcategory->save();
        return redirect('admin/sub-category')->with('message','Subategory Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $category=Category::orderBy('id','DESC')->get();
        $subcategory=Subcategories::orderBy('id','DESC')->get();
        return view('backend.subcategories.index',['subcategory'=>$subcategory],['category'=>$category]);
        
       
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
    public function update(SubcategoryFormRequest $request, string $id)
    {
        $validatedData=$request->validated();

        $subcategory = Subcategories::findOrFail($id);
        $subcategory->name=$validatedData['name'];
        $subcategory->slug=Str::slug($validatedData['slug']);

        if($request->hasFile('image')){
            $path = 'uploads/subcategory/'.$subcategory->image;
            if (File::exists($path)){
                File::delete($path);
            }

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $subcategory->image=$filename;
        }

        $subcategory->update();
        return redirect('admin/sub-category')->with('message','Subcategory Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory = Subcategories::findOrFail($id);
        $path = 'uploads/category/'.$subcategory->image;
        if (File::exists($path)){
            File::delete($path);
        }
        $subcategory->delete();
        return redirect('admin/sub-category')->with('message','Category Deleted Successfully');
}
}
