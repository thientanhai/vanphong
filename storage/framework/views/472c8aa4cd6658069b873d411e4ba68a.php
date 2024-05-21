<?php
    $updateTreeRoute ??= null;
?>

<div class="dd" data-depth="0" data-empty-text="<?php echo e(trans('core/base::tree-category.empty_text')); ?>">
    <?php echo $__env->make('core/base::forms.partials.tree-category', compact('updateTreeRoute'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/forms/partials/tree-categories.blade.php ENDPATH**/ ?>