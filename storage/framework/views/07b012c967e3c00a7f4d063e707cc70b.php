<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="ipt-title"><?php echo e(__('All Agents')); ?></h1>
                <span class="ipn-subtitle"><?php echo e(__('Lists of our all expert agents')); ?></span>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agent List Start ================================== -->
<section class="gray-simple">
    <div class="container">
        <?php if($accounts->count()): ?>
            <div class="row">
                <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <?php echo Theme::partial('real-estate.agents.item', compact('account')); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <nav class="d-flex justify-content-center pt-3">
                        <?php echo $accounts->withQueryString()->links(); ?>

                    </nav>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <p class="item"><?php echo e(__('0 results')); ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/real-estate/agents.blade.php ENDPATH**/ ?>