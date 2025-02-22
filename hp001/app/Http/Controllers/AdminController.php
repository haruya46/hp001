<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;

use function Laravel\Prompts\text;

class AdminController extends Controller
{
   
    public function admin()
    {
        return view('admin.admin');
    }

    public function create()
    {
        return view('admin.create');
    }
    // toppage保存用コード
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
        return redirect()->route('admin.admin');

    }

    // 採用ページ保存用コード
    public function recruitstore(Request $request)
    {
        $recruit=new recruit();
        if (request('top_image')) {
            $file = request()->file('top_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $recruit->top_image = $name;
        }

        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $recruit->background_image = $name;
        }
        if (request('full_time_image')) {
            $file = request()->file('full_time_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $recruit->full_time_image = $name;
        }
        if (request('part_time_image')) {
            $file = request()->file('part_time_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $recruit->part_time_image = $name;
        }
        if (request('self_time_image')) {
            $file = request()->file('self_time_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $recruit->self_time_image = $name;
        }

        $recruit->handwriting=$request->handwriting;


        $recruit->one_word_title=$request->one_word_title;

        $recruit->one_word_text=$request->one_word_text;
        $recruit->krona_one_regular=$request->krona_one_regular;
        $recruit->krona_one_regular_text=$request->krona_one_regular_text;
        if (request('krona_one_regular_image')) {
            $file = request()->file('krona_one_regular_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $recruit->krona_one_regular_image = $name;
        }
        $recruit->company_messeage_title=$request->company_messeage_title;
        $recruit->company_messeage_item1=$request->company_messeage_item1;
        $recruit->company_messeage_item2=$request->company_messeage_item2;
        if (request('company_messeage_area_image')) {
            $file = request()->file('company_messeage_area_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $recruit->company_messeage_area_image = $name;
        }
        $recruit->save();
        return redirect()->route('admin.admin');

    }

    // 事業ページ保存用コード
    public function businesses_store(Request $request)
    {
        $business=new business();
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $business->background_image = $name;
        }

        if (request('top_image')) {
            $file = request()->file('top_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $business->top_image = $name;
        }

        $business->explanation_title=$request->explanation_title;
        $business->explanation_title_p=$request->explanation_title_p;

        if (request('content_img_1')) {
            $file = request()->file('content_img_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $business->content_img_1 = $name;
        }

        $business->more_text_1=$request->more_text_1;

        if (request('content_img_2')) {
            $file = request()->file('content_img_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $business->content_img_2 = $name;
        }

        $business->more_text_2=$request->more_text_2;

        if (request('content_img_3')) {
            $file = request()->file('content_img_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $business->content_img_3 = $name;
        }

        $business->more_text_3=$request->more_text_3;

        $business->save();
        return redirect()->route('admin.admin');
    }

     // 会社ページ保存用コード
     public function company_store(Request $request)
     {
         $company=new Company();
         if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $company->background_image = $name;
        }
       if (request('top_image')) {
        $file = request()->file('top_image');
        $originalName = $file->getClientOriginalName();
        $path = 'storage/images/';
        $name = $originalName;
    
        // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
        if (file_exists($path . $originalName)) {
            $name = time() . '_' . $originalName;
        }
    
        $file->move($path, $name);
        $company->top_image = $name;
        }
        if (request('background_image_vision')) {
            $file = request()->file('background_image_vision');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $company->background_image_vision = $name;
        }
 
        $company->image_in_text=$request->image_in_text;
        $company->vision_text=$request->vision_text;

        $company->krona_one_regular_1=$request->krona_one_regular_1;
        $company->krona_one_regular_text_1=$request->krona_one_regular_text_1;

        $company->krona_one_regular_2=$request->krona_one_regular_2;
        $company->krona_one_regular_text_2=$request->krona_one_regular_text_2;

        if (request('ceo_image')) {
            $file = request()->file('ceo_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $company->ceo_image = $name;
       }
        $company->text1=$request->text1;
        $company->text2=$request->text2;
        $company->text3=$request->text3;
        $company->ceo_text=$request->ceo_text;

        $company->company_category_1=$request->company_category_1;
        $company->company_category_text_1=$request->company_category_text_1;

        $company->company_category_2=$request->company_category_2;
        $company->company_category_text_2=$request->company_category_text_2;

        $company->company_category_3=$request->company_category_3;
        $company->company_category_text_3=$request->company_category_text_3;

        $company->company_category_4=$request->company_category_4;
        $company->company_category_text_4=$request->company_category_text_4;

        $company->company_category_5=$request->company_category_5;
        $company->company_category_text_5=$request->company_category_text_5;

        if (request('company_category_image')) {
            $file = request()->file('company_category_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $company->company_category_image = $name;
        }

        $company->save();
         return redirect()->route('admin.admin');
     }

      // sesページ保存用コード
    public function ses_store(Request $request)
    {
        $ses=new ses();
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->background_image = $name;
        }

        if (request('top_image')) {
            $file = request()->file('top_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->top_image = $name;
        }

        $ses->top_bottom_text=$request->top_bottom_text;

        $ses->content_text=$request->content_text;

        if (request('content_text_image')) {
            $file = request()->file('content_text_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->content_text_image = $name;
        }

        $ses->business_title=$request->business_title;

        $ses->business_sab_title_1=$request->business_sab_title_1;

        $ses->business_item_text_1=$request->business_item_text_1;

        if (request('business_item_image_1')) {
            $file = request()->file('business_item_image_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->business_item_image_1 = $name;
        }

        $ses->business_sab_title_2=$request->business_sab_title_2;

        $ses->business_item_text_2=$request->business_item_text_2;

        if (request('business_item_image_2')) {
            $file = request()->file('business_item_image_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->business_item_image_2 = $name;
        }

        $ses->business_sab_title_3=$request->business_sab_title_3;

        $ses->business_item_text_3=$request->business_item_text_3;

        if (request('business_item_image_3')) {
            $file = request()->file('business_item_image_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->business_item_image_3 = $name;
        }

        $ses->save();
        return redirect()->route('admin.admin');
    }

    // 人材派遣ページ保存用コード
    public function mobile_store(Request $request)
    {
        $mobile=new Mobile();
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->background_image = $name;
        }

        if (request('top_image')) {
            $file = request()->file('top_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->top_image = $name;
        }

        $mobile->top_bottom_text=$request->top_bottom_text;

        $mobile->content_text=$request->content_text;

        if (request('content_text_image')) {
            $file = request()->file('content_text_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->content_text_image = $name;
        }

        $mobile->business_title=$request->business_title;

        $mobile->business_sab_title_1=$request->business_sab_title_1;

        $mobile->business_item_text_1=$request->business_item_text_1;

        if (request('business_item_image_1')) {
            $file = request()->file('business_item_image_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->business_item_image_1 = $name;
        }

        $mobile->business_sab_title_2=$request->business_sab_title_2;

        $mobile->business_item_text_2=$request->business_item_text_2;

        if (request('business_item_image_2')) {
            $file = request()->file('business_item_image_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->business_item_image_2 = $name;
        }

        $mobile->business_sab_title_3=$request->business_sab_title_3;

        $mobile->business_item_text_3=$request->business_item_text_3;

        if (request('business_item_image_3')) {
            $file = request()->file('business_item_image_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->business_item_image_3 = $name;
        }

        $mobile->save();
        return redirect()->route('admin.admin');
    }

    // 害虫駆除ページ保存用コード
    public function pests_store(Request $request)
    {
        $pest=new Pest();
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->background_image = $name;
        }

        if (request('top_image')) {
            $file = request()->file('top_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->top_image = $name;
        }

        $pest->top_bottom_text=$request->top_bottom_text;

        $pest->content_text=$request->content_text;

        if (request('content_text_image')) {
            $file = request()->file('content_text_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->content_text_image = $name;
        }

        $pest->business_title=$request->business_title;

        $pest->business_sab_title_1=$request->business_sab_title_1;

        $pest->business_item_text_1=$request->business_item_text_1;

        if (request('business_item_image_1')) {
            $file = request()->file('business_item_image_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->business_item_image_1 = $name;
        }

        $pest->business_sab_title_2=$request->business_sab_title_2;

        $pest->business_item_text_2=$request->business_item_text_2;

        if (request('business_item_image_2')) {
            $file = request()->file('business_item_image_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->business_item_image_2 = $name;
        }

        $pest->business_sab_title_3=$request->business_sab_title_3;

        $pest->business_item_text_3=$request->business_item_text_3;

        if (request('business_item_image_3')) {
            $file = request()->file('business_item_image_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->business_item_image_3 = $name;
        }

        $pest->save();
        return redirect()->route('admin.admin');
    }

    // アルバイト採用ページ保存用コード
    public function parttime_store(Request $request)
    {
        $parttime=new parttime();
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->background_image = $name;
        }

        if (request('application_img')) {
            $file = request()->file('application_img');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->application_img= $name;
        }

        $parttime->company_goal=$request->company_goal;

        if (request('recruitment_img')) {
            $file = request()->file('recruitment_img');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->recruitment_img= $name;
        }

        $parttime->content_title_1=$request->content_title_1;
        $parttime->content_p_1=$request->content_p_1;

        $parttime->content_title_2=$request->content_title_2;
        $parttime->content_p_2=$request->content_p_2;

        $parttime->content_title_3=$request->content_title_3;
        $parttime->content_p_3=$request->content_p_3;

        $parttime->content_title_4=$request->content_title_4;
        $parttime->content_p_4=$request->content_p_4;

        $parttime->content_title_5=$request->content_title_5;
        $parttime->content_p_5=$request->content_p_5;

        $parttime->content_title_6=$request->content_title_6;
        $parttime->content_p_6=$request->content_p_6;

        $parttime->content_title_7=$request->content_title_7;
        $parttime->content_p_7=$request->content_p_7;

        $parttime->content_title_8=$request->content_title_8;
        $parttime->content_p_8=$request->content_p_8;

        $parttime->location_title=$request->location_title;

        if (request('location_img_1')) {
            $file = request()->file('location_img_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_1= $name;
        }

        if (request('location_img_2')) {
            $file = request()->file('location_img_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_2= $name;
        }

        if (request('location_img_3')) {
            $file = request()->file('location_img_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_3= $name;
        }

        $parttime->location_text_area_1=$request->location_text_area_1;
        $parttime->location_text_area_2=$request->location_text_area_2;
        $parttime->save();
        return redirect()->route('admin.admin');
    }

     // 正社員採用ページ保存用コード
     public function fulltime_store(Request $request)
     {
         $parttime=new fulltime();
         if (request('background_image')) {
             $file = request()->file('background_image');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->background_image = $name;
         }
 
         if (request('application_img')) {
             $file = request()->file('application_img');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->application_img= $name;
         }
 
         $parttime->company_goal=$request->company_goal;
 
         if (request('recruitment_img')) {
             $file = request()->file('recruitment_img');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->recruitment_img= $name;
         }
 
         $parttime->content_title_1=$request->content_title_1;
         $parttime->content_p_1=$request->content_p_1;
 
         $parttime->content_title_2=$request->content_title_2;
         $parttime->content_p_2=$request->content_p_2;
 
         $parttime->content_title_3=$request->content_title_3;
         $parttime->content_p_3=$request->content_p_3;
 
         $parttime->content_title_4=$request->content_title_4;
         $parttime->content_p_4=$request->content_p_4;
 
         $parttime->content_title_5=$request->content_title_5;
         $parttime->content_p_5=$request->content_p_5;
 
         $parttime->content_title_6=$request->content_title_6;
         $parttime->content_p_6=$request->content_p_6;
 
         $parttime->content_title_7=$request->content_title_7;
         $parttime->content_p_7=$request->content_p_7;
 
         $parttime->content_title_8=$request->content_title_8;
         $parttime->content_p_8=$request->content_p_8;
 
         $parttime->location_title=$request->location_title;
 
         if (request('location_img_1')) {
             $file = request()->file('location_img_1');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->location_img_1= $name;
         }
 
         if (request('location_img_2')) {
             $file = request()->file('location_img_2');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->location_img_2= $name;
         }
 
         if (request('location_img_3')) {
             $file = request()->file('location_img_3');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->location_img_3= $name;
         }
 
         $parttime->location_text_area_1=$request->location_text_area_1;
         $parttime->location_text_area_2=$request->location_text_area_2;
         $parttime->save();
         return redirect()->route('admin.admin');
     }

    // 個人事業主採用ページ保存用コード
    public function selfemployed_store(Request $request)
    {
        $parttime=new selfemployed();
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->background_image = $name;
        }

        if (request('application_img')) {
            $file = request()->file('application_img');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->application_img= $name;
        }

        $parttime->company_goal=$request->company_goal;

        if (request('recruitment_img')) {
            $file = request()->file('recruitment_img');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->recruitment_img= $name;
        }

        $parttime->content_title_1=$request->content_title_1;
        $parttime->content_p_1=$request->content_p_1;

        $parttime->content_title_2=$request->content_title_2;
        $parttime->content_p_2=$request->content_p_2;

        $parttime->content_title_3=$request->content_title_3;
        $parttime->content_p_3=$request->content_p_3;

        $parttime->content_title_4=$request->content_title_4;
        $parttime->content_p_4=$request->content_p_4;

        $parttime->content_title_5=$request->content_title_5;
        $parttime->content_p_5=$request->content_p_5;

        $parttime->content_title_6=$request->content_title_6;
        $parttime->content_p_6=$request->content_p_6;

        $parttime->content_title_7=$request->content_title_7;
        $parttime->content_p_7=$request->content_p_7;

        $parttime->content_title_8=$request->content_title_8;
        $parttime->content_p_8=$request->content_p_8;

        $parttime->location_title=$request->location_title;

        if (request('location_img_1')) {
            $file = request()->file('location_img_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_1= $name;
        }

        if (request('location_img_2')) {
            $file = request()->file('location_img_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_2= $name;
        }

        if (request('location_img_3')) {
            $file = request()->file('location_img_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_3= $name;
        }

        $parttime->location_text_area_1=$request->location_text_area_1;
        $parttime->location_text_area_2=$request->location_text_area_2;
        $parttime->save();
        return redirect()->route('admin.admin');
    }
    public function show(string $id)
    {
        //
    }

 
    // トップページ編集画面
    public function top_edit(Toppage $toppage)
    {
        $toppage= $toppage->where('id', 1)->first();

        return view('admin.top_edit', compact('toppage'));
    }
    // リクルートページ編集画面
    public function recruit_edit(recruit $recruit)
    {
        $recruit= $recruit->where('id', 1)->first();

        return view('admin.recruit_edit', compact('recruit'));
    }
    // 事業概要ページ編集画面
    public function business_edit(business $business)
    {
        $business= $business->where('id', 1)->first();

        return view('admin.business_edit', compact('business'));
    }
    // 会社概要ページ編集画面
    public function company_edit(Company $company)
    {
        $company= $company->where('id', 1)->first();

        return view('admin.company_edit', compact('company'));
    }

    // parttimeページ編集画面
    public function parttime_edit(parttime $parttime)
    {
        $recruit_content= $parttime->where('id', 1)->first();

        return view('admin.parttime_edit', compact('recruit_content'));
    }
    // fulltimeページ編集画面
    public function fulltime_edit(fulltime $fulltime)
    {
        $recruit_content= $fulltime->where('id', 1)->first();

        return view('admin.fulltime_edit', compact('recruit_content'));
    }
      
    // selfemployedページ編集画面
    public function selfemployed_edit(selfemployed $selfemployed)
    {
        $recruit_content= $selfemployed->where('id', 1)->first();

        return view('admin.selfemployed_edit', compact('recruit_content'));
    }
     
    public function mobile_edit(mobile $mobile)
    {
        $business_content= $mobile->where('id', 1)->first();

        return view('admin.mobile_edit', compact('business_content'));
    }

    public function pest_edit(Pest $pest)
    {
        $business_content= $pest->where('id', 1)->first();

        return view('admin.pest_edit', compact('business_content'));
    }

    public function ses_edit(ses $ses)
    {
        $business_content= $ses->where('id', 1)->first();

        return view('admin.ses_edit', compact('business_content'));
    }
    //  トップページ更新用
    public function top_update(Request $request,Toppage $toppage)
    {

        // 入力データのバリデーション
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'business_text' => 'nullable|string',
            'business_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'recruit_text' => 'nullable|string',
            'recruit_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_hand_text' => 'nullable|string',
            'company_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_text' => 'nullable|string',
            'backgrand_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // プロパティの更新
        $toppage->title = $validated['title'];
        $toppage->business_text = $validated['business_text'] ?? $toppage->business_text;

        // ファイルアップロードの処理
        if ($request->hasFile('business_image')) {
            $businessImageName = $request->file('business_image')->store('images', 'public');
            $toppage->business_image = $businessImageName;
        }

        $toppage->recruit_text = $validated['recruit_text'] ?? $toppage->recruit_text;

        if ($request->hasFile('recruit_image')) {
            $recruitImageName = $request->file('recruit_image')->store('images', 'public');
            $toppage->recruit_image = $recruitImageName;
        }

        $toppage->company_hand_text = $validated['company_hand_text'] ?? $toppage->company_hand_text;

        if ($request->hasFile('company_image')) {
            $companyImageName = $request->file('company_image')->store('images', 'public');
            $toppage->company_image = $companyImageName;
        }

        $toppage->company_text = $validated['company_text'] ?? $toppage->company_text;

        if ($request->hasFile('backgrand_image')) {
            $backgrandImageName = $request->file('backgrand_image')->store('images', 'public');
            $toppage->backgrand_image = $backgrandImageName;
        }

        // 保存処理
        $toppage->save();

        return redirect()->route('admin.admin')->with('success', 'トップページが更新されました！');


    }
    // リクルート更新用
    public function recruit_update(Request $request, Recruit $recruit)
    {
        // ファイル保存用の共通関数
        $saveFile = function ($fieldName) {
            if (request($fieldName)) {
                $file = request()->file($fieldName);
                $originalName = $file->getClientOriginalName();
                $path = 'storage/images/';
                $name = $originalName;
    
                // 同じ名前のファイルが存在する場合、タイムスタンプを追加
                if (file_exists($path . $originalName)) {
                    $name = time() . '_' . $originalName;
                }
    
                $file->move($path, $name);
                return $name;
            }
            return null;
        };
    
        // 各ファイルフィールドの保存処理
        $recruit->top_image = $saveFile('top_image') ?? $recruit->top_image;
        $recruit->background_image = $saveFile('background_image') ?? $recruit->background_image;
        $recruit->full_time_image = $saveFile('full_time_image') ?? $recruit->full_time_image;
        $recruit->part_time_image = $saveFile('part_time_image') ?? $recruit->part_time_image;
        $recruit->self_time_image = $saveFile('self_time_image') ?? $recruit->self_time_image;
        $recruit->krona_one_regular_image = $saveFile('krona_one_regular_image') ?? $recruit->krona_one_regular_image;
        $recruit->company_messeage_area_image = $saveFile('company_messeage_area_image') ?? $recruit->company_messeage_area_image;
    
        // その他のテキストデータを更新
        $recruit->handwriting = $request->handwriting;
        $recruit->one_word_title = $request->one_word_title;
        $recruit->one_word_text = $request->one_word_text;
        $recruit->krona_one_regular = $request->krona_one_regular;
        $recruit->krona_one_regular_text = $request->krona_one_regular_text;
        $recruit->company_messeage_title = $request->company_messeage_title;
        $recruit->company_messeage_item1 = $request->company_messeage_item1;
        $recruit->company_messeage_item2 = $request->company_messeage_item2;
    
        // データを保存
        $recruit->save();
    
        // リダイレクト
        return redirect()->route('admin.admin');
    }
      // business更新用
      public function business_update(Request $request, business $business)
    {
    if (request('background_image')) {
        $file = request()->file('background_image');
        $originalName = $file->getClientOriginalName();
        $path = 'storage/images/';
        $name = $originalName;
    
        // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
        if (file_exists($path . $originalName)) {
            $name = time() . '_' . $originalName;
        }
    
        $file->move($path, $name);
        $business->background_image = $name;
    }

    if (request('top_image')) {
        $file = request()->file('top_image');
        $originalName = $file->getClientOriginalName();
        $path = 'storage/images/';
        $name = $originalName;
    
        // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
        if (file_exists($path . $originalName)) {
            $name = time() . '_' . $originalName;
        }
    
        $file->move($path, $name);
        $business->top_image = $name;
    }

    $business->explanation_title=$request->explanation_title;
    $business->explanation_title_p=$request->explanation_title_p;

    if (request('content_img_1')) {
        $file = request()->file('content_img_1');
        $originalName = $file->getClientOriginalName();
        $path = 'storage/images/';
        $name = $originalName;
    
        // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
        if (file_exists($path . $originalName)) {
            $name = time() . '_' . $originalName;
        }
    
        $file->move($path, $name);
        $business->content_img_1 = $name;
    }

    $business->more_text_1=$request->more_text_1;

    if (request('content_img_2')) {
        $file = request()->file('content_img_2');
        $originalName = $file->getClientOriginalName();
        $path = 'storage/images/';
        $name = $originalName;
    
        // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
        if (file_exists($path . $originalName)) {
            $name = time() . '_' . $originalName;
        }
    
        $file->move($path, $name);
        $business->content_img_2 = $name;
    }

    $business->more_text_2=$request->more_text_2;

    if (request('content_img_3')) {
        $file = request()->file('content_img_3');
        $originalName = $file->getClientOriginalName();
        $path = 'storage/images/';
        $name = $originalName;
    
        // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
        if (file_exists($path . $originalName)) {
            $name = time() . '_' . $originalName;
        }
    
        $file->move($path, $name);
        $business->content_img_3 = $name;
    }

    $business->more_text_3=$request->more_text_3;

    $business->save();
    return redirect()->route('admin.admin');
    }

    // company更新用
    public function company_update(Request $request, Company $company)
    {
        if (request('background_image')) {
           $file = request()->file('background_image');
           $originalName = $file->getClientOriginalName();
           $path = 'storage/images/';
           $name = $originalName;
       
           if (file_exists($path . $originalName)) {
               $name = time() . '_' . $originalName;
           }
       
           $file->move($path, $name);
           $company->background_image = $name;
      }
      if (request('top_image')) {
        $file = request()->file('top_image');
        $originalName = $file->getClientOriginalName();
        $path = 'storage/images/';
        $name = $originalName;
    
        // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
        if (file_exists($path . $originalName)) {
            $name = time() . '_' . $originalName;
        }
    
        $file->move($path, $name);
        $company->top_image= $name;
        }
        if (request('background_image_vision')) {
            $file = request()->file('background_image_vision');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $company->background_image_vision = $name;
       }

       $company->image_in_text=$request->image_in_text;
       $company->vision_text=$request->vision_text;

       $company->krona_one_regular_1=$request->krona_one_regular_1;
       $company->krona_one_regular_text_1=$request->krona_one_regular_text_1;

       $company->krona_one_regular_2=$request->krona_one_regular_2;
       $company->krona_one_regular_text_2=$request->krona_one_regular_text_2;

       if (request('ceo_image')) {
           $file = request()->file('ceo_image');
           $originalName = $file->getClientOriginalName();
           $path = 'storage/images/';
           $name = $originalName;
       
           // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
           if (file_exists($path . $originalName)) {
               $name = time() . '_' . $originalName;
           }
       
           $file->move($path, $name);
           $company->ceo_image = $name;
        }
       $company->text1=$request->text1;
       $company->text2=$request->text2;
       $company->text3=$request->text3;
       $company->ceo_text=$request->ceo_text;

       $company->company_category_1=$request->company_category_1;
       $company->company_category_text_1=$request->company_category_text_1;

       $company->company_category_2=$request->company_category_2;
       $company->company_category_text_2=$request->company_category_text_2;

       $company->company_category_3=$request->company_category_3;
       $company->company_category_text_3=$request->company_category_text_3;

       $company->company_category_4=$request->company_category_4;
       $company->company_category_text_4=$request->company_category_text_4;

       $company->company_category_5=$request->company_category_5;
       $company->company_category_text_5=$request->company_category_text_5;

       if (request('company_category_image')) {
        $file = request()->file('company_category_image');
        $originalName = $file->getClientOriginalName();
        $path = 'storage/images/';
        $name = $originalName;
    
        // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
        if (file_exists($path . $originalName)) {
            $name = time() . '_' . $originalName;
        }
    
        $file->move($path, $name);
        $company->company_category_image = $name;
    }

       $company->save();
        return redirect()->route('admin.admin');
    }

    // parttime更新用
    public function parttime_update(Request $request, parttime $recruit_content)
    {
        $parttime=$recruit_content;
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->background_image = $name;
        }

        if (request('application_img')) {
            $file = request()->file('application_img');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->application_img= $name;
        }

        $parttime->company_goal=$request->company_goal;

        if (request('recruitment_img')) {
            $file = request()->file('recruitment_img');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->recruitment_img= $name;
        }

        $parttime->content_title_1=$request->content_title_1;
        $parttime->content_p_1=$request->content_p_1;

        $parttime->content_title_2=$request->content_title_2;
        $parttime->content_p_2=$request->content_p_2;

        $parttime->content_title_3=$request->content_title_3;
        $parttime->content_p_3=$request->content_p_3;

        $parttime->content_title_4=$request->content_title_4;
        $parttime->content_p_4=$request->content_p_4;

        $parttime->content_title_5=$request->content_title_5;
        $parttime->content_p_5=$request->content_p_5;

        $parttime->content_title_6=$request->content_title_6;
        $parttime->content_p_6=$request->content_p_6;

        $parttime->content_title_7=$request->content_title_7;
        $parttime->content_p_7=$request->content_p_7;

        $parttime->content_title_8=$request->content_title_8;
        $parttime->content_p_8=$request->content_p_8;

        $parttime->location_title=$request->location_title;

        if (request('location_img_1')) {
            $file = request()->file('location_img_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_1= $name;
        }

        if (request('location_img_2')) {
            $file = request()->file('location_img_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_2= $name;
        }

        if (request('location_img_3')) {
            $file = request()->file('location_img_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_3= $name;
        }

        $parttime->location_text_area_1=$request->location_text_area_1;
        $parttime->location_text_area_2=$request->location_text_area_2;
        $parttime->save();
        return redirect()->route('admin.admin');
    }
    // fulltime更新用
    public function fulltime_update(Request $request, fulltime $recruit_content)
    {
        $parttime=$recruit_content;
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->background_image = $name;
        }

        if (request('application_img')) {
            $file = request()->file('application_img');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->application_img= $name;
        }

        $parttime->company_goal=$request->company_goal;

        if (request('recruitment_img')) {
            $file = request()->file('recruitment_img');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->recruitment_img= $name;
        }

        $parttime->content_title_1=$request->content_title_1;
        $parttime->content_p_1=$request->content_p_1;

        $parttime->content_title_2=$request->content_title_2;
        $parttime->content_p_2=$request->content_p_2;

        $parttime->content_title_3=$request->content_title_3;
        $parttime->content_p_3=$request->content_p_3;

        $parttime->content_title_4=$request->content_title_4;
        $parttime->content_p_4=$request->content_p_4;

        $parttime->content_title_5=$request->content_title_5;
        $parttime->content_p_5=$request->content_p_5;

        $parttime->content_title_6=$request->content_title_6;
        $parttime->content_p_6=$request->content_p_6;

        $parttime->content_title_7=$request->content_title_7;
        $parttime->content_p_7=$request->content_p_7;

        $parttime->content_title_8=$request->content_title_8;
        $parttime->content_p_8=$request->content_p_8;

        $parttime->location_title=$request->location_title;

        if (request('location_img_1')) {
            $file = request()->file('location_img_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_1= $name;
        }

        if (request('location_img_2')) {
            $file = request()->file('location_img_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_2= $name;
        }

        if (request('location_img_3')) {
            $file = request()->file('location_img_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $parttime->location_img_3= $name;
        }

        $parttime->location_text_area_1=$request->location_text_area_1;
        $parttime->location_text_area_2=$request->location_text_area_2;
        $parttime->save();
        return redirect()->route('admin.admin');
    }
     // fulltime更新用
     public function self_employed_update(Request $request, selfemployed $recruit_content)
     {
         $parttime=$recruit_content;
         if (request('background_image')) {
             $file = request()->file('background_image');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->background_image = $name;
         }
 
         if (request('application_img')) {
             $file = request()->file('application_img');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->application_img= $name;
         }
 
         $parttime->company_goal=$request->company_goal;
 
         if (request('recruitment_img')) {
             $file = request()->file('recruitment_img');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->recruitment_img= $name;
         }
 
         $parttime->content_title_1=$request->content_title_1;
         $parttime->content_p_1=$request->content_p_1;
 
         $parttime->content_title_2=$request->content_title_2;
         $parttime->content_p_2=$request->content_p_2;
 
         $parttime->content_title_3=$request->content_title_3;
         $parttime->content_p_3=$request->content_p_3;
 
         $parttime->content_title_4=$request->content_title_4;
         $parttime->content_p_4=$request->content_p_4;
 
         $parttime->content_title_5=$request->content_title_5;
         $parttime->content_p_5=$request->content_p_5;
 
         $parttime->content_title_6=$request->content_title_6;
         $parttime->content_p_6=$request->content_p_6;
 
         $parttime->content_title_7=$request->content_title_7;
         $parttime->content_p_7=$request->content_p_7;
 
         $parttime->content_title_8=$request->content_title_8;
         $parttime->content_p_8=$request->content_p_8;
 
         $parttime->location_title=$request->location_title;
 
         if (request('location_img_1')) {
             $file = request()->file('location_img_1');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->location_img_1= $name;
         }
 
         if (request('location_img_2')) {
             $file = request()->file('location_img_2');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->location_img_2= $name;
         }
 
         if (request('location_img_3')) {
             $file = request()->file('location_img_3');
             $originalName = $file->getClientOriginalName();
             $path = 'storage/images/';
             $name = $originalName;
         
             // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
             if (file_exists($path . $originalName)) {
                 $name = time() . '_' . $originalName;
             }
         
             $file->move($path, $name);
             $parttime->location_img_3= $name;
         }
 
         $parttime->location_text_area_1=$request->location_text_area_1;
         $parttime->location_text_area_2=$request->location_text_area_2;
         $parttime->save();
         return redirect()->route('admin.admin');
     }

     public function mobile_update(Request $request, Mobile $business_content)
     {
        $mobile=$business_content;
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->background_image = $name;
        }

        if (request('top_image')) {
            $file = request()->file('top_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->top_image = $name;
        }

        $mobile->top_bottom_text=$request->top_bottom_text;

        $mobile->content_text=$request->content_text;

        if (request('content_text_image')) {
            $file = request()->file('content_text_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->content_text_image = $name;
        }

        $mobile->business_title=$request->business_title;

        $mobile->business_sab_title_1=$request->business_sab_title_1;

        $mobile->business_item_text_1=$request->business_item_text_1;

        if (request('business_item_image_1')) {
            $file = request()->file('business_item_image_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->business_item_image_1 = $name;
        }

        $mobile->business_sab_title_2=$request->business_sab_title_2;

        $mobile->business_item_text_2=$request->business_item_text_2;

        if (request('business_item_image_2')) {
            $file = request()->file('business_item_image_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->business_item_image_2 = $name;
        }

        $mobile->business_sab_title_3=$request->business_sab_title_3;

        $mobile->business_item_text_3=$request->business_item_text_3;

        if (request('business_item_image_3')) {
            $file = request()->file('business_item_image_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $mobile->business_item_image_3 = $name;
        }

        $mobile->save();
        return redirect()->route('admin.admin');
    }
    public function pest_update(Request $request, Pest $business_content)
    {
        $pest=$business_content;
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->background_image = $name;
        }

        if (request('top_image')) {
            $file = request()->file('top_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->top_image = $name;
        }

        $pest->top_bottom_text=$request->top_bottom_text;

        $pest->content_text=$request->content_text;

        if (request('content_text_image')) {
            $file = request()->file('content_text_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->content_text_image = $name;
        }

        $pest->business_title=$request->business_title;

        $pest->business_sab_title_1=$request->business_sab_title_1;

        $pest->business_item_text_1=$request->business_item_text_1;

        if (request('business_item_image_1')) {
            $file = request()->file('business_item_image_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->business_item_image_1 = $name;
        }

        $pest->business_sab_title_2=$request->business_sab_title_2;

        $pest->business_item_text_2=$request->business_item_text_2;

        if (request('business_item_image_2')) {
            $file = request()->file('business_item_image_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->business_item_image_2 = $name;
        }

        $pest->business_sab_title_3=$request->business_sab_title_3;

        $pest->business_item_text_3=$request->business_item_text_3;

        if (request('business_item_image_3')) {
            $file = request()->file('business_item_image_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $pest->business_item_image_3 = $name;
        }

        $pest->save();
        return redirect()->route('admin.admin');
    }

    public function ses_update(Request $request, ses $business_content)
    {
        $ses=$business_content;
        if (request('background_image')) {
            $file = request()->file('background_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->background_image = $name;
        }

        if (request('top_image')) {
            $file = request()->file('top_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->top_image = $name;
        }

        $ses->top_bottom_text=$request->top_bottom_text;

        $ses->content_text=$request->content_text;

        if (request('content_text_image')) {
            $file = request()->file('content_text_image');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->content_text_image = $name;
        }

        $ses->business_title=$request->business_title;

        $ses->business_sab_title_1=$request->business_sab_title_1;

        $ses->business_item_text_1=$request->business_item_text_1;

        if (request('business_item_image_1')) {
            $file = request()->file('business_item_image_1');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->business_item_image_1 = $name;
        }

        $ses->business_sab_title_2=$request->business_sab_title_2;

        $ses->business_item_text_2=$request->business_item_text_2;

        if (request('business_item_image_2')) {
            $file = request()->file('business_item_image_2');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->business_item_image_2 = $name;
        }

        $ses->business_sab_title_3=$request->business_sab_title_3;

        $ses->business_item_text_3=$request->business_item_text_3;

        if (request('business_item_image_3')) {
            $file = request()->file('business_item_image_3');
            $originalName = $file->getClientOriginalName();
            $path = 'storage/images/';
            $name = $originalName;
        
            // 同じ名前のファイルが存在する場合、名前にタイムスタンプを追加
            if (file_exists($path . $originalName)) {
                $name = time() . '_' . $originalName;
            }
        
            $file->move($path, $name);
            $ses->business_item_image_3 = $name;
        }

        $ses->save();
        return redirect()->route('admin.admin');
    }
/**
 * ファイルアップロード処理
 *
 * @param \Illuminate\Http\UploadedFile $file
 * @return string 保存されたファイル名
 */
private function uploadFile($file)
{
    // ファイル名が重複しないように保存
    return $file->store('images', 'public');
}

  
    public function destroy(string $id)
    {
        //
    }
}
