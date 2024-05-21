<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'flush' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'flush' => false,
]); ?>
<?php foreach (array_filter(([
    'flush' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $classes = Arr::toCssClasses([
        'list-group',
        'list-group-flush' => $flush,
    ])
?>

<div <?php echo e($attributes->class($classes)); ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/components/list-group/index.blade.php ENDPATH**/ ?>