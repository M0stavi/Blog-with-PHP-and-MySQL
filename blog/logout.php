<?php
include("path.php");
include(ROOT_PATH . "/app/database/db.php");

include(ROOT_PATH . "/app/helpers/validateUser.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

// session_start();

// $name = $_SESSION['username'];
// // ss($name);
// $value = "abc";

// setcookie($name, $value, time()+(1*24*60*60));

// if(!isset($_COOKIE[$name])) {
//     echo "Cookie named '" . $name . "' is not set!";
//   } else {
//     echo "Cookie '" . $name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$name];
//     $value2 =   $_COOKIE[$name];
//   }

// $value2 = $_COOKIE[$name];

// ss($value2);

$cookie_name = $_SESSION['username'];



$cookie_value =  date("Y/m/d") . ' ' . date("h:i:sa") ;

setcookie($cookie_name, $cookie_value, time() + 86400);



// ss($_COOKIE[$cookie_name]);

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy();

header('location: ' . BASE_URL . '/index.php');

?>

