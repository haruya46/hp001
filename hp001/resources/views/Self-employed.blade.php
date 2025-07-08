
<x-hp-layout>
    <style>
        .background--1 {
            background-image:url('{{asset("storage/images/".$recruit_content->background_image)}}');
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; /* 緑 */
        }
        .background--3 {
            background-image:url('{{asset("storage/images/".$recruit_content->background_image)}}');
            background-size:cover;
        }
        .background--4 {
            background-color: #EF9C66; /* 緑 */
        }

        .background--5 {
            background-image:url('{{asset("storage/images/".$recruit_content->background_image)}}');
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
    
                        <img src="{{asset('storage/images/'.$recruit_content->application_img)}}" alt="">
                        <div class="top-title-area krona-one-regular">
                            <p>Self-employed</p>
                            <span></span>
                            <h3>個人事業主採用</h3>

                        </div>
                    </div>
    
                </div>
                <div class="company-goal">
                    <p>{!! nl2br(e($recruit_content->company_goal)) !!}</p>
                </div>
                <div class="recruitment-img">
                    <img src="{{asset('storage/images/'.$recruit_content->recruitment_img)}}" alt="{{$recruit_content->recruitment_img}}">
                </div>
                <div class="recruitment">
                    <p class="recruitment-title krona-one-regular">募集要項</p>
                    <span class="recruitment-span"></span>
                    <div class="recruitment-content">
                        <p class="content-title">{!! nl2br(e($recruit_content->content_title_1)) !!}</p>
                        <p class="content-p">{!! nl2br(e($recruit_content->content_p_1)) !!}</p>
                        <p  class="content-title" >{!! nl2br(e($recruit_content->content_title_2)) !!}</p>
                        <p class="content-p">{!! nl2br(e($recruit_content->content_p_2)) !!}</p>
                        <p  class="content-title" >{!! nl2br(e($recruit_content->content_title_3)) !!}</p>
                        <p class="content-p">{!! nl2br(e($recruit_content->content_p_3)) !!}</p>
                        
                    </div>
                </div>
                <div class="location">
                    <div class="location-background">
                        <p class="location-title krona-one-regular">{!! nl2br(e($recruit_content->location_title)) !!}</p>
                        <span class="location-span"></span>
                        <div class="location-img">
                            <img src="{{asset('storage/images/'.$recruit_content->location_img_1)}}" alt="">
                            <img src="{{asset('storage/images/'.$recruit_content->location_img_2)}}" alt="">
                            <img src="{{asset('storage/images/'.$recruit_content->location_img_3)}}" alt="">
                        </div>
                        <div class="location-text-area">
                            <p>{!! nl2br(e($recruit_content->location_text_area_1)) !!}</p>
                            <p>{!! nl2br(e($recruit_content->location_text_area_2)) !!}</p>

                        </div>

                    </div>
                </div>
                <div class="recruitment-content">
                    <p  class="content-title">{!! nl2br(e($recruit_content->content_title_4)) !!}</p>
                    <p>{!! nl2br(e($recruit_content->content_p_4)) !!}</p>
                    <p  class="content-title">{!! nl2br(e($recruit_content->content_title_5)) !!}</p>
                    <p >{!! nl2br(e($recruit_content->content_p_5)) !!}</p>
                    <p  class="content-title">{!! nl2br(e($recruit_content->content_title_6)) !!}</p>
                    <p>{!! nl2br(e($recruit_content->content_p_6)) !!}</p>
                    <p class="content-title">{!! nl2br(e($recruit_content->content_title_7)) !!}</p>
                    <p>{!! nl2br(e($recruit_content->content_p_7)) !!}</p>
                    <p class="content-title">{!! nl2br(e($recruit_content->content_title_8)) !!}</p>
                    <p>{!! nl2br(e($recruit_content->content_p_8)) !!}</p>
                    
                </div>
                <div class="application">
                    <div class="application-img">

                        <img src="{{asset('storage/image/被写体13.png')}}" alt="">
                    </div>
                    <p class="triangle"></p>
                    <div class="application-text">
                        <p>ご応募はこちらから</p>
                    </div>
                    <div class="application-from">
                        <p class="application-from-text">下記のfoamに必要事項を入力後、「送信」ボタンを押して下さい</p>
                        <form method="post" action="{{route('recruit_contact_store')}}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <p>お名前</p>
                        <input type="text" class="input-text" name="name">
                        
                        <p>メールアドレス</p>
                        <input type="mail" class="input-text" name="email">
                        <p>電話番号</p>
                        <input type="tel" class="input-text" name="tel">
                        <p>応募職種</p>
                        <input type="text" class="input-text" name="genre">
                        <p>ファイル添付（履歴書と職務経歴書）</p>
                        <input type="file" name="file">

                        <div class="sabmit krona-one-regular">
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