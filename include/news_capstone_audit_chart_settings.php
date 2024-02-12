<?php
$tdatanews_capstone_audit_chart = array();
$tdatanews_capstone_audit_chart[".searchableFields"] = array();
$tdatanews_capstone_audit_chart[".ShortName"] = "news_capstone_audit_chart";
$tdatanews_capstone_audit_chart[".OwnerID"] = "";
$tdatanews_capstone_audit_chart[".OriginalTable"] = "dbo.news capstone_audit";


$tdatanews_capstone_audit_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatanews_capstone_audit_chart[".originalPagesByType"] = $tdatanews_capstone_audit_chart[".pagesByType"];
$tdatanews_capstone_audit_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatanews_capstone_audit_chart[".originalPages"] = $tdatanews_capstone_audit_chart[".pages"];
$tdatanews_capstone_audit_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatanews_capstone_audit_chart[".originalDefaultPages"] = $tdatanews_capstone_audit_chart[".defaultPages"];

//	field labels
$fieldLabelsnews_capstone_audit_chart = array();
$fieldToolTipsnews_capstone_audit_chart = array();
$pageTitlesnews_capstone_audit_chart = array();
$placeHoldersnews_capstone_audit_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnews_capstone_audit_chart["English"] = array();
	$fieldToolTipsnews_capstone_audit_chart["English"] = array();
	$placeHoldersnews_capstone_audit_chart["English"] = array();
	$pageTitlesnews_capstone_audit_chart["English"] = array();
	$fieldLabelsnews_capstone_audit_chart["English"]["id"] = "Id";
	$fieldToolTipsnews_capstone_audit_chart["English"]["id"] = "";
	$placeHoldersnews_capstone_audit_chart["English"]["id"] = "";
	$fieldLabelsnews_capstone_audit_chart["English"]["datetime"] = "Datetime";
	$fieldToolTipsnews_capstone_audit_chart["English"]["datetime"] = "";
	$placeHoldersnews_capstone_audit_chart["English"]["datetime"] = "";
	$fieldLabelsnews_capstone_audit_chart["English"]["ip"] = "Ip";
	$fieldToolTipsnews_capstone_audit_chart["English"]["ip"] = "";
	$placeHoldersnews_capstone_audit_chart["English"]["ip"] = "";
	$fieldLabelsnews_capstone_audit_chart["English"]["user"] = "User";
	$fieldToolTipsnews_capstone_audit_chart["English"]["user"] = "";
	$placeHoldersnews_capstone_audit_chart["English"]["user"] = "";
	$fieldLabelsnews_capstone_audit_chart["English"]["table"] = "Table";
	$fieldToolTipsnews_capstone_audit_chart["English"]["table"] = "";
	$placeHoldersnews_capstone_audit_chart["English"]["table"] = "";
	$fieldLabelsnews_capstone_audit_chart["English"]["action"] = "Action";
	$fieldToolTipsnews_capstone_audit_chart["English"]["action"] = "";
	$placeHoldersnews_capstone_audit_chart["English"]["action"] = "";
	$fieldLabelsnews_capstone_audit_chart["English"]["description"] = "Description";
	$fieldToolTipsnews_capstone_audit_chart["English"]["description"] = "";
	$placeHoldersnews_capstone_audit_chart["English"]["description"] = "";
	$fieldLabelsnews_capstone_audit_chart["English"]["visits"] = "Visits";
	$fieldToolTipsnews_capstone_audit_chart["English"]["visits"] = "";
	$placeHoldersnews_capstone_audit_chart["English"]["visits"] = "";
	if (count($fieldToolTipsnews_capstone_audit_chart["English"]))
		$tdatanews_capstone_audit_chart[".isUseToolTips"] = true;
}


	$tdatanews_capstone_audit_chart[".NCSearch"] = true;

	$tdatanews_capstone_audit_chart[".ChartRefreshTime"] = 10;


$tdatanews_capstone_audit_chart[".shortTableName"] = "news_capstone_audit_chart";
$tdatanews_capstone_audit_chart[".nSecOptions"] = 0;

$tdatanews_capstone_audit_chart[".mainTableOwnerID"] = "";
$tdatanews_capstone_audit_chart[".entityType"] = 3;
$tdatanews_capstone_audit_chart[".connId"] = "News_at_192_168_1_225";


$tdatanews_capstone_audit_chart[".strOriginalTableName"] = "dbo.news capstone_audit";

	



$tdatanews_capstone_audit_chart[".showAddInPopup"] = false;

$tdatanews_capstone_audit_chart[".showEditInPopup"] = false;

$tdatanews_capstone_audit_chart[".showViewInPopup"] = false;

$tdatanews_capstone_audit_chart[".listAjax"] = false;
//	temporary
//$tdatanews_capstone_audit_chart[".listAjax"] = false;

	$tdatanews_capstone_audit_chart[".audit"] = false;

	$tdatanews_capstone_audit_chart[".locking"] = false;


$pages = $tdatanews_capstone_audit_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanews_capstone_audit_chart[".edit"] = true;
	$tdatanews_capstone_audit_chart[".afterEditAction"] = 1;
	$tdatanews_capstone_audit_chart[".closePopupAfterEdit"] = 1;
	$tdatanews_capstone_audit_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanews_capstone_audit_chart[".add"] = true;
$tdatanews_capstone_audit_chart[".afterAddAction"] = 1;
$tdatanews_capstone_audit_chart[".closePopupAfterAdd"] = 1;
$tdatanews_capstone_audit_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanews_capstone_audit_chart[".list"] = true;
}



$tdatanews_capstone_audit_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanews_capstone_audit_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanews_capstone_audit_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanews_capstone_audit_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanews_capstone_audit_chart[".printFriendly"] = true;
}



$tdatanews_capstone_audit_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanews_capstone_audit_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanews_capstone_audit_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanews_capstone_audit_chart[".isUseAjaxSuggest"] = true;



									

$tdatanews_capstone_audit_chart[".ajaxCodeSnippetAdded"] = false;

$tdatanews_capstone_audit_chart[".buttonsAdded"] = false;

$tdatanews_capstone_audit_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanews_capstone_audit_chart[".isUseTimeForSearch"] = false;


$tdatanews_capstone_audit_chart[".badgeColor"] = "9ACD32";


$tdatanews_capstone_audit_chart[".allSearchFields"] = array();
$tdatanews_capstone_audit_chart[".filterFields"] = array();
$tdatanews_capstone_audit_chart[".requiredSearchFields"] = array();

$tdatanews_capstone_audit_chart[".googleLikeFields"] = array();
$tdatanews_capstone_audit_chart[".googleLikeFields"][] = "id";
$tdatanews_capstone_audit_chart[".googleLikeFields"][] = "visits";
$tdatanews_capstone_audit_chart[".googleLikeFields"][] = "datetime";
$tdatanews_capstone_audit_chart[".googleLikeFields"][] = "ip";
$tdatanews_capstone_audit_chart[".googleLikeFields"][] = "user";
$tdatanews_capstone_audit_chart[".googleLikeFields"][] = "table";
$tdatanews_capstone_audit_chart[".googleLikeFields"][] = "action";
$tdatanews_capstone_audit_chart[".googleLikeFields"][] = "description";



$tdatanews_capstone_audit_chart[".tableType"] = "chart";

$tdatanews_capstone_audit_chart[".printerPageOrientation"] = 0;
$tdatanews_capstone_audit_chart[".nPrinterPageScale"] = 100;

$tdatanews_capstone_audit_chart[".nPrinterSplitRecords"] = 40;

$tdatanews_capstone_audit_chart[".geocodingEnabled"] = false;



// chart settings
$tdatanews_capstone_audit_chart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
$tdatanews_capstone_audit_chart[".strOrderBy"] = $tstrOrderBy;

$tdatanews_capstone_audit_chart[".orderindexes"] = array();


$tdatanews_capstone_audit_chart[".sqlHead"] = "SELECT MAX(id) AS id,      COUNT(id) AS visits,      [datetime],      ip,      [user],      [table],      [action],      TRY_CAST(description AS VARCHAR(MAX)) AS description";
$tdatanews_capstone_audit_chart[".sqlFrom"] = "FROM dbo.[news capstone_audit]";
$tdatanews_capstone_audit_chart[".sqlWhereExpr"] = "action <> 'failed login'";
$tdatanews_capstone_audit_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanews_capstone_audit_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanews_capstone_audit_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatanews_capstone_audit_chart[".highlightSearchResults"] = true;

$tableKeysnews_capstone_audit_chart = array();
$tableKeysnews_capstone_audit_chart[] = "id";
$tdatanews_capstone_audit_chart[".Keys"] = $tableKeysnews_capstone_audit_chart;


$tdatanews_capstone_audit_chart[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_news_capstone_audit_Chart","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(id)";

	
	
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


	$tdatanews_capstone_audit_chart["id"] = $fdata;
		$tdatanews_capstone_audit_chart[".searchableFields"][] = "id";
//	visits
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "visits";
	$fdata["GoodName"] = "visits";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_news_capstone_audit_Chart","visits");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "visits";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(id)";

	
	
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


	$tdatanews_capstone_audit_chart["visits"] = $fdata;
		$tdatanews_capstone_audit_chart[".searchableFields"][] = "visits";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "dbo.news capstone_audit";
	$fdata["Label"] = GetFieldLabel("dbo_news_capstone_audit_Chart","datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datetime";

		$fdata["sourceSingle"] = "datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[datetime]";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatanews_capstone_audit_chart["datetime"] = $fdata;
		$tdatanews_capstone_audit_chart[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "dbo.news capstone_audit";
	$fdata["Label"] = GetFieldLabel("dbo_news_capstone_audit_Chart","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

		$fdata["sourceSingle"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatanews_capstone_audit_chart["ip"] = $fdata;
		$tdatanews_capstone_audit_chart[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "dbo.news capstone_audit";
	$fdata["Label"] = GetFieldLabel("dbo_news_capstone_audit_Chart","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

		$fdata["sourceSingle"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[user]";

	
	
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


	$tdatanews_capstone_audit_chart["user"] = $fdata;
		$tdatanews_capstone_audit_chart[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "dbo.news capstone_audit";
	$fdata["Label"] = GetFieldLabel("dbo_news_capstone_audit_Chart","table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table";

		$fdata["sourceSingle"] = "table";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[table]";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatanews_capstone_audit_chart["table"] = $fdata;
		$tdatanews_capstone_audit_chart[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "dbo.news capstone_audit";
	$fdata["Label"] = GetFieldLabel("dbo_news_capstone_audit_Chart","action");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "action";

		$fdata["sourceSingle"] = "action";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[action]";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatanews_capstone_audit_chart["action"] = $fdata;
		$tdatanews_capstone_audit_chart[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_news_capstone_audit_Chart","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TRY_CAST(description AS VARCHAR(MAX))";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
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


	$tdatanews_capstone_audit_chart["description"] = $fdata;
		$tdatanews_capstone_audit_chart[".searchableFields"][] = "description";

$tdatanews_capstone_audit_chart[".groupChart"] = true;
$tdatanews_capstone_audit_chart[".chartLabelInterval"] = 0;
$tdatanews_capstone_audit_chart[".chartLabelField"] = "user";
$tdatanews_capstone_audit_chart[".chartSeries"] = array();
$tdatanews_capstone_audit_chart[".chartSeries"][] = array(
	"field" => "visits",
	"total" => "COUNT"
);
	$tdatanews_capstone_audit_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">dbo.news capstone_audit Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">visits</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">user</attr>
	</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="head">'.xmlencode("User Visits").'</attr>
<attr value="foot">'.xmlencode("USER").'</attr>
<attr value="y_axis_label">'.xmlencode("id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">false</attr>
<attr value="sstacked">false</attr>
<attr value="slog">true</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">1</attr>
<attr value="autoupmin">10</attr>';
$tdatanews_capstone_audit_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_news_capstone_audit_Chart","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">visits</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_news_capstone_audit_Chart","visits")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">datetime</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_news_capstone_audit_Chart","datetime")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">ip</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_news_capstone_audit_Chart","ip")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">user</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_news_capstone_audit_Chart","user")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">table</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_news_capstone_audit_Chart","table")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">action</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_news_capstone_audit_Chart","action")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanews_capstone_audit_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">description</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_news_capstone_audit_Chart","description")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatanews_capstone_audit_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">dbo.news capstone_audit Chart</attr>
<attr value="short_table_name">news_capstone_audit_chart</attr>
</attr>

</chart>';

$tables_data["dbo.news capstone_audit Chart"]=&$tdatanews_capstone_audit_chart;
$field_labels["dbo_news_capstone_audit_Chart"] = &$fieldLabelsnews_capstone_audit_chart;
$fieldToolTips["dbo_news_capstone_audit_Chart"] = &$fieldToolTipsnews_capstone_audit_chart;
$placeHolders["dbo_news_capstone_audit_Chart"] = &$placeHoldersnews_capstone_audit_chart;
$page_titles["dbo_news_capstone_audit_Chart"] = &$pageTitlesnews_capstone_audit_chart;


changeTextControlsToDate( "dbo.news capstone_audit Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.news capstone_audit Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.news capstone_audit Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_news_capstone_audit_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MAX(id) AS id,      COUNT(id) AS visits,      [datetime],      ip,      [user],      [table],      [action],      TRY_CAST(description AS VARCHAR(MAX)) AS description";
$proto0["m_strFrom"] = "FROM dbo.[news capstone_audit]";
$proto0["m_strWhere"] = "action <> 'failed login'";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "action <> 'failed login'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<> 'failed login'";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_MAX";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "MAX(id)";
$proto6["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "id";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_COUNT";
$proto10["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "COUNT(id)";
$proto9["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "visits";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto12["m_sql"] = "[datetime]";
$proto12["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto14["m_sql"] = "ip";
$proto14["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto16["m_sql"] = "[user]";
$proto16["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto18["m_sql"] = "[table]";
$proto18["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto20["m_sql"] = "[action]";
$proto20["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "description AS VARCHAR(MAX)"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "TRY_CAST";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "TRY_CAST(description AS VARCHAR(MAX))";
$proto22["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "description";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "dbo.news capstone_audit";
$proto26["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "datetime";
$proto26["m_columns"][] = "ip";
$proto26["m_columns"][] = "user";
$proto26["m_columns"][] = "table";
$proto26["m_columns"][] = "action";
$proto26["m_columns"][] = "description";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "dbo.[news capstone_audit]";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "dbo.news capstone_audit Chart";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "dbo.news capstone_audit",
	"m_srcTableName" => "dbo.news capstone_audit Chart"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$proto40=array();
$proto40["m_functiontype"] = "SQLF_CUSTOM";
$proto40["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "description AS VARCHAR(MAX)"
));

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "TRY_CAST";
$obj = new SQLFunctionCall($proto40);

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.news capstone_audit Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_news_capstone_audit_chart = createSqlQuery_news_capstone_audit_chart();


	
		;

								

$tdatanews_capstone_audit_chart[".sqlquery"] = $queryData_news_capstone_audit_chart;



$tdatanews_capstone_audit_chart[".hasEvents"] = false;

?>