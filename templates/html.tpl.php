<!DOCTYPE html>
<html lang="en">
  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/bootstrap.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/modernizr.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/isotope.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/nivo-lightbox.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/perfect-scrollbar.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/owl.carousel.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/bxslider.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/socialstream.jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/js/hamzh.js'; ?>"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script> -->
    <script type="text/javascript">
      $('#myCarousel').carousel({ interval: 2000 /* changes the speed  */ });
    </script>
  </head>
  <body data-spy="scroll" data-target="#site-nav" class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
</html>