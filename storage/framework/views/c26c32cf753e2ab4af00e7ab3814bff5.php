<meta
    name="csrf-token"
    content="<?php echo e(csrf_token()); ?>"
>

<?php $__currentLoopData = RvMedia::getConfig('libraries.stylesheets', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $css): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link
        type="text/css"
        href="<?php echo e(asset($css)); ?>"
        rel="stylesheet"
    />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('core/media::config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/core/media/resources/views/header.blade.php ENDPATH**/ ?>