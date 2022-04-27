<?
$vstCount= 0;
if(isset($_COOKIE["vstCount"]))
    $vstCount= $_COOKIE["vstCount"];
$vstCount++;
$lstVisit= "";
if(isset($_COOKIE["lstVisit"]))
    $lstVisit=$_COOKIE["lstVisit"];
$lstVisit= date("h:i:s");
setcookie("vstCount",$vstCount);
setcookie("lstVisit",$lstVisit);

echo "$vstCount , $lstVisit";