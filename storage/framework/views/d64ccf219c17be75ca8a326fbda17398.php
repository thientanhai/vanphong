<div class="projects-page-wrapper">
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h2 class="ipt-title"><?php echo e(__('All projects')); ?></h2>
                    <span class="ipn-subtitle"><?php echo e(__('Discover our projects')); ?></span>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container d-md-block">
            <div class="filter_search_opt">
                <a href="javascript:void(0);" class="open_search_menu"><?php echo e(__('Search Project')); ?><i
                        class="ml-2 ti-menu"></i></a>
            </div>
            <div class="simple-sidebar sm-sidebar filter_search_project" id="filter_search" style="left: -310px;">
                <div class="section-search-wrapper">
                    <div class="eclip-search italian-search hero-search-radius">
                        <?php echo Theme::partial('real-estate.filters.projects'); ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <?php if($projects->count()): ?>
                <div class="row">
                    <div class="item-sorting clearfix mb-2">
                        <div class="left-column">
                            <h4 class="mb-0">
                                <?php if($projects->total() == 0): ?>
                                    <?php echo e(__('0 results')); ?>

                                <?php else: ?>
                                    <?php echo e(__('Found :from - :to Of :total Results', [
                                        'from' => $projects->firstItem(),
                                        'to' => $projects->lastItem(),
                                        'total' => $projects->total(),
                                    ])); ?>

                                <?php endif; ?>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <?php echo Theme::partial('real-estate.projects.item', ['project' => $project, 'img_slider' => true]); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <nav class="d-flex justify-content-center pt-3">
                            <?php echo $projects->withQueryString()->links(); ?>

                        </nav>
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <p class="item"><?php echo e(__('0 results')); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/real-estate/projects.blade.php ENDPATH**/ ?>