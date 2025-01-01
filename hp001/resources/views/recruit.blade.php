<x-hp-layout>
    <style>
        .background--1 {
            background-image:url('{{asset('storage/image/IMG_3651_Original 2 1.png')}}');
            
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; /* 赤 */
        }
        .background--3 {
            background-image:url('{{asset('storage/image/IMG_3651_Original 2 1.png')}}');
            background-size:cover;
        }

        .background--4 {
            background-color: #EF9C66; /* 赤 */
        }
        .background--5 {
            background-image:url('{{asset('storage/image/IMG_3651_Original 2 1.png')}}');
            background-size:cover;
        }

        .background--6 {
            background-color: #EF9C66; /* 赤 */
        }
        .background--7 {
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
            <div class="background background--6"></div>
            <div class="background background--7"></div>
        </div>
    <div class="content">
        <div class="center">
            <div class="bg-color">
                <span>

                </span>

                <div class="top">
                    <div class="menu-hamburger">
                        <input type="checkbox" id="overlay-input" />
                        <label for="overlay-input" id="overlay-button"><span></span></label>
                        <div id="overlay">
                            <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">BUSINESS</a></li>
                            <li><a href="#">RECRUIT</a></li>
                            <li><a href="#">COMPANY</a></li>
                            <li><a href="#">COMTACT</a></li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="top-image">
    
                        <img src="{{asset('storage/image/001.png')}}" alt="">
                        <p>採用について</p>
                        <h3>RECRUIT</h3>
                        <p class="handwriting">ここに手書き風てきすと</p>
                    </div>
    
                </div>
                <div class="full-time">
                    <p class="full-time-title">正社員採用情報</p>
                    <p class="full-time-title-mobile">正社員採用情報</p>
                    <img src="{{asset('storage/image/002.png')}}" alt="">
                    <p class="btn"><a href="{{route('fulltime')}}">求人情報を見る</a></p>
                </div>
                <div class="part-time">
                    <p class="part-time-title">アルバイト採用情報</p>
                    <img src="{{asset('storage/image/003.png')}}" alt="">
                    <p class="btn"><a href="{{route('parttime')}}">求人情報を見る</a></p>
                </div>
                <div class="full-time">
                    <p class="full-time-title">個人事業主採用情報</p>
                    <img src="{{asset('storage/image/004.png')}}" alt="">
                    <p class="btn"><a href="{{route('selfemployed')}}">求人情報を見る</a></p>
                </div>
                <div class="one-word">
                    <p class="one-word-title">タイトルを入力</p>
                    <p class="one-word-text">会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ</p>
                </div>
                <div class="friend">
                    <div class="friend-title">
                        <p>採用ポリシー</p>
                        <h3>友達採用</h3>

                    </div>
                    <div class="friend-text">
                        <h4>見出しをここに入力</p>
                        <p>ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                        <img src="{{asset('storage/image/005.png')}}" alt="">
                    </div>
                </div>
                <div class="company-messeage">
                    <p class="company-messeage-title">学歴社会をぶっ飛ばせ</p>
                    <div class="company-messeage-area">
                        <p class="company-messeage-item1">未経験の方も歓迎</p>
                        <p class="company-messeage-item2">ここにキスとここにテキストキスとここにテキキスとここにテキキスとここにテキキスとここにテキキスとここにテキ</p>
                        <img src="{{asset('storage/image/005.png')}}" alt="イラストや絵">
                    </div>
                </div>
                
            </div>
            <div class="footer-content">
                <p>2025@i-trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>