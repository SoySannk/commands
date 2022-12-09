<?php
 $user = $_SERVER['REQUEST_URI'];
 $foo = $_GET['foo'];

 header('Content-type: text/html');
 echo 'La URI solicitada es: ' . $uri;
 echo 'El valor del parámetro "foo" es: ' . $foo;

$r1 = "hola";
$respuestas = array($r1);
$random = array_rand($respuestas); 
echo $respuestas[$random];
?>
