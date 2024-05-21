<?php
    $isAvailableForOneCountry = theme_option('is_available_for_one_country', 'no');
?>
<select
    data-placeholder="<?php echo e($isAvailableForOneCountry ? __('City') : (__('Country') . ' ' . __('State') . ' ' . __('City'))); ?>"
    class="form-control city_id"
    data-url="<?php echo e(route('public.ajax.cities')); ?>" name="city_id"
    id="city_id" <?php echo e($isAvailableForOneCountry == 'yes' ? 'data-only-city=true' : ''); ?>>
    <?php if(!empty(request()->input('city_id'))): ?>
        <option value="<?php echo e(request()->input('city_id')); ?>" selected>
            <?php echo e(Location::getCityNameById(request()->input('city_id'))); ?>

        </option>
    <?php endif; ?>
</select>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/filters/cities.blade.php ENDPATH**/ ?>