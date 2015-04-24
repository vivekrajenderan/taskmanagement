<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	
	public function __construct() 
    {
        parent::__construct();			
		$this->load->helper('url');	 
        $this->load->library('session');
        $this->load->helper('form');
	     
	     $this->load->model('user/login_auth');
	     $this->load->library('form_validation');
    	if($this->session->userdata('userid')!="") 
		{
			redirect(base_url().'user/userlist', 'refresh');
		}

		
    }

    public function index()
	{
		$msg="";
		$post_set['username']="";
		$post_set['password']="";

		if (($this->input->server('REQUEST_METHOD') == 'POST')) {
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[30]');	
		$this->form_validation->set_rules('password', 'Last Name', 'trim|required|maxn_length[30]');
		if ($this->form_validation->run() === TRUE)
	    {
		$login_verify = $this->login_auth->login_verify(trim($this->input->post('email')),trim($this->input->post('password')));
		if($login_verify==1)
		{
			redirect(base_url().'user/userlist', 'refresh');
		}
		else
		{
			$msg="Invalid Credential";

		}
	    }
	    else
	    {
	    	$post_set=$_POST;
	    }
		
		}
		$data=array('post_set'=>$post_set,'msg'=>$msg);
		
		$this->load->view('user/login',$data);
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */