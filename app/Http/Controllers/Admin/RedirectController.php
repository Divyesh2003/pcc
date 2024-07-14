<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Redirect;
use App\DataTables\RedirectDataTable;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
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
    public function index(RedirectDataTable $dataTable)
    {
       return $dataTable->render('admin.redirects.index');
    }

    public function create()
    {
        return view('admin.redirects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'source_url' => 'required',
            'destination_url' => 'required',
        ]);

        Redirect::create($request->all());
        return redirect()->route('admin.redirect.index');
    }

    public function show(Redirect $redirect)
    {
        return view('admin.redirects.show', compact('redirect'));
    }

    public function edit(Redirect $redirect)
    {
        return view('admin.redirects.edit', compact('redirect'));
    }

    public function update(Request $request, Redirect $redirect)
    {
        $redirect->update($request->all());
        return redirect()->route('admin.redirect.index');
    }

    public function destroy(Redirect $redirect)
    {
        $redirect->delete();
        return redirect()->route('admin.redirect.index');
    }
}
