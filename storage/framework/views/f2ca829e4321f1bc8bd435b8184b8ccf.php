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
            トップ画面編集
        </h2>
     <?php $__env->endSlot(); ?>
    <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
        <div class="mx-4 sm:p-8">
            <form enctype="multipart/form-data"method="post" action="<?php echo e(route('admin.top_update',$toppage)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>
                <p>トップページ</p>
                <div class="w-full flex flex-col">
                    
                    <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                    <div>
                    <input id="image" type="file" name="backgrand_image" >
                    </div>
                    <img src="<?php echo e(asset('storage/'.$toppage->backgrand_image)); ?>" class="mx-auto" style="height:300px;">


                    <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                    <textarea name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('title',$toppage->title)); ?></textarea>


                    <label for="image" class="font-semibold leading-none mt-4">事業画像</label>
                    <div>
                    <input id="image" type="file" name="business_image">
                    <img src="<?php echo e(asset('storage/'.$toppage->business_image)); ?>" class="mx-auto" style="height:300px;">
                    </div>
                    <label for="body" class="font-semibold leading-none mt-4">事業について->事業に関する一言</label>
                    <textarea name="business_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('business_text',$toppage->business_text)); ?></textarea>


                    <label for="image" class="font-semibold leading-none mt-4">採用画像</label>
                    <div>
                    <input id="image" type="file" name="recruit_image">
                    <img src="<?php echo e(asset('storage/'.$toppage->recruit_image)); ?>" class="mx-auto" style="height:300px;">
                    </div>
                    <label for="body" class="font-semibold leading-none mt-4">採用について->採用に関する一言</label>
                    <textarea name="recruit_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('recruit_text',$toppage->recruit_text)); ?></textarea>


                    <label for="image" class="font-semibold leading-none mt-4">会社について->画像</label>
                    <div>
                    <input id="company-image" type="file" name="company_image">
                    <img src="<?php echo e(asset('storage/'.$toppage->company_image)); ?>" class="mx-auto" style="height:300px;">
                    </div>
                    <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                    <textarea name="company_hand_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_hand_text',$toppage->company_hand_text)); ?></textarea>
                    <label for="body" class="font-semibold leading-none mt-4">会社についてー＞会社に関する一言</label>
                    <textarea name="company_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_text',$toppage->company_text)); ?></textarea>
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
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/laravel/hp001/hp001/resources/views/admin/top_edit.blade.php ENDPATH**/ ?>