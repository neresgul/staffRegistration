<?php

class BaseUrl extends CI_Controller{
    public function index(){
        //$this->load->helper("url");
        echo base_url();
    }
}

