<div class="d-flex">
    <div class="blii">
        <img class="lazy" src="<?php echo e(get_image_loading()); ?>" data-src="<?php echo e($property->image_thumb); ?>" height="100" width="100" alt="<?php echo e($property->name); ?>">
    </div>
    <div class="infomarker">
        <h4><a href="<?php echo e($property->url); ?>" target="_blank"><?php echo e($property->name); ?></a></h4>
        <div class="mb-1"><span><?php echo e($property->city_name); ?></span></div>
        <div>
            <span> <i class="ti-location-pin"></i> <?php echo e($property->square_text); ?></span> &nbsp; &nbsp;
            <span>
                <i><img src="<?php echo e(Theme::asset()->url('img/bed.svg')); ?>" alt="icon" width="13"></i>
                <i class="vti"><?php echo e($property->number_bedroom); ?></i></span> &nbsp; &nbsp; <span>
                <i><img src="<?php echo e(Theme::asset()->url('img/bathtub.svg')); ?>" alt="icon" width="13"></i>
                <i class="vti"><?php echo e($property->number_bathroom); ?></i>
            </span>
        </div>
        <div class="lists_property_price">
            <div class="lists_property_price_value">
                <h5><?php echo e($property->price_html); ?></h5>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/properties/map.blade.php ENDPATH**/ ?>