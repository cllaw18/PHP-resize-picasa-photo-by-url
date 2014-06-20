<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class picasa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
        $url = "https://lh4.googleusercontent.com/-dAejSnYrNw8/U6KpRsDbkNI/AAAAAAAAAyo/FetX2d5CN_A/s0/53a2a944b1842.jpg";
        $imgsize = "400";
        $this->load->library('picasa_resize');
        $data['newurl'] = $this->picasa_resize->resize_image($url, $imgsize);
        //$data['newurl'] = $this->picasa_resize->resize_image("https://lh4.googleusercontent.com/-dAejSnYrNw8/U6KpRsDbkNI/AAAAAAAAAyo/FetX2d5CN_A/s0/53a2a944b1842.jpg", "400");
		$this->load->view('index', $data);
	}//EOF index()
    
}

/* End of file picasa.php */
/* Location: ./application/controllers/picasa.php */
