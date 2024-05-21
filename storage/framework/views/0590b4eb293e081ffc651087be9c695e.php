<?php if(theme_option('min_price')): ?>
    <?php $minPriceData = get_repeat_field('min_price') ?>
    <?php if(count($minPriceData)): ?>
        <select id="minprice" data-placeholder="<?php echo e(__('No Min')); ?>" name="min_price" class="form-control">
            <option value="">&nbsp;</option>
            <?php $__currentLoopData = $minPriceData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($item) > 1): ?>
                    <option value="<?php echo e($item[0]['value']); ?>"
                            <?php if(request()->input('min_price') == $item[0]['value']): ?> selected <?php endif; ?>>
                        <?php echo e($item[1]['value']); ?>

                    </option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    <?php else: ?>
        <input type="number" min="0" placeholder="<?php echo e(__('No Min')); ?>" name="min_price" class="form-control">
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/filters/min-price.blade.php ENDPATH**/ ?>