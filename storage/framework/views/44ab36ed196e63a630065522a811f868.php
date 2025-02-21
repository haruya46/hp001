<?php if (isset($component)) { $__componentOriginal44affff2d903b520b5da11d85fba3a51 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44affff2d903b520b5da11d85fba3a51 = $attributes; } ?>
<?php $component = App\View\Components\HpLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hp-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\HpLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <style>
   
        .background--1 {
            background-image:url('<?php echo e(asset('storage/'.$toppage->backgrand_image)); ?>') ;
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66; 
        }

        .background--3 {
            background-image:url('<?php echo e(asset('storage/'.$toppage->backgrand_image)); ?>') ;
            background-size:cover;
        }
        .background--4 {
            background-color: #EF9C66; 
        }
        .background--5 {
            background-image:url('<?php echo e(asset('storage/'.$toppage->backgrand_image)); ?>') ;
            background-size:cover;
        }
        .business-backgurand{
            background-image:url('<?php echo e(asset('storage/image/丸型1.png')); ?>') ;
            width: 420px;
            height: 650px;
            background-size:cover;
        }
        .recruit-backgurand{
            background-image:url('<?php echo e(asset('storage/image/丸型-2.png')); ?>') ;
            width: 420px;
            height: 650px;
            transform: rotate(-180deg);
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

    
    <div class="top">
        <p class="mobile-company-text"><a href="<?php echo e(route("toppage")); ?>">I-Trek</a></p>
        <p class="top-text new-tegomin-regular"><?php echo e($toppage->title); ?></p>
        <div class="menu-hamburger">
            <input type="checkbox" id="overlay-input" />
            <label for="overlay-input" id="overlay-button"><span></span></label>
            <div id="overlay">
                <ul>
                    <li><a href="<?php echo e(route("business")); ?>" class="sidebar__menu-link">BUSINESS</a></li>
                    <li><a href="<?php echo e(route("recruit")); ?>" class="sidebar__menu-link">RECRUIT</a></li>
                    <li><a href="<?php echo e(route("company")); ?>" class="sidebar__menu-link">COMPANY</a></li>
                    <li><a href="<?php echo e(route("contact")); ?>" class="sidebar__menu-link">CONTACT</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="content">
        <div class="center">
            <div class="bg-color">

                
                <div class="business">
                    <div class="business-backgurand"></div>
                    <div class="business-top">
                        <p class="business-sab-title krona-one-regular">事業について</p>
                        <h2 class="business-title krona-one-regular">BUSINESS</h2>
                    </div>
                    <img src="<?php echo e(asset('storage/'.$toppage->business_image)); ?>" alt="" class="business-img">
                    <div class="business-text-area">
        
                        <p class="business-text"><?php echo e($toppage->business_text); ?></p>
                    </div>
                    <div class="business-btn krona-one-regular">
                        <a href="<?php echo e(route('business')); ?>">MORE</a>
                    </div>
        
                </div>
                
                <div class="recruit">
                    <div class="recruit-backgurand"></div>
                    <div class="recruit-top">
                        <p class="recruit-sab-title krona-one-regular">採用について</p>
                        <h2 class="recruit-title krona-one-regular">RECRUIT</h2>
                    </div>
                    <img src="<?php echo e(asset('storage/'.$toppage->recruit_image)); ?>" alt="" class="recruit-img">
                    <div class="recruit-text-area">
                        <p class="recruit-text"><?php echo e($toppage->recruit_text); ?></p>
                    </div>
                    <div class="recruit-btn krona-one-regular">
                        <a href="<?php echo e(route('recruit')); ?>">MORE</a>
                    </div>
        
                </div>
        
                <div class="company">
                    <div class="company-top">
                        <p class="company-sab-title krona-one-regular">会社について</p>
                        <h2 class="company-title krona-one-regular">COMPANY</h2>
                    </div>
                    <div class="company-image-area">
                        <img src="<?php echo e(asset('storage/'.$toppage->company_image)); ?>" alt="" class="company-img">
                        <p class="company-img-text new-tegomin-regular"><?php echo e($toppage->company_hand_text); ?></p>
                    </div>
                    <div class="company-text-area">
                        <p class="company-text"><?php echo e($toppage->company_text); ?></p>
                    </div>
                    <div class="company-btn krona-one-regular">
                        <a href="<?php echo e(route('company')); ?>">MORE</a>
                    </div>
        
                </div>
            </div>

            <div class="footer-content krona-one-regular">
                <p>＠<?php echo date("Y"); ?>（株）I-Trek</p>
            </div>
        </div>
    




        
    </div>
   

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44affff2d903b520b5da11d85fba3a51)): ?>
<?php $attributes = $__attributesOriginal44affff2d903b520b5da11d85fba3a51; ?>
<?php unset($__attributesOriginal44affff2d903b520b5da11d85fba3a51); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44affff2d903b520b5da11d85fba3a51)): ?>
<?php $component = $__componentOriginal44affff2d903b520b5da11d85fba3a51; ?>
<?php unset($__componentOriginal44affff2d903b520b5da11d85fba3a51); ?>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/laravel/hp001/hp001/resources/views/toppage.blade.php ENDPATH**/ ?>