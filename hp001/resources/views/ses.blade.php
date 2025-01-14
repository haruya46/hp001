
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
                    <div class="top-image">
    
                        <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                        <div class="top-title-area">
                            <p>System Engineering Service</p>
                            <span></span>
                            <h3>SES</h3>

                        </div>
                    </div>
                    <p class="top-bottom-text">ここにテキストここにキスとここにテキスト</p>
    
                </div>
                <div class="content-item1">
                    <p class="content-text">ここにテキストここにテキストここにてk市うとトここにテキストここにてk市うとトここにテキストここにてk市うとトここにテキストここにてk市うとトここにテキストここにてk市うと</p>
                    <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="イラストや写真">
                </div>
                <div class="business">
                    <p class="business-title">SESの魅力</p>
                    <span class="business-span"></span>
                    <div class="business-item1">
                        <div class="business-number">
                            <p>1</p>
                        </div>
                        <p class="business-sab-title">ここに魅力を入力ここ魅力を入力</p>
                        <p class="business-item-text">ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                        <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                    </div>
                    <div class="business-item1">
                        <div class="business-number">
                            <p>2</p>
                        </div>
                        <p class="business-sab-title">ここに魅力を入力ここ魅力を入力</p>
                        <p class="business-item-text">ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                        <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                    </div>
                    <div class="business-item1">
                        <div class="business-number">
                            <p>3</p>
                        </div>
                        <p class="business-sab-title">ここに魅力を入力ここ魅力を入力</p>
                        <p class="business-item-text">ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                        <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                    </div>
                </div>

                
            </div>
            <div class="footer-content">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>