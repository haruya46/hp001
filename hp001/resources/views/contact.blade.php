

<x-hp-layout>
    <style>
        .background--1 {
            background-image:url('{{asset('storage/images/'.$contact->backgrand_image)}}') ;
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; /* 緑 */
        }
        .background--3 {
            background-image:url('{{asset('storage/images/'.$contact->backgrand_image)}}') ;
            background-size:cover;
        }
        .background--4 {
            background-color: #EF9C66; /* 緑 */
        }

        .background--5 {
            background-image:url('{{asset('storage/images/'.$contact->backgrand_image)}}') ;
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
    
                </div>
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
                        <form method="post" action="{{route('contact_store')}}" enctype="multipart/form-data">
                        @csrf
                        <p>お名前</p>
                        <input type="text" class="input-text" name="name">
                        <p>メールアドレス</p>
                        <input type="mail" class="input-text" name="email">
                        <p>電話番号</p>
                        <input type="tel" class="input-text" name="tel">
                        <p>お問い合わせ内容</p>
                        <textarea  class="input-text-textarea" cols="30" rows="30" name="content"></textarea>

                        <div class="sabmit">
                            <input type="submit">
                        </div>

                        </form>

                    </div>
                </div>

                
            </div>
            <div class="footer-content krona-one-regular">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>