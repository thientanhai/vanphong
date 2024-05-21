<?php
    $project_route = empty($route) ?  route('public.projects') : $route;
?>
<form action="<?php echo e($project_route); ?>" method="GET">
    <div class="hero-search-content hero-search-filter-wrapper">
        <div class="hero-search-filters-group">
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
        </div>

        <div class="search-action-wrapper">
            <button class="btn search-btn" type="submit"><?php echo e(__('Search')); ?></button>
        </div>
    </div>
</form>
<?php /**PATH /home/vanphong.com.vn/public_html/platform/themes/resido/partials/real-estate/filters/projects.blade.php ENDPATH**/ ?>