<?php if (isset($component)) { $__componentOriginalf8303636a16ac3e808e27fabe59149a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8303636a16ac3e808e27fabe59149a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::dropdown.index','data' => ['wrapperClass' => 'nav-item','hasArrow' => true,'position' => 'end']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wrapper-class' => 'nav-item','has-arrow' => true,'position' => 'end']); ?>
     <?php $__env->slot('trigger', null, []); ?> 
        <a
            href="<?php echo e(Auth::guard()->user()->url); ?>"
            class="p-0 nav-link d-flex lh-1 text-reset"
            data-bs-toggle="dropdown"
            aria-label="<?php echo e(__('Open user menu')); ?>"
        >
            <span
                class="crop-image-original avatar avatar-sm"
                style="background-image: url(<?php echo e(Auth::guard()->user()->avatar_url); ?>)"
            ></span>
            <div class="d-none d-xl-block ps-2">
                <div><?php echo e(Auth::guard()->user()->name); ?></div>
                <div class="mt-1 small text-muted"><?php echo e(Auth::guard()->user()->email); ?></div>
            </div>
        </a>
     <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginal7681c9e8cd9d4250104639dd6412633f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7681c9e8cd9d4250104639dd6412633f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::dropdown.item','data' => ['href' => Auth::guard()->user()->url,'label' => trans('core/base::layouts.profile'),'icon' => 'ti ti-user']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::guard()->user()->url),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::layouts.profile')),'icon' => 'ti ti-user']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7681c9e8cd9d4250104639dd6412633f)): ?>
<?php $attributes = $__attributesOriginal7681c9e8cd9d4250104639dd6412633f; ?>
<?php unset($__attributesOriginal7681c9e8cd9d4250104639dd6412633f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7681c9e8cd9d4250104639dd6412633f)): ?>
<?php $component = $__componentOriginal7681c9e8cd9d4250104639dd6412633f; ?>
<?php unset($__componentOriginal7681c9e8cd9d4250104639dd6412633f); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal7681c9e8cd9d4250104639dd6412633f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7681c9e8cd9d4250104639dd6412633f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::dropdown.item','data' => ['href' => route('access.logout'),'label' => trans('core/base::layouts.logout'),'icon' => 'ti ti-logout']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('access.logout')),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::layouts.logout')),'icon' => 'ti ti-logout']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7681c9e8cd9d4250104639dd6412633f)): ?>
<?php $attributes = $__attributesOriginal7681c9e8cd9d4250104639dd6412633f; ?>
<?php unset($__attributesOriginal7681c9e8cd9d4250104639dd6412633f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7681c9e8cd9d4250104639dd6412633f)): ?>
<?php $component = $__componentOriginal7681c9e8cd9d4250104639dd6412633f; ?>
<?php unset($__componentOriginal7681c9e8cd9d4250104639dd6412633f); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8303636a16ac3e808e27fabe59149a5)): ?>
<?php $attributes = $__attributesOriginalf8303636a16ac3e808e27fabe59149a5; ?>
<?php unset($__attributesOriginalf8303636a16ac3e808e27fabe59149a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8303636a16ac3e808e27fabe59149a5)): ?>
<?php $component = $__componentOriginalf8303636a16ac3e808e27fabe59149a5; ?>
<?php unset($__componentOriginalf8303636a16ac3e808e27fabe59149a5); ?>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/layouts/partials/user-menu.blade.php ENDPATH**/ ?>