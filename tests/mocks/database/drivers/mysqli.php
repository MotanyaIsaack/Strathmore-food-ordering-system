<<<<<<< HEAD
<?php

class Mock_Database_Drivers_Mysqli extends Mock_Database_DB_Driver {

	/**
	 * Instantiate the database driver
	 *
	 * @param	array	DB configuration to set
	 * @return	void
	 */
	public function __construct($config = array())
	{
		parent::__construct('CI_DB_mysqli_driver', $config);
	}

=======
<?php

class Mock_Database_Drivers_Mysqli extends Mock_Database_DB_Driver {

	/**
	 * Instantiate the database driver
	 *
	 * @param	array	DB configuration to set
	 * @return	void
	 */
	public function __construct($config = array())
	{
		parent::__construct('CI_DB_mysqli_driver', $config);
	}

>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
}