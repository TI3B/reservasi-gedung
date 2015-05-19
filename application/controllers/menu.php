<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Menu extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('berita_m');
		// $this->load->model('info_m');
		$this->load->model('transaksi_m');

	}

	function index()
	{
		if ($this->input->post('booking'))
		{
			redirect(base_url().'penyewa');
		}
		$data['title'] = 'Menu';
		$data['main_view'] = 'menu_v';
		$this->load->view('templatemenu_v', $data);
	}

	function view()
	{
		$data['title'] = 'Menu';
		$data['main_view'] = 'menu_v';
		$this->load->view('templatemenu_v', $data);
	}

	function service()
	{

		$transaksi = $this->transaksi_m->selectAll();
		$data = array();
		foreach ($transaksi as $row)
		{
			$tanggal_booking = substr($row->tanggal_booking,0,10);
			$data[]['date'] = $tanggal_booking;
			$data[]['badge'] = true;
			$data[]['title'] = "title";
			$data[]['body'] = "<p class=\"lead\">Body<\/p><p>bla bla.<\/p>";
			$data[]['footer'] = "footer"; 
		}
		echo json_encode($data);
	}
	
}