<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            company
        </h2>
    </x-slot>

        {{-- 会社概要--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.company_update',$company)}}">
                    @csrf
                    @method('patch')
                    <p>会社概要</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">
                        <img src="{{ asset('storage/'.$company->background_image)}}" class="mx-auto" style="height:300px;">

                        <label for="image" class="font-semibold leading-none mt-4">トップ画像</label>
                        <input id="image" type="file" name="top_image">
                        <img src="{{ asset('storage/'.$company->top_image)}}" class="mx-auto" style="height:300px;">



                        <label for="image" class="font-semibold leading-none mt-4">企業理念画像</label>
                        <input id="image" type="file" name="background_image_vision">
                        <img src="{{ asset('storage/'.$company->background_image_vision)}}" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="image_in_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('image_in_text',$company->image_in_text)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">会社からの一言</label>
                        <textarea name="vision_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('vision_text',$company->vision_text)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についてタイトル１</label>
                        <textarea name="krona_one_regular_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('krona_one_regular_1',$company->krona_one_regular_1)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についての文章１</label>
                        <textarea name="krona_one_regular_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('krona_one_regular_text_1',$company->krona_one_regular_text_1)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についてタイトル１</label>
                        <textarea name="krona_one_regular_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('krona_one_regular_2',$company->krona_one_regular_2)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についての文章１</label>
                        <textarea name="krona_one_regular_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('krona_one_regular_text_2',$company->krona_one_regular_text_2)}}</textarea>

                        <label for="image" class="font-semibold leading-none mt-4">CEOイメージ</label>
                        <input id="image" type="file" name="ceo_image">
                        <img src="{{ asset('storage/'.$company->ceo_image)}}" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="text1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('text1',$company->text1)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">代表者名</label>
                        <textarea name="text2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('text2',$company->text2)}}</textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">一言</label>
                        <textarea name="text3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('text3',$company->text3)}}</textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">CEOからのメッセージ</label>
                        <textarea name="ceo_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('ceo_text',$company->ceo_text)}}</textarea>

                        <p>会社概要詳細</p>
                        <label for="body" class="font-semibold leading-none mt-4">項目1</label>
                        <textarea name="company_category_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_1',$company->company_category_1)}}</textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容1</label>
                        <textarea name="company_category_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_text_1',$company->company_category_text_1)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目2</label>
                        <textarea name="company_category_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_2',$company->company_category_2)}}</textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容2</label>
                        <textarea name="company_category_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_text_2',$company->company_category_text_2)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目3</label>
                        <textarea name="company_category_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_3',$company->company_category_3)}}</textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容3</label>
                        <textarea name="company_category_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_text_3',$company->company_category_text_3)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目4</label>
                        <textarea name="company_category_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_4',$company->company_category_4)}}</textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容4</label>
                        <textarea name="company_category_text_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_text_4',$company->company_category_text_4)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目5</label>
                        <textarea name="company_category_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_5',$company->company_category_5)}}</textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容5</label>
                        <textarea name="company_category_text_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_category_text_5',$company->company_category_text_5)}}</textarea>

                        <label for="image" class="font-semibold leading-none mt-4">会社概要画像</label>
                        <input id="image" type="file" name="company_category_image">
                        <img src="{{ asset('storage/'.$company->company_category_image)}}" class="mx-auto" style="height:300px;">

                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

</x-app-layout>