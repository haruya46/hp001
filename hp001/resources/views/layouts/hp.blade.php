<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta_description', '')" />
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=New+Tegomin&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
       {{-- SEO対策用 --}}
       <meta name="description" content="@yield('description', 'i‑Trekは「好きなことを原動力に、1人1人が自分らしい一歩を踏み出す。
    仲間と共に挑戦し続けることで、まだ誰も見たことのない景色を一緒に目指していく。そんな思いが集まる場所です。')">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "i‑Trek 株式会社",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('image/logo.png') }}",
      "description": "@yield('description', 'i‑Trekは「好きなことを原動力に、1人1人が自分らしい一歩を踏み出す。仲間と共に挑戦し続けることで、まだ誰も見たことのない景色を一緒に目指していく。そんな思いが集まる場所です。')",
      "service": [
        {
            "@type": "Service",
            "name": "トップページ",
            "description": "ホームページ",
            "url": "{{ url('/') }}"
        },
        {
          "@type": "Service",
          "name": "ビジネス",
          "description": "I-trekの取り組みを紹介",
          "url": "{{ url('/business') }}"
        },
        {
          "@type": "Service",
          "name": "リクルート",
          "description": "採用情報・求人のご案内",
          "url": "{{ url('/recruit') }}"
        },
        {
          "@type": "Service",
          "name": "おといあわせ",
          "description": "お問い合わせはこちら",
          "url": "{{ url('/contact') }}"
        }
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer support",
        "areaServed": "JP",
        "availableLanguage": "Japanese"
      }
    }
    </script>

        
        
        {{-- jquery --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!-- Scripts -->
        @if (request()->is('/')) 
            @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
        @elseif(request()->is('business'))
            @vite(['resources/css/app.css','resources/sass/business.scss', 'resources/js/app.js'])
        @elseif(request()->is('company'))
            @vite(['resources/css/app.css','resources/sass/company.scss', 'resources/js/app.js'])
        @elseif(request()->is('recruit'))
            @vite(['resources/css/app.css','resources/sass/recruit.scss', 'resources/js/app.js'])
        @elseif(request()->is('contact'))
            @vite(['resources/css/app.css','resources/sass/contact.scss', 'resources/js/app.js'])
        @elseif(request()->is('fulltime'))
            @vite(['resources/css/app.css','resources/sass/fulltime.scss', 'resources/js/app.js'])
        @elseif(request()->is('mobile'))
            @vite(['resources/css/app.css','resources/sass/mobile.scss', 'resources/js/app.js'])
        @elseif(request()->is('parttime'))
            @vite(['resources/css/app.css','resources/sass/parttime.scss', 'resources/js/app.js'])
        @elseif(request()->is('pest'))
            @vite(['resources/css/app.css','resources/sass/pest.scss', 'resources/js/app.js'])
        @elseif(request()->is('ses'))
            @vite(['resources/css/app.css','resources/sass/ses.scss', 'resources/js/app.js'])
        @elseif(request()->is('selfemployed'))
            @vite(['resources/css/app.css','resources/sass/selfemployed.scss', 'resources/js/app.js'])
        @endif
    
    </head>
    <body>
        {{-- サイドバー --}}
        <div class="sidebar krona-one-regular">
            {{-- <h1 class="sidebar__title"><a href="{{route("toppage")}}">I-Trek</a></h1> --}}
            <a href="{{route("toppage")}}"><img src="{{asset('storage/image/logo.png')}}" alt="" class="sidebar__title"></a>
            <ul class="sidebar__menu">
                <li class="sidebar__menu-item"><a href="{{route("business")}}" class="sidebar__menu-link">BUSINESS</a></li>
                <li class="sidebar__menu-item"><a href="{{route("recruit")}}" class="sidebar__menu-link">RECRUIT</a></li>
                <li class="sidebar__menu-item"><a href="{{route("company")}}" class="sidebar__menu-link">COMPANY</a></li>
                <li class="sidebar__menu-item"><a href="{{route("contact")}}" class="sidebar__menu-link">CONTACT</a></li>
            </ul>
            <div class="sidebar__social">
                <a href="" class="sidebar__social-link">
                    <img src="{{asset('storage/image/Instagram_log.svg')}}" alt="Instagram" class="sidebar__social-icon">
                </a>
                <a href="" class="sidebar__social-link">
                    <img src="{{asset('storage/image/x_log.svg')}}" alt="X" class="sidebar__social-icon">
                </a>
            </div>
        </div>
        
        


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
