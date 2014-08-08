<?php
class Dbmanage
{
	private static $connection = null;
	private static $charset = 'UTF8';
	private static $host= 'localhost';
	private static $dbname = 'landingpages';
	private static $username = 'landingpages';
	private static $password = 'bellpark-landingpages';
	public  static $table = 'internship_2014';

	public static function connect ()
	{
		if (get_class(self::$connection) === 'PDO') return self::$connection;
		$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
			self::$host, self::$dbname, self::$charset);
		$config = array(
			PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '. self::$charset,
		);
		try {
			self::$connection = new PDO (
				$dsn,
				self::$username,
				self::$password,
				$config
			);
		} catch  (PDOException $e) {
		throw new \Exception ("DB Connection Failure: ". $e->getMessage());
		}
		return self::$connection;
	}
}
