<<<<<<< HEAD
<?php

/**
 * Mock library to subclass Driver for testing
 */
class Mock_Libraries_Driver extends CI_Driver_Library {
	/**
	 * Set valid drivers list
	 */
	public function driver_list($drivers = NULL)
	{
		if (empty($drivers))
		{
			return $this->valid_drivers;
		}

		$this->valid_drivers = (array) $drivers;
	}

	/**
	 * Get library name
	 */
	public function get_name()
	{
		return $this->lib_name;
	}
=======
<?php

/**
 * Mock library to subclass Driver for testing
 */
class Mock_Libraries_Driver extends CI_Driver_Library {
	/**
	 * Set valid drivers list
	 */
	public function driver_list($drivers = NULL)
	{
		if (empty($drivers))
		{
			return $this->valid_drivers;
		}

		$this->valid_drivers = (array) $drivers;
	}

	/**
	 * Get library name
	 */
	public function get_name()
	{
		return $this->lib_name;
	}
>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
}