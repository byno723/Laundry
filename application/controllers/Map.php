<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Map extends CI_Controller{
  public  function __construct(){
        parent::__construct();
    }
  public  function index(){
       
            $data['title'] = "Home";
        $this->load->view("templates/nav",$data);
        $this->load->view("templates/side");
        $this->load->view("menu/map",$data);
        $this->load->view("templates/foot");
       
    }
}