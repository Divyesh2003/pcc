<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\Apositlle;
use App\Models\Attension;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Page;
use App\Models\Youtube;
use App\Models\Review;
use App\Models\Redirect;
use App\Mail\InquiryMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use View;
use App\Rules\Recaptcha;
use Response;
class HomeController extends Controller
{
    public function index(){
        $youtubes = Youtube::all();
        $faqs = Faq::take(3)->get();
        $blogs = Blog::where('status', 'A')
        ->select('id', 'name', 'image', 'slug', 'created_at')
        ->selectRaw("CONCAT(SUBSTRING_INDEX(description, ' ', 20), '...') as description")
        ->take(6)->get();
        return view('welcome',compact('youtubes','faqs','blogs'));
    }

    public function about(){
        return view('about');
    }

    public function blog(){
        $blog = Blog::where('status', 'A')
        ->select('id', 'name', 'image', 'slug', 'created_at')
        ->selectRaw("CONCAT(SUBSTRING_INDEX(description, ' ', 20), '...') as description")
        ->paginate(4);
    foreach($blog as $blog_imp)
    {
        $blog_imp->impression = $blog_imp->impression + 1 ;
        $blog_imp->save();
    }
    $blogs = Blog::latest('created_at')->paginate(12);
    $blog_category = BlogCategory::where('status','A')->get();
    return view('blog', compact('blogs','blog_category','blog'));
    }

    public function single($slug){
    
        $blog = Blog::where('slug',$slug)->where('status','A')->first();
        $top = Blog::latest('created_at')->take(4)->get();
        $most_view = Blog::orderBy("total_view", "desc")->get();
        $category = BlogCategory::where('id',$slug)->first();
        if (!is_null($blog)) {
            $blog->total_view = $blog->total_view + 1 ;
            $blog->save();
            $categories = BlogCategory::where('status','A')->get();
            return view('single', compact('blog', 'categories','category','top','most_view'));
        } else {
            abort(404);
        }
    }

    public function contact(){
        try {
            return view('contact');
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function service(){
        return view('contact');
    }

    public function refund(){
        return view('refund');

    }

    public function translation(){
        $products = Product::with('category')->paginate(9);
        // dd($products);
        if (!is_null($products)) {
            return view('translation', compact('products'));
        } else {
            abort(404);
        }
        return view('translation');

    }

    public function product($slug){
        $products = Product::all()->take(3);
        $product = Product::where('slug',$slug)->first();
        return view('documentTranslation',compact('product','products'));
    }

    public function faq(){
        $faqs = FAQ::paginate(10); 
        // dd($faqs);
        return view('faq',compact('faqs'));
    }

    public function apossitle(){
        // dd("hello");
        return view('apostilleservices');
    }

    public function scholarship(){
        return view('scholarship');
    }
    
    public function inquiry(Request $request){
        
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => ['required', new Recaptcha]
        ]);

        // $request->validate([
        //     // Your other validation rules
        //     'g-recaptcha-response' => ['required', new Recaptcha]
        // ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }
        
            $inquiry =new Inquiry();
            $inquiry->name = $request->name. " " . $request->lastname;
            $inquiry->email = $request->email;
            $inquiry->phone = '+' . $request->country_code .' ' .$request->phone;
            $inquiry->services = $request->services;
            $inquiry->message = $request->message;
            $inquiry->inquiry_solve = "Pending";
            $inquiry->save();
            Mail::to('info@indiamea.in')->send(new InquiryMail($inquiry));
            // return redirect()->back()->with('success', 'Sucessfully submited your message!');
            return response()->json(['sucess' => 'true'], 200);

    }

    public function page($slug){
        $page = Page::where('slug',$slug)->where('status','A')->first();
        if($page != null){
            return view('page',compact('page'));
        }else{
            $city = Attension::where('slug',$slug)->where('status','A')->first();
            // dd($city);
            if($city != null ){
                return view('quattarembasyattension',compact('city'));
            }else{
                $apositlle = Apositlle::where('slug',$slug)->where('status','A')->first();
               if($apositlle != null){
                $apositlles = Apositlle::whereIn('name',['Bangalore','mumbai','chennai','kolkata','hyderabad','delhi','thane','goa','thane','ahmedabad'])->orderByRaw("
                              CASE name 
                                  WHEN 'Bangalore' THEN 1 
                                  WHEN 'mumbai' THEN 2 
                                  WHEN 'chennai' THEN 3
                                  WHEN 'kolkata' THEN 4 
                                  WHEN 'hyderabad' THEN 5 
                                  WHEN 'pune' THEN 6
                                  WHEN 'delhi' THEN 7
                                  WHEN 'goa' THEN 8
                                  WHEN 'thane' THEN 9 
                                  WHEN 'ahmedabad' THEN 10 
                              END
                          ")->take(10)->get();
                $city = $apositlle;
                return view('apostille_in_city',compact('city','apositlles'));
               }else{
                // return view('errors.404');
                abort(404);
               }
            }
        }
        
    }


    public function country(){
        $countries  = Attension::get();
        $content = View::make('sitemap.country', ['countries' => $countries]);
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }

    public function city(){
        $cities  = Apositlle::get();
        // $countries  = Attension::get();
        $content = View::make('sitemap.city', ['cities' => $cities]);
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
        // return view('sitemap.city',compact('cities'));
    }

    public function term(){
        return view('terms');
    }

    public function privacy(){
        return view('privacy');
    }

    public function review(Request $request){
                // dd($request);
            $review = new Review;
            $review->name = $request->name;
            $review->product_id = $request->product_id;
            $review->name = $request->name;
            $review->review = $request->rating;
            $review->description = $request->description;
            $review->role = $request->role;
            $review->save();
            return redirect()->back()->with('success', 'Sucessfully submited your message!');
    }

    public function uae(){
            $attension = Attension::where('slug','uae')->first();
                $city = $attension;
                // dd($city);
                if($attension != null ){
                    return view('quattarembasyattension',compact('city'));
                }else{
                    return view('errors.404');
                }
    }

    public function search(Request $request){
        // dd($request);
    $search = $request->input('search');
    $faqs = FAQ::where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->paginate(10); // Change 10 to the number of FAQs per page you want
    return response()->json($faqs);
        }
        
        public function redirect(Request $request){
            // dd($redirect);
            try {
                $redirect = Redirect::where('source_url', $request->path())->firstOrFail();
                // dd($redirect);
                // return redirect($redirect->destination_url);
            } catch (\Exception $e) {
                abort(404);
            }

        }
        public function blogSitemap(Request $request){
            $blogs  = Blog::get();
            $content = View::make('sitemap.blog', ['blogs' => $blogs]);
            return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
        }
        public function sitemap(Request $request){
            $products  = Product::get();
            $pages  = Page::get();
            $content = View::make('sitemap.sitemap', ['products' => $products,'pages' => $pages]);
            return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
        }
        public function sitemapHtml(){
            $products  = Product::where('status','A')->get();
            $pages  = Page::where('status','A')->get();
            $blogs  = Blog::where('status','A')->get();
            $countries  = Attension::where('status','A')->get();
        $cities  = Apositlle::where('status','A')->get();
        return view('sitemap.html',compact('products','pages','blogs','countries','cities'));

        }
}