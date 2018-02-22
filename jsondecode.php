<?php
$array=array("firstname"=>"suman","lastname"=>"Gangopaddhay","email"=>"tanmayhstu103@gmail.com");
$json_encode=json_encode($array);
var_dump(json_decode($json_encode));
?>
