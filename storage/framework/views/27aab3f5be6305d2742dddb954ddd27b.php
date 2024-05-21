<div class="list-fx-features">
    <?php if($property->number_bedroom): ?>
        <div class="listing-card-info-icon">
            <div class="inc-fleat-icon">
                <img src="<?php echo e(Theme::asset()->url('img/bed.svg')); ?>" width="13" alt="bed icon">
            </div>
            <?php echo e(number_format($property->number_bedroom)); ?> <?php echo e(__('Beds')); ?>

        </div>
    <?php endif; ?>
    <?php if($property->number_bathroom): ?>
        <div class="listing-card-info-icon">
            <div class="inc-fleat-icon">
                <img src="<?php echo e(Theme::asset()->url('img/bathtub.svg')); ?>" width="13" alt="bathtub icon">
            </div>
            <?php echo e(number_format($property->number_bathroom)); ?> <?php echo e(__('Bath')); ?>

        </div>
    <?php endif; ?>
    <?php if($property->square): ?>
        <div class="listing-card-info-icon">
            <div class="inc-fleat-icon">
                <img src="<?php echo e(Theme::asset()->url('img/move.svg')); ?>" width="13" alt="move icon">
            </div>
            <?php echo e($property->square_text); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/elements/list-fx-features.blade.php ENDPATH**/ ?>