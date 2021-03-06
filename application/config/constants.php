<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once( BASEPATH .'database/DB.php');
$db =& DB();

$query = $db->select('End_Date')
           -> where(array('class'=>10,'sess'=> 1,'isPrSub' => 1))->get('admission_online..RuleFeeAdm');

$result = $query->result();

$singleDate = date('d-m-Y',strtotime($result[0]->End_Date)) ;
$DoubleDate = date('d-m-Y',strtotime($result[1]->End_Date));
$TripleDate = date('d-m-Y',strtotime($result[2]->End_Date));

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

//define('PRIVATE_IMAGE_PATH9TH', 'C:\inetpub\vhosts\bisegrw.edu.pk\Share Images\uploads\SSC\admission\2018\9th\private\ ');

define('PRIVATE_IMAGE_PATH9TH', 'F:/Xampp/htdocs/adminbise/uploads/');

define('PRIVATE_IMAGE_PATH', 'uploads/2017/10th/private/');
define('RE_ADMISSION_TBL', 'matric_new..vw9th17');
define('REGULAR_IMAGE_PATH', 'uploads/2016/10th/regular/');
define('Session','1');  // 1 for Annual and 2 for Supply
define('Year','2017');  
define('YEAR','2017');  
define('ISREADMISSION','0');  
define('lastdate','23-12-2016');
define('GET_PRIVATE_IMAGE_PATH', 'C:/inetpub/vhosts/bisegrw.edu.pk/Share Images/uploads/SSC/admission/2018/10th/annual/private/');
define('GET_IMAGE_PATH_9th_Admission_Annual', '../uploads/2016/regular/');
define('GET_IMAGE_PATH_9th_Admission_Annual1', 'uploads/2016/regular/');
define('GET_PRIVATE_IMAGE_PATH_COPY','');
define('Insertion_tbl','Admission_online..tblMAdm');   // For Matric Admissions
define('Batch_tbl','Admission_online..tblRegBatch10th'); // For Matric Admission Batch
define('INSERT_TBL','Admission_online..tblMAdm'); // for insertion matric supply
define('Insert_sp','admission_online..MAdm_sp_insert'); // for insertion matric supply
define('Insert_sp_matric_annual','Admission_online..tblMAdmInsert'); // for insertion matric Annual
define('formprint_sp','Admission_online..sp_form_data');    // for selection matric supply
define('formprint_sp_9th','Registration..sp_form_data_9thAdm');    // for selection 9th Annual
define('formprint_sp_matric_annual','Admission_online..sp_form_data');    // for selection matric Annual
define('return_pdf_isPicture','1');
define('CURRENT_SESS','2017-2019');
////9th registration
define('IMAGE_PATH', 'uploads/2017/reg/');
define('IMAGE_PATH2', 'uploads/2017_backup/');
define('BARCODE_PATH', 'uploads/pdfs/');
define('BARCODE_PATH1', '../../assets/pdfs/');
define('SINGLE_LAST_DATE', '2017-05-26');
define('DOUBLE_LAST_DATE', '2017-09-19');
define('Correction_Last_Date','2017-10-31');
define('tblreg9th','Registration..tblReg9th');
define('regyear','2017');
define ('sessReg','2017-2019');
define('corr_bank_chall_class','9th');
define('assets', 'assets/img/');
define('CORR_IMAGE_PATH', 'uploads/2017/correction/');
define('DOB_LIMIT','01-07-2005'); // dd-mm-Y format;

//===============10TH Regular/Private Admission Matric challan varaible
define('currdate','date("d-m-Y");');
define('SingleDateFee',$singleDate);
define('DoubleDateFee', $DoubleDate);
define('TripleDateFee', $TripleDate);

define('SingleDateFee9th',$singleDate);
define('DoubleDateFee9th', $DoubleDate);
define('TripleDateFee9th', $TripleDate);
define('getinfo','admission_online..tblAdmissionDataForSSC');
//define('DIRPATH','C:\inetpub\vhosts\bisegrw.com\Share Images\OldPics'); 
define('DIRPATH','C:\inetpub\vhosts\bisegrw.com\Share Images\\'); 
define('DIRPATH9th','C:\inetpub\vhosts\bisegrw.com\ssc.bisegrw.com\uploads\2017\reg'); 
define('DIRPATHOTHER','C:\inetpub\vhosts\bisegrw.com\registration.bisegrw.com\uploads\other'); 
define('corr_bank_chall_class1','10th');
define('CURRENT_SESS1','2018'); 
define('CURRENT_SESS1_year','2018'); 
define('class_for_9th_Adm','9th');
define('formnovalid',100000);// Starting Form No. for Pvt 10th candidates.
define('formno_9thpvt',600000); // Starting Form No. for Pvt 9th candidates. 
define('IMAGEPATH', '\\\\192.168.0.4\pictures$\\');
//================ RollNumber Slips variables ========================
define('mClass','10'); 
define('mClass1','12'); 
define('mSession','2'); 
define('mSession1','1'); 
define('mClass2','9'); 
define('mYear','2017'); 
define('PVT_TITLE','Download Roll Number Slip For S.S.C Supply 2017'); 
define('PVT_TITLE_INTER','Download Roll Number Slip For H.S.S.C Supply 2016'); 



