<x-hp-layout>
    <style>
   
        .background--1 {
            background-image:url('{{asset('storage/images/'.$toppage->backgrand_image)}}') ;
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; 
        }

        .background--3 {
            background-image:url('{{asset('storage/images/'.$toppage->backgrand_image)}}') ;
            background-size:cover;
        }
        .background--4 {
            background-color: #EF9C66; 
        }
        .background--5 {
            background-image:url('{{asset('storage/images/'.$toppage->backgrand_image)}}') ;
            background-size:cover;
        }
        .business-backgurand{
            background-image:url('{{asset('storage/image/circle_white_right.png')}}') ;
            width: 420px;
            height: 650px;
            background-size:cover;
        }
        .recruit-backgurand{
            background-image:url('{{asset('storage/image/circle_orange_left.png')}}') ;
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
        <p class="mobile-company-text"><a href="{{route("toppage")}}">I-Trek</a></p>
        <p class="top-text new-tegomin-regular">{{$toppage->title}}</p>
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
    <div class="content">
        <div class="center">
            <div class="bg-color">

                {{-- business --}}
                <div class="business">
                    <div class="business-backgurand"></div>
                    <div class="business-top">
                        <p class="business-sab-title krona-one-regular">事業について</p>
                        <h2 class="business-title krona-one-regular">BUSINESS</h2>
                    </div>
                    <img src="{{ asset('storage/images/'.$toppage->business_image) }}" alt="" class="business-img">
                    <div class="business-text-area">
        
                        <p class="business-text">{{$toppage->business_text}}</p>
                    </div>
                    <div class="business-btn krona-one-regular">
                        <a href="{{route('business')}}">MORE</a>
                    </div>
        
                </div>
                {{-- RECRUIT--}}
                <div class="recruit">
                    <div class="recruit-backgurand"></div>
                    <div class="recruit-top">
                        <p class="recruit-sab-title krona-one-regular">採用について</p>
                        <h2 class="recruit-title krona-one-regular">RECRUIT</h2>
                    </div>
                    <img src="{{ asset('storage/images/'.$toppage->recruit_image) }}" alt="" class="recruit-img">
                    <div class="recruit-text-area">
                        <p class="recruit-text">{{$toppage->recruit_text}}</p>
                    </div>
                    <div class="recruit-btn krona-one-regular">
                        <a href="{{route('recruit')}}">MORE</a>
                    </div>
        
                </div>
        
                <div class="company">
                    <div class="company-top">
                        <p class="company-sab-title krona-one-regular">会社について</p>
                        <h2 class="company-title krona-one-regular">COMPANY</h2>
                    </div>
                    <div class="company-image-area">
                        <img src="{{ asset('storage/images/'.$toppage->company_image) }}" alt="" class="company-img">
                        <p class="company-img-text new-tegomin-regular">{{$toppage->company_hand_text}}</p>
                    </div>
                    <div class="company-text-area">
                        <p class="company-text">{{$toppage->company_text}}</p>
                    </div>
                    <div class="company-btn krona-one-regular">
                        <a href="{{route('company')}}">MORE</a>
                    </div>
        
                </div>
            </div>

            <div class="footer-content krona-one-regular">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
        </div>
    




        
    </div>
   

</x-hp-layout>