<?php $__env->startPush('header'); ?>
    <?php echo RvMedia::renderHeader(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo RvMedia::renderContent(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer'); ?>
    <?php echo RvMedia::renderFooter(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/media/resources/views/index.blade.php ENDPATH**/ ?>