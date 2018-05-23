<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Egitim extends CI_Controller {

	
	public function index()
	{
            
	}
        
        public function liste($parametre1 = '', $parametre2 =''){
            
            echo "Burada eğitimler listelenecektir."."<br>";
            echo $parametre1."-".$parametre2;
        }
        
        public function uri_segment(){
            echo $this->uri->segment(1)."<br>";
            echo $this->uri->segment(2)."<br>";
            echo $this->uri->segment(3)."<br>";
            echo $this->uri->segment(4
                    )."<br>";
        }
}
