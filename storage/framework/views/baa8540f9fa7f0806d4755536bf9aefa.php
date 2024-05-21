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


<?php if (! $__env->hasRenderedOnce('ab09d5df-24a7-42d4-9447-baf9008995c4')): $__env->markAsRenderedOnce('ab09d5df-24a7-42d4-9447-baf9008995c4'); ?>
    <?php $__env->startPush('footer'); ?>
        <?php echo Html::style(
            BaseHelper::getGoogleFontsURL() .
                '/css?family=' .
                implode('|', array_map('urlencode', array_filter($field['options']))) .
                '&display=swap',
        ); ?>

    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/forms/partials/google-fonts.blade.php ENDPATH**/ ?>