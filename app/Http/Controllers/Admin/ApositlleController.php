<?php

namespace App\Http\Controllers\Admin;

use App\Models\Apositlle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ImageController;
use App\DataTables\AposittleDataTable;
use App\Requests\BlogCategoryCreateRequest;
use App\Requests\BlogCategoryUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ApositlleController extends Controller
{
    // login user id
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
    public function index(AposittleDataTable $dataTable)
    {
        return $dataTable->render('admin.apositlle.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.apositlle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
    $apositlle = new Apositlle;
    $apositlle->name = $request->name;
    $apositlle->slug = $request->slug;
    $apositlle->section1 = $request->question_option_1;
    $apositlle->section2_image = $request->file_2 ? (new ImageController)->files($request->file_2) : "null";
    $apositlle->section2_image_alt = $request->file_2_alt;
    $apositlle->section2_text = $request->section_2;
    $apositlle->section3 = $request->section_3;
    $apositlle->section4 = $request->section_4 ? (new ImageController)->files($request->section_4) : "null";
    $apositlle->section4_image_alt = $request->section_4_alt;
    $apositlle->section5 = $request->question_option_5;
    $apositlle->section6 = $request->section_6 ? (new ImageController)->files($request->section_6) : "null";
    $apositlle->section6_image_alt = $request->section_6_alt;
    /////////////////////////////////////////////////////////
    $apositlle->process_apostille_1_file = $request->process_apostille_1_file ? (new ImageController)->files($request->process_apostille_1_file) : "null";
    $apositlle->process_apostille_1_text = $request->process_apostille_1_text;
    $apositlle->process_apostille_1_alt = $request->process_apostille_1_alt;
    $apositlle->process_apostille_2_file = $request->process_apostille_2_file ? (new ImageController)->files($request->process_apostille_2_file) : "null";
    $apositlle->process_apostille_2_text = $request->process_apostille_2_text;
    $apositlle->process_apostille_2_alt = $request->process_apostille_2_alt;
    $apositlle->process_apostille_3_file = $request->process_apostille_3_file ? (new ImageController)->files($request->process_apostille_3_file) : "null";
    $apositlle->process_apostille_3_text = $request->process_apostille_3_text;
    $apositlle->process_apostille_3_alt = $request->process_apostille_3_alt;
///////////////////////////////////////////////////////////////////////
    $apositlle->faq = json_encode($request->faq);
    $apositlle->meta_title = $request->meta_title;
    $apositlle->meta_description = $request->meta_description;
    $apositlle->meta_keywords = $request->meta_keywords;
    $apositlle->conical = $request->conical;
    $apositlle->nav_bar = $request->nav_bar_name == 'A' ? 'A' : 'D';
    $apositlle->status = $request->status == 'A' ? 'A' : 'D';
    $apositlle->save();
    // dd($apositlle);
    return redirect()->route('admin.apositlle.index')->with('success', 'Apositlle Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $apositlle = Apositlle::find($id);
        if(!is_null($apositlle)){
            return view('admin.apositlle.show', compact('apositlle'));
        }else{
            // abort(404);
        return redirect()->route('admin.apositlle.index')->with('error','Apositlle not Exists');

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $apositlle = Apositlle::find($id);
        // dd($apositlle);
        if(!is_null($apositlle)){
            return view('admin.apositlle.edit', compact('apositlle'))->with('warning','Aposittle Created Successfully');
        }else{
        return redirect()->route('admin.apositlle.index')->with('error','Apositlle not Exists');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try {
            $apositlle = Apositlle::find($id);
            if (!$apositlle) {
                $apositlle = new Apositlle;
            }
            $apositlle->name = $request->name;
            $apositlle->slug = $request->slug;
            $apositlle->section1 = $request->question_option_1;
            $file_2 = "null";
            if (!is_null($request->file_2)){
                $image = new ImageController;
                $file_2 = $image->files($request->file_2);
                $apositlle->section2_image = $file_2;
            }
            
            $section_4 = "null";
            if (!is_null($request->section_4)){
                $image = new ImageController;
                $section_4 = $image->files($request->section_4);
                $apositlle->section4 = $section_4;
            }
            
            $section_6 = "null";
            if (!is_null($request->section_6)){
                $image = new ImageController;
                $section_6 = $image->files($request->section_6);
                $apositlle->section6  = $section_6;
            }
            
            $process_apostille_01_file = "null";
            if (!is_null($request->process_apostille_1_file)){
                $image = new ImageController;
                $process_apostille_01_file = $image->files($request->process_apostille_1_file);
                $apositlle->process_apostille_1_file = $process_apostille_01_file;
            }
            $process_apostille_02_file = "null";
            if (!is_null($request->process_apostille_2_file)){
                $image = new ImageController;
                $process_apostille_02_file = $image->files($request->process_apostille_2_file);
                $apositlle->process_apostille_2_file = $process_apostille_02_file;
            }
            $process_apostille_03_file = "null";
            if (!is_null($request->process_apostille_3_file)){
                $image = new ImageController;
                $process_apostille_03_file = $image->files($request->process_apostille_3_file);
                $apositlle->process_apostille_3_file = $process_apostille_03_file;
            }
            $apositlle->section2_text = $request->section_2;
            $apositlle->section3 = $request->section_3;
            $apositlle->section5 = $request->question_option_5;
            $apositlle->section2_image_alt = $request->file_2_alt;
            $apositlle->section4_image_alt = $request->section_4_alt;
            $apositlle->section6_image_alt = $request->section_6_alt;
            
            $apositlle->process_apostille_1_text = $request->process_apostille_1_text;
            $apositlle->process_apostille_1_alt = $request->process_apostille_1_alt;
            $apositlle->process_apostille_2_text = $request->process_apostille_2_text;
            $apositlle->process_apostille_2_alt = $request->process_apostille_2_alt;
            $apositlle->process_apostille_3_text = $request->process_apostille_3_text;
            $apositlle->process_apostille_3_alt = $request->process_apostille_3_alt;
            $apositlle->faq = json_encode($request->faq);
            $apositlle->meta_title = $request->meta_title;
            $apositlle->meta_description = $request->meta_description;
            $apositlle->meta_keywords = $request->meta_keywords;
            $apositlle->conical = $request->conical;
            if($request->nav_bar =='A')
            {
                $apositlle->nav_bar ='A';
            }
            else {
                $apositlle->nav_bar ='D';
            } 
            if($request->status=='A')
            {
                $apositlle->status='A';
            }
            else {
                $apositlle->status='D';
            }
            
            // Save the record
            $apositlle->save();
            // dd($apositlle,$request);
            $message = $apositlle->wasRecentlyCreated ? 'Apositlle Created Successfully' : 'Apositlle Updated Successfully';
            
            return redirect()->route('admin.apositlle.index')->with('success', $message);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving the Apositlle: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $apositlle = Apositlle::find($id);
            if(!is_null($apositlle)){
                $apositlle->delete();
                return redirect()->route('admin.apositlle.index')->with('warning','Aposittle Deleted Successfully');;
            }else{
            return redirect()->route('admin.apositlle.index')->with('error','Apositlle not Exists');
            }
    }
}
