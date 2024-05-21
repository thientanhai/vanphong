<?php if($posts->count() > 0): ?>
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-wrap-grid">
                    <div class="blog-thumb">
                        <a href="<?php echo e($post->url); ?>">
                            <img
                                data-src="<?php echo e(RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                src="<?php echo e(get_image_loading()); ?>"
                                alt="<?php echo e($post->name); ?>" class="img-fluid thumb lazy">
                        </a>
                    </div>

                    <div class="blog-info">
                        <?php echo Theme::partial('post-meta', compact('post')); ?>

                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title">
                            <a href="<?php echo e($post->url); ?>" title="<?php echo e($post->name); ?>">
                                <?php echo e($post->name); ?>

                            </a>
                        </h4>
                        <p><?php echo e(Str::words($post->description, 50)); ?></p>
                        <a href="<?php echo e($post->url); ?>" class="bl-continue"><?php echo e(__('Continue')); ?></a>
                    </div>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br>

    <div class="colm10 col-sm-12">
        <nav class="d-flex justify-content-center pt-3">
            <?php echo $posts->withQueryString()->links(); ?>

        </nav>
    </div>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/loop.blade.php ENDPATH**/ ?>