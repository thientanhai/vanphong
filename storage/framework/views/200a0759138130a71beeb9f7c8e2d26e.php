<div class="property-listing property-2">
    <div class="listing-img-wrapper">
        <div class="list-single-img">
            <a href="<?php echo e($property->url); ?>">
                <img src="<?php echo e($property->image_thumb); ?>" class="img-fluid mx-auto" alt="<?php echo e($property->name); ?>">
            </a>
        </div>
        <span class="prt-types <?php echo e($property->type); ?>"><?php echo e($property->type); ?></span>
    </div>
    <div class="listing-detail-wrapper pb-0">
        <div class="listing-short-detail">
            <h4 class="listing-name">
                <a href="<?php echo e($property->url); ?>" title="<?php echo e($property->name); ?>"><?php echo e($property->name); ?></a>
                <i class="list-status ti-check"></i>
            </h4>
        </div>
    </div>
    <div class="price-features-wrapper">
        <div class="listing-price-fx">
            <h6 class="listing-card-info-price price-prefix"><?php echo e($property->price_html); ?></span></h6>
        </div>
    </div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/properties/map-popup.blade.php ENDPATH**/ ?>