<?php
include("../WebServices/NuSOAP-master/lib/nusoap.php");
include("../WebServices/Functions/GetMessage.php");
include("../WebServices/Functions/Functions.php");
$server=new nusoap_server();
$server->configureWSDL("webservice_agancy");
$server->register("getmessage",array("parametone"=>"xsd:string" ),array("sum"=>"xsd:string"));
$server->register("ConnectionDBMS",array("host"=>"xsd:string","username"=>"xsd:string","password"=>"xsd:string","database"=>"xsd:string"),
    array("state"=>"xsd:boolean"));
$server->register("Searchwmobile_phone",array("mobile_phone"=>"xsd:string"),array());
$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);
?>