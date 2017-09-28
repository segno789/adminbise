<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

define('IMAGEPATH', '\\192.168.0.4\pictures$\\');
define('PRIVATE_IMAGE_PATH9TH', 'uploads/2016/9th/private/');
define('DIRPATH10TH','F:\xampp\htdocs\Share Images\\'); 
define('PRIVATE_IMAGE_PATH', 'uploads/2017/10th/private/');
define('Insertion_tbl','tblMAdm');   // For Matric Admissions
define('Batch_tbl','Admission_online..tblRegBatch10th'); // For Matric Admission Batch

define('REGULAR_IMAGE_PATH', 'uploads/2016/10th/regular/');
define('Session','2');  // 1 for Annual and 2 for Supply
define('Year','2017');
define('YEAR','2017');  
define('is9thactive','0');  
define('lastdate','14-12-2017');
define('GET_PRIVATE_IMAGE_PATH', '../');
define('GET_PRIVATE_IMAGE_PATH_10', 'F:\xampp\htdocs\Matric_Admission\uplaods\2017\private\\');
define('GET_IMAGE_PATH_9th_Admission_Annual', '../uploads/2016/regular/');
define('GET_IMAGE_PATH_9th_Admission_Annual1', 'uploads/2016/regular/');
define('GET_PRIVATE_IMAGE_PATH_COPY','');


define('INSERT_TBL','tblMAdm'); // for insertion matric supply
define('Insert_sp','MSAdm2016_sp_insert_temp'); // for insertion matric supply
define('Insert_sp_matric_annual','Admission_online..tblMAdmInsert'); // for insertion matric Annual
define('formprint_sp','sp_form_data_temp');    // for selection matric supply
define('formprint_sp_9th','Registration..sp_form_data_9thAdm');    // for selection 9th Annual
define('formprint_sp_matric_annual','Admission_online..sp_form_data');    // for selection matric Annual
define('formnovalid','10000');
define('return_pdf_isPicture','1');
define('CURRENT_SESS','2017-2019');

////9th registration
define('IMAGE_PATH', 'uploads/2017/');
define('IMAGE_PATH2', 'uploads/2017_backup/');
define('BARCODE_PATH', 'uploads/pdfs/');
define('BARCODE_PATH1', '../../assets/pdfs/');
define('assets', 'assets/img/');
define('SINGLE_LAST_DATE', '2017-05-30');
define('DOUBLE_LAST_DATE', '2017-06-15');
define('Correction_Last_Date','2017-10-31');
define('tblreg9th','Registration..tblReg9th');
define('regyear','2017');
define ('sessReg','2017-2019');
define('corr_bank_chall_class','9th');
/////11th registration

define('IMAGE_PATH11', 'uploads/2016/');
define('IMAGE_PATH211', 'uploads/2016_backup/');
define('BARCODE_PATH11', 'uploads/assets/pdfs/');
define('SINGLE_LAST_DATE11', '2017-08-08');
define('DOUBLE_LAST_DATE11', '2017-08-15');

define('currdate','date("d-m-Y");');

define('SingleDateFee','08-08-2017');
define('DoubleDateFee', '15-08-2017');
define('TripleDateFee', '22-08-2017');

define('SingleDateFee9th','08-08-2017');
define('DoubleDateFee9th', '15-08-2017');
define('TripleDateFee9th', '22-08-2017');
                                
define('getinfo','tblAdmissionDataForSSC');
define('Insert_table','admission_online..MAAdm');

/*define('DIRPATH','D:/xampp/htdocs/Share Images/'); */
define('DIRPATH',''); 

//===============10TH Regular Admission Matric challan varaible
define('corr_bank_chall_class1','10th');
define('CURRENT_SESS1','2017'); 
define('CURRENT_SESS1_year','2017'); 
define('class_for_9th_Adm','9th');
define('formno_9thpvt',60000); // Starting Form No. for Pvt 9th candidates. 

//================ RollNumber Slips variables ========================
define('mClass','10'); 
define('mClass1','12'); 
define('mSession','1'); 
define('mSession1','1'); 
define('mClass2','9'); 
define('mYear','2017'); 
define('PVT_TITLE','Download Roll Number Slip For S.S.C Supply 2016'); 
define('PVT_TITLE_INTER','Download Roll Number Slip For H.S.S.C Supply 2016'); 









