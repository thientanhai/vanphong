<?php
    $img_slider = isset($img_slider) ? $img_slider : true;
    $is_lazyload = isset($lazyload) ? $lazyload : true;
?>

<div class="property-listing property-item property-2 <?php echo e($class_extend ?? ''); ?>" data-lat="<?php echo e($property->latitude); ?>"
    data-long="<?php echo e($property->longitude); ?>">
    <div class="listing-img-wrapper">
        <div class="list-img-slide">
            <div class="click <?php if(!$img_slider): ?> not-slider <?php endif; ?>">
                <?php $__currentLoopData = $property['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <a href="<?php echo e($property->url); ?>">
                            <?php if($is_lazyload): ?>
                                <img src="<?php echo e(get_image_loading()); ?>"
                                    data-src="<?php echo e(RvMedia::getImageUrl($image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid mx-auto lazy" alt="<?php echo e($property->name); ?>" />
                            <?php else: ?>
                                <img src="<?php echo e(RvMedia::getImageUrl($image, 'medium', false, RvMedia::getDefaultImage())); ?>"
                                    class="img-fluid mx-auto" alt="<?php echo e($property->name); ?>" />
                            <?php endif; ?>
                        </a>
                    </div>
                    <?php if(!$img_slider): ?>
                    <?php break; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    
    <div class="icon-actions-wrapper">
        <a href="JavaScript:Void(0);" data-id="<?php echo e($property->id); ?>" class="add-to-wishlist">
            <i class="far fa-heart"></i>
        </a>
    </div>
    <div class="project__list__name p-2">
        <h4 class="listing-name">
            <a href="<?php echo e($property->url); ?>" class="prt-link-detail"
                title="<?php echo e($property->name); ?>"><?php echo clean($property->name); ?></a>
        </h4>
    </div>
</div>



<div class="listing-detail-wrapper">
    <div class="listing-short-detail-wrap">
        <div class="listing-short-detail">
            <div class="list-price home__list__price d-flex justify-flex-start">
                <h6 class="listing-card-info-price project__price px-0">
                    <?php echo e($property->price_html.' / m2'); ?> 
                </h6>
                <?php
                $customFields = $property->customFields()->get();
                $array = collect($customFields)->toArray();
                $level = array_column($array,'name', 'value');
                ?>
                <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($value): ?>
                        <span class="prt-types rent">
                            <?php echo clean($value); ?>: <?php echo __($name); ?>

                        </span>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <span>
                    

                    
                </span>
            </div>
            
        </div>
    </div>
</div>  
<div class="listing-detail-footer">
    <div class="footer-first">
        <div class="foot-location">
            <span>            
                <img src="<?php echo e(Theme::asset()->url('img/pin.svg')); ?>" width="18" alt="<?php echo clean($property->city_name); ?>" />
                78.4 - 86.3 - 170 - 180 - 210m2</span>
        </div>
    </div>
</div>
<div class="listing-detail-footer">
    <div class="footer-first">
        <?php if($property->location): ?>
            <div class="foot-location">
                <?php echo clean($property->location); ?>

            </div>
        <?php endif; ?>

    </div>
  
</div>


<div class="listing-detail-footer">
    <div class="footer-first">
        <div class="foot-location d-flex">
            <img src="<?php echo e(Theme::asset()->url('img/pin.svg')); ?>" width="18" alt="<?php echo clean($property->city_name); ?>" />
        
        </div>
    </div>
    <div class="footer-flex">
        <a href="<?php echo e($property->url); ?>" class="prt-view"><?php echo e(__('View')); ?></a>
    </div>
</div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/properties/item-grid.blade.php ENDPATH**/ ?>