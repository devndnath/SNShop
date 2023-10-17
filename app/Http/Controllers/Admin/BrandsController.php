<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brands;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\BrandFromRequest;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Backend.brand.index');
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
    public function store(BrandFromRequest $request)
    {
        $validatedData=$request->validated();

        $brand = new Brands;
        $brand->name=$validatedData['name'];
        $brand->slug=Str::slug($validatedData['slug']);

        if($request->hasFile('image')){

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/brand/',$filename);
            $brand->image=$filename;

        }


        $brand->save();
        return redirect('admin/brand')->with('message','Brand Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $brand=Brands::orderBy('id','DESC')->get();
        return view('backend.brand.index',['brand'=>$brand]);
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
    public function update(BrandFromRequest $request, $id)
    {
        $validatedData=$request->validated();

        $brand = Brands::findOrFail($id);
        $brand->name=$validatedData['name'];
        $brand->slug=Str::slug($validatedData['slug']);

        if($request->hasFile('image')){
            $path = 'uploads/brand/'.$brand->image;
            if (File::exists($path)){
                File::delete($path);
            }

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/brand/',$filename);
            $brand->image=$filename;
        }

        $brand->update();
        return redirect('admin/brand')->with('message','Brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brands::findOrFail($id);
        $path = 'uploads/brand/'.$brand->image;
        if (File::exists($path)){
            File::delete($path);
        }
        $brand->delete();
        return redirect('admin/brand')->with('message','brand Deleted Successfully');
    }
}
