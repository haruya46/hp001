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
        .background-image-vision{
            background-image:url('{{asset('storage/image/丸型1.png')}}') ;
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
    
                        <img src="{{asset('storage/image/top.png')}}" alt="">
                        <p>会社について</p>
                        <h3>COMPANY</h3>
                    </div>
    
                </div>

                <div class="vision-content">
                    <div class="vision krona-one-regular">
                        <p>vision</p>
                        <h3 class="krona-one-regular">企業理念</h3>
                    </div>
                    <div class="background-image-vision"></div>
                    <img src="{{asset('storage/image/29809731_s.jpg')}}" alt="">
                    <p class="image-in-text new-tegomin-regular">ここに手書き風テキスト</p>
                </div>
                <div class="vision-text">
                    <p>ここにきてストここにテてストここにテてストここにテてストここにテキストここにテキスト</p>
                </div>

                <div class="vision-1">
                    <h3 class="krona-one-regular">企業理念についての文章１</h3>
                    <p>ここにテキストここにテキストここにテキストここにテキスト</p>
                </div>
                <div class="vision-2">
                    <h3 class="krona-one-regular">企業理念についての文章１</h3>
                    <p>ここにテキストここにテキストここにテキストここにテキスト</p>
                </div>



                <div class="ceo">
                    <p class="ceo-sab-title krona-one-regular">CEO Message</p>
                    <h3 class="krona-one-regular">代表挨拶</h3>
                    <div class="ceo-image">
                        <img src="{{asset('storage/image/29809731_s.jpg')}}" alt="">
                        <p class="text1 new-tegomin-regular">ここに手書き風テキスト</p>
                        <p class="text2">代表名</p>
                        <p class="text3">ここにテキスト</p>
                    </div>
                    <p class="ceo-text">ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                </div>

                <div class="company-memo">
                    <p class="company-memo-sab-title krona-one-regular">company overview</p>
                    <h3 class="krona-one-regular">会社概要</h3>
                    <div class="company-memo-area">

                        <p class="company-category">名称</p>
                        <p class="company-category-text">ここにテキスト</p>
                        <span></span>
                        <p class="company-category">名称</p>
                        <p class="company-category-text">ここにテキスト</p>
                        <span></span><p class="company-category">名称</p>
                        <p class="company-category-text">ここにテキスト</p>
                        <span></span>
                        <p class="company-category">名称</p>
                        <p class="company-category-text">ここにテキスト</p>
                        <span></span>
                        <p class="company-category">名称</p>
                        <p class="company-category-text">ここにテキスト</p>
                        <span></span>
                        <img src="{{asset('storage/image/31296813_s.jpg')}}" alt="">
                    </div>
                </div>
             
             
            </div>
            <div class="footer-content krona-one-regular">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>