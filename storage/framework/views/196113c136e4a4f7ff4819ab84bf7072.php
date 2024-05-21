<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="ipt-title"><?php echo e(SeoHelper::getTitle()); ?></h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <section class="main-homes wishlist-page">
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <?php echo Theme::partial('real-estate.properties.item-list', compact('property')); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="alert alert-warning w-100" role="alert">
                    <?php echo e(__('0 results')); ?>

                </div>
            <?php endif; ?>
        </div>

    </section>
    <?php if($properties->count()): ?>
        <div class="col-sm-12">
            <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation example">
                <?php echo $properties->withQueryString()->links(); ?>

            </nav>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/real-estate/wishlist.blade.php ENDPATH**/ ?>