<select data-placeholder="<?php echo e(__('City')); ?>" class="form-control select2" name="city_id" id="filter_city_id"
        data-url="<?php echo e(route('ajax.cities-by-state')); ?>">
    <option value=""><?php echo e(__('City')); ?></option>
    <?php if(!empty(request()->input('state_id'))): ?>
        <?php $__currentLoopData = get_cities_by_state(request()->input('state_id')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($city->id); ?>"
                    <?php if(request()->input('city_id') == $city->id): ?> selected <?php endif; ?>>
                <?php echo e($city->name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</select>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/filters/location_city.blade.php ENDPATH**/ ?>