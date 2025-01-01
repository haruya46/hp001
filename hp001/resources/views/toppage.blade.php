<x-hp-layout>
    <style>
   
        .background--1 {
            background-image:url('{{asset('storage/image/top.png')}}') ;
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; 
        }

        .background--3 {
            background-image:url('{{asset('storage/image/top.png')}}') ;
            background-size:cover;
        }
        .background--4 {
            background-color: #EF9C66; 
        }
        .background--5 {
            background-image:url('{{asset('storage/image/top.png')}}') ;
            background-size:cover;
        }
        .business-backgurand{
            background-image:url('{{asset('storage/image/丸型1.png')}}') ;
            width: 420px;
            height: 650px;
            background-size:cover;
        }
        .recruit-backgurand{
            background-image:url('{{asset('storage/image/丸型-2')}}') ;
            width: 420px;
            height: 650px;
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

    {{-- レスポンシブメニューバー --}}
    <div class="top">
        <p class="mobile-company-text">I-Trek</p>
        <p class="top-text new-tegomin-regular">ここに手書き風テキスト</p>
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
    </div>
    <div class="content">
        <div class="center">
            <div class="bg-color">

                {{-- business --}}
                <div class="business">
                    <div class="business-backgurand"></div>
                    <div class="business-top">
                        <p class="business-sab-title">事業について</p>
                        <h2 class="business-title">BUSINESS</h2>
                    </div>
                    <img src="{{ asset('storage/image/29952316_s.jpg') }}" alt="" class="business-img">
                    <div class="business-text-area">
        
                        <p class="business-text">企業理念などの文章ここにきてストを入力</p>
                    </div>
                    <div class="business-btn">
                        <a href="{{route('business')}}">MORE</a>
                    </div>
        
                </div>
                {{-- RECRUIT--}}
                <div class="recruit">
                    <div class="recruit-backgurand"></div>
                    <div class="recruit-top">
                        <p class="recruit-sab-title">採用について</p>
                        <h2 class="recruit-title">RECRUIT</h2>
                    </div>
                    <img src="{{ asset('storage/image/3190928_s.jpg') }}" alt="" class="recruit-img">
                    <div class="recruit-text-area">
                        <p class="recruit-text">企業理念などの文章ここにきてストを入力</p>
                    </div>
                    <div class="recruit-btn">
                        <a href="{{route('recruit')}}">MORE</a>
                    </div>
        
                </div>
        
                <div class="company">
                    <div class="company-top">
                        <p class="company-sab-title">会社について</p>
                        <h2 class="company-title">COMPANY</h2>
                    </div>
                    <div class="company-image-area">
                        <img src="{{ asset('storage/image/29809731_s.jpg') }}" alt="" class="company-img">
                        <p class="company-img-text">ここに手書き風テキスト</p>
                    </div>
                    <div class="company-text-area">
                        <p class="company-text">企業理念などの文章ここにきてストを入力</p>
                    </div>
                    <div class="company-btn">
                        <a href="{{route('company')}}">MORE</a>
                    </div>
        
                </div>
            </div>

            <div class="footer-content">
                <p>2025@I-Trek</p>
            </div>
        </div>
    




        
    </div>
   

</x-hp-layout>