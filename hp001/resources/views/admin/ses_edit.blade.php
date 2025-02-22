<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            SES編集
        </h2>
    </x-slot>
    
        {{-- 事業内容-ses--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.ses_update',$business_content)}}">
                    @csrf
                    @method('patch')
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">
                        <img src="{{ asset('storage/'.$business_content->background_image)}}" class="mx-auto" style="height:300px;">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="top_image">
                        <img src="{{ asset('storage/'.$business_content->top_image)}}" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">事業の説明</label>
                        <textarea name="top_bottom_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('top_bottom_text',$business_content->top_bottom_text)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">事業について</label>
                        <textarea name="content_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_text',$business_content->content_text)}}</textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="content_text_image">
                        <img src="{{ asset('storage/'.$business_content->content_text_image)}}" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力</label>
                        <textarea name="business_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('business_title',$business_content->business_title)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力１</label>
                        <textarea name="business_sab_title_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('business_sab_title_1',$business_content->business_sab_title_1)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('business_item_text_1',$business_content->business_item_text_1)}}</textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_1">
                        <img src="{{ asset('storage/'.$business_content->business_item_image_1)}}" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力2</label>
                        <textarea name="business_sab_title_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('business_sab_title_2',$business_content->business_sab_title_2)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('business_item_text_2',$business_content->business_item_text_2)}}</textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_2">
                        <img src="{{ asset('storage/'.$business_content->business_item_image_2)}}" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">事業の魅力3</label>
                        <textarea name="business_sab_title_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('business_sab_title_3',$business_content->business_sab_title_3)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">魅力の説明</label>
                        <textarea name="business_item_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('business_item_text_3',$business_content->business_item_text_3)}}</textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="business_item_image_3">
                        <img src="{{ asset('storage/'.$business_content->business_item_image_3)}}" class="mx-auto" style="height:300px;">
                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>
</x-app-layout>