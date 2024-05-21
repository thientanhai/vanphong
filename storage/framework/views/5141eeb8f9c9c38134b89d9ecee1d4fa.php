<?php if (isset($component)) { $__componentOriginalc4c45a5829bf328e150bca077cb9c1c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4c45a5829bf328e150bca077cb9c1c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.color-picker','data' => ['name' => $name,'value' => $value ?? '#000','attributes' => new Illuminate\View\ComponentAttributeBag((array) $attributes)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.color-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value ?? '#000'),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(new Illuminate\View\ComponentAttributeBag((array) $attributes))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4c45a5829bf328e150bca077cb9c1c1)): ?>
<?php $attributes = $__attributesOriginalc4c45a5829bf328e150bca077cb9c1c1; ?>
<?php unset($__attributesOriginalc4c45a5829bf328e150bca077cb9c1c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4c45a5829bf328e150bca077cb9c1c1)): ?>
<?php $component = $__componentOriginalc4c45a5829bf328e150bca077cb9c1c1; ?>
<?php unset($__componentOriginalc4c45a5829bf328e150bca077cb9c1c1); ?>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/forms/partials/color.blade.php ENDPATH**/ ?>