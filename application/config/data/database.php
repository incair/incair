<?php
return array(
	// Database Query Logging
	'profile' => false,
	
	// PDO Fetch Style
	'fetch' => PDO::FETCH_CLASS,
	
	// Default Database Connection
	'default' => 'mysql',
	
	// Database Connections
	'connections' => array(
		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => 'application',
			'prefix'   => '',
		),
		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => '127.0.0.1',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
		),
		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => '127.0.0.1',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),
		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => '127.0.0.1',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),
	),

	// Redis Databases
	'redis' => array(
		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0
		),
	),
);