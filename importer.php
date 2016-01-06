<?php
#Apache lisence
#Version 2.0

class Importer {

	var $database = null;
	var $connection = null;
	var $compress = null;
	var $utf8 = null;

	var $importFilename = null;

	function Importer($db=null, $connection=null, $filepath='dump.sql', $compress=false) {
		$this->connection = $connection;
		$this->compress = $compress;
		$this->importFilename = $filepath;

		$this->utf8 = true;

		return $this->setDatabase($db);
	}

	function setDatabase($db){
		$this->database = $db;
		if ( !@mysql_select_db($this->database) )
			return false;
		return true;
  	}
	
