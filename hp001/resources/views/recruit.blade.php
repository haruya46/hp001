<x-hp-layout>
    <style>
        .background--1 {
            background-image:url('{{asset('storage/'.$recruit->background_image)}}');
            
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; 
        }
        .background--3 {
            background-image:url('{{asset('storage/'.$recruit->background_image)}}');
            background-size:cover;
        }

        .background--4 {
            background-color: #EF9C66; 
        }
        .background--5 {
            background-image:url('{{asset('storage/'.$recruit->background_image)}}');
            background-size:cover;
        }

        .background--6 {
            background-color: #EF9C66;
        }
        .background--7 {
            background-image:url('{{asset('storage/'.$recruit->background_image)}}');
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
    
                        <img src="{{asset('storage/'.$recruit->top_image)}}" alt="">
                        <p class="sab-title krona-one-regular">採用について</p>
                        <h3 class="krona-one-regular">RECRUIT</h3>
                        <p class="handwriting new-tegomin-regular">{{$recruit->handwriting}}</p>
                    </div>
    
                </div>
                <div class="full-time">
                    <p class="full-time-title krona-one-regular">正社員採用情報</p>
                    <img src="{{asset('storage/'.$recruit->full_time_image)}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('full-time')}}">求人情報を見る</a></p>
                </div>
                <div class="part-time">
                    <p class="part-time-title krona-one-regular">アルバイト採用情報</p>
                    <img src="{{asset('storage/'.$recruit->part_time_image)}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('part-time')}}">求人情報を見る</a></p>
                </div>
                <div class="full-time">
                    <p class="full-time-title krona-one-regular">個人事業主採用情報</p>
                    <img src="{{asset('storage/'.$recruit->self_time_image)}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('Self-employed')}}">求人情報を見る</a></p>
                </div>
                <div class="one-word">
                    <p class="one-word-title krona-one-regular">{{$recruit->one_word_title}}</p>
                    <p class="one-word-text">{{$recruit->one_word_text}}</p>
                </div>
                <div class="friend">
                    <div class="friend-title krona-one-regular">
                        <p>採用ポリシー</p>
                        <h3>友達採用</h3>

                    </div>
                    <div class="friend-text">
                        <h4 class="krona-one-regular">{{$recruit->krona_one_regular}}</p>
                        <p>{{$recruit->krona_one_regular_text}}</p>
                        <img src="{{asset('storage/'.$recruit->krona_one_regular_image)}}" alt="">
                    </div>
                </div>
                <div class="company-messeage">
                    <p class="company-messeage-title krona-one-regular">{{$recruit->company_messeage_title}}</p>
                    <div class="company-messeage-area">
                        <p class="company-messeage-item1 krona-one-regular">{{$recruit->company_messeage_item1}}</p>
                        <p class="company-messeage-item2">{{$recruit->company_messeage_item2}}</p>
                        <img src="{{asset('storage/'.$recruit->company_messeage_area_image)}}" alt="イラストや絵">
                    </div>
                </div>
                
            </div>
            <div class="footer-content krona-one-regular">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>