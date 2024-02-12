<?php
$tdatamay_art_chart = array();
$tdatamay_art_chart[".searchableFields"] = array();
$tdatamay_art_chart[".ShortName"] = "may_art_chart";
$tdatamay_art_chart[".OwnerID"] = "";
$tdatamay_art_chart[".OriginalTable"] = "dbo.may_art";


$tdatamay_art_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdatamay_art_chart[".originalPagesByType"] = $tdatamay_art_chart[".pagesByType"];
$tdatamay_art_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdatamay_art_chart[".originalPages"] = $tdatamay_art_chart[".pages"];
$tdatamay_art_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdatamay_art_chart[".originalDefaultPages"] = $tdatamay_art_chart[".defaultPages"];

//	field labels
$fieldLabelsmay_art_chart = array();
$fieldToolTipsmay_art_chart = array();
$pageTitlesmay_art_chart = array();
$placeHoldersmay_art_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmay_art_chart["English"] = array();
	$fieldToolTipsmay_art_chart["English"] = array();
	$placeHoldersmay_art_chart["English"] = array();
	$pageTitlesmay_art_chart["English"] = array();
	$fieldLabelsmay_art_chart["English"]["id"] = "Id";
	$fieldToolTipsmay_art_chart["English"]["id"] = "";
	$placeHoldersmay_art_chart["English"]["id"] = "";
	$fieldLabelsmay_art_chart["English"]["title"] = "Title";
	$fieldToolTipsmay_art_chart["English"]["title"] = "";
	$placeHoldersmay_art_chart["English"]["title"] = "";
	$fieldLabelsmay_art_chart["English"]["description"] = "Description";
	$fieldToolTipsmay_art_chart["English"]["description"] = "";
	$placeHoldersmay_art_chart["English"]["description"] = "";
	$fieldLabelsmay_art_chart["English"]["body"] = "Body";
	$fieldToolTipsmay_art_chart["English"]["body"] = "";
	$placeHoldersmay_art_chart["English"]["body"] = "";
	$fieldLabelsmay_art_chart["English"]["keywords"] = "Keywords";
	$fieldToolTipsmay_art_chart["English"]["keywords"] = "";
	$placeHoldersmay_art_chart["English"]["keywords"] = "";
	$fieldLabelsmay_art_chart["English"]["author"] = "Author";
	$fieldToolTipsmay_art_chart["English"]["author"] = "";
	$placeHoldersmay_art_chart["English"]["author"] = "";
	$fieldLabelsmay_art_chart["English"]["publishedTime"] = "Published Time";
	$fieldToolTipsmay_art_chart["English"]["publishedTime"] = "";
	$placeHoldersmay_art_chart["English"]["publishedTime"] = "";
	if (count($fieldToolTipsmay_art_chart["English"]))
		$tdatamay_art_chart[".isUseToolTips"] = true;
}


	$tdatamay_art_chart[".NCSearch"] = true;

	$tdatamay_art_chart[".ChartRefreshTime"] = 10;


$tdatamay_art_chart[".shortTableName"] = "may_art_chart";
$tdatamay_art_chart[".nSecOptions"] = 0;

$tdatamay_art_chart[".mainTableOwnerID"] = "";
$tdatamay_art_chart[".entityType"] = 3;
$tdatamay_art_chart[".connId"] = "News_at_192_168_1_225";


$tdatamay_art_chart[".strOriginalTableName"] = "dbo.may_art";

	



$tdatamay_art_chart[".showAddInPopup"] = false;

$tdatamay_art_chart[".showEditInPopup"] = false;

$tdatamay_art_chart[".showViewInPopup"] = false;

$tdatamay_art_chart[".listAjax"] = false;
//	temporary
//$tdatamay_art_chart[".listAjax"] = false;

	$tdatamay_art_chart[".audit"] = false;

	$tdatamay_art_chart[".locking"] = false;


$pages = $tdatamay_art_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamay_art_chart[".edit"] = true;
	$tdatamay_art_chart[".afterEditAction"] = 1;
	$tdatamay_art_chart[".closePopupAfterEdit"] = 1;
	$tdatamay_art_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamay_art_chart[".add"] = true;
$tdatamay_art_chart[".afterAddAction"] = 1;
$tdatamay_art_chart[".closePopupAfterAdd"] = 1;
$tdatamay_art_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamay_art_chart[".list"] = true;
}



$tdatamay_art_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamay_art_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamay_art_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamay_art_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamay_art_chart[".printFriendly"] = true;
}



$tdatamay_art_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamay_art_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamay_art_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamay_art_chart[".isUseAjaxSuggest"] = true;



									

$tdatamay_art_chart[".ajaxCodeSnippetAdded"] = false;

$tdatamay_art_chart[".buttonsAdded"] = false;

$tdatamay_art_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamay_art_chart[".isUseTimeForSearch"] = false;


$tdatamay_art_chart[".badgeColor"] = "CD853F";


$tdatamay_art_chart[".allSearchFields"] = array();
$tdatamay_art_chart[".filterFields"] = array();
$tdatamay_art_chart[".requiredSearchFields"] = array();

$tdatamay_art_chart[".googleLikeFields"] = array();
$tdatamay_art_chart[".googleLikeFields"][] = "id";
$tdatamay_art_chart[".googleLikeFields"][] = "title";
$tdatamay_art_chart[".googleLikeFields"][] = "description";
$tdatamay_art_chart[".googleLikeFields"][] = "body";
$tdatamay_art_chart[".googleLikeFields"][] = "keywords";
$tdatamay_art_chart[".googleLikeFields"][] = "author";
$tdatamay_art_chart[".googleLikeFields"][] = "publishedTime";



$tdatamay_art_chart[".tableType"] = "chart";

$tdatamay_art_chart[".printerPageOrientation"] = 0;
$tdatamay_art_chart[".nPrinterPageScale"] = 100;

$tdatamay_art_chart[".nPrinterSplitRecords"] = 40;

$tdatamay_art_chart[".geocodingEnabled"] = false;



// chart settings
$tdatamay_art_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdatamay_art_chart[".strOrderBy"] = $tstrOrderBy;

$tdatamay_art_chart[".orderindexes"] = array();


$tdatamay_art_chart[".sqlHead"] = "SELECT id,  	title,  	description,  	[body],  	keywords,  	author,  	publishedTime";
$tdatamay_art_chart[".sqlFrom"] = "FROM dbo.may_art";
$tdatamay_art_chart[".sqlWhereExpr"] = "";
$tdatamay_art_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamay_art_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamay_art_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatamay_art_chart[".highlightSearchResults"] = true;

$tableKeysmay_art_chart = array();
$tableKeysmay_art_chart[] = "id";
$tdatamay_art_chart[".Keys"] = $tableKeysmay_art_chart;


$tdatamay_art_chart[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art_Chart","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatamay_art_chart["id"] = $fdata;
		$tdatamay_art_chart[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art_Chart","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 300;

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


	$tdatamay_art_chart["title"] = $fdata;
		$tdatamay_art_chart[".searchableFields"][] = "title";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art_Chart","description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 300;

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


	$tdatamay_art_chart["description"] = $fdata;
		$tdatamay_art_chart[".searchableFields"][] = "description";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art_Chart","body");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "body";

		$fdata["sourceSingle"] = "body";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[body]";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 700;

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


	$tdatamay_art_chart["body"] = $fdata;
		$tdatamay_art_chart[".searchableFields"][] = "body";
//	keywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keywords";
	$fdata["GoodName"] = "keywords";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art_Chart","keywords");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "keywords";

		$fdata["sourceSingle"] = "keywords";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "keywords";

	
	
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


	$tdatamay_art_chart["keywords"] = $fdata;
		$tdatamay_art_chart[".searchableFields"][] = "keywords";
//	author
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "author";
	$fdata["GoodName"] = "author";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art_Chart","author");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "author";

		$fdata["sourceSingle"] = "author";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "author";

	
	
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
			$edata["EditParams"].= " maxlength=130";

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


	$tdatamay_art_chart["author"] = $fdata;
		$tdatamay_art_chart[".searchableFields"][] = "author";
//	publishedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "publishedTime";
	$fdata["GoodName"] = "publishedTime";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art_Chart","publishedTime");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "publishedTime";

		$fdata["sourceSingle"] = "publishedTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "publishedTime";

	
	
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


	$tdatamay_art_chart["publishedTime"] = $fdata;
		$tdatamay_art_chart[".searchableFields"][] = "publishedTime";

$tdatamay_art_chart[".groupChart"] = true;
$tdatamay_art_chart[".chartLabelInterval"] = 0;
$tdatamay_art_chart[".chartLabelField"] = "title";
$tdatamay_art_chart[".chartSeries"] = array();
$tdatamay_art_chart[".chartSeries"][] = array(
	"field" => "id",
	"total" => "COUNT"
);
	$tdatamay_art_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">dbo.may_art Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">id</attr>';
	$tdatamay_art_chart[".chartXml"] .= '</attr>';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">title</attr>
	</attr>';
	$tdatamay_art_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatamay_art_chart[".chartXml"] .= '<attr value="head">'.xmlencode("AL MAYADEEN ARTICLES").'</attr>
<attr value="foot">'.xmlencode("Titles").'</attr>
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
<attr value="is3d">1</attr>
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">1</attr>
<attr value="autoupmin">10</attr>';
$tdatamay_art_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_may_art_Chart","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">title</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_may_art_Chart","title")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">description</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_may_art_Chart","description")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">body</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_may_art_Chart","body")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">keywords</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_may_art_Chart","keywords")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">author</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_may_art_Chart","author")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatamay_art_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">publishedTime</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_may_art_Chart","publishedTime")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatamay_art_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">dbo.may_art Chart</attr>
<attr value="short_table_name">may_art_chart</attr>
</attr>

</chart>';

$tables_data["dbo.may_art Chart"]=&$tdatamay_art_chart;
$field_labels["dbo_may_art_Chart"] = &$fieldLabelsmay_art_chart;
$fieldToolTips["dbo_may_art_Chart"] = &$fieldToolTipsmay_art_chart;
$placeHolders["dbo_may_art_Chart"] = &$placeHoldersmay_art_chart;
$page_titles["dbo_may_art_Chart"] = &$pageTitlesmay_art_chart;


changeTextControlsToDate( "dbo.may_art Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.may_art Chart"] = array();
//	dbo.jaz_art
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.jaz_art";
		$detailsParam["dOriginalTable"] = "dbo.jaz_art";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "jaz_art";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_jaz_art");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.may_art Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.may_art Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.may_art Chart"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.may_art Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.may_art Chart"][$dIndex]["detailKeys"][]="id_may";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.may_art Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_may_art_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	title,  	description,  	[body],  	keywords,  	author,  	publishedTime";
$proto0["m_strFrom"] = "FROM dbo.may_art";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strName" => "id",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art Chart"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.may_art Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art Chart"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "dbo.may_art Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art Chart"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "dbo.may_art Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art Chart"
));

$proto12["m_sql"] = "[body]";
$proto12["m_srcTableName"] = "dbo.may_art Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keywords",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art Chart"
));

$proto14["m_sql"] = "keywords";
$proto14["m_srcTableName"] = "dbo.may_art Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "author",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art Chart"
));

$proto16["m_sql"] = "author";
$proto16["m_srcTableName"] = "dbo.may_art Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedTime",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art Chart"
));

$proto18["m_sql"] = "publishedTime";
$proto18["m_srcTableName"] = "dbo.may_art Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.may_art";
$proto21["m_srcTableName"] = "dbo.may_art Chart";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "title";
$proto21["m_columns"][] = "description";
$proto21["m_columns"][] = "body";
$proto21["m_columns"][] = "keywords";
$proto21["m_columns"][] = "author";
$proto21["m_columns"][] = "publishedTime";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.may_art";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.may_art Chart";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.may_art Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_may_art_chart = createSqlQuery_may_art_chart();


	
		;

							

$tdatamay_art_chart[".sqlquery"] = $queryData_may_art_chart;



$tdatamay_art_chart[".hasEvents"] = false;

?>