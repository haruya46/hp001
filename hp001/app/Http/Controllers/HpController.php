<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function toppage()
    {
        return view('toppage');
    }

    public function business()
    {
        return view('business');
    }

    public function recruit()
    {
        return view('recruit');
    }

    public function company()
    {
        return view('company');
    }

    public function contact()
    {
        return view('contact');
    }

    public function fulltime()
    {
        return view('full-time');
    }

    public function mobile()
    {
        return view('mobile');
    }

    public function parttime()
    {
        return view('part-time');
    }

    public function pest()
    {
        return view('pest');
    }

    public function selfemployed()
    {
        return view('Self-employed');
    }
    
    public function ses()
    {
        return view('ses');
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
