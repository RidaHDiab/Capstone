<?php
$tdatanews_capstone_users_chart = array();
$tdatanews_capstone_users_chart[".searchableFields"] = array();
$tdatanews_capstone_users_chart[".ShortName"] = "news_capstone_users_chart";
$tdatanews_capstone_users_chart[".OwnerID"] = "";
$tdatanews_capstone_users_chart[".OriginalTable"] = "dbo.News Capstone_users";


$tdatanews_capstone_users_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatanews_capstone_users_chart[".originalPagesByType"] = $tdatanews_capstone_users_chart[".pagesByType"];
$tdatanews_capstone_users_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatanews_capstone_users_chart[".originalPages"] = $tdatanews_capstone_users_chart[".pages"];
$tdatanews_capstone_users_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatanews_capstone_users_chart[".originalDefaultPages"] = $tdatanews_capstone_users_chart[".defaultPages"];

//	field labels
$fieldLabelsnews_capstone_users_chart = array();
$fieldToolTipsnews_capstone_users_chart = array();
$pageTitlesnews_capstone_users_chart = array();
$placeHoldersnews_capstone_users_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnews_capstone_users_chart["English"] = array();
	$fieldToolTipsnews_capstone_users_chart["English"] = array();
	$placeHoldersnews_capstone_users_chart["English"] = array();
	$pageTitlesnews_capstone_users_chart["English"] = array();
	$fieldLabelsnews_capstone_users_chart["English"]["ID"] = "ID";
	$fieldToolTipsnews_capstone_users_chart["English"]["ID"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["ID"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["username"] = "Username";
	$fieldToolTipsnews_capstone_users_chart["English"]["username"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["username"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["password"] = "Password";
	$fieldToolTipsnews_capstone_users_chart["English"]["password"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["password"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["email"] = "Email";
	$fieldToolTipsnews_capstone_users_chart["English"]["email"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["email"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["fullname"] = "Fullname";
	$fieldToolTipsnews_capstone_users_chart["English"]["fullname"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["fullname"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["groupid"] = "Groupid";
	$fieldToolTipsnews_capstone_users_chart["English"]["groupid"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["groupid"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["active"] = "Active";
	$fieldToolTipsnews_capstone_users_chart["English"]["active"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["active"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsnews_capstone_users_chart["English"]["ext_security_id"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["ext_security_id"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["userpic"] = "Userpic";
	$fieldToolTipsnews_capstone_users_chart["English"]["userpic"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["userpic"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["two_factor"] = "Two Factor";
	$fieldToolTipsnews_capstone_users_chart["English"]["two_factor"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["two_factor"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["reset_token"] = "Reset Token";
	$fieldToolTipsnews_capstone_users_chart["English"]["reset_token"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["reset_token"] = "";
	$fieldLabelsnews_capstone_users_chart["English"]["reset_date"] = "Reset Date";
	$fieldToolTipsnews_capstone_users_chart["English"]["reset_date"] = "";
	$placeHoldersnews_capstone_users_chart["English"]["reset_date"] = "";
	if (count($fieldToolTipsnews_capstone_users_chart["English"]))
		$tdatanews_capstone_users_chart[".isUseToolTips"] = true;
}


	$tdatanews_capstone_users_chart[".NCSearch"] = true;

	$tdatanews_capstone_users_chart[".ChartRefreshTime"] = 10;


$tdatanews_capstone_users_chart[".shortTableName"] = "news_capstone_users_chart";
$tdatanews_capstone_users_chart[".nSecOptions"] = 0;

$tdatanews_capstone_users_chart[".mainTableOwnerID"] = "";
$tdatanews_capstone_users_chart[".entityType"] = 3;
$tdatanews_capstone_users_chart[".connId"] = "News_at_192_168_1_225";


$tdatanews_capstone_users_chart[".strOriginalTableName"] = "dbo.News Capstone_users";

	



$tdatanews_capstone_users_chart[".showAddInPopup"] = false;

$tdatanews_capstone_users_chart[".showEditInPopup"] = false;

$tdatanews_capstone_users_chart[".showViewInPopup"] = false;

$tdatanews_capstone_users_chart[".listAjax"] = false;
//	temporary
//$tdatanews_capstone_users_chart[".listAjax"] = false;

	$tdatanews_capstone_users_chart[".audit"] = false;

	$tdatanews_capstone_users_chart[".locking"] = false;


$pages = $tdatanews_capstone_users_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanews_capstone_users_chart[".edit"] = true;
	$tdatanews_capstone_users_chart[".afterEditAction"] = 1;
	$tdatanews_capstone_users_chart[".closePopupAfterEdit"] = 1;
	$tdatanews_capstone_users_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanews_capstone_users_chart[".add"] = true;
$tdatanews_capstone_users_chart[".afterAddAction"] = 1;
$tdatanews_capstone_users_chart[".closePopupAfterAdd"] = 1;
$tdatanews_capstone_users_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanews_capstone_users_chart[".list"] = true;
}



$tdatanews_capstone_users_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanews_capstone_users_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanews_capstone_users_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanews_capstone_users_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanews_capstone_users_chart[".printFriendly"] = true;
}



$tdatanews_capstone_users_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanews_capstone_users_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanews_capstone_users_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanews_capstone_users_chart[".isUseAjaxSuggest"] = true;



									

$tdatanews_capstone_users_chart[".ajaxCodeSnippetAdded"] = false;

$tdatanews_capstone_users_chart[".buttonsAdded"] = false;

$tdatanews_capstone_users_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanews_capstone_users_chart[".isUseTimeForSearch"] = false;


$tdatanews_capstone_users_chart[".badgeColor"] = "1E90FF";


$tdatanews_capstone_users_chart[".allSearchFields"] = array();
$tdatanews_capstone_users_chart[".filterFields"] = array();
$tdatanews_capstone_users_chart[".requiredSearchFields"] = array();

$tdatanews_capstone_users_chart[".googleLikeFields"] = array();
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "ID";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "username";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "password";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "email";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "fullname";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "groupid";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "active";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "ext_security_id";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "two_factor";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "reset_token";
$tdatanews_capstone_users_chart[".googleLikeFields"][] = "reset_date";



$tdatanews_capstone_users_chart[".tableType"] = "chart";

$tdatanews_capstone_users_chart[".printerPageOrientation"] = 0;
$tdatanews_capstone_users_chart[".nPrinterPageScale"] = 100;

$tdatanews_capstone_users_chart[".nPrinterSplitRecords"] = 40;

$tdatanews_capstone_users_chart[".geocodingEnabled"] = false;



// chart settings
$tdatanews_capstone_users_chart[".chartType"] = "2DBar";
// end of chart settings








$tstrOrderBy = "";
$tdatanews_capstone_users_chart[".strOrderBy"] = $tstrOrderBy;

$tdatanews_capstone_users_chart[".orderindexes"] = array();


$tdatanews_capstone_users_chart[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id,  	userpic,  	two_factor,  	reset_token,  	reset_date";
$tdatanews_capstone_users_chart[".sqlFrom"] = "FROM dbo.[News Capstone_users]";
$tdatanews_capstone_users_chart[".sqlWhereExpr"] = "username <> ''";
$tdatanews_capstone_users_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanews_capstone_users_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanews_capstone_users_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatanews_capstone_users_chart[".highlightSearchResults"] = true;

$tableKeysnews_capstone_users_chart = array();
$tableKeysnews_capstone_users_chart[] = "ID";
$tdatanews_capstone_users_chart[".Keys"] = $tableKeysnews_capstone_users_chart;


$tdatanews_capstone_users_chart[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["ID"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["username"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["password"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["email"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["fullname"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["groupid"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["active"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["ext_security_id"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "ext_security_id";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","userpic");
	$fdata["FieldType"] = 205;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "NOT Empty";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["userpic"] = $fdata;
	//	two_factor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "two_factor";
	$fdata["GoodName"] = "two_factor";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","two_factor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "two_factor";

		$fdata["sourceSingle"] = "two_factor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "two_factor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["two_factor"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "two_factor";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","reset_token");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["reset_token"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "dbo.News Capstone_users";
	$fdata["Label"] = GetFieldLabel("dbo_News_Capstone_users_Chart","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanews_capstone_users_chart["reset_date"] = $fdata;
		$tdatanews_capstone_users_chart[".searchableFields"][] = "reset_date";

$tdatanews_capstone_users_chart[".groupChart"] = true;
$tdatanews_capstone_users_chart[".chartLabelInterval"] = 0;
$tdatanews_capstone_users_chart[".chartLabelField"] = "active";
$tdatanews_capstone_users_chart[".chartSeries"] = array();
$tdatanews_capstone_users_chart[".chartSeries"][] = array(
	"field" => "active",
	"total" => "COUNT"
);
	$tdatanews_capstone_users_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">dbo.News Capstone_users Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_bar</attr>
		</attr>

		<attr value="parameters">';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">active</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">active</attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Active Users").'</attr>
<attr value="foot">'.xmlencode("Active Users").'</attr>
<attr value="y_axis_label">'.xmlencode("active").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">false</attr>
<attr value="sstacked">false</attr>
<attr value="slog">true</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">1</attr>
<attr value="autoupmin">10</attr>';
$tdatanews_capstone_users_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">username</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","username")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">password</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","password")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">email</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","email")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">fullname</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","fullname")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">groupid</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","groupid")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">active</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","active")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">ext_security_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","ext_security_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">userpic</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","userpic")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">two_factor</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","two_factor")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="10">
		<attr value="name">reset_token</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","reset_token")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_users_chart[".chartXml"] .= '<attr value="11">
		<attr value="name">reset_date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_News_Capstone_users_Chart","reset_date")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatanews_capstone_users_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">dbo.News Capstone_users Chart</attr>
<attr value="short_table_name">news_capstone_users_chart</attr>
</attr>

</chart>';

$tables_data["dbo.News Capstone_users Chart"]=&$tdatanews_capstone_users_chart;
$field_labels["dbo_News_Capstone_users_Chart"] = &$fieldLabelsnews_capstone_users_chart;
$fieldToolTips["dbo_News_Capstone_users_Chart"] = &$fieldToolTipsnews_capstone_users_chart;
$placeHolders["dbo_News_Capstone_users_Chart"] = &$placeHoldersnews_capstone_users_chart;
$page_titles["dbo_News_Capstone_users_Chart"] = &$pageTitlesnews_capstone_users_chart;


changeTextControlsToDate( "dbo.News Capstone_users Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.News Capstone_users Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.News Capstone_users Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_news_capstone_users_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id,  	userpic,  	two_factor,  	reset_token,  	reset_date";
$proto0["m_strFrom"] = "FROM dbo.[News Capstone_users]";
$proto0["m_strWhere"] = "username <> ''";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "username <> ''";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<> ''";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto22["m_sql"] = "userpic";
$proto22["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "two_factor",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto24["m_sql"] = "two_factor";
$proto24["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto26["m_sql"] = "reset_token";
$proto26["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "dbo.News Capstone_users",
	"m_srcTableName" => "dbo.News Capstone_users Chart"
));

$proto28["m_sql"] = "reset_date";
$proto28["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "dbo.News Capstone_users";
$proto31["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "username";
$proto31["m_columns"][] = "password";
$proto31["m_columns"][] = "email";
$proto31["m_columns"][] = "fullname";
$proto31["m_columns"][] = "groupid";
$proto31["m_columns"][] = "active";
$proto31["m_columns"][] = "ext_security_id";
$proto31["m_columns"][] = "userpic";
$proto31["m_columns"][] = "two_factor";
$proto31["m_columns"][] = "reset_token";
$proto31["m_columns"][] = "reset_date";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "dbo.[News Capstone_users]";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "dbo.News Capstone_users Chart";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.News Capstone_users Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_news_capstone_users_chart = createSqlQuery_news_capstone_users_chart();


	
		;

												

$tdatanews_capstone_users_chart[".sqlquery"] = $queryData_news_capstone_users_chart;



$tdatanews_capstone_users_chart[".hasEvents"] = false;

?>