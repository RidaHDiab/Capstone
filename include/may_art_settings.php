<?php
$tdatamay_art = array();
$tdatamay_art[".searchableFields"] = array();
$tdatamay_art[".ShortName"] = "may_art";
$tdatamay_art[".OwnerID"] = "";
$tdatamay_art[".OriginalTable"] = "dbo.may_art";


$tdatamay_art[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamay_art[".originalPagesByType"] = $tdatamay_art[".pagesByType"];
$tdatamay_art[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamay_art[".originalPages"] = $tdatamay_art[".pages"];
$tdatamay_art[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamay_art[".originalDefaultPages"] = $tdatamay_art[".defaultPages"];

//	field labels
$fieldLabelsmay_art = array();
$fieldToolTipsmay_art = array();
$pageTitlesmay_art = array();
$placeHoldersmay_art = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmay_art["English"] = array();
	$fieldToolTipsmay_art["English"] = array();
	$placeHoldersmay_art["English"] = array();
	$pageTitlesmay_art["English"] = array();
	$fieldLabelsmay_art["English"]["id"] = "Id";
	$fieldToolTipsmay_art["English"]["id"] = "";
	$placeHoldersmay_art["English"]["id"] = "";
	$fieldLabelsmay_art["English"]["title"] = "Title";
	$fieldToolTipsmay_art["English"]["title"] = "";
	$placeHoldersmay_art["English"]["title"] = "";
	$fieldLabelsmay_art["English"]["description"] = "Description";
	$fieldToolTipsmay_art["English"]["description"] = "";
	$placeHoldersmay_art["English"]["description"] = "";
	$fieldLabelsmay_art["English"]["body"] = "Body";
	$fieldToolTipsmay_art["English"]["body"] = "";
	$placeHoldersmay_art["English"]["body"] = "";
	$fieldLabelsmay_art["English"]["keywords"] = "Keywords";
	$fieldToolTipsmay_art["English"]["keywords"] = "";
	$placeHoldersmay_art["English"]["keywords"] = "";
	$fieldLabelsmay_art["English"]["author"] = "Author";
	$fieldToolTipsmay_art["English"]["author"] = "";
	$placeHoldersmay_art["English"]["author"] = "";
	$fieldLabelsmay_art["English"]["publishedTime"] = "Published Date";
	$fieldToolTipsmay_art["English"]["publishedTime"] = "";
	$placeHoldersmay_art["English"]["publishedTime"] = "";
	$pageTitlesmay_art["English"]["masterlist"] = "Al Mayaden Article {%id}";
	$pageTitlesmay_art["English"]["list"] = "Al Mayadeen Article";
	$pageTitlesmay_art["English"]["view"] = "Al Mayadeen Article {%id}";
	if (count($fieldToolTipsmay_art["English"]))
		$tdatamay_art[".isUseToolTips"] = true;
}


	$tdatamay_art[".NCSearch"] = true;



$tdatamay_art[".shortTableName"] = "may_art";
$tdatamay_art[".nSecOptions"] = 0;

$tdatamay_art[".mainTableOwnerID"] = "";
$tdatamay_art[".entityType"] = 0;
$tdatamay_art[".connId"] = "News_at_192_168_1_225";


$tdatamay_art[".strOriginalTableName"] = "dbo.may_art";

	



$tdatamay_art[".showAddInPopup"] = false;

$tdatamay_art[".showEditInPopup"] = false;

$tdatamay_art[".showViewInPopup"] = false;

$tdatamay_art[".listAjax"] = false;
//	temporary
//$tdatamay_art[".listAjax"] = false;

	$tdatamay_art[".audit"] = true;

	$tdatamay_art[".locking"] = true;


$pages = $tdatamay_art[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamay_art[".edit"] = true;
	$tdatamay_art[".afterEditAction"] = 1;
	$tdatamay_art[".closePopupAfterEdit"] = 1;
	$tdatamay_art[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamay_art[".add"] = true;
$tdatamay_art[".afterAddAction"] = 1;
$tdatamay_art[".closePopupAfterAdd"] = 1;
$tdatamay_art[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamay_art[".list"] = true;
}



$tdatamay_art[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamay_art[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamay_art[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamay_art[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamay_art[".printFriendly"] = true;
}



$tdatamay_art[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamay_art[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamay_art[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamay_art[".isUseAjaxSuggest"] = true;



																		

$tdatamay_art[".ajaxCodeSnippetAdded"] = false;

$tdatamay_art[".buttonsAdded"] = false;

$tdatamay_art[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamay_art[".isUseTimeForSearch"] = false;


$tdatamay_art[".badgeColor"] = "4682b4";


$tdatamay_art[".allSearchFields"] = array();
$tdatamay_art[".filterFields"] = array();
$tdatamay_art[".requiredSearchFields"] = array();

$tdatamay_art[".googleLikeFields"] = array();
$tdatamay_art[".googleLikeFields"][] = "id";
$tdatamay_art[".googleLikeFields"][] = "title";
$tdatamay_art[".googleLikeFields"][] = "description";
$tdatamay_art[".googleLikeFields"][] = "body";
$tdatamay_art[".googleLikeFields"][] = "keywords";
$tdatamay_art[".googleLikeFields"][] = "author";
$tdatamay_art[".googleLikeFields"][] = "publishedTime";



$tdatamay_art[".tableType"] = "list";

$tdatamay_art[".printerPageOrientation"] = 0;
$tdatamay_art[".nPrinterPageScale"] = 100;

$tdatamay_art[".nPrinterSplitRecords"] = 40;

$tdatamay_art[".geocodingEnabled"] = false;










$tdatamay_art[".pageSize"] = 20;

$tdatamay_art[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamay_art[".strOrderBy"] = $tstrOrderBy;

$tdatamay_art[".orderindexes"] = array();


$tdatamay_art[".sqlHead"] = "SELECT id,  	title,  	description,  	[body],  	keywords,  	author,  	publishedTime";
$tdatamay_art[".sqlFrom"] = "FROM dbo.may_art";
$tdatamay_art[".sqlWhereExpr"] = "";
$tdatamay_art[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamay_art[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamay_art[".arrGroupsPerPage"] = $arrGPP;

$tdatamay_art[".highlightSearchResults"] = true;

$tableKeysmay_art = array();
$tableKeysmay_art[] = "id";
$tdatamay_art[".Keys"] = $tableKeysmay_art;


$tdatamay_art[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art","id");
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


	$tdatamay_art["id"] = $fdata;
		$tdatamay_art[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art","title");
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


	$tdatamay_art["title"] = $fdata;
		$tdatamay_art[".searchableFields"][] = "title";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art","description");
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


	$tdatamay_art["description"] = $fdata;
		$tdatamay_art[".searchableFields"][] = "description";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art","body");
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


	$tdatamay_art["body"] = $fdata;
		$tdatamay_art[".searchableFields"][] = "body";
//	keywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keywords";
	$fdata["GoodName"] = "keywords";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art","keywords");
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


	$tdatamay_art["keywords"] = $fdata;
		$tdatamay_art[".searchableFields"][] = "keywords";
//	author
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "author";
	$fdata["GoodName"] = "author";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art","author");
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


	$tdatamay_art["author"] = $fdata;
		$tdatamay_art[".searchableFields"][] = "author";
//	publishedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "publishedTime";
	$fdata["GoodName"] = "publishedTime";
	$fdata["ownerTable"] = "dbo.may_art";
	$fdata["Label"] = GetFieldLabel("dbo_may_art","publishedTime");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatamay_art["publishedTime"] = $fdata;
		$tdatamay_art[".searchableFields"][] = "publishedTime";


$tables_data["dbo.may_art"]=&$tdatamay_art;
$field_labels["dbo_may_art"] = &$fieldLabelsmay_art;
$fieldToolTips["dbo_may_art"] = &$fieldToolTipsmay_art;
$placeHolders["dbo_may_art"] = &$placeHoldersmay_art;
$page_titles["dbo_may_art"] = &$pageTitlesmay_art;


changeTextControlsToDate( "dbo.may_art" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.may_art"] = array();
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


		
	$detailsTablesData["dbo.may_art"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.may_art"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.may_art"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.may_art"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.may_art"][$dIndex]["detailKeys"][]="id_may";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.may_art"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.jaz_art";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.jaz_art";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jaz_art";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.may_art"][0] = $masterParams;
				$masterTablesData["dbo.may_art"][0]["masterKeys"] = array();
	$masterTablesData["dbo.may_art"][0]["masterKeys"][]="id_may";
				$masterTablesData["dbo.may_art"][0]["detailKeys"] = array();
	$masterTablesData["dbo.may_art"][0]["detailKeys"][]="id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_may_art()
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
	"m_srcTableName" => "dbo.may_art"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.may_art";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "dbo.may_art";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "dbo.may_art";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art"
));

$proto12["m_sql"] = "[body]";
$proto12["m_srcTableName"] = "dbo.may_art";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keywords",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art"
));

$proto14["m_sql"] = "keywords";
$proto14["m_srcTableName"] = "dbo.may_art";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "author",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art"
));

$proto16["m_sql"] = "author";
$proto16["m_srcTableName"] = "dbo.may_art";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedTime",
	"m_strTable" => "dbo.may_art",
	"m_srcTableName" => "dbo.may_art"
));

$proto18["m_sql"] = "publishedTime";
$proto18["m_srcTableName"] = "dbo.may_art";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.may_art";
$proto21["m_srcTableName"] = "dbo.may_art";
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
$proto20["m_srcTableName"] = "dbo.may_art";
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
$proto0["m_srcTableName"]="dbo.may_art";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_may_art = createSqlQuery_may_art();


	
		;

							

$tdatamay_art[".sqlquery"] = $queryData_may_art;



$tdatamay_art[".hasEvents"] = false;

?>