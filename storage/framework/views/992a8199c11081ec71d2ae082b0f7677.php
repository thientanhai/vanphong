<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 class="ipt-title"><?php echo e($category->name); ?></h1>
                <span class="ipn-subtitle"><?php echo e($category->description); ?></span>
            </div>
        </div>
    </div>
</div>

<?php
    request()->request->set('category_id', $category->id);
?>

<?php echo $__env->make(Theme::getThemeNamespace('views.real-estate.includes.properties-list'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/real-estate/property-category.blade.php ENDPATH**/ ?>