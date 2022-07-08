<?php
$user='engelbaum';
$mot_de_passe='Eifersucht78';
try {
    $db=new PDO('mysql:host=localhost;dbname=gestion_contactes',$user,$mot_de_passe);
   echo 'ok';
} catch (PDOException $e) {
   print'Error!!!!!!:'.$e->getMessage();
}