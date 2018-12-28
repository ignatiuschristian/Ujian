<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ujian extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('index'); // Load SiswaModel ke controller ini
  }
  
  public function index(){
    $data['Ujian'] = $this->index->view();
    $this->load->view('ujian/index', $data);
  
  }
}