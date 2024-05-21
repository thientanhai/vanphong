<div class="featured_slick_gallery">
    <div class="featured_slick_gallery-slide">
        <?php $__currentLoopData = $project->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->index > 3): ?>
                <?php break; ?>;
            <?php endif; ?>
            <div class="featured_slick_padd">
                <?php if(!isset($showViewPhotos) || !empty($showViewPhotos)): ?>
                    <a href="<?php echo e(RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage())); ?>"
                       class="mfp-gallery">
                        <img
                            src="<?php echo e(RvMedia::getImageUrl($image, 'medium_xlarge', false, RvMedia::getDefaultImage())); ?>"
                            class="img-fluid mx-auto" alt="<?php echo e($project->name); ?>-<?php echo e($index); ?>"/>
                    </a>
                <?php else: ?>
                    <img src="<?php echo e(RvMedia::getImageUrl($image, 'medium_xlarge', false, RvMedia::getDefaultImage())); ?>"
                         class="img-fluid mx-auto" alt="<?php echo e($project->name); ?>-<?php echo e($index); ?>"/>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if(!isset($showViewPhotos) || !empty($showViewPhotos)): ?>
        <a href="JavaScript:void(0)" class="btn-view-pic top"><?php echo e(__('View photos')); ?></a>
    <?php endif; ?>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/project/header-images.blade.php ENDPATH**/ ?>