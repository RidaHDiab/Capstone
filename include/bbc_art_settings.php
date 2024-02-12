<?php
$tdatabbc_art = array();
$tdatabbc_art[".searchableFields"] = array();
$tdatabbc_art[".ShortName"] = "bbc_art";
$tdatabbc_art[".OwnerID"] = "id";
$tdatabbc_art[".OriginalTable"] = "dbo.bbc_art";


$tdatabbc_art[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabbc_art[".originalPagesByType"] = $tdatabbc_art[".pagesByType"];
$tdatabbc_art[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabbc_art[".originalPages"] = $tdatabbc_art[".pages"];
$tdatabbc_art[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabbc_art[".originalDefaultPages"] = $tdatabbc_art[".defaultPages"];

//	field labels
$fieldLabelsbbc_art = array();
$fieldToolTipsbbc_art = array();
$pageTitlesbbc_art = array();
$placeHoldersbbc_art = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbbc_art["English"] = array();
	$fieldToolTipsbbc_art["English"] = array();
	$placeHoldersbbc_art["English"] = array();
	$pageTitlesbbc_art["English"] = array();
	$fieldLabelsbbc_art["English"]["id"] = "Id";
	$fieldToolTipsbbc_art["English"]["id"] = "";
	$placeHoldersbbc_art["English"]["id"] = "";
	$fieldLabelsbbc_art["English"]["title"] = "Title";
	$fieldToolTipsbbc_art["English"]["title"] = "";
	$placeHoldersbbc_art["English"]["title"] = "";
	$fieldLabelsbbc_art["English"]["description"] = "Description";
	$fieldToolTipsbbc_art["English"]["description"] = "";
	$placeHoldersbbc_art["English"]["description"] = "";
	$fieldLabelsbbc_art["English"]["body"] = "Body";
	$fieldToolTipsbbc_art["English"]["body"] = "";
	$placeHoldersbbc_art["English"]["body"] = "";
	$fieldLabelsbbc_art["English"]["keywords"] = "Keywords";
	$fieldToolTipsbbc_art["English"]["keywords"] = "";
	$placeHoldersbbc_art["English"]["keywords"] = "";
	$fieldLabelsbbc_art["English"]["author"] = "Author";
	$fieldToolTipsbbc_art["English"]["author"] = "";
	$placeHoldersbbc_art["English"]["author"] = "";
	$fieldLabelsbbc_art["English"]["publishedTime"] = "Published Time";
	$fieldToolTipsbbc_art["English"]["publishedTime"] = "";
	$placeHoldersbbc_art["English"]["publishedTime"] = "";
	$pageTitlesbbc_art["English"]["masterlist"] = "BBC Article {%id}";
	$pageTitlesbbc_art["English"]["list"] = "BBC Article ";
	$pageTitlesbbc_art["English"]["view"] = "BBC Article {%id}";
	if (count($fieldToolTipsbbc_art["English"]))
		$tdatabbc_art[".isUseToolTips"] = true;
}


	$tdatabbc_art[".NCSearch"] = true;



$tdatabbc_art[".shortTableName"] = "bbc_art";
$tdatabbc_art[".nSecOptions"] = 0;

$tdatabbc_art[".mainTableOwnerID"] = "id";
$tdatabbc_art[".entityType"] = 0;
$tdatabbc_art[".connId"] = "News_at_192_168_1_225";


$tdatabbc_art[".strOriginalTableName"] = "dbo.bbc_art";

	



$tdatabbc_art[".showAddInPopup"] = false;

$tdatabbc_art[".showEditInPopup"] = false;

$tdatabbc_art[".showViewInPopup"] = false;

$tdatabbc_art[".listAjax"] = false;
//	temporary
//$tdatabbc_art[".listAjax"] = false;

	$tdatabbc_art[".audit"] = true;

	$tdatabbc_art[".locking"] = true;


$pages = $tdatabbc_art[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabbc_art[".edit"] = true;
	$tdatabbc_art[".afterEditAction"] = 1;
	$tdatabbc_art[".closePopupAfterEdit"] = 1;
	$tdatabbc_art[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabbc_art[".add"] = true;
$tdatabbc_art[".afterAddAction"] = 1;
$tdatabbc_art[".closePopupAfterAdd"] = 1;
$tdatabbc_art[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabbc_art[".list"] = true;
}



$tdatabbc_art[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabbc_art[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabbc_art[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabbc_art[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabbc_art[".printFriendly"] = true;
}



$tdatabbc_art[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabbc_art[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabbc_art[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabbc_art[".isUseAjaxSuggest"] = true;



																		

$tdatabbc_art[".ajaxCodeSnippetAdded"] = false;

$tdatabbc_art[".buttonsAdded"] = false;

$tdatabbc_art[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabbc_art[".isUseTimeForSearch"] = false;


$tdatabbc_art[".badgeColor"] = "d2691e";


$tdatabbc_art[".allSearchFields"] = array();
$tdatabbc_art[".filterFields"] = array();
$tdatabbc_art[".requiredSearchFields"] = array();

$tdatabbc_art[".googleLikeFields"] = array();
$tdatabbc_art[".googleLikeFields"][] = "id";
$tdatabbc_art[".googleLikeFields"][] = "title";
$tdatabbc_art[".googleLikeFields"][] = "description";
$tdatabbc_art[".googleLikeFields"][] = "body";
$tdatabbc_art[".googleLikeFields"][] = "keywords";
$tdatabbc_art[".googleLikeFields"][] = "author";
$tdatabbc_art[".googleLikeFields"][] = "publishedTime";



$tdatabbc_art[".tableType"] = "list";

$tdatabbc_art[".printerPageOrientation"] = 0;
$tdatabbc_art[".nPrinterPageScale"] = 100;

$tdatabbc_art[".nPrinterSplitRecords"] = 40;

$tdatabbc_art[".geocodingEnabled"] = false;










$tdatabbc_art[".pageSize"] = 20;

$tdatabbc_art[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabbc_art[".strOrderBy"] = $tstrOrderBy;

$tdatabbc_art[".orderindexes"] = array();


$tdatabbc_art[".sqlHead"] = "SELECT id,  	title,  	description,  	[body],  	keywords,  	author,  	publishedTime";
$tdatabbc_art[".sqlFrom"] = "FROM dbo.bbc_art";
$tdatabbc_art[".sqlWhereExpr"] = "";
$tdatabbc_art[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabbc_art[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabbc_art[".arrGroupsPerPage"] = $arrGPP;

$tdatabbc_art[".highlightSearchResults"] = true;

$tableKeysbbc_art = array();
$tableKeysbbc_art[] = "id";
$tdatabbc_art[".Keys"] = $tableKeysbbc_art;


$tdatabbc_art[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art","id");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatabbc_art["id"] = $fdata;
		$tdatabbc_art[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art","title");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatabbc_art["title"] = $fdata;
		$tdatabbc_art[".searchableFields"][] = "title";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art","description");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatabbc_art["description"] = $fdata;
		$tdatabbc_art[".searchableFields"][] = "description";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art","body");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatabbc_art["body"] = $fdata;
		$tdatabbc_art[".searchableFields"][] = "body";
//	keywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keywords";
	$fdata["GoodName"] = "keywords";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art","keywords");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatabbc_art["keywords"] = $fdata;
		$tdatabbc_art[".searchableFields"][] = "keywords";
//	author
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "author";
	$fdata["GoodName"] = "author";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art","author");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatabbc_art["author"] = $fdata;
		$tdatabbc_art[".searchableFields"][] = "author";
//	publishedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "publishedTime";
	$fdata["GoodName"] = "publishedTime";
	$fdata["ownerTable"] = "dbo.bbc_art";
	$fdata["Label"] = GetFieldLabel("dbo_bbc_art","publishedTime");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatabbc_art["publishedTime"] = $fdata;
		$tdatabbc_art[".searchableFields"][] = "publishedTime";


$tables_data["dbo.bbc_art"]=&$tdatabbc_art;
$field_labels["dbo_bbc_art"] = &$fieldLabelsbbc_art;
$fieldToolTips["dbo_bbc_art"] = &$fieldToolTipsbbc_art;
$placeHolders["dbo_bbc_art"] = &$placeHoldersbbc_art;
$page_titles["dbo_bbc_art"] = &$pageTitlesbbc_art;


changeTextControlsToDate( "dbo.bbc_art" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.bbc_art"] = array();
//	dbo.jaz_art Chart
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.jaz_art Chart";
		$detailsParam["dOriginalTable"] = "dbo.jaz_art";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "jaz_art_chart";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_jaz_art_Chart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.bbc_art"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.bbc_art"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.bbc_art"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.bbc_art"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.bbc_art"][$dIndex]["detailKeys"][]="id_bbc";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.bbc_art"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.jaz_art";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.jaz_art";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jaz_art";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.bbc_art"][0] = $masterParams;
				$masterTablesData["dbo.bbc_art"][0]["masterKeys"] = array();
	$masterTablesData["dbo.bbc_art"][0]["masterKeys"][]="id_bbc";
				$masterTablesData["dbo.bbc_art"][0]["detailKeys"] = array();
	$masterTablesData["dbo.bbc_art"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bbc_art()
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
	"m_srcTableName" => "dbo.bbc_art"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.bbc_art";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "dbo.bbc_art";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "dbo.bbc_art";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art"
));

$proto12["m_sql"] = "[body]";
$proto12["m_srcTableName"] = "dbo.bbc_art";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keywords",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art"
));

$proto14["m_sql"] = "keywords";
$proto14["m_srcTableName"] = "dbo.bbc_art";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "author",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art"
));

$proto16["m_sql"] = "author";
$proto16["m_srcTableName"] = "dbo.bbc_art";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedTime",
	"m_strTable" => "dbo.bbc_art",
	"m_srcTableName" => "dbo.bbc_art"
));

$proto18["m_sql"] = "publishedTime";
$proto18["m_srcTableName"] = "dbo.bbc_art";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.bbc_art";
$proto21["m_srcTableName"] = "dbo.bbc_art";
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
$proto20["m_srcTableName"] = "dbo.bbc_art";
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
$proto0["m_srcTableName"]="dbo.bbc_art";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bbc_art = createSqlQuery_bbc_art();


	
		;

							

$tdatabbc_art[".sqlquery"] = $queryData_bbc_art;



$tdatabbc_art[".hasEvents"] = false;

?>