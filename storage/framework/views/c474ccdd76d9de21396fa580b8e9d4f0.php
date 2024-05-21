<?php
    Arr::set($selectAttributes, 'class', Arr::get($selectAttributes, 'class') . ' form-select');
    $choices = $list ?? $choices;
    $selectAttributes = [...$selectAttributes, 'data-placeholder' => trans('core/base::forms.select_placeholder')];

    if ($optionsAttributes && ! is_array($optionsAttributes)) {
        $optionsAttributes = [];
    }
?>

<?php echo Form::select(
    $name,
    $choices,
    $selected,
    $selectAttributes,
    $optionsAttributes,
    $optgroupsAttributes,
); ?>

<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/forms/partials/custom-select.blade.php ENDPATH**/ ?>