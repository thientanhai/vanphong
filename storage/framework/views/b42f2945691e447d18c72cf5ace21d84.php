<section class="bg-light">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-12 text-left">
                <div class="sec-heading">
                    <h2><?php echo clean($title); ?></h2>
                    <a href="#" class="see__more">Xem thêm</a>
                    
                </div>
            </div>
        </div>

        <div class="row list-layout">
            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($style == 1): ?>
            <div class="col-lg-3 col-sm-12">
                <?php echo Theme::partial('real-estate.properties.item-list', compact('property')); ?>

            <?php else: ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <?php echo Theme::partial('real-estate.properties.item-grid', compact('property')); ?>

            <?php endif; ?>
            </div>
            <!-- End Single Property -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <a href="<?php echo e(route('public.properties')); ?>" class="btn btn-theme-light-2 rounded"><?php echo e(__('Browse More Properties')); ?></a>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/shortcodes/featured-properties.blade.php ENDPATH**/ ?>