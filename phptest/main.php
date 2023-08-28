<?php
include 'function.php';
include 'class.php';


echo Arikmitik(54,46);
echo manga('yellow', 'big');

$tao = new person;
$tao->set_name("Juan");

echo $tao->get_name(); 
echo "<br/>";
$bata = new boy;
$bata->set_height("4'2");
echo $bata->get_height();
echo "<br/>";
echo $bata->set_name("Juan Carlo");
echo $bata->get_name();


?>