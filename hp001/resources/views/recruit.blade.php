<x-hp-layout>
    <style>
        .background--1 {
            background-image:url('{{asset('storage/images/'.$recruit->background_image)}}');
            
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; 
        }
        .background--3 {
            background-image:url('{{asset('storage/images/'.$recruit->background_image)}}');
            background-size:cover;
        }

        .background--4 {
            background-color: #EF9C66; 
        }
        .background--5 {
            background-image:url('{{asset('storage/images/'.$recruit->background_image)}}');
            background-size:cover;
        }

        .background--6 {
            background-color: #EF9C66;
        }
        .background--7 {
            background-image:url('{{asset('storage/images/'.$recruit->background_image)}}');
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
                    <a href="{{route("toppage")}}"><img src="{{asset('storage/image/logo.png')}}" class="mobile-company-text"></a>
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
    
                        <img src="{{asset('storage/images/'.$recruit->top_image)}}" alt="">
                        <p class="sab-title krona-one-regular">採用について</p>
                        <h3 class="krona-one-regular">RECRUIT</h3>
                    </div>
    
                </div>
                <div class="full-time">
                    <p class="full-time-title krona-one-regular">正社員採用情報</p>
                    <img src="{{asset('storage/images/'.$recruit->full_time_image)}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('full-time')}}">求人情報を見る</a></p>
                </div>
                <div class="part-time">
                    <p class="part-time-title krona-one-regular">アルバイト採用情報</p>
                    <img src="{{asset('storage/images/'.$recruit->part_time_image)}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('part-time')}}">求人情報を見る</a></p>
                </div>
                <div class="full-time">
                    <p class="full-time-title krona-one-regular">個人事業主採用情報</p>
                    <img src="{{asset('storage/images/'.$recruit->self_time_image)}}" alt="">
                    <p class="btn krona-one-regular"><a href="{{route('Self-employed')}}">求人情報を見る</a></p>
                </div>
                <div class="one-word">
                    <p class="one-word-title krona-one-regular">{!! nl2br(e($recruit->one_word_title)) !!}</p>
                    <p class="one-word-text">{!! nl2br(e($recruit->one_word_text)) !!}</p>
                </div>
                
            </div>
            <div class="footer-content krona-one-regular">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>