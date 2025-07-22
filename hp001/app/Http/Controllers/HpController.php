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
use Illuminate\Support\Facades\Http;

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
        // Honeypot（スパム対策）バリデーション
        if ($request->filled('website')) {
            return back()->with('message', 'スパム判定されました。入力内容を確認してください');
        }

        // reCAPTCHA検証
        $recaptcha = $request->input('g-recaptcha-response');
        if (!$recaptcha) {
            return back()->with(['error' => 'reCAPTCHA認証に失敗しました。']);
        }
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LcA0osrAAAAAA87TZbz1TsgvG2RFMHTX7HLzyYw',
            'response' => $recaptcha,
            'remoteip' => $request->ip(),
        ]);
        if (!$response->json('success')) {
            return back()->with(['error' => 'reCAPTCHA認証に失敗しました。']);
        }

        // 入力バリデーション
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'tel' => ['nullable', 'regex:/^0[0-9]{9,10}$/'],
            'employment' => ['nullable', 'string', 'max:50'],
            'genre' => ['nullable', 'string', 'max:50'],
            'content' => ['nullable', 'string', 'max:2000'],
        ], [
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'tel.regex' => '電話番号の形式が正しくありません。',
        ]);

        $inputs = $request->only(['name', 'email', 'tel','website','employment','genre', 'content']);
    
        $adminEmail = config('mail.admin');
    
        Mail::to($adminEmail)->send(new ContactForm($inputs));
    
        return back()->with('message', 'お問い合わせを送信しました。担当者よりご連絡いたします。');
    }



  
}
