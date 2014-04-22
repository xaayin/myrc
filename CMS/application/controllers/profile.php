<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->database();
	}

	function edit()
	{

	    echo("You can access this page because you're the account holder.");
	    echo("This page is Very Private Page (VPP) controlled. Only Account Holder and Admin can edit the account setting.");
	}


}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */