<div class="dashboard-wrapper class wysihtml5-supported">
    <div class="left-sidebar">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Inter Admission Form  <h4 class="guidlines blink_text"><?php echo 'Form No:   '.@$formno . '  ';?></h4>
                        </div>
                    </div>
                    <div class="widget-body">

                        <form class="form-horizontal no-margin" action="<?php  echo base_url(); ?>index.php/BiseCorrection/NewEnrolment_insert_OtherBoard11th" method="post" enctype="multipart/form-data" name="myform" id="myform">
                            <div class="control-group">
                                <h4 class="span4">Personal Information :</h4>
                                <div class="controls controls-row">
                                    <label class="control-label span4">
                                        <img id="image_upload_preview" style="width:140px; height: 140px;" alt="Candidate Image" />
                                    </label> 
                                    <label class="control-label span1" >
                                        <input type='file' id="inputFile" name="pic" onchange="return ValidateFileUpload(this);"/>
                                    </label> <!--echo GET_PRIVATE_IMAGE_PATH. $data[0]['picpath']; -->
                                    <!-- <img id="image_upload_preview" style="width:140px; height: 140px;" src="<?php //echo GET_PRIVATE_IMAGE_PATH. $data[0]['picpath']?>" alt="Candidate Image" />
                                    <input type="hidden" value="  //$data[0]['picpath'] " name="pic"> -->
                                </div>
                            </div>
                            <div class="control-group">
                                <label id="ErrMsg" class="control-label span2" style=" text-align: left;"><?php ?></label>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Institute Code:
                                </label>
                                <div class="controls controls-row">
                                    <input class="span3"  type="text" id="inst_cd_other" style="text-transform: uppercase;" name="inst_cd_other" placeholder="Institute Code" maxlength="6" required  >
                                    <label class="control-label span2" for="">

                                    </label> 

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Candidate Name:
                                </label>
                                <div class="controls controls-row">
                                    <input class="span3"  type="text" id="cand_name" style="text-transform: uppercase;" name="cand_name" placeholder="Candidate Name" maxlength="60" >
                                    <label class="control-label span2" for="lblfather_name">
                                        Father's Name :
                                    </label> 
                                    <input class="span3" id="father_name" name="father_name" style="text-transform: uppercase;" type="text" placeholder="Father's Name" maxlength="60"   required="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Bay Form No :
                                </label>
                                <div class="controls controls-row">
                                    <input class="span3" type="text" id="bay_form" name="bay_form" maxlength="15" placeholder="Bay Form No."  required="required" >
                                    <label class="control-label span2" for="father_cnic">
                                        Father's CNIC :
                                    </label> 
                                    <input class="span3" id="father_cnic" name="father_cnic" type="text" placeholder="34101-1111111-1"   required="required" >
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Date of Birth:
                                </label>

                                <div class="controls controls-row">
                                    <input class="span3" type="text" name="dob" id="dob" readonly="readonly" placeholder="Date of Birth" value="" required = "required">
                                    <label class="control-label span2" >
                                        Mobile Number :
                                    </label> 
                                    <input class="span3" id="mob_number" name="mob_number" type="text" placeholder="0300-123456789"  required="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    MEDIUM:
                                </label>
                                <div class="controls controls-row">
                                    <select id="medium" class="dropdown span3" name="medium">
                                        <?php
                                        $med = $data['0']['med'] ;
                                        // $med = 2; 
                                        if($med == 1)
                                        {
                                            echo  "<option value='1' selected='selected'>Urdu</option> <option value='1'>English</option>";
                                        }
                                        else
                                        {
                                            echo  "<option value='2' >Urdu</option> <option value='2' selected='selected'>English</option>";
                                        }
                                        ?>
                                    </select>


                                    <label class="control-label span2" >
                                        Previous Result:
                                    </label> 
                                    <input type="text" name="prevResult" id="prevResult" class="span3" placeholder="i.e 350 or E,U">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Mark of Identification :
                                </label>
                                <div class="controls controls-row">
                                    <input class="span3" type="text" id="MarkOfIden" style="text-transform: uppercase;" name="MarkOfIden"  required="required" maxlength="60" >
                                    <label class="control-label span2" >
                                        Speciality:
                                    </label> 
                                    <select id="speciality"  class="span3" name="speciality">
                                        <?php
                                        echo  "<option value='0' selected='selected'>None</option>  
                                        <option value='1'>Deaf &amp; Dumb</option>
                                        <option value='2'>Board Employee</option>";
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label span1" >
                                    Nationality :
                                </label>
                                <div class="controls controls-row">  
                                    <?php
                                    $nat = $data[0]['nat'];

                                    echo 
                                    "<label class='radio inline span1'><input type='radio' value='1' id='nationality' checked='checked' name='nationality'> Pakistani</label>
                                    <label class='radio inline span2'><input type='radio'  id='nationality1' value='2' name='nationality'> Non Pakistani</label>";

                                    ?>
                                    <label class="control-label span3" style="margin-left: -100px;" for="gender1">
                                        Gender :
                                    </label> 
                                    <?php
                                    $gender = $data[0]['sex'];

                                    echo 
                                    "<label class='radio inline span1'><input type='radio' id='gender1' value='1' checked='checked'   name='gender'> Male</label> 
                                    <label class='radio inline span1'><input type='radio' id='gender2' value='2'  name='gender'  > Female </label> " ;

                                    ?>
                                    <input type="hidden" name="gend" >
                                    <input type="hidden" name="category" id="category" >


                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Hafiz-e-Quran :
                                </label>
                                <div class="controls controls-row">
                                    <label class='radio inline span1'><input type='radio' id='hafiz1' value='1'  checked='checked' name='hafiz'> No</label>
                                    <label class='radio inline span1'><input type='radio' id='hafiz2' value='2' name='hafiz'> Yes</label>    
                                    <label class="control-label span3" >
                                        Religion :
                                    </label> 
                                    <?php
                                    $rel = $data[0]['rel'];

                                    echo
                                    "<label class='radio inline span1'><input type='radio' id='religion' class='rel_class' value='1' checked='checked' name='religion'> Muslim
                                    </label><label class='radio inline span1'><input type='radio' id='religion1' class='rel_class'  value='2' name='religion'> Non Muslim</label>" ;

                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label span1" >
                                Residency :
                            </label>
                            <div class="controls controls-row">  
                                <?php
                                $resid = $data[0]['RuralORUrban'];

                                echo " <label class='radio inline span1'><input type='radio' value='1' id='UrbanRural' checked='checked' name='UrbanRural'> Urban
                                </label><label class='radio inline span2'><input type='radio'  id='UrbanRural' value='2' name='UrbanRural'>  Rural </label>";

                                ?>

                            </div>
                            <div class="control-group">
                                <label class="control-label span1" style="margin-top: 25px;">
                                    Address :
                                </label>
                                <div class="controls controls-row">
                                    <textarea style="height:150px; margin-top: 25px; text-transform: uppercase;"  id="address" class="span8" name="address" required="required"><?php
                                        echo $data[0]['addr'];
                                    ?></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="control-group">
                                <h4 class="span4">Old Exam Information :</h4>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Rno :
                                </label>
                                <div class="controls controls-row">
                                    <input class="span3" type="text" id="oldrno" style="text-transform: uppercase;" name="oldrno" value="<?php  echo  $data['0']['rno']; ?>" required="required" maxlength="60" >
                                    <label class="control-label span2" >
                                        Year:
                                    </label> 
                                    <select class="span3"  name="oldyear" id = "oldyear" >
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                    </select>

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Session :
                                </label>
                                <div class="controls controls-row">
                                    <select class="span3" id="oldsess" name="oldsess">
                                        <option value="1">Annual</option>
                                        <option value="2">Supplementary</option>
                                    </select>

                                    <label class="control-label span2" >
                                        Board:
                                    </label> 
                                    <select class="span3" id="oldboard" name="oldboard">
                                        <option value="2" <?php if(@$oldBrd_cd == 2) echo 'selected' ?>>BISE,  LAHORE</option>
                                        <option value="3" <?php if(@$oldBrd_cd == 3) echo 'selected' ?>>BISE,  RAWALPINDI</option>
                                        <option value="4" <?php if(@$oldBrd_cd == 4) echo 'selected' ?>>BISE,  MULTAN</option>
                                        <option value="5" <?php if(@$oldBrd_cd == 5) echo 'selected' ?>>BISE,  FAISALABAD</option>
                                        <option value="6" <?php if(@$oldBrd_cd == 6) echo 'selected' ?>>BISE,  BAHAWALPUR</option>
                                        <option value="7" <?php if(@$oldBrd_cd == 7) echo 'selected' ?>>BISE,  SARGODHA</option>
                                        <option value="8" <?php if(@$oldBrd_cd == 8) echo 'selected' ?>>BISE,  DERA GHAZI KHAN</option>
                                        <option value="9" <?php if(@$oldBrd_cd == 9) echo 'selected' ?>>FBISE, ISLAMABAD</option>
                                        <option value="10" <?php if(@$oldBrd_cd == 10) echo 'selected' ?>>BISE, MIRPUR</option>
                                        <option value="11" <?php if(@$oldBrd_cd == 11) echo 'selected' ?>>BISE, ABBOTTABAD</option>
                                        <option value="12" <?php if(@$oldBrd_cd == 12) echo 'selected' ?>>BISE, PESHAWAR</option>
                                        <option value="13" <?php if(@$oldBrd_cd == 13) echo 'selected' ?>>BISE, KARACHI</option>
                                        <option value="14" <?php if(@$oldBrd_cd == 14) echo 'selected' ?>>BISE, QUETTA</option>
                                        <option value="15" <?php if(@$oldBrd_cd == 15) echo 'selected' ?>>BISE, MARDAN</option>
                                        <option value="16" <?php if(@$oldBrd_cd == 16) echo 'selected' ?>>FBISE, ISLAMABAD</option>
                                        <option value="17" <?php if(@$oldBrd_cd == 17) echo 'selected' ?>>CAMBRIDGE</option>
                                        <option value="18" <?php if(@$oldBrd_cd == 18) echo 'selected' ?>>AIOU, ISLAMABAD</option>
                                        <option value="19" <?php if(@$oldBrd_cd == 19) echo 'selected' ?>>BISE, KOHAT</option>
                                        <option value="20" <?php if(@$oldBrd_cd == 20) echo 'selected' ?>>KARAKURUM</option>
                                        <option value="21" <?php if(@$oldBrd_cd == 21) echo 'selected' ?>>MALAKAN</option>
                                        <option value="22" <?php if(@$oldBrd_cd == 22) echo 'selected' ?>>BISE, BANNU</option>
                                        <option value="23" <?php if(@$oldBrd_cd == 23) echo 'selected' ?>>BISE, D.I.KHAN</option>
                                        <option value="24" <?php if(@$oldBrd_cd == 24) echo 'selected' ?>>AKUEB, KARACHI</option>
                                        <option value="25" <?php if(@$oldBrd_cd == 25) echo 'selected' ?>>BISE, HYDERABAD</option>
                                        <option value="26" <?php if(@$oldBrd_cd == 26) echo 'selected' ?>>BISE, LARKANA</option>
                                        <option value="27" <?php if(@$oldBrd_cd == 27) echo 'selected' ?>>BISE, MIRPUR(SINDH)</option>
                                        <option value="28" <?php if(@$oldBrd_cd == 28) echo 'selected' ?>>BISE, SUKKUR</option>
                                        <option value="29" <?php if(@$oldBrd_cd == 29) echo 'selected' ?>>BISE, SWAT</option>
                                        <option value="30" <?php if(@$oldBrd_cd == 30) echo 'selected' ?>>SBTE KARACHI</option>
                                        <option value="31" <?php if(@$oldBrd_cd == 31) echo 'selected' ?>>PBTE, LAHORE</option>
                                        <option value="32" <?php if(@$oldBrd_cd == 32) echo 'selected' ?>>AFBHE RAWALPINDI</option>
                                        <option value="33" <?php if(@$oldBrd_cd == 33) echo 'selected' ?>>BIE, KARACHI</option>
                                        <option value="34" <?php if(@$oldBrd_cd == 34) echo 'selected' ?>>BISE SAHIWAL</option>
                                        <!-- <option value="35" <?php if(@$oldBrd_cd == 35) echo 'selected' ?>>ISLAMIC UNIVERSITY</option> -->                               
                                    </select>

                                    <input type="hidden" class="span3" id="oldClass" name="oldClass"  value="<?php echo $data[0]['class'];?>"/>     
                                    <input type="hidden" class="span3" id="oldboardid" name="oldboardid"  value="<?php  echo $data[0]['Brd_cd'];?>"/>     
                                </div>
                            </div>
                          
                            <div id="instruction" style="display:none; width:700px" >
                                <!--  <img src="<?php // echo base_url(); ?>assets/img/admission_form.jpg" border="0" width="10000" height="840" alt="admission_form.jpg">
                                <img src="<?php //echo base_url(); ?>assets/img/instructions.jpg" border="0" width="10000" height="840" alt="admission_form.jpg"> -->
                            </div>
                            
                            <hr>
                            <div class="control-group">
                                <h4 class="span4">Exam Information :</h4>
                                <div class="controls controls-row">
                                    <label class="control-label span2">

                                    </label> 

                                </div>
                            </div>
                            <div class="control-group">
                                <input type="hidden" value="<?=  $data[0]['grp_cd']?>" name="pergrp">
                                <label class="control-label span1" >
                                    Study Group :
                                </label>
                                <div class="controls controls-row">
                                    <select id="std_group" class="dropdown span6"  name="std_group">
                                    <option value="0">Select Group</option>
                                       <option value='1'>Pre-Medical</option>
                                            <option value='2'>Pre-Engineering</option>
                                            <option value='3'>Humanities</option>
                                            <option value='4'>General Science</option>
                                            <option value='5'>Commerce</option>
                                            <option value='6'>Home Economics</option>

                                    </select>                                            
                                </div>
                            </div>




                            <div class="control-group">
                                <label class="control-label span12" style="width: 366px; font-weight: bold;" >
                                    Choose Subjects(Elective Subjects are Enabled Only)   
                                    </br></br></br>

                                    <?php



                                    ////DebugBreak();
                                    @$exam_type = $data[0]['exam_type'];
                                    @$grp_cd = $data[0]['grp_cd'];
                                    @$oldcls = $data[0]['class'];
                                    $Status =  $data[0]['status'];

                                    ?>
                                </label> 
                            </div>
                            </br></br>
                            <div class="control-group">
                                <div class="control row controls-row">
                                    <label class="control-label span3 " id="lblpart1cat" name="lblpart1cat" style="text-decoration: underline; font-weight: bold;" >
                                        PART-I Subjects
                                    </label>
                                    <label class="control-label span3 " id="lblpart2cat" name="lblpart2cat" style="text-decoration: underline; font-weight: bold;" >
                                        PART-II Subjects
                                    </label>
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <select id="sub1" class="span3 dropdown" name="sub1">

                                    </select> 

                                    <select id="sub1p2" class="span3 dropdown" name="sub1p2">

                                    </select> 
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <select id="sub2"  name="sub2" class="span3 dropdown">

                                    </select>
                                    <select id="sub2p2" class="span3 dropdown" name="sub2p2">

                                    </select> 
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <select id="sub3" class="span3 dropdown" name="sub3">

                                    </select> 
                                    <select id="sub3p2" class="span3 dropdown" name="sub3p2">
                                                   <option value="91">PAKISTAN STUDIES</option>
                                    </select> 
                                </div>
                              
                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <select id="sub4"  name="sub4" class="span3 dropdown">

                                    </select>
                                    <select id="sub4p2" class="span3 dropdown" name="sub4p2">

                                    </select> 
                                </div>

                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <select id="sub5" class="span3 dropdown" name="sub5" selected="selected">

                                    </select> 
                                    <select id="sub5p2" class="span3 dropdown" name="sub5p2" selected="selected">

                                    </select> 
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <select id="sub6"  name="sub6" class="span3 dropdown" selected="selected">

                                    </select>
                                    <select id="sub6p2"  name="sub6p2" class="span3 dropdown" selected="selected">

                                    </select>
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <select id="sub7" class="span3 dropdown" name="sub7" selected="selected">

                                    </select> 
                                    <select id="sub7p2" class="span3 dropdown" name="sub7p2" selected="selected">

                                    </select> 
                                </div> 
                                   <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <select id="sub8"  name="sub8" class="span3 dropdown">

                                    </select>
                                    <select id="sub8p2"  name="sub8p2" class="span3 dropdown">
                                    </select>
                                </div>
                            </div>
                            <div>
                                <!-- <input type="hidden" name="oldclass" id="oldclass" value="<?php echo @$oldcls; ?>">
                                <input type="hidden" name="exam_type" id="exam_type" value="<?php echo @$exam_type = $data[0]['exam_type']; ?>">
                                <input type="hidden" name="oldexam_type" id="oldexam_type">
                                <input type="hidden" name="grppre" id="grppre" value="<?php  echo @$grp_cd = $data[0]['grp_cd']; ?>">



                                -->
                            </div>
                            <div class="form-actions no-margin">
                                <button type="submit" onclick="return checks()" name="btnsubmitUpdateEnrol" class="btn btn-large btn-info " >
                                    Save Form
                                </button>
                                <a href="<?php echo base_url(); ?>assets/pdfs/instructions.pdf" download="Instructions.pdf" style="display: none;" class="btn btn-large btn-info" >Download Instruction</a>
                                <input type="button" class="btn btn-large btn-danger" value="Cancel" id="btnCancel" name="btnCancel" onclick="return CancelAlert();" >
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        <script src="<?php echo base_url(); ?>assets/js_matric/jquery-1.8.3.js"></script>
                        <script type="text/javascript">
                            function ValidateFileUpload() {                                                                                                        
                                var fuData = document.getElementById('inputFile');
                                var FileUploadPath = fuData.value;
                                if (FileUploadPath == '') {
                                    alert("Please upload an image");
                                    jQuery('#image_upload_preview').removeAttr('src');
                                } 
                                else {
                                    var Extension = FileUploadPath.substring(
                                        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
                                    if (Extension == "jpeg" || Extension == "jpg") {
                                        if (fuData.files && fuData.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                                $('#image_upload_preview').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(fuData.files[0]);
                                        }
                                    } 
                                    else {
                                        $('#inputFile').removeAttr('value');
                                        jQuery('#image_upload_preview').removeAttr('src');
                                        alert("Image only allows file types of JPEG. ");
                                        return false;
                                    }
                                }
                                var file_size = $('#inputFile')[0].files[0].size;
                                if(file_size>20480) {                                    
                                    $('#inputFile').removeAttr('value');
                                    jQuery('#image_upload_preview').removeAttr('src');
                                    alert("File size can be between 20KB"); 
                                    return false;
                                } 
                            }

                         
                            function checks(){
                                var status  =  check_NewEnrol_validation_otherboard11();
                                if(status == 0)
                                {
                                    return false;    
                                }
                                else
                                {
                                    return true;
                                } 
                            }
                             function  check_NewEnrol_validation_otherboard11(){
         debugger;
        var name =  $('#cand_name').val();
        var dist_cd= $('#dist option:selected').val();
        var teh_cd= $('#teh').val();
        var zone_cd= $('#zone').val();
        var pp_cent= $('#pp_cent').val();           
        var sub6p1 = $('#sub5').val();
        var sub6p2 = $('#sub6').val();           
        var sub7p1 = $('#sub7').val();
        var sub7p2 = $('#sub8').val();                      
        var ex_type = $('#exam_type').val();
        var mobNo = $('#mob_number').val();
        var bFormNo = $('#bay_form').val();
        var grp_cd = $('#std_group').val();
        var brd_cd = $('#brd_cd').val();
        var fName = $('#father_name').val();
        var FNic = $('#father_cnic').val();
        var dob = $('#dob').val();
        var address = $('#address').val();
        var image = $('#image').val();
        var MarkOfIdent = $('#MarkOfIden').val();
        var Inst_Rno = $('#Inst_Rno').val();
        var status = 0;
        // alert('sub6 '+sub6p1+ ' and '+ sub6p2);
        if(name == "" ||  name == undefined){
            $('#ErrMsg').show();  
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
           // $('#ErrMsg').html("<b>Please Enter your  Name </b>");    
            alertify.error("Please Enter your  Name")
            $('#cand_name').focus(); 
            return status;
        }
        else if(fName == "" || fName == undefined){
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
           // $('#ErrMsg').html("<b>Please Enter your Father's Name  </b>");   
             alertify.error("Please Enter your Father's Name  ") 
            $('#father_name').focus(); 
            return status;
        }   

        else if(bFormNo == "" || bFormNo == 0 || bFormNo == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
           // $('#ErrMsg').html("<b>Please Enter your bay-Form</b>"); 
            alertify.error("Please Enter your bay-Form") 
            $('#bay_form').focus();  
            return status; 
        }
        else if(FNic == "" || FNic.length == undefined )
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
           // $('#ErrMsg').html("<b>Please Enter your Father's CNIC</b>"); 
             alertify.error("Please Enter your Father's CNIC") 
            $('#father_cnic').focus();  
            return status; 
        }

        else if(dob == "" || dob.length == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            //$('#ErrMsg').html("<b>Please Enter your Date of Birth</b>"); 
             alertify.error("Please Enter your Date of Birth") 
            $('#dob').focus(); 
            return status;  
        }

        else if(mobNo == "" || mobNo == 0 || mobNo == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
           // $('#ErrMsg').html("<b>Please Enter your Mobile No.</b>"); 
             alertify.error("Please Enter your Mobile No.") 
            $('#mob_number').focus();   
            return status;  
        }
       
        else if(MarkOfIdent == "" || MarkOfIdent == 0 || MarkOfIdent == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            //$('#ErrMsg').html("<b>Please Enter your Mark of Indentification</b>"); 
             alertify.error("Please Enter your Mark of Indentification") 
            $('#MarkOfIden').focus();   
            return status;  
        }
        else if(address == "" || address == 0 || address.length ==undefined )
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            $('#ErrMsg').html("<b>Please Enter your Address</b>"); 
            alertify.error("Please Enter your Address")
            $('#address').focus(); 
            return status;    
        }

        else  if ($("#pvtinfo_dist").find('option:selected').val() < 1) 
        {

        alertify.error('Please select District '); 
        $("#pvtinfo_dist").focus();

        return status;  
        }

        else   if ($("#pvtinfo_teh").find('option:selected').val() < 1) {

        alertify.error('Please select Tehsil');                          
        $("#pvtinfo_teh").focus();
        return status;  
        }
        else  if ($("#pvtZone").find('option:selected').val() < 1) {

        alertify.error('Please select Zone. ');                          
        $("#pvtZone").focus();
        return status;  
        }
        

        else   if ($("#std_group").find('option:selected').val() < 1) 
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
          //  $('#ErrMsg').html("<b>Please Enter your Study Group</b>"); 
              alertify.error('Please select your Study Group '); 
            // alert('Study Group not selected ');                          
            $("#std_group").focus();
            return status;  
        }
        else   if ($("#sub3p2").find('option:selected').val() < 1) 
        {
           // $('#ErrMsg').show(); 
             alertify.error('Please select your Study Group '); 
            alert('Plesae select  Subject');                          
            $("#sub3p2").focus();

            return status;  
        }
        else   if ($("#sub5p2").find('option:selected').val() < 1) 
        {
            $('#ErrMsg').show(); 
             alertify.error('Please select Subject '); 
           // alert('Plesae select Subject');                          
            $("#sub5p2").focus();

            return status;  
        }

        else   if ($("#sub6p2").find('option:selected').val() < 1) 
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
             alertify.error('Please select Subject '); 
          //  $('#ErrMsg').html("<b>Plesae select 6th Subject  </b>"); 
            // alert('Plesae select 6th Subject  ');                          
            $("#sub6p2").focus();
            return status;  
        }

       

        status = 1;
        return status;




    }
                            function CancelAlert()
                            {
                                var msg = "Are You Sure You want to Cancel this Form ?"
                                alertify.confirm(msg, function (e) {
                                    if (e) {
                                        // user clicked "ok"
                                        window.location.href ='<?php echo base_url(); ?>Admission/';
                                    } else {
                                        // user clicked "cancel"
                                    }
                                });
                            }

                            jQuery(document).ready(function () {
                                $(document.getElementById("bay_form")).mask("99999-9999999-9", { placeholder: "_" });
                                $(document.getElementById("father_cnic")).mask("99999-9999999-9", { placeholder: "_" });
                                $(document.getElementById("mob_number")).mask("9999-9999999", { placeholder: "_" });
                            });
                        </script>                   
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>