<?php

/**
 *
 */
class Siswa extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('ModelofSiswa');
  }
  public function index()
  {
    $data['menu_sm'] = 'active';
    $data['menu_siswa'] = 'active';

    $this->load->view('template/meta_header');
    $this->load->view('template/header',$data);
    $this->load->view('site/siswa/siswa_homepage');
    $this->load->view('template/footer');
    $this->load->view('template/meta_footer');
  }
}


 ?>
