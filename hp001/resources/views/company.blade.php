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
            background-image:url('{{asset('storage/image/丸型-2.png')}}');
            width: 400px;
            height: 600px;
            background-size: contain;
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
    
                        <img src="{{asset('storage/image/top.png')}}" alt="">
                        <p>会社について</p>
                        <h3>COMPANY</h3>
                    </div>
    
                </div>

                <div class="vision">
                    <p>vision</p>
                    <h3>企業理念</h3>
                </div>
                <div class="vision-content">
                    <div class="background-image-vision"></div>
                    <img src="{{asset('storage/image/29809731_s.jpg')}}" alt="">
                    <p class="image-in-text">ここに手書き風テキスト</p>
                </div>
                <div class="vision-text">
                    <p>ここにきてストここにテてストここにテてストここにテてストここにテキストここにテキスト</p>
                </div>

                <div class="vision-1">
                    <h3>企業理念についての文章１</h3>
                    <p>ここにテキストここにテキストここにテキストここにテキスト</p>
                </div>
                <div class="vision-1">
                    <h3>企業理念についての文章１</h3>
                    <p>ここにテキストここにテキストここにテキストここにテキスト</p>
                </div>



                <div class="ceo">
                    <p class="ceo-sab-title">CEO Message</p>
                    <h3>代表挨拶</h3>
                    <div class="ceo-image">
                        <img src="{{asset('storage/image/29809731_s.jpg')}}" alt="">
                        <p class="text1">ここに手書き風テキスト</p>
                        <p class="text2">代表名</p>
                        <p class="text3">ここにテキスト</p>
                    </div>
                    <p class="ceo-text">ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                </div>

                <div class="company-memo">
                    <p class="company-memo-sab-title">company overview</p>
                    <h3>会社概要</h3>
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
            <div class="footer-content">
                <p>aaaa</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>