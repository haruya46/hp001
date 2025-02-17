<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            正社員採用
        </h2>
    </x-slot>

    
        {{-- アルバイト採用--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.self_employed_update',$recruit_content)}}">
                    @csrf
                    @method('patch')
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">
                        <img src="{{ asset('storage/images/'.$recruit_content->background_image)}}" class="mx-auto" style="height:300px;">

                        <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                        <input id="image" type="file" name="application_img">
                        <img src="{{ asset('storage/images/'.$recruit_content->application_img)}}" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">どのような会社を目指しているか</label>
                        <textarea name="company_goal" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_goal',$recruit_content->company_goal)}}</textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="recruitment_img">
                        <img src="{{ asset('storage/images/'.$recruit_content->recruitment_img)}}" class="mx-auto" style="height:300px;">

                        <p>募集要項</p>
                        <label for="body" class="font-semibold leading-none mt-4">項目1</label>
                        <textarea name="content_title_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_title_1',$recruit_content->content_title_1)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_p_1',$recruit_content->content_p_1)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目2</label>
                        <textarea name="content_title_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_title_2',$recruit_content->content_title_2)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_p_2',$recruit_content->content_p_2)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目3</label>
                        <textarea name="content_title_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_title_3',$recruit_content->content_title_3)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_p_3',$recruit_content->content_p_3)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目4</label>
                        <textarea name="content_title_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_title_4',$recruit_content->content_title_4)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_p_4',$recruit_content->content_p_4)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目5</label>
                        <textarea name="content_title_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_title_5',$recruit_content->content_title_5)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_p_5',$recruit_content->content_p_5)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目6</label>
                        <textarea name="content_title_6" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_title_6',$recruit_content->content_title_6)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_6" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_p_6',$recruit_content->content_p_6)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目7</label>
                        <textarea name="content_title_7" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_title_7',$recruit_content->content_title_7)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_7" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_p_7',$recruit_content->content_p_7)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目8</label>
                        <textarea name="content_title_8" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_title_8',$recruit_content->content_title_8)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">内容</label>
                        <textarea name="content_p_8" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('content_p_8',$recruit_content->content_p_8)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">〇〇本社</label>
                        <textarea name="location_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('location_title',$recruit_content->location_title)}}</textarea>

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_1">
                        <img src="{{ asset('storage/images/'.$recruit_content->location_img_1)}}" class="mx-auto" style="height:300px;">

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_2">
                        <img src="{{ asset('storage/images/'.$recruit_content->location_img_2)}}" class="mx-auto" style="height:300px;">

                        <label for="image" class="font-semibold leading-none mt-4">画像</label>
                        <input id="image" type="file" name="location_img_3">
                        <img src="{{ asset('storage/images/'.$recruit_content->location_img_3)}}" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">住所など</label>
                        <textarea name="location_text_area_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('location_text_area_1',$recruit_content->location_text_area_1)}}</textarea>

                        <label for="body" class="font-semibold leading-none mt-4">雰囲気など</label>
                        <textarea name="location_text_area_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('location_text_area_2',$recruit_content->location_text_area_2)}}</textarea>

                    </div>
                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>


</x-app-layout>