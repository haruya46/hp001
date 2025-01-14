

<x-hp-layout>
    <style>
        .background--1 {
            background-image:url('{{asset('storage/image/IMG_3651_Original 2 1.png')}}');
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; /* 緑 */
        }
        .background--3 {
            background-image:url('{{asset('storage/image/IMG_3651_Original 2 1.png')}}');
            background-size:cover;
        }
        .background--4 {
            background-color: #EF9C66; /* 緑 */
        }

        .background--5 {
            background-image:url('{{asset('storage/image/IMG_3651_Original 2 1.png')}}');
            background-size:cover;
        }
      </style>
        <div class="scroll-container">
            <div class="background background--1"></div>
            <div class="background background--2"></div>
            <div class="background background--3"></div>
            <div class="background background--4"></div>
            <div class="background background--5"></div>
        </div>
    <div class="content">
        <div class="center">
            <div class="bg-color">
                <div class="application">
                    <div class="application-img">

                        <img src="{{asset('storage/image/被写体13.png')}}" alt="">
                    </div>
                    <p class="triangle"></p>
                    <div class="application-text">
                        <p>お問い合わせはこちらから</p>
                    </div>

                    <div class="application-from">
                        <p class="application-from-text">下記のフォームに必要事項を入力後、「送信」ボタンを押して下さい</p>
                        <from>
                        @csrf
                        @method('post')
                        <p>お名前</p>
                        <input type="text" class="input-text">
                        <p>メールアドレス</p>
                        <input type="mail" class="input-text">
                        <p>電話番号</p>
                        <input type="tel" class="input-text">
                        <p>お問い合わせ内容</p>
                        <textarea  class="input-text-textarea" cols="30" rows="30"></textarea>

                        <div class="sabmit">
                            <input type="submit">
                        </div>

                        </from>

                    </div>
                </div>

                
            </div>
            <div class="footer-content krona-one-regular">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>