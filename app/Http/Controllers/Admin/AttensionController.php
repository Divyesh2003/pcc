<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attension;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ImageController;
use App\DataTables\AttensionDataTable;
use App\Requests\BlogCategoryCreateRequest;
use App\Requests\BlogCategoryUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
// use App\Http\Controllers\Admin\ImageController;
class AttensionController extends Controller
{
     public $user_id;
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function __construct()
      {
         $this->middleware(function ($request, $next) {
             if(Auth::user())
             {
                 $this->user_id= Auth::user()->id;
                 return $next($request);
             }
             else
             {
                 return $next($request);
             }
         });
      }
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
    public function index(AttensionDataTable $dataTable)
    {
        return $dataTable->render('admin.attension.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attension.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $attension = new Attension;
        $flag = "null";
        if ($request->flag){
            $image = new ImageController;
            $flag = $image->flag($request);
        }
        
        $nameImage = "null";
        if ($request->nameImage){
            $image = new ImageController;
            $nameImage = $image->nameImage($request);
        }
        // dd($flag,$nameImage);
        
        $attension->name = $request->name;
        $attension->slug = $request->slug;
        $attension->flag = $flag;
        $attension->nameImage = $nameImage;
        $attension->section_1 = $request->section_1;
        
        $section_2 = "null";
        if (!is_null($request->section_2_image)){
            $image = new ImageController;
            $section_2 = $image->files($request->section_2_image);
            $attension->section_2_image = $section_2;
        }
        $attension->section_2_text = $request->section_2_text;
        $attension->section_2_alt = $request->section_2_alt;

        $section_3 = "null";
        if (!is_null($request->section_3_image)){
            $image = new ImageController;
            $section_3 = $image->files($request->section_3_image);
        $attension->section_3_image = $section_3;
        }
        $attension->section_3_text = $request->section_3_text;
        $attension->section_3_alt = $request->section_3_alt;
        
        $section_4 = "null";
        if (!is_null($request->section_4_image)){
            $image = new ImageController;
            $section_4 = $image->files($request->section_4_image);
        $attension->section_4_image = $section_4;
        }
        $attension->section_4_text = $request->section_4_text;
        $attension->section_4_alt = $request->section_4_alt;
        
        $section_5 = "null";
        if (!is_null($request->section_5_image)){
            $image = new ImageController;
            $section_5 = $image->files($request->section_5_image);
            $attension->section_5_image = $section_5;
        }
        $attension->section_5_text = $request->section_5_text;
        $attension->section_5_alt = $request->section_5_alt;

        $section_6 = "null";
        if (!is_null($request->section_6_image)){
            $image = new ImageController;
            $section_6 = $image->files($request->section_6_image);
            $attension->section_6_image = $section_6;
        }
        $attension->section_6_text = $request->section_6_text;
        $attension->section_6_alt = $request->section_6_alt;
        
        $section_7 = "null";
        if (!is_null($request->section_7_image)){
            $image = new ImageController;
            $section_7 = $image->files($request->section_7_image);
            $attension->section_7_image = $section_7;
        }
        $attension->section_7_text = $request->section_7_text;
        $attension->section_7_alt = $request->section_7_alt;

        // $section_8 = "null";
        // if (!is_null($request->section_7_image)){
        //     $image = new ImageController;
        //     $section_8 = $image->files($request->section_8_image);
        //     $attension->section_8_image = $section_8;
        // }
        // $attension->section_8_text = $request->section_8_text;
        // $attension->section_8_alt = $request->section_8_alt;
        $attension->section_9_text = $request->section_9_text;
        $attension->section_10_text = $request->section_10_text;
        $attension->faq= json_encode($request->faq);
        $attension->address = $request->address;
        $attension->embasy_phone =$request->embasy_phone;
        $attension->meta_title=$request->meta_title;
        $attension->meta_description=$request->meta_description;
        $attension->meta_keywords=$request->meta_keywords;
        $attension->canonical=$request->canonical;
        $attension->status=$request->status;
        $attension->nav_bar_name = $request->nav_bar_name;
        if($request->nav_bar == "A")
        {
            $attension->nav_bar = "A";
        }
        else {
             $attension->nav_bar ='D';
         }
         if($request->status=='A')
         {
             $attension->status='A';
            }
            else {
                $attension->status='D';
            }
            // dd($attension);
            $attension->save();
         return redirect()->route('admin.attension.index')->with('success','Attension Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $attension = Attension::find($id);
        if(!is_null($attension)){
            return view('admin.attension.show', compact('attension'));
        }else{
        return redirect()->route('admin.attension.index')->with('error','Attension not Exists');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $attension = Attension::find($id);
        // dd($attension->embasy_phone);
        if(!is_null($attension)){
            return view('admin.attension.edit', compact('attension'))->with('warning','Attension Created Successfully');
        }else{
        return redirect()->route('admin.attension.index')->with('error','Attension not Exists');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $attension =  Attension::find($id);
        $attension->name = $request->name;
        $attension->slug = $request->slug;
          $flag = NULL;
          if ($request->hasFile('flag')){
            $flag = "null";
            if ($request->flag){
                $image = new ImageController;
                $flag = $image->flag($request);
                $attension->flag = $flag;
            }
          }

        if ($request->hasFile('nameImage')){
          $nameImage = "null";
          if ($request->nameImage){
              $image = new ImageController;
              $nameImage = $image->nameImage($request);
        $attension->nameImage = $nameImage;
          }
        }
        $attension->section_1 = $request->section_1;

        $section_02_image = "null";
        if (!is_null($request->section_2_image)){
            $image = new ImageController;
            $section_02_image = $image->files($request->section_2_image);
            $attension->section_2_image = $section_02_image;
        }
        $attension->section_2_text = $request->section_2_text;
        $attension->section_2_alt = $request->section_2_alt;

        $section_03_image = "null";
        if (!is_null($request->section_3_image)){
            $image = new ImageController;
            $section_03_image = $image->files($request->section_3_image);
            $attension->section_3_image = $section_03_image;
        }
        $attension->section_3_text = $request->section_3_text;
        $attension->section_3_alt = $request->section_3_alt;

        $section_04_image = "null";
        if (!is_null($request->section_5_image)){
            $image = new ImageController;
            $section_04_image = $image->files($request->section_4_image);
            $attension->section_4_image = $section_04_image;
        }
        $attension->section_4_text = $request->section_4_text;
        $attension->section_4_alt = $request->section_4_alt;

        $section_05_image = "null";
        if (!is_null($request->section_5_image)){
            $image = new ImageController;
            $section_05_image = $image->files($request->section_5_image);
            $attension->section_5_image = $section_05_image;
        }
        $attension->section_5_text = $request->section_5_text;
        $attension->section_5_alt = $request->section_5_alt;

        $section_06_image = "null";
        if (!is_null($request->section_6_image)){
            $image = new ImageController;
            $section_06_image = $image->files($request->section_6_image);
            $attension->section_6_image = $section_06_image;
        }
        $attension->section_6_text = $request->section_6_text;
        $attension->section_6_alt = $request->section_6_alt;

        $section_07_image = "null";
        if (!is_null($request->section_7_image)){
            $image = new ImageController;
            $section_07_image = $image->files($request->section_7_image);
            $attension->section_7_image = $section_07_image;
        }
        $attension->section_7_text = $request->section_7_text;
        $attension->section_7_alt = $request->section_7_alt;

        // $section_08_image = "null";
        // if (!is_null($request->section_8_image)){
        //     $image = new ImageController;
        //     $section_08_image = $image->files($request->section_8_image);
        //     $attension->section_8_image = $section_08_image;
        // }
        // $attension->section_8_text = $request->section_8_text;
        // $attension->section_8_alt = $request->section_8_alt;

     
        $attension->section_9_text = $request->section_9_text;

        $attension->section_10_text = $request->section_10_text;

        $attension->faq= json_encode($request->faq);
        $attension->address=$request->address;
        $attension->embasy_phone =$request->embasy_phone;
        $attension->meta_title=$request->meta_title;
        $attension->meta_description=$request->meta_description;
        $attension->meta_keywords=$request->meta_keywords;
        $attension->canonical=$request->canonical;
        $attension->status=$request->status;
        $attension->nav_bar_name = $request->nav_bar_name;
        if($request->nav_bar == "A")
        {
            $attension->nav_bar = "A";
        }
        else {
            $attension->nav_bar ='D';
        }
        if($request->status=='A')
        {
            $attension->status='A';
        }
        else {
            $attension->status='D';
        }
        $attension->save();
        // dd($attension);
        return redirect()->route('admin.attension.index')->with('success','Attension Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $attension = Attension::find($id);
            if(!is_null($attension)){
                $attension->delete();
                return redirect()->route('admin.attension.index')->with('warning','Attension Deleted Successfully');;
            }else{
            return redirect()->route('admin.attension.index')->with('error','Attension not Exists');
            }
    }
}
