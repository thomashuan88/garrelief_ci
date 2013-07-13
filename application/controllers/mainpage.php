<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainpage extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
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
        // Your own constructor code
        $this->load->helper('url');
    }

    public function index()
    {
        
        $data = array(
            'title'=>'Home',
            'menu'=>$this->load->view('mainpage/menu','',true),
            'content'=>$this->load->view('mainpage/main','',true),
            'script'=>$this->load->view('mainpage/main_script','',true),
            'style'=>''
        );
        
        $this->load->view('layout',$data);
        
    }

    public function contactus()
    {
        $data = array(
            'title'=>'Contact Us',
            'menu'=>$this->load->view('mainpage/menu','',true),
            'content'=>$this->load->view('mainpage/contactus','',true),
            'script'=>'',
            'style'=>$this->load->view('mainpage/contactus_style','',true)
        );
        
        $this->load->view('layout',$data);
    }

    public function mission()
    {
        $data = array(
            'title'=>'Mission',
            'menu'=>$this->load->view('mainpage/menu','',true),
            'content'=>$this->load->view('mainpage/mission','',true),
            'script'=>'',
            'style'=>$this->load->view('mainpage/mission_style','',true)
        );
        
        $this->load->view('layout',$data);
    }

    public function how_we_work()
    {
        $data = array(
            'title'=>'How We Work',
            'menu'=>$this->load->view('mainpage/menu','',true),
            'content'=>$this->load->view('mainpage/how_we_work','',true),
            'script'=>'',
            'style'=>$this->load->view('mainpage/how_we_work_style','',true)
        );
        
        $this->load->view('layout',$data);
    }    

    public function founder()
    {
        $data = array(
            'title'=>'Our Founder',
            'menu'=>$this->load->view('mainpage/menu','',true),
            'content'=>$this->load->view('mainpage/founder','',true),
            'script'=>'',
            'style'=>$this->load->view('mainpage/founder_style','',true)
        );
        
        $this->load->view('layout',$data);
    }

    public function elementary()
    {
        $data = array(
            'title'=>'Elementary School',
            'menu'=>$this->load->view('mainpage/menu','',true),
            'content'=>$this->load->view('mainpage/elementary','',true),
            'script'=>'',
            'style'=>$this->load->view('mainpage/elementary_style','',true)
        );
        
        $this->load->view('layout',$data);
    }

    public function donate()
    {
        $data = array(
            'title'=>'Donate',
            'menu'=>$this->load->view('mainpage/menu','',true),
            'content'=>$this->load->view('mainpage/donate','',true),
            'script'=>$this->load->view('mainpage/donate_script','',true),
            'style'=>$this->load->view('mainpage/donate_style','',true)
        );
        
        $this->load->view('layout',$data);
    }

    public function paypal()
    {
        $data = array(
            'title'=>'Donate',
            'menu'=>$this->load->view('mainpage/menu','',true),
            'content'=>$this->load->view('mainpage/paypal','',true),
            'script'=>$this->load->view('mainpage/paypal_script','',true),
            'style'=>$this->load->view('mainpage/paypal_style','',true)
        );
        
        $this->load->view('layout',$data);
    }    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */