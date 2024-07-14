<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\DataTables\UsersDataTable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
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
    public function index(UsersDataTable $dataTable)
    {
       return $dataTable->render('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
         // Uncomment this line if you want to debug the incoming request
        // dd($request);
        
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8',
            'is_admin' => 'required|boolean',
        ]);

        try {
            // Create a new Admin instance and assign validated data
            $admin = new Admin;
            $admin->name = $validatedData['name'];
            $admin->email = $validatedData['email'];
            $admin->password = bcrypt($validatedData['password']);
            $admin->is_admin = $validatedData['is_admin'];
            
            // Save the admin to the database
            $admin->save();

            // Uncomment this line if you want to debug the created admin
            // dd($admin);

            // Redirect to the admin user index with a success message
            return redirect()->route('admin.users.index')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // Handle any errors that occur during the save process
            return redirect()->back()->withErrors(['error' => 'There was an error creating the user. Please try again.']);
        }
       
    }

    public function show($id)
    {
        $user = Admin::find($id);
        if(!is_null($user)){
            // dd($user);
            return view('admin.user.show', compact('user'));
        }else{
            abort(404);
        }
    }

    public function edit(Admin $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:admins,email',
        //     'password' => 'required|string|min:8',
        //     'is_admin' => 'required|boolean',
        // ]);
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request['email'];
        $admin->is_admin = $request['is_admin'];
        // Save the admin to the database
        $admin->save();
        if($admin->password != null){
            $admin->password = bcrypt($request['password']);
        }
        $admin->save();
        // dd($admin);
        return redirect()->route('admin.users.index');
    }

    public function destroy(Admin $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
