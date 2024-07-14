<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\DataTables\InquiryDataTable;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(InquiryDataTable $dataTable)
    {
        // dd($dataTable);
        return $dataTable->render('admin.inquiry.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.inquiry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inquiry = Inquiry::find($id);
        // dd( $inquiry->inquiry_solve);
        if(!is_null($inquiry)){
            if($inquiry->inquiry_solve == 'Pending'){
            $inquiry->inquiry_solve = 'Complate';
            $inquiry->save();
            }
            // return view('admin.inquiry.show', compact('inquiry'));
            return redirect()->back();
        }else{
            abort(404);
        }   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
