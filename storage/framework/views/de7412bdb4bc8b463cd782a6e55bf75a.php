<?php
    if (!isset($groupedCategories)) {
        $groupedCategories = $categories->groupBy('parent_id');
    }

    $currentCategories = $groupedCategories->get($parentId = $parentId ?? 0);
?>

<?php if($currentCategories): ?>
    <ol class="<?php echo \Illuminate\Support\Arr::toCssClasses(['list-group dd-list', $className ?? null]); ?>">
        <?php $__currentLoopData = $currentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $hasChildren = $groupedCategories->has($category->id);
            ?>
            <li class="dd-item" data-id="<?php echo e($category->id); ?>" data-name="<?php echo e($category->name); ?>">
                <?php if($updateTreeRoute): ?>
                    <div class="dd-handle dd3-handle"></div>
                <?php endif; ?>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dd3-content d-flex align-items-center gap-2', 'ps-3' => !$updateTreeRoute]); ?>">
                    <div class="d-flex align-items-center gap-1" style="width: 90%;">
                        <?php if (isset($component)) { $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalddaaa69e63e341eb9a1697dbf04d7aac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::icon','data' => ['name' => $hasChildren ? 'ti ti-folder' : 'ti ti-file']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hasChildren ? 'ti ti-folder' : 'ti ti-file')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $attributes = $__attributesOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__attributesOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac)): ?>
<?php $component = $__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac; ?>
<?php unset($__componentOriginalddaaa69e63e341eb9a1697dbf04d7aac); ?>
<?php endif; ?>
                        <span
                            class="fetch-data text-truncate"
                            role="button"
                            data-href="<?php echo e($canEdit && $editRoute ? route($editRoute, $category->id) : ''); ?>"
                        >
                            <?php echo e($category->name); ?>

                        </span>

                        <?php if($category->badge_with_count): ?>
                            <?php echo e($category->badge_with_count); ?>

                        <?php endif; ?>

                        <?php if($canDelete): ?>
                            <span
                                data-bs-toggle="modal"
                                data-bs-target=".modal-confirm-delete"
                                data-url="<?php echo e(route($deleteRoute, $category->id)); ?>"
                                class="ms-2"
                            >
                            <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['type' => 'button','color' => 'danger','size' => 'sm','class' => 'delete-button','icon' => 'ti ti-trash','iconOnly' => true,'tooltip' => trans('core/base::tree-category.delete_button'),'dataBsPlacement' => 'right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => 'danger','size' => 'sm','class' => 'delete-button','icon' => 'ti ti-trash','icon-only' => true,'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::tree-category.delete_button')),'data-bs-placement' => 'right']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($hasChildren): ?>
                    <?php echo $__env->make('core/base::forms.partials.tree-category', [
                        'groupedCategories' => $groupedCategories,
                        'parentId' => $category->id,
                        'className' => '',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/core/base/resources/views/forms/partials/tree-category.blade.php ENDPATH**/ ?>