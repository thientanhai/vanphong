<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title' => null,
    'subtitle' => null,
    'icon' => 'ti ti-ghost',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title' => null,
    'subtitle' => null,
    'icon' => 'ti ti-ghost',
]); ?>
<?php foreach (array_filter(([
    'title' => null,
    'subtitle' => null,
    'icon' => 'ti ti-ghost',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->class('empty')); ?>>
    <?php if($icon): ?>
        <div class="empty-icon">
            <?php if (isset($component)) { $__componentOriginal161404ef43c8d8236c69c281511e798e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal161404ef43c8d8236c69c281511e798e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::icon','data' => ['name' => $icon]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal161404ef43c8d8236c69c281511e798e)): ?>
<?php $attributes = $__attributesOriginal161404ef43c8d8236c69c281511e798e; ?>
<?php unset($__attributesOriginal161404ef43c8d8236c69c281511e798e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal161404ef43c8d8236c69c281511e798e)): ?>
<?php $component = $__componentOriginal161404ef43c8d8236c69c281511e798e; ?>
<?php unset($__componentOriginal161404ef43c8d8236c69c281511e798e); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if($title): ?>
        <p class="empty-title">
            <?php echo $title; ?>

        </p>
    <?php endif; ?>
    <?php if($subtitle): ?>
        <p class="empty-subtitle text-muted">
            <?php echo $subtitle; ?>

        </p>
    <?php endif; ?>
    <?php if(isset($action)): ?>
        <div class="empty-action">
            <?php echo $action; ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/components/empty-state.blade.php ENDPATH**/ ?>