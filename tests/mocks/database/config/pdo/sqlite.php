<<<<<<< HEAD
<?php

return array(

	// Typical Database configuration
	'pdo/sqlite' => array(
		'dsn' => 'sqlite:/'.realpath(__DIR__.'/../..').'/ci_test.sqlite',
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => 'sqlite',
		'dbdriver' => 'pdo',
		'subdriver' => 'sqlite'
	),

	// Database configuration with failover
	'pdo/sqlite_failover' => array(
		'dsn' => 'sqlite:not_exists.sqlite',
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => 'sqlite',
		'dbdriver' => 'pdo',
		'subdriver' => 'sqlite',
		'failover' => array(
			array(
				'dsn' => 'sqlite:/'.realpath(__DIR__.'/../..').'/ci_test.sqlite',
				'hostname' => 'localhost',
				'username' => 'sqlite',
				'password' => 'sqlite',
				'database' => 'sqlite',
				'dbdriver' => 'pdo',
				'subdriver' => 'sqlite'
			)
		)
	)
=======
<?php

return array(

	// Typical Database configuration
	'pdo/sqlite' => array(
		'dsn' => 'sqlite:/'.realpath(__DIR__.'/../..').'/ci_test.sqlite',
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => 'sqlite',
		'dbdriver' => 'pdo',
		'subdriver' => 'sqlite'
	),

	// Database configuration with failover
	'pdo/sqlite_failover' => array(
		'dsn' => 'sqlite:not_exists.sqlite',
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => 'sqlite',
		'dbdriver' => 'pdo',
		'subdriver' => 'sqlite',
		'failover' => array(
			array(
				'dsn' => 'sqlite:/'.realpath(__DIR__.'/../..').'/ci_test.sqlite',
				'hostname' => 'localhost',
				'username' => 'sqlite',
				'password' => 'sqlite',
				'database' => 'sqlite',
				'dbdriver' => 'pdo',
				'subdriver' => 'sqlite'
			)
		)
	)
>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
);