<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class c_penyewa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_penyewa');

	}

	function index()
	{

		$penyewa = $this->penyewa->selectAll();
		$data[]
	}

	function view()
	{
		$data['title'] = 'Penyewa';
		$data['main_view'] = 'penyewa_v';
		$this->load->view('templatemenu_v', $data);
	}
 
}
?>