<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Penyewa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('penyewa_m');
	}

	function index()
	{
		$penyewa = $this->penyewa_m->selectAll();
		$data['data'] = "";
		$no = 1;
		foreach ($penyewa as $row)
		{
			//$penyewa = $this->penyewa_m->selectBy('id_penyewa', $row->id_penyewa)->row();
			$data['data'] .= "<tr>
                                <td>$no.</td>
                                <td>$row->kd_data_penyewa</td>
                                <td>$row->nama_penyewa</td>
                                <td>$row->alamat</td>
                                <td>$row->no_telp</td>
                                <td><a href='".base_url()."penyewa/view/$row->kd_data_penyewa'><font color='blue'>Update</a></font></td>
                                					
                                
                            </tr>";
            $no++;
		}

		if ($this->input->post('add'))
		{
			$data = array('kd_data_penyewa' => $this->input->post('kd_penyewa')
						  ,'nama_penyewa' => $this->input->post('nama_penyewa')
						  ,'alamat' => $this->input->post('alamat')
						  ,'no_telp' => $this->input->post('no_telp'));
			$this->penyewa_m->insert($data);
			redirect(base_url().'penyewa');
			
		}

		$data['title'] = 'Penyewa';
		$data['main_view'] = 'penyewa_v';
		$this->load->view('templatemenu_v', $data);
	}

	function view()
	{
		$id = $this->uri->segment(3);
		$penyewa = $this->penyewa_m->selectBy('kd_data_penyewa', $id)->result();
		foreach ($penyewa as $row)
		{
			$data['kd_data_penyewa'] = $row->kd_data_penyewa;
			$data['nama_penyewa'] = $row->nama_penyewa;
			$data['alamat'] = $row->alamat;
			$data['no_telp'] = $row->no_telp;
			// $alumni = $this->alumni_m->selectBy('id_alumni', $row->id_alumni)->row();
			// $data['nama'] = $alumni->nama;
			// $data['judul'] = $row->judul;
			// $data['isi_info'] = $row->isi_info;
        }

        if ($this->input->post('update'))
		{
			$kd_penyewa = $this->input->post('kd_penyewa');
			$data = array('kd_data_penyewa' => $this->input->post('kd_penyewa')
						  ,'nama_penyewa' => $this->input->post('nama_penyewa')
						  ,'alamat' => $this->input->post('alamat')
						  ,'no_telp' => $this->input->post('no_telp'));
			$this->penyewa_m->update($data, $kd_penyewa);
			redirect(base_url().'penyewa');
			
		}

		if ($this->input->post('delete'))
		{
			$id = $this->input->post('kd_penyewa');
			$data = array('kd_data_penyewa' => $this->input->post('kd_penyewa')
						  ,'nama_penyewa' => $this->input->post('nama_penyewa')
						  ,'alamat' => $this->input->post('alamat')
						  ,'no_telp' => $this->input->post('no_telp'));
			$this->penyewa_m->delete($data, $id);
			redirect(base_url().'penyewa');
			
		}

		$data['title'] = 'Penyewa';
		$data['main_view'] = 'penyewa_update_v';
		$this->load->view('templatemenu_v', $data);
	}

	
}