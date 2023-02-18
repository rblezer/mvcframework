<?php
	/*
	 * PDO Datbase class
	 */

	class Database
	{
		private $host = DB_Host;
		private $user = DB_User;
		private $pass = DB_Pass;
		private $dbname = DB_Name;
		private $db;
		private $stmt;
		private $error;

		public function __construct()
		{
			// set DSN
			$dsn     = 'mysql:host='.$this->host.'dbname='.$this->dbname;
			$options = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
			);
			try {
				$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
			} catch (PDOException $e) {
				$this->error = $e->getMessage();
				echo $this->error;
			}
		}

		public function query($sql)
		{
			$this->stmt = $this->dbh->prepare($sql);
		}

		// bind values
		public function bind($param, $value, $type = null)
		{
			if (is_null($type)) {
				switch (true) {
					case is_int($value):
						$type = PDO::PARAM_INT;
						break;

					case is_null($value):
						$type = PDO::PARAM_NULL;
						break;

					case is_bool($value):
						$type = PDO::PARAM_BOOL;
						break;
					default :
						$type = PDO::PARAM_STR;
				}
			}
			$this->stmt->bindValue($value, $param, $type);
		}
		// execute prepared statement
		public function execute()
		{
			return $this->stmt->execute();
		}
	}
