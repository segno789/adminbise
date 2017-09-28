<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BiseCorrection extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->library('session');
        if( !$this->session->userdata('logged_in') && $this->router->method != 'login' ) {
            // redirect('login/biselogin');
        }
    }
    public function migration9th()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '4',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        // DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');
            $error['excep'] = $error['excep']['excep'];
        }
        else{
            $error['excep'] = '';
        }
       // DebugBreak();
        $data['migration'] = $this->BiseCorrections_model->getmigration(9);
        $data['migration1'] = $this->BiseCorrections_model->getmigrationonline(9);
        $data['migration']  =  array_merge($data['migration'],$data['migration1'])   ;
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/migration9th.php',$error);
        $this->load->view('common/footer.php');
    }
   public function migration11th()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '40',
        );
        $this->load->library('session');
       // $this->output->enable_profiler(TRUE);
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
         //DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');
            $error['excep'] = $error['excep']['excep'];
        }
        else{
            $error['excep'] = '';
        }
        $data['migration'] = $this->BiseCorrections_model->getmigration(11);
        $data['migration1'] = $this->BiseCorrections_model->getmigrationonline(11);
        $data['migration']  =  array_merge($data['migration'],$data['migration1'])   ;
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/migration11th.php',$error);
        $this->load->view('common/footer.php');
    }
    public function migration10th()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '4',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        // DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');
            $error['excep'] = $error['excep']['excep'];
        }
        else{
            $error['excep'] = '';
        }
        $data['migration'] = $this->BiseCorrections_model->getmigration(10);
        $data['migration1'] = $this->BiseCorrections_model->getmigrationonline(10);
        $data['migration']  =  array_merge($data['migration'],$data['migration1'])   ;
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/migration10th.php',$error);
        $this->load->view('common/footer.php');
    }
    public function migration12th()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '40',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        // DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');
            $error['excep'] = $error['excep']['excep'];
        }
        else{
            $error['excep'] = '';
        }
        $data['migration'] = $this->BiseCorrections_model->getmigration(12);
        $data['migration1'] = $this->BiseCorrections_model->getmigrationonline(12);
        $data['migration']  =  array_merge($data['migration'],$data['migration1'])   ;
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/migration12th.php',$error);
        $this->load->view('common/footer.php');
    }
    public function listmigration9th()
    {
        // DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '4',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        // DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');
            $error['excep'] = $error['excep']['excep'];
        }
        else{
            $error['excep'] = '';
        }
        $data['migration'] = $this->BiseCorrections_model->getlistmigration(9);
        $data['migration1'] = $this->BiseCorrections_model->getlistmigrationonline(9);
          $data['migration']  =  array_merge($data['migration'],$data['migration1'])   ;
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/ListMir9th.php',$error);
        $this->load->view('common/footer.php');
    }
     public function listmigration11th()
    {
        // DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '40',
        );
        
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        // DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');
            $error['excep'] = $error['excep']['excep'];
        }
        else{
            $error['excep'] = '';
        }
        $data['migration'] = $this->BiseCorrections_model->getlistmigration(11);
        $data['migration1'] = $this->BiseCorrections_model->getlistmigrationonline(11);
        $data['migration']  =  array_merge($data['migration'],$data['migration1'])   ;
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/ListMir11th.php',$error);
        $this->load->view('common/footer.php');
    }
    public function listmigration10th()
    {
        // DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '4',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        // DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');
            $error['excep'] = $error['excep']['excep'];
        }
        else{
            $error['excep'] = '';
        }
        $data['migration'] = $this->BiseCorrections_model->getlistmigration(10);
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/ListMir10th.php',$error);
        $this->load->view('common/footer.php');
    }
   public function listmigration12th()
    {
        // DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '40',
        );
        // $this->output->enable_profiler(TRUE);
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        // DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');
            $error['excep'] = $error['excep']['excep'];
        }
        else{
            $error['excep'] = '';
        }
        $data['migration'] = $this->BiseCorrections_model->getlistmigration(12);
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/ListMir12th.php',$error);
        $this->load->view('common/footer.php');
    }
    public function migrate()
    {
         //DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '4',
        );
        $isclass = $this->uri->segment(3);
        $formno = $this->uri->segment(4);
        $migrateto = $this->uri->segment(5);
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
       //  DebugBreak();
        if($isclass == 9)
        {
            if($migrateto != '')
            {
                $oldinst_cd = substr($formno, 0, 6);
                $newinst_cd    = $migrateto;
                $formnopic = $formno.'.jpg'; 
            }
            else
            {
                $formno =  $_POST['txtformNo_search'];
                $oldinst_cd = substr($_POST['txtformNo_search'], 0, 6);
                $newinst_cd    = $_POST['txtinst_search'];
                $formnopic = @$_POST['txtformNo_search'].'.jpg';

            }

            $isupadte = $this->BiseCorrections_model->updateMigData($formno,$newinst_cd,$oldinst_cd,$userinfo['Inst_Id']);

            if($isupadte >0)
            {
                $base_path = IMAGE_PATH.$oldinst_cd.'/'.$formnopic;
                $copyimg = IMAGE_PATH.$newinst_cd.'/'.$formnopic;;

                if (!(copy($base_path, $copyimg))) 
                {
                    $data['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                    $this->session->set_flashdata('NewEnrolment_error',$data);
                    redirect('BiseCorrection/migration9th/');
                }
                else
                {
                    $data['excep'] = 'success';
                    $this->session->set_flashdata('NewEnrolment_error',$data);
                    redirect('BiseCorrection/migration9th/');
                }  
            }

            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration9th/');
            }
        }
        else if($isclass == 11)
        {
            if($migrateto != '')
            {
                $oldinst_cd = substr($formno, 0, 6);
                $newinst_cd    = $migrateto;
                $formnopic = $formno.'.jpg'; 
            }
            else
            {
                $formno =  $_POST['txtformNo_search'];
                $oldinst_cd = substr($_POST['txtformNo_search'], 0, 6);
                $newinst_cd    = $_POST['txtinst_search'];
                $formnopic = @$_POST['txtformNo_search'].'.jpg';

            }
               $app_no = $this->uri->segment(6);
            $isupadte = $this->BiseCorrections_model->update11MigData($formno,$newinst_cd,$oldinst_cd,$userinfo['Inst_Id'],$app_no,1);

            if($isupadte >0)
            {
                $base_path = IMAGE_PATH11.$oldinst_cd.'/'.$formnopic;
                $copyimg = IMAGE_PATH11.$newinst_cd.'/'.$formnopic;;

                if (!(copy($base_path, $copyimg))) 
                {
                    $data['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                    $this->session->set_flashdata('NewEnrolment_error',$data);
                    redirect('BiseCorrection/migration11th/');
                }
                else
                {
                    $data['excep'] = 'success';
                    $this->session->set_flashdata('NewEnrolment_error',$data);
                    redirect('BiseCorrection/migration11th/');
                }  
            }

            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration11th/');
            }
        }
        else if($isclass == 10)
        {     
             $app_no = $this->uri->segment(6);
            if($migrateto != '')
            {
                //$oldinst_cd = substr($formno, 0, 6);
                $newinst_cd    = $migrateto;
                $formnopic = $formno.'.jpg'; 
            }
            else
            {
                $formno =  $_POST['txtformNo_search'];
                //$oldinst_cd = substr($_POST['txtformNo_search'], 0, 6);
                $newinst_cd    = $_POST['txtinst_search'];
                $formnopic = @$_POST['txtformNo_search'].'.jpg';

            }
              if($app_no > 0)
              {
                  $isupdate =  3;
                  $formno = $app_no;
              }
              else
              {
                 $isupdate =  1;  
              }
            $isupadte = $this->BiseCorrections_model->update10MigData($formno,$userinfo['Inst_Id'],$isupdate,$newinst_cd);

            if($isupadte >0)
            {

                $data['excep'] = 'success';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration10th/');

            }

            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration10th/');
            } 
        }
        else if($isclass == 12)
        {
              $app_no = $this->uri->segment(6);
            if($migrateto != '')
            {
                //$oldinst_cd = substr($formno, 0, 6);
                $newinst_cd    = $migrateto;
                $formnopic = $formno.'.jpg'; 
            }
            else
            {
                $formno =  $_POST['txtformNo_search'];
                //$oldinst_cd = substr($_POST['txtformNo_search'], 0, 6);
                $newinst_cd    = $_POST['txtinst_search'];
                $formnopic = @$_POST['txtformNo_search'].'.jpg';

            }
               if($app_no > 0)
              {
                  $isupdate =  3;
                  $formno = $app_no;
              }
              else
              {
                 $isupdate =  1;  
              }
            $isupadte = $this->BiseCorrections_model->update12MigData($formno,$userinfo['Inst_Id'],$isupdate,$newinst_cd);

            if($isupadte >0)
            {

                $data['excep'] = 'success';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration12th/');

            }

            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration12th/');
            } 
        }

    }
    public function migrateonline()
    {

        $this->load->helper('url');
        $data = array(
            'isselected' => '4',
        );
        $isclass = $this->uri->segment(3);
        $formno = $this->uri->segment(4);
        $migrateto = $this->uri->segment(5);
        $app_no = $this->uri->segment(6);
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        //DebugBreak();
        if($isclass == 9)
        {
            if($migrateto != '')
            {
                $oldinst_cd = substr($formno, 0, 6);
                $newinst_cd    = $migrateto;
                $formnopic = $formno.'.jpg'; 
            }
            else
            {
                $formno =  $_POST['txtformNo_search'];
                $oldinst_cd = substr($_POST['txtformNo_search'], 0, 6);
                $newinst_cd    = $_POST['txtinst_search'];
                $formnopic = @$_POST['txtformNo_search'].'.jpg';

            }

            $isupadte = $this->BiseCorrections_model->updateMigDataOnline($formno,$newinst_cd,$oldinst_cd,$userinfo['Inst_Id'],$app_no,1);
            //$isupadte = $this->BiseCorrections_model->updateMigData($formno,$newinst_cd,$oldinst_cd,$userinfo['Inst_Id']);

            if($isupadte >0)
            {
                $base_path = IMAGE_PATH.$oldinst_cd.'/'.$formnopic;
                $copyimg = IMAGE_PATH.$newinst_cd.'/'.$formnopic;;

                if (!(copy($base_path, $copyimg))) 
                {
                    $data['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                    $this->session->set_flashdata('NewEnrolment_error',$data);
                    redirect('BiseCorrection/migration9th/');
                }
                else
                {
                    $data['excep'] = 'success';
                    $this->session->set_flashdata('NewEnrolment_error',$data);
                    redirect('BiseCorrection/migration9th/');
                }  
            }

            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration9th/');
            }
        }
        else if($isclass == 11)
        {
            if($migrateto != '')
            {
                $oldinst_cd = substr($formno, 0, 6);
                $newinst_cd    = $migrateto;
                $formnopic = $formno.'.jpg'; 
            }
            else
            {
                $formno =  $_POST['txtformNo_search'];
                $oldinst_cd = substr($_POST['txtformNo_search'], 0, 6);
                $newinst_cd    = $_POST['txtinst_search'];
                $formnopic = @$_POST['txtformNo_search'].'.jpg';

            }

            $isupadte = $this->BiseCorrections_model->update11MigData($formno,$newinst_cd,$oldinst_cd,$userinfo['Inst_Id']);

            if($isupadte >0)
            {
                $base_path = IMAGE_PATH.$oldinst_cd.'/'.$formnopic;
                $copyimg = IMAGE_PATH.$newinst_cd.'/'.$formnopic;;

                if (!(copy($base_path, $copyimg))) 
                {
                    $data['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                    $this->session->set_flashdata('NewEnrolment_error',$data);
                    redirect('BiseCorrection/migration11th/');
                }
                else
                {
                    $data['excep'] = 'success';
                    $this->session->set_flashdata('NewEnrolment_error',$data);
                    redirect('BiseCorrection/migration11th/');
                }  
            }

            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration11th/');
            }
        }
        else if($isclass == 10)
        {
            if($migrateto != '')
            {
                //$oldinst_cd = substr($formno, 0, 6);
                $newinst_cd    = $migrateto;
                $formnopic = $formno.'.jpg'; 
            }
            else
            {
                $formno =  $_POST['txtformNo_search'];
                //$oldinst_cd = substr($_POST['txtformNo_search'], 0, 6);
                $newinst_cd    = $_POST['txtinst_search'];
                $formnopic = @$_POST['txtformNo_search'].'.jpg';

            }

            $isupadte = $this->BiseCorrections_model->update10MigData($formno,$userinfo['Inst_Id'],1,$newinst_cd);

            if($isupadte >0)
            {

                $data['excep'] = 'success';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration10th/');

            }

            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration10th/');
            } 
        }
        else if($isclass == 12)
        {
            if($migrateto != '')
            {
                //$oldinst_cd = substr($formno, 0, 6);
                $newinst_cd    = $migrateto;
                $formnopic = $formno.'.jpg'; 
            }
            else
            {
                $formno =  $_POST['txtformNo_search'];
                //$oldinst_cd = substr($_POST['txtformNo_search'], 0, 6);
                $newinst_cd    = $_POST['txtinst_search'];
                $formnopic = @$_POST['txtformNo_search'].'.jpg';

            }

            $isupadte = $this->BiseCorrections_model->update12MigData($formno,$userinfo['Inst_Id'],1,$newinst_cd);

            if($isupadte >0)
            {

                $data['excep'] = 'success';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration12th/');

            }

            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/migration12th/');
            } 
        }

    }
    public function restoreMigration()
    {

        $this->load->helper('url');
        $data = array(
            'isselected' => '4',
        );
        $isclass = $this->uri->segment(3);
        $formno = $this->uri->segment(4);
        $migrateto = $this->uri->segment(5);
        $app_no = $this->uri->segment(6);
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];

        if($isclass == 9)
        {
            if($migrateto != '')
            {
                $oldinst_cd = 0;
                $newinst_cd    = $migrateto;
            }               
           
            if($app_no >0)
            {
                $isupadte = $this->BiseCorrections_model->updateMigDataOnline($formno,$newinst_cd,$oldinst_cd,$userinfo['Inst_Id'],$app_no,NULL);
            }
            else
            {
                $isupadte = $this->BiseCorrections_model->updateMigData($formno,$newinst_cd,$oldinst_cd,$userinfo['Inst_Id']);
            }

            if($isupadte >0)
            {

                $data['excep'] = 'success';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/listmigration9th/');
            }
            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/listmigration9th/');
            }
        }
        else if($isclass == 10)
        {

            
            if($app_no >0)
            {
                $isupadte = 4;
                $formno = $app_no;
            }   
            else
            {
                $isupadte = 2;
            }
            
            $isupadte = $this->BiseCorrections_model->update10MigData($formno,$userinfo['Inst_Id'],$isupadte,$migrateto);

            if($isupadte >0)
            {

                $data['excep'] = 'success';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/listmigration10th/');
            }
            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/listmigration10th/');
            }
        }

    }
    public function restoreMigration11()
    {
         
        $this->load->helper('url');
        $data = array(
            'isselected' => '40',
        );
        $isclass = $this->uri->segment(3);
        $formno = $this->uri->segment(4);
        $migrateto = $this->uri->segment(5);
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
           $app_no = $this->uri->segment(6);
        if($isclass == 11)
        {
            if($migrateto != '')
            {
                $oldinst_cd = 0;
                $newinst_cd    = $migrateto;
            }
            
            $isupadte = $this->BiseCorrections_model->update11MigData($formno,$newinst_cd,$oldinst_cd,$userinfo['Inst_Id'],$app_no,NULL);

            if($isupadte >0)
            {

                $data['excep'] = 'success';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/listmigration11th/');
            }
            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/listmigration11th/');
            }
        }
        else if($isclass == 12)
        {   
            if($app_no >0)
            {
                $isupadte = 4;
                $formno =    $app_no;
            }
            else
            {
                $isupadte = 2;
            }
            $isupadte = $this->BiseCorrections_model->update12MigData($formno,$userinfo['Inst_Id'],$isupadte,$migrateto);

            if($isupadte >0)
            {

                $data['excep'] = 'success';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/listmigration12th/');
            }
            else
            {
                $data['excep'] = 'Update Query not execute.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/listmigration12th/');
            }
        }

    }

    
  public function resultFinance9thcorrections()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '88',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thDeactive('Finance Income'));
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Res9thInsts.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }    
    public function result9thcorrections()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thDeactive('Registration'));
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Res9thInsts.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }
    
       public function result11thcorrections()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get11thDeactive());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Res11thInsts.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }
    public function slips9thcorrections()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '0',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thObjectionStdData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/slips9thcorrections.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }
    public function reg9thbatch()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '0',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        // $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thObjectionStdData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/reg9thbatch.php');
        $this->load->view('common/footer.php');
    }
    public function SpecPermison_9th()
    {
        //DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '11',
        );

        $spec_case_msg="";
        $this->load->library('session');
        //  DebugBreak();
        if(( $this->session->flashdata('msg'))){

            $msg = $this->session->flashdata('msg');
            $spec_case_msg =array('msg'=>$msg);  
        }
        else{
            $msg = '';
            $spec_case_msg =array('msg'=>$msg);  
        }
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('Inst_data'=>$this->BiseCorrections_model->GetAllInstList());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/SpecPermission.php',$NinthStdData);
        $this->load->view('common/footer.php',$spec_case_msg); 
    }
    public function SpecPermison_9th_INSERT()
    {
        $this->load->model('BiseCorrections_model');

        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 11;
        $kpo = $userinfo['Inst_Id'];
        $this->commonheader($userinfo);
        $error = array();

        //   DebugBreak();
        if (!isset($kpo))
        {
            //$error['excep'][1] = 'Please Login!';
            $this->load->view('login/login.php');
        }
        $lastdate  = date('Y-m-d',strtotime(@$_POST['txt_FeedingDate'])) ;
        $data = array(

            'Inst_cd'=>@$_POST['inst_cd'],
            'FeedingDate'=>$lastdate,
            'RegFee'=>@$_POST['Reg_fee'],
            'ProcessingFee'=>@$_POST['Proc_Fee'],
            'SpecialFee'=>@$_POST['Spec_Fee'],
            'Isactive'=>@$_POST['IsActivated'],
            'Kpo'=>$kpo

        );
        $IsInserted = $this->BiseCorrections_model->Insert_SpecPermison($data);
        if($IsInserted == true)
        {
            $this->session->set_flashdata('msg','Saved');
            redirect('BiseCorrection/SpecPermison_9th');
        }
        else
        {
            $this->session->set_flashdata('msg','Not Saved');
            redirect('BiseCorrection/SpecPermison_9th');
        }
    }
    public function Delete_Form()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        // DebugBreak();
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        if($this->session->flashdata('NewEnrolment_error')){
            //DebugBreak();

            //$RegStdData['data'][0] = $this->session->flashdata('NewEnrolment_error'); 
            $error['excep'] = 'Your Form No. is Invalid.';
            //  $isReAdm = $RegStdData['data'][0]['isreadm'];
            //  $RegStdData['isReAdm']=$isReAdm;
            //  $RegStdData['Oldrno']=0;


        }
        else{
            $error['excep'] = '';
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/Srch_Candidate_formno.php',$error);
        $this->load->view('common/footer.php');
    }
      public function Delete_Form11()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        // DebugBreak();
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        if($this->session->flashdata('NewEnrolment_error')){
            //DebugBreak();

            //$RegStdData['data'][0] = $this->session->flashdata('NewEnrolment_error'); 
            $error['excep'] = 'Your Form No. is Invalid.';
            //  $isReAdm = $RegStdData['data'][0]['isreadm'];
            //  $RegStdData['isReAdm']=$isReAdm;
            //  $RegStdData['Oldrno']=0;


        }
        else{
            $error['excep'] = '';
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/Srch_Candidate_formno.php',$error);
        $this->load->view('common/footer.php');
    }
    public function NewEnrolment_EditForm11th_manual_corr()
    {    
        //DebugBreak();
         $this->load->helper('url');
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $Inst_Id = $userinfo['Inst_Id'];
        $this->load->view('common/header.php',$userinfo);
        $formno = $_POST['txtformNo_search'];
       // echo  $_POST['txtformNo_search'] ;exit();
        if($formno == ""){
             $formno = $this->uri->segment(3);
        } 
        $isReAdm = 0;
        $year = 0;
        $data = array(
            'isselected' => '15',
        );
        $this->load->model('BiseCorrections_model');
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
            //DebugBreak();
            $datainfo = $this->BiseCorrections_model->EditEnrolement_data11($formno);
            $inst_name =  $this->BiseCorrections_model->GetInstbyId_11th_otherboard($datainfo[0]['coll_cd']);
            
            if($inst_name[0]->IsGovernment == 1)
            {
                $inst_name[0]->allowed_iGrp = '1,2,3,4,5'  ;
            }
            
            $RegStdData = array('data'=>$datainfo,'isReAdm'=>$isReAdm,'Oldrno'=>0,'inst_name' => $inst_name[0]->Name,'inst_cd' => $datainfo[0]['coll_cd'],'grp_cd'=>$inst_name[0]->allowed_iGrp);
        }
        if($RegStdData['data'] == FALSE)
        {
            $this->session->set_flashdata('NewEnrolment_error','error');
            //  echo '<pre>'; print_r($allinputdata['excep']);exit();
            redirect('BiseCorrection/search_Form/');
            return;
        }
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/11thCorrManualForm.php',$RegStdData);  
        $this->load->view('common/footer11threg.php'); 
        //$this->commonfooter(array("files"=>array("jquery.maskedinput.js","validate.NewEnrolment.js"))); 

    }
      public function NewEnrolment_update11th()
    {
       

        $this->load->model('BiseCorrections_model');

        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 13;
        $Inst_Id = $userinfo['Inst_Id'];
        $this->commonheader($userinfo);
        if (!isset($Inst_Id))
        {
            //$error['excep'][1] = 'Please Login!';
            $this->load->view('login/login.php');
        }
        $Inst_Id = @$_POST['inst_cd'];
        $error = array();
        // DebugBreak();
        $formno =  @$_POST['formNo'];  //$this->Registration_model->GetFormNo($Inst_Id);//, $fname);//$_POST['username'],$_POST['password']);
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
        if(@$_POST['sub7'] == -1 || @$_POST['sub7'] == 0 )
        {
            $sub7 = 0;    
        }
        else
        {
            $sub7 = @$_POST['sub7'];
            $sub7ap1 = 1;   
        }
       /* if(@$_POST['sub7'] != -1)
        {
            $sub7ap1 = 1;    
        }*/
        if(@$_POST['sub8'] != 0)
        {
            $sub8ap1 = 1;    
        }
       
        // DebugBreak();
        if(@$_POST['IsReAdm'] == '1')
        {


            $User_info_data = array('Inst_Id'=>$Inst_Id,'RollNo'=>@$_POST['OldRno'],'spl_case'=>17);
            $user_info  =  $this->Registration_11th_model->readmission_check($User_info_data); //$db->first("SELECT * FROM  Admission_online..tblinstitutes_all WHERE Inst_Cd = " .$user->inst_cd);

            if($user_info == false)
            {
                $this->session->set_flashdata('error', 'This Roll No. Result is not cancelled. Please Cancel result from 9th Branch Before proceeding!');
                redirect('Registration/ReAdmission');
                return;
            }
            // DebugBreak();
             $addre =  str_replace("'", "", @$_POST['address']);
            $allinputdata = array('CellNo'=>@$_POST['mob_number'],
                'med'=>@$_POST['medium'],'classRno'=>@$_POST['Inst_Rno'],
                'speciality'=>@$_POST['speciality'],'markOfIden'=>@$_POST['MarkOfIden'],
                'med'=>@$_POST['medium'],'nat'=>@$_POST['nationality'],
                'sex'=>@$_POST['gender'],'Ishafiz'=>@$_POST['hafiz'],
                'rel'=>@$_POST['religion'],'RegGrp'=>@$_POST['std_group'],
                'addr'=>$addre,
                'RuralORUrban'=>@$_POST['UrbanRural'],'sub1'=>@$_POST['sub1'],
                'sub2'=>@$_POST['sub2'],'sub3'=>@$_POST['sub3'],
                'sub4'=>@$_POST['sub4'],'sub5'=>@$_POST['sub5'],
                'sub6'=>@$_POST['sub6'],'sub7'=>@$_POST['sub7'],
                'sub8'=>@$_POST['sub8'],'PicPath'=>$config['file_name'],'formNo'=>$formno,
                'sub1ap1' => ($sub1ap1),
                'sub2ap1' => ($sub2ap1),
                'sub3ap1' => ($sub3ap1),
                'sub4ap1' => ($sub4ap1),
                'sub5ap1' => ($sub5ap1),
                'sub6ap1' => ($sub6ap1),
                'sub7ap1' => ($sub7ap1),
                'sub8ap1' => ($sub8ap1),

            );
            $allinputdata['name']= $user_info[0]['name'];
            $allinputdata['Fname']= $user_info[0]['Fname'];
            $allinputdata['BForm']= $user_info[0]['BForm'];
            $allinputdata['FNIC']= $user_info[0]['FNIC'];
            $allinputdata['Dob']= $user_info[0]['Dob'];
            $allinputdata['regoldrno']= $user_info[0]['rno'];
            $allinputdata['regoldsess']= $user_info[0]['sess'];
            $allinputdata['regoldclass']= $user_info[0]['class'];
            $allinputdata['regoldyear']= $user_info[0]['Iyear'];
            $allinputdata['isreadm']= 1;
            $formno = $this->Registration_11th_model->GetFormNo($Inst_Id);
            $allinputdata['formNo']= $formno;
            //DebugBreak();

        }
        else{
              $addre =  str_replace("'", "", @$_POST['address']);
            $allinputdata = array('name'=>@$_POST['cand_name'],'Fname'=>@$_POST['father_name'],
                'BForm'=>@$_POST['bay_form'],'FNIC'=>@$_POST['father_cnic'],
                'Dob'=>@$_POST['dob'],'CellNo'=>@$_POST['mob_number'],
                'med'=>@$_POST['medium'],'classRno'=>@$_POST['Inst_Rno'],
                'speciality'=>@$_POST['speciality'],'markOfIden'=>@$_POST['MarkOfIden'],
                'med'=>@$_POST['medium'],'nat'=>@$_POST['nationality'],
                'sex'=>@$_POST['gender'],'Ishafiz'=>@$_POST['hafiz'],
                'rel'=>@$_POST['religion'],'RegGrp'=>@$_POST['std_group'],
                'addr'=>$addre,
                'RuralORUrban'=>@$_POST['UrbanRural'],'sub1'=>@$_POST['sub1'],
                'sub2'=>@$_POST['sub2'],'sub3'=>@$_POST['sub3'],
                'sub4'=>@$_POST['sub4'],'sub5'=>@$_POST['sub5'],
                'sub6'=>@$_POST['sub6'],'sub7'=>@$_POST['sub7'],
                'sub8'=>@$_POST['sub8'],'PicPath'=>$config['file_name'],'formNo'=>@$_POST['formNo'],
                'sub1ap1' => ($sub1ap1),
                'sub2ap1' => ($sub2ap1),
                'sub3ap1' => ($sub3ap1),
                'sub4ap1' => ($sub4ap1),
                'sub5ap1' => ($sub5ap1),
                'sub6ap1' => ($sub6ap1),
                'sub7ap1' => ($sub7ap1),
                'sub8ap1' => ($sub8ap1),
            );
            $allinputdata['regoldrno']= 0;
            $allinputdata['regoldsess']= 0;
            $allinputdata['regoldclass']=0;
            $allinputdata['regoldyear']= 0;
            $allinputdata['isreadm']= 0;
        }


        /*  $this->upload->initialize($config);

        if($check !== false) {

        $file_size = round($_FILES['image']['size']/1024, 2);
        if($file_size<=20)
        {

        if ( !$this->upload->do_upload('image',True))
        {
        if($this->upload->error_msg[0] != "")
        {
        $error['excep']= $this->upload->error_msg[0];
        $allinputdata['excep'] = $this->upload->error_msg[0];
        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
        redirect('Registration/NewEnrolment_EditForm/'.$formno);
        return;

        }

        }
        }
        else
        {
        $allinputdata['excep'] = 'The file you are attempting to upload is larger than the permitted size.';
        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
        //  echo '<pre>'; print_r($allinputdata['excep']);exit();
        redirect('Registration/NewEnrolment_EditForm/'.$formno);

        }


        }
        else
        {
        $check = getimagesize($filepath);
        if($check === false)
        {
        $allinputdata['excep'] = 'Please Upload Your Picture';
        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
        redirect('Registration/NewEnrolment_EditForm/'.$formno);
        return;
        }
        }*/


        //DebugBreak();
        // $this->frmvalidation('NewEnrolment_EditForm/'.$formno,$allinputdata,1);

        /*  $a = getimagesize($filepath);
        if($a[2]!=2)
        {
        $this->convertImage($filepath,$filepath,100,$a['mime']);
        }*/

        // $name = 'Waseem Saleem'; Edit_Enrolement_form
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
        // DebugBreak();   
         $addre =  str_replace("'", "", $this->input->post('address'));
           $addre = preg_replace('/[[:^print:]]/', '', $addre);
       $data = array(
            'name' =>$this->input->post('cand_name'),
            'Fname' =>$this->input->post('father_name'),
            'BForm' =>$this->input->post('bay_form'),
            'FNIC' =>$this->input->post('father_cnic'),
            'Dob' =>$this->input->post('dob'),
            'MobNo' =>$this->input->post('mob_number'),
            'medium' =>$this->input->post('medium'),
            'classRno' =>$this->input->post('Inst_Rno'),
            'markOfIden' =>$this->input->post('MarkOfIden'),
            'Speciality' =>$this->input->post('speciality'),
            'nat' =>$this->input->post('nationality'),
            'sex' =>$this->input->post('gender'),
            'Ishafiz' =>$this->input->post('hafiz'),
            'rel' =>$this->input->post('religion'),
            'addr' =>$addre,
            'RegGrp' =>$this->input->post('std_group'),
            'sub1' =>$this->input->post('sub1'),
            'sub2' =>$this->input->post('sub2'),
            'sub3' =>$this->input->post('sub3'),
            'sub4' =>$this->input->post('sub4'),
            'sub5' =>$this->input->post('sub5'),
            'sub6' =>$this->input->post('sub6'),
            'sub7' =>($sub7),
            'sub8' =>$this->input->post('sub8'),
            'sub1ap1' => ($sub1ap1),
            'sub2ap1' => ($sub2ap1),
            'sub3ap1' => ($sub3ap1),
            'sub4ap1' => ($sub4ap1),
            'sub5ap1' => ($sub5ap1),
            'sub6ap1' => ($sub6ap1),
            'sub7ap1' => ($sub7ap1),
            'sub8ap1' => ($sub8ap1),
            'ruralOrurban' =>$this->input->post('UrbanRural'),
            'Inst_cd' =>($Inst_Id),
            'FormNo' =>($formno),
            'IsBrdCrt' =>(1),
            
            'SSC_RNo'=>$this->input->post('OldRno'),
            'SSC_Year'=>$this->input->post('OldYear'),
            'SSC_Sess'=>$this->input->post('OldSess'),
            'SSC_brd_cd'=>$this->input->post('OldBrd'),
            'IsReAdm'=>$this->input->post('IsReAdm')   ,
            'Brd_cd'=>$this->input->post('Brd_cd'),
           // 'Image'=>$encoded_image  ,
            'PicPath'=>$formno.".jpg"
            // 'spl_cd'=>$this->input->post('IsReAdm'),





        );
        
       //DebugBreak();
        
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        

        if($check !== false)
         {

            $target_path = IMAGE_PATH11.$Inst_Id.'/';
        // $target_path = '../uploads2/'.$Inst_Id.'/';
        if (!file_exists($target_path)){

            mkdir($target_path);
        }
        $target_path = IMAGE_PATH11.$Inst_Id.'/';
        $config['upload_path']   = $target_path;
        $config['allowed_types'] = 'jpg';
        $config['max_size']      = '20';
      /*  $config['max_width']     = '260';
        $config['max_height']    = '290';*/
        $config['overwrite']     = TRUE;
        $config['file_name']     = $formno.'.jpg';

        $filepath = $target_path. $config['file_name']  ;
         $this->load->library('upload', $config);
         
            $file_size = round($_FILES['image']['size']/1024, 2);
            $this->upload->initialize($config);
            if($file_size<=20)
            {
                if ( !$this->upload->do_upload('image',true))
                {
                    if($this->upload->error_msg[0] != "")
                    {
                        $error['excep']= $this->upload->error_msg[0];
                        $data['excep'] = $this->upload->error_msg[0];
                        $this->session->set_flashdata('NewEnrolment_error',$data);
                        //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                        redirect('Registration_11th/NewEnrolment_EditForm/');
                        return;

                    }


                }
            }
            else
            {
                $data['excep'] = 'The file you are attempting to upload is larger than the permitted size.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                redirect('Registration_11th/NewEnrolment_EditForm/');

            }
             $check = getimagesize($_FILES["image"]["tmp_name"]);
        $a = getimagesize($filepath);
        if($a[2]!=2)
        {
            $this->convertImage($filepath,$filepath,100,$a['mime']);
        }
        $type = pathinfo($filepath, PATHINFO_EXTENSION);
        $pic_data = file_get_contents($filepath);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($pic_data);
        $data['Image']=$base64;

        }
        else
        {
        $data['Image']='';    
        }
    
        $data['isReAdm']=$isReAdm;
        $data['Oldrno']=0;
        //$data['Image'] = '';
       // $this->frmvalidation11th('NewEnrolment_EditForm',$data,1);        
        $logedIn = $this->BiseCorrections_model->Update_NewEnorlement($data);//, $fname);//$_POST['username'],$_POST['password']);
        if($logedIn != false)
        {  

            $this->session->set_flashdata('error', 'success');
            redirect('BiseCorrection/searchbyinst11thcr');
            return;
            echo 'Data Saved Successfully !';

        }
        else
        {     
            echo 'Data NOT Saved Successfully !';

        } 
        $this->load->view('common/footer.php');
    }
      public function NewEnrolment_EditForm11()
    {    
        //DebugBreak();
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $Inst_Id = $userinfo['Inst_Id'];
        $this->load->view('common/header.php',$userinfo);
        $formno = $_POST['txtformNo_search'];
        if($formno == ""){
            return;
        }
        $isReAdm = 0;
        $year = 0;
        $data = array(
            'isselected' => '13',
        );
        $this->load->model('BiseCorrections_model');
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
                $isReAdm = 1;
                $year = 2016;    
            }
           
            $datainfo = $this->BiseCorrections_model->EditEnrolement_data11($formno);
            $inst_name =  $this->BiseCorrections_model->GetInstNamebyId($datainfo[0]['coll_cd']);
            $RegStdData = array('data'=>$datainfo,'isReAdm'=>$isReAdm,'Oldrno'=>0,'inst_name' => $inst_name[0]->Name,'inst_cd' => $datainfo[0]['coll_cd'],'grp_cd'=>$inst_name[0]);
        }
        // DebugBreak();
        if($RegStdData['data'] == FALSE)
        {
            $this->session->set_flashdata('NewEnrolment_error','error');
            //  echo '<pre>'; print_r($allinputdata['excep']);exit();
            redirect('BiseCorrection/Delete_Form/');
            return;
        }
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/Edit_Enrolement_form.php',$RegStdData);   
        $this->commonfooter(array("files"=>array("jquery.maskedinput.js","validate.NewEnrolment.js"))); 

    }
    
    
    public function NewEnrolment_EditForm()
    {    
        DebugBreak();
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $Inst_Id = $userinfo['Inst_Id'];
        $this->load->view('common/header.php',$userinfo);
        $formno = $_POST['txtformNo_search'];
        if($formno == ""){
            return;
        }
        $isReAdm = 0;
        $year = 0;
        $data = array(
            'isselected' => '8',
        );
        $this->load->model('BiseCorrections_model');
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
                $isReAdm = 1;
                $year = 2016;    
            }
            $datainfo = $this->BiseCorrections_model->EditEnrolement_data($formno);
            $inst_name =  $this->BiseCorrections_model->GetInstNamebyId($datainfo[0]['Sch_cd']);
            $RegStdData = array('data'=>$datainfo,'isReAdm'=>$isReAdm,'Oldrno'=>0,'inst_name' => $inst_name[0]->Name,'inst_cd' => $datainfo[0]['Sch_cd']);
        }
        if($RegStdData['data'] == FALSE)
        {
            $this->session->set_flashdata('NewEnrolment_error','error');
            //  echo '<pre>'; print_r($allinputdata['excep']);exit();
            redirect('BiseCorrection/Delete_Form/');
            return;
        }
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/Edit_Enrolement_form.php',$RegStdData);   
        $this->commonfooter(array("files"=>array("jquery.maskedinput.js","validate.NewEnrolment.js"))); 

    }
    public function Delete_candidate_UPDATE()
    {

       // DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $formno = $_POST['formNo'];
        $kpo = $userinfo['Inst_Id'];
        if($formno == '')
        {
            return true;
        }
        else if(!isset($kpo))
        {
            return true;
        }
        $corr = array('info'=>$this->BiseCorrections_model->UpdateDeleteStatus($formno,$kpo,1));
        $this->session->set_flashdata('Restore_msg','Deleted Successfully');
        redirect('BiseCorrection/Restore_form');
        return;


    }
    public function Delete_candidate_UPDATE11()
    {
        //DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $formno = $_POST['formNo'];
        $kpo = $userinfo['Inst_Id'];
        if($formno == '')
        {
            return true;
        }
        else if(!isset($kpo))
        {
            return true;
        }
        $corr = array('info'=>$this->BiseCorrections_model->UpdateDeleteStatus11($formno,$kpo,1));
        $this->session->set_flashdata('Restore_msg','Deleted Successfully');
        redirect('BiseCorrection/Restore_form11');
        return;


    }
    public function Restore_form()
    {
        //DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];  
        if(( $this->session->flashdata('Restore_msg'))){

            $restore_msg = $this->session->flashdata('Restore_msg');  
        }
        else{
            $restore_msg = '';
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $RegStdData = array('data'=>$this->BiseCorrections_model->Restore_candidate_list($userinfo['Inst_Id']),'restore_msg'=>$restore_msg);
        $this->load->view('BiseCorrection/9thCorrection/Restore_form.php',$RegStdData);
        $this->load->view('common/footer.php');
    }
    public function Restore_form11()
    {
        //DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];  
        if(( $this->session->flashdata('Restore_msg'))){

            $restore_msg = $this->session->flashdata('Restore_msg');  
        }
        else{
            $restore_msg = '';
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $RegStdData = array('data'=>$this->BiseCorrections_model->Restore_candidate_list11($userinfo['Inst_Id']),'restore_msg'=>$restore_msg);
        $this->load->view('BiseCorrection/11thCorrection/Restore_form.php',$RegStdData);
        $this->load->view('common/footer.php');
    }
    public function Restore_form_UPDATE()
    {
        //DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        $formno = $this->uri->segment(3);
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];  
        $kpo = $userinfo['Inst_Id'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $corr = array('info'=>$this->BiseCorrections_model->UpdateDeleteStatus($formno,$kpo,0));
        $this->session->set_flashdata('Restore_msg','Restored Successfully');
        redirect('BiseCorrection/Restore_form');
        return;
    }                 
    public function Restore_form_UPDATE11()
    {
        //DebugBreak();
        //DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $formno = $this->uri->segment(3);
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];  
        $kpo = $userinfo['Inst_Id'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $corr = array('info'=>$this->BiseCorrections_model->UpdateDeleteStatus11($formno,$kpo,0));
        $this->session->set_flashdata('Restore_msg','Restored Successfully');
        redirect('BiseCorrection/Restore_form11');
        return;
    }
    public function search_Form()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '15',
        );
        // DebugBreak();
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        if($this->session->flashdata('NewEnrolment_error')){
            //DebugBreak();

            //$RegStdData['data'][0] = $this->session->flashdata('NewEnrolment_error'); 
            $error['excep'] = 'Your Form No. is Invalid.';

            //  $isReAdm = $RegStdData['data'][0]['isreadm'];
            //  $RegStdData['isReAdm']=$isReAdm;
            //  $RegStdData['Oldrno']=0;


        }
        else{
            $error['excep'] = '';
        }
        if($this->session->flashdata('error_manualentry9th')){
            //DebugBreak();

            //$RegStdData['data'][0] = $this->session->flashdata('NewEnrolment_error'); 

            $error['error_manualentry9th']='Updated Successfully';
            //  $isReAdm = $RegStdData['data'][0]['isreadm'];
            //  $RegStdData['isReAdm']=$isReAdm;
            //  $RegStdData['Oldrno']=0;


        }
        else{
            $error['error_manualentry9th']= '';
        }
        //error_manualentry9th
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/Srch_Candidate_formno_mn.php',$error);
        $this->load->view('common/footer.php');
    }
    public function NewEnrolment_EditForm9th_manual_corr()
    {    
        // DebugBreak();
        $this->load->helper('url');
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $Inst_Id = $userinfo['Inst_Id'];
        $this->load->view('common/header.php',$userinfo);
        $formno = $_POST['txtformNo_search'];
        // echo  $_POST['txtformNo_search'] ;exit();
        if($formno == ""){
            $formno = $this->uri->segment(3);
        } 
        $isReAdm = 0;
        $year = 0;
        $data = array(
            'isselected' => '15',
        );
        $this->load->model('BiseCorrections_model');
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
            //  DebugBreak();
            $datainfo = $this->BiseCorrections_model->EditEnrolement_data($formno);
            $inst_name =  $this->BiseCorrections_model->GetInstbyId($datainfo[0]['Sch_cd']);

            if($inst_name[0]->IsGovernment == 1)
            {
                $inst_name[0]->allowed_mGrp = '1,2,5,7,8'  ;
            }

            $RegStdData = array('data'=>$datainfo,'isReAdm'=>$isReAdm,'Oldrno'=>0,'inst_name' => $inst_name[0]->Name,'inst_cd' => $datainfo[0]['Sch_cd'],'grp_cd'=>$inst_name[0]);
        }
        if($RegStdData['data'] == FALSE)
        {
            $this->session->set_flashdata('NewEnrolment_error','error');
            //  echo '<pre>'; print_r($allinputdata['excep']);exit();
            redirect('BiseCorrection/search_Form/');
            return;
        }
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/9thCorrManualForm.php',$RegStdData);   
        $this->commonfooter(array("files"=>array("jquery.maskedinput.js","validate.NewEnrolment.js"))); 

    }
    public function NewEnrolment_update()
    {

        //          DebugBreak();
        $this->load->model('Registration_model');

        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 8;
        $Inst_Id = $userinfo['Inst_Id'];
        $this->commonheader($userinfo);
        if (!isset($Inst_Id))
        {
            //$error['excep'][1] = 'Please Login!';
            $this->load->view('login/login.php');
        }
        $error = array();
        $ckpo =$Inst_Id;
        $Inst_Id = @$_POST['Inst_Id'];
        // DebugBreak();
        $formno =  $_POST['formNo'];  //$this->Registration_model->GetFormNo($Inst_Id);//, $fname);//$_POST['username'],$_POST['password']);
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
        $target_path = IMAGE_PATH.$Inst_Id.'/';
        // $target_path = '../uploads2/'.$Inst_Id.'/';
        if (!file_exists($target_path)){

            mkdir($target_path);
        }

        // DebugBreak();
        if(@$_POST['IsReAdm'] == '1')
        {


            $User_info_data = array('Inst_Id'=>$Inst_Id,'RollNo'=>@$_POST['OldRno'],'spl_case'=>17);
            $user_info  =  $this->Registration_model->readmission_check($User_info_data); //$db->first("SELECT * FROM  Admission_online..tblinstitutes_all WHERE Inst_Cd = " .$user->inst_cd);

            if($user_info == false)
            {
                $this->session->set_flashdata('error', 'This Roll No. Result is not cancelled. Please Cancel result from 9th Branch Before proceeding!');
                redirect('BiseCorrection/NewEnrolment_EditForm');
                return;
            }
            // DebugBreak();
            $allinputdata = array('CellNo'=>@$_POST['mob_number'],
                'med'=>@$_POST['medium'],'classRno'=>@$_POST['Inst_Rno'],
                'speciality'=>@$_POST['speciality'],'markOfIden'=>@$_POST['MarkOfIden'],
                'med'=>@$_POST['medium'],'nat'=>@$_POST['nationality'],
                'sex'=>@$_POST['gender'],'Ishafiz'=>@$_POST['hafiz'],
                'rel'=>@$_POST['religion'],'RegGrp'=>@$_POST['std_group'],
                'addr'=>@$_POST['address'],
                'RuralORUrban'=>@$_POST['UrbanRural'],'sub1'=>@$_POST['sub1'],
                'sub2'=>@$_POST['sub2'],'sub3'=>@$_POST['sub3'],
                'sub4'=>@$_POST['sub4'],'sub5'=>@$_POST['sub5'],
                'sub6'=>@$_POST['sub6'],'sub7'=>@$_POST['sub7'],
                'sub8'=>@$_POST['sub8'],'PicPath'=>$config['file_name'],'formNo'=>$formno,
                'sub1ap1' => ($sub1ap1),
                'sub2ap1' => ($sub2ap1),
                'sub3ap1' => ($sub3ap1),
                'sub4ap1' => ($sub4ap1),
                'sub5ap1' => ($sub5ap1),
                'sub6ap1' => ($sub6ap1),
                'sub7ap1' => ($sub7ap1),
                'sub8ap1' => ($sub8ap1),

            );
            $allinputdata['name']= $user_info[0]['name'];
            $allinputdata['Fname']= $user_info[0]['Fname'];
            $allinputdata['BForm']= $user_info[0]['BForm'];
            $allinputdata['FNIC']= $user_info[0]['FNIC'];
            $allinputdata['Dob']= $user_info[0]['Dob'];
            $allinputdata['regoldrno']= $user_info[0]['rno'];
            $allinputdata['regoldsess']= $user_info[0]['sess'];
            $allinputdata['regoldclass']= $user_info[0]['class'];
            $allinputdata['regoldyear']= $user_info[0]['Iyear'];
            $allinputdata['isreadm']= 1;
            $formno = $this->Registration_model->GetFormNo($Inst_Id);
            $allinputdata['formNo']= $formno;
            //DebugBreak();

        }
        else{
            $allinputdata = array('name'=>@$_POST['cand_name'],'Fname'=>@$_POST['father_name'],
                'BForm'=>@$_POST['bay_form'],'FNIC'=>@$_POST['father_cnic'],
                'Dob'=>@$_POST['dob'],'CellNo'=>@$_POST['mob_number'],
                'med'=>@$_POST['medium'],'classRno'=>@$_POST['Inst_Rno'],
                'speciality'=>@$_POST['speciality'],'markOfIden'=>@$_POST['MarkOfIden'],
                'med'=>@$_POST['medium'],'nat'=>@$_POST['nationality'],
                'sex'=>@$_POST['gender'],'Ishafiz'=>@$_POST['hafiz'],
                'rel'=>@$_POST['religion'],'RegGrp'=>@$_POST['std_group'],
                'addr'=>@$_POST['address'],
                'RuralORUrban'=>@$_POST['UrbanRural'],'sub1'=>@$_POST['sub1'],
                'sub2'=>@$_POST['sub2'],'sub3'=>@$_POST['sub3'],
                'sub4'=>@$_POST['sub4'],'sub5'=>@$_POST['sub5'],
                'sub6'=>@$_POST['sub6'],'sub7'=>@$_POST['sub7'],
                'sub8'=>@$_POST['sub8'],'PicPath'=>$config['file_name'],'formNo'=>@$_POST['formNo'],
                'sub1ap1' => ($sub1ap1),
                'sub2ap1' => ($sub2ap1),
                'sub3ap1' => ($sub3ap1),
                'sub4ap1' => ($sub4ap1),
                'sub5ap1' => ($sub5ap1),
                'sub6ap1' => ($sub6ap1),
                'sub7ap1' => ($sub7ap1),
                'sub8ap1' => ($sub8ap1),
            );
            $allinputdata['regoldrno']= 0;
            $allinputdata['regoldsess']= 0;
            $allinputdata['regoldclass']=0;
            $allinputdata['regoldyear']= 0;
            $allinputdata['isreadm']= $_POST['IsReAdm'];
        }



        $config['upload_path']   = $target_path;
        $config['allowed_types'] = 'jpg';
        $config['max_size']      = '20';
        // $config['max_width']     = '260';
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

                if ( !$this->upload->do_upload('image',True))
                {
                    if($this->upload->error_msg[0] != "")
                    {
                        $error['excep']= $this->upload->error_msg[0];
                        $allinputdata['excep'] = $this->upload->error_msg[0];
                        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                        redirect('BiseCorrection/NewEnrolment_EditForm9th_manual_corr/'.$formno);
                        return;

                    }

                }
            }
            else
            {
                $allinputdata['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                redirect('BiseCorrection/NewEnrolment_EditForm9th_manual_corr/'.$formno);

            }


        }
        else
        {
            $check = getimagesize($filepath);
            if($check === false)
            {
                $allinputdata['excep'] = 'Please Upload Your Picture';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect('BiseCorrection/NewEnrolment_EditForm9th_manual_corr/'.$formno);
                return;
            }
        }



        //DebugBreak();
        $this->frmvalidation9th('BiseCorrection/NewEnrolment_EditForm9th_manual_corr/'.$formno,$allinputdata,1);

        /*  $a = getimagesize($filepath);
        if($a[2]!=2)
        {
        $this->convertImage($filepath,$filepath,100,$a['mime']);
        }*/

        // $name = 'Waseem Saleem'; Edit_Enrolement_form
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
        // DebugBreak();
        $data = array(
            'name' =>$this->input->post('cand_name'),
            'Fname' =>$this->input->post('father_name'),
            'BForm' =>$this->input->post('bay_form'),
            'FNIC' =>$this->input->post('father_cnic'),
            'Dob' =>$this->input->post('dob'),
            'CellNo' =>$this->input->post('mob_number'),
            'medium' =>$this->input->post('medium'),
            'Inst_Rno' =>$this->input->post('Inst_Rno'),
            'MarkOfIden' =>$this->input->post('MarkOfIden'),
            'Speciality' =>$this->input->post('speciality'),
            'nat' =>$this->input->post('nationality'),
            'sex' =>$this->input->post('gender'),
            'IsHafiz' =>$this->input->post('hafiz'),
            'rel' =>$this->input->post('religion'),
            'addr' =>$this->input->post('address'),
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
            'ckpo' =>($ckpo),
            'FormNo' =>($formno),
            'regoldrno' =>($allinputdata['regoldrno']),
            'regoldsess' =>($allinputdata['regoldsess']),
            'regoldclass' =>( $allinputdata['regoldclass']),
            'regoldyear' =>( $allinputdata['regoldyear']),
            'isreadm'=>($allinputdata['isreadm'])
        );
        $logedIn = $this->Registration_model->Update_NewEnorlement($data);//, $fname);//$_POST['username'],$_POST['password']);
        if($logedIn[0]['error'] != 'false')
        {  

            $this->session->set_flashdata('error_manualentry9th', 'success');
            redirect('BiseCorrection/search_Form');
            return;

            echo 'Data Saved Successfully !';

        }
        else
        {     
            $allinputdata['excep'] = 'An error has occoured. Please try again later. ';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect('BiseCorrection/NewEnrolment_EditForm/'.$formno);
            return;
            echo 'Data NOT Saved Successfully !';

        } 



        $this->load->view('common/footer.php');
    }
   public function searchbyinst11th()
    {
      $this->load->helper('url');
      $data = array(
          'isselected' => '13',
      );
      $this->load->library('session');
      $this->load->model('BiseCorrections_model');
      $Logged_In_Array = $this->session->all_userdata();
      $userinfo = $Logged_In_Array['logged_in'];
   
      if(!empty($_POST))
      {
            // DebugBreak();
       $data['data'] = $this->BiseCorrections_model->EditEnrolementByinst11th($_POST['txtformNo_search']);
      }
      
      
      //error_manualentry9th
      $this->load->view('common/header.php',$userinfo);
      $this->load->view('common/menu.php',$data);
      $this->load->view('BiseCorrection/11thCorrection/SrchByInstCD.php',$error);
      $this->load->view('common/footer.php');
    }
    
     public function searchbyinst11thcr()
    {
      $this->load->helper('url');
      $data = array(
          'isselected' => '15',
      );
      $this->load->library('session');
      $this->load->model('BiseCorrections_model');
      $Logged_In_Array = $this->session->all_userdata();
      $userinfo = $Logged_In_Array['logged_in'];
   
      if(!empty($_POST))
      {
            // DebugBreak();
       $data['data'] = $this->BiseCorrections_model->EditEnrolementByinst11th($_POST['txtformNo_search']);
      }
      
      
      //error_manualentry9th
      $this->load->view('common/header.php',$userinfo);
      $this->load->view('common/menu.php',$data);
      $this->load->view('BiseCorrection/11thCorrection/SrchByInstCDCR.php',$error);
      $this->load->view('common/footer.php');
    }
    public function reg9thcorrections()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/reg9thcorrections.php');
        $this->load->view('common/footer.php');
    }

    public function reg11thcorrections()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/reg9thcorrections.php');
        $this->load->view('common/footer.php');
    }
    public function reg9thcorrectionapp()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('info'=>$this->BiseCorrections_model->get9thCorrectionData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];

        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $user_info['errors_RB_update'] = '';  
        }
        else{
            $user_info['errors_RB_update'] = $this->session->flashdata('BatchList_update');
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/reg9thcorrapp.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }
    public function reg9thcorrectionapp_verified()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('info'=>$this->BiseCorrections_model->get9thCorrectionData_verified());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];

        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $user_info['errors_RB_update'] = '';  
        }
        else{
            $user_info['errors_RB_update'] = $this->session->flashdata('BatchList_update');
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/reg9thcorrapp_verified.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }


    public function reg11thcorrectionapp()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('info'=>$this->BiseCorrections_model->get11thCorrectionData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];

        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $user_info['errors_RB_update'] = '';  
        }
        else{
            $user_info['errors_RB_update'] = $this->session->flashdata('BatchList_update');
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/reg9thcorrapp.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }
    public function reg11thcorrectionapp_verified()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('info'=>$this->BiseCorrections_model->get11thCorrectionData_verified());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];

        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $user_info['errors_RB_update'] = '';  
        }
        else{
            $user_info['errors_RB_update'] = $this->session->flashdata('BatchList_update');
        }
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/11thCorrection/reg9thcorrapp_verified.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }

    public function BatchRelease()
    {
    
   // DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '0',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $error_msg = '';  
        }
        else{
            $error_msg = $this->session->flashdata('BatchList_update');
        }

        $user_info  =  $this->BiseCorrections_model->Batch_List();
        $user_info_arr = array('info'=>$user_info,'errors_RB_update'=>$error_msg);
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thObjectionStdData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/BatchRelease.php',$user_info_arr);
        $this->load->view('common/footer.php');
    }
    
    public function Registration()
    {
    
   // DebugBreak();
        $this->load->helper('url');
        $data = array(
            'isselected' => '0',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $error_msg = '';  
        }
        else{
            $error_msg = $this->session->flashdata('BatchList_update');
        }

        $user_info  =  $this->BiseCorrections_model->Batch_List();
        $user_info_arr = array('info'=>$user_info,'errors_RB_update'=>$error_msg);
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thObjectionStdData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Matric/Setting.php',$user_info_arr);
        $this->load->view('common/footer.php');
    }
    
     public function Reg_9th()
    {
    
        ///DebugBreak();
        $this->load->helper('url');
        $this->load->library('encryption');
        $plain_text = "Hello I am Text";
        $encText = "9bbfe63ff76f251f674b82949e01962b189624a6aecfdf1d7c26289db0f3c246cd69c220cb3db2acd55269e57cd3c440d64bf1cf78dd842c56d9edb45aef01b86upAY+8hWc1/p8LTt4tmcUKaiRbpt04dQ4kmwUZRD3w=";
        $this->encryption->create_key(encryption_key);
        
        $decText =  $this->encryption->decrypt($encText);
        
        //$encText = $this->encryption->encrypt($plain_text);
        $encText;
        
        
        $data = array(
            'isselected' => '0',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $error_msg = '';  
        }
        else{
            $error_msg = $this->session->flashdata('BatchList_update');
        }

        $user_info  =  $this->BiseCorrections_model->Batch_List();
        $user_info_arr = array('info'=>$user_info,'errors_RB_update'=>$error_msg);
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thObjectionStdData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Matric/Reg_9th.php',$user_info_arr);
        $this->load->view('common/footer.php');
    }
    //BatchRestore.php
    public function BatchRestore()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '0',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $error_msg = '';  
        }
        else{
            $error_msg = $this->session->flashdata('BatchList_update');
        }

        $user_info  =  $this->BiseCorrections_model->Batch_List_Deleted();
        $user_info_arr = array('info'=>$user_info,'errors_RB_restore'=>$error_msg);
        // $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thObjectionStdData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/BatchRestore.php',$user_info_arr);
        $this->load->view('common/footer.php');
    }
    
    public function BatchRestoreManual()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '0',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        //  $data1 = array('Inst_Id'=>$Inst_Id);
        if(!( $this->session->flashdata('BatchList_update'))){

            $error_msg = '';  
        }
        else{
            $error_msg = $this->session->flashdata('BatchList_update');
        }

        $user_info  =  $this->BiseCorrections_model->Batch_List_all();
        $user_info_arr = array('info'=>$user_info,'errors_RB_update'=>$error_msg);
        // $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thObjectionStdData());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/9thCorrection/BatchReleaseManual.php',$user_info_arr);
        $this->load->view('common/footer.php');
    }
    public function NewEnrolment_insert()
    {



        $this->load->model('Registration_model');
        // DebugBreak();
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 0;
        $Inst_Id = $userinfo['Inst_Id'];
        $this->commonheader($userinfo);
        $error = array();

        if (!isset($Inst_Id))
        {
            //$error['excep'][1] = 'Please Login!';
            $this->load->view('login/login.php');
        }
        // $this->Registration_model->Insert_NewEnorlement($data);    
        $formno = $this->Registration_model->GetFormNo($Inst_Id);//, $fname);//$_POST['username'],$_POST['password']);

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

        /* $target_path = './assets/uploads/'.$Inst_Id.'/';
        if (!file_exists($target_path)){
        mkdir($target_path, 0777, true);
        }*/

        $target_path = IMAGE_PATH;
        // $target_path = '../uploads2/'.$Inst_Id.'/';
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
        $config['min_width']     = '120';
        $config['min_height']    = '128';
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
                        redirect('BiseCorrection/NewEnrolment/');
                        return;

                    }


                }
            }
            else
            {
                $allinputdata['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                redirect('Registration/NewEnrolment/');

            }
        }
        else
        {
            // $check = getimagesize($filepath);
            if($check === false)
            {
                $allinputdata['excep'] = 'Please Upload Your Picture';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect('BiseCorrection/NewEnrolment/');
                return;
            }
        }

        $this->frmvalidation('BiseCorrection/NewEnrolment',$allinputdata,0);

        $a = getimagesize($filepath);
        if($a[2]!=2)
        {
            $this->convertImage($filepath,$filepath,100,$a['mime']);
        }
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
        $data = array(
            'name' =>$this->input->post('cand_name'),
            'Fname' =>$this->input->post('father_name'),
            'BForm' =>$this->input->post('bay_form'),
            'FNIC' =>$this->input->post('father_cnic'),
            'Dob' =>$this->input->post('dob'),
            'CellNo' =>$this->input->post('mob_number'),
            'medium' =>$this->input->post('medium'),
            'Inst_Rno' =>$this->input->post('Inst_Rno'),
            'MarkOfIden' =>$this->input->post('MarkOfIden'),
            'Speciality' =>$this->input->post('speciality'),
            'nat' =>$this->input->post('nationality'),
            'sex' =>$this->input->post('gender'),
            'IsHafiz' =>$this->input->post('hafiz'),
            'rel' =>$this->input->post('religion'),
            'addr' =>$this->input->post('address'),
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
            'FormNo' =>($formno)





        );
        $logedIn = $this->Registration_model->Insert_NewEnorlement($data);//, $fname);//$_POST['username'],$_POST['password']);
        //DebugBreak();
        if($logedIn[0]['error'] != 'false')
        {  
            $allinputdata = "";
            $allinputdata['excep'] = 'success';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect('BiseCorrection/NewEnrolment');
            return;


        }
        else
        {     
            $allinputdata['excep'] = 'An error has occoured. Please try again later. ';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect('BiseCorrection/NewEnrolment');
            return;
            echo 'Data NOT Saved Successfully !';

        } 




        $this->load->view('common/footer.php');
    }
    public function NewEnrolment()
    {    
        // DebugBreak();
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $data = array(
            'isselected' => '0',
        );
        //  DebugBreak();
        if($this->session->flashdata('NewEnrolment_error')){

            $error['excep'] = $this->session->flashdata('NewEnrolment_error');    
        }
        else{
            $error['excep'] = '';
        }


        $error['gender'] = '';//$userinfo['gender'];
        $error['isrural'] = '';//$userinfo['isrural'];
        $error['grp_cd'] = $userinfo['grp_cd'];
        $error['isgovt'] = '';//$userinfo['isgovt'];

        $this->commonheader($data);
        $this->load->view('BiseCorrection/9thCorrection/NewEnrolment.php',$error);
        // $this->load->view('common/footer.php');
        $this->commonfooter(array("files"=>array("jquery.maskedinput.js","validate.NewEnrolment.js")));
        // if(@$_POST['cand_name'] != '' )//&& @$_POST['father_name'] != '' && @$_POST['bay_form'] != '' && @$_POST['father_cnic'] != '' && @$_POST['dob'] != '' && @$_POST['mob_number'] != '') //{   



        //}



    }
    public function slip9thactive()
    {
        $rno = $this->uri->segment(3);
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $NinthStdData = array('data'=>$this->BiseCorrections_model->updateslipData($rno,$userinfo['Inst_Id']));
        redirect('/BiseCorrection/slips9thcorrections');
    }
     public function Res9thactive()
    {
        $rno = $this->uri->segment(3);
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $NinthStdData = array('data'=>$this->BiseCorrections_model->updateResData($rno,$userinfo['Inst_Id']));
        if($userinfo['Inst_Id'] == 2182 || $userinfo['Inst_Id'] == 9100  || $userinfo['Inst_Id'] == 2303 || $userinfo['Inst_Id'] == 2181)
        {
             redirect('/BiseCorrection/resultFinance9thcorrections');
           
        }
        else
        {
              redirect('/BiseCorrection/result9thcorrections');
        }
        
    }
     public function Res11thactive()
    {
        $rno = $this->uri->segment(3);
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $NinthStdData = array('data'=>$this->BiseCorrections_model->updateRes11Data($rno,$userinfo['Inst_Id']));
        redirect('/BiseCorrection/result11thcorrections');
    }
    public function correction_update($BatchId)
    {
       //  DebugBreak();
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $data = array(
            'isselected' => '0',
        );
        $ckpo = $userinfo['Inst_Id'];
        $fetchdata = array('AppNo'=>$BatchId,'ckpo'=>$ckpo);

        $appdata = $this->BiseCorrections_model->get9thCorrectionDataById($BatchId);

      

        if($appdata[0]['PicFee']>0)
        {
            $picPath =  $appdata[0]['PicPath'] ;
            $formNo =  $appdata[0]['formNo'] ;
            $copy_path = CORR_IMAGE_PATH.$appdata[0]['Sch_cd'].'/';
            $target_path = IMAGE_PATH.$appdata[0]['Sch_cd'].'/';

            $oldPath = $target_path.$picPath;
            $newPath = $target_path.$formNo.'_'.date('d-m-Y').'.jpg';

            rename($oldPath, $newPath)  ;

            copy($copy_path.$picPath, $target_path.$picPath);

            //$appdata = $this->BiseCorrections_model->updateCorrectionStatus($BatchId,$ckpo);

        }

        $status = array('data'=>$this->BiseCorrections_model->reg9thCorrection_UPDATE($fetchdata));

         $appdata = $this->BiseCorrections_model->updateCorrectionStatus($BatchId,$ckpo);
        if($status == true){

            $error_msg= "success";
            $this->session->set_flashdata('BatchList_update',$error_msg);
            redirect('BiseCorrection/reg9thcorrectionapp_verified');
            return;
        }
        else{
            $error_msg = "Fail";
            $this->session->set_flashdata('BatchList_update',$error_msg);
            redirect('BiseCorrection/reg9thcorrectionapp');
            return;
        }



    }

      public function correction_update11($BatchId)
    {

        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $data = array(
            'isselected' => '0',
        );
        $ckpo = $userinfo['Inst_Id'];
        $fetchdata = array('AppNo'=>$BatchId,'ckpo'=>$ckpo);

        $appdata = $this->BiseCorrections_model->get11thCorrectionDataById($BatchId);
       //   DebugBreak();

        if($appdata[0]['PicFee']>0)
        {
            $picPath =  $appdata[0]['PicPath'] ;
            $formNo =  $appdata[0]['formNo'] ;
            $copy_path = CORR_IMAGE_PATH11.$appdata[0]['Inst_cd'].'/';
            $target_path = IMAGE_PATH11.$appdata[0]['Inst_cd'].'/';

            $oldPath = $target_path.$picPath;
            $newPath = $target_path.$formNo.'_'.date('d-m-Y').'.jpg';

            rename($oldPath, $newPath)  ;

            copy($copy_path.$picPath, $target_path.$picPath);

           

        }
            $appdata = $this->BiseCorrections_model->updateCorrectionStatus11($BatchId,$ckpo);
        $status = array('data'=>$this->BiseCorrections_model->reg11thCorrection_UPDATE($fetchdata));


        if($status == true){

            $error_msg= "success";
            $this->session->set_flashdata('BatchList_update',$error_msg);
            redirect('BiseCorrection/reg11thcorrectionapp_verified');
            return;
        }
        else{
            $error_msg = "Fail";
            $this->session->set_flashdata('BatchList_update',$error_msg);
            redirect('BiseCorrection/reg11thcorrectionapp');
            return;
        }



    }
    
    public function BatchRelease_update($BatchId, $Inst_Cd)
    {

        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        //  DebugBreak();
        $data = array(
            'isselected' => '0',
        );
        $ckpo = $userinfo['Inst_Id'];
        $fetchdata = array('BatchId'=>$BatchId,'Inst_Cd'=>$Inst_Cd,'ckpo'=>$ckpo);
        $status = array('data'=>$this->BiseCorrections_model->Batch_List_UPDATE($fetchdata));

        // $Batch_ID = $this->uri->segment(3);
        //$this->load->view('common/header.php',$userinfo);
        //$this->commonheader($data);
        if($status == true){

            $error_msg= "success";
        }
        else{
            $error_msg = "Fail";
        }
        $this->session->set_flashdata('BatchList_update',$error_msg);
        redirect('BiseCorrection/BatchRelease');
        return;


    }

    public function BatchRestore_update($BatchId, $Inst_Cd)
    {

        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        //  DebugBreak();
        $data = array(
            'isselected' => '0',
        );
        $ckpo = $userinfo['Inst_Id'];
        $fetchdata = array('BatchId'=>$BatchId,'Inst_Cd'=>$Inst_Cd,'ckpo'=>$ckpo);
        $status = array('data'=>$this->BiseCorrections_model->Batch_List_RESTORE($fetchdata));

        // $Batch_ID = $this->uri->segment(3);
        //$this->load->view('common/header.php',$userinfo);
        //$this->commonheader($data);
        if($status == true){

            $error_msg= "success";
        }
        else{
            $error_msg = "Fail";
        }
        $this->session->set_flashdata('BatchList_update',$error_msg);
        redirect('BiseCorrection/BatchRestore');
        return;


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
     function frmvalidation($viewName,$allinputdata,$isupdate)
    {
        $_POST['address']  = str_replace("'", "", $_POST['address'] );
        $subjectslang = array('22','23','36','34','35');
        $subjectshis = array('20','21','19');
        if(@$_POST['dob'] != null || $allinputdata['Dob'] != null)
        {
            $date = new DateTime(@$_POST['dob']);
            $convert_dob = $date->format('Y-m-d');     
        }

        if(@$_POST['cand_name'] == ''  || ($allinputdata['name'] == '' && $isupdate ==1)  )
        {
            $allinputdata['excep'] = 'Please Enter Your Name';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect($viewName);
            return;

        }
        //(strpos($a, 'are') !== false)
        /* if ((strpos(@$_POST['cand_name'], 'MOHAMMAD') !== false)|| (strpos(@$_POST['cand_name'], 'MOHAMAD') !== false) || (strpos(@$_POST['cand_name'], 'MOHD') !== false) || (strpos(@$_POST['cand_name'], 'MUHAMAD') !== false) || (strpos(@$_POST['cand_name'], 'MOOHAMMAD') !== false)|| (strpos(@$_POST['cand_name'], 'MOOHAMAD') !== false))
        {
        $allinputdata['excep'] = 'MUHAMMAD Spelling is not Correct in Name';
        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
        redirect($viewName);
        return;

        }

        else*/ if (@$_POST['father_name'] == ''  || ($allinputdata['Fname'] == '' && $isupdate ==1) )
        {
            $allinputdata['excep'] = 'Please Enter Your Father Name';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect($viewName);
            return;

        }
        /*  if ((strpos(@$_POST['father_name'], 'MOHAMMAD') !== false)|| (strpos(@$_POST['father_name'], 'MOHAMAD') !== false) || (strpos(@$_POST['father_name'], 'MUHAMAD') !== false) || (strpos(@$_POST['father_name'], 'MOOHAMMAD') !== false)|| (strpos(@$_POST['father_name'], 'MOOHAMAD') !== false))
        {
        $allinputdata['excep'] = 'MUHAMMAD Spelling is not Correct in Fathers Name';
        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
        redirect($viewName);
        return;

        }*/

        else if(@$_POST['bay_form'] == ''  || ($allinputdata['BForm'] == '' && $isupdate ==1) )
        {
            $allinputdata['excep'] = 'Please Enter Your Bay Form No.';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect($viewName);
            return;


        }
        else if( (@$_POST['bay_form'] == '00000-0000000-0') || (@$_POST['bay_form'] == '11111-1111111-1') || (@$_POST['bay_form'] == '22222-2222222-2') || (@$_POST['bay_form'] == '33333-3333333-3') || (@$_POST['bay_form'] == '44444-4444444-4')
            || (@$_POST['bay_form'] == '55555-5555555-5') || (@$_POST['bay_form'] == '66666-6666666-6') || (@$_POST['bay_form'] == '77777-7777777-7') || (@$_POST['bay_form'] == '88888-8888888-8') || (@$_POST['bay_form'] == '99999-9999999-9') ||
            (@$_POST['bay_form'] == '00000-1111111-0') || (@$_POST['bay_form'] == '00000-1111111-1') 
            )
            {
                $allinputdata['excep'] = 'Please Enter Your Correct Bay Form No.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            /* else if($this->Registration_model->bay_form_comp(@$_POST['bay_form']) == true && $isupdate ==0 )
            {
            // DebugBreak();
            $allinputdata['excep'] = 'This Bay Form is already Feeded.';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect($viewName);
            return;



            }*/
            else if(@$_POST['oldbform'] !=  @$_POST['bay_form'] && $isupdate ==1 )
            {
                // DebugBreak();
                if($this->Registration_model->bay_form_comp(@$_POST['bay_form']) == true )
                {
                    // DebugBreak();
                    $allinputdata['excep'] = 'This Bay Form is already Feeded.';
                    $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                    redirect($viewName);
                    return;
                }
               /* else if($this->Registration_model->bay_form_fnic(@$_POST['bay_form'],@$_POST['father_cnic']) == true  )
                {
                    // DebugBreak();
                    $allinputdata['excep'] = 'This Form is already Feeded.';
                    $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                    redirect($viewName);
                    return;
                }    */
            }
           /* else if($this->Registration_model->bay_form_fnic(@$_POST['bay_form'],@$_POST['father_cnic']) == true && $isupdate ==0 )
            {
                // DebugBreak();
                $allinputdata['excep'] = 'This Form is already Feeded.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;



            }
            else if($this->Registration_model->bay_form_fnic_dob_comp(@$_POST['bay_form'],@$_POST['father_cnic'],$convert_dob) == true && $isupdate == 0 )
            {
                // DebugBreak();
                $allinputdata['excep'] = 'This Form is already Feeded.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;



            }            */

            else if(@$_POST['father_cnic'] == '' || ($allinputdata['FNIC'] == '' && $isupdate ==1)  )
            {
                $allinputdata['excep'] = 'Please Enter Your Father CNIC';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;


            }
            else if((@$_POST['bay_form'] == @$_POST['father_cnic']) || (@$_POST['father_cnic'] == @$_POST['bay_form']) )
            {
                $allinputdata['excep'] = 'Your Bay Form and FNIC No. are not same';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;


            }
            else if (@$_POST['dob'] == ''  || ($allinputdata['Dob'] == ''   && $isupdate ==1) )
            {
                $allinputdata['excep'] = 'Please Enter Your  Date of Birth';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['mob_number'] == '')
            {
                $allinputdata['excep'] = 'Please Enter Your Mobile Number';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['medium'] == 0)
            {
                $allinputdata['excep'] = 'Please Select Your Medium';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
           /* else if(@$_POST['Inst_Rno']== '')
            { 
                $allinputdata['excep'] = 'Please Enter Your Roll Number';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }  */
            else if(@$_POST['MarkOfIden']== '')
            {
                $allinputdata['excep'] = 'Please Enter Your Mark of Identification';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }

            /* else if((@$_POST['speciality'] != '0')or (@$_POST['speciality'] != '1') or (@$_POST['speciality'] != '2'))
            {
            $error['excep'] = 'Please Enter Your Speciality';
            $this->load->view('Registration/9th/NewEnrolment.php',$error);
            }*/
            else if((@$_POST['medium'] != '1') and (@$_POST['medium'] != '2') )
            {
                $allinputdata['excep'] = 'Please Select Your medium';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['nationality'] != '1') and (@$_POST['nationality'] != '2') )
            {
                $allinputdata['excep'] = 'Please Select Your Nationality';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['gender'] != '1') and (@$_POST['gender'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Gender';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['hafiz']!= '1') and (@$_POST['hafiz']!= '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Hafiz-e-Quran option';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['religion'] != '1') and (@$_POST['religion'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your religion';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['UrbanRural'] != '1') and (@$_POST['UrbanRural'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Residency';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['address'] =='')
            {
                $allinputdata['excep'] = 'Please Enter Your Address';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['std_group'] == 0)
            {
                $allinputdata['excep'] = 'Please Select Your Study Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
           /* else if((@$_POST['std_group'] == 1) && ((@$_POST['sub4']!=5) || (@$_POST['sub5']!=6)||(@$_POST['sub6']!=7)|| (@$_POST['sub7']!=8)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['std_group'] == 7)&& ((@$_POST['sub4']!=5) || (@$_POST['sub5']!=6)||(@$_POST['sub6']!=7)|| (@$_POST['sub7']!=78)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['std_group'] == 8)&& ((@$_POST['sub4']!=5) || (@$_POST['sub5']!=6)||(@$_POST['sub6']!=7)|| (@$_POST['sub7']!=43)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['std_group'] == 2))
            {
                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
                                        */
          /*  else if((@$_POST['std_group'] == 5)&& ((@$_POST['sub5']==5) || (@$_POST['sub6']==6)||(@$_POST['sub7']==7)|| (@$_POST['sub8']==43) || (@$_POST['sub8']==8)))
            {
                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }         */

/*            else if((@$_POST['sub1'] == @$_POST['sub2']) ||(@$_POST['sub1'] == @$_POST['sub3'])||(@$_POST['sub1'] == @$_POST['sub4'])||(@$_POST['sub1'] == @$_POST['sub5'])||(@$_POST['sub1'] == @$_POST['sub6'])||(@$_POST['sub1'] == @$_POST['sub7'])||
                (@$_POST['sub1'] == @$_POST['sub8']))
                {
                    $allinputdata['excep'] = 'Please Select Different Subjects';
                    $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                    redirect($viewName);
                    return;

                }
                else if((@$_POST['sub2'] == @$_POST['sub1']) ||(@$_POST['sub2'] == @$_POST['sub3'])||(@$_POST['sub2'] == @$_POST['sub4'])||(@$_POST['sub2'] == @$_POST['sub5'])||(@$_POST['sub2'] == @$_POST['sub6'])||(@$_POST['sub2'] == @$_POST['sub7'])                         ||(@$_POST['sub2'] == @$_POST['sub8'])
                    )
                    {
                        $allinputdata['excep'] = 'Please Select Different Subjects';
                        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                        redirect($viewName);
                        return;

                    }
                    else if((@$_POST['sub3'] == @$_POST['sub1']) ||(@$_POST['sub3'] == @$_POST['sub2'])||(@$_POST['sub3'] == @$_POST['sub4'])||(@$_POST['sub3'] == @$_POST['sub5'])||(@$_POST['sub3'] == @$_POST['sub6'])||(@$_POST['sub3'] == @$_POST['sub7'])||(@$_POST['sub3'] == @$_POST['sub8'])
                        )
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub4'] == @$_POST['sub1']) ||(@$_POST['sub4'] == @$_POST['sub3'])||(@$_POST['sub4'] == @$_POST['sub2'])||(@$_POST['sub4'] == @$_POST['sub5'])||(@$_POST['sub4'] == @$_POST['sub6'])||(@$_POST['sub4'] == @$_POST[                                 'sub7'])||(@$_POST['sub4'] == @$_POST['sub8']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub5'] == @$_POST['sub1']) ||(@$_POST['sub5'] == @$_POST['sub3'])||(@$_POST['sub5'] == @$_POST['sub4'])||(@$_POST['sub5'] == @$_POST['sub2'])||(@$_POST['sub5'] == @$_POST['sub6'])||(@$_POST['sub5'] == @$_POST['sub7'])||(@$_POST['sub5'] == @$_POST['sub8']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub6'] == @$_POST['sub1']) ||(@$_POST['sub6'] == @$_POST['sub3'])||(@$_POST['sub6'] == @$_POST['sub4'])||(@$_POST['sub6'] == @$_POST['sub5'])||(@$_POST['sub6'] == @$_POST['sub2'])||(@$_POST['sub6'] ==                                          @$_POST['sub7'])||(@$_POST['sub6'] == @$_POST['sub8']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub7'] == @$_POST['sub1']) ||(@$_POST['sub7'] == @$_POST['sub3'])||(@$_POST['sub7'] == @$_POST['sub4'])||(@$_POST['sub7'] == @$_POST['sub5'])||(@$_POST['sub7'] == @$_POST['sub6'])||(@$_POST['sub7'] == @$_POST['sub2'])||(@$_POST['sub7'] == @$_POST['sub8']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub8'] == @$_POST['sub1']) ||(@$_POST['sub8'] == @$_POST['sub3'])||(@$_POST['sub8'] == @$_POST['sub4'])||(@$_POST['sub8'] == @$_POST['sub5'])||(@$_POST['sub8'] == @$_POST['sub6'])||(@$_POST['                                                   sub8'] == @$_POST['sub7'])||(@$_POST['sub8'] == @$_POST['sub2']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if (in_array($_POST['sub8'], $subjectslang) && in_array($_POST['sub7'], $subjectslang))
                        {
                            $allinputdata['excep'] = 'Double Language is not Allowed Please choose a different Subject';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;
                        }
                        else if (in_array($_POST['sub8'], $subjectshis) && in_array($_POST['sub7'], $subjectshis))
                        {
                            $allinputdata['excep'] = 'Double History is not Allowed Please choose a different Subject';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;
                        }
                        else if(@$_POST['sub6'] == @$_POST['sub8'])
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub7'] == @$_POST['sub8'])
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }*/

                      /*  else if(@$_POST['sub1'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 1';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub2'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 2';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;
                        }
                        else if(@$_POST['sub3'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 3';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub4'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 4';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }

                        else if(@$_POST['sub5'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 5';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub6'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 6';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub7'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 7';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub8'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 8';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }                             */
    }
     function frmvalidation9th($viewName,$allinputdata,$isupdate)
    {
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

       // DebugBreak();
        if(@$_POST['dob'] != null || $allinputdata['Dob'] != null)
        {
            $date = new DateTime(@$_POST['dob']);
            $convert_dob = $date->format('Y-m-d');     
        }

        if(@$_POST['cand_name'] == ''  || ($allinputdata['name'] == '' && $isupdate ==1)  )
        {
            $allinputdata['excep'] = 'Please Enter Your Name';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect($viewName);
            return;

        }
        //(strpos($a, 'are') !== false)
        /* if ((strpos(@$_POST['cand_name'], 'MOHAMMAD') !== false)|| (strpos(@$_POST['cand_name'], 'MOHAMAD') !== false) || (strpos(@$_POST['cand_name'], 'MOHD') !== false) || (strpos(@$_POST['cand_name'], 'MUHAMAD') !== false) || (strpos(@$_POST['cand_name'], 'MOOHAMMAD') !== false)|| (strpos(@$_POST['cand_name'], 'MOOHAMAD') !== false))
        {
        $allinputdata['excep'] = 'MUHAMMAD Spelling is not Correct in Name';
        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
        redirect($viewName);
        return;

        }

        else*/ if (@$_POST['father_name'] == ''  || ($allinputdata['Fname'] == '' && $isupdate ==1) )
        {
            $allinputdata['excep'] = 'Please Enter Your Father Name';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect($viewName);
            return;

        }
        /*  if ((strpos(@$_POST['father_name'], 'MOHAMMAD') !== false)|| (strpos(@$_POST['father_name'], 'MOHAMAD') !== false) || (strpos(@$_POST['father_name'], 'MUHAMAD') !== false) || (strpos(@$_POST['father_name'], 'MOOHAMMAD') !== false)|| (strpos(@$_POST['father_name'], 'MOOHAMAD') !== false))
        {
        $allinputdata['excep'] = 'MUHAMMAD Spelling is not Correct in Fathers Name';
        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
        redirect($viewName);
        return;

        }*/

        else if(@$_POST['bay_form'] == ''  || ($allinputdata['BForm'] == '' && $isupdate ==1) )
        {
            $allinputdata['excep'] = 'Please Enter Your Bay Form No.';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect($viewName);
            return;


        }
        else if( (@$_POST['bay_form'] == '00000-0000000-0') || (@$_POST['bay_form'] == '11111-1111111-1') || (@$_POST['bay_form'] == '22222-2222222-2') || (@$_POST['bay_form'] == '33333-3333333-3') || (@$_POST['bay_form'] == '44444-4444444-4')
            || (@$_POST['bay_form'] == '55555-5555555-5') || (@$_POST['bay_form'] == '66666-6666666-6') || (@$_POST['bay_form'] == '77777-7777777-7') || (@$_POST['bay_form'] == '88888-8888888-8') || (@$_POST['bay_form'] == '99999-9999999-9') ||
            (@$_POST['bay_form'] == '00000-1111111-0') || (@$_POST['bay_form'] == '00000-1111111-1') || (@$_POST['bay_form'] == '00000-0000000-1' || $cntzero >7 || $cntone >7 || $cnttwo >7 || $cntfour >7 || $cntthr >7 || $cntfive >7 || $cntsix >7 || $cntseven >7 || $cnteight >7 || $cntnine >7)
            )
            {
                $allinputdata['excep'] = 'Please Enter Your Correct Bay Form No.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            /* else if($this->Registration_model->bay_form_comp(@$_POST['bay_form']) == true && $isupdate ==0 )
            {
            // DebugBreak();
            $allinputdata['excep'] = 'This Bay Form is already Feeded.';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect($viewName);
            return;



            }*/
            else if(@$_POST['oldbform'] !=  @$_POST['bay_form'] && $isupdate ==1 )
            {
                // DebugBreak();
                if($this->Registration_model->bay_form_comp(@$_POST['bay_form']) == true )
                {
                    // DebugBreak();
                    $allinputdata['excep'] = 'This Bay Form is already Feeded.';
                    $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                    redirect($viewName);
                    return;
                }
                else if($this->Registration_model->bay_form_fnic(@$_POST['bay_form'],@$_POST['father_cnic']) == true  )
                {
                    // DebugBreak();
                    $allinputdata['excep'] = 'This Form is already Feeded.';
                    $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                    redirect($viewName);
                    return;
                }      
            }
            else if($this->Registration_model->bay_form_fnic(@$_POST['bay_form'],@$_POST['father_cnic']) == true && $isupdate ==0 )
            {
                // DebugBreak();
                $allinputdata['excep'] = 'This Form is already Feeded.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;



            }
            else if($this->Registration_model->bay_form_fnic_dob_comp(@$_POST['bay_form'],@$_POST['father_cnic'],$convert_dob) == true && $isupdate == 0 )
            {
                // DebugBreak();
                $allinputdata['excep'] = 'This Form is already Feeded.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;



            }                

            else if(@$_POST['father_cnic'] == '' || ($allinputdata['FNIC'] == '' && $isupdate ==1)  )
            {
                $allinputdata['excep'] = 'Please Enter Your Father CNIC';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;


            }
            else if((@$_POST['bay_form'] == @$_POST['father_cnic']) || (@$_POST['father_cnic'] == @$_POST['bay_form']) )
            {
                $allinputdata['excep'] = 'Your Bay Form and FNIC No. are not same';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;


            }
            else if (@$_POST['dob'] == ''  || ($allinputdata['Dob'] == ''   && $isupdate ==1) )
            {
                $allinputdata['excep'] = 'Please Enter Your  Date of Birth';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['mob_number'] == '')
            {
                $allinputdata['excep'] = 'Please Enter Your Mobile Number';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['medium'] == 0)
            {
                $allinputdata['excep'] = 'Please Select Your Medium';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['Inst_Rno']== '')
            { 
                $allinputdata['excep'] = 'Please Enter Your Roll Number';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['MarkOfIden']== '')
            {
                $allinputdata['excep'] = 'Please Enter Your Mark of Identification';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }

            /* else if((@$_POST['speciality'] != '0')or (@$_POST['speciality'] != '1') or (@$_POST['speciality'] != '2'))
            {
            $error['excep'] = 'Please Enter Your Speciality';
            $this->load->view('Registration/9th/NewEnrolment.php',$error);
            }*/
            else if((@$_POST['medium'] != '1') and (@$_POST['medium'] != '2') )
            {
                $allinputdata['excep'] = 'Please Select Your medium';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['nationality'] != '1') and (@$_POST['nationality'] != '2') )
            {
                $allinputdata['excep'] = 'Please Select Your Nationality';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['gender'] != '1') and (@$_POST['gender'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Gender';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['hafiz']!= '1') and (@$_POST['hafiz']!= '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Hafiz-e-Quran option';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['religion'] != '1') and (@$_POST['religion'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your religion';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['UrbanRural'] != '1') and (@$_POST['UrbanRural'] != '2'))
            {
                $allinputdata['excep'] = 'Please Select Your Residency';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['address'] =='')
            {
                $allinputdata['excep'] = 'Please Enter Your Address';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if(@$_POST['std_group'] == 0)
            {
                $allinputdata['excep'] = 'Please Select Your Study Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['std_group'] == 1) && ((@$_POST['sub5']!=5) || (@$_POST['sub6']!=6)||(@$_POST['sub7']!=7)|| (@$_POST['sub8']!=8)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['std_group'] == 7)&& ((@$_POST['sub5']!=5) || (@$_POST['sub6']!=6)||(@$_POST['sub7']!=7)|| (@$_POST['sub8']!=78)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['std_group'] == 8)&& ((@$_POST['sub5']!=5) || (@$_POST['sub6']!=6)||(@$_POST['sub7']!=7)|| (@$_POST['sub8']!=43)))
            {

                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }
            else if((@$_POST['std_group'] == 2) && ((@$_POST['sub5']==5) || (@$_POST['sub6']==6)||(@$_POST['sub7']==7)|| (@$_POST['sub8']==43) || (@$_POST['sub8']==8)))
            {
                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }

            else if((@$_POST['std_group'] == 5)&& ((@$_POST['sub5']==5) || (@$_POST['sub6']==6)||(@$_POST['sub7']==7)|| (@$_POST['sub8']==43) || (@$_POST['sub8']==8)))
            {
                $allinputdata['excep'] = 'Subjects not according to Group';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect($viewName);
                return;

            }

            else if((@$_POST['sub1'] == @$_POST['sub2']) ||(@$_POST['sub1'] == @$_POST['sub3'])||(@$_POST['sub1'] == @$_POST['sub4'])||(@$_POST['sub1'] == @$_POST['sub5'])||(@$_POST['sub1'] == @$_POST['sub6'])||(@$_POST['sub1'] == @$_POST['sub7'])||
                (@$_POST['sub1'] == @$_POST['sub8']))
                {
                    $allinputdata['excep'] = 'Please Select Different Subjects';
                    $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                    redirect($viewName);
                    return;

                }
                else if((@$_POST['sub2'] == @$_POST['sub1']) ||(@$_POST['sub2'] == @$_POST['sub3'])||(@$_POST['sub2'] == @$_POST['sub4'])||(@$_POST['sub2'] == @$_POST['sub5'])||(@$_POST['sub2'] == @$_POST['sub6'])||(@$_POST['sub2'] == @$_POST['sub7'])                         ||(@$_POST['sub2'] == @$_POST['sub8'])
                    )
                    {
                        $allinputdata['excep'] = 'Please Select Different Subjects';
                        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                        redirect($viewName);
                        return;

                    }
                    else if((@$_POST['sub3'] == @$_POST['sub1']) ||(@$_POST['sub3'] == @$_POST['sub2'])||(@$_POST['sub3'] == @$_POST['sub4'])||(@$_POST['sub3'] == @$_POST['sub5'])||(@$_POST['sub3'] == @$_POST['sub6'])||(@$_POST['sub3'] == @$_POST['sub7'])||(@$_POST['sub3'] == @$_POST['sub8'])
                        )
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub4'] == @$_POST['sub1']) ||(@$_POST['sub4'] == @$_POST['sub3'])||(@$_POST['sub4'] == @$_POST['sub2'])||(@$_POST['sub4'] == @$_POST['sub5'])||(@$_POST['sub4'] == @$_POST['sub6'])||(@$_POST['sub4'] == @$_POST[                                 'sub7'])||(@$_POST['sub4'] == @$_POST['sub8']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub5'] == @$_POST['sub1']) ||(@$_POST['sub5'] == @$_POST['sub3'])||(@$_POST['sub5'] == @$_POST['sub4'])||(@$_POST['sub5'] == @$_POST['sub2'])||(@$_POST['sub5'] == @$_POST['sub6'])||(@$_POST['sub5'] == @$_POST['sub7'])||(@$_POST['sub5'] == @$_POST['sub8']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub6'] == @$_POST['sub1']) ||(@$_POST['sub6'] == @$_POST['sub3'])||(@$_POST['sub6'] == @$_POST['sub4'])||(@$_POST['sub6'] == @$_POST['sub5'])||(@$_POST['sub6'] == @$_POST['sub2'])||(@$_POST['sub6'] ==                                          @$_POST['sub7'])||(@$_POST['sub6'] == @$_POST['sub8']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub7'] == @$_POST['sub1']) ||(@$_POST['sub7'] == @$_POST['sub3'])||(@$_POST['sub7'] == @$_POST['sub4'])||(@$_POST['sub7'] == @$_POST['sub5'])||(@$_POST['sub7'] == @$_POST['sub6'])||(@$_POST['sub7'] == @$_POST['sub2'])||(@$_POST['sub7'] == @$_POST['sub8']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if((@$_POST['sub8'] == @$_POST['sub1']) ||(@$_POST['sub8'] == @$_POST['sub3'])||(@$_POST['sub8'] == @$_POST['sub4'])||(@$_POST['sub8'] == @$_POST['sub5'])||(@$_POST['sub8'] == @$_POST['sub6'])||(@$_POST['                                                   sub8'] == @$_POST['sub7'])||(@$_POST['sub8'] == @$_POST['sub2']))
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if (in_array($_POST['sub8'], $subjectslang) && in_array($_POST['sub7'], $subjectslang))
                        {
                            $allinputdata['excep'] = 'Double Language is not Allowed Please choose a different Subject';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;
                        }
                        else if (in_array($_POST['sub8'], $subjectshis) && in_array($_POST['sub7'], $subjectshis))
                        {
                            $allinputdata['excep'] = 'Double History is not Allowed Please choose a different Subject';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;
                        }
                        else if(@$_POST['sub6'] == @$_POST['sub8'])
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub7'] == @$_POST['sub8'])
                        {
                            $allinputdata['excep'] = 'Please Select Different Subjects';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }

                        else if(@$_POST['sub1'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 1';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub2'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 2';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;
                        }
                        else if(@$_POST['sub3'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 3';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub4'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 4';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }

                        else if(@$_POST['sub5'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 5';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub6'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 6';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub7'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 7';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
                        else if(@$_POST['sub8'] == 0)
                        {
                            $allinputdata['excep'] = 'Please Select Subject 8';
                            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                            redirect($viewName);
                            return;

                        }
    } 
      public function searchbyinst()
    {
      $this->load->helper('url');
      $data = array(
          'isselected' => '15',
      );
      $this->load->library('session');
      $this->load->model('BiseCorrections_model');
      $Logged_In_Array = $this->session->all_userdata();
      $userinfo = $Logged_In_Array['logged_in'];
   
      if(!empty($_POST))
      {
            // DebugBreak();
       $data['data'] = $this->BiseCorrections_model->EditEnrolementByinst($_POST['txtformNo_search']);
      }
      
      
      //error_manualentry9th
      $this->load->view('common/header.php',$userinfo);
      $this->load->view('common/menu.php',$data);
      $this->load->view('BiseCorrection/9thCorrection/SrchByInstCD.php',$error);
      $this->load->view('common/footer.php');
    }
    
     public function otherboard10th()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '15',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
         if(!( $this->session->flashdata('NewEnrolment_error'))){

            $error_msg = '';  
        }
        else{
            $error_msg = $this->session->flashdata('NewEnrolment_error');
        }
        
        
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Matric/OtherBoard10th.php',$error_msg);
        $this->load->view('common/Otherboard10thfooter.php');
    }
    
    public function NewEnrolment_insert_OtherBoard10th(){


        //DebugBreak();
        $this->load->model('BiseCorrections_model');
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 2;
        $Inst_Id_other = @$_POST['inst_cd_other'];
        $ckpo = $userinfo['Inst_Id'];
        $this->commonheader($userinfo);
        $error = array();

        $formno = $this->BiseCorrections_model->GetFormNo($Inst_Id_other);
        $inst_info = $this->BiseCorrections_model->GetInstbyId($Inst_Id_other);
        $dob = @$_POST['dob'];

        $allinputdata = array('cand_name'=>@$_POST['cand_name'],
            'father_name'=>@$_POST['father_name'],
            'bay_form'=>@$_POST['bay_form'],
            'father_cnic'=>@$_POST['father_cnic'],
            'Dob'=>@$_POST['dob'],
            'mob_number'=>@$_POST['mob_number'],
            'medium'=>@$_POST['medium'],
            'speciality'=>@$_POST['speciality'],
            'MarkOfIden'=>@$_POST['MarkOfIden'],
            'medium'=>@$_POST['medium'],
            'nationality'=>@$_POST['nationality'],
            'gender'=>@$_POST['gend'],
            'hafiz'=>@$_POST['hafiz'],
            'religion'=>@$_POST['religion'],
            'std_group'=>@$_POST['std_group'],
            'address'=>@$_POST['address'],
            'UrbanRural'=>@$_POST['UrbanRural'],
            'dist'=>@$_POST['pvtinfo_dist'],
            'teh'=>@$_POST['pvtinfo_teh'],
            'zone'=>@$_POST['pvtZone'],
            'oldrno'=>@$_POST['oldrno'],
            'oldsess'=>@$_POST['oldsess'],
            'oldyear'=>@$_POST['oldyear'],
            'oldboard'=>@$_POST['oldboard'],
            'oldClass'=>@$_POST['oldClass'],
            'cattype' => @$_POST['category'],
            'sub1'=>@$_POST['sub1'],
            'sub2'=>@$_POST['sub2'],
            'sub3'=>@$_POST['sub3'],
            'sub4'=>@$_POST['sub4'],
            'sub5'=>@$_POST['sub5'],
            'sub6'=>@$_POST['sub6'],
            'sub7'=>@$_POST['sub7'],
            'sub8'=>@$_POST['sub8'],
            'sub1p2'=>@$_POST['sub1p2'],
            'sub2p2'=>@$_POST['sub2p2'],
            'sub3p2'=>@$_POST['sub3p2'],
            'sub4p2'=>@$_POST['sub4p2'],
            'sub5p2'=>@$_POST['sub5p2'],
            'sub6p2'=>@$_POST['sub6p2'],
            'sub7p2'=>@$_POST['sub7p2'],
            'sub8p2'=>@$_POST['sub8p2'],
        );

       
        $sub1 = 0;
        $sub2 = 0;
        $sub3 = 0;
        $sub4 = 0;
        $sub5 = 0;
        $sub6 = 0;
        $sub7 = 0;
        $sub8 = 0;
        $sub1ap1 = 0;
        $sub2ap1 = 0;
        $sub3ap1 = 0;
        $sub4ap1 = 0;
        $sub5ap1 = 0;
        $sub6ap1 = 0;
        $sub7ap1 = 0;
        $sub8ap1 = 0;
        $sub1ap2 = 0;
        $sub2ap2 = 0;
        $sub3ap2 = 0;
        $sub4ap2 = 0;
        $sub5ap2 = 0;
        $sub6ap2 = 0;
        $sub7ap2 = 0;
        $sub8ap2 = 0;

        $is9th = 0;
        if(@$_POST['sub1'] != 0)
        {
            $sub1ap1 = 1; 
            $sub1 =  $_POST['sub1'];   
            $is9th = 1;
        }
        if(@$_POST['sub2'] != 0)
        {
            $sub2ap1 = 1;    
            $sub2 =  $_POST['sub2'];
            $is9th = 1;
        }
        if(@$_POST['sub3'] != 0)
        {
            $sub3ap1 = 1;   
            $sub3 =  $_POST['sub3'];
            $is9th = 1;
        }
        if(@$_POST['sub4'] != 0)
        {
            $sub4ap1 = 1;    
            $sub4 =  $_POST['sub4'];
            $is9th = 1;
        }
        if(@$_POST['sub5'] != 0)
        {
            $sub5ap1 = 1;    
            $sub5 =  $_POST['sub5'];
            $is9th = 1;
        }
        if(@$_POST['sub6'] != 0)
        {
            $sub6ap1 = 1;    
            $sub6 =  $_POST['sub6'];
            $is9th = 1;
        }
        if(@$_POST['sub7'] != 0)
        {
            $sub7ap1 = 1;    
            $sub7 =  $_POST['sub7'];
            $is9th = 1;
        }
        if(@$_POST['sub8'] != 0)
        {
            $sub8ap1 = 1;    
            $sub8 =  $_POST['sub8'];
            $is9th = 1;
        }

        if(@$_POST['sub1p2'] != 0)
        {
            $sub1ap2 = 1; 
            $sub1 =  $_POST['sub1p2'];  
        }
        if(@$_POST['sub2p2'] != 0)
        {
            $sub2ap2 = 1; 
            $sub2 =  $_POST['sub2p2'];    
        }
        if(@$_POST['sub3p2'] != 0)
        {
            $sub3ap2 = 1;  
            $sub3 =  $_POST['sub3p2'];    
        }
        if(@$_POST['sub4p2'] != 0)
        {
            $sub4ap2 = 1; 
            $sub4 =  $_POST['sub4p2'];     
        }
        if(@$_POST['sub5p2'] != 0)
        {
            $sub5ap2 = 1;    
            $sub5 =  $_POST['sub5p2'];  
        }
        if(@$_POST['sub6p2'] != 0)
        {
            $sub6ap2 = 1;    
            $sub6 =  $_POST['sub6p2'];  
        }
        if(@$_POST['sub7p2'] != 0)
        {
            $sub7ap2 = 1;    
            $sub7 =  $_POST['sub7p2'];  
        }
        if(@$_POST['sub8p2'] != 0)
        {
            $sub8ap2 = 1;    
            $sub8 =  $_POST['sub8p2'];  
        }

        //  DebugBreak();
        $cattype = @$_POST['category'];
        $examtype = "";
        $marksImp = @$_POST['ddlMarksImproveoptions'];

      //  DebugBreak();

      if($is9th == 1)
      {
          $examtype = 3;
          $cat09 = 2;
          $cat10 = 1;
      }
      else
      {
          $examtype = 1;
          $cat09 = 0;
          $cat10 = 1;
      }

        $Speciality = $this->input->post('speciality');
        $grp_cd = $this->input->post('std_group');
        $per_grp = $this->input->post('pergrp');

        if($grp_cd == '1' || $grp_cd == '7' || $grp_cd == '8'){
            $grp_cd = '1';
        }
        else if($grp_cd == '2' )
        {
            $grp_cd = '2';        
        }
        else if($grp_cd == '5')
        {
            $grp_cd = '5';        
        }

        $practical_Sub = array(
            'PHY'=>'6',
            'CHM'=>'7',
            'BIO'=>'8',
            'ART&MD'=>'18',
            'F&N'=>'27',
            'AHE'=>'28',
            'C&T'=>'30',
            'HPD'=>'40',
            'EW'=>'43',
            'COM'=>'45',
            'AGR'=>'46',
            'WW(FM)'=>'48',
            'CM'=>'68',
            'DRAW'=>'69',
            'EMB'=>'70',
            'TAIL'=>'72',
            'TYPE'=>'73',
            'CSC'=>'78',
            'WW(BM)'=>'79',
            'POUL'=>'83',
            'R/AC'=>'88',
            'F/FRM'=>'89',
            'CHW'=>'90',
            'CSC/D'=>'93',
            'HPD/D'=>'94'
        );
        // DebugBreak();
        $ispractical = 0;
        if($per_grp == 1)
        {
            $ispractical =1;
        }
        if(array_search(@$_POST['sub5'],$practical_Sub) || array_search(@$_POST['sub6'],$practical_Sub) || array_search(@$_POST['sub7'],$practical_Sub) ||
         array_search(@$_POST['sub5p2'],$practical_Sub) || array_search(@$_POST['sub6p2'],$practical_Sub) || array_search(@$_POST['sub7p2'],$practical_Sub))
        {
            $ispractical =1;
        }



        /*$AdmFee = $this->BiseCorrections_model->getrulefee($ispractical);//$this->makefee($cat,$Speciality,$sub7,$sub8,$grp_cd,$per_grp);
        $AdmFeeCatWise = '1300';
        if($cat09 != 0 && $cat10 != 0)
        {
            $AdmFeeCatWise = $AdmFee[0]['Comp_Pvt_Amount'];
        }
        else if(($cat09 == 0 && $cat10 != 0) || ($cat09 != 0 && $cat10 == 0))
        {
            $AdmFeeCatWise = $AdmFee[0]['PVT_Amount'];
        }
        else if($cat09 == 0 && $cat10 == 0)
        {
            return;
        }

        if($Speciality > 0)
        {
           $AdmFeeCatWise = 0; 
        }
        $TotalAdmFee = $AdmFee[0]['Processing_Fee'] +$AdmFeeCatWise;
        // DebugBreak();  */

        $oldsess = @$_POST['oldsess'];
        if($oldsess == 'Annual'){
            $oldsess =  1;    
        }
        else if($oldsess == 'Supplementary'){
            $oldsess =  2;    
        }
        
       $addre =  str_replace("'", "", $this->input->post('address'));
     
        
        
        //  DebugBreak();
         $target_path = IMAGE_PATH_OTHER_BOARD_10TH.$Inst_Id_other.'/';
        if (!file_exists($target_path)){

        mkdir($target_path);
        }

       // $base_path =  base_url().GET_PRIVATE_IMAGE_PATH_COPY;
      $base_path = GET_PRIVATE_IMAGE_PATH_COPY.@$_POST['pic'];
        //$copyimg = $target_path.$formno.'.jpg';
       
       
      $config['upload_path']   = $target_path;
        $config['allowed_types'] = 'jpg|jpeg';
        $config['max_size']      = '20';
        $config['min_size']      = '4';
        //  $config['max_width']     = '260';
        // $config['max_height']    = '290';
        $config['min_width']     = '110';
        $config['min_height']    = '100';
        $config['overwrite']     = TRUE;
        $config['file_name']     = $formno.'.jpg';

        $filepath = $target_path.'/'. $config['file_name']  ;

        //$config['new_image']    = $formno.'.JPEG';

        $this->load->library('upload', $config);
        // DebugBreak();
        $check = getimagesize($_FILES["pic"]["tmp_name"]);
        $this->upload->initialize($config);

        if($check !== false) {

            $file_size = round($_FILES['pic']['size']/1024, 2);
            if($file_size<=20 && $file_size>=4)
            {
                if ( !$this->upload->do_upload('pic',true))
                {
                    if($this->upload->error_msg[0] != "")
                    {
                        $error['excep']= $this->upload->error_msg[0];
                        $data['excep'] = $this->upload->error_msg[0];
                        $this->session->set_flashdata('NewEnrolment_error',$data);
                        //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                        redirect('BiseCorrection/otherboard10th/');
                        return;

                    }


                }
            }
            else
            {
                $data['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                redirect('BiseCorrection/otherboard10th/');

            }
        }
        else
        {
            // $check = getimagesize($filepath);
            if($check === false)
            {
                $data['excep'] = 'Please Upload Your Picture';
                $this->session->set_flashdata('NewEnrolment_error',$data);
                redirect('BiseCorrection/otherboard10th/');
                return;
            }
        }
        
          $data = array(
            'name' =>$this->input->post('cand_name'),
            'Fname' =>$this->input->post('father_name'),
            'BForm' =>$this->input->post('bay_form'),
            'FNIC' =>$this->input->post('father_cnic'),
            'Dob' =>$this->input->post('dob'),
            'MobNo' =>$this->input->post('mob_number'),
            'medium' =>$this->input->post('medium'),
            'Inst_cd_other' =>$this->input->post('inst_cd_other'),
            'markOfIden' =>$this->input->post('MarkOfIden'),
            'Speciality' => ($Speciality),
            'nat' =>$this->input->post('nationality'),
            'sex' =>$this->input->post('gender'),
            'IsHafiz' =>$this->input->post('hafiz'),
            'rel' =>$this->input->post('religion'),
            'addr' =>$addre,
            'grp_cd' => $grp_cd,
            'sub1' =>$sub1,
            'sub2' =>$sub2,
            'sub3' =>$sub3,
            'sub4' =>$sub4,
            'sub5' =>$sub5,
            'sub6' =>$sub6,
            'sub7' => $sub7,
            'sub8' => $sub8,
            'sub1ap1' => ($sub1ap1),
            'sub2ap1' => ($sub2ap1),
            'sub3ap1' => ($sub3ap1),
            'sub4ap1' => ($sub4ap1),
            'sub5ap1' => ($sub5ap1),
            'sub6ap1' => ($sub6ap1),
            'sub7ap1' => ($sub7ap1),
            'sub8ap1' => ($sub8ap1),
            'sub1ap2' => ($sub1ap2),
            'sub2ap2' => ($sub2ap2),
            'sub3ap2' => ($sub3ap2),
            'sub4ap2' => ($sub4ap2),
            'sub5ap2' => ($sub5ap2),
            'sub6ap2' => ($sub6ap2),
            'sub7ap2' => ($sub7ap2),
            'sub8ap2' => ($sub8ap2),
            'RuralORUrban' =>$this->input->post('UrbanRural'),
            'prevResult' =>$this->input->post('prevResult'),
            'FormNo' =>($formno),
            'cat09' =>$cat09,
            'cat10' =>$cat10,
            'dist'=>$inst_info[0]->dist_cd,
            'teh'=>$inst_info[0]->teh_cd,
            'zone'=>$inst_info[0]->zone_cd,
            'Reggrp'=>"1",
            'rno'=>@$_POST['oldrno'],
            'sess'=>$oldsess,
            'Iyear'=>@$_POST['oldyear'],
            'Brd_cd'=>@$_POST['oldboard'],
            'schm'=>1,
            'exam_type'=>$examtype,
            'spl_cd'=>@$data[0]['spl_cd'],
            'picpath'=>$filepath,
            'ckpo'=>@$ckpo
           

        ); 
        
        
        $this->frmvalidation('BiseCorrection/otherboard10th',$data,0);       
        //DebugBreak();*/
        $logedIn = $this->BiseCorrections_model->Insert_NewEnorlement($data);
        if($logedIn != false)
        {
            $allinputdata = "";
            $allinputdata['excep'] = 'success';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            $msg = $formno;                                           
            redirect('BiseCorrection/otherboard10th');
        }
        else
        {     
            $allinputdata = "";
            $allinputdata['excep'] = 'An error has occoured. Please try again later. ';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect('BiseCorrection/otherboard10th');
            return;
            echo 'Data NOT Saved Successfully !';
        } 
        $this->load->view('common/footer.php');
    }
     
      public function otherboard11th()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
         if(!( $this->session->flashdata('NewEnrolment_error'))){

            $error_msg = '';  
        }
        else{
            $error_msg = $this->session->flashdata('NewEnrolment_error');
        }
        
        
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Inter/OtherBoard11th.php',$error_msg);
        $this->load->view('common/Otherboard11thfooter.php');
    }
       public function NewEnrolment_insert_OtherBoard11th()
       {


        //DebugBreak();
        $this->load->model('BiseCorrections_model');
        $this->load->library('session');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $userinfo['isselected'] = 13;
        $Inst_Id_other = @$_POST['inst_cd_other'];
        $ckpo = $userinfo['Inst_Id'];
        $this->commonheader($userinfo);
        $error = array();

        $formno = $this->BiseCorrections_model->GetFormNo_11th($Inst_Id_other);
          $inst_info = $this->BiseCorrections_model->GetInstbyId_11th_otherboard($Inst_Id_other);
        $dob = @$_POST['dob'];

        $allinputdata = array('cand_name'=>@$_POST['cand_name'],
            'father_name'=>@$_POST['father_name'],
            'bay_form'=>@$_POST['bay_form'],
            'father_cnic'=>@$_POST['father_cnic'],
            'Dob'=>@$_POST['dob'],
            'mob_number'=>@$_POST['mob_number'],
            'medium'=>@$_POST['medium'],
            'speciality'=>@$_POST['speciality'],
            'MarkOfIden'=>@$_POST['MarkOfIden'],
            'medium'=>@$_POST['medium'],
            'nationality'=>@$_POST['nationality'],
            'gender'=>@$_POST['gend'],
            'hafiz'=>@$_POST['hafiz'],
            'religion'=>@$_POST['religion'],
            'std_group'=>@$_POST['std_group'],
            'address'=>@$_POST['address'],
            'UrbanRural'=>@$_POST['UrbanRural'],
            'dist'=>@$_POST['pvtinfo_dist'],
            'teh'=>@$_POST['pvtinfo_teh'],
            'zone'=>@$_POST['pvtZone'],
            'oldrno'=>@$_POST['oldrno'],
            'oldsess'=>@$_POST['oldsess'],
            'oldyear'=>@$_POST['oldyear'],
            'oldboard'=>@$_POST['oldboard'],
            'oldClass'=>@$_POST['oldClass'],
            'cattype' => @$_POST['category'],
            'sub1'=>@$_POST['sub1'],
            'sub2'=>@$_POST['sub2'],
            'sub3'=>@$_POST['sub3'],
            'sub4'=>@$_POST['sub4'],
            'sub5'=>@$_POST['sub5'],
            'sub6'=>@$_POST['sub6'],
            'sub7'=>@$_POST['sub7'],
            'sub8'=>@$_POST['sub8'],
            'sub1p2'=>@$_POST['sub1p2'],
            'sub2p2'=>@$_POST['sub2p2'],
            'sub3p2'=>@$_POST['sub3p2'],
            'sub4p2'=>@$_POST['sub4p2'],
            'sub5p2'=>@$_POST['sub5p2'],
            'sub6p2'=>@$_POST['sub6p2'],
            'sub7p2'=>@$_POST['sub7p2'],
           // 'sub8p2'=>@$_POST['sub8p2'],
        );

       
        $sub1 = 0;
        $sub2 = 0;
        $sub3 = 0;
        $sub4 = 0;
        $sub5 = 0;
        $sub6 = 0;
        $sub7 = 0;
        $sub8 = 0;
        $sub1ap1 = 0;
        $sub2ap1 = 0;
        $sub3ap1 = 0;
        $sub4ap1 = 0;
        $sub5ap1 = 0;
        $sub6ap1 = 0;
        $sub7ap1 = 0;
        $sub8ap1 = 0;
        $sub1ap2 = 0;
        $sub2ap2 = 0;
        $sub3ap2 = 0;
        $sub4ap2 = 0;
        $sub5ap2 = 0;
        $sub6ap2 = 0;
        $sub7ap2 = 0;
       // $sub8ap2 = 0;

        $is11th = 0;
        if(@$_POST['sub1'] != 0)
        {
            $sub1ap1 = 1; 
            $sub1 =  $_POST['sub1'];   
            $is11th = 1;
        }
        if(@$_POST['sub2'] != 0)
        {
            $sub2ap1 = 1;    
            $sub2 =  $_POST['sub2'];
            $is11th = 1;
        }
        if(@$_POST['sub3'] != 0)
        {
            $sub3ap1 = 1;   
            $sub3 =  $_POST['sub3'];
            $is11th = 1;
        }
        if(@$_POST['sub4'] != 0)
        {
            $sub4ap1 = 1;    
            $sub4 =  $_POST['sub4'];
            $is11th = 1;
        }
        if(@$_POST['sub5'] != 0)
        {
            $sub5ap1 = 1;    
            $sub5 =  $_POST['sub5'];
            $is11th = 1;
        }
        if(@$_POST['sub6'] != 0)
        {
            $sub6ap1 = 1;    
            $sub6 =  $_POST['sub6'];
            $is11th = 1;
        }
        if(@$_POST['sub7'] != 0)
        {
            $sub7ap1 = 1;    
            $sub7 =  $_POST['sub7'];
            $is11th = 1;
        }
        if(@$_POST['sub3p2'] != 0)
        {
            $sub8ap1 = 1;    
            $sub8 =  $_POST['sub3p2'];
            //$is11th = 1;
        }

        if(@$_POST['sub1p2'] != 0)
        {
            $sub1ap2 = 1; 
            $sub1 =  $_POST['sub1p2'];  
        }
        if(@$_POST['sub2p2'] != 0)
        {
            $sub2ap2 = 1; 
            $sub2 =  $_POST['sub2p2'];    
        }
       
        if(@$_POST['sub4p2'] != 0)
        {
            $sub4ap2 = 1; 
            $sub4 =  $_POST['sub4p2'];     
        }
        if(@$_POST['sub5p2'] != 0)
        {
            $sub5ap2 = 1;    
            $sub5 =  $_POST['sub5p2'];  
        }
        if(@$_POST['sub6p2'] != 0)
        {
            $sub6ap2 = 1;    
            $sub6 =  $_POST['sub6p2'];  
        }
        if(@$_POST['sub7p2'] != 0)
        {
            $sub7ap2 = 1;    
            $sub7 =  $_POST['sub7p2'];  
        }
       /* if(@$_POST['sub8p2'] != 0)
        {
            $sub8ap2 = 1;    
            $sub8 =  $_POST['sub8p2'];  
        }   */

        //  DebugBreak();
        $cattype = @$_POST['category'];
        $examtype = "";
        $marksImp = @$_POST['ddlMarksImproveoptions'];

      //  DebugBreak();

      if($is11th == 1)
      {
          $examtype = 3;
          $cat09 = 2;
          $cat10 = 1;
      }
      else
      {
          $examtype = 1;
          $cat09 = 0;
          $cat10 = 1;
      }

        $Speciality = $this->input->post('speciality');
        $grp_cd = $this->input->post('std_group');
        $per_grp = $this->input->post('pergrp');
        
        $oldsess = @$_POST['oldsess'];
        if($oldsess == 'Annual'){
            $oldsess =  1;    
        }
        else if($oldsess == 'Supplementary'){
            $oldsess =  2;    
        }
        
       $addre =  str_replace("'", "", $this->input->post('address'));
     
        
        
        //  DebugBreak();
         $target_path = IMAGE_PATH_OTHER_BOARD_12TH.$Inst_Id_other;
        if (!file_exists($target_path)){

        mkdir($target_path);
        }

       // $base_path =  base_url().GET_PRIVATE_IMAGE_PATH_COPY;
       $base_path = IMAGE_PATH_OTHER_BOARD_12TH.@$_POST['pic'];
       //$copyimg = $target_path.$formno.'.jpg';

       $config['upload_path']   = $target_path;
       $config['allowed_types'] = 'jpg|jpeg';
       $config['max_size']      = '20';
       $config['min_size']      = '4';
       //  $config['max_width']     = '260';
       // $config['max_height']    = '290';
     //  $config['min_width']     = '110';
     //  $config['min_height']    = '100';
       $config['overwrite']     = TRUE;
       $config['file_name']     = $formno.'.jpg';

       $filepath = $target_path.'/'. $config['file_name']  ;


        //$config['new_image']    = $formno.'.JPEG';

        $this->load->library('upload', $config);
        // DebugBreak();
        $check = getimagesize($_FILES["pic"]["tmp_name"]);
        $this->upload->initialize($config);

        if($check !== false) {

            $file_size = round($_FILES['pic']['size']/1024, 2);
            if($file_size<=20 && $file_size>=4)
            {
                if ( !$this->upload->do_upload('pic',true))
                {
                    if($this->upload->error_msg[0] != "")
                    {        $allinputdata = "";
                        $allinputdata['excep']= $this->upload->error_msg[0];
                        $allinputdata['excep'] = $this->upload->error_msg[0];
                        $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                        //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                        redirect('BiseCorrection/otherboard11th/');
                        return;

                    }


                }
            }
            else
            {
                //$data['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                $allinputdata = "";
                $allinputdata['excep'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                $allinputdata['formno'] = 'The file you are attempting to upload size is between 4 to 20 Kb.';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                
                //  echo '<pre>'; print_r($allinputdata['excep']);exit();
                redirect('BiseCorrection/otherboard11th/');

            }
        }
        else
        {
            // $check = getimagesize($filepath);
            if($check === false)
            {   
                $allinputdata = "";
                $allinputdata['excep'] = 'Please Upload Your Picture';
            $allinputdata['formno'] = 'Please Upload Your Picture';
                $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
                redirect('BiseCorrection/otherboard11th/');
                return;
            }
        }  
       // echo $filepath;
//die();
//DebugBreak();
          $data = array(
            'soldrno' =>$this->input->post('soldrno'),
            'soldyear' =>$this->input->post('soldyear'),
            'soldsess' =>$this->input->post('soldsess'),
            'sscbrd' =>$this->input->post('soldboard'),
            'name' =>$this->input->post('cand_name'),
            'Fname' =>$this->input->post('father_name'),
            'BForm' =>$this->input->post('bay_form'),
            'FNIC' =>$this->input->post('father_cnic'),
            'Dob' =>$this->input->post('dob'),
            'MobNo' =>$this->input->post('mob_number'),
            'medium' =>$this->input->post('medium'),
            'Inst_cd_other' =>$this->input->post('inst_cd_other'),
            'markOfIden' =>$this->input->post('MarkOfIden'),
            'Speciality' => ($Speciality),
            'nat' =>$this->input->post('nationality'),
            'sex' =>$this->input->post('gender'),
            'IsHafiz' =>$this->input->post('hafiz'),
            'rel' =>$this->input->post('religion'),
            'addr' =>$addre,
            'grp_cd' => $grp_cd,
            'sub1' =>$sub1,
            'sub2' =>$sub2,
            'sub3' =>$sub3,
            'sub4' =>$sub4,
            'sub5' =>$sub5,
            'sub6' =>$sub6,
            'sub7' => $sub7,
            'sub8' => $sub8,
            'sub1ap1' => ($sub1ap1),
            'sub2ap1' => ($sub2ap1),
            'sub3ap1' => ($sub3ap1),
            'sub4ap1' => ($sub4ap1),
            'sub5ap1' => ($sub5ap1),
            'sub6ap1' => ($sub6ap1),
            'sub7ap1' => ($sub7ap1),
            'sub8ap1' => ($sub8ap1),
            'sub1ap2' => ($sub1ap2),
            'sub2ap2' => ($sub2ap2),
           // 'sub3ap2' => ($sub3ap2),
            'sub4ap2' => ($sub4ap2),
            'sub5ap2' => ($sub5ap2),
            'sub6ap2' => ($sub6ap2),
            'sub7ap2' => ($sub7ap2),
            //'sub8ap2' => ($sub8ap2),
            'RuralORUrban' =>$this->input->post('UrbanRural'),
            'prevResult' =>$this->input->post('prevResult'),
            'FormNo' =>($formno),
            'cat09' =>$cat09,
            'cat10' =>$cat10,
            'dist'=>$inst_info[0]->dist_cd,
            'teh'=>$inst_info[0]->teh_cd,
            'zone'=>$inst_info[0]->izone_cd,
            'Reggrp'=>"1",
            'rno'=>@$_POST['oldrno'],
            'sess'=>$oldsess,
            'Iyear'=>@$_POST['oldyear'],
            'Brd_cd'=>@$_POST['oldboard'],
            'schm'=>4,
            'exam_type'=>$examtype,
            'spl_cd'=>@$data[0]['spl_cd'],
            'picpath'=>$filepath,
            'ckpo'=>@$ckpo
           

        ); 
        
    //   echo  '<pre>'; print_r($data);die;
        $this->frmvalidation('BiseCorrection/otherboard11th',$data,0);       
        //DebugBreak();*/
        $logedIn = $this->BiseCorrections_model->Insert_NewEnorlement_11th($data);
        if($logedIn != false)
        {
            $allinputdata = "";
            $allinputdata['excep'] = 'success';
            $allinputdata['formno'] = $formno;
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            $msg = $formno;                                           
            redirect('BiseCorrection/otherboard11th');
        }
        else
        {     
            $allinputdata = "";
            $allinputdata['excep'] = 'An error has occoured. Please try again later. ';
            $this->session->set_flashdata('NewEnrolment_error',$allinputdata);
            redirect('BiseCorrection/otherboard11th');
            return;
            echo 'Data NOT Saved Successfully !';
        } 
        $this->load->view('common/footer.php');
    }
       public function result9thCancel()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '8',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get9thcancel());
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Res9thCancel.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }
    public function Reg9thActive()
    {
        $rno = $this->uri->segment(3);
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $NinthStdData = array('data'=>$this->BiseCorrections_model->updateReg9thData($rno,$userinfo['Inst_Id']));
        redirect('/BiseCorrection/result9thCancel');
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
public function regElegibility()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get11thelegibility('Not'));
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Reg11thInsts.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }
    public function otherBoardNOC()
    {
        $this->load->helper('url');
        $data = array(
            'isselected' => '13',
        );
        $this->load->library('session');
        $this->load->model('BiseCorrections_model');
        $NinthStdData = array('data'=>$this->BiseCorrections_model->get11thelegibility('Yes'));
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $this->load->view('common/header.php',$userinfo);
        $this->load->view('common/menu.php',$data);
        $this->load->view('BiseCorrection/Reg11thNOC.php',$NinthStdData);
        $this->load->view('common/footer.php');
    }
     public function Reg11thactive()
    {
        
        $formno = $this->input->post('formno');
        $pkid = $this->input->post('pkid');
        $this->load->model('BiseCorrections_model');
        $Logged_In_Array = $this->session->all_userdata();
        $userinfo = $Logged_In_Array['logged_in'];
        $NinthStdData = $this->BiseCorrections_model->updateReg11Data($formno,$pkid,$userinfo['Inst_Id']);
        
        if($NinthStdData == TRUE)
        {
            echo 1;
        }
        else{
             echo -1;
        }
        
       // redirect('/BiseCorrection/result11thcorrections');
    }
    private function generatepath($rno,$class,$year,$sess)
    {
      $basepath = DIRPATHMIG2;
      $clsvr = '';
      $picyear= substr($year, -2);
      $folderno = '';
      if($class == 10  OR $class == 09)
      {
         $clsvr = 'MA'; 
        
      }
      else if($class == 12  OR $class == 11)
      {
          $clsvr = 'IA';
      }

      if($rno>100001 && $rno<=150000)
      {
          $folderno = '1st';
      }
      else if($rno>150001 && $rno<=200000)
      {
          $folderno = '2nd';
      }
      else if($rno>200001 && $rno<=250000)
      {
          $folderno = '3rd';
      }
      else if($rno>250001 && $rno<=300000)
      {
          $folderno = '4th';
      }
      else if($rno>300001 && $rno<=350000)
      {
          $folderno = '5th';
      }
      else if($rno>350001 && $rno<400000)
      {
          $folderno = '6th';
      }
      else if($rno>400001 && $rno<=450000)
      {
          $folderno = '7th';
      }
      else if($rno>450001 && $rno<=450000)
      {
          $folderno = '8th';
      }
      else if($rno>450001 && $rno<500000)
      {
          $folderno = '9th';
      }
      else if($rno>500001 && $rno<550000)
      {
          $folderno = '10th';
      }
      else if($rno>550001 && $rno<600000)
      {
          $folderno = '11th';
      }
      
      
      $pic = 'Pic'.$clsvr.'-'.$picyear ;
      
      $foldername =   $clsvr.  $folderno .$picyear;
      $basepath =  $basepath.'\\'.$pic.'\\'. $foldername;
         
    }
     public function Correction11thReport()
    {
       // DebugBreak();
      $this->load->model('BiseCorrections_model');
      $info =    $this->BiseCorrections_model->getcorrection11th();
      $this->load->library('pdf_rotate');
      $pdf = new pdf_rotate('P','in',"A4");
      $lmargin =1.5;
      $rmargin =7.3;

      $pdf->AddPage();
      $x = 0.55;
      $Y = -0.2;

      // $pdf->SetAutoPageBreak(.5);
      $pdf->SetAutoPageBreak(true,0);
      $pdf->AliasNbPages();
      $pdf->SetFont('Arial','BU',12);
      $pdf->SetXY(1,0.2);
      $pdf->Cell(0, 0.2, "BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, GUJRANWALA", 0.25, "C");
     /* $pdf->SetFont('Arial','B',12);
      $pdf->SetXY(2.0,0.4);
      $pdf->Cell(0, 0.2,  "List of 9th Registration Corrcetion 2016-18 Session", 0.25, "C");*/

      $boxWidth = 150.0;
      $pdf->SetFillColor(255,255,255);
      //Table cell Global varibales;
      $Y = .96;
      $font = 9;
        for($i = 0 ; $i<count($info); $i++)
        {
            //DebugBreak();

            if($info[$i]['inst_cd'] != '399903')
            {
            $falg = 0;
            $pdf->SetFont('Arial','',10);
            $pdf->SetXY(.2,.6);
            $pdf->MultiCell(8,0.2, "Institute Code/Name:  ".$info[$i]['inst_cd'].'-'.$info[$i]['name'],0,'L'); 
            //$pdf->Cell(0, 0.2,  , 0.25, "C"); 
            $instwise =  $this->BiseCorrections_model->getcorrection11thbyinst($info[$i]['inst_cd']);

            for($j = 0 ; $j <count($instwise); $j++)
            {
                if($j == 0)
                {
                    $Y = .96;
                    $cellheight = .2;

                    $pdf->SetFont('Arial','B',12);
                    $pdf->SetXY(2.0,0.4);
                    $pdf->Cell(0, 0.2,  "List of 11th Registration Corrcetion 2016-18 Session", 0.25, "C");

                    $pdf->SetFont('Arial','B',$font);
                    $pdf->SetXY(.2,$Y);
                    $pdf->Cell(.52,$cellheight,'Sr. No.',1,0,'C',1);
                    
                    $pdf->SetXY(.73,$Y);
                    $pdf->Cell(1.1,$cellheight,'Rno-Bind-SrNo',1,0,'L',1);
                    
                    $pdf->SetXY(1.8,$Y);
                    $pdf->Cell(.93,$cellheight,'Formno',1,0,'L',1);
                    
                    $pdf->SetXY(2.55,$Y);
                    $pdf->Cell(1.67,$cellheight,'Correction Type',1,0,'L',1);
                    
                    $pdf->SetXY(3.8,$Y);
                    $pdf->Cell(2.3,$cellheight,'Old Value',1,0,'L',1);
                    
                    $pdf->SetXY(6,$Y);
                    $pdf->Cell(2.1,$cellheight,'New Value',1,0,'L',1);
                    
                    
                }
                //$cellheight = .3;
                $pdf->SetFont('Arial','',8);
                $corrtype = $this->correctiontype($instwise[$j]['columnName']);
                $Y += .2; 
                $falg = 0;
                $pdf->SetXY(.2,$Y);
                $pdf->Cell(.52,$cellheight,$j+1,1,0,'C',1);
                if($corrtype == 'Subject Change')
                {
                    $perval = $this->GetiSubNameHere($instwise[$j]['PreviousValue']);
                    $newval = $this->GetiSubNameHere($instwise[$j]['NewValue']);
                }
                else if($corrtype == 'Group Change')
                {
                    $perval = $this->intergrp($instwise[$j]['PreviousValue']);
                    $newval = $this->intergrp($instwise[$j]['NewValue']);
                }
                
                $pdf->SetXY(.73,$Y);
                $pdf->Cell(1.1,$cellheight,trim($instwise[$j]['rno']).'-'.$instwise[$j]['bindno'].'-'.$instwise[$j]['srno'],1,0,'L',1);

                $pdf->SetXY(1.8,$Y);
                $pdf->Cell(.93,$cellheight,$instwise[$j]['formno'],1,0,'L',1);

                $pdf->SetXY(2.55,$Y);
                $pdf->Cell(1.67,$cellheight,$corrtype,1,0,'L',1);
                if($corrtype != 'Picture Correction')
                {
                    $pdf->SetXY(3.8,$Y);
                    $pdf->Cell(2.3,$cellheight,$perval,1,0,'L',1);

                    $pdf->SetXY(6,$Y);
                    $pdf->Cell(2.1,$cellheight,$newval,1,0,'L',1);  
                }

              
                if($j%50 == 0 && $j != 0 && count($instwise) >49)
                {
                    $falg = 1;
                    $pdf->AddPage();

                    $Y = .25;
                    $cellheight = .2;
                    $pdf->SetFont('Arial','B',$font);
                    $pdf->SetXY(.2,$Y);
                    $pdf->Cell(.52,$cellheight,'Sr. No.',1,0,'C',1);

                    $pdf->SetXY(.73,$Y);
                    $pdf->Cell(1.1,$cellheight,'Rno-Bind-Srno',1,0,'L',1);

                    $pdf->SetXY(1.8,$Y);
                    $pdf->Cell(.93,$cellheight,'Formno',1,0,'L',1);

                    $pdf->SetXY(2.55,$Y);
                    $pdf->Cell(1.67,$cellheight,'Correction Type',1,0,'L',1);

                    $pdf->SetXY(3.8,$Y);
                    $pdf->Cell(2.3,$cellheight,'Old Value',1,0,'L',1);

                    $pdf->SetXY(6,$Y);
                    $pdf->Cell(2.1,$cellheight,'New Value',1,0,'L',1);
                }
             //   break;
            }

          //   break; 
            if($i<count($info)-1)
                $pdf->AddPage();
            }
        }

        $pdf->Output('report.pdf', 'I');
    }
    
     public function Correction9thReport()
    {
       // DebugBreak();
      $this->load->model('BiseCorrections_model');
      $info =    $this->BiseCorrections_model->getcorrection9th();
      $this->load->library('pdf_rotate');
      $pdf = new pdf_rotate('P','in',"A4");
      $lmargin =1.5;
      $rmargin =7.3;

      $pdf->AddPage();
      $x = 0.55;
      $Y = -0.2;

      // $pdf->SetAutoPageBreak(.5);
      $pdf->SetAutoPageBreak(true,0);
      $pdf->AliasNbPages();
      $pdf->SetFont('Arial','BU',12);
      $pdf->SetXY(1,0.2);
      $pdf->Cell(0, 0.2, "BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, GUJRANWALA", 0.25, "C");
     /* $pdf->SetFont('Arial','B',12);
      $pdf->SetXY(2.0,0.4);
      $pdf->Cell(0, 0.2,  "List of 9th Registration Corrcetion 2016-18 Session", 0.25, "C");*/

      $boxWidth = 150.0;
      $pdf->SetFillColor(255,255,255);
      //Table cell Global varibales;
      $Y = .96;
      $font = 9;
      for($i = 0 ; $i<count($info); $i++)
      {
          //DebugBreak();
          
          $falg = 0;
          $pdf->SetFont('Arial','',10);
          $pdf->SetXY(.2,.6);
           $pdf->MultiCell(8,0.2, "Institute Code/Name:  ".$info[$i]['inst_cd'].'-'.$info[$i]['name'],0,'L'); 
          //$pdf->Cell(0, 0.2,  , 0.25, "C"); 
          $instwise =  $this->BiseCorrections_model->getcorrection9thbyinst($info[$i]['inst_cd']);
                
          for($j = 0 ; $j <count($instwise); $j++)
          {
              if($j == 0)
              {
                  $Y = .96;
                  $cellheight = .2;

                  $pdf->SetFont('Arial','B',12);
                  $pdf->SetXY(2.0,0.4);
                  $pdf->Cell(0, 0.2,  "List of 9th Registration Corrcetion 2016-18 Session", 0.25, "C");
                  
                  $pdf->SetFont('Arial','B',$font);
                  $pdf->SetXY(.2,$Y);
                  $pdf->Cell(.52,$cellheight,'Sr. No.',1,0,'C',1);
                  $pdf->SetXY(.73,$Y);
                  $pdf->Cell(.95,$cellheight,'Formno',1,0,'L',1);
                  $pdf->SetXY(1.63,$Y);
                  $pdf->Cell(1.5,$cellheight,'Correction Type',1,0,'L',1);
                  $pdf->SetXY(2.99,$Y);
                  $pdf->Cell(2.8,$cellheight,'Old Value',1,0,'L',1);
                  $pdf->SetXY(5.4,$Y);
                  $pdf->Cell(2.2,$cellheight,'New Value',1,0,'L',1);
                  $pdf->SetXY(7.6,$Y);
                  $pdf->Cell(.55,$cellheight,'Bind No.',1,0,'L',1);
              }
              //$cellheight = .3;
              $pdf->SetFont('Arial','',8);
              $corrtype = $this->correctiontype($instwise[$j]['columnName']);
              if($falg == 0)
              {
                  if($j ==  0)
                  {
                      if ($corrtype == 'Picture Correction')
                      {
                          $cellheight =  .6;
                          $Y += .2; 
                      }
                      else
                      {
                          $cellheight = .3;
                          $Y += .2; 
                      }
                  }
                  else if ($corrtype == 'Picture Correction')
                  {
                      $cellheight =  .6;
                    //  $Y += .6;
                  }
                  else
                  {
                      if($cellheight ==  .6 )
                      {
                          if ($corrtype != 'Picture Correction')
                          {
                              $cellheight =  .3;
                          }
                          $Y += .6;   
                      }
                      else
                      {
                          $cellheight =  .3;
                          $Y += .3;   
                      }
                     
                  }
              }              
              else
              {
                  
                  $Y += .2; 
                  $falg = 0;
              }
              $pdf->SetXY(.2,$Y);
              $pdf->Cell(.52,$cellheight,$j+1,1,0,'C',1);
              if($corrtype == 'Subject Change')
              {
                  $perval = $this->GetSubNameHere($instwise[$j]['PreviousValue']);
                  $newval = $this->GetSubNameHere($instwise[$j]['NewValue']);
              }
              else if($corrtype == 'Group Change')
              {
                  $perval = $this->matricgrp($instwise[$j]['PreviousValue']);
                  $newval = $this->matricgrp($instwise[$j]['NewValue']);
              }
              else if($corrtype == 'Date of Birth')
              {
                  $date = new DateTime($instwise[$j]['PreviousValue']);
                  $perval =  $date->format('d-m-Y'); 
                  $date = new DateTime($instwise[$j]['NewValue']);
                  $newval =  $date->format('d-m-Y'); 
              }
              else 
              {
                  $perval = $instwise[$j]['PreviousValue'];
                  $newval = $instwise[$j]['NewValue'];
              }
              $pdf->SetXY(.73,$Y);
              $pdf->Cell(.95,$cellheight,$instwise[$j]['formno'],1,0,'L',1);

              $pdf->SetXY(1.63,$Y);
              $pdf->Cell(1.5,$cellheight,$corrtype,1,0,'L',1);
              if($corrtype != 'Picture Correction')
              {
                  $pdf->SetXY(2.99,$Y);
                  $pdf->Cell(2.8,$cellheight,$perval,1,0,'L',1);

                  $pdf->SetXY(5.4,$Y);
                  $pdf->Cell(2.2,$cellheight,$newval,1,0,'L',1);  
              }
            else
            {
                  $pdf->SetXY(2.99,$Y);
                  $pdf->Cell(2.8,$cellheight,'',1,0,'L',1);

                  $pdf->SetXY(5.4,$Y);
                  $pdf->Cell(2.2,$cellheight,'',1,0,'L',1);  

                  //   $cdate = date('d-m-Y',strtotime($instwise[$j]['cdate']));
                  $date = new DateTime($instwise[$j]['cdate']);
                  $cdate =  $date->format('d-m-Y'); 
                 $pdf->Image(DIRPATHMIG.$info[$i]['inst_cd'].'/'.$instwise[$j]['formno'].'_'.$cdate.'.jpg',3.2, $Y, 0.65, 0.58, "jpg"); 
                  $pdf->Image(DIRPATHCOR.$info[$i]['inst_cd'].'/'.$instwise[$j]['formno'].'.jpg',5.8, $Y, 0.65, 0.58, "jpg"); 
            }
                 $pdf->SetXY(7.6,$Y);
                  $pdf->Cell(.55,$cellheight,$instwise[$j]['bindno'],1,0,'L',1);
              if($j%32 == 0 && $j != 0 && count($instwise) >33)
              {
                  $falg = 1;
                  $pdf->AddPage();
                  
                  $Y = .25;
                  $cellheight = .2;
                  
                
                  
                  $pdf->SetFont('Arial','B',$font);
                  $pdf->SetXY(.2,$Y);
                  $pdf->Cell(.52,$cellheight,'Sr. No.',1,0,'C',1);
                  $pdf->SetXY(.73,$Y);
                  $pdf->Cell(.95,$cellheight,'Formno',1,0,'L',1);
                  $pdf->SetXY(1.63,$Y);
                  $pdf->Cell(1.5,$cellheight,'Correction Type',1,0,'L',1);
                  $pdf->SetXY(2.99,$Y);
                  $pdf->Cell(2.8,$cellheight,'Old Value',1,0,'L',1);
                  $pdf->SetXY(5.4,$Y);
                  $pdf->Cell(2.2,$cellheight,'New Value',1,0,'L',1);
                  $pdf->SetXY(7.6,$Y);
                  $pdf->Cell(.55,$cellheight,'Bind No.',1,0,'L',1);
              }
           //  break;
          }
         
         // break; 
         if($i<count($info)-1)
          $pdf->AddPage();
      }

       $pdf->Output('report.pdf', 'I');
    } 
    private function matricgrp($grp_cd)
    {
         $ret_val = "";
        if($grp_cd == 1)  
            $ret_val = 'SCIENCE'; 
        else if($grp_cd == 2) 
            $ret_val='GENERAL';
            else if($grp_cd == 5) 
                $ret_val= 'DEAF & DEFECTIVE';
                return $ret_val;
    }
      private function intergrp($grp_cd)
    {
         $ret_val = "";
        if($grp_cd == 1)  
            $ret_val = 'PRE-MEDICAL'; 
        else if($grp_cd == 2) 
            $ret_val='PRE-ENGINEERING';
            else if($grp_cd == 3) 
                $ret_val= 'HUMANITIES';
                  else if($grp_cd == 4) 
                $ret_val= 'GENERAL SCIENCE';
                  else if($grp_cd == 5) 
                $ret_val= 'COMMERCE';
                  else if($grp_cd== 6) 
                $ret_val= 'HOME ECONOMICS';
                return $ret_val;
    }
    function correctiontype($corr)
    {
      $ret_val = "";
      if($corr == 'name')  $ret_val = "Name";
      else if($corr == 'Fname')  $ret_val = "Father Name";
          else if($corr == 'grp_cd')  $ret_val = "Group Change";
              else if($corr == 'Dob')  $ret_val = "Date of Birth";
                  else if($corr == 'BForm')  $ret_val = "Bay Form";
                      else if($corr == 'FNIC')  $ret_val = "Father CNIC";
                          else if($corr == 'FNIC')  $ret_val = "Father CNIC";
                              else if($corr == 'PicPath')  $ret_val = "Picture Correction";
                                  else if($corr == 'sub1' || $corr == 'sub2' || $corr == 'sub3' || $corr == 'sub4' || $corr == 'sub5' ||  $corr == 'sub6' ||  $corr == 'sub7' ||  $corr == 'sub8')  $ret_val = "Subject Change";
                                  
                                  
             return $ret_val;
    }
      function  GetSubNameHere($_sub_cd)
    {
$ret_val = "";
if($_sub_cd == 1)  $ret_val = "URDU";
else if($_sub_cd == 2)  $ret_val = "ENGLISH";
else if($_sub_cd == 3)  $ret_val = "ISLAMIYAT (COMPULSORY)";
else if($_sub_cd == 4)  $ret_val = "PAKISTAN STUDIES";
else if($_sub_cd == 5)  $ret_val = "MATHEMATICS";
else if($_sub_cd == 6)  $ret_val = "PHYSICS";
else if($_sub_cd == 7)  $ret_val = "CHEMISTRY";
else if($_sub_cd == 8)  $ret_val = "BIOLOGY";
else if($_sub_cd == 9)  $ret_val = "GENERAL SCIENCE";
else if($_sub_cd == 11)  $ret_val = "GEOGRAPHY OF PAKISTAN";
else if($_sub_cd == 18)  $ret_val = "ART/ART & MODEL DRAWING";
else if($_sub_cd == 22)  $ret_val = "ARABIC";
else if($_sub_cd == 23)  $ret_val = "PERSIAN";
else if($_sub_cd == 36)  $ret_val = "PUNJABI";
else if($_sub_cd == 20)  $ret_val = "ISLAMIC HISTORY";
else if($_sub_cd == 21)  $ret_val = "HISTORY OF PAKISTAN/ HISTORY OF INDO PAK";
else if($_sub_cd == 78)  $ret_val = "COMPUTER SCIENCE";
else if($_sub_cd == 12)  $ret_val = "HOUSE HOLD ACCOUNTS & ITS RELATED PROBLEMS";
else if($_sub_cd == 13)  $ret_val = "ELEMENTS OF HOME ECONOMICS";
else if($_sub_cd == 14)  $ret_val = "PHYSIOLOGY & HYGIENE";
else if($_sub_cd == 15)  $ret_val = "GEOMETRICAL & TECHNICAL DRAWING";
else if($_sub_cd == 16)  $ret_val = "GEOLOGY";
else if($_sub_cd == 17)  $ret_val = "ASTRONOMY & SPACE SCIENCE";
else if($_sub_cd == 19)  $ret_val = "ISLAMIC STUDIES";
else if($_sub_cd == 27)  $ret_val = "FOOD AND NUTRITION";
else if($_sub_cd == 28)  $ret_val = "ART IN HOME ECONOMICS";
else if($_sub_cd == 29)  $ret_val = "MANAGEMENT FOR BETTER HOME";
else if($_sub_cd == 30)  $ret_val = "CLOTHING & TEXTILES";
else if($_sub_cd == 31)  $ret_val = "CHILD DEVELOPMENT AND FAMILY LIVING";
else if($_sub_cd == 32)  $ret_val = "MILITARY SCIENCE";
else if($_sub_cd == 33)  $ret_val = "COMMERCIAL GEOGRAPHY";
else if($_sub_cd == 34)  $ret_val = "URDU LITERATURE";
else if($_sub_cd == 35)  $ret_val = "ENGLISH LITERATURE";
else if($_sub_cd == 37)  $ret_val = "EDUCATION";
else if($_sub_cd == 38)  $ret_val = "ELEMENTARY NURSING & FIRST AID";
else if($_sub_cd == 39)  $ret_val = "PHOTOGRAPHY";
else if($_sub_cd == 40)  $ret_val = "HEALTH & PHYSICAL EDUCATION";
else if($_sub_cd == 41)  $ret_val = "CALIGRAPHY";
else if($_sub_cd == 42)  $ret_val = "LOCAL (COMMUNITY) CRAFTS";
else if($_sub_cd == 43)  $ret_val = "ELECTRICAL WIRING";
else if($_sub_cd == 44)  $ret_val = "RADIO ELECTRONICS";
else if($_sub_cd == 45)  $ret_val = "COMMERCE";
else if($_sub_cd == 46)  $ret_val = "AGRICULTURE";
else if($_sub_cd == 53)  $ret_val = "ANIMAL PRODUCTION";
else if($_sub_cd == 54)  $ret_val = "PRODUCTIVE INSECTS AND FISH CULTURE";
else if($_sub_cd == 55)  $ret_val = "HORTICULTURE";
else if($_sub_cd == 56)  $ret_val = "PRINCIPLES OF HOME ECONOMICS";
else if($_sub_cd == 57)  $ret_val = "RELATED ACT";
else if($_sub_cd == 58)  $ret_val = "HAND AND MACHINE EMBROIDERY";
else if($_sub_cd == 59)  $ret_val = "DRAFTING AND GARMENT MAKING";
else if($_sub_cd == 60)  $ret_val = "HAND & MACHINE KNITTING & CROCHEING";
else if($_sub_cd == 61)  $ret_val = "STUFFED TOYS AND DOLL MAKING";
else if($_sub_cd == 62)  $ret_val = "CONFECTIONERY AND BAKERY";
else if($_sub_cd == 63)  $ret_val = "PRESERVATION OF FRUITS,VEGETABLES & OTHER FOODS";
else if($_sub_cd == 64)  $ret_val = "CARE AND GUIDENCE OF CHILDREN";
else if($_sub_cd == 65)  $ret_val = "FARM HOUSE HOLD MANAGEMENT";
else if($_sub_cd == 66)  $ret_val = "ARITHEMATIC";
else if($_sub_cd == 67)  $ret_val = "BAKERY";
else if($_sub_cd == 68)  $ret_val = "CARPET MAKING";
else if($_sub_cd == 69)  $ret_val = "DRAWING";
else if($_sub_cd == 70)  $ret_val = "EMBORIDERY";
else if($_sub_cd == 71)  $ret_val = "HISTORY";
else if($_sub_cd == 72)  $ret_val = "TAILORING";
else if($_sub_cd == 24)  $ret_val = "GEOGRAPHY";
else if($_sub_cd == 25)  $ret_val = "ECONOMICS";
else if($_sub_cd == 26)  $ret_val = "CIVICS";
else if($_sub_cd == 47)  $ret_val = "BOOK KEEPING & ACCOUNTANCY";
else if($_sub_cd == 48)  $ret_val = "WOOD WORK (FURNITURE MAKING)";
else if($_sub_cd == 49)  $ret_val = "GENERAL AGRICULTURE";
else if($_sub_cd == 50)  $ret_val = "FARM ECONOMICS";
else if($_sub_cd == 52)  $ret_val = "LIVE STOCK FARMING";
else if($_sub_cd == 73)  $ret_val = "TYPE WRITING";
else if($_sub_cd == 74)  $ret_val = "WEAVING";
else if($_sub_cd == 75)  $ret_val = "SECRETARIAL PRACTICE";
else if($_sub_cd == 76)  $ret_val = "CANDLE MAKING";
else if($_sub_cd == 77)  $ret_val = "SECRETARIAL PRACTICE AND CORRESPONDANCE";
else if($_sub_cd == 10)  $ret_val = "FOUNDATION OF EDUCATION";
else if($_sub_cd == 51)  $ret_val = "ETHICS";
else if($_sub_cd == 79)  $ret_val = "WOOD WORK (BOAT MAKING)";
else if($_sub_cd == 80)  $ret_val = "PRINCIPLES OF ARITHMATIC";
else if($_sub_cd == 81)  $ret_val = "SEERAT-E-RASOOL";
else if($_sub_cd == 82)  $ret_val = "AL-QURAAN";
else if($_sub_cd == 83)  $ret_val = "POULTRY FARMING";
else if($_sub_cd == 84)  $ret_val = "ART & MODEL DRAWING";
else if($_sub_cd == 85)  $ret_val = "BUSINESS STUDIES";
else if($_sub_cd == 86)  $ret_val = "HADEES & FIQAH";
else if($_sub_cd == 87)  $ret_val = "ENVIRONMENTAL STUDIES";
else if($_sub_cd == 88)  $ret_val = "REFRIGERATION AND AIR CONDITIONING";
else if($_sub_cd == 89)  $ret_val = "FISH FARMING";
else if($_sub_cd == 90)  $ret_val = "COMPUTER HARDWARE";
else if($_sub_cd == 91)  $ret_val = "BEAUTICIAN";
else if($_sub_cd == 92)  $ret_val = "GENERAL MATH"; 
else if($_sub_cd == 93)  $ret_val = "COMPUTER SCIENCES_DFD";    
else if($_sub_cd == 94)  $ret_val = "HEALTH & PHYSICAL EDUCATION_DFD";   
                                                                                                                                                                                                                                                                                                                return $ret_val ;             
    }
     function  GetiSubNameHere($_sub_cd) {
$ret_val = "";
if($_sub_cd == 1)  $ret_val = "ENGLISH";
else if($_sub_cd == 2)  $ret_val = "URDU";
else if($_sub_cd == 3)  $ret_val = "BANGALI";
else if($_sub_cd == 4)  $ret_val = "URDU(ALTERNATIVE EASY COURSE)";
else if($_sub_cd == 5)  $ret_val = "BENGALI(ALTERNATE EASY COURSE)";
else if($_sub_cd == 6)  $ret_val = "PAKISTANI CULTURE";
else if($_sub_cd == 7)  $ret_val = "HISTORY";
else if($_sub_cd == 8)  $ret_val = "LIBRARY SCIENCE";
else if($_sub_cd == 9)  $ret_val = "ISLAMIC HISTORY & CULTURE";
else if($_sub_cd == 10)  $ret_val = "FAZAL ARABIC";
else if($_sub_cd == 11)  $ret_val = "ECONOMICS";
else if($_sub_cd == 12)  $ret_val = "GEOGRAPHY";
else if($_sub_cd == 13)  $ret_val = "MILITARY SCIENCE";
else if($_sub_cd == 14)  $ret_val = "PHILOSOPHY";
else if($_sub_cd == 15)  $ret_val = "ISLAMIC STUDIES(ISL-ST. GROUP)";
else if($_sub_cd == 16)  $ret_val = "PSYCHOLOGY";
else if($_sub_cd == 17)  $ret_val = "CIVICS";
else if($_sub_cd == 18)  $ret_val = "STATISTICS";
else if($_sub_cd == 19)  $ret_val = "MATHEMATICS";
else if($_sub_cd == 20)  $ret_val = "ISLAMIC STUDIES";
else if($_sub_cd == 21)  $ret_val = "OUTLINES OF HOME ECONOMICS";
else if($_sub_cd == 22)  $ret_val = "MUSIC";
else if($_sub_cd == 23)  $ret_val = "FINE ARTS";
else if($_sub_cd == 24)  $ret_val = "ARABIC";
else if($_sub_cd == 25)  $ret_val = "BENGALI";
else if($_sub_cd == 26)  $ret_val = "BENGALI(ADVANCE)";
else if($_sub_cd == 27)  $ret_val = "ENGLISH ELECTIVE";
else if($_sub_cd == 28)  $ret_val = "FRENCH";
else if($_sub_cd == 29)  $ret_val = "GERMAN";
else if($_sub_cd == 30)  $ret_val = "LATIN";
else if($_sub_cd == 32)  $ret_val = "PUNJABI";
else if($_sub_cd == 33)  $ret_val = "PASHTO";
else if($_sub_cd == 34)  $ret_val = "PERSIAN";
else if($_sub_cd == 35)  $ret_val = "SANSKRIT";
else if($_sub_cd == 36)  $ret_val = "SINDHI";
else if($_sub_cd == 37)  $ret_val = "URDU (ADVANCE)";
else if($_sub_cd == 38)  $ret_val = "COMMERCIAL PRACTICE";
else if($_sub_cd == 39)  $ret_val = "PRINCIPLES OF COMMERCE";
else if($_sub_cd == 42)  $ret_val = "HEALTH & PHYSICAL EDUCATION";
else if($_sub_cd == 43)  $ret_val = "EDUCATION";
else if($_sub_cd == 44)  $ret_val = "GEOLOGY";
else if($_sub_cd == 45)  $ret_val = "SOCIOLOGY";
else if($_sub_cd == 46)  $ret_val = "BIOLOGY";
else if($_sub_cd == 47)  $ret_val = "PHYSICS";
else if($_sub_cd == 48)  $ret_val = "CHEMISTRY";
else if($_sub_cd == 52)  $ret_val = "ADEEB ARBI";
else if($_sub_cd == 53)  $ret_val = "ADEEB URDU";
else if($_sub_cd == 54)  $ret_val = "FAZAL URDU";
else if($_sub_cd == 55)  $ret_val = "HISTORY OF PAKISTAN";
else if($_sub_cd == 56)  $ret_val = "HISTORY OF ISLAM";
else if($_sub_cd == 57)  $ret_val = "HISTORY OF INDO-PAK";
else if($_sub_cd == 58)  $ret_val = "HISTORY OF MODREN WORLD";
else if($_sub_cd == 59)  $ret_val = "APPLIED ART  (H-Eco Group)";
else if($_sub_cd == 60)  $ret_val = "FOOD & NUTRITION (H-Eco Group)";
else if($_sub_cd == 61)  $ret_val = "CHILD DEVELOPMENT AND FAMILY LIVING (H-Eco Group)";
else if($_sub_cd == 70)  $ret_val = "PRINCIPLES OF ACCOUNTING";
else if($_sub_cd == 71)  $ret_val = "PRINCIPLES OF ECONOMICS";
else if($_sub_cd == 72)  $ret_val = "BIOLOGY (H-Eco Group)";
else if($_sub_cd == 73)  $ret_val = "CHEMISTRY (H-Eco Group)";
else if($_sub_cd == 75)  $ret_val = "CLOTHING & TEXTILE (H-Eco Group)";
else if($_sub_cd == 76)  $ret_val = "HOME MANAGEMNET  (H-Eco Group)";
else if($_sub_cd == 79)  $ret_val = "NURSING";
else if($_sub_cd == 80)  $ret_val = "BUSINESS MATH";
else if($_sub_cd == 83)  $ret_val = "COMPUTER SCIENCE";
else if($_sub_cd == 90)  $ret_val = "AGRICULTURE";
else if($_sub_cd == 91)  $ret_val = "PAKISTAN STUDIES";
else if($_sub_cd == 92)  $ret_val = "ISLAMIC EDUCATION";
else if($_sub_cd == 93)  $ret_val = "CIVICS FOR NON MUSLIM";
else if($_sub_cd == 94)  $ret_val = "COMMERCIAL GEOGRAPHY";
else if($_sub_cd == 95)  $ret_val = "BANKING";
else if($_sub_cd == 96)  $ret_val = "TYPING";
else if($_sub_cd == 97)  $ret_val = "BUSINESS STATISTICS";
else if($_sub_cd == 98)  $ret_val = "COMPUTER STUDIES";
else if($_sub_cd == 99)  $ret_val = "BOOK KEEPING & ACCOUNTANCY";
return $ret_val ;         
    }
}

/* End of file example.php */
/* Location: ./application/controllers/example.php */