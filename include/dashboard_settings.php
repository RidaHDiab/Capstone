<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard["English"] = array();
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_id"] = "Id";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_title"] = "Title";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_description"] = "Description";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_body"] = "Body";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_keywords"] = "Keywords";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_author"] = "Author";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_id_may"] = "Id May";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_id_bbc"] = "Id Bbc";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_publishedTime"] = "Published Time";
	$fieldLabelsdashboard["English"]["dbo_jaz_art_Chart_image_url"] = "Image Url";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_ID"] = "ID";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_username"] = "Username";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_password"] = "Password";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_email"] = "Email";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_fullname"] = "Fullname";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_groupid"] = "Groupid";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_active"] = "Active";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_ext_security_id"] = "Ext Security Id";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_two_factor"] = "Two Factor";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_reset_token"] = "Reset Token";
	$fieldLabelsdashboard["English"]["dbo_News_Capstone_users_Chart_reset_date"] = "Reset Date";
	$fieldLabelsdashboard["English"]["dbo_news_capstone_audit_Chart_id"] = "Id";
	$fieldLabelsdashboard["English"]["dbo_news_capstone_audit_Chart_datetime"] = "Datetime";
	$fieldLabelsdashboard["English"]["dbo_news_capstone_audit_Chart_ip"] = "Ip";
	$fieldLabelsdashboard["English"]["dbo_news_capstone_audit_Chart_user"] = "User";
	$fieldLabelsdashboard["English"]["dbo_news_capstone_audit_Chart_table"] = "Table";
	$fieldLabelsdashboard["English"]["dbo_news_capstone_audit_Chart_action"] = "Action";
	$fieldLabelsdashboard["English"]["dbo_news_capstone_audit_Chart_description"] = "Description";
	$fieldLabelsdashboard["English"]["dbo_bbc_art_Chart_id"] = "Id";
	$fieldLabelsdashboard["English"]["dbo_bbc_art_Chart_title"] = "Title";
	$fieldLabelsdashboard["English"]["dbo_bbc_art_Chart_description"] = "Description";
	$fieldLabelsdashboard["English"]["dbo_bbc_art_Chart_body"] = "Body";
	$fieldLabelsdashboard["English"]["dbo_bbc_art_Chart_keywords"] = "Keywords";
	$fieldLabelsdashboard["English"]["dbo_bbc_art_Chart_author"] = "Author";
	$fieldLabelsdashboard["English"]["dbo_bbc_art_Chart_publishedTime"] = "Published Time";
	$fieldLabelsdashboard["English"]["dbo_may_art_Chart_id"] = "Id";
	$fieldLabelsdashboard["English"]["dbo_may_art_Chart_title"] = "Title";
	$fieldLabelsdashboard["English"]["dbo_may_art_Chart_description"] = "Description";
	$fieldLabelsdashboard["English"]["dbo_may_art_Chart_body"] = "Body";
	$fieldLabelsdashboard["English"]["dbo_may_art_Chart_keywords"] = "Keywords";
	$fieldLabelsdashboard["English"]["dbo_may_art_Chart_author"] = "Author";
	$fieldLabelsdashboard["English"]["dbo_may_art_Chart_publishedTime"] = "Published Time";
}

/*
//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"id" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"title" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"description" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"body" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_body"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"keywords" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_keywords"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"author" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_author"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"id_may" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_id_may"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"id_bbc" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_id_bbc"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"publishedTime" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_publishedTime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.jaz_art Chart", "field"=>"image_url" );
$tdatadashboard[".searchFields"]["dbo_jaz_art_Chart_image_url"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"ID" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_ID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"username" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_username"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"password" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_password"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"email" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"fullname" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_fullname"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"groupid" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_groupid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"active" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_active"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"ext_security_id" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_ext_security_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"two_factor" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_two_factor"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"reset_token" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_reset_token"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.News Capstone_users Chart", "field"=>"reset_date" );
$tdatadashboard[".searchFields"]["dbo_News_Capstone_users_Chart_reset_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.news capstone_audit Chart", "field"=>"id" );
$tdatadashboard[".searchFields"]["dbo_news_capstone_audit_Chart_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.news capstone_audit Chart", "field"=>"datetime" );
$tdatadashboard[".searchFields"]["dbo_news_capstone_audit_Chart_datetime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.news capstone_audit Chart", "field"=>"ip" );
$tdatadashboard[".searchFields"]["dbo_news_capstone_audit_Chart_ip"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.news capstone_audit Chart", "field"=>"user" );
$tdatadashboard[".searchFields"]["dbo_news_capstone_audit_Chart_user"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.news capstone_audit Chart", "field"=>"table" );
$tdatadashboard[".searchFields"]["dbo_news_capstone_audit_Chart_table"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.news capstone_audit Chart", "field"=>"action" );
$tdatadashboard[".searchFields"]["dbo_news_capstone_audit_Chart_action"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.news capstone_audit Chart", "field"=>"description" );
$tdatadashboard[".searchFields"]["dbo_news_capstone_audit_Chart_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.bbc_art Chart", "field"=>"id" );
$tdatadashboard[".searchFields"]["dbo_bbc_art_Chart_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.bbc_art Chart", "field"=>"title" );
$tdatadashboard[".searchFields"]["dbo_bbc_art_Chart_title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.bbc_art Chart", "field"=>"description" );
$tdatadashboard[".searchFields"]["dbo_bbc_art_Chart_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.bbc_art Chart", "field"=>"body" );
$tdatadashboard[".searchFields"]["dbo_bbc_art_Chart_body"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.bbc_art Chart", "field"=>"keywords" );
$tdatadashboard[".searchFields"]["dbo_bbc_art_Chart_keywords"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.bbc_art Chart", "field"=>"author" );
$tdatadashboard[".searchFields"]["dbo_bbc_art_Chart_author"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.bbc_art Chart", "field"=>"publishedTime" );
$tdatadashboard[".searchFields"]["dbo_bbc_art_Chart_publishedTime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.may_art Chart", "field"=>"id" );
$tdatadashboard[".searchFields"]["dbo_may_art_Chart_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.may_art Chart", "field"=>"title" );
$tdatadashboard[".searchFields"]["dbo_may_art_Chart_title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.may_art Chart", "field"=>"description" );
$tdatadashboard[".searchFields"]["dbo_may_art_Chart_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.may_art Chart", "field"=>"body" );
$tdatadashboard[".searchFields"]["dbo_may_art_Chart_body"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.may_art Chart", "field"=>"keywords" );
$tdatadashboard[".searchFields"]["dbo_may_art_Chart_keywords"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.may_art Chart", "field"=>"author" );
$tdatadashboard[".searchFields"]["dbo_may_art_Chart_author"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"dbo.may_art Chart", "field"=>"publishedTime" );
$tdatadashboard[".searchFields"]["dbo_may_art_Chart_publishedTime"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_id";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_title";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_description";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_body";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_keywords";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_author";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_id_may";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_id_bbc";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_publishedTime";
$tdatadashboard[".allSearchFields"][] = "dbo_jaz_art_Chart_image_url";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_ID";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_username";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_password";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_email";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_fullname";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_groupid";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_active";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_ext_security_id";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_two_factor";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_reset_token";
$tdatadashboard[".allSearchFields"][] = "dbo_News_Capstone_users_Chart_reset_date";
$tdatadashboard[".allSearchFields"][] = "dbo_news_capstone_audit_Chart_id";
$tdatadashboard[".allSearchFields"][] = "dbo_news_capstone_audit_Chart_datetime";
$tdatadashboard[".allSearchFields"][] = "dbo_news_capstone_audit_Chart_ip";
$tdatadashboard[".allSearchFields"][] = "dbo_news_capstone_audit_Chart_user";
$tdatadashboard[".allSearchFields"][] = "dbo_news_capstone_audit_Chart_table";
$tdatadashboard[".allSearchFields"][] = "dbo_news_capstone_audit_Chart_action";
$tdatadashboard[".allSearchFields"][] = "dbo_news_capstone_audit_Chart_description";
$tdatadashboard[".allSearchFields"][] = "dbo_bbc_art_Chart_id";
$tdatadashboard[".allSearchFields"][] = "dbo_bbc_art_Chart_title";
$tdatadashboard[".allSearchFields"][] = "dbo_bbc_art_Chart_description";
$tdatadashboard[".allSearchFields"][] = "dbo_bbc_art_Chart_body";
$tdatadashboard[".allSearchFields"][] = "dbo_bbc_art_Chart_keywords";
$tdatadashboard[".allSearchFields"][] = "dbo_bbc_art_Chart_author";
$tdatadashboard[".allSearchFields"][] = "dbo_bbc_art_Chart_publishedTime";
$tdatadashboard[".allSearchFields"][] = "dbo_may_art_Chart_id";
$tdatadashboard[".allSearchFields"][] = "dbo_may_art_Chart_title";
$tdatadashboard[".allSearchFields"][] = "dbo_may_art_Chart_description";
$tdatadashboard[".allSearchFields"][] = "dbo_may_art_Chart_body";
$tdatadashboard[".allSearchFields"][] = "dbo_may_art_Chart_keywords";
$tdatadashboard[".allSearchFields"][] = "dbo_may_art_Chart_author";
$tdatadashboard[".allSearchFields"][] = "dbo_may_art_Chart_publishedTime";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
*/

/*
$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "dbo_may_art_Chart_chart", "table" => "dbo.may_art Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dbo_bbc_art_Chart_chart", "table" => "dbo.bbc_art Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dbo_news_capstone_audit_Chart_chart", "table" => "dbo.news capstone_audit Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dbo_News_Capstone_users_Chart_chart", "table" => "dbo.News Capstone_users Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "dbo_jaz_art_Chart_chart", "table" => "dbo.jaz_art Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
*/
$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;




$tdatadashboard[".hasEvents"] = false;


$tdatadashboard[".tableType"] = "dashboard";


			
$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>