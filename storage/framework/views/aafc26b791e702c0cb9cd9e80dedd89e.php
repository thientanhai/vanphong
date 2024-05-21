<?php if(theme_option('max_price')): ?>
    <?php $maxPriceData = get_repeat_field('max_price') ?>
    <?php if(count($maxPriceData)): ?>
        <select id="maxprice" data-placeholder="<?php echo e(__('No Max')); ?>" name="max_price" class="form-control">
            <option value="">&nbsp;</option>
            <?php $__currentLoopData = $maxPriceData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($item) > 1): ?>
                    <option value="<?php echo e($item[0]['value']); ?>"
                            <?php if(request()->input('max_price') == $item[0]['value']): ?> selected <?php endif; ?>>
                        <?php echo e($item[1]['value']); ?>

                    </option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    <?php else: ?>
        <input type="number" min="0" placeholder="<?php echo e(__('No Max')); ?>" name="max_price" class="form-control">
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/filters/max-price.blade.php ENDPATH**/ ?>