<?

class Model
{
	
	function __construct($host, $name, $user, $pass)
	{
		$this->_db = new PDO("mysql:host=".$host.";dbname=".$name, $user, $pass);
	}

	function GetCurrents()
	{
		$query = $this->_db->query('SELECT * FROM currents');
		$query->execute();
		return $query->fetchAll();
	}

	function GetIncommings()
	{
		$query = $this->_db->query('SELECT * FROM incommings');
		$query->execute();
		return $query->fetchAll();
	}
}