<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('vform_siswa');
    }
    public function print()
    {
        $this->form_validation->set_rules('name','Nama','required');
        $this->form_validation->set_rules('nisnumber','NIS','required|min_length[3]|integer');
        $this->form_validation->set_rules('class','Kelas','required');
        $this->form_validation->set_rules('birthday','Tanggal Lahir');
        $this->form_validation->set_rules('birthplace','Tempat Lahir');
        $this->form_validation->set_rules('address','Alamat');
        $this->form_validation->set_rules('gender','Jenis Kelamin');
        $this->form_validation->set_rules('religion','Agama');

        $this->form_validation->set_message('required', 'Enter %s');
        $this->form_validation->set_message('min_length', 'The {field} is {param}');
        $this->form_validation->set_message('integer', 'Intefer %s');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vform_siswa');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'nisnumber' => $this->input->post('nisnumber'),
                'class' => $this->input->post('class'),
                'birthday' => $this->input->post('birthday'),
                'birthplace' => $this->input->post('birthplace'),
                'address' => $this->input->post('address'),
                'gender' => $this->input->post('gender'),
                'religion' => $this->input->post('religion')
            ];
            $this->load->view('vresult_siswa', $data);
        }
    }
}
