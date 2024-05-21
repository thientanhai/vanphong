<div class="col-lg-12 col-md-12">
    <div class="item-sorting-box">
        <div class="item-sorting clearfix">
            <div class="left-column pull-left">
                <h4 class="m-0">
                    <?php if($properties->total() == 0): ?>
                        <?php echo e(__('0 results')); ?>

                    <?php else: ?>
                        <?php echo e(__('Found :from - :to Of :total Results', [
                            'from' => $properties->firstItem(),
                            'to' => $properties->lastItem(),
                            'total' => $properties->total(),
                        ])); ?>

                    <?php endif; ?>
                </h4>
            </div>
        </div>
        <div class="item-sorting-box-right">
            <div class="sorting-by">
                <select id="sort_by" name="sort_by" class="form-control" data-placeholder="<?php echo e(__('Sort by')); ?>">
                    <option value=""><?php echo e(__('Sort by')); ?></option>
                    <option value=""
                            <?php if(request()->input('sort_by') == 'default_sorting'): ?> selected <?php endif; ?>><?php echo e(__('Default')); ?></option>
                    <option value="date_asc"
                            <?php if(request()->input('sort_by') == 'date_asc'): ?> selected <?php endif; ?>><?php echo e(__('Oldest')); ?></option>
                    <option value="date_desc"
                            <?php if(request()->input('sort_by') == 'date_desc'): ?> selected <?php endif; ?>><?php echo e(__('Newest')); ?></option>
                    <option value="price_asc"
                            <?php if(request()->input('sort_by') == 'price_asc'): ?> selected <?php endif; ?>><?php echo e(__('Price: Low to high')); ?></option>
                    <option value="price_desc"
                            <?php if(request()->input('sort_by') == 'price_desc'): ?> selected <?php endif; ?>><?php echo e(__('Price: High to low')); ?></option>
                    <option value="name_asc"
                            <?php if(request()->input('sort_by') == 'name_asc'): ?> selected <?php endif; ?>><?php echo e(__('Name: A-Z')); ?></option>
                    <option value="name_desc"
                            <?php if(request()->input('sort_by') == 'name_desc'): ?> selected <?php endif; ?>><?php echo e(__('Name: Z-A')); ?></option>
                </select>
            </div>
            <ul class="shorting-list">
                <li>
                    <a href="<?php echo e(request()->fullUrlWithQuery(['view' => 'grid'])); ?>"
                       class="<?php echo e(strpos($viewType, 'grid') !== false ? 'active' : ''); ?>"><i
                            class="ti-layout-grid2"></i></a></li>
                <li>
                    <a href="<?php echo e(request()->fullUrlWithQuery(['view' => 'list'])); ?>"
                       class="<?php echo e(strpos($viewType, 'list') !== false ? 'active' : ''); ?>"><i
                            class="ti-view-list"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/real-estate/includes/sorting-box.blade.php ENDPATH**/ ?>