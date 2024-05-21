<?php if($project->facilities->count()): ?>
    <div class="property_block_wrap style-2">
        <div class="property_block_wrap_header">
            <a data-bs-toggle="collapse" data-parent="#amen" data-bs-target="#cl5"
               aria-controls="clThree" href="javascript:void(0);" aria-expanded="true">
                <h4 class="property_block_title"><?php echo e(__('Distance key between facilities')); ?></h4>
            </a>
        </div>

        <div id="cl5" class="panel-collapse collapse show">
            <div class="block-body">
                <ul class="avl-features third color row">
                    <?php $__currentLoopData = $project->facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-4">
                            <p>
                                <i class="<?php if(!empty($facility->icon)): ?> <?php echo e($facility->icon); ?> <?php else: ?> fas fa-check <?php endif; ?> text-orange text0i"></i>
                                <?php echo e($facility->name); ?>- <?php echo e($facility->pivot->distance); ?> <?php echo e(__('km')); ?>

                            </p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/elements/project/facilities.blade.php ENDPATH**/ ?>