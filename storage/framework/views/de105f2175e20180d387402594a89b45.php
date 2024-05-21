<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="ipt-title"><?php echo e($post->name); ?></h1>
                <span class="ipn-subtitle"></span>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section class="blog-page gray-simple">

    <div class="container">

        <div class="row">
            <div class="col text-center">
                <div class="sec-heading center">
                    <?php echo Theme::partial('breadcrumb'); ?>

                </div>
            </div>
        </div>

        <!-- row Start -->
        <div class="row">
            <!-- Blog Detail -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="blog-details single-post-item format-standard">
                    <div class="post-details">
                        <div class="post-featured-img">
                            <img class="img-fluid"
                                src="<?php echo e(RvMedia::getImageUrl($post->image, 'large', false, RvMedia::getDefaultImage())); ?>"
                                alt="<?php echo e($post->name); ?>">
                        </div>

                        <div class="post-top-meta">
                            <?php echo Theme::partial('post-meta', compact('post')); ?>

                        </div>
                        <h2 class="post-title"><?php echo e($post->name); ?></h2>

                        <div>
                            <div class="ck-content"><?php echo BaseHelper::clean($post->content); ?></div>
                        </div>

                        <div class="post-bottom-meta">
                            <div class="post-tags">
                                <h4 class="pbm-title"><?php echo e(__('Tags')); ?></h4>
                                <?php if($post->tags->count()): ?>
                                    <ul class="list">
                                        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="<?php echo e($tag->url); ?>"><?php echo e($tag->name); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <div class="post-share">
                                <?php echo Theme::partial('share', ['title' => __('Share this post'), 'description' => $post->description]); ?>

                            </div>
                        </div>

                    </div>
                </div>

                <?php $relatedPosts = get_related_posts($post->id, 2); ?>

                <?php if($relatedPosts->count()): ?>
                    <div class="blog-details single-post-item format-standard">
                        <h4><strong><?php echo e(__('Related posts')); ?>:</strong></h4>
                        <div class="blog-container">
                            <div class="row">
                                <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 col-sm-6 container-grid">
                                        <div class="blog-wrap-grid">
                                            <div class="blog-thumb">
                                                <a href="<?php echo e($relatedItem->url); ?>" class="linkdetail">
                                                    <div class="blii">
                                                        <div class="img">
                                                            <img class="img-fluid thumb lazy"
                                                                data-src="<?php echo e(RvMedia::getImageUrl($relatedItem->image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                                                src="<?php echo e(get_image_loading()); ?>"
                                                                alt="<?php echo e($relatedItem->name); ?>">
                                                        </div>

                                                    </div>
                                                </a>
                                            </div>
                                            <div class="blog-body">
                                                <div class="blog-title">
                                                    <a href="<?php echo e($relatedItem->url); ?>">
                                                        <h4 class="bl-title"><?php echo e($relatedItem->name); ?></h2>
                                                    </a>
                                                    <div class="post-meta">
                                                        <p class="d-inline-block">
                                                            <?php echo e($relatedItem->created_at->format('d M, Y')); ?></p>
                                                        - <p class="d-inline-block"><i class="fa fa-eye"></i>
                                                            <?php echo e(number_format($relatedItem->views)); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="blog-excerpt">
                                                    <p><?php echo e(Str::words($relatedItem->description, 40)); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <?php echo dynamic_sidebar('primary_sidebar'); ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/post.blade.php ENDPATH**/ ?>