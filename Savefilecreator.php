<?php
require 'Functions.php';
require 'Credentials.php';
$filename=$_POST["filename"];
$data=$_POST["data"];
$res=createsavefile($projectsdir.$filename,$data);
return $res;
?>
