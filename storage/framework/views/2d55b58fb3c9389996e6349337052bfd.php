<section class="bg-white p-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="smart-textimonials smart-center">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="item-box">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            

                                            <img
                                            data-src="<?php echo e(RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                            src="<?php echo e(RvMedia::getImageUrl($item->image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                            alt="<?php echo e($item->name); ?>" class="img-fluid thumb">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="st-author-info">
                                    <h4 class="st-author-title"><?php echo e($item->name); ?></h4>
                                    <span class="st-author-subtitle"><?php echo e($item->company); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="box__right">
                    <h3 class="main__title">WHY GGA?</h3>
                    <img src="https://offices.topdealhot.com/storage/general-1/illustrationwhy-gga.png">
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/shortcodes/testimonials.blade.php ENDPATH**/ ?>