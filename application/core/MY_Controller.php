<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class MY_Controller extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('Emailtrigger');
		$this->load->helper('url');

		
		$this->email_trigger = new Emailtrigger ;
	}	
}