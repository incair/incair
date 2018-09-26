<?php
return array(
	// Cache Driver
	// Drivers: 'file', 'memcached', 'apc', 'redis', 'database'.
	'driver' => 'file',
	
	// Cache Key
	'key' => 'incair',
	
	// Cache Database
	'database' => array('table' => 'incair_cache'),
	
	// Memcached Servers
	'memcached' => array(
		array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),
	),	
);