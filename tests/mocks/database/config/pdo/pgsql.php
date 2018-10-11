<<<<<<< HEAD
<?php

return array(

	// Typical Database configuration
	'pdo/pgsql' => array(
		'dsn' => 'pgsql:host=localhost;port=5432;dbname=ci_test;',
		'hostname' => 'localhost',
		'username' => 'postgres',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'pgsql'
	),

	// Database configuration with failover
	'pdo/pgsql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'pgsql',
		'failover' => array(
			array(
				'dsn' => 'pgsql:host=localhost;port=5432;dbname=ci_test;',
				'hostname' => 'localhost',
				'username' => 'postgres',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'pdo',
				'subdriver' => 'pgsql'
			)
		)
	)
=======
<?php

return array(

	// Typical Database configuration
	'pdo/pgsql' => array(
		'dsn' => 'pgsql:host=localhost;port=5432;dbname=ci_test;',
		'hostname' => 'localhost',
		'username' => 'postgres',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'pgsql'
	),

	// Database configuration with failover
	'pdo/pgsql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'pgsql',
		'failover' => array(
			array(
				'dsn' => 'pgsql:host=localhost;port=5432;dbname=ci_test;',
				'hostname' => 'localhost',
				'username' => 'postgres',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'pdo',
				'subdriver' => 'pgsql'
			)
		)
	)
>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
);