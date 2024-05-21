<select data-placeholder="<?php echo e(__('State')); ?>" class="form-control select2" name="state_id" id="filter_state_id"
        data-url="<?php echo e(route('ajax.states-by-country')); ?>">
    <option value=""><?php echo e(__('State')); ?></option>
    <?php if(!empty(request()->input('country_id'))): ?>
        <?php $__currentLoopData = get_states_by_country(request()->input('country_id')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($state->id); ?>" <?php if(request()->input('state_id') == $state->id): ?> selected <?php endif; ?>>
                <?php echo e($state->name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</select>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/filters/location_state.blade.php ENDPATH**/ ?>