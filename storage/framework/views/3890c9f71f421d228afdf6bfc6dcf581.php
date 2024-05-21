<div class="form-group">
    <label for="widget-name"><?php echo e(__('Name')); ?></label>
    <input type="text" id="widget-name" class="form-control" name="name" value="<?php echo e($config['name']); ?>">
</div>
<div class="form-group">
    <label for="widget_menu"><?php echo e(__('Select menu')); ?></label>
    <?php echo Form::select('menu_id', app(\Botble\Menu\Repositories\Interfaces\MenuInterface::class)->pluck('name', 'slug'), $config['menu_id'], ['class' => 'form-control select-full']); ?>

</div><?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/////widgets/custom-menu/templates/backend.blade.php ENDPATH**/ ?>