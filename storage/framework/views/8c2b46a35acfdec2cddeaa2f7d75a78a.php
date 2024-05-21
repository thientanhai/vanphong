
<div class="row">
    <div class="container">
        <div class="property_block__title style-2 py-4">
            <?php echo Theme::breadcrumb()->render(); ?>


            <div class="prt-detail-title-desc">
                
        
                <h1><?php echo e($property->name); ?></h1>
                <span><?php echo e($property->location . ', ' . $property->city_name); ?></span>
                
                
            </div>
        </div>
        
    </div>
</div>

<?php if(count($property->images) < 2): ?>
    <div class="featured_slick_gallery">
        <div class="container">
            <?php $__currentLoopData = $property->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="featured_slick_padd text-center">
                    <a href="<?php echo e(RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage())); ?>"
                        class="mfp-gallery">
                        <img src="<?php echo e(RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage())); ?>"
                            class="img-fluid mx-auto" alt="<?php echo e($property->name); ?>-<?php echo e($index); ?>" />
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php else: ?>
    <!--block image -->
    <div class="container">
        <div id="gallery" class="photos-grid-container gallery">
            <div class="main-photo img-box">
                <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                    data-glightbox="type: image">
                    <img src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" /></a>
            </div>
            <div>
                <div class="sub">
                    <div class="img-box"><a href="https://offices.topdealhot.com/storage/banners/bg.jpg"
                            class="glightbox" data-glightbox="type: image"><img
                                src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" /></a></div>
                    <div class="img-box"><a href="https://offices.topdealhot.com/storage/banners/bg.jpg"
                            class="glightbox" data-glightbox="type: image"><img
                                src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" /></a></div>
                    <div class="img-box"><a href="https://offices.topdealhot.com/storage/banners/bg.jpg"
                            class="glightbox" data-glightbox="type: image"><img
                                src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" /></a></div>
                    <div id="multi-link" class="img-box">
                        <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                            data-glightbox="type: image">
                            <img src="https://offices.topdealhot.com/storage/banners/bg.jpg" alt="image" />
                            <div class="transparent-box">
                                <div class="caption">
                                    +3
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="more-img" class="extra-images-container hide-element">
                <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                    data-glightbox="type: image"><img src="https://offices.topdealhot.com/storage/banners/bg.jpg"
                        alt="image" /></a>
                <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                    data-glightbox="type: image"><img src="https://offices.topdealhot.com/storage/banners/bg.jpg"
                        alt="image" /></a>
                <a href="https://offices.topdealhot.com/storage/banners/bg.jpg" class="glightbox"
                    data-glightbox="type: image"><img src="https://offices.topdealhot.com/storage/banners/bg.jpg"
                        alt="image" /></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = GLightbox({
                touchNavigation: true,
                loop: true,
                width: "90vw",
                height: "90vh"
            });
        });
    </script>



    <div class="featured_slick_gallery-slide hidden">
        <?php $__currentLoopData = $property->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="featured_slick_padd">
                <a href="<?php echo e(RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage())); ?>"
                    class="mfp-gallery">
                    <img src="<?php echo e(RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage())); ?>"
                        class="img-fluid mx-auto" alt="<?php echo e($property->name); ?>-<?php echo e($index); ?>" />
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/properties/grid-gallery.blade.php ENDPATH**/ ?>