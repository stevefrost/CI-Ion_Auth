<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Private_Controller extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
		
		// this is a private controller, if they are not logged in, redirect them to log in
    	if ( ! $this->ion_auth->logged_in())
        {
			redirect('auth/login');
        }
   	}
	//if you are here, they are logged in
}