<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('core/setting::partials.license', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $form->renderForm(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vanphong.com.vn/public_html/platform/core/setting/resources/views/general.blade.php ENDPATH**/ ?>