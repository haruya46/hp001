<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            これは触らない
        </h2>
    </x-slot>
    
        {{-- 最初に作成した部分 --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="{{route('admin.topstore')}}">
                    <div class="w-full flex flex-col">
                        
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <div>
                        <input id="image" type="file" name="backgrand-image">
                        </div>



                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>


                        <label for="image" class="font-semibold leading-none mt-4">事業画像</label>
                        <div>
                        <input id="image" type="file" name="business-image">
                        </div>
                        <label for="body" class="font-semibold leading-none mt-4">事業について->事業に関する一言</label>
                        <textarea name="business-text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>


                        <label for="image" class="font-semibold leading-none mt-4">採用画像</label>
                        <div>
                        <input id="image" type="file" name="recruit-image">
                        </div>
                        <label for="body" class="font-semibold leading-none mt-4">採用について->採用に関する一言</label>
                        <textarea name="recruit-text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>


                        <label for="image" class="font-semibold leading-none mt-4">会社について->画像</label>
                        <div>
                        <input id="company-image" type="file" name="image">
                        </div>
                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="company-hand-text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>
                        <label for="body" class="font-semibold leading-none mt-4">会社についてー＞会社に関する一言</label>
                        <textarea name="company-text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"></textarea>
                    </div>

                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>
</x-app-layout>