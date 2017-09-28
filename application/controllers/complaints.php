<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaints extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->library('session');
        if( !$this->session->userdata('logged_in') && $this->router->method != 'login' ) {
            // redirect('login/biselogin');
        }
    }
    public function index()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '6',
        ); 

        $this->load->library('session');
        $this->load->model('BiseComplaints_model');
        $NinthStdData = array('data'=>$this->BiseComplaints_model->getComplain());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('Complaints/complaints.php',$NinthStdData);
        $this->load->view('common/footer.php');

    }
   public function completeCMP()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '6',
        ); 

        $this->load->library('session');
        $this->load->model('BiseComplaints_model');
        $NinthStdData = array('data'=>$this->BiseComplaints_model->getCompleted());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('Complaints/complaintsCMP.php',$NinthStdData);
        $this->load->view('common/footer.php');

    }
    public function reply()
    {
        $this->load->helper('url');
        $complaintId = $this->uri->segment(3);
        

        $this->load->library('session');
        $this->load->model('BiseComplaints_model');
        if($this->session->flashdata('error')){
            //DebugBreak();
            $data = array(
                'isselected' => '6',
                'CompId' => $complaintId,
                'error' => $this->session->flashdata('error')
            ); 
        }
        else
        {
            $data = array(
                'isselected' => '6',
                'CompId' => $complaintId
            ); 
        }
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('Complaints/reply.php');
        $this->load->view('common/footer.php');

    }
    
    public function sendEmail()
    {
        
        $this->load->library('session');
        $this->load->model('BiseComplaints_model');
        if(!(empty($_POST))) 
        {

           /* $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 587,
                'smtp_user' => 'noreplybisegrw@gmail.com', // change it to yours
                'smtp_pass' => 'bc090402770', // change it to yours
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
                    */
           /* $this->load->library('email',$config);

            
            $this->email->from('complaint4bisegrw@gmail.com', 'B.I.S.E GUJRANWALA');
            $this->email->to($CmpData[0]['email']); 
            // $this->email->cc('another@another-example.com'); 
            //$this->email->bcc('them@their-example.com'); 
            $this->email->subject('Reply '.$CmpData[0]['comtype']);
            $this->email->message($_POST['address']);    
            if ( ! $this->email->send())
            {
                $error = $this->email->print_debugger();
                $this->session->set_flashdata('error',"Email Not Send Please try Again.");
                var_dump($error);
                //redirect('complaints/reply/'.$_POST['comId']);
            }
            else
            {             */
                //$CmpData = $this->BiseComplaints_model->getComplainbyId($_POST['comId']);
                $Logged_In_Array = $this->session->all_userdata();
                $userinfo = $Logged_In_Array['logged_in'];
                $CmpData = $this->BiseComplaints_model->updateStatus($_POST['comId'],$userinfo['Inst_Id'],$_POST['address']);

                redirect('complaints/index/');
          //  }

        }
        else
        {
            redirect('complaints/index');
        }

        
    }
    public function commonheader($data)
    {
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php',$data);
    } 
    public function commonfooter($data)
    {
        $this->load->view('common/footer.php',$data);
    }

}

/* End of file example.php */
/* Location: ./application/controllers/example.php */