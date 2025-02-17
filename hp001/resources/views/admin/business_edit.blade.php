<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            business
        </h2>
    </x-slot>
    {{-- 事業内容--}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
        <div class="mx-4 sm:p-8">
            <form enctype="multipart/form-data"method="post" action="{{route('admin.business_update',$business)}}">
                @csrf
                @method('patch')
                <p>事業内容</p>
                <div class="w-full flex flex-col">
                    <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                    <input id="image" type="file" name="background_image">
                    <img src="{{ asset('storage/images/'.$business->background_image)}}" class="mx-auto" style="height:300px;">

                    <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                    <input id="image" type="file" name="top_image">
                    <img src="{{ asset('storage/images/'.$business->top_image)}}" class="mx-auto" style="height:300px;">

                    <label for="body" class="font-semibold leading-none mt-4">事業の説明</label>
                    <textarea name="explanation_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('explanation_title',$business->explanation_title)}}</textarea>

                    <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                    <textarea name="explanation_title_p" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('explanation_title_p',$business->explanation_title_p)}}</textarea>

                    <label for="image" class="font-semibold leading-none mt-4">人材派遣画像</label>
                    <input id="image" type="file" name="content_img_1">
                    <img src="{{ asset('storage/images/'.$business->content_img_1)}}" class="mx-auto" style="height:300px;">


                    <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                    <textarea name="more_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('more_text_1',$business->more_text_1)}}</textarea>

                    
                    <label for="image" class="font-semibold leading-none mt-4">害虫駆除画像</label>
                    <input id="image" type="file" name="content_img_2">
                    <img src="{{ asset('storage/images/'.$business->content_img_2)}}" class="mx-auto" style="height:300px;">

                    <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                    <textarea name="more_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('more_text_2',$business->more_text_2)}}</textarea>

                    
                    <label for="image" class="font-semibold leading-none mt-4">SES画像</label>
                    <input id="image" type="file" name="content_img_3">
                    <img src="{{ asset('storage/images/'.$business->content_img_3)}}" class="mx-auto" style="height:300px;">

                    <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                    <textarea name="more_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('more_text_3',$business->more_text_3)}}</textarea>

                </div>
                <x-primary-button class="mt-4">
                    送信する
                </x-primary-button>
                
            </form>
        </div>
    </div>


</x-app-layout>