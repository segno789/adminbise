<?php

class Admission_9th_reg_model extends CI_Model 
{
    public function __construct()    
    {
        $this->load->database(); 
    }
    public function Incomplete_inst_info_INSERT($allinfo)
    {
        //  //DebugBreak();
        $data = array(

            'Inst_cd' => $allinfo['Inst_Id'] ,
            'emis_code' => $allinfo['Info_emis'] ,
            'email' => strtoupper($allinfo['info_email']) ,
            'LandLine' => $allinfo['info_phone'] ,
            'MobNo' => $allinfo['info_cellNo'] ,
            'dist_cd' => $allinfo['info_dist'] ,
            'teh_cd' => $allinfo['info_teh'] ,
            'zone_cd' => $allinfo['info_zone'] ,

        );

        $this->db->insert('tblInstitutes_all_Info', $data); 
        return true;
    }


    public function getrulefee_new_singleFee()
    {
        //DebugBreak();
        $singleFee = 'Single Fee';
        $q2         = $this->db->query('Select * from Admission_online..RuleFeeAdm where class = 9 and sess = 1 and Fee_Type = '.$this->db->escape($singleFee));
        return $resultarr = $q2->result_array();
    }

    public function Incomplete_inst($allinfo,$inst_cd)
    {
        //DebugBreak();
        $data = array(
            'Inst_cd' => $inst_cd ,
            'zone_cd' => $allinfo['pvtZone'] ,
            'class' => 9 ,
            'iyear' => Year ,
            'sess' => Session ,
        );

        $res = $this->db->insert('Registration..Instexam_Info', $data); 
        return $res;
    }
    public function iszoneset($inst_cd){

        $query = $this->db->query('SELECT zone_cd FROM matric..tblInstitutes_all WHERE INST_CD = '.$inst_cd.' and EDU_LVL IN (1,3)');
        $rowcount = $query->num_rows();

        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  0;
        }
    }
    public function getStudentsData($data){
        //sp_form_data
        //SELECT * FROM  fl_dataforMa15 WHERE  (isSubmit is null or isSubmit= 0) and class = 9 and iyear = 2014 and sch_cd = ".$user->inst_cd
        // DebugBreak();
        $inst_cd = $data['Inst_Id'];
        $gender = $data['gender'];
        $query = $this->db->query("Registration..SP_Get9thRecord_2016 $inst_cd,9,2016,1,$gender");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function get_zone()
    {

        //$this->db->select('zone_cd','zone_name');
        //$this->db->order_by("formno", "DESC"); myear = 2016 and class = 10 and sess = 1 
        $year = (YEAR+1);
        $query = $this->db->get_where('matric_new..tblZones', array('myear' => $year,'class'=>10,'sess'=>1, 'Flag'=> 1 ));
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();

        }



    }
    public function getuser_infoPVT($User_info_data)
    {
        //DebugBreak();
        $Inst_cd = $User_info_data['Inst_Id'];
        $date = $User_info_data['date'];
        $isPratical = $User_info_data['isPratical'];

        $query = $this->db->get_where('Admission_online..tblinstitutes_all',  array('Inst_cd' => $Inst_cd));

        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {


            //$query2 = $this->db->get_where('Admission_Online..RuleFeeAdm', array('class' => 10,'sess' => 1, 'Start_Date <=' =>$date,'End_Date >='=>$date,'isPrSub'=>$isPratical));
            $query2 = $this->db->query('select * from Admission_online..RuleFeeAdm where class = 10 and sess = 1 and GETDATE() between start_date and End_date and isPrSub ='.$isPratical);
            $resultarr = array("info"=>$query->result_array(),"rule_fee"=>$query2->result_array());

            $qry =  $this->db->last_query();

            return  $resultarr;
        }
        else
        {
            return  false;
        }
    }
    public function forwarding_pdf_final($fetch_data)
    {
        //DebugBreak();
        $Inst_cd = $fetch_data['Inst_cd'];
        $query = $this->db->query("Registration..sp_Forwading_letter_final_9TH $Inst_cd");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }

    public function getrulefee($date){

        $date =  date('Y-m-d',strtotime($date)) ;

        $query = $this->db->get_where('Admission_Online..RuleFeeAdm', array('class' => 10,'sess' => Session, 'Start_Date <='=>$date,'End_Date >='=>$date));
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }


    public function forwarding_pdf_Finance_final($fetch_data)
    {
        //DebugBreak();
        $Inst_cd = $fetch_data['Inst_cd'];
        $session = Session;
        //$query = $this->db->query("Admission_online..sp_Forwading_letter_final_10TH $Inst_cd");
        //$query = $this->db->query("Registration..sp_ForwardingLetter_Finance_9thADM $Inst_cd,$session");
        $query = $this->db->query("Admission_online..sp_ForwardingLetter_Finance_tblreg9th_test $Inst_cd,$session");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }

    public function Dashboard($inst_cd)
    {

        // //DebugBreak();
        //$query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' => 10, 'iyear' => 2016, 'regpvt'=>1,));
        $query = $this->db->query("Registration..Dashboard_Adm_9th $inst_cd");



        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();

        }
        else
        {
            return  false;
        }
    }
    public function Profile_info($inst_cd)
    {

        // //DebugBreak();
        //$query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' => 10, 'iyear' => 2016, 'regpvt'=>1,));
        $query = $this->db->query("Registration..Profile_info $inst_cd");



        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();

        }
        else
        {
            return  false;
        }
    }
    public function Profile_UPDATE($allinputdata)
    {

        // //DebugBreak();
        //$query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' => 10, 'iyear' => 2016, 'regpvt'=>1,));
        $isGovt = $allinputdata['isGovt'];
        $Profile_email = $allinputdata['Profile_email'];
        $Profile_password = $allinputdata['Profile_password'];
        $Profile_phone = $allinputdata['Profile_phone'];
        $Profile_cell = $allinputdata['Profile_cell'];
        $isInserted = $allinputdata['isInserted'];
        $Inst_Id = $allinputdata['Inst_Id'];
        $emis = $allinputdata['emis'];
        $query = $this->db->query("Registration..Profile_UPDATE $Inst_Id,$isInserted,$isGovt,'$Profile_email','$Profile_password','$Profile_phone','$Profile_cell','$emis'");
        return  true;

    }
    public function get_formno_data($formno){

        ////DebugBreak();
        $query = $this->db->query(formprint_sp_9th."'$formno'");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function Insert_NewEnorlement($data)//$father_name,$bay_form,$father_cnic,$dob,$mob_number)  
    {
        // DebugBreak();
        $name = strtoupper($data['name']);
        $fname =strtoupper($data['Fname']);
        $BForm = $data['BForm'];
        $FNIC = $data['FNIC'];
        $Dob = $data['Dob'];
        $CellNo = $data['CellNo'];
        $medium = $data['medium'];

        $MarkOfIden =strtoupper($data['MarkOfIden']);
        $Speciality = $data['Speciality'];
        $nat = $data['nat'];
        $sex = $data['sex'];
        $IsHafiz = $data['IsHafiz'];
        $rel = $data['rel'];
        $addr =strtoupper($data['addr']) ;
        if(($data['grp_cd'] == 1) or ($data['grp_cd'] == 7) or ($data['grp_cd'] == 8) )
        {
            $grp_cd = 1;    
        }
        else if($data['grp_cd'] == 2 )
        {
            $grp_cd = 2;        
        }
        else if($data['grp_cd'] == 5 )
        {
            $grp_cd = 5;        
        }
        $sub1= $data['sub1'];
        $sub2 = $data['sub2'];
        $sub3 = $data['sub3'];
        $sub4 = $data['sub4'];
        $sub5 = $data['sub5'];
        $sub6 = $data['sub6'];
        $sub7 = $data['sub7'];
        $sub8 = $data['sub8'];
        $sub1ap1 = $data['sub1ap1'];
        $sub2ap1 = $data['sub2ap1'];
        $sub3ap1 = $data['sub3ap1'];
        $sub4ap1 = $data['sub4ap1'];
        $sub5ap1 = $data['sub5ap1'];
        $sub6ap1 = $data['sub6ap1'];
        $sub7ap1 = $data['sub7ap1'];
        $sub8ap1 = $data['sub8ap1'];
        $UrbanRural = $data['UrbanRural'];
        $Inst_cd = 999999;
        $formno = $data['FormNo'];
        $RegGrp = $data['grp_cd'];
        $dist = $data['dist'];
        $teh = $data['teh'];
        $zone = $data['zone'];
        $Year = Year;
        $pic = $data['picname'];
        /*$regFee = $data['fee']['regFee'];
        $AdmProcessFee = $data['fee']['AdmProcessFee'];
        $AdmFee = $data['fee']['AdmFee'];
        $AdmFine = $data['fee']['AdmFine'];  */
        $AdmTotalFee = $data['fee']['AdmTotalFee']+$data['fee']['regFee']+$data['fee']['AdmFine'];


        // DebugBreak();

        //'formNo'=>$data['formNo'],'regFee'=>0,'AdmProcessFee'=>$processFee,'AdmFee'=>$finalFee,'AdmFine'=>$Total_fine,'AdmTotalFee'=>$data['AdmTotalFee']
        //$Dob = date('Y-m-d', strtotime($Dob)); 
        $query = $this->db->query("Registration..MA_P1_PVT_Adm_sp_insert '$formno',9,$Year,1,'$name','$fname','$BForm','$FNIC','$Dob'
            ,'$CellNo',$medium,'".$MarkOfIden."',$Speciality,$nat,$sex,$rel,'".$addr."',$grp_cd,$sub1,$sub1ap1,$sub2,$sub2ap1,$sub3,$sub3ap1,$sub4,$sub4ap1
            ,$sub5,$sub5ap1,$sub6,$sub6ap1,$sub7,$sub7ap1,$sub8,$sub8ap1,1,0,0,0,0,$IsHafiz,$Inst_cd,$UrbanRural,$RegGrp,$dist,$teh,$zone
            ,$AdmTotalFee,'$pic'");
        //$query = $this->db->insert('msadmissions2015', $data);//,'Fname' => $father_name,'BForm'=>$bay_form,'FNIC'=>$father_cnic,'Dob'=>$dob,'CellNo'=>$mob_number));

        return $query->result_array();
    }      
    public function EditPicEnrolement($inst_cd)
    {

        // DebugBreak();
        //$query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' => 10, 'iyear' => 2016, 'regpvt'=>1,));
        //sp_get_regInfo_spl_case

        $query = $this->db->query("Registration..sp_get_regPicInfo $inst_cd,9,2016,1");    





        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
            // $q1 = array('stdinfo'=>$query->result_array()) ;
            //            for($i= 0; $i<$rowcount; $i++){
            //            $q1['stdinfo'][$i]['sub1'];
            //            }
            //            $q1['stdinfo']['sub1'];
            //            $q2 = $this->db->query("select SUB_ABR from tblsubject_newschm where SUB_CD in (1,2,3,4,5)");
            //            $q2 = array('stdinfo_sub'=>$q2->result_array()) ;
            //            $query = array('stdinfo_reg'=>$q1,'stdinfo_sub'=>$q2);


        }
        else
        {
            return  false;
        }
    }
    public function getzone($tehcd)
    {
        $year = (YEAR+1);
        $query = $this->db->get_where('matric_new..tblZones', array('mYear' => $year,'Class' => 10,'Sess'=>1, 'teh_cd' => $tehcd,'Flag'=> 1 ));
        // //DebugBreak();
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function getcenter($data){



        $zone = $data['zoneCode'];
        $gend = $data['gen'];
        $year = (YEAR+1);
        $where = " mYear = ".$year."  AND class =10  AND  sess = 1 AND Zone_cd =  $zone  AND  (cent_Gen = $gend OR cent_Gen = 3) ";      
        $query = $this->db->query("SELECT * FROM matric_new..tblcentre WHERE $where");

        //$query = $this->db->get_where('matric_new..tblcentre', array('mYear' => 2016,'class' => 10,'sess'=>2, 'Zone_cd' => $zone, 'cent_Gen' => $gend)); 
        //DebugBreak();
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function Update_NewEnorlement($data)//$father_name,$bay_form,$father_cnic,$dob,$mob_number)  MA_P1_Reg_Adm2016_sp_Update
    { 
        //DebugBreak();
        // $forms_id =array("'" . implode("','", $_POST["chk"]) . "'");

        if(@$_POST['isformwise']==1)
        {
            $forms_id =array(explode(',',$_POST["CheckedFormno"]));
            // $myc = count($_POST["CheckedFormno"]);

            $myc = count($forms_id[0]);
            for ($i = 0; $i < count($forms_id[0]); $i++) 
            {
                $sm_data[] = array(
                    'IsAdmission'=>1,'cDate'=> date('Y-m-d H:i:s'),'formNo'=>$forms_id[0][$i],
                    'zone_cd'=>$_POST["zone_cd"]
                );
            }
            $sm_data ;
            $this->db->update_batch(tblreg9th,$sm_data,'formNo');
        }
        else if(@$_POST['isformwise']==2)
        {
            /*$data=array('IsAdmission'=>1,'cDate'=> date('Y-m-d H:i:s'));
            $this->db->where('Reggrp',$_POST['make_adm9th_groups']);
            $this->db->where('Sch_cd',$_POST['Inst_Id']);
            $this->db->where('');

            $this->db->update(tblreg9th,$data);
            */
            //DebugBreak();
            $this->db->query("Update ".tblreg9th." Set IsAdmission=1 ,cDate=getdate() where Sch_cd = ".$_POST['Inst_Id']." and Reggrp = ".$_POST['make_adm9th_groups']." and (Isdeleted = 0 or isdeleted is null ) and (Batch_id is not null or Batch_id <> 0) and (Batch_id_Adm = 0 or Batch_id_Adm is null) and (spl_cd is null or spl_cd = 0)");
        }
        else if(@$_POST['isformwise']==3)
        {
            $forms_id =array(implode(',',$_POST["chk"]));
            $myc = count($_POST["chk"]);
            for ($i = 0; $i < count($_POST["chk"]); $i++) 
            {
                $sm_data[] = array(
                    'IsAdmission'=>0,'cDate'=> date('Y-m-d H:i:s'),'formNo'=>$_POST["chk"][$i],'zone_cd'=>$_POST["zone_cd"]
                );
            }
            $sm_data ;
            $this->db->update_batch(tblreg9th,$sm_data,'formNo');
        }

        return true;
    }
    public function checknextrno($name,$fname,$dob,$fnic)
    {
        //();
        $query = $this->db->query("admission_online..NextAppearanceSSC_9THADM 0,9,0,0,'$name','$fname','$dob','$fnic','',3");

        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {

            return $query->result_array();
        }
        else
        {
            $query = $this->db->query("admission_online..NextAppearanceSSC_9THADM 0,10,0,0,'$name','$fname','$dob','$fnic','',2");
            $rowcount = $query->num_rows();
            if($rowcount > 0)
            {
                return $query->result_array();
            }
            return  -1;
        }
    }
    public function checknextrno_newAdmission($name,$fname,$dob,$fnic,$bform)
    {

        $query = $this->db->query("admission_online..NextAppearanceSSC_9THADM 0,9,".regyear.",0,'$name','$fname','$dob','$fnic','$bform',5");

        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {

            return $query->result_array();
        }
        else
        {
            return  -1;
        }
    }

    public function UpdateFee_Final($Alldata)
    {
        $data=array('Amount'=>$Alldata['Amount'],'Total_AdmFee'=>$Alldata['Total_AdmFee'],'Total_ProcesFee'=>$Alldata['Total_ProcesFee'],'Total_LateAdmFee'=>$Alldata['Total_LateAdmFee'],'cdate'=>date('Y-m-d H:i:s'));
        $this->db->where('Batch_Id',$Alldata['batchid']);
        $this->db->update('Registration..tblAdmbatch9th',$data);
        //DebugBreak();
        $this->db->update_batch(tblreg9th,$Alldata['data'],'formNo');
        return true;
    }

    public function Update_AdmissionFeePvt($data)
    {
        //();
        $data['IsAdmission']=1;
        $data['cdate']= date('Y-m-d H:i:s');
        $this->db->where('formNo',$data['formNo']);
        $this->db->update(tblreg9th,$data);
        // $this->db->update_batch('Registration..MA_P1_Reg_Adm2016',$data,'formNo');
        // DebugBreak();

        $this->db->select('regFee,AdmFee,AdmProcessFee,AdmFine,AdmTotalFee');
        $query = $this->db->get_where(tblreg9th, array('formNo'=>$data['formNo'])); 

        //$query = $this->db->get("Registration..MA_P1_Reg_Adm2016");    
        $rowcount = $query->num_rows();
        //DebugBreak();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }

    }
    public function Spl_case_std_list_new($myinfo)
    {

        //DebugBreak();
        //$query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' => 10, 'iyear' => 2016, 'regpvt'=>1,));
        //sp_get_regInfo_spl_case
        $inst_cd = $myinfo['Inst_cd'];
        $spl_cd = $myinfo['spl_cd'];
        $grp_selected = $myinfo['grp_selected'];
        $year = Year;
        $session = Session;
        if($grp_selected == FALSE)
        {
            if($spl_cd == FALSE || ($spl_cd == "3"))
            {
                $query = $this->db->query("Registration..tblreg9thInfo $inst_cd,9,$year,$session");    
            }

            else
            {
                $query = $this->db->query("Registration..tblreg9thSplcd $inst_cd,9,$year,$session,$spl_cd");    
            }    
        }
        else
        {
            $query = $this->db->query("Registration..tblreg9thGroupwise $inst_cd,9,$year,$session,$grp_selected");    
        }




        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
            // $q1 = array('stdinfo'=>$query->result_array()) ;
            //            for($i= 0; $i<$rowcount; $i++){
            //            $q1['stdinfo'][$i]['sub1'];
            //            }
            //            $q1['stdinfo']['sub1'];
            //            $q2 = $this->db->query("select SUB_ABR from tblsubject_newschm where SUB_CD in (1,2,3,4,5)");
            //            $q2 = array('stdinfo_sub'=>$q2->result_array()) ;
            //            $query = array('stdinfo_reg'=>$q1,'stdinfo_sub'=>$q2);


        }
        else
        {
            return  false;
        }
    }
    public function Make_adm($myinfo)
    {  
        // DebugBreak();
        $inst_cd = $myinfo['Inst_cd'];
        $spl_cd = $myinfo['spl_cd'];
        $grp_selected = $myinfo['grp_selected'];
        $sess = Session;
        // $Year = Year-1;
        $Year = Year;
        if($grp_selected == FALSE)
        {
            $query = $this->db->query("Registration..sp_get_regInfo_9th_Make_adm $inst_cd,9,$Year,$sess");    
        }
        else
        {
            $query = $this->db->query("Registration..sp_get_regInfo_Groupwise_9th_Make_adm $inst_cd,9,$Year,$sess,$grp_selected");    
        }

        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();

        }
        else
        {
            return  false;
        }
    }
    public function Cancel_adm($myinfo) //sp_get_regInfo_9th_Cancel_adm
    {
        $inst_cd = $myinfo['Inst_cd'];
        $year = Year;
        $query = $this->db->query("Registration..sp_get_regInfo_9th_Cancel_adm $inst_cd,9,$year,1");    
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();

        }
        else
        {
            return  false;
        }
    }
    public function EditEnrolement($inst_cd)
    {

        // //DebugBreak();
        //$query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' => 10, 'iyear' => 2016, 'regpvt'=>1,));
        //sp_get_regInfo_spl_case
        $year = Year;
        $query = $this->db->query("Registration..sp_get_regInfo_9thAdm2016 $inst_cd,9,$year,1");    





        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
            // $q1 = array('stdinfo'=>$query->result_array()) ;
            //            for($i= 0; $i<$rowcount; $i++){
            //            $q1['stdinfo'][$i]['sub1'];
            //            }
            //            $q1['stdinfo']['sub1'];
            //            $q2 = $this->db->query("select SUB_ABR from tblsubject_newschm where SUB_CD in (1,2,3,4,5)");
            //            $q2 = array('stdinfo_sub'=>$q2->result_array()) ;
            //            $query = array('stdinfo_reg'=>$q1,'stdinfo_sub'=>$q2);


        }
        else
        {
            return  false;
        }
    }
    public function ReleaseBatch_INSERT($allinputdata){
        // //DebugBreak();
        $Inst_cd = $allinputdata['Inst_Id'];
        $batchid = $allinputdata['batchId'];
        $reason = $allinputdata['reason'];
        $branch = $allinputdata['branch'];
        $challan = $allinputdata['challan'];
        $amount = $allinputdata['amount'];
        $date = $allinputdata['date'];

        $query = $this->db->query("Registration..ReleaseBatch_INSERT $Inst_cd,$batchid,'$reason','$branch',$challan,$amount,'$date'");
        //$query = $this->db->insert('msadmissions2015', $data);//,'Fname' => $father_name,'BForm'=>$bay_form,'FNIC'=>$father_cnic,'Dob'=>$dob,'CellNo'=>$mob_number));
        return true;
    }
    public function EditEnrolement_data($formno,$year,$inst_cd)
    {

        //DebugBreak();
        if($year == 2016){
            $query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' =>9, 'iyear' => 2016, 'regpvt'=>1,'formNo'=>$formno));     
        }
        else{
            $query = $this->db->get_where(tblreg9th,  array('formNo' => $formno,'class'=>9,'iyear'=>$year,'sess'=>1));     
        } 

        //$query = $this->db->get_where(tblreg9th,  array('formNo' => $formno,'class'=>9,'iyear'=>$year,'sess'=>1));     

        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function Delete_NewEnrolement($formno)
    {
        $data=array('IsAdmission'=>0,'cDate'=> date('Y-m-d H:i:s'));
        $this->db->where('formNo',$formno);
        $this->db->update(tblreg9th,$data);
        return true;

    }
    public function GetFormNo($Inst_Id)
    {
        // //DebugBreak();
        $this->db->select('formno');
        $this->db->order_by("formno", "DESC");
        $formno = $this->db->get_where(tblreg9th, array('sch_cd' => $Inst_Id));
        $rowcount = $formno->num_rows();

        if($rowcount == 0 )
        {
            $formno =  ($Inst_Id.'0001' );
            return $formno;
        }
        else
        {
            $row  = $formno->result_array();
            $formno = $row[0]['formno']+1;
            return $formno;
        }

    }
    public function GetFormNoPVT()
    {
        // //DebugBreak();
        $this->db->limit(1);
        $this->db->select('formno');
        //  $this->db->order_by("formno", "DESC");
        $this->db->order_by("cast(formno as int)", "DESC");
        $formno = $this->db->get_where(tblreg9th, array('regpvt' => 2));
        $rowcount = $formno->num_rows();

        if($rowcount == 0 )
        {
            $formno =  (formno_9thpvt+1 );
            return $formno;
        }
        else
        {
            $row  = $formno->result_array();
            $formno = $row[0]['formno']+1;
            return $formno;
        }

    }  
    public function user_info($User_info_data)
    {
        //DebugBreak();
        $Inst_cd = $User_info_data['Inst_Id'];
        $RegGrp = $User_info_data['RegGrp'];
        $spl_cd = $User_info_data['spl_case'];

        $sub7 = $User_info_data['sub7'];
        // $forms_id = $User_info_data['forms_id'];
        $query = $this->db->get_where('Admission_online..tblinstitutes_all',  array('Inst_cd' => $Inst_cd));
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {

            if($spl_cd == "0")
            {
                if($RegGrp==1 || $RegGrp == 7 || $RegGrp == 8)
                {
                    $q1 = $this->db->query("select * from ".tblreg9th."  where sch_cd = ".$Inst_cd." and (isdeleted = 0 or isdeleted is null) and IsAdmission = 1 and (Batch_id_Adm is null or Batch_id_Adm = 0) and (spl_cd is null or spl_cd = 0) and grp_cd = 1 and sub7=".$sub7);    
                }
                else
                {
                    $q1  = $this->db->query("select * from ".tblreg9th."  where sch_cd = ".$Inst_cd." and (isdeleted = 0 or isdeleted is null) and IsAdmission = 1 and (Batch_id_Adm is null or Batch_id_Adm = 0) and (spl_cd is null or spl_cd = 0) and grp_cd = ".$RegGrp);    
                }

            }
            else{
                $q1 = $this->db->query("select * from ".tblreg9th." where sch_cd = ".$Inst_cd." and (isdeleted = 0 or isdeleted is null) and IsAdmission = 1 and (Batch_id_Adm is null or Batch_id_Adm = 0) and (spl_cd is null or spl_cd = 0) and Spec = ".$spl_cd);
            }

            $result_1 ;
            $nrowcount = $q1->num_rows();
            if($nrowcount > 0)
            {
                $result_1 = $q1->result_array();
            }
            else{
                return false;
            }
            $q2         = $this->getrulefee_new();
            $resultarr = array("info"=>$query->result_array(),"fee"=>$result_1,"rule_fee"=>$q2);
            return  $resultarr;
        }
        else
        {
            return  false;
        }
    }
    public function name_fname_dob_fnic_comp($name,$fname,$dob,$fnic)
    {
        $query = $this->db->get_where(tblreg9th,  array('name' => $name,'Fname'=>$fname,'FNIC' => $fnic,'Dob' => $dob,'IsDeleted'=>0));
        $rowcount = $query->num_rows();
        if ($rowcount > 0){
            return true;
        }
        else{
            return false;
        }
    }
    public function getuser_info($User_info_data)
    {
        //  DebugBreak();
        $Inst_cd = $User_info_data['Inst_Id'];
        $date = $User_info_data['date'];

        $query = $this->db->get_where('Admission_online..tblinstitutes_all',  array('Inst_cd' => $Inst_cd));
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {

            //$query2 = $this->db->get_where('Admission_Online..RuleFeeAdm', array('class' => 10,'sess' => 1, 'Start_Date <='=>$date,'End_Date >='=>$date));
            $query2 = $this->getrulefee_new();
            $resultarr = array("info"=>$query->result_array(),"rule_fee"=>$query2);
            return  $resultarr;
        }
        else
        {
            return  false;
        }
    }
    public function readmission_check($User_info_data)
    {
        // //DebugBreak();
        $Inst_cd = $User_info_data['Inst_Id'];
        $RollNo = $User_info_data['RollNo'];
        $spl_cd = $User_info_data['spl_case'];

        // $forms_id = $User_info_data['forms_id'];
        $query = $this->db->get_where('matric_new..tblbiodata',  array('rno' => $RollNo,'spl_cd' => 17,'Sch_cd'=>$Inst_cd,'class'=>9,'Iyear'=>2016,'sess'=>1));
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {

            $result_1 = $query->result_array();

            return  $result_1;
        }
        else
        {
            return  false;
        }
    }
    public function user_info_Formwise($User_info_data)
    {
        // //DebugBreak();
        $Inst_cd = $User_info_data['Inst_Id'];
        $forms_id =     str_replace(',',"','",$User_info_data['forms_id']) ;
        $query = $this->db->get_where('Admission_online..tblinstitutes_all',  array('Inst_cd' => $Inst_cd));
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {

            $q1         = $this->db->query("select * from Registration..tblreg9th where Sch_cd =$Inst_cd and (isdeleted = 0 or isdeleted is null) and (isAdmission = 1) and (Batch_id_Adm is null or Batch_id_Adm = 0)  and  formNo in('$forms_id')");
            // $this->db->from('Registration..MA_P1_Reg_Adm2016');
            //$this->db->where(array('Sch_cd'=>$Inst_cd,'IsDeleted'=>0,'Batch_ID'=>0));
            // $this->db->where_in('formNo',$forms_id);


            //$q1         = $this->db->where_in('Registration..MA_P1_Reg_Adm2016',array('Sch_cd'=>$Inst_cd,'IsDeleted'=>0,'Batch_ID'=>0,'formno'=>$forms_id));
            //$q1 = $this->db->get();
            //$result_1 = $q1->result_array();
            $nrowcount = $q1->num_rows();
            if($nrowcount > 0)
            {
                $result_1 = $q1->result_array();
            }
            $q2         = $this->getrulefee_new();
            $resultarr = array("info"=>$query->result_array(),"fee"=>$result_1,"rule_fee"=>$q2);
            return  $resultarr;
        }
        else
        {
            return  false;
        }
    }
    public function getreulefee($ruleID)
    {
        /*$q2         = $this->db->get_where('Registration..RuleFee_Reg_Nineth',array('Rule_Fee_ID'=>$ruleID));*/
        $q2         = $this->db->query('select * from Admission_online..RuleFeeAdm where class = 9 and sess = 1 and GETDATE() between start_date and End_date ');
        return $resultarr = $q2;
    }
    public function getrulefee_new()
    {
        //DebugBreak();
        $q2         = $this->db->query('select * from Admission_online..RuleFeeAdm where class = 9 and sess = 1 and GETDATE() between start_date and End_date ');
        return $resultarr = $q2->result_array();
    }
    public function Batch_Insertion($data)
    {
        //DebugBreak();

        $inst_cd = $data['inst_cd'];
        $total_fee = $data['updatedFee']['Amount'];
        $TotalAdmFee =$data['updatedFee']['Total_AdmFee'];
        $TotalLatefee = $data['updatedFee']['Total_LateAdmFee'];
        $Totalprocessing_fee = $data['updatedFee']['Total_ProcesFee'];
        $forms_id = $data['forms_id'];
        $todaydate = $data['todaydate'];
        $total_std = $data['updatedFee']['TotalStd'];
        //        EXEC Batch_Create @Inst_Cd = ".$user->inst_cd.",@UserId = ".$user->get_currentUser_ID()."@Amount = ".$tot_fee.",@Total_ProcessingFee = ".$prs_fee.",@Total_RegistrationFee = ".$reg_fee.",@Total_LateRegistrationFee =".$late_fee.",@Total_LateAdmissionFee = 0,@Valid_Date = '$today',@form_ids = '$forms_id'"

        $query=$this->db->query("execute Registration..Batch_Create_9th_Adm $inst_cd,$total_std,$total_fee,$TotalAdmFee,$Totalprocessing_fee,$TotalLatefee,'$forms_id'");

        $res = $query->result();
        $myBatch_Id = $res[0]->batchID;
        $challanno = $res[0]->ChallanNo;
        for ($i = 1; $i <= count($data['updatedFee']['data']); $i++) 
        {
            $sm_data[] = array(
                'AdmProcessFee'=>$data['updatedFee']['data'][$i]['AdmProcessFee'],'AdmFee'=>$data['updatedFee']['data'][$i]['AdmFee'],'AdmFine'=>$data['updatedFee']['data'][$i]['AdmFine'],'AdmTotalFee'=>$data['updatedFee']['data'][$i]['AdmTotalFee'],'Batch_id_Adm'=>$myBatch_Id,'challanno'=>$challanno,'cDate'=> date('Y-m-d H:i:s'),'formNo'=>$data['updatedFee']['data'][$i]['formNo']
            );
        }
        $this->db->update_batch(tblreg9th,$sm_data,'formNo');
        return true;
    }


    public function Batch_List($data)
    {
        ////DebugBreak();
        $inst_cd = $data['Inst_Id'];
        $q2         = $this->db->query('Select * from Registration..tblAdmbatch9th where Inst_cd = '.$inst_cd.' and Is_delete = 0 ');
        $result = $q2->result_array();
        return $result;
    }
    public function return_pdf($fetch_data)
    {
        // //DebugBreak();
        $Inst_cd = $fetch_data['Inst_cd'];
        $Batch_Id = $fetch_data['Batch_Id'];
        $query = $this->db->query("Registration..sp_get_reg_return_formInfo $Inst_cd,$Batch_Id");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function Print_challan_Form($fetch_data)
    {
        $Inst_cd = $fetch_data['Inst_cd'];
        $Batch_Id = $fetch_data['Batch_Id'];

        // //DebugBreak();
        $query = $this->db->query("Registration..sp_Admission_9th_regular_Batch_challan $Inst_cd,$Batch_Id");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    } 
    public function user_info_Batch_Id($User_info_data)
    {
        // //DebugBreak();
        $Inst_cd = $User_info_data['Inst_Id'];
        $RegGrp = $User_info_data['Batch_Id'];
        // $spl_cd = $User_info_data['spl_case'];

        // $forms_id = $User_info_data['forms_id'];
        $query = $this->db->get_where('Admission_online..tblinstitutes_all',  array('Inst_cd' => $Inst_cd));
        $rowcount = $query->num_rows();

        if($rowcount > 0)
        {
            // $this->db->select("*");
            // $this->db->from(tblreg9th);
            $where = '(IsDeleted=0 or IsDeleted is null) and Sch_cd ='.$Inst_cd.' and Batch_Id_Adm = '.$RegGrp;
            // $q1 = $this->db->where($where);

            $q1         = $this->db->get_where(tblreg9th,$where);    



            $result_1 ;
            $nrowcount = $q1->num_rows();
            if($nrowcount > 0)
            {
                $result_1 = $q1->result_array();
            }
            else{
                return false;
            }
            // DebugBreak();
            $q2         = $this->getrulefee_new();
            $resultarr = array("info"=>$query->result_array(),"fee"=>$result_1,"rule_fee"=>$q2);
            return  $resultarr;
        }
        else
        {
            return  false;
        }
    }
    public function Print_Form_Batchwise($fetch_data)
    {
        $Inst_cd = $fetch_data['Inst_cd'];
        $Batch_Id = $fetch_data['Batch_Id'];
        $query = $this->db->query("Registration..sp_get_adm_Print_Form_9th $Inst_cd,0,$Batch_Id");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function Print_Form_Groupwise($fetch_data)
    {
        $Inst_cd = $fetch_data['Inst_cd'];
        $Grp_cd = $fetch_data['grp_cd'];
        $Batch_Id = $fetch_data['Batch_Id'];
        $query = $this->db->query("Registration..sp_get_adm_Print_Form_9th $Inst_cd,$Grp_cd,$Batch_Id");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function Print_Form_Formnowise($fetch_data)
    {
        //  //DebugBreak();
        $Inst_cd = $fetch_data['Inst_cd'];
        $start_formno = $fetch_data['start_formno'];
        $end_formno = $fetch_data['end_formno'];
        $Batch_Id = $fetch_data['Batch_Id'];
        $query = $this->db->query("Registration..sp_get_adm_Print_Form_formnowise_9th $Inst_cd,'$start_formno','$end_formno',$Batch_Id");
        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
        }
        else
        {
            return  false;
        }
    }
    public function revenue_pdf($fetch_data)
    {
        //DebugBreak();
        $Inst_cd = $fetch_data['Inst_cd'];
        $this->db->select('formNo,name, Fname, sub6,sub7,sub8,grp_cd, IsReAdm,regFee,RegProcessFee,RegFineFee,RegTotalFee,Spec,challan_overall,challanno');
        $this->db->from(tblreg9th);
        if($fetch_data['option']==4)
        {
            $grp_cd = $fetch_data['grp_cd'];
            if($grp_cd == 7)
            {
                $sub_cd= 78;   
                $this->db->where(array('Sch_cd' => $Inst_cd,'grp_cd'=>1,'sub8'=>$sub_cd,'IsAdmission'=>1 ,'isdeleted'=>0 ,'batch_id > '=>0));
            }
            else if($grp_cd == 8)
            {
                $sub_cd= 43;  
                $this->db->where(array('Sch_cd' => $Inst_cd,'grp_cd'=>1,'sub8'=>$sub_cd,'IsAdmission'=>1 ,'isdeleted'=>0 ,'batch_id > '=>0));
            }
            else if ($grp_cd == 1  )
            {
                $sub_cd= 8; 
                $this->db->where(array('Sch_cd' => $Inst_cd,'grp_cd'=>1,'sub8'=>$sub_cd,'IsAdmission'=>1 ,'isdeleted'=>0 ,'batch_id > '=>0));  
            }
            else if ($grp_cd == 2 OR  $grp_cd== 5 )
            {
                $this->db->where(array('Sch_cd' => $Inst_cd,'grp_cd'=>$grp_cd,'IsAdmission'=>1 ,'isdeleted'=>0 ,'batch_id > '=>0)); 
            }
        }
        else if($fetch_data['option']==5)
        {
            $start_formno = $fetch_data['startformno'];
            $end_formno = $fetch_data['endformno'];
            $this->db->where('formNo >=', $start_formno);
            $this->db->where('formNo <=', $end_formno);
            $this->db->where('Sch_cd', $Inst_cd);
            $this->db->where('IsAdmission', 1);
            $this->db->where('isdeleted', 0);
            $this->db->where('batch_id >' , 0);
        }
        else  if($fetch_data['option']==6)
        {
            $grp_cd = $fetch_data['Grp_cd'];
            $this->db->where(array('Sch_cd' => $Inst_cd));
            $this->db->where('IsAdmission', 1);
            $this->db->where('isdeleted', 0);
            $this->db->where('batch_id >' , 0);

            if($grp_cd == 7)
            {
                $sub_cd= 78;   
                $this->db->where(array('grp_cd'=>1,'sub8'=>$sub_cd));  
            }
            else if($grp_cd == 8)
            {
                $sub_cd= 43;  
                $this->db->where(array('grp_cd'=>1,'sub8'=>$sub_cd));  
            }
            else if ($grp_cd == 1  )
            {
                $sub_cd= 8; 
                $this->db->where(array('grp_cd'=>1,'sub8'=>$sub_cd));  
            }
            else if ($grp_cd == 2 OR  $grp_cd== 5 )
            {
                $this->db->where(array('grp_cd' => $grp_cd)); 
            }





        }
        else  if($fetch_data['option']==9)
        {
            $grp_cd = $fetch_data['Grp_cd'];
            $this->db->where('Sch_cd' , $Inst_cd);
            $this->db->where('IsAdmission',1);
            $this->db->where('isdeleted', 0);
            $this->db->where('batch_id >' , 0);

        }
        $result_1 = $this->db->get()->result();
        //$query_1 = $this->db->get_where('Registration..fl_reg_batch_test',  array('Inst_Cd' => $Inst_cd,'Batch_ID'=>$Batch_Id));
        // $rowcount = $result_1->num_rows();
        //if($rowcount > 0){
        //    $query_1 = $query_1->result_array();
        return $result = array('stdinfo'=>$result_1);    
        //}
        // else
        //{
        //  return  false;
        //}
    }
    public function Spl_case_std_list($myinfo)
    {

        //DebugBreak();
        //$query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' => 10, 'iyear' => 2016, 'regpvt'=>1,));
        //sp_get_regInfo_spl_case
        $inst_cd = $myinfo['Inst_cd'];
        $spl_cd = $myinfo['spl_cd'];
        $grp_selected = $myinfo['grp_selected'];
        $year = Year;
        if($grp_selected == FALSE)
        {
            if($spl_cd == FALSE || ($spl_cd == "3"))
            {
                $query = $this->db->query("Registration..sp_get_regInfo $inst_cd,9,$year,1");    
            }

            else
            {
                $query = $this->db->query("Registration..sp_get_regInfo_spl_case $inst_cd,9,$year,1,$spl_cd");    
            }    
        }
        else
        {
            $query = $this->db->query("Registration..sp_get_regInfo_Groupwise $inst_cd,9,$year,1,$grp_selected");    
        }




        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            return $query->result_array();
            // $q1 = array('stdinfo'=>$query->result_array()) ;
            //            for($i= 0; $i<$rowcount; $i++){
            //            $q1['stdinfo'][$i]['sub1'];
            //            }
            //            $q1['stdinfo']['sub1'];
            //            $q2 = $this->db->query("select SUB_ABR from tblsubject_newschm where SUB_CD in (1,2,3,4,5)");
            //            $q2 = array('stdinfo_sub'=>$q2->result_array()) ;
            //            $query = array('stdinfo_reg'=>$q1,'stdinfo_sub'=>$q2);


        }
        else
        {
            return  false;
        }
    }
    public function bay_form_comp($bayformno)
    {
        $query = $this->db->get_where(tblreg9th,  array('BForm' => $bayformno,'IsDeleted'=>0));
        $rowcount = $query->num_rows();
        if ($rowcount > 0){
            return true;
        }
        else{
            return false;
        }
    }
    public function bay_form_fnic_dob_comp($bayformno,$fnic,$dob)
    {
        $query = $this->db->get_where(tblreg9th,  array('BForm' => $bayformno,'FNIC' => $fnic,'Dob' => $dob,'IsDeleted'=>0));
        $rowcount = $query->num_rows();
        if ($rowcount > 0){
            return true;
        }
        else{
            return false;
        }
    }
    public function challan_all($info)
    {

        // DebugBreak();

        $this->db->select('challan_overall');
        //  $this->db->where('challan_overall',False);
        $inst_cd =  $info['Inst_Id'];
        // $this->db->order_by("challan_overall", "DESC");
        $formno = $this->db->get_where(tblreg9th, array('sch_cd' => $inst_cd,'challan_overall '=>0 ,'isdeleted '=> 0));
        $rowcount = $formno->num_rows();

        if($rowcount > 0 )
        {
            $query = $this->db->query("Admission_online..sp_gen_challanNo_overall $inst_cd");
            //$query = $this->db->insert('msadmissions2015', $data);//,'Fname' => $father_name,'BForm'=>$bay_form,'FNIC'=>$father_cnic,'Dob'=>$dob,'CellNo'=>$mob_number));
            //  $challanno =  $query->result_array();  
        }

    }
    public function bay_form_fnic($bayformno,$fnic)
    {
        $query = $this->db->get_where(tblreg9th,  array('BForm' => $bayformno,'FNIC' => $fnic,'IsDeleted'=>0));
        $rowcount = $query->num_rows();
        if ($rowcount > 0){
            return true;
        }
        else{
            return false;
        }
    }
    public function getdelformno($formno,$dob)
    {
        $dob = date('Y-m-d',strtotime($dob));
        $table1 = 'admission_online..tblVerificationCode';
        $table2 = tblreg9th;
        $this->db->select("MobNo,formno,name");
        $this->db->from($table2);
        //join LEFT by default
        $this->db->where("regpvt = 2 AND formno = '$formno' AND dob ='$dob'  AND IsDeleted IS NULL");

        $query = $this->db->get();

        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            $data = $query->result_array();
            $six_digit_random_number = mt_rand(100000, 999999);
            $data2 = array(
                'formno'=> "$formno",
                'verificationCode'=> "$six_digit_random_number",
                'iyear'=> 2018,
                'class'=> 9,
                'sess'=> 1,
                'edate'=> date('Y-m-d H:i:s'),
                'isactive'=> 1,
                'trycount'=> 0,
            );  

            $res =  $this->db->insert($table1, $data2);

            if($res>0)
            {
                $data2['MobNo'] = $data[0]['MobNo'];
                $data2['name'] = $data[0]['name'];
                return $data2;
            }
            else
            {
                return 0;
            }


        }
        else
        {
            return  0;
        }

    }

    public function verifycode($formno,$vrCode)
    {

        $table1 = 'admission_online..tblVerificationCode';
        $table2 = tblreg9th;
        $this->db->select("verificationCode,formno,trycount");
        $this->db->from($table1);
        //join LEFT by default
        $this->db->where("isactive = 1 AND formno = '$formno' AND verificationCode ='$vrCode'");

        $query = $this->db->get();

        $rowcount = $query->num_rows();
        if($rowcount > 0)
        {
            $data = $query->result_array();
            $data2 = array(
                'isactive'=> 0,
                'cdate'=> date('Y-m-d H:i:s'),
            );  
            $this->db->where('verificationCode',"$vrCode");
            $res =  $this->db->update($table1, $data2);

            if($res == true)
            {
                $data2 = array(
                    'IsDeleted'=> 1,
                    'cdate'=> date('Y-m-d H:i:s'),
                );  
                $this->db->where('formno',"$formno");
                $res =  $this->db->update($table2, $data2);
            }

            return $res;

        }
        else
        {
            return  0;
        }

    }
}
?>
