<?php echo SeoHelper::render(); ?>


<?php if($favicon = theme_option('favicon')): ?>
    <link
        href="<?php echo e(RvMedia::getImageUrl($favicon)); ?>"
        rel="shortcut icon"
    >
<?php endif; ?>

<?php if(Theme::has('headerMeta')): ?>
    <?php echo Theme::get('headerMeta'); ?>

<?php endif; ?>

<?php echo apply_filters('theme_front_meta', null); ?>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "<?php echo e(rescue(fn() => SeoHelper::openGraph()->getProperty('site_name'))); ?>",
  "url": "<?php echo e(url('')); ?>"
}
</script>

<?php echo Theme::asset()->container('before_header')->styles(); ?>

<?php echo Theme::asset()->styles(); ?>

<?php echo Theme::asset()->container('after_header')->styles(); ?>

<?php echo Theme::asset()->container('header')->scripts(); ?>


<?php echo apply_filters(THEME_FRONT_HEADER, null); ?>


<script>
    window.siteUrl = "<?php echo e(route('public.index')); ?>";
</script>
<?php /**PATH /home/oqrkrpbs/offices.topdealhot.com/platform/packages/theme/resources/views/partials/header.blade.php ENDPATH**/ ?>