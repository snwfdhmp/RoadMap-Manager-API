<?
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: application/json');

$GLOBALS['conf'] = Array(
	"db_user" => "dev",
	"db_pass" => "dev",
	"db_host" => "localhost",
	"db_name" => "RoadMap"
	);


include_once 'db.php';

$db = new Model($GLOBALS['conf']['db_host'],$GLOBALS['conf']['db_name'],$GLOBALS['conf']['db_user'],$GLOBALS['conf']['db_pass']);

include_once 'std.php';

if(!isset($_GET['action']))
	error("Expecting 'action'");

switch ($_GET['action']) {
	case 'get':
	
	include_once 'get.php';

	if(!isset($_GET['what']))
		error("Get expects 'what'");

	echo Get($_GET['what']);

	break;

	default:
			# code...
	break;
}