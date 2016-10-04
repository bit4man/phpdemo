<html>
 <head>
  <title>Hello DUKE OpenShift</title>
 </head>
 <body>
 <h1>Hello OpenShift DEMO</h1>
 <i>
 <?php echo "Served by: {$_SERVER['SERVER_ADDR']} at " , date("D M j G:i:s T Y"); ?>
 </i>
 <p><?php echo "BCVAR is {$_ENV["BCVAR"]}";  ?></p>
 <p><?php echo "MYDEMO is {$_ENV["MYDEMO"]}"; ?></p>
 <?php phpinfo(); ?>
 </body>
</html>
