<<<<<<< HEAD
<?php

return array(

	// Typical Database configuration
	'pgsql' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'postgres',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'postgre'
	),

	// Database configuration with failover
	'pgsql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'postgre',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'postgres',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'postgre',
			)
		)
	)
=======
<?php

return array(

	// Typical Database configuration
	'pgsql' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'postgres',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'postgre'
	),

	// Database configuration with failover
	'pgsql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'postgre',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'postgres',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'postgre',
			)
		)
	)
>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
);