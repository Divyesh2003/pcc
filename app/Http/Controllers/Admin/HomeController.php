<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Setting;
class HomeController extends Controller
{
    public function dashboard(){
        
        return view('admin.dashboard');
    }
    public function profile(){

        return view('admin.setting.profile');

    }
    public function profileUpdate(Request $request){
       $profile = Auth::guard('admin')->user();
       $profile->name = $request->name;
       $profile->email = $request->email;
       $profile->password = Hash::make($request->password);
       $profile->save();
       
       return redirect()->back();
    }
    public function robotos(){
        $robotsContent = file_get_contents(public_path('robots.txt'));
        return view('admin.setting.robotos', compact('robotsContent'));

    }

    public function robotosChange(Request $request){
        file_put_contents(public_path('robots.txt'), $request->input('robots_content'));

        return redirect()->route('admin.robotos')->with('success', 'Robots.txt updated successfully');
    }

    public function head(){
        $settings = Setting::where('name','head')->first();
        if($settings !=null){
            // dd($settings);
            return view('admin.setting.head',compact('settings'));
        }else{
            $setting = new Setting;
            $setting->name = 'head';
            $setting->description = null;
            $setting->save();
            return view('admin.setting.head',compact('settings'));
        }
    }

    public function  head_update(Request $request){
        $head = Setting::where('name','head')->first();
                $head->description = $request->head_tag;
                $head->save();
        return redirect()->route('admin.head')->with('success', 'Robots.txt updated successfully');
    }
}
