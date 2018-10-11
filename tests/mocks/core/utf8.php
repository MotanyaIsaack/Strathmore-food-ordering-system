<<<<<<< HEAD
<?php

class Mock_Core_Utf8 extends CI_Utf8 {

	/**
	 * We need to define UTF8_ENABLED the same way that
	 * CI_Utf8 constructor does.
	 */
	public function __construct()
	{
		if (defined('UTF8_ENABLED'))
		{
			return;
		}

		parent::__construct();
	}

=======
<?php

class Mock_Core_Utf8 extends CI_Utf8 {

	/**
	 * We need to define UTF8_ENABLED the same way that
	 * CI_Utf8 constructor does.
	 */
	public function __construct()
	{
		if (defined('UTF8_ENABLED'))
		{
			return;
		}

		parent::__construct();
	}

>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
}