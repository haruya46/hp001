<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            これは触らない
        </h2>
    </x-slot>
    
        {{-- toppage --}}
        <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.topstore')}}">
                    @csrf
                    <p>トップページ</p>
                    
                    <div class="w-full flex flex-col">
                        
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <div>
                        <input id="image" type="file" name="backgrand_image">
                        </div>



                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>


                        <label for="image" class="font-semibold leading-none mt-4">事業画像</label>
                        <div>
                        <input id="image" type="file" name="business_image">
                        </div>
                        <label for="body" class="font-semibold leading-none mt-4">事業について->事業に関する一言</label>
                        <textarea name="business_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>


                        <label for="image" class="font-semibold leading-none mt-4">採用画像</label>
                        <div>
                        <input id="image" type="file" name="recruit_image">
                        </div>
                        <label for="body" class="font-semibold leading-none mt-4">採用について->採用に関する一言</label>
                        <textarea name="recruit_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>


                        <label for="image" class="font-semibold leading-none mt-4">会社について->画像</label>
                        <div>
                        <input id="company-image" type="file" name="company_image">
                        </div>
                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="company_hand_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>
                        <label for="body" class="font-semibold leading-none mt-4">会社についてー＞会社に関する一言</label>
                        <textarea name="company_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>
                    </div>

                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

        {{-- 採用情報 --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.recruitstore')}}">
                    @csrf
                    <p>リクルート</p>
                    
                    <div class="w-full flex flex-col">
                        
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <div>
                        <input id="image" type="file" name="background_image">
                        </div>

                        <label for="image" class="font-semibold leading-none mt-4">トップ画像</label>
                        <div>
                        <input id="image" type="file" name="top_image">
                        </div>

                        <label for="image" class="font-semibold leading-none mt-4">正社員</label>
                        <div>
                        <input id="image" type="file" name="full_time_image">
                        </div>

                        <label for="image" class="font-semibold leading-none mt-4">アルバイト</label>
                        <div>
                        <input id="image" type="file" name="part_time_image">
                        </div>

                        <label for="image" class="font-semibold leading-none mt-4">個人事業主</label>
                        <div>
                        <input id="image" type="file" name="self_time_image">
                        </div>

                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="handwriting" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">タイトルを入力</label>
                        <textarea name="one_word_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">タイトルを入力</label>
                        <textarea name="one_word_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">見出しを入力</label>
                        <textarea name="krona_one_regular" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                        <textarea name="krona_one_regular_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <div>
                        <input id="image" type="file" name="krona_one_regular_image">
                        </div>
                        <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                        <textarea name="company_messeage_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>
                       
                        <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                        <textarea name="company_messeage_item1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                        <textarea name="company_messeage_item2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>
                       
                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <div>
                        <input id="image" type="file" name="company_messeage_area_image">
                        </div>


                    </div>

                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

        {{-- 事業内容--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.businesses_store')}}">
                    @csrf
                    <p>事業内容</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="top_image">

                        <label for="body" class="font-semibold leading-none mt-4">事業の説明</label>
                        <textarea name="explanation_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                        <textarea name="explanation_title_p" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">人材派遣画像</label>
                        <input id="image" type="file" name="content_img_1">

                        <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                        <textarea name="more_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="image" class="font-semibold leading-none mt-4">害虫駆除画像</label>
                        <input id="image" type="file" name="content_img_2">

                        <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                        <textarea name="more_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="image" class="font-semibold leading-none mt-4">SES画像</label>
                        <input id="image" type="file" name="content_img_3">

                        <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                        <textarea name="more_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>
        {{-- 会社概要--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.company_store')}}">
                    @csrf
                    <p>会社概要</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">

                        <label for="image" class="font-semibold leading-none mt-4">トップ画像</label>
                        <input id="image" type="file" name="top_image">


                        <label for="image" class="font-semibold leading-none mt-4">企業理念画像</label>
                        <input id="image" type="file" name="background_image_vision">

                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="image_in_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">会社からの一言</label>
                        <textarea name="vision_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についてタイトル１</label>
                        <textarea name="krona_one_regular_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についての文章１</label>
                        <textarea name="krona_one_regular_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についてタイトル１</label>
                        <textarea name="krona_one_regular_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についての文章１</label>
                        <textarea name="krona_one_regular_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">CEOイメージ</label>
                        <input id="image" type="file" name="ceo_image">

                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="text1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">代表者名</label>
                        <textarea name="text2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">一言</label>
                        <textarea name="text3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">CEOからのメッセージ</label>
                        <textarea name="ceo_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <p>会社概要詳細</p>
                        <label for="body" class="font-semibold leading-none mt-4">項目1</label>
                        <textarea name="company_category_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容1</label>
                        <textarea name="company_category_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目2</label>
                        <textarea name="company_category_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容2</label>
                        <textarea name="company_category_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目3</label>
                        <textarea name="company_category_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容3</label>
                        <textarea name="company_category_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目4</label>
                        <textarea name="company_category_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容4</label>
                        <textarea name="company_category_text_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目5</label>
                        <textarea name="company_category_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容5</label>
                        <textarea name="company_category_text_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">会社概要画像</label>
                        <input id="image" type="file" name="company_category_image">

                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

        {{-- 事業内容-ses--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.ses_store')}}">
                    @csrf
                    <p>事業（ses）</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="top_image">

                        <label for="body" class="font-semibold leading-none mt-4">事業の説明</label>
                        <textarea name="top_bottom_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">事業について</label>
                        <textarea name="content_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="content_text_image">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力</label>
                        <textarea name="business_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力１</label>
                        <textarea name="business_sab_title_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_1">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力2</label>
                        <textarea name="business_sab_title_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_2">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力3</label>
                        <textarea name="business_sab_title_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_3">
                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

        {{-- 事業内容-人材派遣--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.mobile_store')}}">
                    @csrf
                    <p>事業（携帯販売）</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="top_image">

                        <label for="body" class="font-semibold leading-none mt-4">事業の説明</label>
                        <textarea name="top_bottom_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">事業について</label>
                        <textarea name="content_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="content_text_image">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力</label>
                        <textarea name="business_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力１</label>
                        <textarea name="business_sab_title_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_1">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力2</label>
                        <textarea name="business_sab_title_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_2">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力3</label>
                        <textarea name="business_sab_title_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_3">
                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

         {{-- 事業内容-害虫駆除--}}
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.pests_store')}}">
                    @csrf
                    <p>事業（害虫駆除）</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="top_image">

                        <label for="body" class="font-semibold leading-none mt-4">事業の説明</label>
                        <textarea name="top_bottom_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">事業について</label>
                        <textarea name="content_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="content_text_image">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力</label>
                        <textarea name="business_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力１</label>
                        <textarea name="business_sab_title_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_1">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力2</label>
                        <textarea name="business_sab_title_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_2">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力3</label>
                        <textarea name="business_sab_title_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_3">
                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

        {{-- アルバイト採用--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.parttime_store')}}">
                    @csrf
                    <p>アルバイト採用</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="application_img">

                        <label for="body" class="font-semibold leading-none mt-4">どのような会社を目指しているか</label>
                        <textarea name="company_goal" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="recruitment_img">
                        <p>募集要項</p>
                        <label for="body" class="font-semibold leading-none mt-4">項目1</label>
                        <textarea name="content_title_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目2</label>
                        <textarea name="content_title_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目3</label>
                        <textarea name="content_title_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目4</label>
                        <textarea name="content_title_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目5</label>
                        <textarea name="content_title_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目6</label>
                        <textarea name="content_title_6" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_6" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目7</label>
                        <textarea name="content_title_7" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_7" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目8</label>
                        <textarea name="content_title_8" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_8" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">〇〇本社</label>
                        <textarea name="location_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_1">

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_2">

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_3">

                        <label for="body" class="font-semibold leading-none mt-4">住所など</label>
                        <textarea name="location_text_area_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">雰囲気など</label>
                        <textarea name="location_text_area_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

         {{-- 正社員採用--}}
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.fulltime_store')}}">
                    @csrf
                    <p>正社員採用</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="application_img">

                        <label for="body" class="font-semibold leading-none mt-4">どのような会社を目指しているか</label>
                        <textarea name="company_goal" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="recruitment_img">
                        <p>募集要項</p>
                        <label for="body" class="font-semibold leading-none mt-4">項目1</label>
                        <textarea name="content_title_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目2</label>
                        <textarea name="content_title_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目3</label>
                        <textarea name="content_title_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目4</label>
                        <textarea name="content_title_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目5</label>
                        <textarea name="content_title_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目6</label>
                        <textarea name="content_title_6" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_6" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目7</label>
                        <textarea name="content_title_7" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_7" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目8</label>
                        <textarea name="content_title_8" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_8" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">〇〇本社</label>
                        <textarea name="location_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_1">

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_2">

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_3">

                        <label for="body" class="font-semibold leading-none mt-4">住所など</label>
                        <textarea name="location_text_area_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">雰囲気など</label>
                        <textarea name="location_text_area_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

        
         {{-- 個人事業主採用--}}
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.selfemployed_store')}}">
                    @csrf
                    <p>個人事業主採用</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="application_img">

                        <label for="body" class="font-semibold leading-none mt-4">どのような会社を目指しているか</label>
                        <textarea name="company_goal" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="recruitment_img">
                        <p>募集要項</p>
                        <label for="body" class="font-semibold leading-none mt-4">項目1</label>
                        <textarea name="content_title_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目2</label>
                        <textarea name="content_title_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目3</label>
                        <textarea name="content_title_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目4</label>
                        <textarea name="content_title_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目5</label>
                        <textarea name="content_title_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目6</label>
                        <textarea name="content_title_6" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_6" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目7</label>
                        <textarea name="content_title_7" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_7" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目8</label>
                        <textarea name="content_title_8" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_8" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">〇〇本社</label>
                        <textarea name="location_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_1">

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_2">

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_3">

                        <label for="body" class="font-semibold leading-none mt-4">住所など</label>
                        <textarea name="location_text_area_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">雰囲気など</label>
                        <textarea name="location_text_area_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>

                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>
</x-app-layout>