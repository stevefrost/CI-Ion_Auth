<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if ($this->ion_auth->logged_in())
        {
        	// this is a public controller, so they don't need to be logged in, however
        	// if they are logged in, cache a copy of their profile
        	$this->data['ia_user'] = $this->ion_auth->profile();
       	}
	}
}