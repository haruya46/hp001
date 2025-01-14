<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            これは触らない
        </h2>
    </x-slot>
    
        {{-- toppage --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.recruitstore')}}">
                    @csrf
                    <p>リクルート</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">トップ画像</label>
                        <div>
                        <input id="image" type="file" name="top_iage">
                        </div>
                        
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <div>
                        <input id="image" type="file" name="backgrand_image">
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
                        <input id="image" type="file" name="company_messeage_area_image	">


                        
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>
</x-app-layout>