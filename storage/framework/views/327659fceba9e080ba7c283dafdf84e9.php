<div class="bgheadproject hidden-xs">
    <div class="description">
        <div class="container-fluid w90 text-center">
            <h1><?php echo e($tag->name); ?></h1>
            <p><?php echo e($tag->description); ?></p>
            <?php echo Theme::partial('breadcrumb'); ?>

        </div>
    </div>
</div>
<div class="container padtop50">
    <div class="row">
        <div class="col-sm-9">
            <div class="blog-container" style="margin-top: 15px;">
                <div class="row">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-sm-6 container-grid" style="margin-bottom: 30px;">
                            <div class="grid-in">
                                <div class="grid-shadow">
                                    <div class="hourseitem" style="margin-top: 0;">
                                        <div class="blii">
                                            <div class="img">
                                                <img
                                                    data-src="<?php echo e(RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                                    src="<?php echo e(RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                                    alt="<?php echo e($post->name); ?>" class="thumb"
                                                    style="border-radius: 0;"></div>
                                            <a href="<?php echo e($post->url); ?>" title="<?php echo e($post->name); ?>" class="linkdetail"></a></div>
                                    </div>
                                    <div class="grid-h" data-mh="blog-post">
                                        <div class="blog-title">
                                            <a href="<?php echo e($post->url); ?>" title="<?php echo e($post->name); ?>"><h2><?php echo e($post->name); ?></h2></a>
                                            <?php echo Theme::partial('post-meta', compact('post')); ?>

                                        </div>
                                        <div class="blog-excerpt">
                                            <p><?php echo e(Str::words($post->description, 50)); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <br>
            <div class="pagination">
                <?php echo $posts->withQueryString()->links(); ?>

            </div>
        </div>
        <div class="col-sm-3">
            <?php echo dynamic_sidebar('primary_sidebar'); ?>

        </div>
    </div>
</div>
<br>
<br>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/tag.blade.php ENDPATH**/ ?>