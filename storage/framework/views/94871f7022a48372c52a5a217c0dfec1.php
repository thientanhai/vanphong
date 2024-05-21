<div class="single-widgets widget_thumb_post">
    <h4 class="title"><?php echo e($config['name']); ?></h4>
    <ul>
        <?php $__currentLoopData = get_recent_posts($config['number_display']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
            <span class="left">
				 <img class="img-thumbnail float-left mr-2"
                      data-src="<?php echo e(RvMedia::getImageUrl($post->image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                      src="<?php echo e(RvMedia::getImageUrl($post->image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                      width="90" alt="<?php echo e($post->name); ?>">
			</span>
                <span class="right">
				<a class="feed-title" href="<?php echo e($post->url); ?>"><?php echo e($post->name); ?></a>
				<span class="post-date"><i class="ti-calendar"></i><?php echo e($post->created_at->format('d M, Y')); ?></span>
			</span>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/////widgets/recent-posts/templates/frontend.blade.php ENDPATH**/ ?>