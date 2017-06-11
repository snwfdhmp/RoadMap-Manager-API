<?

	include_once 'db.php';

	function Get($what) {
		global $db;
		switch($what) {
			case "currents":
				send($db->GetCurrents());
				break;
			case "incommings":
				send($db->GetIncommings());
				break;
			default:
				error("Invalid Get.What");
				break;
		}
	}
