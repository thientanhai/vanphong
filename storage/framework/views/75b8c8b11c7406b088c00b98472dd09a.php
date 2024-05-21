<?php if(count($property->images) < 2): ?>
    <div class="featured_slick_gallery">
        <div class="container">
            <?php $__currentLoopData = $property->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="featured_slick_padd text-center">
                    <a href="<?php echo e(RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage())); ?>"
                        class="mfp-gallery">
                        <img src="<?php echo e(RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage())); ?>"
                            class="img-fluid mx-auto" alt="<?php echo e($property->name); ?>-<?php echo e($index); ?>" />
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php else: ?>
    <div class="featured_slick_gallery-slide">
        <?php $__currentLoopData = $property->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="featured_slick_padd">
                <a href="<?php echo e(RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage())); ?>"
                    class="mfp-gallery">
                    <img src="<?php echo e(RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage())); ?>"
                        class="img-fluid mx-auto" alt="<?php echo e($property->name); ?>-<?php echo e($index); ?>" />
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
sdsdsdsdksjdksjdksjdks
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/properties/slick-gallery.blade.php ENDPATH**/ ?>