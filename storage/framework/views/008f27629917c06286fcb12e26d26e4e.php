<?php echo Theme::asset()->container('footer')->styles(); ?>

<?php echo Theme::asset()->container('footer')->scripts(); ?>

<?php echo Theme::asset()->container('after_footer')->scripts(); ?>


<?php echo SeoHelper::meta()->getAnalytics()->render(); ?>


<?php echo apply_filters(THEME_FRONT_FOOTER, null); ?>

<?php /**PATH /home/vanphong.com.vn/public_html/platform/packages/theme/resources/views/partials/footer.blade.php ENDPATH**/ ?>