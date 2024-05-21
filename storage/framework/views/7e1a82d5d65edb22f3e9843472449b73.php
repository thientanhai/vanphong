<?php
    Theme::asset()->usePath()->add('leaflet-css', 'plugins/leaflet.css');
    Theme::asset()->usePath()->add('jquery-bar-rating', 'plugins/jquery-bar-rating/themes/fontawesome-stars.css');
    Theme::asset()->container('footer')->usePath()->add('leaflet-js', 'plugins/leaflet.js');
    Theme::asset()->usePath()->add('magnific-css', 'plugins/magnific-popup.css');
    Theme::asset()->container('footer')->usePath()->add('magnific-js', 'plugins/jquery.magnific-popup.min.js');
    Theme::asset()->container('footer')->usePath()->add('property-js', 'js/property.js');
    Theme::asset()->container('footer')->usePath()->add('jquery-bar-rating-js', 'plugins/jquery-bar-rating/jquery.barrating.min.js');
    Theme::asset()->container('footer')->usePath()->add('wishlist', 'js/wishlist.js', [], []);
    $headerLayout = MetaBox::getMetaData($property, 'header_layout', true);
    $headerLayout = !empty($headerLayout) ? $headerLayout : theme_option('property_header_layout', 'layout-1');
    $allowShareViaWhatsapp = theme_option('allow_share_via_whatsapp', 'no');
    $video = $property->getMetaData('video', true);
    $videoUrl = $video['url'] ?? '';
    $propertyLabel = $property->label;
?>

<?php echo Theme::partial('real-estate.properties.headers.' . $headerLayout, compact('property', 'propertyLabel')); ?>



<!-- ============================ Property Detail Start ================================== -->
<section class="property-detail gray-simple">
    <div data-property-id="<?php echo e($property->id); ?>"></div>
    <div class="container">
        <div class="row">
            <!-- property main detail -->
            <div class="col-lg-8 col-md-12 col-sm-12">
                   <!--Infomation--> 
            <?php if(count($property->facilities)): ?>
            <div class="property_block_wrap style-2">

                <div class="property_block_wrap_header">
                    <h3>Thông số tòa nhà</h3>
                </div>

                <div id="clNine" class="panel-collapse collapse show">
                    <div class="block-body">
                        <div class="nearby-wrap">
                            <div class="neary_section_list">
                                <?php $__currentLoopData = $property->facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="icon">
                                    <i class="<?php if($facility->icon): ?> <?php echo e($facility->icon); ?> <?php else: ?> fas fa-check <?php endif; ?>"></i> 
                                </div>
                                <div class="neary_section d-grid">
                                    <div class="neary_section_first">
                                        <h4 class="nearby_place_title"><?php echo e($facility->name); ?></h4>
                                    </div>
                                    <div class="neary_section_last">
                                        <small class="reviews-count"><?php echo e($facility->pivot->distance); ?></small>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?>

                <!-- Single Block Wrap - Features -->
                <?php echo Theme::partial('real-estate.elements.features', ['property' => $property]); ?>


                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <h3 class="property_block_title"><?php echo e(__('Description')); ?></h3>
                    </div>
                    <div class="block-body product__description">
                        <?php echo ($property->content); ?>

                    </div>
                </div>

                <!-- Single Block Wrap - Amenities -->
                

                <!-- Single Block Wrap - Video -->
                <?php echo Theme::partial('real-estate.elements.video', ['object' => $property]); ?>


                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">
                    <div class="property_block_wrap_header">
                        <h3 class="property_block_title"><?php echo e(__('Location')); ?></h3>
                    </div>

                    <div class="panel-collapse collapse show">
                        <div class="block-body">
                            <?php if($property->latitude && $property->longitude): ?>
                                <?php echo Theme::partial('real-estate.elements.traffic-map-modal', ['location' => $property->location . ', ' . $property->city_name]); ?>

                            <?php else: ?>
                                <?php echo Theme::partial('real-estate.elements.gmap-canvas', ['location' => $property->location]); ?>

                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <!-- Single Block Wrap - Gallery -->
                <?php echo Theme::partial('real-estate.elements.gallery', compact('property')); ?>


                <!-- Single Block Wrap - Nearby -->
                <?php echo Theme::partial('real-estate.elements.nearby', ['property' => $property]); ?>


                <?php if(RealEstateHelper::isEnabledReview()): ?>
                    <!-- Single Review -->
                    <div id="reviewWrapper">
                        <?php echo $__env->make(Theme::getThemeNamespace('views.real-estate.partials.reviews'), [
                            'model' => $property,
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- property Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">

                <!-- Like And Share -->
                <div class="like_share_wrap b-0">
                    <ul class="like_share_list justify-content-center">
                        <li class="social_share_list">
                            <a href="JavaScript:void(0);" class="btn btn-likes" data-bs-toggle="tooltip"
                               data-original-title="Share"><i class="fas fa-share"></i><?php echo e(__('Share')); ?></a>
                            <div class="social_share_panel">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(url()->current())); ?>&title=<?php echo e($property->description); ?>"
                                   target="_blank" class="cl-facebook"><i class="lni-facebook"></i></a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(url()->current())); ?>&text=<?php echo e($property->description); ?>"
                                   target="_blank" class="cl-twitter"><i class="lni-twitter"></i></a>
                                <a href="https://linkedin.com/shareArticle?mini=true&url=<?php echo e(urlencode(url()->current())); ?>&summary=<?php echo e(rawurldecode($property->description)); ?>&source=Linkedin"
                                   target="_blank" class="cl-linkedin"><i class="lni-linkedin"></i></a>
                                <?php if($allowShareViaWhatsapp == 'yes'): ?>
                                    <a href="https://api.whatsapp.com/send?text=<?php echo e(rawurldecode($property->description)); ?> <?php echo e(urlencode(url()->current())); ?>"
                                       data-action="share/whatsapp/share" target="_blank" class="cl-linkedin"><i
                                            class="lni-whatsapp"></i></a>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li><a href="JavaScript:Void(0);" data-id="<?php echo e($property->id); ?>"
                               class="btn btn-likes add-to-wishlist" data-bs-toggle="tooltip"
                               data-original-title="Save"><i
                                    class="fas fa-heart"></i><?php echo e(__('Save')); ?></a></li>
                    </ul>
                </div>

                <div class="details-sidebar">
                    <?php if($author = $property->author): ?>
                        <!-- Agent Detail -->
                        <div class="sides-widget">
                            <div class="sides-widget-header">
                                <?php if($author->username): ?>
                                    <div class="agent-photo">
                                        <img src="<?php echo e(RvMedia::getImageUrl($author->avatar->url, 'thumb')); ?>"
                                             alt="<?php echo e($author->name); ?>">
                                    </div>
                                    <div class="sides-widget-details">
                                        <h4>
                                            <a href="<?php echo e(route('public.agent', $author->username)); ?>"> <?php echo e($author->name); ?></a>
                                        </h4>
                                        <a href="tel:<?php echo e($author->phone); ?>"> <span><i class="lni-phone-handset"></i><?php echo e($author->phone); ?></span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php endif; ?>
                            </div>

                            <div class="sides-widget-body simple-form">
                                <?php echo Theme::partial('real-estate.elements.form-contact-consult', ['data' => $property]); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                    <?php echo dynamic_sidebar('property_sidebar'); ?>

                </div>
            </div>
        </div>

        <div
            class="row"><?php echo do_shortcode('[recently-viewed-properties title="' . __('Recently Viewed Properties') . '" subtitle="' . __('Your currently viewed properties.') . '"][/recently-viewed-properties]'); ?></div>
    </div>
</section>

<?php if($property->latitude && $property->longitude): ?>
    <div
        data-magnific-popup="#trafficMap"
        data-map-id="trafficMap"
        data-popup-id="#traffic-popup-map-template"
        data-map-icon="<?php echo e($property->map_icon); ?>"
        data-center="<?php echo e(json_encode([$property->latitude, $property->longitude])); ?>">
    </div>
<?php endif; ?>

<script id="traffic-popup-map-template" type="text/x-custom-template">
    <?php echo Theme::partial('real-estate.properties.map', ['property' => $property]); ?>

</script>

<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/real-estate/property.blade.php ENDPATH**/ ?>