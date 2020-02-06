<?php  
ini_set("safe_mode",false);
$order = 'python docker_python.py';  
$data = shell_exec($order);  
  
// var_dump($order);
var_dump("<pre>");
var_dump($data);  
var_dump("</pre>");
?>  

<input value="选择命令"></input>