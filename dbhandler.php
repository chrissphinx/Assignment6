<?php
class DBHandler
{
	private $db;

	function __construct() {
		$this->db = new SQLite3('world.db');
	}

    public function &query($line) {
    	$result = $this->db->query($line);
    	return $result;
    }

    public function close() {
    	$this->db->close();
    }
}
?>