<?php
class Dashboard_model extends CI_Model {
    public function __construct() {
        $this->load->database(); 
    }
    public function getInstInfo($username) 
    {
        // DebugBreak();

        $query = $this->db->order_by('iyear', 'DESC')->get_where('Registration..tblinst_stats', array('inst_cd' => $username,'class'=>9));
        $rowcount = $query->num_rows();
        if($rowcount >0)
        {

            $allinfo = $query->result_array();
            return $allinfo;
        }
        else
        {
            return  false;; 
        }
    }
    public function getInstgrading($username) 
    {
        //  DebugBreak();

        $query = $this->db->order_by('iyear', 'ASC')->get_where('Registration..tblInstGrade', array('inst_cd' => $username,'class'=>10));
        $rowcount = $query->num_rows();
        if($rowcount >0)
        {

            $allinfo = $query->result_array();
            return $allinfo;
        }
        else
        {
            return  false;; 
        }
    }
    public function Update_Pwd($myinfo)
    {
        // DebugBreak();
        $inst_cd = $myinfo['Inst_cd'];
        $oldPwd = $myinfo['oldPwd'];
        $Pwd = $myinfo['Pwd'];
        $Pwd1 = $myinfo['Pwd1'];

        $query = $this->db->query("admission_online..spChangePassword $inst_cd,'$oldPwd','$Pwd','$Pwd1'");    

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

        //DebugBreak();
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

        //DebugBreak();
        //$query = $this->db->get_where('matric_new..tblbiodata', array('sch_cd' => $inst_cd,'class' => 10, 'iyear' => 2016, 'regpvt'=>1,));
        $isGovt = $allinputdata['isGovt'];
        $Profile_email = $allinputdata['Profile_email'];
        $Profile_password = "";
        $Profile_phone = $allinputdata['Profile_phone'];
        $Profile_cell = $allinputdata['Profile_cell'];
        $isInserted = $allinputdata['isInserted'];
        $Inst_Id = $allinputdata['Inst_Id'];
        $emis = $allinputdata['emis'];
        $dist = $allinputdata['dist_cd'];
        $teh = $allinputdata['teh_cd'];
        $zone = $allinputdata['zone_cd'];
        $query = $this->db->query("Registration..Profile_UPDATE $Inst_Id,$isInserted,$isGovt,'$Profile_email','$Profile_password','$Profile_phone','$Profile_cell','$emis',$dist,$teh,$zone");
        return  true;

    }
}
?>
