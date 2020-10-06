<?php
header('Access-Control-Allow-Origin: *');
//$dataRusTest = "абвгдеежзийклмнопрсту";
$headers = "From: serzin2002@gmail.com";

/* замените электронную почту на действующую почту, с которой вам будет приходить письмо */
$message = $_POST["name"].'-'.$_POST["comment"].'-'.$_POST["email"]; //$message
mail('serzin2002@gmail.com', 'Tilda TEST', $message , $headers);
/* замените электронную почту на вашу действующую почту, на которую вам будет приходить письмо */

echo"ok";

?>