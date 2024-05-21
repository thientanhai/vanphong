<div class="d-flex">
    <div class="blii">
        <img class="lazy" src="<?php echo e(get_image_loading()); ?>" data-src="<?php echo e($project->image_thumb); ?>" height="100" width="100" alt="<?php echo e($project->name); ?>">
    </div>
    <div class="infomarker">
        <h4><a href="<?php echo e($project->url); ?>" target="_blank"><?php echo e($project->name); ?></a></h4>
        <div class="mb-1"><span><?php echo e($project->city_name); ?></span></div>
        <div class="lists_property_price">
            <div class="lists_property_price_value">
                <h5><?php echo e($project->price_html); ?></h5>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/project/map.blade.php ENDPATH**/ ?>