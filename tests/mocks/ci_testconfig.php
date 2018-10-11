<<<<<<< HEAD
<?php

class CI_TestConfig extends CI_Config {

	public $config = array();
	public $_config_paths = array(APPPATH);
	public $loaded = array();

	public function item($key, $index = '')
	{
		return isset($this->config[$key]) ? $this->config[$key] : FALSE;
	}

	public function load($file = '', $use_sections = FALSE, $fail_gracefully = FALSE)
	{
		$this->loaded[] = $file;
		return TRUE;
	}

}
=======
<?php

class CI_TestConfig extends CI_Config {

	public $config = array();
	public $_config_paths = array(APPPATH);
	public $loaded = array();

	public function item($key, $index = '')
	{
		return isset($this->config[$key]) ? $this->config[$key] : FALSE;
	}

	public function load($file = '', $use_sections = FALSE, $fail_gracefully = FALSE)
	{
		$this->loaded[] = $file;
		return TRUE;
	}

}
>>>>>>> f52ed86f44ddc8b70492a41516f5f57e6d758b13
