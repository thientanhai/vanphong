<div class="search-sidebar_header">
    <h4 class="ssh_heading"><?php echo e(__('Close Filter')); ?></h4>
    <button class="w3-bar-item w3-button w3-large close_search_menu"><i class="ti-close"></i></button>
</div>

<!-- Find New Property -->
<div class="sidebar-widgets">

    <!-- Find New Property -->
    <div class="sidebar-widgets">
        <form action="<?php echo e(route('public.properties')); ?>" method="get" id="filters-form">
            <?php if(function_exists('is_search_country_sidebar')): ?>
                <div class="form-group simple">
                    <?php echo Theme::partial('real-estate.filters.location_country'); ?>

                </div>

                <div class="form-group simple">
                    <?php echo Theme::partial('real-estate.filters.location_state'); ?>

                </div>

                <div class="form-group simple">
                    <?php echo Theme::partial('real-estate.filters.location_city'); ?>

                </div>

                <div class="form-group simple">
                    <div class="simple-input">
                        <?php echo Theme::partial('real-estate.filters.categories'); ?>

                    </div>
                </div>

                <div class="form-group simple">
                    <div class="simple-input">
                        <?php echo Theme::partial('real-estate.filters.sub_categories'); ?>

                    </div>
                </div>
            <?php else: ?>
                <div class="form-group simple">
                    <div class="input-with-icon">
                        <?php echo Theme::partial('real-estate.filters.input-search'); ?>

                    </div>
                </div>
                <div class="form-group simple">
                    <?php echo Theme::partial('real-estate.filters.cities'); ?>

                </div>

                <div class="form-group simple">
                    <div class="simple-input">
                        <?php echo Theme::partial('real-estate.filters.categories'); ?>

                    </div>
                </div>
            <?php endif; ?>

            <div class="form-group simple">
                <div class="simple-input">
                    <?php echo Theme::partial('real-estate.filters.select-types'); ?>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group simple">
                        <div class="simple-input">
                            <?php echo Theme::partial('real-estate.filters.min-price'); ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group simple">
                        <div class="simple-input">
                            <?php echo Theme::partial('real-estate.filters.max-price'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group simple">
                <div class="simple-input">
                    <?php echo Theme::partial('real-estate.filters.bedrooms'); ?>

                </div>
            </div>

            <div class="form-group simple">
                <div class="simple-input">
                    <?php echo Theme::partial('real-estate.filters.bathrooms'); ?>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <div class="simple-input">
                            <?php echo Theme::partial('real-estate.filters.min-area'); ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <div class="simple-input">
                            <?php echo Theme::partial('real-estate.filters.max-area'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="single_search_boxed">
                <div class="widget-boxed-header">
                    <h4>
                        <a href="#features" data-bs-toggle="collapse" aria-expanded="true" role="button"
                           class=""><?php echo e(__('Advanced Search')); ?></a>
                    </h4>
                </div>
                <div class="widget-boxed-body collapse show" id="features" data-parent="#features" style="">
                    <?php echo Theme::partial('real-estate.filters.features', ['class' => 'second-row']); ?>

                </div>
            </div>

            <input type="hidden" id="filter_sort_by" name="sort_by" value="<?php echo e(request()->input('sort_by')); ?>">

            <button class="btn btn btn-theme-light-2 rounded full-width mt-3"
                    type="submit"><?php echo e(__('Find New Home')); ?></button>
        </form>
    </div>
</div>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/real-estate/includes/search-sidebar.blade.php ENDPATH**/ ?>