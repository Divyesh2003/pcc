<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\DataTables\PageDataTable;
use App\Http\Controllers\Admin\ImageController;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PageDataTable $dataTable)
    {
        return $dataTable->render('admin.page.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        if ($request->gallary){
            $image = new ImageController;
            $myimage = $image->page($request);
        }
        $page= new Page;
        $page->name=$request->name;
        $page->slug=$request->slug;
        // dd($request->description_coding);
        // dd($page);
        if($request->description_coding != null){
            $page->body = $request->description_coding;
        }else{
            $page->body = $request->description;
        }
        $page->meta_title=$request->meta_title;
        $page->meta_description=$request->meta_description;
        $page->meta_keywords=$request->meta_keywords;
        $page->canonical=$request->canonical;
        $page->status=$request->status;
        if($page->status=='A')
        {
            $page->status='A';
        }
        else 
        {
            $page->status='D';
        }
        $page->save();
        return redirect()->route('admin.page.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        $page = Page::find($id);
        if(!is_null($page)){
            return view('admin.page.show', compact('page'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $page = Page::find($id);
        if(!is_null($page)){
            return view('admin.page.edit', compact('page'));
        }else{
            // abort(404);
        return redirect()->route('admin.page.index')->with('error','Page not Exists');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request,$id)
    {
        // dd($request->gallary);
        if ($request->gallary){
            $image = new ImageController;
            $myimage = $image->page($request);
        }
        $page=Page::find($id);
        $page->name=$request->name;
        $page->slug=$request->slug;
        if($request->description_coding != null){
            $page->body = $request->description_coding;
        }else{
            $page->body = $request->description;
        }
        $page->meta_title=$request->meta_title;
        $page->meta_description=$request->meta_description;
        $page->meta_keywords=$request->meta_keywords;
        $page->canonical=$request->canonical;
        $page->status=$request->status;
        if($page->status=='A')
        {
            $page->status='A';
        }
        else 
        {
            $page->status='D';
        }

        // $page->save();
        $page->save();
        return redirect()->route('admin.page.index')->with('error','Page not Exists');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $page = Page::find($id);
            if(!is_null($page)){
                $page->delete();
                return redirect()->route('admin.page.index')->with('warning','Blog Category Deleted Successfully');;
            }else{
            return redirect()->route('admin.page.index')->with('error','Blog Category not Exists');
            }
    }
}
