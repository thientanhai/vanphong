<?php

$properties_for_sale = get_properties_by_project($project->id, 3, 1);
$properties_for_rent = get_properties_by_project($project->id, 3, 2);
?>

<?php if(count($properties_for_sale)): ?>
<section class="section-box section-blog pb-0">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="sec-heading">
                <h2><?php echo e(__('Properties For Sale')); ?></h2>
                <hr>
            </div>
        </div>
    </div>

    <div class="row related-project-rows">
        <?php $__currentLoopData = $properties_for_sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php echo Theme::partial('real-estate.projects.property', ['property' => $property]); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php endif; ?>
<?php if(count($properties_for_rent)): ?>
<section class="section-box section-blog pb-0">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="sec-heading">
                <h2><?php echo e(__('Properties For Rent')); ?></h2>
                <hr>
            </div>
        </div>
    </div>

    <div class="row related-project-rows">
        <?php $__currentLoopData = $properties_for_rent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <?php echo Theme::partial('real-estate.projects.property', ['property' => $property]); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/project/properties.blade.php ENDPATH**/ ?>