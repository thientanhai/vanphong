<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label' => null,
    'color' => 'primary',
    'lite' => false,
    'outline' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label' => null,
    'color' => 'primary',
    'lite' => false,
    'outline' => false,
]); ?>
<?php foreach (array_filter(([
    'label' => null,
    'color' => 'primary',
    'lite' => false,
    'outline' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $classes = Arr::toCssClasses(['badge', "bg-$color text-$color-fg" => !$lite && !$outline, "bg-$color-lt" => $lite, "badge-outline text-$color" => $outline]);
?>

<span <?php echo e($attributes->class($classes)); ?>>
    <?php echo e($label ?? $slot); ?>

</span>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/components/badge.blade.php ENDPATH**/ ?>