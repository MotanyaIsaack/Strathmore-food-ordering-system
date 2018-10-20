<<<<<<< HEAD
<?php

return array(

	// Typical Database configuration
	'mysql' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'travis',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'mysql'
	),

	// Database configuration with failover
	'mysql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'mysql',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'mysql',
			)
		)
	)
=======
<?php

return array(

	// Typical Database configuration
	'mysql' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'travis',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'mysql'
	),

	// Database configuration with failover
	'mysql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'mysql',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'mysql',
			)
		)
	)
>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
);