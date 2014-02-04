<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

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
		$data['topic1'] = 'Admission';
		$data['topic2'] = 'แนะนำคณะ';
		$data['topic3'] = 'ข่าวการศึกษา';
		$data['topic4'] = 'ทุนการศึกษา';
		$data['topic5'] = 'คลังข้อสอบ';
		$this->loadView('newsView',$data);
	}
	
	public function get_feed($num){
		$this->load->model('feed_helper');
		$data['result'] = $this->feed_helper->get_ars($num);
		$this->load->view('RF_view', $data);
	}
}
