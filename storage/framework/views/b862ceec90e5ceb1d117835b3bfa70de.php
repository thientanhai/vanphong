<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'tag' => 'a',
    'action' => false,
    'active' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'tag' => 'a',
    'action' => false,
    'active' => false,
]); ?>
<?php foreach (array_filter(([
    'tag' => 'a',
    'action' => false,
    'active' => false,
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
        'list-group-item',
        'list-group-item-action' => $action,
        'active' => $active,
    ])
?>

<<?php echo e($tag); ?> <?php echo e($attributes->class($classes)); ?>>
    <?php echo e($slot); ?>

</<?php echo e($tag); ?>>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/components/list-group/item.blade.php ENDPATH**/ ?>