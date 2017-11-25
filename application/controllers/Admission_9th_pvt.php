<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission_9th_pvt extends CI_Controller {
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
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Browsercache');
        $this->browsercache->dontCache();
        $this->clear_cache();
        $this->clear_all_cache();
        //this condition checks the existence of session if user is not accessing  
        //login method as it can be accessed without user session
        /* $this->load->library('session');
        if( !$this->session->userdata('logged_in') && $this->router->method != 'login' ) {
        redirect('login');
        }  */
    }
    public function clear_all_cache()
    {
        $CI =& get_instance();
        $path = $CI->config->item('cache_path');

        $cache_path = ($path == '') ? APPPATH.'cache/' : $path;

        $handle = opendir($cache_path);
        while (($file = readdir($handle))!== FALSE) 
        {
            //Leave the directory protection alone
            if ($file != '.htaccess' && $file != 'index.html')
            {
                @unlink($cache_path.'/'.$file);
            }
        }
        closedir($handle);
    }
    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

    public function index()
    {
        $data = array(
            'isselected' => '3',
        );
        $this->load->model('Admission_model');
        $this->load->library('session');
        $error ="";
        if($this->session->flashdata('downerror'))
        {
            $error = $this->session->flashdata('downerror');
        }
        else{
            $error = "";
        }
        $this->load->view('common/commonheader9th.php');
        $mydata = array('error'=>$error);
        $this->load->view('Admission/9th/matric_default.php',$mydata);
        $this->load->view('common/homepagefooter.php');
    }
    function sendVerCode()
    {
        //DebugBreak();
        $formno = $this->input->post('formno');
        $dob    = $this->input->post('dob');
        $this->load->model('Admission_9th_reg_model');
        $data = $this->Admission_9th_reg_model->getdelformno($formno,$dob);

        if($data == 0)
        {
            echo 0;
        }
        else
        {
            $response = $this->sendcode($data);
            if($response == true)
            {
                echo  1;
            }
            else
            {
                echo 0;
            }
        }

        exit();
    }

    function verconfrimCode()
    {
        // DebugBreak();
        $formno = $this->input->post('formno');
        $mobcode    = $this->input->post('mobcode');
        $this->load->model('Admission_9th_reg_model');
        $data = $this->Admission_9th_reg_model->verifycode($formno,$mobcode);
        if($data == true)
        {
            echo  1;
        }
        else
        {
            echo 0;
        }
        exit();
    }

    private function sendcode($data)
    {
        $pno = '92'.str_replace("-","",substr($data['MobNo'], 1)); 
        //$pno = '923007465790'; 


        $sms1 ="Dear ".$data['name'].",".urldecode("%0A").'Your Verification Code is this:'.$data['verificationCode'];
        // $sms1 = $_POST['address'];

        $str     = 'http://bsms.ufone.com/bsms_app5/sendapi-0.3.jsp?id=03359664990&message='.urlencode(trim($sms1)) .'&shortcode=BISEGRW&lang=English&mobilenum='.$pno.'&password=ptml@123456';
        $xml   = simplexml_load_string(file_get_contents($str));
        $json  = json_encode($xml);
        $array = json_decode($json,TRUE);
        if($array['response_id'] == 0)
        {
            return true;
        }
        else
        {
            return -1;
        }
    }
    public  function GetDistName($id) 
    {
        $retVal = "";
        if($id == 1) $retVal = "GUJRANWALA";
        else if($id == 2)  $retVal = "GUJRAT";
            else if($id == 3)  $retVal = "HAFIZ ABAD";
                else if($id == 4)  $retVal = "MANDI BAHA UD DIN";
                    else if($id == 5)  $retVal = "NAROWAL";
                        else if($id == 6)  $retVal = "SIALKOT";
                            return $retVal;             
    }


    public function NewEnrolment_insert()
    {  
        //  $_POST;
        //   echo  'Please wait';
        //  die();
        // DebugBreak();
        $this->load->model('Admission_9th_reg_model');
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 2;




        $formno =  '';//$this->Admission_9th_reg_model->GetFormNoPVT();
        $this->commonheader($userinfo);
        $error = array();
        $allinputdata = array('cand_name'=>@$_POST['cand_name'],'father_name'=>@$_POST['father_name'],
            'bay_form'=>@$_POST['bay_form'],'father_cnic'=>@$_POST['father_cnic'],
            'dob'=>@$_POST['dob'],'mob_number'=>@$_POST['mob_number'],
            'medium'=>@$_POST['medium'],'Inst_Rno'=>@$_POST['Inst_Rno'],
            'speciality'=>@$_POST['speciality'],'MarkOfIden'=>@$_POST['MarkOfIden'],
            'medium'=>@$_POST['medium'],'nationality'=>@$_POST['nationality'],
            'gender'=>@$_POST['gender'],'hafiz'=>@$_POST['hafiz'],
            'religion'=>@$_POST['religion'],'std_group'=>@$_POST['std_group'],
            'address'=>@$_POST['address'],
            'UrbanRural'=>@$_POST['UrbanRural'],'sub1'=>@$_POST['sub1'],
            'sub2'=>@$_POST['sub2'],'sub3'=>@$_POST['sub3'],
            'sub4'=>@$_POST['sub4'],'sub5'=>@$_POST['sub5'],
            'sub6'=>@$_POST['sub6'],'sub7'=>@$_POST['sub7'],
            'sub8'=>@$_POST['sub8']
        );
        // $name = 'Waseem Saleem';
        // $fname = 'Muhammad Saleem'; 
        $sub1ap1 = 0;
        $sub2ap1 = 0;
        $sub3ap1 = 0;
        $sub4ap1 = 0;
        $sub5ap1 = 0;
        $sub6ap1 = 0;
        $sub7ap1 = 0;
        $sub8ap1 = 0;
        if(@$_POST['sub1'] != 0)
        {
            $sub1ap1 = 1;    
        }
        if(@$_POST['sub2'] != 0)
        {
            $sub2ap1 = 1;    
        }
        if(@$_POST['sub3'] != 0)
        {
            $sub3ap1 = 1;    
        }
        if(@$_POST['sub4'] != 0)
        {
            $sub4ap1 = 1;    
        }
        if(@$_POST['sub5'] != 0)
        {
            $sub5ap1 = 1;    
        }
        if(@$_POST['sub6'] != 0)
        {
            $sub6ap1 = 1;    
        }
        if(@$_POST['sub7'] != 0)
        {
            $sub7ap1 = 1;    
        }
        if(@$_POST['sub8'] != 0)
        {
            $sub8ap1 = 1;    
        }
        $addre =  strtoupper(trim(str_replace("'", "", $this->input->post('address'))));
        $MarkOfIden =  strtoupper(trim(str_replace("'", "", $this->input->post('MarkOfIden'))));
        $data = array(
            'name' =>strtoupper(trim($this->input->post('cand_name'))),
            'Fname' =>strtoupper(trim($this->input->post('father_name'))),
            'BForm' =>$this->input->post('bay_form'),
            'FNIC' =>$this->input->post('father_cnic'),
            'Dob' =>$this->input->post('dob'),
            'CellNo' =>$this->input->post('mob_number'),
            'medium' =>$this->input->post('medium'),
            'Inst_Rno' =>$this->input->post('Inst_Rno'),
            'MarkOfIden' =>$MarkOfIden,
            'Speciality' =>$this->input->post('speciality'),
            'nat' =>$this->input->post('nationality'),
            'sex' =>$this->input->post('gender'),
            'IsHafiz' =>$this->input->post('hafiz'),
            'rel' =>$this->input->post('religion'),
            'addr' =>$addre,
            'grp_cd' =>$this->input->post('std_group'),
            'sub1' =>$this->input->post('sub1'),
            'sub2' =>$this->input->post('sub2'),
            'sub3' =>$this->input->post('sub3'),
            'sub4' =>$this->input->post('sub4'),
            'sub5' =>$this->input->post('sub5'),
            'sub6' =>$this->input->post('sub6'),
            'sub7' =>$this->input->post('sub7'),
            'sub8' =>$this->input->post('sub8'),
            'sub1ap1' => ($sub1ap1),
            'sub2ap1' => ($sub2ap1),
            'sub3ap1' => ($sub3ap1),
            'sub4ap1' => ($sub4ap1),
            'sub5ap1' => ($sub5ap1),
            'sub6ap1' => ($sub6ap1),
            'sub7ap1' => ($sub7ap1),
            'sub8ap1' => ($sub8ap1),
            'UrbanRural' =>$this->input->post('UrbanRural'),
            'Inst_cd' =>($Inst_Id),
            'FormNo' =>($formno) ,
            'dist'=>$this->input->post('pvtinfo_dist'),
            'teh'=>$this->input->post('pvtinfo_teh'),
            'zone'=>$this->input->post('pvtZone') ,
            'picname'=>$this->input->post('picname')





        );
        //DebugBreak();
        //$this->frmvalidation('NewEnrolment',$data,0);
        $target_path = PRIVATE_IMAGE_PATH9TH.$_POST['picname'];
        if (!file_exists($target_path))
        {
            $data['excep'] = 'Please upload picture first!';
            $this->session->set_flashdata('NewEnrolment_error',$data);
            redirect('Admission_9th_pvt/NewEnrolment');
            return;
        }

        // DebugBreak();


        $mydata_final = $this->feecalculate($data,0);
        $data['fee'] = $mydata_final;
        // echo '<pre>';print_r($data);echo  '</pre>';exit();
        $logedIn = $this->Admission_9th_reg_model->Insert_NewEnorlement($data);//, $fname);//$_POST['username'],$_POST['password']);
        //DebugBreak();
        if($logedIn[0]['formno'] != 'false')
        {  
            $info =  '';

            foreach($logedIn[0] as $key=>$val)
            {
                if($key == 'formno')
                {
                    if($logedIn[0]['formno'] != '')
                    {

                        $formno = $logedIn[0]['formno'] ;

                        $oldpath =  PRIVATE_IMAGE_PATH9TH.$data['picname'];
                        $newpath =  PRIVATE_IMAGE_PATH9TH.$val.'.jpg';
                        $err = rename($oldpath,$newpath); 
                        if($err == False)
                        {
                            $data['excep'] = 'An error has occoured. Please try again later. ';
                            $this->session->set_flashdata('NewEnrolment_error',$data);
                            redirect('Admission_9th_pvt/NewEnrolment');
                            echo 'Data NOT Saved Successfully !';
                            return;

                        }
                    }

                }

            }

            $data = "";
            $data['excep'] = 'success';
            $this->session->set_flashdata('NewEnrolment_error',$data);
            redirect('Admission_9th_pvt/formdownloaded/'.$formno.'/'.@$_POST['dob']);
            //redirect('Admission/'.'formdownloaded/'.$formno.'/'.$dob);
            return;


        }
        else
        {     
            $data['excep'] = 'An error has occoured. Please try again later. ';
            $this->session->set_flashdata('NewEnrolment_error',$data);
            redirect('Admission_9th_pvt/NewEnrolment');
            return;
            echo 'Data NOT Saved Successfully !';

        } 




        $this->load->view('common/footer.php');
    }
    public function practicalsubjects($_sub_cd)
    {        
        if($_sub_cd == 6)  $ret_val = "1";
        else if($_sub_cd == 7)  $ret_val = "1";
            else if($_sub_cd == 8)  $ret_val = "1";
                else if($_sub_cd == 18)  $ret_val = "1";
                    else if($_sub_cd == 27)  $ret_val = "1";
                        else if($_sub_cd == 28)  $ret_val = "1";
                            else if($_sub_cd == 30)  $ret_val = "1";
                                else if($_sub_cd == 40)  $ret_val = "1";
                                    else if($_sub_cd == 43)  $ret_val = "1";
                                        else if($_sub_cd == 45)  $ret_val = "1";
                                            else if($_sub_cd == 46)  $ret_val = "1";
                                                else if($_sub_cd == 48)  $ret_val = "1";
                                                    else if($_sub_cd == 68)  $ret_val = "1";
                                                        else if($_sub_cd == 69)  $ret_val = "1";
                                                            else if($_sub_cd == 70)  $ret_val = "1";
                                                                else if($_sub_cd == 72)  $ret_val = "1";
                                                                    else if($_sub_cd == 73)  $ret_val = "1";
                                                                        else if($_sub_cd == 78)  $ret_val = "1";
                                                                            else if($_sub_cd == 79)  $ret_val = "1";
                                                                                else if($_sub_cd == 89)  $ret_val = "1";
                                                                                    else if($_sub_cd == 88)  $ret_val = "1";
                                                                                        else if($_sub_cd == 89)  $ret_val = "1";
                                                                                            else if($_sub_cd == 90)  $ret_val = "1";
                                                                                                else if($_sub_cd == 93)  $ret_val = "1";
                                                                                                    else if($_sub_cd == 94)  $ret_val = "1";
                                                                                                        else $ret_val = 0;
        return $ret_val;
    }
    public  function GetSpeciality($spclty)
    {
        if ($spclty == 0 )
            return('NONE');
        else if ($spclty == 2 )
            return('BOARD EMPLOYEE CHILD');
            else if ($spclty == 3 )
                return('BLIND');
                else if ($spclty == 1 )
                    return('DEAF AND DUMB');


    }
    function GetDueDate()
    {
        $dueDate='';
        $single_date= SingleDateFee9th;  $double_date= DoubleDateFee9th;  $tripple_date= TripleDateFee9th;
        $today = date("d-m-Y");

        if(strtotime($today) <= strtotime($single_date)) 
        {
            $dueDate = $single_date;
        }
        else if( strtotime($today) <=  strtotime($double_date) )
        {
            $dueDate = $double_date;
        }
        else if( strtotime($today) <= strtotime($tripple_date)  )
        {
            $dueDate = $tripple_date;
        }
        else if(strtotime($today) > strtotime($tripple_date) )
        {
            $dueDate = $today;
        }
        return $dueDate;

    }
    public function checkFormNo_then_download()
    {

        $formno_seg = $this->uri->segment(3);
        // $dob_seg = $this->uri->segment(4);
        if($formno_seg !=0 ){ //&& $dob_seg != ''
            $formno = $formno_seg;     
            //$dob = $dob_seg;
        }
        else{
            return true;
        }
        //  DebugBreak();
        $this->load->model('Admission_9th_reg_model');
        $this->load->library('session');
        // DebugBreak();
        $data = $this->Admission_9th_reg_model->get_formno_data($formno);
        if($data == false)
        {
            $error = 'No Data Exist againt '.$formno.' Form No. Please check it again.';
            $this->session->set_flashdata('downerror',$error);
            redirect('Admission_9th');
            return;
        }

        // --------------------------------------- Fee Calculation Section ------------------------------------------------
        // DebugBreak();
        /*$User_info_data = array('Inst_Id'=>999999, 'date' => date('Y-m-d'));
        $user_info  =  $this->Admission_9th_reg_model->getuser_info($User_info_data); 

        $isfine = 0;
        $Total_fine = 0;
        $processFee = 295;*/
        // Declare Science & Arts Fee's According to Fee Table .  Note: this will assign to Triple date fee. After triple date it will not asign fees.
        /* if(!empty($user_info['rule_fee'])) 
        {    
        $endDate =date('Y-m-d', strtotime($user_info['rule_fee'][0]['End_Date'])); 
        $singleDate = $endDate;
        if($user_info['rule_fee'][0]['isPrSub']==1)
        {
        $SciAdmFee = $user_info['rule_fee'][0]['PVT_Amount'];
        $SciProcFee = $processFee;//$user_info['rule_fee'][0]['Processing_Fee'];
        // For ReAdmission Fee
        $SciAdmFee_ReAdm = $user_info['rule_fee'][0]['PVT_Amount'];
        $SciProcFee_ReAdm = $processFee;//$user_info['rule_fee'][0]['Processing_Fee'];

        } else if( $user_info['rule_fee'][1]['isPrSub']== 1 )
        {
        $SciAdmFee = $user_info['rule_fee'][1]['PVT_Amount'];
        $SciProcFee = $processFee;//$user_info['rule_fee'][1]['Processing_Fee'];
        // For ReAdmission Fee
        $SciAdmFee_ReAdm = $user_info['rule_fee'][1]['PVT_Amount'];
        $SciProcFee_ReAdm = $processFee;//$user_info['rule_fee'][1]['Processing_Fee'];

        }
        if($user_info['rule_fee'][0]['isPrSub']==0)
        {
        $ArtsAdmFee = $user_info['rule_fee'][0]['PVT_Amount'];
        $ArtsProcFee =$processFee;//$user_info['rule_fee'][0]['Processing_Fee'];
        // For ReAdmission Fee
        $ArtsAdmFee_ReAdm = $user_info['rule_fee'][0]['PVT_Amount'];
        $ArtsProcFee_ReAdm = $processFee;//$user_info['rule_fee'][0]['Processing_Fee'];
        }
        else if($user_info['rule_fee'][1]['isPrSub']== 0 )
        {
        $ArtsAdmFee = $user_info['rule_fee'][1]['PVT_Amount'];
        $ArtsProcFee = $processFee;//$user_info['rule_fee'][1]['Processing_Fee'];
        // For ReAdmission Fee
        $ArtsAdmFee_ReAdm = $user_info['rule_fee'][1]['PVT_Amount'];
        $ArtsProcFee_ReAdm = $processFee;//$user_info['rule_fee'][1]['Processing_Fee'];
        }
        }
        else
        {
        $date = new DateTime(SingleDateFee9th);
        $singleDate =  $date->format('Y-m-d');                                                                     
        $User_info_data = array('Inst_Id'=>999999, 'date' => $singleDate);
        $user_info  =  $this->Admission_9th_reg_model->getuser_info($User_info_data);
        if($user_info['rule_fee'][0]['isPrSub']==1)
        {
        $SciAdmFee = $user_info['rule_fee'][0]['PVT_Amount'];
        $SciProcFee =$processFee;// $user_info['rule_fee'][0]['Processing_Fee'];
        // For ReAdmission Fee
        $SciAdmFee_ReAdm = $user_info['rule_fee'][0]['PVT_Amount'];
        $SciProcFee_ReAdm =$processFee;// $user_info['rule_fee'][0]['Processing_Fee'];

        } else if( $user_info['rule_fee'][1]['isPrSub']== 1 )
        {
        $SciAdmFee = $user_info['rule_fee'][1]['PVT_Amount'];
        $SciProcFee = $processFee;//$user_info['rule_fee'][1]['Processing_Fee'];
        // For ReAdmission Fee
        $SciAdmFee_ReAdm = $user_info['rule_fee'][1]['PVT_Amount'];
        $SciProcFee_ReAdm =$processFee;// $user_info['rule_fee'][1]['Processing_Fee'];

        }
        if($user_info['rule_fee'][0]['isPrSub']==0)
        {
        $ArtsAdmFee = $user_info['rule_fee'][0]['PVT_Amount'];
        $ArtsProcFee =$processFee;//$user_info['rule_fee'][0]['Processing_Fee'];
        // For ReAdmission Fee
        $ArtsAdmFee_ReAdm = $user_info['rule_fee'][0]['PVT_Amount'];
        $ArtsProcFee_ReAdm = $processFee;//$user_info['rule_fee'][0]['Processing_Fee'];
        }
        else if($user_info['rule_fee'][1]['isPrSub']== 0 )
        {
        $ArtsAdmFee = $user_info['rule_fee'][1]['PVT_Amount'];
        $ArtsProcFee = $processFee;//$user_info['rule_fee'][1]['Processing_Fee'];
        // For ReAdmission Fee
        $ArtsAdmFee_ReAdm = $user_info['rule_fee'][1]['PVT_Amount'];
        $ArtsProcFee_ReAdm =$processFee;// $user_info['rule_fee'][1]['Processing_Fee'];
        }

        $TripleDate = date('Y-m-d',strtotime(TripleDateFee9th)); 
        $now = date('Y-m-d'); // or your date as well
        $days = (strtotime($TripleDate) - strtotime($now)) / (60 * 60 * 24);
        $fine = 500;
        $days = abs($days);

        $endDate = date('d-m-Y');
        $SciAdmFee =  ($SciAdmFee*3); 
        $ArtsAdmFee = ($ArtsAdmFee*3); 
        $Total_fine = $days*$fine;
        // For ReAdmission 
        $SciAdmFee_ReAdm =  ($SciAdmFee_ReAdm*3); 
        $ArtsAdmFee_ReAdm = ($ArtsAdmFee_ReAdm*3);



        }  // DebugBreak();
        $data = $data[0];
        $regfee =  1000;
        if( $this->practicalsubjects($data['sub6'])|| $this->practicalsubjects($data['sub7'])|| $this->practicalsubjects($data['sub8']))
        {


        if($data['IsReAdm']==1)
        {
        $AllStdFee = array('formNo'=> $data['formNo'],'regFee'=>1000,'AdmFee'=>$SciAdmFee_ReAdm,'AdmFine'=>$Total_fine,'AdmProcessFee'=>$SciProcFee,'AdmTotalFee'=>$SciAdmFee_ReAdm+$SciProcFee+$Total_fine+$regfee);
        }
        else if($data['Spec']>0 && (strtotime(date('Y-m-d')) >= strtotime(SingleDateFee9th)) )
        {     $regfee =  1000;
        if($data['Spec'] ==  2)
        {
        $regfee = 0; 
        }
        $AllStdFee = array('formNo'=>$data['formNo'],'regFee'=>$regfee,'AdmFee'=>0,'AdmFine'=>$Total_fine,'AdmProcessFee'=>$SciProcFee,'AdmTotalFee'=>$SciProcFee+$Total_fine+$regfee);
        }
        else
        {
        $AllStdFee = array('formNo'=>$data['formNo'],'regFee'=>1000,'AdmFee'=>$SciAdmFee,'AdmFine'=>$Total_fine,'AdmProcessFee'=>$SciProcFee,'AdmTotalFee'=>$SciAdmFee+$SciProcFee+$Total_fine+$regfee);
        }
        }
        else
        {
        if($data['IsReAdm']==1)
        {
        $AllStdFee = array('formNo'=> $data['formNo'],'regFee'=>1000,'AdmFee'=>$ArtsAdmFee_ReAdm,'AdmFine'=>$Total_fine,'AdmProcessFee'=>$ArtsProcFee,'AdmTotalFee'=>$ArtsAdmFee_ReAdm+$ArtsProcFee+$Total_fine+$regfee);
        }
        else if($data['Spec']>0 && (strtotime(date('Y-m-d')) >= strtotime(SingleDateFee9th)) )
        {
        $regfee =  1000;
        if($data['Spec'] ==  2)
        {
        $regfee = 0; 
        }
        $AllStdFee = array('formNo'=>$data['formNo'],'regFee'=>$regfee,'AdmFee'=>0,'AdmFine'=>$Total_fine,'AdmProcessFee'=>$ArtsProcFee,'AdmTotalFee'=>$ArtsProcFee+$Total_fine+$regfee);
        }
        else
        {
        $AllStdFee = array('formNo'=>$data['formNo'],'regFee'=>1000,'AdmFee'=>$ArtsAdmFee,'AdmFine'=>$Total_fine,'AdmProcessFee'=>$ArtsProcFee,'AdmTotalFee'=>$ArtsAdmFee+$ArtsProcFee+$Total_fine+$regfee);
        }
        }*/

        //    echo 'Please Wait';


        // --------------------------------------- Fee Calculation Section END------------------------------------------------
        // DebugBreak();


        // $mydata_final = array($this->Admission_9th_reg_model->Update_AdmissionFeePvt($AllStdFee));
        $data =  $data[0];
        $mydata_final = $this->feecalculate($data,1);
        $mydata_final = $mydata_final[0];

        $this->load->library('NumbertoWord');
        $this->load->library('PDF_Rotate');
        $pdf = new PDF_Rotate('P','in',"A4");

        $fee =      "1200";      
        $AfterDueDatefee = "0";
        $AdmFee=         "650";  

        $endDate =  $this->GetDueDate();//date('d-m-Y', strtotime($singleDate)); 

        $lmargin =1.5;
        $rmargin =7.3;
        $pdf ->SetRightMargin(5);
        $pdf->AddPage();
        $Y = 0;

        $fontSize = 8; 
        $marge    = .4;   // between barcode and hri in pixel
        $bx        = 3.97;  // barcode center
        $by        = .75;  // barcode center
        $height   = 0.35;   // barcode height in 1D ; module size in 2D
        $width    = .0135;  // barcode height in 1D ; not use in 2D
        $angle    = 0;   // rotation in degrees

        $code     = $data['Sch_cd'];     // barcode (CP852 encoding for Polish and other Central European languages)
        $type     = 'code128';
        $black    = '000000'; // color in hex

        //$pdf->Open();
        // $pdf->SetMargins(25.4,25.4,25.4,25.4);
        //$pdf ->SetMargins($lmargin,1.5,5.5);





        if(@$data["Spec"] >0)
        {
            $RegFee = 0; 
        }

        // DebugBreak();


        $pdf->SetFillColor(0,0,0);
        $pdf->SetDrawColor(0,0,0); 

        $temp = $data['formNo'].'@9@'.Year.'@'.Session; 
        $image =  $this->set_barcode($temp);
        $pdf->Image(BARCODE_PATH.$image,3.0, 0.6  ,1.8,0.18,"PNG");
        $pdf->Image(BARCODE_PATH.$image,5.7, 6.0  ,1.8,0.18,"PNG");
        $pdf->Image(BARCODE_PATH.$image,5.7, 7.5  ,1.8,0.18,"PNG");
        $pdf->Image(BARCODE_PATH.$image,5.7, 8.9  ,1.8,0.18,"PNG");
        $pdf->Image(BARCODE_PATH.$image,5.7, 10.0 ,1.8,0.18,"PNG");

        //$pdf->PrintBarcode(3.75,0.6,(int)$Barcode,.3,.0199);
        if(Session == 1)
        {
            $ses = "Annual";
        }
        else{
            $ses = "Supplymentary";
        }
        $pdf->SetFont('Arial','U',12);
        $pdf->SetXY(1.2,0.2);
        $pdf->Cell(0, 0.2, "BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, GUJRANWALA", 0.25, "C");
        $pdf->Image("assets/img/logo2.png",.60,0.3, 0.50,0.50, "PNG");
        $pdf->Image("assets/img/ExamCenter.jpg",4.5,2.90, 2.78,0.15, "jpeg");        
        $pdf->Image("assets/img/9th.png",7.60,0.23, 0.40,0.40, "PNG");   
        $pdf->Image("assets/img/9th.png",7.60,8.50, 0.24,0.24, "PNG");   
        $pdf->Image("assets/img/9th.png",7.60,7.14, 0.24,0.24, "PNG");   
        $pdf->Image("assets/img/9th.png",7.60,9.80, 0.24,0.24, "PNG");   
        //$this->Image("logo.jpg",0.05,0.3, 0.75,0.75, "JPG", "http://www.biseGujranwala.edu.pk");
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(1.8,0.4);
        $pdf->Cell(0, 0.2, "Admission /Revenue Form ", 0.25, "C");
        $pdf->SetFont('Arial','',10);
        $pdf->SetXY(3.85,0.4);
        $pdf->Cell(0, 0.2, "(Private Candidate) for ".class_for_9th_Adm." ".$ses." Examination, ".(Year+1), 0.25, "C");
        //--------------- Proof Read    
        /*if($data['batch_id'] == 0 and $data['RegPvt']==1)
        {
        $pdf->Image( 'images/PROOF_READ.jpg' ,1,3.5 , 6,4 , "JPG");     
        $ProofReed = "(PROOF READ) (Not for Board) ";
        $pdf->SetXY(3.3,0.8);
        $pdf->SetFont("Arial",'',8);
        $pdf->Cell(0, 0.25, $ProofReed   ,0,'C');
        } */




        /*$pdf->SetFont('Arial','B',10);
        $pdf->SetXY(3.5,0.6);
        $pdf->Cell(0, 0.25, $data['RegPvt']==1?"(Regular Admission Form)":"(Private Admission Form)", 0.25, "C");*/

        //--------------------------- Form No & Rno



        $pdf->SetFont('Arial','B',12);
        $pdf->SetXY(5.8,0.55+$Y);
        $pdf->Cell(0.5,0.5, "Roll No: _______________",0,'L');    
        $pdf->SetFont('Arial','B',7);
        $pdf->SetXY(6.6,.70+$Y);
        $pdf->Cell(0.5,0.5, "(For office use only)",0,'L');


        //------ Picture Box on Centre      
        /*$pdf->SetXY(6.5, 1.5+$Y );
        $pdf->Cell(0.75,1.0,'',1,0,'C',0);               */
        //$pdf->Image('uploads/'. $data["picPath"],6.5, 1.15+$Y, 0.95, 1.0, "JPG");
        /* $size = '';
        if($size==0){ 
        $pdf->Image( 'images/no_image.png',6.5, 1.15+$Y, 0.95, 1.0, "PNG");
        }
        else
        { */
        // $pdf->Image( '../uploads/'. @$data["PicPath"],6.5, 1.15+$Y, 0.95, 1.0, "JPG");
        /*       }
        $pdf->SetFont('Arial','',8);*/

        $size = filesize(PRIVATE_IMAGE_PATH9TH. @$data["PicPath"]);
        /*if($size==0)
        { */
        $pdf->Image(PRIVATE_IMAGE_PATH9TH. @$data["PicPath"],6.5, 1.35+$Y, 1.0, .85, "JPG");
        /* }
        else
        { 
        $pdf->Image(PRIVATE_IMAGE_PATH9TH. @$data["PicPath"],6.5, 1.15+$Y, 0.95, 1.0, "JPG");
        }*/
        $pdf->SetFont('Arial','',10);




        //------------- Personal Infor Box
        //====================================================================================================================

        /*$x = 0.55;
        $pdf->SetXY(0.2,1.28+$Y);
        $pdf->SetFillColor(240,240,240);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(8,0.2,'PERSONAL INFORMATION',1,0,'L',1);
        */
        $Y = -0.6;
        $FontSize=7;
        $HeightLine1= 1.75;
        $HeightLine2=2.0;

        $grp_name = $data["RegGrp"];
        switch ($grp_name) {
            case '1':
                $grp_name = 'SCIENCE WITH BIOLOGY';
                break;
            case '7':
                $grp_name = 'SCIENCE  WITH COMPUTER SCIENCE';
                break;
            case '8':
                $grp_name = 'SCIENCE  WITH ELECTRICAL WIRING';
                break;
            case '2':
                $grp_name = 'GENERAL';
                break;
            case '5':
                $grp_name = 'Deaf and Dumb';
                break;
            default:
                $grp_name = "No Group Selected.";
        }

        $pdf->SetXY(2.5,1.14+$Y);
        $pdf->SetFont('Arial','bU',10);
        $pdf->Cell( 0.5,0.7,$grp_name." GROUP",0,'L');

        $myx = 0.7;
        $Y = $Y-0.3;
        //--------------------------- 1st line 
        $pdf->SetXY($myx,1.55+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Form No:",0,'L');

        $pdf->SetFont('Arial','BU',10);
        $pdf->SetXY(1.5,1.55+$Y);
        $pdf->Cell( 0.5,0.5,$data['formNo'],0,'L');


        /*
        $pdf->SetFont('Arial','BU',8);
        $pdf->SetXY(0.5,5.3+$Y);
        $pdf->Cell( 0.5,0.5,"Exam Type",0,'L');  */

        // DebugBreak();



        // نام(اردو میں):

        //$chkcat09 = ($data['mi_type']!= 2?($data['cat09']) :'Aditional') ;

        //$chkcat10 = ($data['mi_type']!= 2?getCatName($data['cat10']) :'Aditional');

        /* if($chkcat09)
        {
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(2.5,1.55+$Y);
        $pdf->Cell( 0.5,0.5,"(9th: ",0,'L');
        $pdf->SetXY(3.0,1.55+$Y);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell( 0.5,0.5, $chkcat09,0,'L'); 
        $pdf->SetXY(4.0,1.55+$Y);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell( 0.5,0.5,"10th: ",0,'L');
        $pdf->SetXY(4.4,1.55+$Y);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell( 0.5,0.5,$chkcat10,0,'L');
        $pdf->SetXY(5.2,1.55+$Y);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell( 0.5,0.5,")",0,'L');
        }     */
        // if($chkcat09 != -1)
        //{
        /*$pdf->SetFont('Arial','B',10);
        $pdf->SetXY(2.5,1.55+$Y);
        $pdf->Cell( 0.5,0.5,"(9th: ",0,'L');
        $pdf->SetXY(3.0,1.55+$Y);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell( 0.5,0.5, $chkcat09.')',0,'L'); */
        //}
        /*else if($chkcat10 != -1)
        {
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(2.5,1.55+$Y);
        $pdf->Cell( 0.5,0.5,"(10th: ",0,'L');
        $pdf->SetXY(3.0,1.55+$Y);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell( 0.5,0.5, $chkcat10.')',0,'L');  
        }      */





        /*$LastSess = 0 ;
        if($data["sessOfLastAp"] == 1 or $data["sessOfLastAp"] == 2  )
        {
        $LastSess =  $data["sessOfLastAp"]==1?"Annual":"Supplementary";
        }    */ 
        /*$pdf->SetXY(0.5, 1.7+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Prev Roll No:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.5,1.7+$Y); */

        /*$yearOfLastAp = $data['yearOfLastAp'];
        $pdf->Cell(0.5,0.5,$data["oldRno"]." ( $LastSess,  $yearOfLastAp )",0,'L');    */
        $pdf->SetXY($myx,1.85+$Y);
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->Cell( 0.5,0.5,"Name(in Urdu): ____________________________________    Father's Name(in Urdu):_________________________________",0,'L');


        $Y = $Y+0.3;
        $pdf->SetXY($myx,1.75+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.5,1.75+$Y);
        $pdf->Cell(0.5,0.5,$data["name"],0,'L');


        //--------------------------- FATHER NAME 

        $pdf->SetXY($myx, 1.9+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Father's Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.5,1.9+$Y);
        $pdf->Cell(0.5,0.5,$data["Fname"],0,'L');

        //--------------------------- 3rd line 
        //__Mobile    
        /* $pdf->SetXY(3.5+$x,2.65+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Mobile No:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5+$x,2.65+$Y);
        $pdf->Cell(0.5,0.5,$data["mobNo"],0,'L');   */


        $x = 0;
        $pdf->SetXY(3.5+$x,1.85+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell(0.5,0.5,"Father CNIC:",0,'R');

        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5+$x,1.85+$Y);
        $pdf->Cell(0.5,0.5,$data["FNIC"],0,'L');

        //--------------------------- BAY FORM NO line 
        $pdf->SetXY(3.5, 1.70+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Bay Form No:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5,1.70+$Y);
        $pdf->Cell(0.5,0.5,$data["BForm"],0,'L');





        $pdf->SetXY(3.5+$x,2.05+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Mobile No:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5+$x,2.05+$Y);
        //DebugBreak();
        $pdf->Cell(0.5,0.5,strtoupper(@$data["MobNo"]),0,'L');

        //debugbreak();
        //--------------------------- Dob line 
        $pdf->SetXY($myx,2.05+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Date Of Birth:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.5,2.05+$Y);
        $pdf->Cell(0.5,0.5,date('d-m-Y',strtotime(@$data["Dob"])),0,'L');

        $pdf->SetXY($myx,2.2+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Religion:",0,'L');

        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.5,2.2+$Y);
        $pdf->Cell(0.5,0.5,$data["rel"]==1?"MUSLIM":"NON-MUSLIM",0,'L');  



        $pdf->SetXY($myx,3.2+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell( 0.5,0.5,"Nationality:",0,'R');
        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY(1.5,3.2+$Y);
        $pdf->Cell(0.5,0.5,$data["nat"]==1?"PAKISTANI":"NON-PAKISTANI",0,'R');

        // DebugBreak();
        $pdf->SetXY($myx,3.4+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell(0.5,0.5,"Locality:",0,'R');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.5,3.4+$Y);
        $pdf->Cell(0.5,0.5,$data["RuralORUrban"]==1?"URBAN":"RURAL",0,'L');  

        //--------------------------- Gender Nationality Dob

        /*$pdf->SetXY(0.5,2.30+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Registration No:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.5,2.30+$Y);
        $pdf->Cell(0.5,0.5,$data["strRegNo"],0,'L');  */

        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(6.8,2.70+$Y);                                               
        $pdf->Cell(0.5,0.5,$data["sex"]==1?"MALE":"FEMALE",0,'L');




        /*$pdf->SetXY(3.5+$x,2.20+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Nationality:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5+$x,2.20+$Y);
        $pdf->Cell(0.5,0.5,$data["nat"]==1?"PAKISTANI":"NON-PAKISTANI",0,'R');     */        
        //--------------------------- id mark and Medium 

        $pdf->SetXY($myx,2.45+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Speciality:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.50,2.45+$Y);
        $pdf->Cell(0.5,0.5,$this->GetSpeciality($data["Spec"]),0,'L');


        /*$pdf->SetXY(3.5+$x,2.35+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Medium:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5+$x,2.35+$Y);
        $pdf->Cell(0.5,0.5,$data["med"]==1?"URDU":"ENGLISH",0,'L');        */    

        //--------------------------- Speciality and Internal Grade 
        $pdf->SetXY(3.5,2.20+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Identification Mark:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5+$x,2.20+$Y);
        $pdf->Cell(0.5,0.5,$data["markOfIden"],0,'L');

        $pdf->SetFont('Arial','B',$FontSize+15);
        $pdf->TextWithRotation($x+.55,2.8+$Y, $data['formNo'],90,0); 

        /*$pdf->SetXY(3.5+$x,2.5+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Scheme:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5+$x,2.5+$Y);
        $pdf->Cell(0.5,0.5, ($data["schm"]==1? "NEW": "OLD"),0,'L');    */        

        // DebugBreak();

        $xx= 0.8;
        $boxWidth = 3.0;
        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY($xx,3.8+$Y);
        $pdf->SetFillColor(240,240,240);
        $pdf->Cell($boxWidth,0.2,'Part I Subjects',1,0,'C',1);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xx,4.0+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub1Ap1'] != 1 ? '':   '    '.'1. '.$data['sub1_name'],1,0,'L',1);
        //$pdf->Cell($boxWidth,0.2, $data['sub1Ap1'] != 1 ? '':   '    '. GetSubNameHere($data['sub1']) ,0,'L',1);
        // DebugBreak();
        $pdf->Image("assets/img/crossed.jpg",6.2,4.9, 1.3,0.15, "jpeg");  

        $pdf->SetXY(6.1,3.8+$Y);
        $pdf->Cell(1.4,1.5,'',1,0,'C',0); 
        $pdf->SetXY(6.3,3.8+$Y);
        $pdf->MultiCell(1.1,0.2, 'Paste Recent Photograph & Must Be Cross Attested by the Head/Deputy Head of Institution',0,'C'); 

        $pdf->SetXY(6.1,5.80+$Y);
        $pdf->Cell(1.4,0.65,'',1,0,'C',0); 
        $pdf->SetXY(6.2,6.28+$Y);
        $pdf->MultiCell(1.1,0.2, 'Thumb Impression',0,'C'); 


        $pdf->SetXY(3.96,3.80+$Y);
        $pdf->Cell(2.0,1.55,'',1,0,'C',0); 

        $pdf->SetFont('Arial','B',24);
        $pdf->SetXY(4.38,4.68+$Y);
        $pdf->MultiCell(1.1,0.2, 'O.W.O',0,'C'); 
        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY(4.38,4.90+$Y);
        $pdf->Cell(0.5,0.5, "(For office use only)",0,'L');


        $pdf->SetFillColor(255,255,255);
        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xx,4.2+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub2Ap1'] != 1 ? '':   '    '.'2. '. $data['sub2_name'],1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xx,4.4+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub3Ap1'] != 1 ? '':   '    '.'3. '. $data['sub3_name'],1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xx,4.6+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub8ap1'] != 1 ? '':   '    '.'4. '. $data['sub8_name'],1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xx,4.8+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub4Ap1'] != 1 ? '':   '    '.'5. '. $data['sub4_name'],1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xx,5.0+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub5Ap1'] != 1 ? '':   '    '.'6. '. $data['sub5_name'],1,0,'L',1);

        $pdf->SetFont('Arial','',7);                                                                     
        $pdf->SetXY($xx,5.2+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub6Ap1'] != 1 ? '':   '    '.'7. '. $data['sub6_name'],1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xx,5.4+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub7Ap1'] != 1 ? '':   '    '.'8. '. $data['sub7_name'],1,0,'L',1);

        /*      $xangle = 3.0;

        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY($xangle,3.8+$Y);
        $pdf->SetFillColor(240,240,240);
        $pdf->Cell($boxWidth,0.2,'Part II Subjects',1,0,'C',1); */   

        /*$pdf->SetFillColor(255,255,255);
        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xangle,4.0+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub1Ap2'] != 1 ? '':  '    '.'1. '.  GetSubNameHere($data['sub1']),1,0,'L',1);


        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xangle,4.2+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub2Ap2'] != 1 ? '':  '    '.'2. '.  GetSubNameHere($data['sub2']),1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xangle,4.4+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub3Ap2'] != 1 ? '':  '    '.'3. '.  GetSubNameHere($data['sub3']),1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xangle,4.6+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub4Ap2'] != 1 ? '':  '    '.'4. '.  GetSubNameHere($data['sub4']),1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xangle,4.8+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub5Ap2'] != 1 ? '':  '    '.'5. '.  GetSubNameHere($data['sub5']),1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xangle,5.0+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub6Ap2'] != 1 ? '':  '    '.'6. '.  GetSubNameHere($data['sub6']),1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xangle,5.2+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub7Ap2'] != 1 ? '':  '    '.'7. '.  GetSubNameHere($data['sub7']),1,0,'L',1);

        $pdf->SetFont('Arial','',7);
        $pdf->SetXY($xangle,5.4+$Y);
        $pdf->Cell($boxWidth,0.2,$data['sub8Ap2'] != 1 ? '':  '    '.'8. '.  GetSubNameHere($data['sub8']),1,0,'L',1);    */



        //------------- Old Exam Infor if any Box
        /*$pdf->SetFont('Arial','B',8);
        $pdf->SetXY(0.2,3.5+$Y);
        $pdf->SetFillColor(240,240,240);
        $pdf->Cell(8,0.2,'OLD EXAMINATION INFORMATION  ',1,0,'L',1);    */      
        //--------------------------- 7th line 



        /*$pdf->SetXY(0.5,3.6+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell( 0.5,0.5,"Roll No:",0,'L');

        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY(1.45,3.6+$Y);
        $pdf->Cell(0.5,0.5,$data["oldRno"],0,'L');

        $pdf->SetXY(2.5,3.6+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell( 0.5,0.5,"Year:",0,'L');
        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY(3.25,3.6+$Y);
        $pdf->Cell(0.5,0.5,$data["yearOfLastAp"],0,'L');

        $pdf->SetXY(3.8,3.6+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell( 0.5,0.5,"Session:",0,'L');
        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY(4.3,3.6+$Y);
        $LastSess = 0 ;
        if($data["sessOfLastAp"] == 1 or $data["sessOfLastAp"] == 2  )
        {
        $LastSess =  $data["sessOfLastAp"]==1?"Annual":"Supplementary";
        }                                                          
        $pdf->Cell(0.5,0.5,$LastSess,0,'R');

        $pdf->SetXY(5.3,3.6+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell( 0.5,0.5,"Board:",0,'L');
        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY(6,3.6+$Y);
        $OldBoard = 0;
        if($data["brd_cd"]!= 0)
        {
        $OldBoard =   $data["brd_cd"]==1?"Gujranwala":"Other";
        }
        $pdf->Cell(0.5,0.5,$OldBoard,0,'R');     */
        //============================ Contact Detail ========================================================
        //------------- Contact Info Box
        /*$pdf->SetFont('Arial','B',8);
        $pdf->SetXY(0.2,3.95+$Y);
        $pdf->SetFillColor(240,240,240);
        $pdf->Cell(8,0.2,'CONTACT INFORMATION',1,0,'L',1);    */
        //--------------------------- 8th line 
        //DebugBreak();
        $pdf->SetXY($myx,2.65+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell( 0.5,0.5,"Address:",0,'L');

        $pdf->SetFont('Arial','B',8);
        $pdf->SetXY(1.5,2.65+$Y);
        $pdf->Cell(0.5,0.5,$data["addr"],0,'L');
        if($data['regPvt']== 2)
        {         
            $pdf->SetXY(0.7,2.95+$Y);
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(0.5,0.5,"Proposed Exam Area:",0,'R');
            $pdf->SetFont('Arial','B',8);
            $pdf->SetXY(1.9,2.95+$Y);
            $pdf->Cell( 0.5,0.5,$data['Zone_cd']." - ".$data['zone_name']."",0,'L');

            $pdf->SetFont('Arial','',8);
            $pdf->SetXY(3.5,3.05+$Y);
            $pdf->Cell(4,0.65,'',1,0,'C',0); 

        } 
        // DebugBreak();
        $stampx = 3.4;
        $stampy = 4.55;

        $pdf->Image("assets/img/admission_form.jpg",4.07,2.0, 2.38,0.20, "jpeg");                
        $pdf->SetXY($stampx,5.85+$Y);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell(0.2,0.5,"Stamp/Signature",0,'R');
        $pdf->SetXY($stampx,6.0+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(0.2,0.5,"Headmaster/Headmistress/Principal",0,'R');
        $pdf->SetXY($stampx,6.15+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(0.2,0.5,"Head Of Institution Name",0,'R');
        $pdf->SetXY($stampx,6.3+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(0.2,0.5,"School/College Code",0,'R');
        $pdf->SetXY($stampx,6.45+$Y);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(0.2,0.5,"CNIC",0,'R');

        $candidatex = 0.7;

        $pdf->SetXY($candidatex,5.55+$Y);
        $pdf->SetFont('Arial','b',7);
        $pdf->Cell(0.5,0.5,"Candidate's Signature in Urdu______________________",0,'R');
        $pdf->SetXY($candidatex,5.95+$Y);
        $pdf->SetFont('Arial','b',7);
        $pdf->Cell(0.5,0.5,"Candidate's Signature in English____________________",0,'R');

        $boxWidth = 2.0;
        $pdf->SetXY($myx,6.6+$Y);
        $pdf->SetFillColor(0,0,0);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell($boxWidth,0.2,'Due Date: '.$endDate,1,0,'C',1); 
        /*
        $pdf->SetXY(3.2,6.45+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(0.5,0.5,"(To be sent to the Board via HBL Branch)",0,'L');   */
        $bx = 6.82;
        $by = 6.1;
        //$Barcode =  @$data['formNo']."@".$data['class']."@".$data["sess"]."@".$data['Iyear'];
        //$data['formid']."@".$data['Class'].$data['Sess'].$data["Iyear"];

        /*$bardata = Barcode::fpdf($pdf, $black, $bx, $by, $angle, $type, array('code'=>$Barcode), $width, $height);

        $len = $pdf->GetStringWidth($bardata['hri']);
        Barcode::rotate(-$len / 2, ($bardata['height'] / 2) + $fontSize + $marge, $angle, $xt, $yt);    */

        //$pdf->PrintBarcode(5.75,5.9,(int)$Barcode,.3,.0199);
        $pdf->SetXY($myx,6.25+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','BI',7);
        $pdf->Cell(0.2,0.5,"Printing Date: " .date('d-M-Y h:i A'),0,'L');

        $pdf->SetXY($myx,6.85+$Y);
        $pdf->SetTextColor(0,0,0);
        /*$pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.2,6.85+$Y);
        $pdf->Cell(0.5,0.5,$data["name"],0,'L');
        //--------------------------- FATHER NAME 

        $pdf->SetXY(3.2, 6.85+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Father's Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.8,6.85+$Y);
        $pdf->Cell(0.5,0.5,$data["Fname"],0,'L');    */
        $Y  = $Y -0.45;
        $pdf->SetXY(1.2, 7.09+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Admission Fee ",0,'L');


        $pdf->SetXY(2.4, 7.09+$Y); 
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,$mydata_final['AdmFee'].'/-',0,'L');


        $pdf->SetXY(3.2, 7.09+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Late Fee ",0,'L');


        $pdf->SetXY(4.59, 7.09+$Y); 
        $pdf->SetFont('Arial','b',$FontSize);
        //$pdf->Cell( 0.5,0.5,$AfterDueDatefee.'/-',0,'L');
        $pdf->Cell( 0.5,0.5,$mydata_final['AdmFine'],0,'L');
        $pdf->SetXY(5.79, 7.09+$Y); 
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Bank Challan No. ".$data['challanno'],0,'L');

        $pdf->SetXY(1.2, 7.29+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Processing Fee ",0,'L');
        $pdf->SetXY(2.4, 7.29+$Y); 
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,$mydata_final['AdmProcessFee'].'/-',0,'L');





        /*$pdf->SetXY(5.52, 7.09+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Certificate Fee ",0,'L');
        $pdf->SetXY(6.5, 7.09+$Y); 
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,'0',0,'L');*/

        $pdf->SetXY(3.2, 7.29+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Registration Fee ",0,'L');
        $pdf->SetXY(4.59, 7.29+$Y); 
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,$mydata_final['regFee'].'/-',0,'L');



        $pdf->SetXY(1.2, 7.49+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Total Amount Rs.",0,'L');
        //DebugBreak();
        $total = $mydata_final['AdmFee']+$mydata_final['regFee']+$mydata_final['AdmProcessFee']+$mydata_final['AdmFine'] ;
        $pdf->SetXY(2.35, 7.49+$Y);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell( 0.5,0.5,$total.'/-',0,'L');



        $pdf->SetXY(3.2, 7.49+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Amount in Words:",0,'L');

        //DebugBreak();

        $obj    = new NumbertoWord();
        $obj->toWords($total,"Only.","");
        // $pdf->Cell( 0.5,0.5,ucwords($obj->words),0,'L');
        $feeInWords = ucwords($obj->words);
        //$obj    = new toWords($fee);
        //echo $obj->words; // gives twelve thousand three hundred and forty five  pounds  sixty seven  p
        //echo $obj->number; // gives 12,345.67

        $pdf->SetXY(4.55, 7.49+$Y);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell( 0.5,0.5,$feeInWords,"",0,'L');

        //'Rs.'.$formfee.'+'.$Prosfee.'+'.$cert_fee.'+'. $RegFee. '/-' $fee

        $pdf->SetXY(1.2, 7.69+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"CMD Account No. 00427900072103",0,'L');


        $pdf->SetXY(3.2, 7.69+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Bank Challan No. ".$data['challanno'],0,'L');


        $pdf->SetXY(5.3, 7.69+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Manager/Cashier:___________________________ ",0,'L');

        $pdf->SetXY(0,5.0+3.0+$Y);
        $pdf->SetFont('Arial','',10);

        $pdf->Image("assets/img/cutter.jpg",0.24,7.0, 8.3,0.09, "jpeg");  

        //$pdf->Cell(0,0.5,"-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------",0,'L');

        $Y= $Y-0.1;
        //
        $pdf->SetXY(2.4, 8.1+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"BOARD OF INTERMEDIATE AND SECONDARY EDUCATION GUJRANWALA (".class_for_9th_Adm." ".$ses." Examination , ".(Year+1).")",0,'L');


        $bx = 6.82;
        $by = 8.1;
        /*$Barcode =  @$data['formNo']."@".$data['class']."@".$data["sess"]."@".$data['Iyear'];
        //$data['formid']."@".$data['Class'].$data['Sess'].$data["Iyear"];

        $bardata = Barcode::fpdf($pdf, $black, $bx, $by, $angle, $type, array('code'=>$Barcode), $width, $height);

        $len = $pdf->GetStringWidth($bardata['hri']);
        Barcode::rotate(-$len / 2, ($bardata['height'] / 2) + $fontSize + $marge, $angle, $xt, $yt); */
        //$pdf->PrintBarcode(5.75,7.85,(int)$Barcode,.3,.0199);
        $pdf->SetXY(2.4,8.25+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','BI',7);
        $pdf->Cell(0.2,0.5,"Printing Date: " .date('d-M-Y h:i A'),0,'L');

        $pdf->SetXY(0.2,8.15+$Y);
        $pdf->SetFillColor(0,0,0);                                     
        $pdf->SetFont('Arial','BI',7);
        $pdf->Cell(0.2,0.5,"Bank Copy: ",0,'L');

        $pdf->SetXY(1.2,8.17+$Y);
        $pdf->SetFillColor(0,0,0);                                     
        $pdf->SetFont('Arial','',6);
        $pdf->Cell(0.2,0.5," ( To be retained with HBL ) ",0,'L');

        $pdf->SetXY(0.2,8.5+$Y);
        $pdf->SetFillColor(0,0,0);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell($boxWidth,0.2,'Due Date: '.$endDate,1,0,'C',1); 

        $pdf->SetXY(0.5,8.65+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.0,8.65+$Y);
        $pdf->Cell(0.5,0.5,$data["name"],0,'L');
        //--------------------------- FATHER NAME 

        $pdf->SetXY(2.85, 8.65+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Father's Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(3.6,8.65+$Y);
        $pdf->Cell(0.5,0.5,$data["Fname"],0,'L');


        $pdf->SetXY(0.5, 8.79+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Total Amount Rs.",0,'L');

        $pdf->SetXY(2.35, 8.79+$Y);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell( 0.5,0.5,$total.'/-',0,'L');


        $pdf->SetXY(2.85, 8.79+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Amount in Words:",0,'L');

        //DebugBreak();
        //$obj    = new toWords($total);
        //echo $obj->words; // gives twelve thousand three hundred and forty five  pounds  sixty seven  p
        //echo $obj->number; // gives 12,345.67

        $pdf->SetXY(3.6, 8.79+$Y);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell( 0.5,0.5,$feeInWords,0,'L');
        //'Rs.'.$formfee.'+'.$Prosfee.'+'.$cert_fee.'+'. $RegFee. '/-' $fee

        //$pdf->Image("assets/img/BankCopy.jpg",0.25,8.19, 6.8,0.13, "jpeg");   

        $pdf->SetXY(2.4, 8.39+$Y);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell( 0.5,0.5,"CMD Account No. 00427900072103",0,'L');


        $pdf->SetXY(4.5, 8.30+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell( 0.5,0.5,"Bank Challan No. ".$data['challanno'],0,'L');


        $pdf->SetXY(5.3, 8.95+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Manager/Cashier:___________________________ ",0,'L');



        // -------------------- branch copy 
        $Y = $Y + 1.3;

        $pdf->SetXY(0,5.0+3.0+$Y);
        $pdf->SetFont('Arial','',10);

        //$pdf->Image("assets/img/cutter.jpg",0,8.0, 8.3,0.09, "jpeg");  

        //$pdf->Cell(0,0.5,"-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------",0,'L');

        //


        $bx = 6.82;
        $by = 8.1;  
        $Y= $Y+0.1;
        //
        $pdf->SetXY(2.4, 8.1+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"BOARD OF INTERMEDIATE AND SECONDARY EDUCATION GUJRANWALA (".class_for_9th_Adm." ".$ses." Examination , ".(Year+1).")",0,'L');


        $bx = 6.82;
        $by = 8.1;
        /*$Barcode =  @$data['formNo']."@".$data['class']."@".$data["sess"]."@".$data['Iyear'];
        //$data['formid']."@".$data['Class'].$data['Sess'].$data["Iyear"];

        $bardata = Barcode::fpdf($pdf, $black, $bx, $by, $angle, $type, array('code'=>$Barcode), $width, $height);

        $len = $pdf->GetStringWidth($bardata['hri']);
        Barcode::rotate(-$len / 2, ($bardata['height'] / 2) + $fontSize + $marge, $angle, $xt, $yt); */
        //$pdf->PrintBarcode(5.75,7.85,(int)$Barcode,.3,.0199);
        $pdf->SetXY(2.4,8.25+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','BI',7);
        $pdf->Cell(0.2,0.5,"Printing Date: " .date('d-M-Y h:i A'),0,'L');

        $pdf->SetXY(0.2,8.14+$Y);
        $pdf->SetFillColor(0,0,0);                                     
        $pdf->SetFont('Arial','BI',8);
        $pdf->Cell(0.2,0.5,"Board Copy: (Along with Scroll): ",0,'L');

        /* $pdf->SetXY(0.2,8.17+$Y);
        $pdf->SetFillColor(0,0,0);                                     
        $pdf->SetFont('Arial','',6);
        $pdf->Cell(0.2,0.5," (To be sent to the Board via HBL Branch aloongwith scroll) ",0,'L');*/

        $pdf->SetXY(0.2,8.5+$Y);
        $pdf->SetFillColor(0,0,0);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell($boxWidth,0.2,'Due Date: '.$endDate,1,0,'C',1); 

        $pdf->SetXY(0.5,8.65+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.0,8.65+$Y);
        $pdf->Cell(0.5,0.5,$data["name"],0,'L');
        //--------------------------- FATHER NAME 

        $pdf->SetXY(2.85, 8.65+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Father's Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(3.6,8.65+$Y);
        $pdf->Cell(0.5,0.5,$data["Fname"],0,'L');


        $pdf->SetXY(0.5, 8.79+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Total Amount Rs.",0,'L');

        $pdf->SetXY(2.35, 8.79+$Y);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell( 0.5,0.5,$total.'/-',0,'L');


        $pdf->SetXY(2.85, 8.79+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Amount in Words:",0,'L');

        //DebugBreak();
        //$obj    = new toWords($total);
        //echo $obj->words; // gives twelve thousand three hundred and forty five  pounds  sixty seven  p
        //echo $obj->number; // gives 12,345.67

        $pdf->SetXY(3.6, 8.77+$Y);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell( 0.5,0.5,$feeInWords,0,'L');
        //'Rs.'.$formfee.'+'.$Prosfee.'+'.$cert_fee.'+'. $RegFee. '/-' $fee

        if($data['Spec'] == 1 || $data['Spec'] == 3){
            $pdf->Image('assets/img/Disablecandidates.jpg',0.25,8.09, 7.6,0.25, "jpeg");       
        }
        else
        {
            $pdf->Image("assets/img/BankCopy.jpg",0.25,8.09, 7.6,0.18, "jpeg");   

        }


        $pdf->SetXY(2.4, 8.39+$Y);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell( 0.5,0.5,"CMD Account No. 00427900072103",0,'L');


        $pdf->SetXY(4.5, 8.30+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell( 0.5,0.5,"Bank Challan No. ".$data['challanno'],0,'L');


        $pdf->SetXY(5.3, 8.95+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Manager/Cashier:___________________________ ",0,'L');



        // -------------------- branch copy 
        $Y = $Y + 1.3;

        $pdf->SetXY(0,5.0+3.0+$Y);
        $pdf->SetFont('Arial','',10);

        $pdf->Image("assets/img/cutter.jpg",0.24,8.35, 8.3,0.09, "jpeg");  





        // ------------------- branch copy end


        ///




        //$pdf->SetXY(0,5.0+4.5+$Y);
        //$pdf->SetFont('Arial','',10);
        //$pdf->Cell(0,0.5,"-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------",0,'L');
        $bx = 6.82;
        $by = 9.5;
        $Y =$Y-1.6;
        $pdf->SetXY(0,5.0+3.0+$Y);
        $pdf->SetFont('Arial','',10);

        $pdf->Image("assets/img/cutter.jpg",0.24,9.6, 8.3,0.09, "jpeg");
        $pdf->SetXY(2.4, 9.66+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"BOARD OF INTERMEDIATE AND SECONDARY EDUCATION GUJRANWALA (".class_for_9th_Adm." ".$ses." Examination , ".(Year+1).")",0,'L');



        $Barcode =  @$data['formNo']."@".$data['class']."@".$data["sess"]."@".$data['Iyear'];
        //$data['formid']."@".$data['Class'].$data['Sess'].$data["Iyear"];

        /*$bardata = Barcode::fpdf($pdf, $black, $bx, $by, $angle, $type, array('code'=>$Barcode), $width, $height);

        $len = $pdf->GetStringWidth($bardata['hri']);
        Barcode::rotate(-$len / 2, ($bardata['height'] / 2) + $fontSize + $marge, $angle, $xt, $yt);  */
        //$pdf->PrintBarcode(5.75,9.35,(int)$Barcode,.3,.0199);

        $pdf->SetXY(3.5,9.8+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','BI',7);
        $pdf->Cell(0.2,0.5,"Printing Date: " .date('d-M-Y h:i A'),0,'L');

        $pdf->SetXY(0.2,9.65+$Y);
        $pdf->SetFillColor(0,0,0);                                     
        $pdf->SetFont('Arial','BI',7);
        $pdf->Cell(0.2,0.5,"Candidate Copy",0,'L');

        /*$pdf->SetXY(1.8,9.67+$Y);
        $pdf->SetFillColor(0,0,0);                                     
        $pdf->SetFont('Arial','',6);
        $pdf->Cell(0.2,0.5," ( To be retained with HBL ) ",0,'L');  */

        $pdf->SetXY(0.2,10.0+$Y);
        $pdf->SetFillColor(0,0,0);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell($boxWidth,0.2,'Due Date: '.$endDate,1,0,'C',1); 
        $Y =$Y-0.32;

        $pdf->SetXY(2.5,10.1+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Form No:",0,'L');

        $pdf->SetFont('Arial','BU',8);
        $pdf->SetXY(3,10.1+$Y);
        $pdf->Cell( 0.5,0.5,$data['formNo'],0,'L');


        /*$pdf->SetXY(3.2   , 10.2+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Prev Roll No:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.5,10.2+$Y);
        $pdf->Cell(0.5,0.5,$data["oldRno"]." ( $LastSess,  $data[yearOfLastAp] )",0,'L');    */

        //$pdf->Image(PRIVATE_IMAGE_PATH. $data["PicPath"],6.5, 10.4+$Y, 0.45, 0.40, "JPG");
        $pdf->SetFont('Arial','',8);
        /*$pdf->SetXY(3.2   , 10.2+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(1.4,1.5,'',1,0,'C',0); 
        $pdf->SetXY(6.3,10.2);
        $pdf->MultiCell(1.1,0.2,$data["RegPvt"]==1?"Paste Recent Photograph, Must Be Cross Attested by the Head/Deputy Head of Institution":"Paste Recent Photograph. Must Be Cross attested By the Principal/V.Prinicipal/ Headmaster/Headmistress/ Dy.Headmaster/ Dy. Headmistress",0,'C'); */
        $Y=$Y+0.01;
        $pdf->SetXY(0.5,10.45+$Y);
        //$pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(1.0,10.45+$Y);
        $pdf->Cell(0.5,0.5,$data["name"],0,'L');
        //--------------------------- FATHER NAME 

        $pdf->SetXY(3.2, 10.45+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Father's Name:",0,'L');
        $pdf->SetFont('Arial','B',$FontSize);
        $pdf->SetXY(4.8,10.45+$Y);
        $pdf->Cell(0.5,0.5,$data["Fname"],0,'L');

        $pdf->SetXY(0.5, 10.59+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Total Amount Rs.",0,'L');

        $pdf->SetXY(2.35, 10.59+$Y);
        $pdf->SetFont('Arial','b',8);
        $pdf->Cell( 0.5,0.5,$total.'/-',0,'L');


        $pdf->SetXY(0.5, 10.7+$Y);
        $pdf->SetFont('Arial','',$FontSize);
        $pdf->Cell( 0.5,0.5,"Proposed Exam Area:",0,'L');

        $pdf->SetXY(1.68, 10.7+$Y);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell( 0.5,0.5,$data['Zone_cd']." - ".$data['zone_name'],0,'L');

        $pdf->Image("assets/img/CandidateCopy.jpg",0.7,10.970, 7.0,0.50, "jpeg");  

        //'Rs.'.$formfee.'+'.$Prosfee.'+'.$cert_fee.'+'. $RegFee. '/-' $fee   
        $Y=$Y+0.2;
        $pdf->SetXY(2.4, 10.05+$Y);
        $pdf->SetFont('Arial','b',7);
        $pdf->Cell( 0.5,0.5,"CMD Account No. 00427900072103",0,'L');


        $pdf->SetXY(4.1, 10.05+$Y);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','b',7);
        $pdf->Cell( 0.5,0.5,"Bank Challan No. ".$data['challanno'],0,'L');


        $pdf->SetXY(4.7, 10.56+$Y);
        $pdf->SetFont('Arial','b',$FontSize);
        $pdf->Cell( 0.5,0.5,"Manager/Cashier:___________________________ ",0,'L');




        //$filename="Admission_Forms_". $form_No."_"   .  ".pdf";    
        $pdf->Output();
        //$pdf->Output($filename,'D');







    }
    public function formdownloaded()
    {

        //DebugBreak();

        $msg = $this->uri->segment(3);
        $dob = $this->uri->segment(4);
        $this->load->model('Admission_9th_reg_model');
        $this->load->library('session');
        $myarray = array('msg'=>$msg,'dob'=>$dob);
        $this->load->view('common/commonheader.php');
        $this->load->view('Admission/9th/FormDownloaded.php',$myarray);
        $this->load->view('common/commonfooter.php');
    }
    public function NewEnrolment()
    {    
        // DebugBreak();
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        // $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/commonheader.php');
        /* $data = array(
        'isselected' => '14',
        ); */
        //  DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');    
        }
        else{
            $error['excep'] = '';
        }
        // $this->commonheader($data);
        $this->load->view('Admission/9th/NewEnrolment_pvt.php',$error['excep']);
        //$this->load->view('common/commonfooter9th.php');
        $this->commonfooter(array("files"=>array("jquery.maskedinput.js","validate.NewEnrolment.js")));
        // if(@$_POST['cand_name'] != '' )//&& @$_POST['father_name'] != '' && @$_POST['bay_form'] != '' && @$_POST['father_cnic'] != '' && @$_POST['dob'] != '' && @$_POST['mob_number'] != '') //{   



        //}



    }
    public function NewEnrolment_EditForm()
    {    
        //  DebugBreak();
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $Inst_Id = $userinfo['Inst_Id'];
        $this->load->view('common/header.php',$userinfo);
        $isReAdm = 0;
        $year = 0;
        $data = array(
            'isselected' => '14',
        );
        $formno = $this->uri->segment(3);
        $this->load->model('Admission_9th_reg_model');
        if($this->session->flashdata('NewEnrolment_error')){
            //DebugBreak();

            $RegStdData['data'][0] = $this->session->flashdata('NewEnrolment_error');   
            $isReAdm = $RegStdData['data'][0]['isreadm'];
            $RegStdData['isReAdm']=$isReAdm;
            $RegStdData['Oldrno']=0;

        }
        else{
            $error['excep'] = '';

            if($this->session->flashdata('IsReAdm')){
                $isReAdm = 1;
                $year = 2015;
            }
            else{
                $isReAdm = 0;
                $year = 2016;    
            }

            $RegStdData = array('data'=>$this->Admission_9th_reg_model->EditEnrolement_data($formno,$year,$Inst_Id),'isReAdm'=>$isReAdm,'Oldrno'=>0);
        }


        $this->load->view('common/menu.php',$data);
        $this->load->view('Admission/9th/Edit_Enrolement_form.php',$RegStdData);   
        $this->commonfooter(array("files"=>array("jquery.maskedinput.js","validate.NewEnrolment.js"))); 

    }

    function feecalculate($data,$isupdate)
    {
        // DebugBreak();
        $isper = 0;
        if( $this->practicalsubjects($data['sub6'])|| $this->practicalsubjects($data['sub7'])|| $this->practicalsubjects($data['sub8']))
        {
            $isper = 1; 
        }
        $User_info_data = array('Inst_Id'=>999999, 'date' => date('Y-m-d'),'isPratical'=>$isper);
        $user_info  =  $this->Admission_9th_reg_model->getuser_infoPVT($User_info_data); 
        $isfine = 0;
        $Total_fine = 0;
        $processFee = 295;
        $admfee = 1300;
        $admfeecmp = 1300;

        // Declare Science & Arts Fee's According to Fee Table .  Note: this will assign to Triple date fee. After triple date it will not asign fees.

        if(!empty($user_info['rule_fee'])) 
        {   

            $endDate =date('Y-m-d', strtotime($user_info['rule_fee'][0]['End_Date'])); 

            $singleDate = $endDate;
            if($user_info['rule_fee'][0]['isPrSub']==1)
            {
                $admfee = $user_info['rule_fee'][0]['PVT_Amount'];
                $processFee = $user_info['rule_fee'][0]['Processing_Fee'];;
                $admfeecmp = $user_info['rule_fee'][0]['Comp_Pvt_Amount'];
            } 
            else if($user_info['rule_fee'][0]['isPrSub']== 0 )
            {
                $admfee = $user_info['rule_fee'][0]['PVT_Amount'];
                $processFee = $user_info['rule_fee'][0]['Processing_Fee'];;
                $admfeecmp = $user_info['rule_fee'][0]['Comp_Pvt_Amount'];
            }
        }
        else
        {

            $date = new DateTime(SingleDateFee9th);

            $singleDate =  $date->format('Y-m-d');                                                                     
            $User_info_data = array('Inst_Id'=>999999, 'date' => $singleDate,'isPratical'=>$isper);

            $user_info  =  $this->Admission_9th_reg_model->getuser_infoPVT($User_info_data);
            //     echo '<pre>'; print_r($user_info);die();
            if($user_info['rule_fee'][0]['isPrSub'] == 1)
            {
                $admfee = $user_info['rule_fee'][0]['PVT_Amount'];
                $processFee = $user_info['rule_fee'][0]['Processing_Fee'];;
                $admfeecmp = $user_info['rule_fee'][0]['Comp_Pvt_Amount'];

            } 
            else if( $user_info['rule_fee'][0]['isPrSub'] == 0 )
            {
                $admfee = $user_info['rule_fee'][0]['PVT_Amount'];
                $processFee = $user_info['rule_fee'][0]['Processing_Fee'];;
                $admfeecmp = $user_info['rule_fee'][0]['Comp_Pvt_Amount'];

            }

            $TripleDate = date('Y-m-d',strtotime(TripleDateFee9th)); 
            $now = date('Y-m-d'); // or your date as well
            $days = (strtotime($TripleDate) - strtotime($now)) / (60 * 60 * 24);
            $fine = 500;
            $days = abs($days);
            $endDate = date('d-m-Y');
            $admfee =  ($admfee*3); 
            $admfeecmp =  ($admfeecmp*3); 
            $Total_fine = $days*$fine;

        }  
        //DebugBreak();
        $finalFee = '';
        if($data['cat09'] !=  NULL && $data['cat10'] != NULL)
        {
            $finalFee = $admfeecmp;
        }
        else
        {
            $finalFee = $admfee;
        }
        if($data['Spec']>0 && (strtotime(date('Y-m-d')) <= strtotime(SingleDateFee9th)) )
        {
            $regfee =  1000;
            if($data['Spec'] >  0)
            {
                $regfee = 0; 
                $finalFee = 0;
            }
            if($data['Spec'] == 1 OR $data['Spec'] == 3)
            {
                $processFee = 0;
            }
            $data['AdmFee'] = $finalFee;
            $data['AdmTotalFee'] = $processFee+$Total_fine+$data['regFee'];
            $AllStdFee = array('formNo'=>$data['formNo'],'regFee'=>0,'AdmProcessFee'=>$processFee,'AdmFee'=>$finalFee,'AdmFine'=>$Total_fine,'AdmTotalFee'=>$data['AdmTotalFee']);
        }
        else
        {
            $data['AdmFee'] = $finalFee;
            $data['AdmTotalFee'] = $processFee+$Total_fine+$data['regFee']+$finalFee;
            $AllStdFee = array('formNo'=>$data['formNo'],'regFee'=>1000,'AdmProcessFee'=>$processFee,'AdmFee'=>$finalFee,'AdmFine'=>$Total_fine,'AdmTotalFee'=>$data['AdmTotalFee']);
        }

        if($isupdate == 0)
        {
            $info =   $AllStdFee;
        }
        else
        {
            $info =   $this->Admission_9th_reg_model->Update_AdmissionFeePvt($AllStdFee); 
        }

        return $info;
    }




    private function set_barcode($code)
    {
        //DebugBreak()  ;
        //load library
        $this->load->library('zend');
        //load in folder Zend
        $this->zend->load('Zend/Barcode');


        $file = Zend_Barcode::draw('code128','image', array('text' => $code,'drawText'=>false), array());
        //$code = $code;
        $store_image = imagepng($file,BARCODE_PATH."{$code}.png");
        return $code.'.png';

    }

    public function commonheader($data)
    {
        $this->load->view('common/header.php',$data);
        $this->load->view('common/menu.php',$data);
    }
    public function getzone(){
        // DebugBreak();
        $data = array(
            'tehCode' => $this->input->post('tehCode'),
        );

        $tehCode = $data['tehCode'];
        $this->load->model('Admission_9th_reg_model');
        $value = array('teh'=> $this->Admission_9th_reg_model->getzone($tehCode)) ;
        echo json_encode($value);
        exit();
    }

    public function getcenter(){
        //  DebugBreak();

        $data = array(
            'zoneCode' => $this->input->post('pvtZone'),
            'gen' => $this->input->post('gend'),
        );

        $this->load->model('Admission_9th_reg_model');
        $value = array('center'=> $this->Admission_9th_reg_model->getcenter($data)) ;
        echo json_encode($value);

    } 
    public function commonfooter($data)
    {
        $this->load->view('common/footer9th.php',$data);
    }

    function convertImage($originalImage, $outputImage, $quality,$ext)
    {

        if (preg_match('/jpg|jpeg/i',$ext))
            $imageTmp=imagecreatefromjpeg($originalImage);
        else if (preg_match('/png/i',$ext))
            $imageTmp=imagecreatefrompng($originalImage);
            else if (preg_match('/gif/i',$ext))
                $imageTmp=imagecreatefromgif($originalImage);
                else if (preg_match('/bmp/i',$ext))
                    $imageTmp=imagecreatefrombmp($originalImage);
                    else
                        return 0;

        imagejpeg($imageTmp, $outputImage, $quality);
        imagedestroy($imageTmp);

        return 1;
    }
    public function frmvalidation()
    {

        $this->load->model('Admission_9th_reg_model');
        $_POST['address']  = str_replace("'", "", $_POST['address'] );
        $subjectslang = array('22','23','36','34','35');
        $subjectshis = array('20','21','19');

        $cntzero = substr_count(@$_POST['bay_form'],"0");
        $cntone = substr_count(@$_POST['bay_form'],"1");
        $cnttwo = substr_count(@$_POST['bay_form'],"2");
        $cntthr = substr_count(@$_POST['bay_form'],"3");
        $cntfour = substr_count(@$_POST['bay_form'],"4");
        $cntfive = substr_count(@$_POST['bay_form'],"5");
        $cntsix = substr_count(@$_POST['bay_form'],"6");
        $cntseven = substr_count(@$_POST['bay_form'],"7");
        $cnteight = substr_count(@$_POST['bay_form'],"8");
        $cntnine = substr_count(@$_POST['bay_form'],"9");


        if(@$_POST['dob'] != null )
        {
            $date = new DateTime(@$_POST['dob']);
            $convert_dob = $date->format('Y-m-d');     
        }

        if(@$_POST['cand_name'] == ''   )
        {
            $allinputdata['excep'] = 'Please Enter Your Name';
        } 

        else if(strlen($_POST['cand_name'])<3)  
        {
            $allinputdata['excep'] = 'Please Enter Your Name';
        }

        else if (@$_POST['father_name'] == ''   )
        {
            $allinputdata['excep'] = 'Please Enter Your Father Name';
        }   


        else if (strlen($_POST['father_name'])<3) 
        {
            $allinputdata['excep'] = 'Please Enter Your Father Name';
        }

        else if(@$_POST['bay_form'] == ''   )
        {
            $allinputdata['excep'] = 'Please Enter Your Bay Form No.';
        }

        else if( (@$_POST['bay_form'] == '00000-0000000-0') || (@$_POST['bay_form'] == '11111-1111111-1') || (@$_POST['bay_form'] == '22222-2222222-2') || (@$_POST['bay_form'] == '33333-3333333-3') || (@$_POST['bay_form'] == '44444-4444444-4')
            || (@$_POST['bay_form'] == '55555-5555555-5') || (@$_POST['bay_form'] == '66666-6666666-6') || (@$_POST['bay_form'] == '77777-7777777-7') || (@$_POST['bay_form'] == '88888-8888888-8') || (@$_POST['bay_form'] == '99999-9999999-9') ||
            (@$_POST['bay_form'] == '00000-1111111-0') || (@$_POST['bay_form'] == '00000-1111111-1') || (@$_POST['bay_form'] == '00000-0000000-1' || $cntzero >7 || $cntone >7 || $cnttwo >7 || $cntfour >7 || $cntthr >7 || $cntfive >7 || $cntsix >7 || $cntseven >7 || $cnteight >7 || $cntnine >7)
            )
            {
                $allinputdata['excep'] = 'Please Enter Your Correct Bay Form No.';
            }


            else if(@$_POST['father_cnic'] == '' )
            {
                $allinputdata['excep'] = 'Please Enter Your Father CNIC';



            }
            else if((@$_POST['bay_form'] == @$_POST['father_cnic']) || (@$_POST['father_cnic'] == @$_POST['bay_form']) )
            {
                $allinputdata['excep'] = 'Your Bay Form and FNIC No. are not same';



            }
            else if (@$_POST['dob'] == '' )
            {
                $allinputdata['excep'] = 'Please Enter Your  Date of Birth';


            }
            else if(@$_POST['mob_number'] == '')
            {
                $allinputdata['excep'] = 'Please Enter Your Mobile Number';


            }
            else if(@$_POST['medium'] == 0)
            {
                $allinputdata['excep'] = 'Please Select Your Medium';


            }

            else if(@$_POST['MarkOfIden']== '')
            {
                $allinputdata['excep'] = 'Please Enter Your Mark of Identification';


            }

            else if((@$_POST['medium'] != '1') and (@$_POST['medium'] != '2') )
            {
                $allinputdata['excep'] = 'Please Select Your medium';

            }
            else if((@$_POST['nationality'] != '1') and (@$_POST['nationality'] != '2') )
            {
                $allinputdata['excep'] = 'Please Select Your Nationality';


            }
            else if((@$_POST['gender'] != '1') and (@$_POST['gender'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Gender';


            }
            else if((@$_POST['hafiz']!= '1') and (@$_POST['hafiz']!= '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Hafiz-e-Quran option';


            }
            else if((@$_POST['religion'] != '1') and (@$_POST['religion'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your religion';

            }
            else if((@$_POST['UrbanRural'] != '1') and (@$_POST['UrbanRural'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Residency';


            }
            else if(@$_POST['address'] =='')
            {
                $allinputdata['excep'] = 'Please Enter Your Address';


            }
            else if(@$_POST['pvtinfo_dist'] ==''  || @$_POST['pvtinfo_dist'] ==0  )
            {
                $allinputdata['excep'] = 'Please Select Your District First.';


            }
            else if(@$_POST['pvtinfo_teh'] =='' || @$_POST['pvtinfo_teh'] ==0)
            {
                $allinputdata['excep'] = 'Please Select Your Tehsil First.';


            }
            else if(@$_POST['pvtZone'] =='' || @$_POST['pvtZone'] ==0)
            {
                $allinputdata['excep'] = 'Please Select Your Zone First.';


            }
            else if(@$_POST['std_group'] == 0)
            {
                $allinputdata['excep'] = 'Please Select Your Study Group';


            }
            else if((@$_POST['std_group'] == 1) && ((@$_POST['sub4']!=5) || (@$_POST['sub5']!=6)||(@$_POST['sub6']!=7)|| (@$_POST['sub7']!=8)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';


            }
            else if((@$_POST['std_group'] == 7)&& ((@$_POST['sub4']!=5) || (@$_POST['sub5']!=6)||(@$_POST['sub6']!=7)|| (@$_POST['sub7']!=78)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';


            }
            else if((@$_POST['std_group'] == 8)&& ((@$_POST['sub4']!=5) || (@$_POST['sub5']!=6)||(@$_POST['sub6']!=7)|| (@$_POST['sub7']!=43)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';


            }
            else if((@$_POST['std_group'] == 2) && ((@$_POST['sub4']==5) || (@$_POST['sub5']==6)||(@$_POST['sub6']==7)|| (@$_POST['sub7']==43) || (@$_POST['sub7']==8)))
            {
                $allinputdata['excep'] = 'Subjects not according to Group';


            }

            else if((@$_POST['std_group'] == 5)&& ((@$_POST['sub4']==5) || (@$_POST['sub5']==6)||(@$_POST['sub6']==7)|| (@$_POST['sub7']==43) || (@$_POST['sub7']==8)))
            {
                $allinputdata['excep'] = 'Subjects not according to Group';


            }

            else if((@$_POST['sub1'] == @$_POST['sub2']) ||(@$_POST['sub1'] == @$_POST['sub3'])||(@$_POST['sub1'] == @$_POST['sub4'])||(@$_POST['sub1'] == @$_POST['sub5'])||(@$_POST['sub1'] == @$_POST['sub6'])||(@$_POST['sub1'] == @$_POST['sub7'])||
                (@$_POST['sub1'] == @$_POST['sub8']))
                {
                    $allinputdata['excep'] = 'Please Select Different Subjects';


                }
                else if((@$_POST['sub2'] == @$_POST['sub1']) ||(@$_POST['sub2'] == @$_POST['sub3'])||(@$_POST['sub2'] == @$_POST['sub4'])||(@$_POST['sub2'] == @$_POST['sub5'])||(@$_POST['sub2'] == @$_POST['sub6'])||(@$_POST['sub2'] == @$_POST['sub7'])||(@$_POST['sub2'] == @$_POST['sub7'])
                    )
                    {
                        $allinputdata['excep'] = 'Please Select Different Subjects';


                    }
                    else if((@$_POST['sub3'] == @$_POST['sub1']) ||(@$_POST['sub3'] == @$_POST['sub2'])||(@$_POST['sub3'] == @$_POST['sub4'])||(@$_POST['sub3'] == @$_POST['sub5'])||(@$_POST['sub3'] == @$_POST['sub6'])||(@$_POST['sub3'] == @$_POST['sub7'])||(@$_POST['sub3'] == @$_POST['sub7'])
                        )
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';


                        }
                        else if((@$_POST['sub4'] == @$_POST['sub1']) ||(@$_POST['sub4'] == @$_POST['sub3'])||(@$_POST['sub4'] == @$_POST['sub2'])||(@$_POST['sub4'] == @$_POST['sub5'])||(@$_POST['sub4'] == @$_POST['sub6'])||(@$_POST['sub4'] == @$_POST['sub7'])||(@$_POST['sub4'] == @$_POST['sub7']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';

                        }
                        else if((@$_POST['sub5'] == @$_POST['sub1']) ||(@$_POST['sub5'] == @$_POST['sub3'])||(@$_POST['sub5'] == @$_POST['sub4'])||(@$_POST['sub5'] == @$_POST['sub2'])||(@$_POST['sub5'] == @$_POST['sub6'])||(@$_POST['sub5'] == @$_POST['sub7'])||(@$_POST['sub5'] == @$_POST['sub7']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';


                        }
                        else if((@$_POST['sub8'] == @$_POST['sub1']) ||(@$_POST['sub8'] == @$_POST['sub3'])||(@$_POST['sub8'] == @$_POST['sub4'])||(@$_POST['sub8'] == @$_POST['sub5'])||(@$_POST['sub8'] == @$_POST['sub2'])||(@$_POST['sub8'] == @$_POST['sub6'])||(@$_POST['sub8'] == @$_POST['sub7']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';

                        }
                        else if((@$_POST['sub6'] == @$_POST['sub1']) ||(@$_POST['sub6'] == @$_POST['sub3'])||(@$_POST['sub6'] == @$_POST['sub4'])||(@$_POST['sub6'] == @$_POST['sub5'])||(@$_POST['sub6'] == @$_POST['sub8'])||(@$_POST['sub6'] == @$_POST['sub2'])||(@$_POST['sub6'] == @$_POST['sub7']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';


                        }
                        else if((@$_POST['sub7'] == @$_POST['sub1']) ||(@$_POST['sub7'] == @$_POST['sub3'])||(@$_POST['sub7'] == @$_POST['sub4'])||(@$_POST['sub7'] == @$_POST['sub5'])||(@$_POST['sub7'] == @$_POST['sub6'])||(@$_POST['sub7'] == @$_POST['sub6'])||(@$_POST['sub7'] == @$_POST['sub2']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';


                        }
                        else if (in_array($_POST['sub6'], $subjectslang) && in_array($_POST['sub7'], $subjectslang))
                        {
                            $allinputdata['excep'] = 'Double Language is not Allowed Please choose a different Subject';

                        }
                        else if (in_array($_POST['sub6'], $subjectshis) && in_array($_POST['sub7'], $subjectshis))
                        {
                            $allinputdata['excep'] = 'Double History is not Allowed Please choose a different Subject';

                        }
                        else if(@$_POST['sub6'] == @$_POST['sub7'])
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';


                        }
                        else if(@$_POST['sub7'] == @$_POST['sub6'])
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';

                        }

                        else if(@$_POST['sub1'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 1';


                        }
                        else if(@$_POST['sub2'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 2';

                        }
                        else if(@$_POST['sub3'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 3';


                        }
                        else if(@$_POST['sub4'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 4';


                        }

                        else if(@$_POST['sub5'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 5';


                        }
                        else if(@$_POST['sub6'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 6';


                        }
                        else if(@$_POST['sub7'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 7';


                        }
                        else if(@$_POST['sub8'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 8';


                        }

                        $nxtrnosessyear3 = $this->Admission_9th_reg_model->checknextrno($_POST['cand_name'],$_POST['father_name'],$_POST['dob'],$_POST['father_cnic']);

        //if($nxtrnosessyear !=  -1)
        if($nxtrnosessyear3[0]['NextRno_Sess_Year'] !="")
        {
            $nxtrnosessyear = $nxtrnosessyear3[0]['NextRno_Sess_Year'];

        }   
        if($nxtrnosessyear =='')
        {
            $nxtrnosessyear1 = $this->Admission_9th_reg_model->checknextrno_newAdmission($_POST['cand_name'],$_POST['father_name'],$_POST['dob'],$_POST['father_cnic'],$_POST['bay_form']);
            if($nxtrnosessyear1[0]['NextRno_Sess_Year'] !="" )
            {
                $nxtrnosessyear = $nxtrnosessyear1[0]['NextRno_Sess_Year'];

            } 
        }
        if($nxtrnosessyear =='')
        {
            $nxtrnosessyear2 = $this->Admission_9th_reg_model->bay_form_fnic($_POST['bay_form'],$_POST['father_cnic']);
            if($nxtrnosessyear2[0]['NextRno_Sess_Year'] !="")
            {
                $nxtrnosessyear = $nxtrnosessyear2[0]['NextRno_Sess_Year'];


            }
        }
        if($nxtrnosessyear != '')
        {
            $allinputdata['excep'] =  "You have already appeared:".$nxtrnosessyear;
        }



        if($allinputdata['excep'] == '')
        {
            $allinputdata['excep'] =  'Success';
        }

        echo json_encode($allinputdata);

        exit();

    }  
    public function EditPicForms()
    {
        // DebugBreak();
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $data = array(
            'isselected' => '14',

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
        $this->load->model('Admission_9th_reg_model');
        //  $error['grp_cd'] = $user['grp_cd'];
        $RegStdData = array('data'=>$this->Admission_9th_reg_model->EditPicEnrolement($user['Inst_Id']),'grp_cd'=>$user['grp_cd']);
        $RegStdData['msg_status'] = $error_msg;
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('Admission/9th/EditPicForms.php',$RegStdData);
        $this->load->view('common/footer.php');



    }

    public function uplaodpics()
    {
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $formno = $_POST['formno']  ;
        $target_path = IMAGE_PATH;

        $Inst_Id = $userinfo['Inst_Id'];
        if (!file_exists($target_path)){

            mkdir($target_path);
        }
        $target_path = IMAGE_PATH.$Inst_Id.'/';
        if (!file_exists($target_path)){

            mkdir($target_path);
        } 

        $config['upload_path']   = $target_path;
        $config['allowed_types'] = 'jpg';
        $config['max_size']      = '20';
        $config['min_size']      = '4';
        //  $config['max_width']     = '260';
        // $config['max_height']    = '290';
        $config['min_width']     = '110';
        $config['min_height']    = '100';
        $config['overwrite']     = TRUE;
        $config['file_name']     = $formno.'.jpg';

        $filepath = $target_path. $config['file_name']  ;

        //$config['new_image']    = $formno.'.JPEG';

        $this->load->library('upload', $config);

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        $this->upload->initialize($config);

        if($check !== false) {

            $file_size = round($_FILES['image']['size']/1024, 2);
            if($file_size<=20 && $file_size>=4)
            {
                if ( !$this->upload->do_upload('image',true))
                {
                    if($this->upload->error_msg[0] != "")
                    {
                        $error['excep']= $this->upload->error_msg[0];
                        $allinputdata['excep'] = $this->upload->error_msg[0];
                        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                        //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                        redirect('Admission_9th_reg/EditPicForms/');
                        return;

                    }


                }
            }
            else
            {
                $allinputdata['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                redirect('Admission_9th_reg/EditPicForms/');

            }
        }
        else
        {
            // $check = getimagesize($filepath);
            if($check === false)
            {
                $allinputdata['excep'] = 'Please Upload Your Picture';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect('Admission_9th_reg/EditPicForms/');
                return;
            }
        }

        // $this->frmvalidation('NewEnrolment',$allinputdata,0);

        $a = getimagesize($filepath);
        if($a[2]!=2)
        {
            $this->convertImage($filepath,$filepath,100,$a['mime']);
        }
        redirect('Admission_9th_reg/EditPicForms/');
        return;
    }
   public function deleteExtarfiles()
    {

       //  DebugBreak();
        $clsfolder = $this->uri->segment(3);
        
        
        if($clsfolder == 10)
        {
            $folder = '\\annual';
        }
        else
        {
            $folder = '';
        }
        
        
        $dirPath = 'C:\inetpub\vhosts\bisegrw.edu.pk\Share Images\uploads\SSC\admission\2018\\'.$clsfolder.'th'.$folder.'\private';
        $copypath = 'C:\inetpub\vhosts\bisegrw.edu.pk\Share Images\uploads\SSC\admission\2018\\'.$clsfolder.'th'.$folder.'\private_temp';
        if (is_dir($dirPath)) {
            $objects = scandir($dirPath);
            $i = 0;
            foreach ($objects as $object) {
                if ($object != "." && $object !="..") {

                    if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
                        $this->deleteExtarfiles($dirPath . DIRECTORY_SEPARATOR . $object);
                    } else {


                        $filepath = $dirPath . DIRECTORY_SEPARATOR . $object;
                        $copydir = $copypath . DIRECTORY_SEPARATOR . $object;
                        $subtem =  substr($object,0,4);
                        if($subtem ==  'temp')
                        {

                           // $fcrttime =  date('d-m-Y',filemtime($filepath));
                           // $crttime  = date('d-m-Y'); 
                          //  if($fcrttime <$crttime)
                          //  {
                                $i+=1;
                                copy($filepath,$copydir);
                                unlink($dirPath . DIRECTORY_SEPARATOR . $object); 
                                echo $i.') File Moved '.$copydir.'</br>';   
                          //  }
                        }
                    }
                }
            }
            reset($objects);
        }
    }


    public function uploadpic() 
    {
        //DebugBreak();

        ############ Configuration ##############
        $config["generate_image_file"]            = true;
        $config["generate_thumbnails"]            = false;
        $config["image_max_size"]                 = 150; //Maximum image size (height and width)
        $config["thumbnail_size"]                  = 200; //Thumbnails will be cropped to 200x200 pixels
        $config["image_prefix"]                 = "temp_"; //Normal thumb Prefix
        $config["thumbnail_prefix"]                = "thumb_"; //Normal thumb Prefix
        $config["destination_folder"]            = PRIVATE_IMAGE_PATH9TH; //upload directory ends with / (slash)
        $config["thumbnail_destination_folder"]    = ''; //upload directory ends with / (slash)
        $config["upload_url"]                     = PRIVATE_IMAGE_PATH9TH;//base_url()."/uploads/2017/private/10th/";
        $config["quality"]                         = 90; //jpeg quality
        $config["random_file_name"]                = true; //randomize each file name

        if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) 
        {
            exit;  //try detect AJAX request, simply exist if no Ajax
        }
        //specify uploaded file variable
        $config["file_data"] = $_FILES["__files"]; 

        $this->load->library('ImageResize');

        //create class instance 
        $im = new ImageResize(); 

        try
        {
            $responses = $im->resize($config); //initiate image resize
            //output images
            foreach($responses["images"] as $response){

                $config["upload_url"] = $config["upload_url"].$response;
                $type = pathinfo($config["upload_url"], PATHINFO_EXTENSION);
                $config["upload_url"] = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents($config["upload_url"]));
                echo '<input type="hidden" class="hidden" id="picname" name="picname" value="'.$response.'">
                <img id="previewImg" style="width:130px; height: 130px;" class="img-responsive" src="'.$config["upload_url"].'" alt="CandidateImage">';
            }
        }
        catch(Exception $e){
            echo '<div class="error">';
            echo $e->getMessage();
            echo '</div>';
        }
    }

}
