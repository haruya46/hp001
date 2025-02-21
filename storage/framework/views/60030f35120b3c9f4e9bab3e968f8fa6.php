<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            business
        </h2>
     <?php $__env->endSlot(); ?>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
        <div class="mx-4 sm:p-8">
            <form enctype="multipart/form-data"method="post" action="<?php echo e(route('admin.business_update',$business)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>
                <p>事業内容</p>
                <div class="w-full flex flex-col">
                    <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                    <input id="image" type="file" name="background_image">
                    <img src="<?php echo e(asset('storage/images/'.$business->background_image)); ?>" class="mx-auto" style="height:300px;">

                    <label for="image" class="font-semibold leading-none mt-4">topimage</label>
                    <input id="image" type="file" name="top_image">
                    <img src="<?php echo e(asset('storage/images/'.$business->top_image)); ?>" class="mx-auto" style="height:300px;">

                    <label for="body" class="font-semibold leading-none mt-4">事業の説明</label>
                    <textarea name="explanation_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('explanation_title',$business->explanation_title)); ?></textarea>

                    <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                    <textarea name="explanation_title_p" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('explanation_title_p',$business->explanation_title_p)); ?></textarea>

                    <label for="image" class="font-semibold leading-none mt-4">人材派遣画像</label>
                    <input id="image" type="file" name="content_img_1">
                    <img src="<?php echo e(asset('storage/images/'.$business->content_img_1)); ?>" class="mx-auto" style="height:300px;">


                    <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                    <textarea name="more_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('more_text_1',$business->more_text_1)); ?></textarea>

                    
                    <label for="image" class="font-semibold leading-none mt-4">害虫駆除画像</label>
                    <input id="image" type="file" name="content_img_2">
                    <img src="<?php echo e(asset('storage/images/'.$business->content_img_2)); ?>" class="mx-auto" style="height:300px;">

                    <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                    <textarea name="more_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('more_text_2',$business->more_text_2)); ?></textarea>

                    
                    <label for="image" class="font-semibold leading-none mt-4">SES画像</label>
                    <input id="image" type="file" name="content_img_3">
                    <img src="<?php echo e(asset('storage/images/'.$business->content_img_3)); ?>" class="mx-auto" style="height:300px;">

                    <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                    <textarea name="more_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('more_text_3',$business->more_text_3)); ?></textarea>

                </div>
                <?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['class' => 'mt-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4']); ?>
                    送信する
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $attributes = $__attributesOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__attributesOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $component = $__componentOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__componentOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
                
            </form>
        </div>
    </div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/laravel/hp001/hp001/resources/views/admin/business_edit.blade.php ENDPATH**/ ?>