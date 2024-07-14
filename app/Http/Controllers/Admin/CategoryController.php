<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\DataTables\CategoryDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ImageController;
use App\Models\Category;
// use App\Requests\BlogCreateRequest;
use App\Requests\ProductUpdateRequest;
class CategoryController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
       //  $validate=$request->validated();
        $category= new Category;
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->description = $request->description;
        $category->image =  $myimage;
        $category->meta_title=$request->meta_title;
        $category->meta_description=$request->meta_description;
        $category->meta_keywords=$request->meta_keywords;
        $category->canonical=$request->canonical;
        $category->created_by = 1;
        // dd($blog);
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);
        if(!is_null($category)){
            return view('admin.category.show', compact('category'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if(!is_null($category)){
            return view('admin.category.edit', compact('category'));
        }else{
            abort(404);
        }
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $category= Category::find($id);
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->description=$request->description;
        if($request->image != "")
        {
            $category->image = $myimage;
        }
        $category->meta_title=$request->meta_title;
        $category->meta_description=$request->meta_description;
        $category->meta_keywords=$request->meta_keywords;
        $category->canonical=$request->canonical;
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category = Category::find($id);
        if(!is_null($category)){
            $category->delete();
            return redirect()->route('admin.category.index');
        }else{
            abort(404);
        }
    }
}
