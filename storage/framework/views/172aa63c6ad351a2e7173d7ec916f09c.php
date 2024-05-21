<div id="loading">
    <div class="half-circle-spinner">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>
</div>

<?php if($properties->count()): ?>

<?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <figure>

                <?php echo Theme::partial('real-estate.properties.item-list', compact('property')); ?>


 
    </figure>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <br>
<?php else: ?>
    <div class="alert alert-warning" role="alert">
        <?php echo e(__('0 results')); ?>

    </div>
<?php endif; ?>

<!-- Pagination -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation">
            <?php echo $properties->withQueryString()->onEachSide(1)->links(); ?>

        </nav>
    </div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/properties/items.blade.php ENDPATH**/ ?>