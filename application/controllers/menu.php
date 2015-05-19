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
		$this->load->model('penyewa_m');
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
			$penyewa = $this->penyewa_m->selectBy('kd_data_penyewa', $row->kd_data_penyewa)->row();
			$nama_penyewa = $penyewa->nama_penyewa;
			$data[] = array('date' => $tanggal_booking
						  ,'badge' => true
						  ,'title' => "Terbooking dengan kode booking : ".$row->kd_booking_gedung
						  ,'body' => "<p class=\"lead\">Terbooking, dengan keterangan <b>$row->keterangan</b><br>Atas Nama <b>$nama_penyewa</b></p>"
						  ,'footer' => ""); 
			
		}
		echo json_encode($data);
	}
	
}