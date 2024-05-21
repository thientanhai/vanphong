<section class="section-box section-blog">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="sec-heading">
                <h2><?php echo e(__('Related Projects')); ?></h2>
                <hr>
            </div>
        </div>
    </div>

    <div class="row" class="related-project-rows">
        <?php $__currentLoopData = $relatedProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php echo Theme::partial('real-estate.projects.item', ['project' => $projectItem]); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/project/related.blade.php ENDPATH**/ ?>