<x-hp-layout>
    <style>
        .background--1 {
            background-image:url('{{asset('storage/image/IMG_3651_Original 2 1.png')}}');
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66;
        }

        .background--3 {
            background-image:url('{{asset('storage/image/IMG_3651_Original 2 1.png')}}');
            background-size:cover;
        }
        .background--4 {
            background-color: #EF9C66;
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
                    <div class="top-image krona-one-regular">
    
                        <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                        <p>事業・サービスについて</p>
                        <h3>BUSINESS</h3>
                    </div>
    
                </div>
                <div class="explanation krona-one-regular">
                    <p class="explanation-title ">事業の説明</p>
                    <span></span>
                    <p>ここにテキストここにテキスト</p>
                </div>
                <div class="content-menu">
                    <p class="number">1</p>
                    <p class="sab-title krona-one-regular">mobile sales</p>
                    <p class="title krona-one-regular">人材派遣</p>
                    <div class="content-img">
                        <img src="{{asset('storage/image/31280990_s.jpg')}}" alt="">
                        <div class="more">
                            <p>ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                            
                            <p class="link krona-one-regular"><a href="{{route('mobile')}}">more</a></p>
                        </div>
                    </div>
                </div>
                <div class="content-menu">
                    <p class="number">2</p>
                    <p class="sab-title krona-one-regular">pest</p>
                    <p class="title krona-one-regular">害虫駆除</p>
                    <div class="content-img">
                        <img src="{{asset('storage/image/31280990_s.jpg')}}" alt="">
                        <div class="more">
                            <p>ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                            <p class="link krona-one-regular"><a href="{{route('pest')}}">more</a></p>
    
                        </div>
                    </div>
                </div>
                <div class="content-menu">
                    <p class="number">3</p>
                    <p class="sab-title krona-one-regular">ses</p>
                    <p class="title krona-one-regular">SES</p>
                    <div class="content-img">
                        <img src="{{asset('storage/image/31280990_s.jpg')}}" alt="">
                        <div class="more">
                            <p>ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                            <p class="link krona-one-regular"><a href="{{route('ses')}}">more</a></p>
    
                        </div>
                    </div>
                </div>
          
            </div>
            <div class="footer-content krona-one-regular">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>