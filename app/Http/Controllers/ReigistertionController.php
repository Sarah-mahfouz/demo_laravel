<?php

namespace App\Http\Controllers;

use App\Models\Reigistertion;
use Illuminate\Http\Request;

class ReigistertionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    public function showFrom()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:reigistertions',
            'full_name' => 'required|string|max:50',
            'password' => 'required|string|min:8',
            'gender' => 'required|male|female',
            'age_group' => 'required|below_18|18_25|26_35|36_45|46_55|above_55',
            'education_level' => 'required|school|university|post_graduate',
            'interests' => 'required|string',
            'phone' => 'nullable|max:10',
            'address' => 'required|',
            'work' => 'required',
        ]);

        Reigistertion::create([$request->all()]);
        return redirect('/SUCCESS')->WITH('SUCCESS','REGISTER SUCCESS');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Reigistertion $reigistertion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reigistertion $reigistertion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reigistertion $reigistertion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reigistertion $reigistertion)
    {
        //
    }
}
