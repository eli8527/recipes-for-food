<?php snippet('header'); ?>
<?php snippet('menu'); ?>

<div class="content layout-wrapper__child">
  <div class="text">
    <?= $page->main_content()->kt(); ?>
  </div>
</div>

<?php snippet('footer'); ?>
