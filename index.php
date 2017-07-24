<?php require_once('./classes/setup.php'); ?><!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="<?php echo $o->app_main_js; ?>"></script>
  <script type="text/javascript" src="<?php echo $o->app_page_js; ?>"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyBMrNRp-Mh5rofTVGHac8HzV7Q-XyU76cM"></script>
  <script>!window.jQuery && document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
  <style type="text/css" media="screen">@import "<?php echo $o->app_main_css; ?>";</style>
  <style type="text/css" media="screen">@import "<?php echo $o->app_page_css; ?>";</style>
  <title><?php echo $o->GetTitle(); ?></title>
</head>
<body onload="initialize();">
<?php echo $o->GetHeader(); ?>
<?php echo $o->GetMenu(); ?>
<?php echo $o->GetPage(); ?>
<?php echo $o->GetCopyright(); ?>
<?php echo $o->GetDebug(); ?>
</body>
</html>
