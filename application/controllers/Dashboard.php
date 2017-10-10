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
    $this->load->view('template/meta_header');
    $this->load->view('template/header');
    $this->load->view('site/dashboard');
    $this->load->view('template/footer');
    $this->load->view('template/meta_footer');
  }
}


 ?>
