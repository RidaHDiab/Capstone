<?php
$dalTablenews_capstone_audit = array();
$dalTablenews_capstone_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablenews_capstone_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime", "autoInc" => "0");
$dalTablenews_capstone_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip", "autoInc" => "0");
$dalTablenews_capstone_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user", "autoInc" => "0");
$dalTablenews_capstone_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table", "autoInc" => "0");
$dalTablenews_capstone_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action", "autoInc" => "0");
$dalTablenews_capstone_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablenews_capstone_audit["id"]["key"]=true;

$dal_info["News_at_192_168_1_225_dbo_news_capstone_audit"] = &$dalTablenews_capstone_audit;
?>