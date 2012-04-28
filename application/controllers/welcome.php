<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('template');
		$this->template->content('header', 'This is the header');
		$this->template->content('footer', 'This is the footer');
		$this->template->content('content', 'Pre-content');
		$this->template->add_menu_item('main', '/', 'home');
		$this->template->add_menu_item('alt', '/', 'alt home');
		$this->template->render('Main Content');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */