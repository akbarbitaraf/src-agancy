<?php
include_once('../WebService/NuSOAP-master/lib/nusoap.php');
$param=array("name"=>"akbar bitaraf");
$service=new nusoap_client("http://localhost/WebService/WebServices.php?wsdl");
$name=$service->call("getmessage",$param);
$con=$service->call("ConnectionDBMS",array("localhost","root","","src-agancy"));
echo $con;
$conn=$service->call("Searchwmobile_phone",array("09370539507"));
echo $name ." ".$con.$conn;

?>