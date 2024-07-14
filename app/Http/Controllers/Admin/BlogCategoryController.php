<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\BlogCategory;
use App\Http\Controllers\Admin\ImageController;
use App\Models\Category;
use App\Models\User;
use App\Models\Url;
use Illuminate\Http\Request;
use App\DataTables\BlogCategoryDataTable;
use App\Requests\BlogCategoryCreateRequest;
use App\Requests\BlogCategoryUpdateRequest;
// use App\Http\Controllers\Admin\ImageController;
use Illuminate\Support\Facades\Auth;

class BlogCategoryController extends Controller
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
    public function index(BlogCategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.blog.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $categories=BlogCategory::all();
        return view('admin.blog.category.create',compact('users','categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $myimage = "null";
        if ($request) {
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        // $valdater=$request->validated();
        $blogcategory=new BlogCategory;
        $blogcategory->parent_id=$request->parent_id;
        $blogcategory->name=$request->name;
        $blogcategory->slug=$request->slug;
        $blogcategory->description=$request->description;
        $blogcategory->image = $myimage;
        $blogcategory->meta_title=$request->meta_title;
        $blogcategory->meta_description=$request->meta_description;
        $blogcategory->meta_keyword=$request->meta_keywords;
        $blogcategory->canonical=$request->canonical;
        if($request->status=='A')
        {
                $blogcategory->status='A';
        }
        else {
                $blogcategory->status='D';
        }
        $blogcategory->created_by = $this->user_id;
        $blogcategory->save();
        return redirect()->route('admin.blog.category.index')->with('success','Blog Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $categories=BlogCategory::all();
            $blogcategory = BlogCategory::find($id);
            if(!is_null($blogcategory)){
                return view('admin.blog.category.show', compact('blogcategory','categories'));
            }else{
                // abort(404);
            return redirect()->route('admin.cms.blog.category.index')->with('error','Blog Category not Exists');

            }
    }
    /**
     * Show the form  for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=BlogCategory::all();

        $blogcategory = BlogCategory::find($id);
        if(!is_null($blogcategory)){
            return view('admin.blog.category.edit', compact('blogcategory','categories'));
        }else{
            // abort(404);
        return redirect()->route('admin.cms.blog.category.index')->with('error','Blog Category not Exists');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $myimage = "null";
        if ($request) {
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $blogcategory = BlogCategory::find($id);
        $blogcategory->parent_id = $request->parent_id;
        $blogcategory->name = $request->name;
        $blogcategory->slug = $request->slug;
        $blogcategory->description = $request->description;
        if($request->image != "")
        {
            $blog->image = $myimage;
        }
        // $blogcategory->image =  $myimage;
        $blogcategory->meta_title = $request->meta_title;
        $blogcategory->meta_description = $request->meta_description;
        $blogcategory->meta_keyword = $request->meta_keywords;
        $blogcategory->canonical = $request->canonical;
        if($request->status == 'A')
        {
            $blogcategory->status = 'A';
        }
        else {
            $blogcategory->status='D';
        }
        $blogcategory->updated_by = $this->user_id;
        $blogcategory->save();
        // dd($blogcategory);
    //    dd($blogcategory);
        return redirect()->route('admin.blog.category.index')->with('success','Blog Category Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $blogcategory = BlogCategory::find($id);
            if(!is_null($blogcategory)){
                $blogcategory->delete();
                return redirect()->route('admin.blog.category.index')->with('warning','Blog Category Deleted Successfully');;
            }else{
            return redirect()->route('admin.blog.category.index')->with('error','Blog Category not Exists');
            }
    }
}
