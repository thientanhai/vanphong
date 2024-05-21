<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'text' => null,
    'textAlignment' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'text' => null,
    'textAlignment' => null,
]); ?>
<?php foreach (array_filter(([
    'text' => null,
    'textAlignment' => null,
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
        'hr-text' => $text,
        match ($textAlignment) {
            'left' => 'hr-text-left',
            'right' => 'hr-text-right',
            default => null,
        },
    ]);
    
    $tag = $text ? 'div' : 'hr';
?>

<<?php echo e($tag); ?> <?php echo e($attributes->class($classes)); ?>><?php echo e($text); ?></<?php echo e($tag); ?>>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/components/hr.blade.php ENDPATH**/ ?>