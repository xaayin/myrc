<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Salary extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

 	/**
	 * Method for viewing the salary list of all employers
	 * Only user from accounting departement can review this information
	 */
	function index()
	{
	    echo("You can access this page.");
	    echo("Only user with role_id = 2 (e.g. Accounting role group) can view this page.");

	}

 	/**
	 * Method for viewing user salary
	 * Only John can view Jhon's salary. John can't view Richard's or Chyntia's salaries.
	 *
	 */
	function personal()
	{
	    echo("You can access this page because you're the account holder.");
	    echo("This page is Very Private Page (VPP) controlled. Only Account Holder and Admin can view this page.");
	}
}

/* End of file newfile.php */
/* Location: ./application/controllers/newfile.php */