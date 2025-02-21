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

    public function contact()
    {
        return view('contact');
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

    public function contact_store(Recruit $request)
    {
        $inputs = request()->all(); // フォームの全データを取得

        Mail::to(config('mail.admin'))->send(new ContactForm($inputs));

        return back();
    }
    public function recruit_contact_store(Request $request)
    {
        $inputs = $request->all(); // フォームの全データを取得
        $filePath = null;

        // ファイルがアップロードされた場合
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            
            // ファイルがPDFか確認
            if ($file->getClientMimeType() === 'application/pdf') {
                // ファイルを保存してパスを取得
                $filePath = $file->store('attachments', 'public');
            } else {
                // PDF以外のファイルがアップロードされた場合のエラーハンドリング
                return back()->withErrors(['file' => 'PDFファイルをアップロードしてください']);
            }
        }

        // メール送信
        Mail::to(config('mail.admin'))->send(new ContactForm($inputs, $filePath));

        // メッセージを返してリダイレクト
        return back()->with('message', 'お問い合わせが送信されました');
    }



  
}
