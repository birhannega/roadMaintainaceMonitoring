
<?php 
/**
 * 
 */
 class Production extends CI_controller
 {

     /**
      *index page for production site users
      */
     public function index()
 	{
 		$this->load->view('header'); 
 		$this->load->view('Production/nav');
 		$this->load->view('footer'); 
 	}	
 } 
 ?>