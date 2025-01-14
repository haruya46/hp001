<?php

namespace App\Http\Controllers;

use App\Models\Toppage;
use App\Models\recruit;
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
        if (request('business_image')){
            $name = request()->file('business_image')->getClientOriginalName();
            request()->file('business_image')->move('storage/images', $name);
            $toppage->business_image = $name;
        }
        $toppage-> business_text = $request->business_text;
        if (request('recruit_image')){
            $name = request()->file('recruit_image')->getClientOriginalName();
            request()->file('recruit_image')->move('storage/images', $name);
            $toppage->recruit_image = $name;
        }

        $toppage-> recruit_text = $request->recruit_text;
        $toppage-> company_hand_text = $request->company_hand_text;
        if (request('company_image')){
            $name = request()->file('company_image')->getClientOriginalName();
            request()->file('company_image')->move('storage/images', $name);
            $toppage->company_image= $name;
        }
        $toppage-> company_text = $request->company_text;
        if (request('backgrand_image')){
            $name = request()->file('backgrand_image')->getClientOriginalName();
            request()->file('backgrand_image')->move('storage/images', $name);
            $toppage->backgrand_image= $name;
        }
        $toppage->save();
        return redirect()->route('admin.create');

    }
    public function recruitstore(Request $request)
    {
        $recruit=new recruit();
        if (request('top_image')){
            $name = request()->file('top_image')->getClientOriginalName();
            request()->file('top_image')->move('storage/images', $name);
            $recruit->top_image = $name;
        }

        if (request('backgrand_image')){
            $name = request()->file('backgrand_image')->getClientOriginalName();
            request()->file('backgrand_image')->move('storage/images', $name);
            $recruit->backgrand_image = $name;
        }
        if (request('full_time_image')){
            $name = request()->file('full_time_image')->getClientOriginalName();
            request()->file('full_time_image')->move('storage/images', $name);
            $recruit->full_time_image = $name;
        }
        if (request('part_time_image')){
            $name = request()->file('part_time_image')->getClientOriginalName();
            request()->file('part_time_image')->move('storage/images', $name);
            $recruit->part_time_image = $name;
        }
        if (request('self_time_image')){
            $name = request()->file('part_time_image')->getClientOriginalName();
            request()->file('part_time_image')->move('storage/images', $name);
            $recruit->part_time_image = $name;
        }

        $recruit->handwriting=$request->handwriting;


        $recruit->one_word_title=$request->one_word_title;

        $recruit->one_word_text=$request->one_word_text;
        $recruit->krona_one_regular=$request->krona_one_regular;
        $recruit->krona_one_regular_text=$request->krona_one_regular_text;
        if (request('krona_one_regular_image')){
            $name = request()->file('krona_one_regular_image')->getClientOriginalName();
            request()->file('krona_one_regular_image')->move('storage/images', $name);
            $recruit->krona_one_regular_image = $name;
        }
        $recruit->company_messeage_title=$request->company_messeage_title;
        $recruit->company_messeage_item1=$request->company_messeage_item1;
        $recruit->company_messeage_item2=$request->company_messeage_item2;
        if (request('company_messeage_area_image')){
            $name = request()->file('company_messeage_area_image')->getClientOriginalName();
            request()->file('company_messeage_area_image	')->move('storage/images', $name);
            $recruit->company_messeage_area_image= $name;
        }
        $recruit->save();
        return redirect()->route('admin.create');

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
