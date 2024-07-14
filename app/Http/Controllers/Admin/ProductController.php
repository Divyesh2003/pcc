<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\DataTables\ProductDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ImageController;
use App\Models\Product;
use App\Models\Category;
// use App\Requests\BlogCreateRequest;
use App\Requests\ProductUpdateRequest;

class ProductController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request){
       
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $product= new Product;
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->language=$request->language;
        $product->slug=$request->slug;
        $product->description = $request->description;
        $product->description_about = $request->description_about;
        $product->image =  $myimage;
        $product->meta_title=$request->meta_title;
        $product->meta_description=$request->meta_description;
        $product->meta_keywords=$request->meta_keywords;
        $product->canonical=$request->canonical;
        $product->total_view = 0;
        $product->featured_show=$request->featured_show;
        if($product->featured_show=='True')
        {
            $product->featured_show='True';
        }
        else 
        {
            $product->featured_show='False';
        }
        $product->status=$request->status;
        if($product->status=='A')
        {
            $product->status='A';
        }
        else 
        {
            $product->status='D';
        }
        $product->created_by = 1;
        $product->save();
        //  dd($product);
         return redirect()->route('admin.product.index');
     }
     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Blog  $blog
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $product = Product::find($id);
         if(!is_null($product)){
             return view('admin.product.show', compact('product'));
         }else{
             abort(404);
         }
           
     }
    /**
     * Show the form  for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        if(!is_null($product)){
            return view('admin.product.edit', compact('product','categories'));
        }else{
            abort(404);
        }
        return view('admin.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id) 
    {
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $product= Product::find($id);
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->slug=$request->slug;
        $product->description=$request->description;
        $product->description_about=$request->description_about;
        if($request->image != "")
        {
            $product->image = $myimage;
        }
        $product->meta_title=$request->meta_title;
        $product->meta_description=$request->meta_description;
        $product->meta_keywords=$request->meta_keywords;
        $product->featured_show=$request->featured_show;
        $product->canonical=$request->canonical;
        if($product->featured_show=='True')
        {
            $product->featured_show='True';
        }
        else 
        {
            $product->featured_show='False';

        }
        $product->status=$request->status;
        if($product->status=='A')
        {
            $product->status='A';
        }
        else 
        {
            $product->status='D';
        }
        $product->save();
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if(!is_null($product)){
            $product->delete();
            return redirect()->route('admin.product.index');
        }else{
            abort(404);
        }
    }
}
