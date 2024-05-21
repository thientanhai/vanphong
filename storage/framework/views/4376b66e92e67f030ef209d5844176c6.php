<div class="property_block_wrap style-2">
    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#loca" data-bs-target="#clSix" aria-controls="clSix"
           href="javascript:void(0);" aria-expanded="true">
            <h4 class="property_block_title"><?php echo e(__('Location')); ?></h4>
        </a>
    </div>

    <div id="clSix" class="panel-collapse collapse show">
        <div class="block-body">
            <?php if($project->latitude && $project->longitude): ?>
                <?php echo Theme::partial('real-estate.elements.traffic-map-modal', ['location' => $project->location . ', ' . $project->city_name]); ?>

            <?php else: ?>
                <?php echo Theme::partial('real-estate.elements.gmap-canvas', ['location' => $project->location]); ?>

            <?php endif; ?>
        </div>
    </div>

</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/project/location.blade.php ENDPATH**/ ?>