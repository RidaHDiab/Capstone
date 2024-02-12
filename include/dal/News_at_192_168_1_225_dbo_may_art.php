<?php
$dalTablemay_art = array();
$dalTablemay_art["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablemay_art["title"] = array("type"=>200,"varname"=>"title", "name" => "title", "autoInc" => "0");
$dalTablemay_art["description"] = array("type"=>200,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablemay_art["body"] = array("type"=>200,"varname"=>"body", "name" => "body", "autoInc" => "0");
$dalTablemay_art["keywords"] = array("type"=>200,"varname"=>"keywords", "name" => "keywords", "autoInc" => "0");
$dalTablemay_art["author"] = array("type"=>200,"varname"=>"author", "name" => "author", "autoInc" => "0");
$dalTablemay_art["publishedTime"] = array("type"=>7,"varname"=>"publishedTime", "name" => "publishedTime", "autoInc" => "0");
$dalTablemay_art["id"]["key"]=true;

$dal_info["News_at_192_168_1_225_dbo_may_art"] = &$dalTablemay_art;
?>