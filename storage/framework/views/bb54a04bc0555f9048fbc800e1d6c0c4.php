<?php if (! $__env->hasRenderedOnce('dde9db9f-d39b-40df-bdc3-dc20e6be576e')): $__env->markAsRenderedOnce('dde9db9f-d39b-40df-bdc3-dc20e6be576e'); ?>
    <div
        class="offcanvas offcanvas-end"
        tabindex="-1"
        id="notification-sidebar"
        aria-labelledby="notification-sidebar-label"
        data-url="<?php echo e(route('notifications.index')); ?>"
        data-count-url="<?php echo e(route('notifications.count-unread')); ?>"
    >
        <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>

        <div class="notification-content"></div>
    </div>

    <script src="<?php echo e(asset('vendor/core/core/base/js/notification.js')); ?>"></script>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/base/resources/views/notification/notification.blade.php ENDPATH**/ ?>