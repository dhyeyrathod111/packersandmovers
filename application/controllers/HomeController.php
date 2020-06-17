<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class HomeController extends MY_Controller
{	
	public function __construct()
	{
		parent::__construct();
	}
	public function homepage()
	{
		$this->load->view('homepage_view');
	}
	public function aboutPage()
	{
		$this->load->view('about_view');
	}
	public function service()
	{
		$this->load->view('service_view');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function contact()
	{
		$to = "jackdeo@yopmail.com";
		$subject = "Test subject";
		$body = "hello message";

		echo "<pre>";print_r($this->email_trigger->sendMail($to , $subject , $body));exit();

		$this->load->view('contact_view');
	}
}