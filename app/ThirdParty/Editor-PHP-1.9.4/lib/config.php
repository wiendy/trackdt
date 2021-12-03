<?php if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Database user / pass
 * Set information here, if you want individual setting for CI4 and Editor Datatable
 * left blank if you want information database for Editor datatables same as CI4 in .env file
 * You must set information .env file in root directory
 */
$sql_detail = array(
	"type" => "Mysql",     // Database type: "Mysql", "Postgres", "Sqlserver", "Sqlite" or "Oracle"
	"user" => "",          // Database user name
	"pass" => "",          // Database password
	"host" => "localhost", // Database host
	"port" => "",          // Database connection port (can be left empty for default)
	"db"   => "",          // Database name
	"dsn"  => "",          // PHP DSN extra information. Set as `charset=utf8mb4` if you are using MySQL
	"pdoAttr" => array()   // PHP PDO attributes array. See the PHP documentation for all options
);

$sql_details = array(
	"type" => "Mysql",     // Database type: "Mysql", "Postgres", "Sqlserver", "Sqlite" or "Oracle"
	"user" => isset($_ENV['database.default.username']) ? $_ENV['database.default.username'] : $sql_detail['user'],          // Database user name
	"pass" => isset($_ENV['database.default.password']) ? $_ENV['database.default.password'] : $sql_detail['pass'],          // Database password
	"host" => isset($_ENV['database.default.hostname']) ? $_ENV['database.default.hostname'] : $sql_detail['host'], // Database host
	"port" => "",          // Database connection port (can be left empty for default)
	"db"   => isset($_ENV['database.default.database']) ? $_ENV['database.default.database'] : $sql_detail['db'],          // Database name
	"dsn"  => "",          // PHP DSN extra information. Set as `charset=utf8mb4` if you are using MySQL
	"pdoAttr" => array()   // PHP PDO attributes array. See the PHP documentation for all options
);



// This is included for the development and deploy environment used on the DataTables
// server. You can delete this block - it just includes my own user/pass without making 
// them public!
if ( is_file($_SERVER['DOCUMENT_ROOT']."/datatables/pdo.php") ) {
	include( $_SERVER['DOCUMENT_ROOT']."/datatables/pdo.php" );
}
// /End development include

