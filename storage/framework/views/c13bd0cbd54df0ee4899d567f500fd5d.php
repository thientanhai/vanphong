<?php
    $field['options'] = config('core.base.general.google_fonts', []);

    $customGoogleFonts = config('core.base.general.custom_google_fonts');

    if ($customGoogleFonts) {
        $field['options'] = array_merge($field['options'], explode(',', $customGoogleFonts));
    }

    $customFonts = config('core.base.general.custom_fonts');

    if ($customFonts) {
        $field['options'] = array_merge($field['options'], explode(',', $customFonts));
    }
?>

<?php echo Form::customSelect(
    $name,
    ['' => __('-- Select --')] + array_combine($field['options'], $field['options']),
    $selected,
    ['data-bb-toggle' => 'google-font-selector'],
); ?>


<?php if (! $__env->hasRenderedOnce('6c748d8c-8d3b-43d5-a712-1b7c199cf1de')): $__env->markAsRenderedOnce('6c748d8c-8d3b-43d5-a712-1b7c199cf1de'); ?>
    <?php $__env->startPush('footer'); ?>
        <?php echo Html::style(
            BaseHelper::getGoogleFontsURL() .
                '/css?family=' .
                implode('|', array_map('urlencode', array_filter($field['options']))) .
                '&display=swap',
        ); ?>

    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/forms/partials/google-fonts.blade.php ENDPATH**/ ?>