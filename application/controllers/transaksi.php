<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Transaksi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_m');
		$this->load->model('penyewa_m');
		$this->load->model('gedung_m');
		$this->load->model('tipe_sewa_m');
	}

	function index()
	{
		$transaksi = $this->transaksi_m->selectAll();
		$data['data'] = "";
		$no = 1;
		foreach ($transaksi as $row)
		{
			$penyewa = $this->penyewa_m->selectBy('kd_data_penyewa', $row->kd_data_penyewa)->row();
			$gedung = $this->gedung_m->selectBy('kd_gedung', $row->kd_gedung)->row();
			$tipe_sewa = $this->tipe_sewa_m->selectBy('kd_tipe_sewa', $row->kd_tipe_sewa)->row();

			if ($row->lunas==1)
            {
            	$row->lunas = 'lunas';
            }
            else
            {
            	$row->lunas = 'belum lunas';
            }

			$data['data'] .= "<tr>
                                <td>$no.</td>
                                <td>$row->kd_booking_gedung</td>
                                <td>$penyewa->nama_penyewa</td>
                                <td>$gedung->nama_gedung</td>
                                <td>$tipe_sewa->nama_tipe_sawa</td>
                                <td>$row->tanggal_booking</td>
                                <td>$row->tanggal_sewa</td>
                                <td>$row->durasi</td>
                                <td>$row->jumlah_tamu</td>
                                <td>$row->keterangan</td>
                                <td>$row->lunas</td>
                                <td><a href='".base_url()."penyewa/view/$row->kd_data_penyewa'><font color='blue'>Update</a></font></td>					
                                
                            </tr>";

            $no++;
		}

		$data['title'] = 'Transaksi';
		$data['main_view'] = 'transaksi_v';
		$this->load->view('templatemenu_v', $data);
	}

	function view()
	{
		$data['title'] = 'Transaksi';
		$data['main_view'] = 'transaksi_v';
		$this->load->view('templatemenu_v', $data);
	}
	
}