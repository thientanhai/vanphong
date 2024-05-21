<select id="select-bathroom" data-placeholder="<?php echo e(__('Bathroom')); ?>" name="bathroom" class="form-control">
    <option value="">&nbsp;</option>
    <?php if(theme_option('bathroom')): ?>
        <?php $__currentLoopData = get_repeat_field('bathroom'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($item) > 1): ?>
                <option value="<?php echo e($item[1]['value']); ?>" <?php if(request()->input('bathroom') == $item[1]['value']): ?> selected <?php endif; ?>>
                    <?php echo e($item[0]['value']); ?>

                </option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</select>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/filters/bathrooms.blade.php ENDPATH**/ ?>