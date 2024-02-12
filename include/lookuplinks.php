<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["dbo.may_art"] ) ) {
			$lookupTableLinks["dbo.may_art"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.may_art"]["jaz_art.id_may"] )) {
			$lookupTableLinks["dbo.may_art"]["jaz_art.id_may"] = array();
		}
		$lookupTableLinks["dbo.may_art"]["jaz_art.id_may"]["edit"] = array("table" => "dbo.jaz_art", "field" => "id_may", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.bbc_art"] ) ) {
			$lookupTableLinks["dbo.bbc_art"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.bbc_art"]["jaz_art.id_bbc"] )) {
			$lookupTableLinks["dbo.bbc_art"]["jaz_art.id_bbc"] = array();
		}
		$lookupTableLinks["dbo.bbc_art"]["jaz_art.id_bbc"]["edit"] = array("table" => "dbo.jaz_art", "field" => "id_bbc", "page" => "edit");
		if( !isset( $lookupTableLinks["dbo.may_art"] ) ) {
			$lookupTableLinks["dbo.may_art"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.may_art"]["jaz_art_chart.id_may"] )) {
			$lookupTableLinks["dbo.may_art"]["jaz_art_chart.id_may"] = array();
		}
		$lookupTableLinks["dbo.may_art"]["jaz_art_chart.id_may"]["search"] = array("table" => "dbo.jaz_art Chart", "field" => "id_may", "page" => "search");
		if( !isset( $lookupTableLinks["dbo.bbc_art"] ) ) {
			$lookupTableLinks["dbo.bbc_art"] = array();
		}
		if( !isset( $lookupTableLinks["dbo.bbc_art"]["jaz_art_chart.id_bbc"] )) {
			$lookupTableLinks["dbo.bbc_art"]["jaz_art_chart.id_bbc"] = array();
		}
		$lookupTableLinks["dbo.bbc_art"]["jaz_art_chart.id_bbc"]["search"] = array("table" => "dbo.jaz_art Chart", "field" => "id_bbc", "page" => "search");
}

?>