<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="ipt-title"><?php echo e($category->name); ?></h1>
                <span class="ipn-subtitle"><?php echo e($category->description); ?></span>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<section class="gray-simple">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="sec-heading center">
                    <?php echo Theme::partial('breadcrumb'); ?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrap-grid">
                                <div class="blog-thumb">
                                    <a href="<?php echo e($post->url); ?>">
                                        <img
                                            data-src="<?php echo e(RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                            src="<?php echo e(RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                            alt="<?php echo e($post->name); ?>" class="img-fluid thumb">
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
                                    <a href="<?php echo e($post->url); ?>" class="bl-continue">Continue</a>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="blog-wrap-grid"></div>
                <?php echo dynamic_sidebar('primary_sidebar'); ?>

            </div>
        </div>
        <br>

        <div class="colm10 col-sm-12">
            <nav class="d-flex justify-content-center pt-3">
                <?php echo $posts->withQueryString()->links(); ?>

            </nav>
        </div>
    </div>
</section>

<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/category.blade.php ENDPATH**/ ?>