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
            company
        </h2>
     <?php $__env->endSlot(); ?>

        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-4 bg-white my-10">
            <div class="mx-4 sm:p-8">
                <form enctype="multipart/form-data"method="post" action="<?php echo e(route('admin.company_update',$company)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('patch'); ?>
                    <p>会社概要</p>
                    
                    <div class="w-full flex flex-col">
                        <label for="image" class="font-semibold leading-none mt-4">背景画像</label>
                        <input id="image" type="file" name="background_image">
                        <img src="<?php echo e(asset('storage/'.$company->background_image)); ?>" class="mx-auto" style="height:300px;">

                        <label for="image" class="font-semibold leading-none mt-4">トップ画像</label>
                        <input id="image" type="file" name="top_image">
                        <img src="<?php echo e(asset('storage/'.$company->top_image)); ?>" class="mx-auto" style="height:300px;">



                        <label for="image" class="font-semibold leading-none mt-4">企業理念画像</label>
                        <input id="image" type="file" name="background_image_vision">
                        <img src="<?php echo e(asset('storage/'.$company->background_image_vision)); ?>" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="image_in_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('image_in_text',$company->image_in_text)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">会社からの一言</label>
                        <textarea name="vision_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('vision_text',$company->vision_text)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についてタイトル１</label>
                        <textarea name="krona_one_regular_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('krona_one_regular_1',$company->krona_one_regular_1)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についての文章１</label>
                        <textarea name="krona_one_regular_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('krona_one_regular_text_1',$company->krona_one_regular_text_1)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についてタイトル１</label>
                        <textarea name="krona_one_regular_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('krona_one_regular_2',$company->krona_one_regular_2)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">企業理念についての文章１</label>
                        <textarea name="krona_one_regular_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('krona_one_regular_text_2',$company->krona_one_regular_text_2)); ?></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">CEOイメージ</label>
                        <input id="image" type="file" name="ceo_image">
                        <img src="<?php echo e(asset('storage/'.$company->ceo_image)); ?>" class="mx-auto" style="height:300px;">

                        <label for="body" class="font-semibold leading-none mt-4">手書き風テキスト</label>
                        <textarea name="text1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('text1',$company->text1)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">代表者名</label>
                        <textarea name="text2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('text2',$company->text2)); ?></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">一言</label>
                        <textarea name="text3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('text3',$company->text3)); ?></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">CEOからのメッセージ</label>
                        <textarea name="ceo_text" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('ceo_text',$company->ceo_text)); ?></textarea>

                        <p>会社概要詳細</p>
                        <label for="body" class="font-semibold leading-none mt-4">項目1</label>
                        <textarea name="company_category_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_1',$company->company_category_1)); ?></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容1</label>
                        <textarea name="company_category_text_1" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_text_1',$company->company_category_text_1)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目2</label>
                        <textarea name="company_category_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_2',$company->company_category_2)); ?></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容2</label>
                        <textarea name="company_category_text_2" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_text_2',$company->company_category_text_2)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目3</label>
                        <textarea name="company_category_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_3',$company->company_category_3)); ?></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容3</label>
                        <textarea name="company_category_text_3" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_text_3',$company->company_category_text_3)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目4</label>
                        <textarea name="company_category_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_4',$company->company_category_4)); ?></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容4</label>
                        <textarea name="company_category_text_4" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_text_4',$company->company_category_text_4)); ?></textarea>

                        <label for="body" class="font-semibold leading-none mt-4">項目5</label>
                        <textarea name="company_category_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_5',$company->company_category_5)); ?></textarea>

                        
                        <label for="body" class="font-semibold leading-none mt-4">内容5</label>
                        <textarea name="company_category_text_5" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="10"><?php echo e(old('company_category_text_5',$company->company_category_text_5)); ?></textarea>

                        <label for="image" class="font-semibold leading-none mt-4">会社概要画像</label>
                        <input id="image" type="file" name="company_category_image">
                        <img src="<?php echo e(asset('storage/'.$company->company_category_image)); ?>" class="mx-auto" style="height:300px;">

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
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/laravel/hp001/hp001/resources/views/admin/company_edit.blade.php ENDPATH**/ ?>