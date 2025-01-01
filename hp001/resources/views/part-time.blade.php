
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

                <div class="top">
                    <div class="top-image">
    
                        <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                        <div class="top-title-area">
                            <p>Recruit</p>
                            <span></span>
                            <h3>アルバイト</h3>

                        </div>
                    </div>
                    <p class="top-bottom-text">ここにテキストここにキスとここにテキスト</p>
    
                </div>
                <div class="company-goal">
                    <p>どのような会社を目指しているかなどの文章ここにテキストここにテキストここにテキスト</p>
                </div>
                <div class="recruitment-img">
                    <img src="{{asset('storage/image/002.png')}}" alt="">
                </div>
                <div class="recruitment">
                    <p class="recruitment-title">募集要項</p>
                    <span class="recruitment-span"></span>
                    <div class="recruitment-content">
                        <p class="content-title">仕事内容</p>
                        <p class="content-p">ここにテキストここにテキスト</p>
                        <p  class="content-title" >雇用形態</p>
                        <p class="content-p">ここにテキストここにテキスト</p>
                        <p  class="content-title" >勤務地</p>
                        <p class="content-p">ここにテキストここにテキスト</p>
                        
                    </div>
                </div>
                <div class="location">
                    <div class="location-background">
                        <p class="location-title">〇〇本社</p>
                        <span class="location-span"></span>
                        <div class="location-img">
                            <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                            <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                            <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                        </div>
                        <div class="location-text-area">
                            <p>住所をここに入力</p>
                            <p>ここにて雰囲気などを入力</p>

                        </div>

                    </div>
                </div>
                <div class="recruitment-content">
                    <p  class="content-title">給与</p>
                    <p>ここにテキストここにテキスト</p>
                    <p  class="content-title">賞与</p>
                    <p >ここにテキストここにテキスト</p>
                    <p  class="content-title">昇給</p>
                    <p>ここにテキストここにテキスト</p>
                    <p class="content-title">待遇・福利厚生</p>
                    <p>ここにテキストここにテキスト</p>
                    <p class="content-title">休日・休暇</p>
                    <p>ここにテキストここにテキスト</p>
                    
                </div>
                <div class="application">
                    <div class="application-img">

                        <img src="{{asset('storage/image/被写体13.png')}}" alt="">
                    </div>
                    <p class="triangle"></p>
                    <div class="application-text">
                        <p>ご応募はこちらから</p>
                    </div>

                    <div class="application-from">
                        <p class="application-from-text">下記のfoamに必要事項を入力後、「送信」ボタンを押して下さい</p>
                        <from>
                        @csrf
                        @method('post')
                        <p>お名前</p>
                        <input type="text" class="input-text">
                        
                        <p>メールアドレス</p>
                        <input type="mail" class="input-text">
                        <p>電話番号</p>
                        <input type="tel" class="input-text">
                        <p>応募職種</p>
                        <input type="text" class="input-text">
                        <p>応募内容</p>
                        <input type="text" class="input-text">
                        <p>ファイル添付（履歴書と職務経歴書）</p>
                        <input type="file">

                        <div class="sabmit">
                            <input type="submit">
                        </div>

                        </from>

                    </div>
                </div>

                
            </div>
            <div class="footer-content">
                <p>aaaa</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>