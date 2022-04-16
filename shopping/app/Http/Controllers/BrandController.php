<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $image;
    private $imageName;
    private $directory;
    private $imageURL;

    public function index()
    {
        return view('admin.brand.add');
    }

    public function create(Request $request)
    {
        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = 'brand-images/';
        $this->image->move($this->directory, $this->imageName);
        $this->imageURL  = $this->directory.$this->imageName;

        $this->brand = new Brand();
        $this->brand->name = $request->name;
        $this->brand->description = $request->description;
        $this->brand->image = $this->imageURL;
        $this->brand->save();
        return redirect('/add-brand')->with('message', 'Brand info create successfully');
    }

    public function manage()
    {
        $this->brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.brand.manage', ['brands' => $this->brands]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit', ['brand' => $this->brand]);
    }

    public function update(Request $request, $id)
    {
       $this->brand = Brand::find($id);
       if($request->file('image'))
       {
            if($request->file_exists($this->brand->image))
            {
                unlink($this->brand->image);
            }

            $this->image = $request->file('image');
            $this->imageName = $this->image->getClientOriginalName();
            $this->directory = 'brand-images/';
            $this->image->move($this->directory, $this->imageName);
            $imageURL  = $this->directory.$this->imageName;

            
       }
       else
       {
            $imageURL = $this->brand->image;
       }

        $this->brand->name = $request->name;
        $this->brand->description = $request->description;
        $this->brand->image = $imageURL;
        $this->brand->save();

        return redirect('/manage-brand')->with('message', 'Brand info update successfully');

    }

    public function delete($id)
    {
        $this->brand = Brand::find($id);
        if(file_exists($this->brand->image))
        {
            unlink($this->brand->image);
        }
        $this->brand->delete();

        return redirect('/manage-brand')->with('message', 'Brand info delete successfully');
    }
}
