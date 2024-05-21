<div class="image-cover hero-banner"
    style="background:#2540a2 url(<?php echo e(RvMedia::getImageUrl($bg, null, false, RvMedia::getDefaultImage())); ?>) no-repeat;"
    data-overlay="<?php echo e($overlay); ?>">
    <div class="container">
        <div class="simple-slider-cusom">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h2 class="text-light text-end mb-4"><?php echo clean($description); ?></h2>
                </div>
                <div class="col-lg-6 col-md-6">
                    <?php echo Theme::partial('sliderhomes'); ?>

                </div>
            </div>
        </div>
        
        <div class="simple-search-wrap">
            <div class="hero-search-2">
                <p class="text-light"><?php echo clean($title); ?></p>

                <form action="<?php echo e(route('public.properties')); ?>" method="GET" id="frmhomesearch">
                    <div class="pk-input-group">
                        <input type="text" class="form-control" name="k"
                            placeholder="<?php echo e(__('Search for a location')); ?>">
                        <button class="btn btn-black" type="submit"><?php echo e(__('Go & Search')); ?></button>
                    </div>
                </form>
                <div class="suggest__key">Từ khóa gợi ý:
                    <ul>
                        <li><a href="#">Thuê BDS quận 1</a></li>
                        <li><a href="#">BDS giá rẻ</a></li>
                        <li><a href="#">The Rivia</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/shortcodes/hero-banner-style-6.blade.php ENDPATH**/ ?>