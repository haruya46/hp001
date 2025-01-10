<?php

namespace App\Http\Controllers;

use App\Models\Toppage;
use Illuminate\Http\Request;

use function Laravel\Prompts\text;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function topstore(Request $request)
    {
        $toppage=new Toppage();
        $toppage->title=$request->title;
        $toppage-> business_image = $request->business_image;
        $toppage-> business_text = $request->business_text;
        $toppage-> recruit_image = $request->recruit_image;
        $toppage-> business_text = $request->business_text;
        $toppage-> company_hand_text = $request->company_hand_text;
        $toppage->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
