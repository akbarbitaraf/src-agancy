<?php
//////////////////////  connect to database//////////////////////
function ConnectionDBMS($host,$username,$password,$dataBase)
{
    $con=mysqli_connect($host,$username,$password,$dataBase);
    mysqli_query($con,"SET NAMES 'UTF8'");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
    }
    return $con;
}
/////////////////////////////////// search traveler with mobile_phone////////////////////////////////////
function Searchwmobile_phone($con,$mobile_phone)
{
    $query="SELECT * FROM `travelers` WHERE `t-mobile`='".$mobile_phone."' or `t-phone`='".$mobile_phone."'";
    print_r($query);
    $result=mysqli_query($con,$query);
    print_r($result);
    $result=mysqli_fetch_assoc($result);
    return $result[0]." ".$result[1]." ".$result[2];

}
function SelectAll()
{}
function InsertDB()
{}
function DeleteDB()
{}
function UpdateDB()
{}


?>