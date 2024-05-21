<?php
    Theme::asset()->usePath()->add('leaflet-css', 'plugins/leaflet.css');
    Theme::asset()->usePath()->add('jquery-bar-rating', 'plugins/jquery-bar-rating/themes/fontawesome-stars.css');
    Theme::asset()->container('footer')->usePath()->add('leaflet-js', 'plugins/leaflet.js');
    Theme::asset()->usePath()->add('magnific-css', 'plugins/magnific-popup.css');
    Theme::asset()->container('footer')->usePath()->add('magnific-js', 'plugins/jquery.magnific-popup.min.js');
    Theme::asset()->container('footer')->usePath()->add('bootstrap-popper', 'plugins/bootstrap/popper.min.js');
    Theme::asset()->container('footer')->usePath()->add('property-js', 'js/property.js');
    Theme::asset()->container('footer')->usePath()->add('jquery-bar-rating-js', 'plugins/jquery-bar-rating/jquery.barrating.min.js');

    $video = $project->getMetaData('video', true);
    $videoUrl = $video['url'] ?? '';
?>

<div id="project-detail-content">

    <?php echo Theme::partial('real-estate.elements.project.header-images', compact('project')); ?>


    <!-- ============================ Property Detail Start ================================== -->

    <section class="gray-simple">
        <div data-project-id="<?php echo e($project->id); ?>"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="property_block_wrap style-2 p-4">
                        <div class="prt-detail-title-desc">
                            <span class="prt-types sale"><?php echo e($project->status->label()); ?></span>
                            <h1 class="h3"><?php echo e($project->name); ?></h1 class="h3">
                            <span>
                                <i class="lni-map-marker"></i>
                                <?php echo e($project->location); ?>

                            </span>
                            <?php if($project->price_from || $project->price_to): ?>
                                <h3 class="prt-price-fix mt-3">
                                    <?php if($project->price_from): ?>
                                        <?php echo e(format_price($project->price_from)); ?>

                                    <?php endif; ?>
                                    <?php if($project->price_to): ?>
                                        - <?php echo e(format_price($project->price_to)); ?>

                                    <?php endif; ?>
                                </h3>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="property_block_wrap style-2">
                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo"
                               aria-controls="clTwo"
                               href="javascript:void(0);" aria-expanded="true">
                                <h4 class="property_block_title"><?php echo e(__('Description')); ?></h4>
                            </a>
                        </div>
                        <div id="clTwo" class="panel-collapse collapse show">
                            <div class="block-body">
                                <?php echo clean($project->content); ?>

                            </div>
                        </div>
                    </div>

                    <?php echo Theme::partial('real-estate.elements.video', ['object' => $project]); ?>

                    <?php echo Theme::partial('real-estate.elements.project.facilities', compact('project')); ?>

                    <?php echo Theme::partial('real-estate.elements.project.features', compact('project')); ?>

                    <?php echo Theme::partial('real-estate.elements.project.location', compact('project')); ?>

                    <?php echo Theme::partial('real-estate.elements.project.investor', compact('project')); ?>

                    <?php echo Theme::partial('real-estate.elements.gallery', ['property' => $project]); ?>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <?php echo Theme::partial('real-estate.elements.project.properties', compact('project')); ?>

        <?php echo Theme::partial('real-estate.elements.project.related', compact('relatedProjects')); ?>

    </div>

    <?php if($project->latitude && $project->longitude): ?>
        <div
            data-magnific-popup="#trafficMap"
            data-map-id="trafficMap"
            data-popup-id="#traffic-popup-map-template"
            data-map-icon="<?php echo e($project->map_icon); ?>"
            data-center="<?php echo e(json_encode([$project->latitude, $project->longitude])); ?>">
        </div>
    <?php endif; ?>

    <script id="traffic-popup-map-template" type="text/x-custom-template">
    <?php echo Theme::partial('real-estate.elements.project.map', ['project' => $project]); ?>

    </script>
</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/views/real-estate/project.blade.php ENDPATH**/ ?>