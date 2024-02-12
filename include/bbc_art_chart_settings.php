<?php
$tdatabbc_art_chart = array();
$tdatabbc_art_chart[".searchableFields"] = array();
$tdatabbc_art_chart[".ShortName"] = "bbc_art_chart";
$tdatabbc_art_chart[".OwnerID"] = "";
$tdatabbc_art_chart[".OriginalTable"] = "dbo.bbc_art";


$tdatabbc_art_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdatabbc_art_chart[".originalPagesByType"] = $tdatabbc_art_chart[".pagesByType"];
$tdatabbc_art_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdatabbc_art_chart[".originalPages"] = $tdatabbc_art_chart[".pages"];
$tdatabbc_art_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdatabbc_art_chart[".originalDefaultPages"] = $tdatabbc_art_chart[".defaultPages"];

//	field labels
$fieldLabelsbbc_art_chart = array();
$fieldToolTipsbbc_art_chart = array();
$pageTitlesbbc_art_chart = array();
$placeHoldersbbc_art_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbbc_art_chart["English"] = array();
	$fieldToolTipsbbc_art_chart["English"] = array();
	$placeHoldersbbc_art_chart["English"] = array();
	$pageTitlesbbc_art_chart["English"] = array();
	$fieldLabelsbbc_art_chart["English"]["id"] = "Id";
	$fieldToolTipsbbc_art_chart["English"]["id"] = "";
	$placeHoldersbbc_art_chart["English"]["id"] = "";
	$fieldLabelsbbc_art_chart["English"]["title"] = "Title";
	$fieldToolTipsbbc_art_chart["English"]["title"] = "";
	$placeHoldersbbc_art_chart["English"]["title"] = "";
	$fieldLabelsbbc_art_chart["English"]["description"] = "Description";
	$fieldToolTipsbbc_art_chart["English"]["description"] = "";
	$placeHoldersbbc_art_chart["English"]["description"] = "";
	$fieldLabelsbbc_art_chart["English"]["body"] = "Body";
	$fieldToolTipsbbc_art_chart["English"]["body"] = "";
	$placeHoldersbbc_art_chart["English"]["body"] = "";
	$fieldLabelsbbc_art_chart["English"]["keywords"] = "Keywords";
	$fieldToolTipsbbc_art_chart["English"]["keywords"] = "";
	$placeHoldersbbc_art_chart["English"]["keywords"] = "";
	$fieldLabelsbbc_art_chart["English"]["author"] = "Author";
	$fieldToolTipsbbc_art_chart["English"]["author"] = "";
	$placeHoldersbbc_art_chart["English"]["author"] = "";
	$fieldLabelsbbc_art_chart["English"]["publishedTime"] = "Published Time";
	$fieldToolTipsbbc_art_chart["English"]["publishedTime"] = "";
	$placeHoldersbbc_art_chart["English"]["publishedTime"] = "";
	if (count($fieldToolTipsbbc_art_chart["English"]))
		$tdatabbc_art_chart[".isUseToolTips"] = true;
}


	$tdatabbc_art_chart[".NCSearch"] = true;

	$tdatabbc_art_chart[".ChartRefreshTime"] = 10;


$tdatabbc_art_chart[".shortTableName"] = "bbc_art_chart";
$tdatabbc_art_chart[".nSecOptions"] = 0;

$tdatabbc_art_chart[".mainTableOwnerID"] = "";
$tdatabbc_art_chart[".entityType"] = 3;
$tdatabbc_art_chart[".connId"] = "News_at_192_168_1_225";


$tdatabbc_art_chart[".strOriginalTableName"] = "dbo.bbc_art";

	



$tdatabbc_art_chart[".showAddInPopup"] = false;

$tdatabbc_art_chart[".showEditInPopup"] = false;

$tdatabbc_art_chart[".showViewInPopup"] = false;

$tdatabbc_art_chart[".listAjax"] = false;
//	temporary
//$tdatabbc_art_chart[".listAjax"] = false;

	$tdatabbc_art_chart[".audit"] = false;

	$tdatabbc_art_chart[".locking"] = false;


$pages = $tdatabbc_art_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabbc_art_chart[".edit"] = true;
	$tdatabbc_art_chart[".afterEditAction"] = 1;
	$tdatabbc_art_chart[".closePopupAfterEdit"] = 1;
	$tdatabbc_art_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabbc_art_chart[".add"] = true;
$tdatabbc_art_chart[".afterAddAction"] = 1;
$tdatabbc_art_chart[".closePopupAfterAdd"] = 1;
$tdatabbc_art_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabbc_art_chart[".list"] = true;
}



$tdatabbc_art_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabbc_art_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabbc_art_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabbc_art_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabbc_art_chart[".printFriendly"] = true;
}



$tdatabbc_art_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabbc_art_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabbc_art_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabbc_art_chart[".isUseAjaxSuggest"] = true;



									

$tdatabbc_art_chart[".ajaxCodeSnippetAdded"] = false;

$tdatabbc_art_chart[".buttonsAdded"] = false;

$tdatabbc_art_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabbc_art_chart[".isUseTimeForSearch"] = false;


$tdatabbc_art_chart[".badgeColor"] = "CFAE83";


$tdatabbc_art_chart[".allSearchFields"] = array();
$tdatabbc_art_chart[".filterFields"] = array();
$tdatabbc_art_chart[".requiredSearchFields"] = array();

$tdatabbc_art_chart[".googleLikeFields"] = array();
$tdatabbc_art_chart[".googleLikeFields"][] = "id";
$tdatabbc_art_chart[".googleLikeFields"][] = "title";
$tdatabbc_art_chart[".googleLikeFields"][] = "description";
$tdatabbc_art_chart[".googleLikeFields"][] = "body";
$tdatabbc_art_chart[".googleLikeFields"][] = "keywords";
$tdatabbc_art_chart[".googleLikeFields"][] = "author";
$tdatabbc_art_chart[".googleLikeFields"][] = "publishedTime";



$tdatabbc_art_chart[".tableType"] = "chart";

$tdatabbc_art_chart[".printerPageOrientation"] = 0;
$tdatabbc_art_chart[".nPrinterPageScale"] = 100;

$tdatabbc_art_chart[".nPrinterSplitRecords"] = 40;

$tdatabbc_art_chart[".geocodingEnabled"] = false;



// chart settings
$tdatabbc_art_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdatabbc_art_chart[".strOrderBy"] = $tstrOrderBy;

$tdatabbc_art_chart[".orderindexes"] = array();


$tdatabbc_art_chart[".sqlHead"] = "SELECT id,  	title,  	description,  	[body],  	keywords,  	author,  	publishedTime";
$tdatabbc_art_chart[".sqlFrom"] = "FROM dbo.bbc_art";
$tdatabbc_art_chart[".sqlWhereExpr"] = "";
$tdatabbc_art_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabbc_art_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabbc_art_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatabbc_art_chart[".highlightSearchResults"] = true;

$tableKeysbbc_art_chart = array();
$tableKeysbbc_art_chart[] = "id";
$tdatabbc_art_chart[".Keys"] = $tableKeysbbc_art_chart;


$tdatabbc_art_chart[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art_Chart","id");
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


	$tdatabbc_art_chart["id"] = $fdata;
		$tdatabbc_art_chart[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art_Chart","title");
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
	$vdata["NumberOfChars"] = 200;

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


	$tdatabbc_art_chart["title"] = $fdata;
		$tdatabbc_art_chart[".searchableFields"][] = "title";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art_Chart","description");
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


	$tdatabbc_art_chart["description"] = $fdata;
		$tdatabbc_art_chart[".searchableFields"][] = "description";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art_Chart","body");
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


	$tdatabbc_art_chart["body"] = $fdata;
		$tdatabbc_art_chart[".searchableFields"][] = "body";
//	keywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keywords";
	$fdata["GoodName"] = "keywords";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art_Chart","keywords");
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
	$vdata["NumberOfChars"] = 200;

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


	$tdatabbc_art_chart["keywords"] = $fdata;
		$tdatabbc_art_chart[".searchableFields"][] = "keywords";
//	author
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "author";
	$fdata["GoodName"] = "author";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art_Chart","author");
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
	$vdata["NumberOfChars"] = 200;

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


	$tdatabbc_art_chart["author"] = $fdata;
		$tdatabbc_art_chart[".searchableFields"][] = "author";
//	publishedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "publishedTime";
	$fdata["GoodName"] = "publishedTime";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art_Chart","publishedTime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "publishedTime";

		$fdata["sourceSingle"] = "publishedTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "publishedTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 200;

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


	$tdatabbc_art_chart["publishedTime"] = $fdata;
		$tdatabbc_art_chart[".searchableFields"][] = "publishedTime";

$tdatabbc_art_chart[".groupChart"] = true;
$tdatabbc_art_chart[".chartLabelInterval"] = 0;
$tdatabbc_art_chart[".chartLabelField"] = "title";
$tdatabbc_art_chart[".chartSeries"] = array();
$tdatabbc_art_chart[".chartSeries"][] = array(
	"field" => "id",
	"total" => "COUNT"
);
	$tdatabbc_art_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">dbo.bbc_art Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">id</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">title</attr>
	</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatabbc_art_chart[".chartXml"] .= '<attr value="head">'.xmlencode("BBC ARTICLES").'</attr>
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
$tdatabbc_art_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_bbc_art_Chart","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">title</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_bbc_art_Chart","title")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">description</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_bbc_art_Chart","description")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">body</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_bbc_art_Chart","body")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">keywords</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_bbc_art_Chart","keywords")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">author</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_bbc_art_Chart","author")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabbc_art_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">publishedTime</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_bbc_art_Chart","publishedTime")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatabbc_art_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">dbo.bbc_art Chart</attr>
<attr value="short_table_name">bbc_art_chart</attr>
</attr>

</chart>';

$tables_data["dbo.bbc_art Chart"]=&$tdatabbc_art_chart;
$field_labels["dbo_bbc_art_Chart"] = &$fieldLabelsbbc_art_chart;
$fieldToolTips["dbo_bbc_art_Chart"] = &$fieldToolTipsbbc_art_chart;
$placeHolders["dbo_bbc_art_Chart"] = &$placeHoldersbbc_art_chart;
$page_titles["dbo_bbc_art_Chart"] = &$pageTitlesbbc_art_chart;


changeTextControlsToDate( "dbo.bbc_art Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.bbc_art Chart"] = array();
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


		
	$detailsTablesData["dbo.bbc_art Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.bbc_art Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.bbc_art Chart"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.bbc_art Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.bbc_art Chart"][$dIndex]["detailKeys"][]="id_bbc";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.bbc_art Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bbc_art_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	title,  	description,  	[body],  	keywords,  	author,  	publishedTime";
$proto0["m_strFrom"] = "FROM dbo.bbc_art";
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
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art Chart"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.bbc_art Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art Chart"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "dbo.bbc_art Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art Chart"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "dbo.bbc_art Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art Chart"
));

$proto12["m_sql"] = "[body]";
$proto12["m_srcTableName"] = "dbo.bbc_art Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keywords",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art Chart"
));

$proto14["m_sql"] = "keywords";
$proto14["m_srcTableName"] = "dbo.bbc_art Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "author",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art Chart"
));

$proto16["m_sql"] = "author";
$proto16["m_srcTableName"] = "dbo.bbc_art Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedTime",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art Chart"
));

$proto18["m_sql"] = "publishedTime";
$proto18["m_srcTableName"] = "dbo.bbc_art Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.bbc_art";
$proto21["m_srcTableName"] = "dbo.bbc_art Chart";
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
$proto20["m_sql"] = "dbo.bbc_art";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.bbc_art Chart";
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
$proto0["m_srcTableName"]="dbo.bbc_art Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bbc_art_chart = createSqlQuery_bbc_art_chart();


	
		;

							

$tdatabbc_art_chart[".sqlquery"] = $queryData_bbc_art_chart;



$tdatabbc_art_chart[".hasEvents"] = false;

?>