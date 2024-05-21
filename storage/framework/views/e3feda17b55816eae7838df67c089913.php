<select id="ptypes" data-placeholder="<?php echo e(__('Category')); ?>" name="category_id"
        data-url="<?php echo e(route('public.ajax.sub-categories')); ?>" class="form-control has-sub-category">
    <option value="">&nbsp;</option>
    <?php $__currentLoopData = get_re_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>" <?php if(request()->input('category_id') == $category->id): ?> selected <?php endif; ?>>
            <?php echo e($category->name); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/partials/real-estate/filters/categories.blade.php ENDPATH**/ ?>