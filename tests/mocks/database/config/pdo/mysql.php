<<<<<<< HEAD
<?php

return array(

	// Typical Database configuration
	'pdo/mysql' => array(
		'dsn' => 'mysql:host=localhost;dbname=ci_test',
		'hostname' => 'localhost',
		'username' => 'travis',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql'
	),

	// Database configuration with failover
	'pdo/mysql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql',
		'failover' => array(
			array(
				'dsn' => 'mysql:host=localhost;dbname=ci_test',
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'pdo',
				'subdriver' => 'mysql'
			)
		)
	)
=======
<?php

return array(

	// Typical Database configuration
	'pdo/mysql' => array(
		'dsn' => 'mysql:host=localhost;dbname=ci_test',
		'hostname' => 'localhost',
		'username' => 'travis',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql'
	),

	// Database configuration with failover
	'pdo/mysql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql',
		'failover' => array(
			array(
				'dsn' => 'mysql:host=localhost;dbname=ci_test',
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'pdo',
				'subdriver' => 'mysql'
			)
		)
	)
>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
);