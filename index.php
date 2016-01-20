<html>
 <head>
  <title>Hello OpenShift</title>
 </head>
 <body>
 <h1>Hello OpenShift DEMO</h1>
 <i>
 <?php echo "Served by: {$_SERVER['SERVER_ADDR']} at " , date("D M j G:i:s T Y"); ?>
 </i>
 <p>DCVAR is <?php $_ENV["DCVAR"] ?></p>
 <p>MYDEMO is <?php $_ENV["MYDEMO"] ?></p>
 <?php phpinfo(); ?>
 </body>
</html>
