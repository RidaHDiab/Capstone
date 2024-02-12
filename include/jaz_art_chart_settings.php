<?php
$tdatajaz_art_chart = array();
$tdatajaz_art_chart[".searchableFields"] = array();
$tdatajaz_art_chart[".ShortName"] = "jaz_art_chart";
$tdatajaz_art_chart[".OwnerID"] = "";
$tdatajaz_art_chart[".OriginalTable"] = "dbo.jaz_art";


$tdatajaz_art_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatajaz_art_chart[".originalPagesByType"] = $tdatajaz_art_chart[".pagesByType"];
$tdatajaz_art_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatajaz_art_chart[".originalPages"] = $tdatajaz_art_chart[".pages"];
$tdatajaz_art_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatajaz_art_chart[".originalDefaultPages"] = $tdatajaz_art_chart[".defaultPages"];

//	field labels
$fieldLabelsjaz_art_chart = array();
$fieldToolTipsjaz_art_chart = array();
$pageTitlesjaz_art_chart = array();
$placeHoldersjaz_art_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjaz_art_chart["English"] = array();
	$fieldToolTipsjaz_art_chart["English"] = array();
	$placeHoldersjaz_art_chart["English"] = array();
	$pageTitlesjaz_art_chart["English"] = array();
	$fieldLabelsjaz_art_chart["English"]["id"] = "Id";
	$fieldToolTipsjaz_art_chart["English"]["id"] = "";
	$placeHoldersjaz_art_chart["English"]["id"] = "";
	$fieldLabelsjaz_art_chart["English"]["title"] = "Title";
	$fieldToolTipsjaz_art_chart["English"]["title"] = "";
	$placeHoldersjaz_art_chart["English"]["title"] = "";
	$fieldLabelsjaz_art_chart["English"]["description"] = "Description";
	$fieldToolTipsjaz_art_chart["English"]["description"] = "";
	$placeHoldersjaz_art_chart["English"]["description"] = "";
	$fieldLabelsjaz_art_chart["English"]["body"] = "Body";
	$fieldToolTipsjaz_art_chart["English"]["body"] = "";
	$placeHoldersjaz_art_chart["English"]["body"] = "";
	$fieldLabelsjaz_art_chart["English"]["keywords"] = "Keywords";
	$fieldToolTipsjaz_art_chart["English"]["keywords"] = "";
	$placeHoldersjaz_art_chart["English"]["keywords"] = "";
	$fieldLabelsjaz_art_chart["English"]["author"] = "Author";
	$fieldToolTipsjaz_art_chart["English"]["author"] = "";
	$placeHoldersjaz_art_chart["English"]["author"] = "";
	$fieldLabelsjaz_art_chart["English"]["id_may"] = "Id May";
	$fieldToolTipsjaz_art_chart["English"]["id_may"] = "";
	$placeHoldersjaz_art_chart["English"]["id_may"] = "";
	$fieldLabelsjaz_art_chart["English"]["id_bbc"] = "Id Bbc";
	$fieldToolTipsjaz_art_chart["English"]["id_bbc"] = "";
	$placeHoldersjaz_art_chart["English"]["id_bbc"] = "";
	$fieldLabelsjaz_art_chart["English"]["publishedTime"] = "Published Time";
	$fieldToolTipsjaz_art_chart["English"]["publishedTime"] = "";
	$placeHoldersjaz_art_chart["English"]["publishedTime"] = "";
	$fieldLabelsjaz_art_chart["English"]["image_url"] = "Image Url";
	$fieldToolTipsjaz_art_chart["English"]["image_url"] = "";
	$placeHoldersjaz_art_chart["English"]["image_url"] = "";
	if (count($fieldToolTipsjaz_art_chart["English"]))
		$tdatajaz_art_chart[".isUseToolTips"] = true;
}


	$tdatajaz_art_chart[".NCSearch"] = true;

	$tdatajaz_art_chart[".ChartRefreshTime"] = 10;


$tdatajaz_art_chart[".shortTableName"] = "jaz_art_chart";
$tdatajaz_art_chart[".nSecOptions"] = 0;

$tdatajaz_art_chart[".mainTableOwnerID"] = "";
$tdatajaz_art_chart[".entityType"] = 3;
$tdatajaz_art_chart[".connId"] = "News_at_192_168_1_225";


$tdatajaz_art_chart[".strOriginalTableName"] = "dbo.jaz_art";

	



$tdatajaz_art_chart[".showAddInPopup"] = false;

$tdatajaz_art_chart[".showEditInPopup"] = false;

$tdatajaz_art_chart[".showViewInPopup"] = false;

$tdatajaz_art_chart[".listAjax"] = false;
//	temporary
//$tdatajaz_art_chart[".listAjax"] = false;

	$tdatajaz_art_chart[".audit"] = false;

	$tdatajaz_art_chart[".locking"] = false;


$pages = $tdatajaz_art_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajaz_art_chart[".edit"] = true;
	$tdatajaz_art_chart[".afterEditAction"] = 1;
	$tdatajaz_art_chart[".closePopupAfterEdit"] = 1;
	$tdatajaz_art_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajaz_art_chart[".add"] = true;
$tdatajaz_art_chart[".afterAddAction"] = 1;
$tdatajaz_art_chart[".closePopupAfterAdd"] = 1;
$tdatajaz_art_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajaz_art_chart[".list"] = true;
}



$tdatajaz_art_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajaz_art_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajaz_art_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajaz_art_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajaz_art_chart[".printFriendly"] = true;
}



$tdatajaz_art_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajaz_art_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajaz_art_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajaz_art_chart[".isUseAjaxSuggest"] = true;



																											

$tdatajaz_art_chart[".ajaxCodeSnippetAdded"] = false;

$tdatajaz_art_chart[".buttonsAdded"] = false;

$tdatajaz_art_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajaz_art_chart[".isUseTimeForSearch"] = false;


$tdatajaz_art_chart[".badgeColor"] = "DC143C";


$tdatajaz_art_chart[".allSearchFields"] = array();
$tdatajaz_art_chart[".filterFields"] = array();
$tdatajaz_art_chart[".requiredSearchFields"] = array();

$tdatajaz_art_chart[".googleLikeFields"] = array();
$tdatajaz_art_chart[".googleLikeFields"][] = "id";
$tdatajaz_art_chart[".googleLikeFields"][] = "title";
$tdatajaz_art_chart[".googleLikeFields"][] = "description";
$tdatajaz_art_chart[".googleLikeFields"][] = "body";
$tdatajaz_art_chart[".googleLikeFields"][] = "keywords";
$tdatajaz_art_chart[".googleLikeFields"][] = "author";
$tdatajaz_art_chart[".googleLikeFields"][] = "id_may";
$tdatajaz_art_chart[".googleLikeFields"][] = "id_bbc";
$tdatajaz_art_chart[".googleLikeFields"][] = "publishedTime";
$tdatajaz_art_chart[".googleLikeFields"][] = "image_url";



$tdatajaz_art_chart[".tableType"] = "chart";

$tdatajaz_art_chart[".printerPageOrientation"] = 0;
$tdatajaz_art_chart[".nPrinterPageScale"] = 100;

$tdatajaz_art_chart[".nPrinterSplitRecords"] = 40;

$tdatajaz_art_chart[".geocodingEnabled"] = false;



// chart settings
$tdatajaz_art_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdatajaz_art_chart[".strOrderBy"] = $tstrOrderBy;

$tdatajaz_art_chart[".orderindexes"] = array();


$tdatajaz_art_chart[".sqlHead"] = "SELECT id,  	title,  	description,  	[body],  	keywords,  	author,  	id_may,  	id_bbc,  	publishedTime,  	image_url";
$tdatajaz_art_chart[".sqlFrom"] = "FROM dbo.jaz_art";
$tdatajaz_art_chart[".sqlWhereExpr"] = "";
$tdatajaz_art_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajaz_art_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajaz_art_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatajaz_art_chart[".highlightSearchResults"] = true;

$tableKeysjaz_art_chart = array();
$tableKeysjaz_art_chart[] = "id";
$tdatajaz_art_chart[".Keys"] = $tableKeysjaz_art_chart;


$tdatajaz_art_chart[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","id");
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


	$tdatajaz_art_chart["id"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","title");
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


	$tdatajaz_art_chart["title"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "title";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","description");
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
	$vdata["NumberOfChars"] = 600;

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


	$tdatajaz_art_chart["description"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "description";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","body");
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


	$tdatajaz_art_chart["body"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "body";
//	keywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keywords";
	$fdata["GoodName"] = "keywords";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","keywords");
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


	$tdatajaz_art_chart["keywords"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "keywords";
//	author
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "author";
	$fdata["GoodName"] = "author";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","author");
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
			$edata["EditParams"].= " maxlength=135";

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


	$tdatajaz_art_chart["author"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "author";
//	id_may
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_may";
	$fdata["GoodName"] = "id_may";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","id_may");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_may";

		$fdata["sourceSingle"] = "id_may";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_may";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.may_art";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "title";

	

	
	$edata["LookupOrderBy"] = "publishedTime";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatajaz_art_chart["id_may"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "id_may";
//	id_bbc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_bbc";
	$fdata["GoodName"] = "id_bbc";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","id_bbc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_bbc";

		$fdata["sourceSingle"] = "id_bbc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_bbc";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dbo.bbc_art";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "title";

	

	
	$edata["LookupOrderBy"] = "publishedTime";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatajaz_art_chart["id_bbc"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "id_bbc";
//	publishedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "publishedTime";
	$fdata["GoodName"] = "publishedTime";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","publishedTime");
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


	$tdatajaz_art_chart["publishedTime"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "publishedTime";
//	image_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "image_url";
	$fdata["GoodName"] = "image_url";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art_Chart","image_url");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "image_url";

		$fdata["sourceSingle"] = "image_url";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image_url";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 250;
	$vdata["ImageHeight"] = 200;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

		
	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
		$vdata["fieldIsImageUrl"] = true;

	
	
	
	
	
	
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


	$tdatajaz_art_chart["image_url"] = $fdata;
		$tdatajaz_art_chart[".searchableFields"][] = "image_url";

$tdatajaz_art_chart[".groupChart"] = true;
$tdatajaz_art_chart[".chartLabelInterval"] = 0;
$tdatajaz_art_chart[".chartLabelField"] = "title";
$tdatajaz_art_chart[".chartSeries"] = array();
$tdatajaz_art_chart[".chartSeries"][] = array(
	"field" => "id",
	"total" => "COUNT"
);
	$tdatajaz_art_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">dbo.jaz_art Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">id</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">title</attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatajaz_art_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Al JAZEERA ARTICLES").'</attr>
<attr value="foot">'.xmlencode("Titles").'</attr>
<attr value="y_axis_label">'.xmlencode("id_may").'</attr>


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
$tdatajaz_art_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">title</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","title")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">description</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","description")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">body</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","body")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">keywords</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","keywords")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">author</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","author")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">id_may</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","id_may")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">id_bbc</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","id_bbc")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">publishedTime</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","publishedTime")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajaz_art_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">image_url</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("dbo_jaz_art_Chart","image_url")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatajaz_art_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">dbo.jaz_art Chart</attr>
<attr value="short_table_name">jaz_art_chart</attr>
</attr>

</chart>';

$tables_data["dbo.jaz_art Chart"]=&$tdatajaz_art_chart;
$field_labels["dbo_jaz_art_Chart"] = &$fieldLabelsjaz_art_chart;
$fieldToolTips["dbo_jaz_art_Chart"] = &$fieldToolTipsjaz_art_chart;
$placeHolders["dbo_jaz_art_Chart"] = &$placeHoldersjaz_art_chart;
$page_titles["dbo_jaz_art_Chart"] = &$pageTitlesjaz_art_chart;


changeTextControlsToDate( "dbo.jaz_art Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.jaz_art Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.jaz_art Chart"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.may_art";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.may_art";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "may_art";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.jaz_art Chart"][0] = $masterParams;
				$masterTablesData["dbo.jaz_art Chart"][0]["masterKeys"] = array();
	$masterTablesData["dbo.jaz_art Chart"][0]["masterKeys"][]="id";
				$masterTablesData["dbo.jaz_art Chart"][0]["detailKeys"] = array();
	$masterTablesData["dbo.jaz_art Chart"][0]["detailKeys"][]="id_may";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.bbc_art";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.bbc_art";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "bbc_art";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.jaz_art Chart"][1] = $masterParams;
				$masterTablesData["dbo.jaz_art Chart"][1]["masterKeys"] = array();
	$masterTablesData["dbo.jaz_art Chart"][1]["masterKeys"][]="id";
				$masterTablesData["dbo.jaz_art Chart"][1]["detailKeys"] = array();
	$masterTablesData["dbo.jaz_art Chart"][1]["detailKeys"][]="id_bbc";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_jaz_art_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	title,  	description,  	[body],  	keywords,  	author,  	id_may,  	id_bbc,  	publishedTime,  	image_url";
$proto0["m_strFrom"] = "FROM dbo.jaz_art";
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
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.jaz_art Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "dbo.jaz_art Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "dbo.jaz_art Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto12["m_sql"] = "[body]";
$proto12["m_srcTableName"] = "dbo.jaz_art Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keywords",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto14["m_sql"] = "keywords";
$proto14["m_srcTableName"] = "dbo.jaz_art Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "author",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto16["m_sql"] = "author";
$proto16["m_srcTableName"] = "dbo.jaz_art Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_may",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto18["m_sql"] = "id_may";
$proto18["m_srcTableName"] = "dbo.jaz_art Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_bbc",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto20["m_sql"] = "id_bbc";
$proto20["m_srcTableName"] = "dbo.jaz_art Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedTime",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto22["m_sql"] = "publishedTime";
$proto22["m_srcTableName"] = "dbo.jaz_art Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "image_url",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art Chart"
));

$proto24["m_sql"] = "image_url";
$proto24["m_srcTableName"] = "dbo.jaz_art Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "dbo.jaz_art";
$proto27["m_srcTableName"] = "dbo.jaz_art Chart";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "title";
$proto27["m_columns"][] = "description";
$proto27["m_columns"][] = "body";
$proto27["m_columns"][] = "keywords";
$proto27["m_columns"][] = "author";
$proto27["m_columns"][] = "id_may";
$proto27["m_columns"][] = "id_bbc";
$proto27["m_columns"][] = "publishedTime";
$proto27["m_columns"][] = "image_url";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "dbo.jaz_art";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "dbo.jaz_art Chart";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.jaz_art Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jaz_art_chart = createSqlQuery_jaz_art_chart();


	
		;

										

$tdatajaz_art_chart[".sqlquery"] = $queryData_jaz_art_chart;



$tdatajaz_art_chart[".hasEvents"] = false;

?>