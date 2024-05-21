<div class="<?php if($errors->has($name)): ?> has-error <?php endif; ?>">
    <div class="multi-choices-widget list-item-checkbox ms-n3" data-bb-toggle="tree-checkboxes">
        <?php if(isset($options['choices']) &&
                (is_array($options['choices']) || $options['choices'] instanceof \Illuminate\Support\Collection)): ?>
            <?php echo $__env->make('plugins/real-estate::categories.categories-checkbox-option-line', [
                'categories' => $options['choices'],
                'value' => $options['value'],
                'currentId' => null,
                'name' => $name,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/plugins/real-estate/resources/views/categories/categories-multi.blade.php ENDPATH**/ ?>