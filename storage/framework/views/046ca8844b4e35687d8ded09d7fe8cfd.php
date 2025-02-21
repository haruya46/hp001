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
            background-image:url('<?php echo e(asset("storage/images/".$business->background_image)); ?>');
            background-size:cover;
        }

        .background--2 {
            background-color: #EF9C66;
        }

        .background--3 {
            background-image:url('<?php echo e(asset("storage/images/".$business->background_image)); ?>');
            background-size:cover;
        }
        .background--4 {
            background-color: #EF9C66;
        }
        .background--5 {
            background-image:url('<?php echo e(asset("storage/images/".$business->background_image)); ?>');
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
                    <p class="mobile-company-text"><a href="<?php echo e(route("toppage")); ?>">I-Trek</a></p>
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
                    <div class="top-image krona-one-regular">
    
                        <img src="<?php echo e(asset('storage/images/'.$business->top_image)); ?>" alt="">
                        <p>事業・サービスについて</p>
                        <h3>BUSINESS</h3>
                    </div>
    
                </div>
                <div class="explanation krona-one-regular">
                    <p class="explanation-title ">事業の説明</p>
                    <span></span>
                    <p><?php echo e($business->explanation_title); ?></p>
                </div>
                <div class="content-menu">
                    <p class="number">1</p>
                    <p class="sab-title krona-one-regular">Staffing</p>
                    <p class="title krona-one-regular">人材派遣</p>
                    <div class="content-img">
                        <img src="<?php echo e(asset('storage/images/'.$business->content_img_1)); ?>" alt="">
                        <div class="more">
                            <p><?php echo e($business->more_text_1); ?></p>
                            
                            <p class="link krona-one-regular"><a href="<?php echo e(route('mobile')); ?>">more</a></p>
                        </div>
                    </div>
                </div>
                <div class="content-menu">
                    <p class="number">2</p>
                    <p class="sab-title krona-one-regular">pest</p>
                    <p class="title krona-one-regular">害虫駆除</p>
                    <div class="content-img">
                        <img src="<?php echo e(asset('storage/images/'.$business->content_img_2)); ?>" alt="">
                        <div class="more">
                            <p><?php echo e($business->more_text_2); ?></p>
                            <p class="link krona-one-regular"><a href="<?php echo e(route('pest')); ?>">more</a></p>
    
                        </div>
                    </div>
                </div>
                <div class="content-menu">
                    <p class="number">3</p>
                    <p class="sab-title krona-one-regular">System Engineering Service</p>
                    <p class="title krona-one-regular">SES</p>
                    <div class="content-img">
                        <img src="<?php echo e(asset('storage/images/'.$business->content_img_3)); ?>" alt="">
                        <div class="more">
                            <p><?php echo e($business->more_text_3); ?></p>
                            <p class="link krona-one-regular"><a href="<?php echo e(route('ses')); ?>">more</a></p>
    
                        </div>
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
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/laravel/hp001/hp001/resources/views/business.blade.php ENDPATH**/ ?>