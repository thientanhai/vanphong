<section class="home__blog">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 col-md-12 text-left">
                <div class="sec-heading">
                    <h2><?php echo clean($title); ?></h2>
                    <p><?php echo clean($description); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap-grid">
                        <div class="blog-thumb">
                            <a href="<?php echo e($post->url); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid" alt="<?php echo e($post->name); ?>" />
                            </a>
                            
                        </div>
                     
                        <div class="blog-body">
                            <h4 class="bl-title">
                                <a href="<?php echo e($post->url); ?>"><?php echo e($post->name); ?></a>
                            </h4>
                            <span class="post-date">
                                <?php echo e($post->created_at->format('d.m.Y')); ?>

                            </span>
                            
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- ================= Blog Grid End ================= -->

<section class="home__partner bg__main">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 col-md-12 text-left">
                <div class="sec-heading">
                    <h2 class="uppercase">đối tác</h2>
                    <p><?php echo clean($description); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
                <!-- Single blog Grid -->
                <div class="col-lg-12 col-md-12">
                    <div class="gallery-wrap-grid">
                        <div class="gallery-thumb">
                            <a href="<?php echo e($post->url); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid" alt="<?php echo e($post->name); ?>" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="<?php echo e($post->url); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid" alt="<?php echo e($post->name); ?>" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="<?php echo e($post->url); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid" alt="<?php echo e($post->name); ?>" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="<?php echo e($post->url); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid" alt="<?php echo e($post->name); ?>" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="<?php echo e($post->url); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid" alt="<?php echo e($post->name); ?>" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="<?php echo e($post->url); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid" alt="<?php echo e($post->name); ?>" />
                            </a>
                        </div>
                        <div class="gallery-thumb">
                            <a href="<?php echo e($post->url); ?>">
                                <img src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid" alt="<?php echo e($post->name); ?>" />
                            </a>
                        </div>
                       
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- ================= Gallery Grid End ================= -->

<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/shortcodes/latest-news.blade.php ENDPATH**/ ?>