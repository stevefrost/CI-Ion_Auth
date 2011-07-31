<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->data = array(); // set up empty container for view data		
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */