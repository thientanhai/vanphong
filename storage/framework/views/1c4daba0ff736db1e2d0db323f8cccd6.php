<?php if(!empty($property->images)): ?>
    <div class="property_block_wrap style-2">

        <div class="property_block_wrap_header">
            <a data-bs-toggle="collapse" data-parent="#clSev" data-bs-target="#clSev" aria-controls="clOne"
                href="javascript:void(0);" aria-expanded="true" class="collapsed">
                <h3 class="property_block_title"> <?php echo e(__('Gallery')); ?></h3>
            </a>
        </div>

        <div id="clSev" class="panel-collapse collapse show">
            <div class="block-body">
                <ul class="list-gallery-inline">
                    <?php $__currentLoopData = $property->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage())); ?>"
                                class="mfp-gallery">
                                <img
                                    src="<?php echo e(get_image_loading()); ?>"
                                    data-src="<?php echo e(RvMedia::getImageUrl($image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid mx-auto lazy" alt="<?php echo e($property->name); ?>-<?php echo e($index); ?>" />
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>

    </div>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/gallery.blade.php ENDPATH**/ ?>