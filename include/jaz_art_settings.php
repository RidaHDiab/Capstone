<?php
$tdatajaz_art = array();
$tdatajaz_art[".searchableFields"] = array();
$tdatajaz_art[".ShortName"] = "jaz_art";
$tdatajaz_art[".OwnerID"] = "";
$tdatajaz_art[".OriginalTable"] = "dbo.jaz_art";


$tdatajaz_art[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajaz_art[".originalPagesByType"] = $tdatajaz_art[".pagesByType"];
$tdatajaz_art[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajaz_art[".originalPages"] = $tdatajaz_art[".pages"];
$tdatajaz_art[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatajaz_art[".originalDefaultPages"] = $tdatajaz_art[".defaultPages"];

//	field labels
$fieldLabelsjaz_art = array();
$fieldToolTipsjaz_art = array();
$pageTitlesjaz_art = array();
$placeHoldersjaz_art = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjaz_art["English"] = array();
	$fieldToolTipsjaz_art["English"] = array();
	$placeHoldersjaz_art["English"] = array();
	$pageTitlesjaz_art["English"] = array();
	$fieldLabelsjaz_art["English"]["id"] = "Id";
	$fieldToolTipsjaz_art["English"]["id"] = "";
	$placeHoldersjaz_art["English"]["id"] = "";
	$fieldLabelsjaz_art["English"]["title"] = "Title";
	$fieldToolTipsjaz_art["English"]["title"] = "";
	$placeHoldersjaz_art["English"]["title"] = "";
	$fieldLabelsjaz_art["English"]["description"] = "Description";
	$fieldToolTipsjaz_art["English"]["description"] = "";
	$placeHoldersjaz_art["English"]["description"] = "";
	$fieldLabelsjaz_art["English"]["body"] = "Body";
	$fieldToolTipsjaz_art["English"]["body"] = "";
	$placeHoldersjaz_art["English"]["body"] = "";
	$fieldLabelsjaz_art["English"]["keywords"] = "Keywords";
	$fieldToolTipsjaz_art["English"]["keywords"] = "";
	$placeHoldersjaz_art["English"]["keywords"] = "";
	$fieldLabelsjaz_art["English"]["author"] = "Author";
	$fieldToolTipsjaz_art["English"]["author"] = "";
	$placeHoldersjaz_art["English"]["author"] = "";
	$fieldLabelsjaz_art["English"]["id_may"] = "";
	$fieldToolTipsjaz_art["English"]["id_may"] = "";
	$placeHoldersjaz_art["English"]["id_may"] = "";
	$fieldLabelsjaz_art["English"]["id_bbc"] = "";
	$fieldToolTipsjaz_art["English"]["id_bbc"] = "";
	$placeHoldersjaz_art["English"]["id_bbc"] = "";
	$fieldLabelsjaz_art["English"]["publishedTime"] = "Published Time";
	$fieldToolTipsjaz_art["English"]["publishedTime"] = "";
	$placeHoldersjaz_art["English"]["publishedTime"] = "";
	$fieldLabelsjaz_art["English"]["image_url"] = "";
	$fieldToolTipsjaz_art["English"]["image_url"] = "";
	$placeHoldersjaz_art["English"]["image_url"] = "";
	$fieldLabelsjaz_art["English"]["imageView"] = "";
	$fieldToolTipsjaz_art["English"]["imageView"] = "";
	$placeHoldersjaz_art["English"]["imageView"] = "";
	$fieldLabelsjaz_art["English"]["BBCS"] = "";
	$fieldToolTipsjaz_art["English"]["BBCS"] = "";
	$placeHoldersjaz_art["English"]["BBCS"] = "";
	$fieldLabelsjaz_art["English"]["MS"] = "";
	$fieldToolTipsjaz_art["English"]["MS"] = "";
	$placeHoldersjaz_art["English"]["MS"] = "";
	$pageTitlesjaz_art["English"]["view"] = "Article {%id}";
	$pageTitlesjaz_art["English"]["print"] = "Al Jazeera Articles";
	$pageTitlesjaz_art["English"]["masterlist"] = "Al Jazeera Article {%id}";
	$pageTitlesjaz_art["English"]["masterprint"] = "Al Jazeera Article {%id}";
	if (count($fieldToolTipsjaz_art["English"]))
		$tdatajaz_art[".isUseToolTips"] = true;
}


	$tdatajaz_art[".NCSearch"] = true;



$tdatajaz_art[".shortTableName"] = "jaz_art";
$tdatajaz_art[".nSecOptions"] = 0;

$tdatajaz_art[".mainTableOwnerID"] = "";
$tdatajaz_art[".entityType"] = 0;
$tdatajaz_art[".connId"] = "News_at_192_168_1_225";


$tdatajaz_art[".strOriginalTableName"] = "dbo.jaz_art";

	



$tdatajaz_art[".showAddInPopup"] = false;

$tdatajaz_art[".showEditInPopup"] = false;

$tdatajaz_art[".showViewInPopup"] = false;

$tdatajaz_art[".listAjax"] = false;
//	temporary
//$tdatajaz_art[".listAjax"] = false;

	$tdatajaz_art[".audit"] = true;

	$tdatajaz_art[".locking"] = true;


$pages = $tdatajaz_art[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajaz_art[".edit"] = true;
	$tdatajaz_art[".afterEditAction"] = 1;
	$tdatajaz_art[".closePopupAfterEdit"] = 1;
	$tdatajaz_art[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajaz_art[".add"] = true;
$tdatajaz_art[".afterAddAction"] = 1;
$tdatajaz_art[".closePopupAfterAdd"] = 1;
$tdatajaz_art[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajaz_art[".list"] = true;
}



$tdatajaz_art[".strSortControlSettingsJSON"] = "";

$tdatajaz_art[".strClickActionJSON"] = "{\"fields\":{\"BBCS\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.may_art\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"dbo.bbc_art\",\"url\":\"\"}},\"MS\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.may_art\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"dbo.may_art\",\"url\":\"\"}},\"author\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"body\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"description\":{\"action\":\"open\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.may_art\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.may_art\",\"url\":\"\"}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id_bbc\":{\"action\":\"open\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.may_art\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"dbo.bbc_art\",\"url\":\"\"}},\"id_may\":{\"action\":\"open\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.may_art\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"dbo.may_art\",\"url\":\"\"}},\"image_url\":{\"action\":\"open\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.may_art\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.may_art\",\"url\":\"\"}},\"keywords\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"publishedTime\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"title\":{\"action\":\"open\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.may_art\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.may_art\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"dbo.may_art\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"dbo.may_art\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatajaz_art[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajaz_art[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajaz_art[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajaz_art[".printFriendly"] = true;
}



$tdatajaz_art[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajaz_art[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajaz_art[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajaz_art[".isUseAjaxSuggest"] = true;



																											

$tdatajaz_art[".ajaxCodeSnippetAdded"] = false;

$tdatajaz_art[".buttonsAdded"] = false;

$tdatajaz_art[".addPageEvents"] = true;

// use timepicker for search panel
$tdatajaz_art[".isUseTimeForSearch"] = false;


$tdatajaz_art[".badgeColor"] = "DB7093";


$tdatajaz_art[".allSearchFields"] = array();
$tdatajaz_art[".filterFields"] = array();
$tdatajaz_art[".requiredSearchFields"] = array();

$tdatajaz_art[".googleLikeFields"] = array();
$tdatajaz_art[".googleLikeFields"][] = "id";
$tdatajaz_art[".googleLikeFields"][] = "title";
$tdatajaz_art[".googleLikeFields"][] = "description";
$tdatajaz_art[".googleLikeFields"][] = "body";
$tdatajaz_art[".googleLikeFields"][] = "keywords";
$tdatajaz_art[".googleLikeFields"][] = "author";
$tdatajaz_art[".googleLikeFields"][] = "publishedTime";



$tdatajaz_art[".tableType"] = "list";

$tdatajaz_art[".printerPageOrientation"] = 0;
$tdatajaz_art[".nPrinterPageScale"] = 100;

$tdatajaz_art[".nPrinterSplitRecords"] = 40;

$tdatajaz_art[".geocodingEnabled"] = false;










$tdatajaz_art[".pageSize"] = 20;

$tdatajaz_art[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatajaz_art[".strOrderBy"] = $tstrOrderBy;

$tdatajaz_art[".orderindexes"] = array();


$tdatajaz_art[".sqlHead"] = "SELECT id,  	title,  	description,  	[body],  	keywords,  	author,  	id_may,  	id_bbc,  	publishedTime,  	image_url,  	image_url as imageView,  	'' as BBCS,  	'' as MS";
$tdatajaz_art[".sqlFrom"] = "FROM dbo.jaz_art";
$tdatajaz_art[".sqlWhereExpr"] = "";
$tdatajaz_art[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatajaz_art[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajaz_art[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajaz_art[".arrGroupsPerPage"] = $arrGPP;

$tdatajaz_art[".highlightSearchResults"] = true;

$tableKeysjaz_art = array();
$tableKeysjaz_art[] = "id";
$tdatajaz_art[".Keys"] = $tableKeysjaz_art;


$tdatajaz_art[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","id");
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


	$tdatajaz_art["id"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","title");
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


	$tdatajaz_art["title"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "title";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","description");
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


	$tdatajaz_art["description"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "description";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","body");
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


	$tdatajaz_art["body"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "body";
//	keywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keywords";
	$fdata["GoodName"] = "keywords";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","keywords");
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


	$tdatajaz_art["keywords"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "keywords";
//	author
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "author";
	$fdata["GoodName"] = "author";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","author");
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
			$edata["EditParams"].= " maxlength=135";

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


	$tdatajaz_art["author"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "author";
//	id_may
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_may";
	$fdata["GoodName"] = "id_may";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","id_may");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_may";

		$fdata["sourceSingle"] = "id_may";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_may";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatajaz_art["id_may"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "id_may";
//	id_bbc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_bbc";
	$fdata["GoodName"] = "id_bbc";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","id_bbc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_bbc";

		$fdata["sourceSingle"] = "id_bbc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_bbc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatajaz_art["id_bbc"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "id_bbc";
//	publishedTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "publishedTime";
	$fdata["GoodName"] = "publishedTime";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","publishedTime");
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


	$tdatajaz_art["publishedTime"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "publishedTime";
//	image_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "image_url";
	$fdata["GoodName"] = "image_url";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","image_url");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "image_url";

		$fdata["sourceSingle"] = "image_url";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image_url";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 360;
	$vdata["ImageHeight"] = 200;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

		
	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
		$vdata["fieldIsImageUrl"] = true;

	
	
	
	
	
	
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


	$tdatajaz_art["image_url"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "image_url";
//	imageView
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "imageView";
	$fdata["GoodName"] = "imageView";
	$fdata["ownerTable"] = "dbo.jaz_art";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","imageView");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "image_url";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image_url";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

		
	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
		$vdata["fieldIsImageUrl"] = true;

	
	
	
	
	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatajaz_art["imageView"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "imageView";
//	BBCS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "BBCS";
	$fdata["GoodName"] = "BBCS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","BBCS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BBCS";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatajaz_art["BBCS"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "BBCS";
//	MS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MS";
	$fdata["GoodName"] = "MS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("dbo_jaz_art","MS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MS";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatajaz_art["MS"] = $fdata;
		$tdatajaz_art[".searchableFields"][] = "MS";


$tables_data["dbo.jaz_art"]=&$tdatajaz_art;
$field_labels["dbo_jaz_art"] = &$fieldLabelsjaz_art;
$fieldToolTips["dbo_jaz_art"] = &$fieldToolTipsjaz_art;
$placeHolders["dbo_jaz_art"] = &$placeHoldersjaz_art;
$page_titles["dbo_jaz_art"] = &$pageTitlesjaz_art;


changeTextControlsToDate( "dbo.jaz_art" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.jaz_art"] = array();
//	dbo.may_art
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.may_art";
		$detailsParam["dOriginalTable"] = "dbo.may_art";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "may_art";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_may_art");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.jaz_art"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.jaz_art"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.jaz_art"][$dIndex]["masterKeys"][]="id_may";

				$detailsTablesData["dbo.jaz_art"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.jaz_art"][$dIndex]["detailKeys"][]="id";
//	dbo.bbc_art
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.bbc_art";
		$detailsParam["dOriginalTable"] = "dbo.bbc_art";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "bbc_art";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_bbc_art");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.jaz_art"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.jaz_art"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.jaz_art"][$dIndex]["masterKeys"][]="id_bbc";

				$detailsTablesData["dbo.jaz_art"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.jaz_art"][$dIndex]["detailKeys"][]="id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.jaz_art"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.bbc_art";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.bbc_art Chart";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "bbc_art_chart";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["dbo.jaz_art"][0] = $masterParams;
				$masterTablesData["dbo.jaz_art"][0]["masterKeys"] = array();
	$masterTablesData["dbo.jaz_art"][0]["masterKeys"][]="id";
				$masterTablesData["dbo.jaz_art"][0]["detailKeys"] = array();
	$masterTablesData["dbo.jaz_art"][0]["detailKeys"][]="id_bbc";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.may_art";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.may_art Chart";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "may_art_chart";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["dbo.jaz_art"][1] = $masterParams;
				$masterTablesData["dbo.jaz_art"][1]["masterKeys"] = array();
	$masterTablesData["dbo.jaz_art"][1]["masterKeys"][]="id";
				$masterTablesData["dbo.jaz_art"][1]["detailKeys"] = array();
	$masterTablesData["dbo.jaz_art"][1]["detailKeys"][]="id_may";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_jaz_art()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	title,  	description,  	[body],  	keywords,  	author,  	id_may,  	id_bbc,  	publishedTime,  	image_url,  	image_url as imageView,  	'' as BBCS,  	'' as MS";
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
	"m_srcTableName" => "dbo.jaz_art"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.jaz_art";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "dbo.jaz_art";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "dbo.jaz_art";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto12["m_sql"] = "[body]";
$proto12["m_srcTableName"] = "dbo.jaz_art";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keywords",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto14["m_sql"] = "keywords";
$proto14["m_srcTableName"] = "dbo.jaz_art";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "author",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto16["m_sql"] = "author";
$proto16["m_srcTableName"] = "dbo.jaz_art";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_may",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto18["m_sql"] = "id_may";
$proto18["m_srcTableName"] = "dbo.jaz_art";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_bbc",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto20["m_sql"] = "id_bbc";
$proto20["m_srcTableName"] = "dbo.jaz_art";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "publishedTime",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto22["m_sql"] = "publishedTime";
$proto22["m_srcTableName"] = "dbo.jaz_art";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "image_url",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto24["m_sql"] = "image_url";
$proto24["m_srcTableName"] = "dbo.jaz_art";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "image_url",
	"m_strTable" => "dbo.jaz_art",
	"m_srcTableName" => "dbo.jaz_art"
));

$proto26["m_sql"] = "image_url";
$proto26["m_srcTableName"] = "dbo.jaz_art";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "imageView";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto28["m_sql"] = "''";
$proto28["m_srcTableName"] = "dbo.jaz_art";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "BBCS";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto30["m_sql"] = "''";
$proto30["m_srcTableName"] = "dbo.jaz_art";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "MS";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "dbo.jaz_art";
$proto33["m_srcTableName"] = "dbo.jaz_art";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "title";
$proto33["m_columns"][] = "description";
$proto33["m_columns"][] = "body";
$proto33["m_columns"][] = "keywords";
$proto33["m_columns"][] = "author";
$proto33["m_columns"][] = "id_may";
$proto33["m_columns"][] = "id_bbc";
$proto33["m_columns"][] = "publishedTime";
$proto33["m_columns"][] = "image_url";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "dbo.jaz_art";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "dbo.jaz_art";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.jaz_art";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jaz_art = createSqlQuery_jaz_art();


	
		;

													

$tdatajaz_art[".sqlquery"] = $queryData_jaz_art;



include_once(getabspath("include/jaz_art_events.php"));
$tdatajaz_art[".hasEvents"] = true;

?>