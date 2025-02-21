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
            リクルート画面編集
        </h2>
     <?php $__env->endSlot(); ?>
   
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
    <div class="mx-4 sm:p-8">
        <form enctype="multipart/form-data"method="post" action="<?php echo e(route('admin.recruit_update',$recruit)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <p>リクルート</p>
            <div class="w-full flex flex-col">
                
                <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                <div>
                <input id="image" type="file" name="background_image">
                <img src="<?php echo e(asset('storage/'.$recruit->background_image)); ?>" class="mx-auto" style="height:300px;">
                </div>

                <label for="image" class="font-semibold leading-none mt-4">トップ画像</label>
                <div>
                <input id="image" type="file" name="top_image">
                <img src="<?php echo e(asset('storage/'.$recruit->top_image)); ?>" class="mx-auto" style="height:300px;">
                </div>

                <label for="image" class="font-semibold leading-none mt-4">正社員</label>
                <div>
                <input id="image" type="file" name="full_time_image">
                <img src="<?php echo e(asset('storage/'.$recruit->full_time_image)); ?>" class="mx-auto" style="height:300px;">
                </div>

                <label for="image" class="font-semibold leading-none mt-4">アルバイト</label>
                <div>
                <input id="image" type="file" name="part_time_image">
                <img src="<?php echo e(asset('storage/'.$recruit->part_time_image)); ?>" class="mx-auto" style="height:300px;">
                </div>

                <label for="image" class="font-semibold leading-none mt-4">個人事業主</label>
                <div>
                <input id="image" type="file" name="self_time_image">
                <img src="<?php echo e(asset('storage/'.$recruit->self_time_image)); ?>" class="mx-auto" style="height:300px;">
                </div>

                <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                <textarea name="handwriting" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('handwriting',$recruit->handwriting)); ?></textarea>

                <label for="body" class="font-semibold leading-none mt-4">タイトルを入力</label>
                <textarea name="one_word_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('one_word_title',$recruit->one_word_title)); ?></textarea>

                <label for="body" class="font-semibold leading-none mt-4">タイトルを入力</label>
                <textarea name="one_word_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('one_word_text',$recruit->one_word_text)); ?></textarea>

                <label for="body" class="font-semibold leading-none mt-4">見出しを入力</label>
                <textarea name="krona_one_regular" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('krona_one_regular',$recruit->krona_one_regular)); ?></textarea>

                <label for="body" class="font-semibold leading-none mt-4">テキスト</label>
                <textarea name="krona_one_regular_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('krona_one_regular_text',$recruit->krona_one_regular_text)); ?></textarea>

                <label for="image" class="font-semibold leading-none mt-4">画像</label>
                <div>
                <input id="image" type="file" name="krona_one_regular_image">
                <img src="<?php echo e(asset('storage/'.$recruit->krona_one_regular_image)); ?>" class="mx-auto" style="height:300px;">
                </div>
                <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                <textarea name="company_messeage_title" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_messeage_title',$recruit->company_messeage_title)); ?></textarea>
               
                <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                <textarea name="company_messeage_item1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_messeage_item1',$recruit->company_messeage_item1)); ?></textarea>

                <label for="body" class="font-semibold leading-none mt-4">タイトル</label>
                <textarea name="company_messeage_item2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_messeage_item2',$recruit->company_messeage_item2)); ?></textarea>
               
                <label for="image" class="font-semibold leading-none mt-4">画像</label>
                <div>
                <input id="image" type="file" name="company_messeage_area_image">
                <img src="<?php echo e(asset('storage/'.$recruit->company_messeage_area_image)); ?>" class="mx-auto" style="height:300px;">
                </div>


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
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/laravel/hp001/hp001/resources/views/admin/recruit_edit.blade.php ENDPATH**/ ?>