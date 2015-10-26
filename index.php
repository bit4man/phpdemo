<html>
 <head>
  <title>Hello OpenShift</title>
 </head>
 <body>
 <h1>Hello OpenShift version X</h1>
 <?php echo "Welcome {$_SERVER['REMOTE_ADDR']}"; ?>
 <p/>
 <i>
 <?php echo "Served by: {$_SERVER['SERVER_ADDR']} at {$_SERVER['REQUEST_TIME']}"; ?>
 </i>
 </body>
</html>
