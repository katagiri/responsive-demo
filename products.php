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
    <div id="products">

      <!-- Example row of columns -->
      <!--<div class="row">-->
        
        <?php 
		for($i=0; $i<50; $i++) {
        echo 
		'<div class="product">
          <h4 class="title-main">Title 4</h4>
          <img src="img/sample.jpg" class="image" />
		  <h4 class="title-phone">Title</h4>
          <p><strong>Info '.$i.'</strong></p>
          <p><a class="btn" href="#">More info &raquo;</a></p>
        </div>';
		}
		?>
        <!--</div>-->
      </div>
      <div style="clear:both;"></div>

      <?php include('includes/footer.php'); ?>
    </div> <!-- /container -->
    <?php include('includes/js.php'); ?>
  </body>
</html>
