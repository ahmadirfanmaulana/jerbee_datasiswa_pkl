<?php

/**
 *
 */
class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('ModelofDashboard');
  }
  public function index()
  {
    $data['menu_dashboard'] = 'active';

    $this->load->view('template/meta_header');
    $this->load->view('template/header',$data);
    $this->load->view('site/dashboard');
    $this->load->view('template/footer');
    $this->load->view('template/meta_footer');
  }
}


 ?>
