<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class ServiceController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function household_shifting()
	{
		$this->load->view('household_shifting_view');
	}
	public function relocation_services()
	{
		$this->load->view('relocation_services_view');
	}
	public function corporate_shifting_service()
	{
		$this->load->view('corporate_shifting_service_view');
	}
	public function office_relocation_services()
	{
		$this->load->view('office_relocation_services_view');
	}
	public function car_transportation_services()
	{
		$this->load->view('car_transportation_services_view');
	}
	public function international_shifting_services()
	{
		$this->load->view('international_shifting_services_view');
	}
}