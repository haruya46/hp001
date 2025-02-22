<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            トップ画面編集
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
        <div class="mx-4 sm:p-8">
            <form enctype="multipart/form-data"method="post" action="{{route('admin.top_update',$toppage)}}">
                @csrf
                @method('patch')
                <p>トップページ</p>
                <div class="w-full flex flex-col">
                    
                    <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                    <div>
                    <input id="image" type="file" name="backgrand_image" >
                    </div>
                    <img src="{{ asset('storage/'.$toppage->backgrand_image)}}" class="mx-auto" style="height:300px;">


                    <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                    <textarea name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('title',$toppage->title)}}</textarea>


                    <label for="image" class="font-semibold leading-none mt-4">事業画像</label>
                    <div>
                    <input id="image" type="file" name="business_image">
                    <img src="{{ asset('storage/'.$toppage->business_image)}}" class="mx-auto" style="height:300px;">
                    </div>
                    <label for="body" class="font-semibold leading-none mt-4">事業について->事業に関する一言</label>
                    <textarea name="business_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('business_text',$toppage->business_text)}}</textarea>


                    <label for="image" class="font-semibold leading-none mt-4">採用画像</label>
                    <div>
                    <input id="image" type="file" name="recruit_image">
                    <img src="{{ asset('storage/'.$toppage->recruit_image)}}" class="mx-auto" style="height:300px;">
                    </div>
                    <label for="body" class="font-semibold leading-none mt-4">採用について->採用に関する一言</label>
                    <textarea name="recruit_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('recruit_text',$toppage->recruit_text)}}</textarea>


                    <label for="image" class="font-semibold leading-none mt-4">会社について->画像</label>
                    <div>
                    <input id="company-image" type="file" name="company_image">
                    <img src="{{ asset('storage/'.$toppage->company_image)}}" class="mx-auto" style="height:300px;">
                    </div>
                    <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                    <textarea name="company_hand_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_hand_text',$toppage->company_hand_text)}}</textarea>
                    <label for="body" class="font-semibold leading-none mt-4">会社についてー＞会社に関する一言</label>
                    <textarea name="company_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10">{{old('company_text',$toppage->company_text)}}</textarea>
                </div>

                <x-primary-button class="mt-4">
                    送信する
                </x-primary-button>
                
            </form>
        </div>
    </div>

</x-app-layout>