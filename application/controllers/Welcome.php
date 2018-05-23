<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
                $sayi_1=10;
                $sayi_2=20;
                $toplam= $sayi_1 + $sayi_2;
                
                $view_data = array(
                    "sayi1" => $sayi_1,
                    "sayi2" => $sayi_2,
                    "toplam" => $toplam
                );
                $this->load->view('test_view', $view_data);
	}
}
