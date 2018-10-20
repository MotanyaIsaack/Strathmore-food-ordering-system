<<<<<<< HEAD
<?php

class Mock_Libraries_Encrypt extends CI_Encrypt {

	// Override inaccessible protected method
	public function __call($method, $params)
	{
		if (is_callable(array($this, '_'.$method)))
		{
			return call_user_func_array(array($this, '_'.$method), $params);
		}

		throw new BadMethodCallException('Method '.$method.' was not found');
	}

}
=======
<?php

class Mock_Libraries_Encrypt extends CI_Encrypt {

	// Override inaccessible protected method
	public function __call($method, $params)
	{
		if (is_callable(array($this, '_'.$method)))
		{
			return call_user_func_array(array($this, '_'.$method), $params);
		}

		throw new BadMethodCallException('Method '.$method.' was not found');
	}

}
>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
