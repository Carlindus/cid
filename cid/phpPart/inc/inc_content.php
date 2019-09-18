
  <!-- ##### Creating the DOM content  ##### -->

<?php 

// autoload Components
spl_autoload_register(function ($class_name) {
  require __DIR__.'/../components/' . $class_name . '.php';
});

// Create the desktop content 
$myDesktop = new Desktop($CONTENT);
$DOM = $myDesktop->createDesktop();
echo $DOM;

  function isHttpUrl($urlToCheck){
    return (strtoupper(substr($urlToCheck, 0, 4)) === "HTTP") ? true : false;
  }

?>