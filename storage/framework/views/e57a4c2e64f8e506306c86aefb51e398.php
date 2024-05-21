<!-- Categories -->
<div class="single-widgets widget_category">
    <h4 class="title"><?php echo e($config['name']); ?></h4>
    <ul>
        <?php $__currentLoopData = get_categories(['select' => ['categories.id', 'categories.name']]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e($category->url); ?>" class="text-dark"><?php echo e($category->name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/////widgets/categories/templates/frontend.blade.php ENDPATH**/ ?>