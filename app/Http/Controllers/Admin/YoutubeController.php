<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Youtube;
use App\Http\Requests\StoreYoutubeRequest;
use App\Http\Requests\UpdateYoutubeRequest;
use App\DataTables\YoutubeDataTable;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(YoutubeDataTable $dataTable)
    {
        return $dataTable->render('admin.youtube.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::all();
        return view('admin.youtube.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreYoutubeRequest $request)
    {
       $youtube= new Youtube;
       $youtube->title=$request->title;
       $youtube->url=$request->url;
       $youtube->description = $request->description;
       $youtube->save();
       return redirect()->route('admin.youtube.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $youtube = Youtube::find($id);
        if(!is_null($youtube)){
            return view('admin.youtube.show', compact('youtube'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $youtube = Youtube::find($id);
        if(!is_null($youtube)){
            return view('admin.youtube.edit', compact('youtube'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateYoutubeRequest $request,$id)
    {
        $youtube=  Youtube::find($id);
        $youtube->title=$request->title;
        $youtube->url=$request->url;
        $youtube->description = $request->description;
        $youtube->save();
        return redirect()->route('admin.youtube.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Youtube $youtube)
    {
        $youtube = Youtube::find($id);
        if(!is_null($youtube)){
            $youtube->delete();
            return redirect()->route('admin.youtube.index')->with('warning','Youtube Deleted Successfully');;
        }else{
        return redirect()->route('admin.youtube.index')->with('error','Youtube not Exists');
        }
    }
}
