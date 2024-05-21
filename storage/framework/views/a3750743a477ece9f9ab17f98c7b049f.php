<?php if(session()->has('status')): ?>
    <div class="alert alert-success">
        <span><?php echo e(session('status')); ?></span>
    </div>
<?php endif; ?>

<?php if(session()->has('success_msg')): ?>
    <div class="alert alert-success">
        <span><?php echo e(session('success_msg')); ?></span>
    </div>
<?php endif; ?>

<?php if(session()->has('error_msg')): ?>
    <div class="alert alert-danger">
        <span><?php echo e(session('error_msg')); ?></span>
    </div>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/real-estate/account/auth/includes/messages.blade.php ENDPATH**/ ?>