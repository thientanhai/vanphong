<?php
    $values = Arr::wrap($values ?? []);
    Arr::set($attributes, 'class', str_replace('form-control', '', $attributes['class']));
?>

<?php if (isset($component)) { $__componentOriginalf087395afb626f41f5ce85bc59faa625 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf087395afb626f41f5ce85bc59faa625 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.radio-list','data' => ['name' => $name,'value' => $selected,'options' => $values,'attributes' => new Illuminate\View\ComponentAttributeBag((array) $attributes)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.radio-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($selected),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($values),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(new Illuminate\View\ComponentAttributeBag((array) $attributes))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf087395afb626f41f5ce85bc59faa625)): ?>
<?php $attributes = $__attributesOriginalf087395afb626f41f5ce85bc59faa625; ?>
<?php unset($__attributesOriginalf087395afb626f41f5ce85bc59faa625); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf087395afb626f41f5ce85bc59faa625)): ?>
<?php $component = $__componentOriginalf087395afb626f41f5ce85bc59faa625; ?>
<?php unset($__componentOriginalf087395afb626f41f5ce85bc59faa625); ?>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/forms/partials/custom-radio.blade.php ENDPATH**/ ?>