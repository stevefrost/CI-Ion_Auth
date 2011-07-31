<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends Private_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// You can only access this controller if you are logged in and an administrator
		if ( ! $this->ion_auth->is_admin())
		{
			$this->message->set('error','Administrator Access Required');
			// redirect them to auth/login, which will redirect them to the homepage if they are logged in.
			redirect('auth/login');
		}
	}
}