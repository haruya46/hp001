
<x-hp-layout>
    <style>
        .background--1 {
            background-image:url('{{asset("storage/images/".$business_content->background_image)}}');
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; /* 赤 */
        }

        .background--3 {
            background-image:url('{{asset("storage/images/".$business_content->background_image)}}');
            background-size:cover;
        }
        
        .background--4 {
            background-color: #EF9C66; /* 赤 */
        }

        .background--5 {
            background-image:url('{{asset("storage/images/".$business_content->background_image)}}');
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
    
                        <img src="{{asset('storage/images/'.$business_content->top_image)}}" alt="">
                        <div class="top-title-area">
                            <p>System Engineering Service</p>
                            <span></span>
                            <h3>SES</h3>

                        </div>
                    </div>
                    <p class="top-bottom-text">{!! nl2br(e($business_content->top_bottom_text)) !!}</p>
    
                </div>
                <div class="content-item1">
                    <p class="content-text">{!! nl2br(e($business_content->content_text)) !!}</p>
                    <img src="{{asset('storage/images/'.$business_content->content_text_image)}}" alt="イラストや写真">
                </div>
                <div class="business">
                    <p class="business-title">{!! nl2br(e($business_content->business_title)) !!}</p>
                    <span class="business-span"></span>
                    <div class="business-item1">
                        <div class="business-number">
                            <p>1</p>
                        </div>
                        <p class="business-sab-title">{!! nl2br(e($business_content->business_sab_title_1)) !!}</p>
                        <p class="business-item-text">{!! nl2br(e($business_content->business_item_text_1)) !!}</p>
                        <img src="{{asset('storage/images/'.$business_content->business_item_image_1)}}" alt="">
                    </div>
                    <div class="business-item1">
                        <div class="business-number">
                            <p>2</p>
                        </div>
                        <p class="business-sab-title">{!! nl2br(e($business_content->business_sab_title_2)) !!}</p>
                        <p class="business-item-text">{!! nl2br(e($business_content->business_item_text_2)) !!}</p>
                    <img src="{{asset('storage/images/'.$business_content->business_item_image_2)}}" alt="">
                    </div>
                    <div class="business-item1">
                        <div class="business-number">
                            <p>3</p>
                        </div>
                        <p class="business-sab-title">{!! nl2br(e($business_content->business_sab_title_3)) !!}</p>
                        <p class="business-item-text">{!! nl2br(e($business_content->business_item_text_3)) !!}</p>
                        <img src="{{asset('storage/images/'.$business_content->business_item_image_3)}}" alt="">
                    </div>
                </div>

                
            </div>
            <div class="footer-content">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
            
        </div>
    </div>
  




</x-hp-layout>