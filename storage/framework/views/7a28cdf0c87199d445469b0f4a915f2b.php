<?php ($notifications = $notifications ?? collect()); ?>

<?php if($notifications->isNotEmpty()): ?>
    <div class="offcanvas-header">
        <div>
            <h2
                class="offcanvas-title"
                id="notification-sidebar-label"
            >
                <span class="position-relative">
                    <?php echo e(trans('core/base::notifications.notifications')); ?>

                    <span
                        class="badge bg-blue text-blue-fg badge-notification badge-pill notification-count"><?php echo e(number_format($notificationsCount)); ?></span>
                </span>
            </h2>
            <div class="d-flex gap-2 mt-2">
                <button
                    type="button"
                    class="fw-medium mark-all-notifications-as-read"
                    data-url="<?php echo e(route('notifications.read-all-notification')); ?>"
                >
                    <?php echo e(trans('core/base::notifications.mark_as_read')); ?>

                </button>
                <button
                    type="button"
                    class="fw-medium clear-notifications"
                    data-url="<?php echo e(route('notifications.destroy-all-notification')); ?>"
                >
                    <?php echo e(trans('core/base::notifications.clear')); ?>

                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div
    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['offcanvas-body', 'p-0' => $notifications->isNotEmpty()]); ?>"
    style="height: 92vh;"
>
    <?php echo $__env->make('core/base::notification.partials.notification-item', compact('notifications'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/notification/partials/content.blade.php ENDPATH**/ ?>