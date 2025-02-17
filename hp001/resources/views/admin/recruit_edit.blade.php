<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            リクルート画面編集
        </h2>
    </x-slot>
   {{-- 採用情報 --}}
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
    <div class="mx-4 sm:p-8">
        <form enctype="multipart/form-data"method="post" action="{{route('admin.recruit_update',$recruit)}}">
            @csrf
            @method('patch')
            <p>リクルート</p>
            <div class="w-full flex flex-col">
                
                <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                <div>
                <input id="image" type="file" name="background_image">
                <img src="{{ asset('storage/images/'.$recruit->background_image)}}" class="mx-auto" style="height:300px;">
                </div>

                <label for="image" class="font-semibold leading-none mt-4">トップ画像</label>
                <div>
                <input id="image" type="file" name="top_image">
                <img src="{{ asset('storage/images/'.$recruit->top_image)}}" class="mx-auto" style="height:300px;">
                </div>

                <label for="image" class="font-semibold leading-none mt-4">正社員</label>
                <div>
                <input id="image" type="file" name="full_time_image">
                <img src="{{ asset('storage/images/'.$recruit->full_time_image)}}" class="mx-auto" style="height:300px;">
                </div>

                <label for="image" class="font-semibold leading-none mt-4">アルバイト</label>
                <div>
                <input id="image" type="file" name="part_time_image">
                <img src="{{ asset('storage/images/'.$recruit->part_time_image)}}" class="mx-auto" style="height:300px;">
                </div>

                <label for="image" class="font-semibold leading-none mt-4">個人事業主</label>
                <div>
                <input id="image" type="file" name="self_time_image">
                <img src="{{ asset('storage/images/'.$recruit->self_time_image)}}" class="mx-auto" style="height:300px;">
                </div>

                <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                <textarea name="handwriting" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('handwriting',$recruit->handwriting)}}</textarea>

                <label for="body" class="font-semibold leading-none mt-4">タイトルを入力</label>
                <textarea name="one_word_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('one_word_title',$recruit->one_word_title)}}</textarea>

                <label for="body" class="font-semibold leading-none mt-4">タイトルを入力</label>
                <textarea name="one_word_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('one_word_text',$recruit->one_word_text)}}</textarea>

                <label for="body" class="font-semibold leading-none mt-4">見出しを入力</label>
                <textarea name="krona_one_regular" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('krona_one_regular',$recruit->krona_one_regular)}}</textarea>

                <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                <textarea name="krona_one_regular_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('krona_one_regular_text',$recruit->krona_one_regular_text)}}</textarea>

                <label for="image" class="font-semibold leading-none mt-4">画像</label>
                <div>
                <input id="image" type="file" name="krona_one_regular_image">
                <img src="{{ asset('storage/images/'.$recruit->krona_one_regular_image)}}" class="mx-auto" style="height:300px;">
                </div>
                <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                <textarea name="company_messeage_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_messeage_title',$recruit->company_messeage_title)}}</textarea>
               
                <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                <textarea name="company_messeage_item1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_messeage_item1',$recruit->company_messeage_item1)}}</textarea>

                <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                <textarea name="company_messeage_item2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_messeage_item2',$recruit->company_messeage_item2)}}</textarea>
               
                <label for="image" class="font-semibold leading-none mt-4">画像</label>
                <div>
                <input id="image" type="file" name="company_messeage_area_image">
                <img src="{{ asset('storage/images/'.$recruit->company_messeage_area_image)}}" class="mx-auto" style="height:300px;">
                </div>


            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
            
        </form>
    </div>
</div>

</x-app-layout>