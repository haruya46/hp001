<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=New+Tegomin&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
       
        
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!-- Scripts -->
        <?php if(request()->is('/')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('business')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/business.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('company')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/company.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('recruit')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/recruit.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('contact')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/contact.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('fulltime')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/fulltime.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('mobile')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/mobile.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('parttime')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/parttime.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('pest')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/pest.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('ses')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/ses.scss', 'resources/js/app.js']); ?>
        <?php elseif(request()->is('selfemployed')): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/sass/selfemployed.scss', 'resources/js/app.js']); ?>
        <?php endif; ?>
    </head>
    <body>
        
        <div class="sidebar krona-one-regular">
            <h1 class="sidebar__title"><a href="<?php echo e(route("toppage")); ?>">I-Trek</a></h1>
            <ul class="sidebar__menu">
                <li class="sidebar__menu-item"><a href="<?php echo e(route("business")); ?>" class="sidebar__menu-link">BUSINESS</a></li>
                <li class="sidebar__menu-item"><a href="<?php echo e(route("recruit")); ?>" class="sidebar__menu-link">RECRUIT</a></li>
                <li class="sidebar__menu-item"><a href="<?php echo e(route("company")); ?>" class="sidebar__menu-link">COMPANY</a></li>
                <li class="sidebar__menu-item"><a href="<?php echo e(route("contact")); ?>" class="sidebar__menu-link">CONTACT</a></li>
            </ul>
            <div class="sidebar__social">
                <a href="" class="sidebar__social-link">
                    <img src="<?php echo e(asset('storage/image/Instagram_log.svg')); ?>" alt="Instagram" class="sidebar__social-icon">
                </a>
                <a href="" class="sidebar__social-link">
                    <img src="<?php echo e(asset('storage/image/x_log.svg')); ?>" alt="X" class="sidebar__social-icon">
                </a>
            </div>
        </div>
        
        


        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel/hp001/hp001/resources/views/layouts/hp.blade.php ENDPATH**/ ?>