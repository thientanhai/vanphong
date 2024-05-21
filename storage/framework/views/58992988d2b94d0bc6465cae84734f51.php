<?php
    $img_slider = isset($img_slider) ? $img_slider : true;
    $is_lazyload = false;
?>

<div class="property-listing property-2 project <?php echo e($class_extend ?? ''); ?> rounded-4px"
     data-lat="<?php echo e($project->latitude); ?>"
     data-long="<?php echo e($project->longitude); ?>">

    <div class="listing-img-wrapper">

        <div class="list-img-slide">
            <div class="click <?php if(!$img_slider): ?> not-slider <?php endif; ?>">
                <?php $__currentLoopData = $project['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <a href="<?php echo e($project->url); ?>" title="<?php echo e($project->name); ?>">
                            <?php if($is_lazyload): ?>
                                <img src="<?php echo e(get_image_loading()); ?>"
                                    data-src="<?php echo e(RvMedia::getImageUrl($image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid mx-auto lazy" alt="<?php echo e($project->name); ?>"/>
                            <?php else: ?>
                                <img
                                    src="<?php echo e(RvMedia::getImageUrl($image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid mx-auto" alt="<?php echo e($project->name); ?>"/>
                            <?php endif; ?>
                        </a>
                    </div>
                    <?php if(!$img_slider): ?>
                        <?php break; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="project-category position-absolute">
            <span class="prt-types"><?php echo e($project->category->name); ?></span>
        </div>
        <div class="list-price-wrapper">
            <div class="list-price">
                <h6 class="listing-card-info-price">
                    <?php if($project->price_from || $project->price_to): ?>
                        <small>
                            <?php if($project->price_from): ?>
                                <?php echo e(format_price($project->price_from, $project->currency)); ?>

                            <?php endif; ?> <?php if($project->price_to): ?>
                                - <?php echo e(format_price($project->price_to, $project->currency)); ?>

                            <?php endif; ?>
                        </small>
                    <?php endif; ?>
                </h6>
            </div>

        </div>
    </div>

    <div class="infor">
        <div class="listing-detail-wrapper">
            <div class="listing-short-detail-wrap">
                <div class="listing-short-detail">
                    <h4 class="listing-name">
                        <a href="<?php echo e($project->url); ?>" class="prt-link-detail text-uppercase"
                        title="<?php echo e($project->name); ?>"><?php echo clean($project->name); ?></a>
                        <div class="object-socials-share-icon" data-toggle="tooltip" data-placement="top"
                            title="<?php echo e(__('Share')); ?>"></div>
                    </h4>

                    <p class="listing-short-description"><?php echo e(Str::words(clean($project->description), 18, '')); ?></p>
                </div>
            </div>
        </div>

        <?php if(!empty($project->agents_summary)): ?>
            <div class="summary-agents-info-wrapper price-features-wrapper price-features-wrapper-border-top">
                <div class="summary-agents-col">
                    <?php echo e(trans(':totalAgents agents in :totalCountries countries in :totalLanguages different languages', [
                        'totalAgents' => $project->agents_summary['totalAgents'],
                        'totalCountries' => $project->agents_summary['totalCountries'],
                        'totalLanguages' => $project->agents_summary['totalLanguages']
                    ])); ?>

                </div>
                <div class="summary-agents-col">
                    <div class="short-agents-listing-avatar-wrapper">
                        <?php $__currentLoopData = $project->agents_summary['agents']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="javascript:void(0)">
                                <img src="<?php echo e($agent['image_url']); ?>" alt="<?php echo e($agent['name']); ?>">
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="listing-detail-footer">
            <div class="footer-first">
                <div class="foot-location d-flex">
                    <img src="<?php echo e(Theme::asset()->url('img/pin.svg')); ?>" width="18"
                        alt="<?php echo clean($project->city_name ); ?>"/>
                    <?php echo clean($project->city_name ); ?>

                </div>
            </div>
            <div class="footer-flex">
                <div class="listing-card-info-icon mb-2">
                    <?php echo e($project->properties ? $project->properties->count() : 0); ?> <?php echo e(__('Properties')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/projects/item.blade.php ENDPATH**/ ?>