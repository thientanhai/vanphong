<?php
    Arr::set($attributes, 'class', Arr::get($attributes, 'class') . ' icon-select');
?>

<?php echo Form::customSelect($name, [$value => $value], $value, $attributes); ?>


<?php if (! $__env->hasRenderedOnce('1b4a2b5e-b75a-4219-bec5-218ce7f1b430')): $__env->markAsRenderedOnce('1b4a2b5e-b75a-4219-bec5-218ce7f1b430'); ?>
    <?php if(request()->ajax()): ?>
        <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(Theme::asset()->url('plugins/themify.css')); ?>">
        <script src="<?php echo e(Theme::asset()->url('js/icons-field.js')); ?>?v=1.0.1"></script>
    <?php else: ?>
        <?php $__env->startPush('header'); ?>
            <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(Theme::asset()->url('plugins/themify.css')); ?>">
            <script src="<?php echo e(Theme::asset()->url('js/icons-field.js')); ?>?v=1.0.1"></script>
        <?php $__env->stopPush(); ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/forms/fields/icons-field.blade.php ENDPATH**/ ?>