<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeProcessMenu"]=true;

		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["AfterLogout"]=true;


//	onscreen events
		$this->events["BBC_SNIPPET"] = true;
		$this->events["AL_MAYADEEN_SNIPPET"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu($pageObject)
{

		if(!strpos($_SERVER['REQUEST_URI'], 'jaz_art_list.php')){
    header("Location: jaz_art_list.php");
    exit();
}
;		
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		if(!strpos($_SERVER['REQUEST_URI'], 'jaz_art_list.php')){
    header("Location: jaz_art_list.php");
    exit();
}
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
				// After Logout
function AfterLogout($username)
{

		if(!strpos($_SERVER['REQUEST_URI'], 'jaz_art_list.php')){
    header("Location: jaz_art_list.php");
    exit();
}
;		
} // function AfterLogout

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_BBC_SNIPPET(&$params)
	{
	// Put your code here.
echo "BBC";
	;
}
	function event_AL_MAYADEEN_SNIPPET(&$params)
	{
	// Put your code here.
echo "AL MAYADEEN";
	;
}




}
?>
