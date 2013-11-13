<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
		$this->load->model('heru_produk','datamodel'); 
		$this->load->library("pagination");
    }
	   
	
	public function index()
	{

		$xdata['title']='Data Products';	

		$db = $this->db->get('products');
		 
		 $conf['total_rows'] = $db->num_rows();
		 $conf['per_page'] = 10;
		 $conf['uri_segment'] = 4;
		 $conf['first_page'] = 'Depan';
		 $conf['last_page'] = 'Belakang';
		 $conf['next_page'] = '&laquo;';
		 $conf['prev_page'] = '&raquo;';
		 $conf['last_link'] = 'Belakang';
		 $conf['first_link'] = 'Depan';
		 $conf['base_url'] = base_url()."backend/products/index";
		 $this->pagination->initialize($conf);
		 
         $hal = $this->uri->segment(4);
		 if($hal==""){
			 $hal=0;
		 }
           
         $xdata['heru_lihat'] = $this->datamodel->db($conf["per_page"], $hal);
		 $xdata['page'] = $this->pagination->create_links();
		 $xdata['no'] = $hal;
		 $this->mytemplate->loadBackend('products',$xdata);
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
