<div class="property_block_wrap style-2">
    <div class="property_block_wrap_header">
        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne"
           href="javascript:void(0);" aria-expanded="false">
            <h4 class="property_block_title"><?php echo e(__('Detail & Features')); ?></h4>
        </a>
    </div>
    <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
        <div class="block-body">
            <ul class="detail_features">
                <?php if($project->number_block): ?>
                    <li>
                        <strong><?php echo e(__('Blocks:')); ?></strong>
                        <?php echo e(number_format($project->number_block)); ?>

                    </li>
                <?php endif; ?>
                <?php if($project->number_floor): ?>
                    <li>
                        <strong><?php echo e(__('Floors:')); ?></strong>
                        <?php echo e(number_format($project->number_floor)); ?>

                    </li>
                <?php endif; ?>
                <?php if($project->number_flat): ?>
                    <li>
                        <strong><?php echo e(__('Number flats:')); ?></strong><?php echo e($project->number_flat); ?>

                    </li>
                <?php endif; ?>
                <?php if(count($project->categories)): ?>
                    <li>
                        <strong><?php echo e(__('Project Type:')); ?></strong>
                        <?php $__currentLoopData = $project->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span>
                                <?php echo e($category->name); ?>

                            </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

</div>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/project/features.blade.php ENDPATH**/ ?>