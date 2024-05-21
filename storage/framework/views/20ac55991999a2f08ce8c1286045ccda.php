<?php
    Arr::set($attributes, 'class', Arr::get($attributes, 'class') . ' icon-select');
?>

<?php echo Form::customSelect($name, [$value => $value], $value, $attributes); ?>


<?php if (! $__env->hasRenderedOnce('d8fdaf99-50c8-4e9f-acc0-b065e463a493')): $__env->markAsRenderedOnce('d8fdaf99-50c8-4e9f-acc0-b065e463a493'); ?>
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
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/forms/fields/icons-field.blade.php ENDPATH**/ ?>