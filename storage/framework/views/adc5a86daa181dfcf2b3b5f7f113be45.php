<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('core/table::base-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout ?? BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vanphong.com.vn/public_html/platform/core/table/resources/views/table.blade.php ENDPATH**/ ?>