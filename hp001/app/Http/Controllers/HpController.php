<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Toppage;
use App\Models\recruit;
use App\Models\business;
use App\Models\Company;
use App\Models\ses;
use App\Models\Mobile;
use App\Models\Pest;
use App\Models\fulltime;
use App\Models\parttime;
use App\Models\selfemployed;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class HpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function toppage(Toppage $toppage)
    {
        $toppage= $toppage->where('id', 1)->first();

        return view('toppage', compact('toppage'));
    }

    public function business(business $business)
    {
        $business= $business->where('id', 1)->first();

        return view('business', compact('business'));

    }

    public function recruit(recruit $recruit)
    {
        $recruit= $recruit->where('id', 1)->first();

        return view('recruit', compact('recruit'));
    }

    public function company(Company $company)
    {
        $company= $company->where('id', 1)->first();

        return view('company', compact('company'));
    }

    public function contact(Toppage $toppage)
    {
        $contact= $toppage->where('id', 1)->first();
        return view('contact',compact('contact'));
    }

    public function fulltime(fulltime $fulltime)
    {
        $recruit_content= $fulltime->where('id', 1)->first();

        return view('full-time', compact('recruit_content'));
    }

    public function parttime(parttime $parttime)
    {
        $recruit_content= $parttime->where('id', 1)->first();

        return view('part-time', compact('recruit_content'));
    }
    
    public function selfemployed(selfemployed $selfemployed)
    {
        $recruit_content= $selfemployed->where('id', 1)->first();

        return view('Self-employed', compact('recruit_content'));
    }
    public function mobile(Mobile $mobile)
    {
        $business_content= $mobile->where('id', 1)->first();

        return view('mobile', compact('business_content'));
    }


    public function pest(Pest $pest)
    {
        $business_content= $pest->where('id', 1)->first();

        return view('pest', compact('business_content'));
    }
    
    public function ses(Ses $ses)
    {
        $business_content= $ses->where('id', 1)->first();

        return view('ses', compact('business_content'));
    }

    public function contact_store(Request $request)
    {
        $inputs = $request->only(['name', 'email', 'tel','employment','genre', 'content']);
    
        $adminEmail = config('mail.admin');
    
        Mail::to($adminEmail)->send(new ContactForm($inputs));
    
        return back()->with('message', 'お問い合わせを送信しました。担当者よりご連絡いたします。');
    }



  
}
