<?php
$dalTableNews_Capstoneugmembers = array();
$dalTableNews_Capstoneugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTableNews_Capstoneugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTableNews_Capstoneugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTableNews_Capstoneugmembers["UserName"]["key"]=true;
$dalTableNews_Capstoneugmembers["GroupID"]["key"]=true;
$dalTableNews_Capstoneugmembers["Provider"]["key"]=true;

$dal_info["News_at_192_168_1_225_dbo_News_Capstoneugmembers"] = &$dalTableNews_Capstoneugmembers;
?>