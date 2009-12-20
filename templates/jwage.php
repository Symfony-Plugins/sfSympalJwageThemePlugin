<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php $editor = get_sympal_editor() ?>
<?php $flash = get_sympal_flash() ?>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<?php include_stylesheets() ?>
<?php include_javascripts() ?>
<link rel="shortcut icon" href="/favicon.ico" />
</head>

<body id="frontend" class="yui-skin-sam">

  <div id="wrap">
    <div id="top">
      <h2><?php echo link_to($sf_sympal_context->getSite(), '@homepage'); ?></h2>
      <div id="menu">
        <?php $menu = get_sympal_split_menus('primary', false, 8, true) ?>
        <?php echo $menu['primary'] ?>
      </div>
    </div>

    <div id="top2">
      <h3><?php echo $sf_response->getTitle() ?></h3>
    </div>

    <div id="content">
      <?php echo $flash ?>

      <?php $secondaryMenu = (string) $menu['secondary'] ?>
      <?php $subMenu = (string) get_sympal_menu($sf_sympal_context->getCurrentMenuItem()) ?>
      <?php if(has_slot('sympal_right_sidebar') || $secondaryMenu || $subMenu): ?>
        <style>
        #left {
          margin-right: 235px;
        }
        </style>
        <div id="right">
          <?php echo $subMenu ?>
          <?php echo $secondaryMenu ?>
          <?php echo get_slot('sympal_right_sidebar'); ?>
        </div>
      <?php endif; ?>

      <div id="left">
        <?php echo $sf_content ?>
      </div>

      <div id="clear"></div></div>
      <div id="footer">
        <p>Copyright <?php echo sfSympalContext::getInstance()->getSite() ?></p>
      </div>
    </div>

  <?php echo $editor ?>

</body>
</html>