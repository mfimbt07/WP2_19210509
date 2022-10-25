<?php
class Tugas_uts extends CI_Controller
{
	public function index()
	{
		$this->load->view('Tugas_uts/view-form');
	}
	public function cetak()
	{
		$this->form_validation->set_rules('nama', 'Nama Siswa',
		'required|min_length[3]', [
			'required' => 'Nama Siswa harus diisi',
			'min_lenght' => 'nama terlalu pendek'
		]);
		
		$this->form_validation->set_rules('nis', 'NIS',
		'required|min_length[3]', [
			'required' => 'Nomor Induk Siswa harus diisi',
			'min_lenght' => 'nis terlalu pendek'
		]);
		
		$this->form_validation->set_rules('kelas', 'Kelas',
		'required|min_length[3]', [
			'required' => 'Kelas harus diisi',
			'min_lenght' => 'kelas terlalu pendek'
		]);
		
		$this->form_validation->set_rules('tanggal', 'Tanggal Lahir',
		'required|min_length[10]', [
			'required' => 'Tanggal Lahir harus diisi',
			'min_lenght' => 'tanggal terlalu pendek'
		]);
		
		$this->form_validation->set_rules('tempat', 'Tempat Lahir',
		'required|min_length[3]', [
			'required' => 'Tempat Lahir harus diisi',
			'min_lenght' => 'tempat lahir terlalu pendek'
		]);
		
		$this->form_validation->set_rules('alamat', 'Alamat',
		'required|min_length[3]', [
			'required' => 'Alamat harus diisi',
			'min_lenght' => 'alamat terlalu pendek'
		]);
		
		$this->form_validation->set_rules('jenis', 'Jenis Kelamin',
		'required|min_length[0]', [
			'required' => 'Jenis Kelamin harus dipilih',
			'min_lenght' => 'jenis kelamin terlalu pendek'
		]);
		
		$this->form_validation->set_rules('agama', 'Agama',
		'required|min_length[1]', [
			'required' => 'Agama harus dipilih',
			'min_lenght' => 'agama terlalu pendek'
		]);
		if ($this->form_validation->run() != true) {
			$this->load->view('Tugas_uts/view-form');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nis' => $this->input->post('nis'),
				'kelas' => $this->input->post('kelas'),
				'tanggal' => $this->input->post('tanggal'),
				'tempat' => $this->input->post('tempat'),
				'alamat' => $this->input->post('alamat'),
				'jenis' => $this->input->post('jenis'),
				'agama' => $this->input->post('agama')
			];
		
			$this->load->view('Tugas_uts/view-data', $data);
		}
	}
}