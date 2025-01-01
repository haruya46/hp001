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
                    <div class="top-image">
    
                        <img src="{{asset('storage/image/31014149_s.jpg')}}" alt="">
                        <p>事業・サービスについて</p>
                        <h3>BUSINESS</h3>
                    </div>
    
                </div>
                <div class="explanation">
                    <p class="explanation-title">事業の説明</p>
                    <span></span>
                    <p>ここにテキストここにテキスト</p>
                </div>
                <div class="content-menu">
                    <p class="number">1</p>
                    <p class="sab-title">mobile sales</p>
                    <p class="title">人材派遣</p>
                    <div class="content-img">
                        <img src="{{asset('storage/image/31280990_s.jpg')}}" alt="">
                        <div class="more">
                            <p>ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                            
                            <p class="link"><a href="{{route('mobile')}}">more</a></p>
                        </div>
                    </div>
                </div>
                <div class="content-menu">
                    <p class="number">2</p>
                    <p class="sab-title">pest</p>
                    <p class="title">害虫駆除</p>
                    <div class="content-img">
                        <img src="{{asset('storage/image/31280990_s.jpg')}}" alt="">
                        <div class="more">
                            <p>ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                            <p class="link"><a href="{{route('pest')}}">more</a></p>
    
                        </div>
                    </div>
                </div>
                <div class="content-menu">
                    <p class="number">3</p>
                    <p class="sab-title">ses</p>
                    <p class="title">SES</p>
                    <div class="content-img">
                        <img src="{{asset('storage/image/31280990_s.jpg')}}" alt="">
                        <div class="more">
                            <p>ここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキストここにテキスト</p>
                            <p class="link"><a href="{{route('ses')}}">more</a></p>
    
                        </div>
                    </div>
                </div>
          
            </div>
            <div class="footer-content">
                <p>2025@I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>