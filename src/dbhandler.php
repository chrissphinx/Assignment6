<?php
/*
 *	dbhandler.php							Colin MacCreery
 *
 *	simple object that handles SQL commands.
 *
 *******************************************************/

class DBHandler
{
/* PRIVATE FIELDS **************************************/
	private $db;

/* CONSTRUCTOR *****************************************/
	function __construct($file) {
		$this->db = new SQLite3($file);
	}

/* METHODS *********************************************/
	public function &select($line) {
		// RETURNS REFERENCE TO SQLite3Result OBJECT
		return $this->db->query($line);
	}

    public function exec($line) {
    	// CALLS SQLite3 OBJECT'S QUERY METHOD
    	$this->db->query($line);
    }

    public function close() {
    	// CALLS SQLite3 OBJECT'S CLOSE METHOD
    	$this->db->close();
    }
}
?>