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
                    <p class="mobile-company-text"><a href="{{route("toppage")}}">I-Trek</a></p>
                    <div class="menu-hamburger">
                        <input type="checkbox" id="overlay-input" />
                        <label for="overlay-input" id="overlay-button"><span></span></label>
                        <div id="overlay">
                            <ul>
                                <li><a href="{{route("business")}}" class="sidebar__menu-link">BUSINESS</a></li>
                                <li><a href="{{route("recruit")}}" class="sidebar__menu-link">RECRUIT</a></li>
                                <li><a href="{{route("company")}}" class="sidebar__menu-link">COMPANY</a></li>
                                <li><a href="{{route("contact")}}" class="sidebar__menu-link">CONTACT</a></li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="top-image">
    
                        <img src="{{asset('storage/image/001.png')}}" alt="">
                        <p class="sab-title krona-one-regular">採用について</p>
                        <h3 class="krona-one-regular">RECRUIT</h3>
                        <p class="handwriting new-tegomin-regular">ここに手書き風てきすと</p>
                    </div>
    
                </div>
                <div class="full-time">
                    <p class="full-time-title krona-one-regular">正社員採用情報</p>
                    <img src="{{asset('storage/image/002.png')}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('fulltime')}}">求人情報を見る</a></p>
                </div>
                <div class="part-time">
                    <p class="part-time-title krona-one-regular">アルバイト採用情報</p>
                    <img src="{{asset('storage/image/003.png')}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('parttime')}}">求人情報を見る</a></p>
                </div>
                <div class="full-time">
                    <p class="full-time-title krona-one-regular">個人事業主採用情報</p>
                    <img src="{{asset('storage/image/004.png')}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('selfemployed')}}">求人情報を見る</a></p>
                </div>
                <div class="one-word">
                    <p class="one-word-title krona-one-regular">タイトルを入力</p>
                    <p class="one-word-text">会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ会社からのメッセージ</p>
                </div>
                <div class="friend">
                    <div class="friend-title krona-one-regular">
                        <p>採用ポリシー</p>
                        <h3>友達採用</h3>

                    </div>
                    <div class="friend-text">
                        <h4 class="krona-one-regular">見出しをここに入力</p>
                        <p>ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                        <img src="{{asset('storage/image/005.png')}}" alt="">
                    </div>
                </div>
                <div class="company-messeage">
                    <p class="company-messeage-title krona-one-regular">学歴社会をぶっ飛ばせ</p>
                    <div class="company-messeage-area">
                        <p class="company-messeage-item1 krona-one-regular">未経験の方も歓迎</p>
                        <p class="company-messeage-item2">ここにキスとここにテキストキスとここにテキキスとここにテキキスとここにテキキスとここにテキキスとここにテキ</p>
                        <img src="{{asset('storage/image/005.png')}}" alt="イラストや絵">
                    </div>
                </div>
                
            </div>
            <div class="footer-content krona-one-regular">
                <p>2025@i-trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>