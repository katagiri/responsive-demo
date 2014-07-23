<?php include_once('includes/phplib.inc'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Responsive Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Demo">
    <meta name="author" content="Responsive Demo">
    <link rel="icon" type="image/png" href="<?php echo $domain ?>/img/favicon.png" />
	<link rel="shortcut icon" href="<?php echo $domain ?>/img/favicon.ico"/>
	<?php include('includes/css.php'); ?>
  </head>

  <body>
    
    <?php include('includes/sidebar.php'); ?>
    <?php include('includes/nav.php'); ?>
    
    <!--<div class="container" id="products">-->
    <div id="homeslides">
    	<ul class="rslides"> <!-- responsiveslides.com/ -->
          <li><img src="img/1.jpg" alt=""></li>
          <li><img src="img/2.jpg" alt=""></li>
          <li><img src="img/3.jpg" alt=""></li>
        </ul>

    </div>
    <div style="clear:both;"></div>

      <?php include('includes/footer.php'); ?>
    </div> <!-- /container -->
    <?php include('includes/js.php'); ?>
  </body>
</html>
