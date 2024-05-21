<?php
    Theme::set('page', $page);
?>

<?php if($page->template == 'default'): ?>
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="ipt-title"><?php echo e($page->name); ?></h1>
                    <span class="ipn-subtitle"><?php echo e($page->description); ?></span>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading center">
                        <h2><?php echo e($page->name); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="scontent">
                          <?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 
'ck-content'])->toHtml(), $page); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
<?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(), 
$page); ?>

<?php endif; ?>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/themes/resido/views/page.blade.php ENDPATH**/ ?>