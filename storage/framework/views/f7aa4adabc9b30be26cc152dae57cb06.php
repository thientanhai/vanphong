<?php
    Arr::set($selectAttributes, 'class', Arr::get($selectAttributes, 'class') . ' select-autocomplete');
?>

<?php echo $__env->make('core/base::forms.partials.custom-select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/forms/partials/autocomplete.blade.php ENDPATH**/ ?>