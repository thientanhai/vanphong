<?php
    $is_lazyload = isset($lazyload) ? $lazyload : true;
?>
<div 
    class="property-listing property-ctm" 
    data-lat="<?php echo e($property->latitude); ?>"
    data-long="<?php echo e($property->longitude); ?>" 
    bedroom="<?php echo e($property->number_bedroom); ?>" 
    square="<?php echo e($property->square); ?>">
    <div class="listing-img-wrapper">
        <a href="<?php echo e($property->url); ?>">
            <?php if($is_lazyload): ?>
                <img src="<?php echo e(get_image_loading()); ?>"
                     data-src="<?php echo e(RvMedia::getImageUrl($property->image ?? '', 'full', false, RvMedia::getDefaultImage())); ?>"
                     class="img-fluid mx-auto lazy" alt="<?php echo e($property->name); ?>"/>
            <?php else: ?>
                <img
                    src="<?php echo e(RvMedia::getImageUrl($property->image ?? '', 'full', false, RvMedia::getDefaultImage())); ?>"
                    class="img-fluid mx-auto" alt="<?php echo e($property->name); ?>"/>
            <?php endif; ?>
            <span class="dark-overlay"></span>

        </a>
        <div class="icon-actions-wrapper">
            <a href="JavaScript:Void(0);" data-id="<?php echo e($property->id); ?>" class="add-to-wishlist">
                <i class="far fa-heart"></i>
            </a>
        </div>
        <div class="project__list__name project__cat__map p-2">
            <h4 class="listing-name">
                <a href="<?php echo e($property->url); ?>" class="prt-link-detail"
                    title="<?php echo e($property->name); ?>"><?php echo clean($property->name); ?></a>
            </h4>
            <div class="listing-name truncate cat__map__detail" location="<?php echo e($property->location); ?>">
                <?php echo clean($property->location); ?>

            </div>
        </div>
        
    </div>


    <div class="listing-content d-none">
        <div class="list-price">
            <div>
                <?php if(is_review_enabled() && $property->reviews_count > 0): ?>
                    <?php echo Theme::partial('real-estate.elements.property-review', compact('property')); ?>

                <?php endif; ?>
                        
                <?php if($property->label): ?>
                    <span class="prt-types rent"><?php echo e($property->label); ?></span>
                <?php endif; ?>
            </div>
            <span class="bolders"> <?php echo e($property->price_html); ?> </span>
        </div>
        <div class="listing-detail-wrapper-box">
            <div class="listing-detail-wrapper">
                <div class="listing-short-detail">
                    <h6 class="listing-name truncate " location="<?php echo e($property->location); ?>">
                        <a href="<?php echo e($property->url); ?>" title="<?php echo e($property->name); ?>"><?php echo clean($property->name); ?></a>
                    </h6>
                </div>
                <div class="listing-name truncate" location="<?php echo e($property->location); ?>">
                    <?php echo clean($property->location); ?>

                </div>
            </div>
        </div>

        <div>
            <div class="list-fx-features">
                <?php if($property->number_bedroom): ?>
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="<?php echo e(Theme::asset()->url('img/bed.svg')); ?>" width="13" alt=""/>
                        </div>
                        <?php echo clean($property->number_bedroom); ?>

                    </div>
                <?php endif; ?>

                <?php if($property->number_bathroom): ?>
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="<?php echo e(Theme::asset()->url('img/bathtub.svg')); ?>" width="13" alt=""/>
                        </div>
                        <?php echo clean($property->number_bathroom); ?>

                    </div>
                <?php endif; ?>

                <?php if($property->square_text): ?>
                    <div class="listing-card-info-icon">
                        <div class="inc-fleat-icon">
                            <img src="<?php echo e(Theme::asset()->url('img/move.svg')); ?>" width="13" alt=""/>
                        </div>
                        <?php echo e($property->square_text); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/properties/item-list.blade.php ENDPATH**/ ?>