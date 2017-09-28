<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    /**
    * Index Page for this controller.
    *
    * Maps to the following URL
    *         http://example.com/index.php/welcome
    *    - or -
    *         http://example.com/index.php/welcome/index
    *    - or -
    * Since this controller is set as the default controller in
    * config/routes.php, it's displayed at http://example.com/
    *
    * So any other public methods not prefixed with an underscore will
    * map to /index.php/welcome/<method_name>
    * @see http://codeigniter.com/user_guide/general/urls.html
    */
    function __construct()
    {
        ////DebugBreak();
        
        parent::__construct();
        $this->load->helper('url');
        //this condition checks the existence of session if user is not accessing  
        //login method as it can be accessed without user session
        $this->load->library('session');
        if( !$this->session->userdata('logged_in') && $this->router->method != 'login' ) {
            redirect('login');
        }
    }
    public function index()
    {
        $this->load->helper('url');
       
       
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        
     //   DebugBreak();
        
        $this->load->model('Dashboard_model');
      //  $this->load->model('session_model');
       // $Logged_In_Array  = $this->session_model->getSessInfo($Logged_In_Array['session_id']);
         // $udata = unserialize($res)
     //  $Logged_In_Array['logged_in'] = unserialize($session[0]['user_data']);
        
        $userinfo = $Logged_In_Array['logged_in'];
      

       $data = array(
            'isselected' => '1',
        );
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('dashboard/dashboard.php');
        $this->load->view('common/footer.php');
    }
    public function getstats()
    {

        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->model('Dashboard_model');
        $data = $this->Dashboard_model->getInstInfo($userinfo['Inst_Id']);
        $grading_data = $this->Dashboard_model->getInstgrading($userinfo['Inst_Id']);
        $stats =  array();
        $crntyear = date('Y')-1; 
        $stats['iyear'][]  = $crntyear;
        $stats['iyear'][]  = $crntyear-1;
        $stats['iyear'][]  = $crntyear-2;
        $stats['iyear'][]  = $crntyear-3;
        $stats['iyear'][]  = $crntyear-4;
        $regs = '';
        $readm = '';
        $adm2 = '';
        $adm1 = '';
        $supplyadm = '';
        $grading = array();
        $isexist = 0;
         
        $isgradingexist = 0;
        //DebugBreak();
        $crntyear = date('Y')-5;
        for($i = 0 ; $i<2;  $i++)
        {
            $isexist = 0;
            for($j =0 ; $j<count( $data) ;  $j++)
            {

                if( $stats['iyear'][$i] == $data[$j]['iyear'])
                {
                    $regs[]   =  $data[$j]['RegCount'];
                    $readm[]  =  $data[$j]['ReAdm'];
                    $adm2[]   =  $data[$j]['Adm2'];
                    $adm1[]   =  $data[$j]['Adm1'];
                    $supplyadm[] =  $data[$j]['Adms2'];
                    $isexist =  1;
                } 
            }
            if($isexist ==  0)
            {
                $regs[]   =  0;
                $readm[]  =  0;
                $adm2[]   =  0;
                $adm1[]   =  0;
                $supplyadm[] =  0; 
            }
          
        }
        
        for($i = 0 ; $i<count($stats['iyear']);  $i++)
        {
            $isgradingexist = 0;
            
            for($j =0 ; $j<count( $grading_data) ;  $j++)
            {
                if($crntyear == $grading_data[$j]['iyear'])
                {
                    $stats['grading'][] =  floatval($grading_data[$j]['Ranking_Score']);
                    $isgradingexist =  1;
                } 
            }
            if($isgradingexist ==  0)
            {
                $stats['grading'][] =  null; 
            }
             $crntyear++;
        }
        
        
        $stats['states'][] = array('name'=>'Regsitration', "data"=> $regs);
        $stats['states'][] = array('name'=>'Re-Admission', "data"=> $readm);
        $stats['states'][] = array('name'=>'9th Admission', "data"=> $adm1);
        $stats['states'][] = array('name'=>'10th Admission', "data"=> $adm2);
        $stats['states'][] = array('name'=>'Supply Admission', "data"=>$supplyadm);
       // $stats['grading'] = $grading;
      
       // DebugBreak();
        
        
        echo json_encode($stats) ;
    } 
    public function Profile()
    {
        //////DebugBreak();
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 1;
        $Inst_Id = $userinfo['Inst_Id'];
        $isgovt = $userinfo['isgovt'];
        $emis = $userinfo['emis'];
        $email = $userinfo['email'];
        $phone = $userinfo['phone'];
        $cell = $userinfo['cell'];
        $dist = $userinfo['dist'];
        $teh = $userinfo['teh'];
        $zone = $userinfo['zone'];
        $isInserted = $userinfo['isInserted'];
        $this->load->model('dashboard_model');
        if($isInserted == 1)
        {
            $newinfo = $this->dashboard_model->Profile_info($Inst_Id);  
            $emis = $newinfo[0]['emis_code']; 
            $email =  $newinfo[0]['email']; 
            $phone = $newinfo[0]['LandLine'];
            $cell =  $newinfo[0]['MobNo']; 
        }
        if($this->session->flashdata('msg'))
        {

            $msg = $this->session->flashdata('msg');    
        }
        else
        {
            $msg = '';
        }

        $info = array('isgovt'=>$isgovt,'emis'=>$emis,'email'=>$email,'phone'=>$phone, 'cell'=>$cell,'isInserted'=>$isInserted,'msg'=>$msg)  ;
        $this->load->view('common/common_reg/header.php',$userinfo);
        $this->load->view('common/menu.php',$userinfo);
        $this->load->view('profile/Profile.php',$info);
        $this->load->view('common/common_reg/footer.php');


    }
    public function change_pwdView()
    {
       $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 1;
        $this->load->view('common/common_reg/header.php',$userinfo);
        $this->load->view('common/menu.php',$userinfo);
        $this->load->view('profile/Change_pwd.php',$info);
        $this->load->view('common/common_reg/footer.php');
    }
    public function Profile_Update()
    {
        $this->load->model('dashboard_model');
        //////DebugBreak();
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 1;
        $Inst_Id = $userinfo['Inst_Id'];
        $this->commonheader($userinfo);
        $error = array();

        if (!isset($Inst_Id))
        {
            //$error['excep'][1] = 'Please Login!';
            $this->load->view('login/login.php');
        }
        if(@$_POST['isGovt']== 1){
            $emis = @$_POST['Profile_emis'];
        }
        else{
            $emis = '';
        }
        $allinputdata = array('dist_cd'=>@$userinfo['dist'],'teh_cd'=>@$userinfo['teh'],'zone_cd'=>@$userinfo['zone'],'isGovt'=>@$_POST['isGovt'],'Profile_email'=>@$_POST['Profile_email'],'Profile_phone'=>@$_POST['Profile_phone'],'Profile_cell'=>@$_POST['Profile_cell'],'isInserted'=>@$_POST['isInserted'],'Inst_Id'=>$Inst_Id,'Inst_Id'=>$Inst_Id,'emis'=>$emis
        );

        $result =  $this->dashboard_model->Profile_UPDATE($allinputdata); 
        if($result == true){
            $msg = 'success';
            $this->session->set_flashdata('msg',$msg);
            redirect('Registration/Profile');
            return;
        }   
        else{
            $msg = 'error';
            $this->session->set_flashdata('msg',$msg);
            redirect('Registration/Profile');
            return;

        }


    } 
    public function chang_PwdUpdate()
    {
    
    //DebugBreak();
     $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $data = array(
            'isselected' => '1',

        );
        $msg = $this->uri->segment(3);



        if($msg == FALSE){

            $error_msg = $this->session->flashdata('error');    
        }
        else{
            $error_msg = $msg;
        }

        $Logged_In_Array = $this->session->all_userdata();
        $user = $Logged_In_Array['logged_in'];
        $this->load->model('dashboard_model');
        
        //  $error['grp_cd'] = $user['grp_cd'];
        // // DebugBreak();();
        $Inst_cd = $userinfo['Inst_Id'];
        $Oldpwd = $_POST['oldPwd'];
        $pwd = $_POST['Pwd'];
        $pwd1 = $_POST['Pwd1'];
        
        $myarr = array(
        'Inst_cd'=>$Inst_cd,
        'oldPwd'=>$Oldpwd,
        'Pwd'=>$pwd,
        'Pwd1'=>$pwd1
        ) ;
        $RegStdData = $this->dashboard_model->Update_Pwd($myarr);
        //$total = count($RegStdData)+1;
        //// DebugBreak();();
        
       
        //$RegStdData[0]['msg'] = $error_msg;
        if($RegStdData[0]['msg']!="")
        {
          
                        $allinputdata['excep'] = $RegStdData[0]['msg'];
                        $this->session->set_flashdata('pwd_error',$allinputdata);
                        redirect('Dashboard/change_pwd/');
                        return;
        }
        else
        {
                        
                        $allinputdata['excep'] = "";
                        $this->session->set_flashdata('pwd_error',$allinputdata);
                        redirect('Dashboard/change_pwd/');
                        return;
        }
        
    }
    public function change_pwd()
    {
    
       //DebugBreak();
       $this->load->helper('url');
       $this->load->library('session');
       $Logged_In_Array = $this->session->all_userdata();
       $this->load->model('Dashboard_model');
       $userinfo = $Logged_In_Array['logged_in'];
       $data = array(
            'isselected' => '1',
        );
         if($this->session->flashdata('pwd_error')){

            $error['excep'] = $this->session->flashdata('pwd_error');    
        }
        else{
            $error['excep']= '';
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('profile/Change_pwd.php',$error);
        $this->load->view('common/footer.php');
    }
}