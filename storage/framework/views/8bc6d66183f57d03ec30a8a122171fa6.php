<?php $__env->startPush('header'); ?>
    <script>
        'use strict';

        window.trans = window.trans || {};
        window.coupon = window.coupon || {};

        window.trans.coupon = <?php echo e(Js::from(trans('plugins/real-estate::coupon'))); ?>

        window.coupon.currency = '<?php echo e(get_application_currency()->symbol); ?>';
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('footer'); ?>
    <?php echo $jsValidator; ?>

<?php $__env->stopPush(); ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/plugins/real-estate/resources/views/coupons/partials/scripts.blade.php ENDPATH**/ ?>