
<form class="form-horizontal no-margin" action="<?php  echo base_url(); ?>index.php/Admission/NewEnrolment_insert" method="post" enctype="multipart/form-data" name="myform" id="myform">

    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-5">
                <h4 class="bold">Personal Information</h4>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-3 col-md-5">
                <img src="<?php echo base_url(); ?>assets/img/upalodimage.jpg" class="img-responsive" alt="" >
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-5" id="output">
                <img id="previewImg" style="width:130px; height: 130px;" class="img-responsive" src="<?php echo base_url(); ?>assets/img/profile.png" alt="CandidateImage">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-3" id="progress-wrp">
                <div class="progress-bar"></div><div class="status">0%</div>
            </div>
            <div class="col-md-2">
                <input type="file" id="image" name="__files[]">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="cand_name" >
                    Candidate Name:
                </label>        
                <input class="text-uppercase form-control"  type="text" id="cand_name" style="text-transform: uppercase;" name="cand_name" placeholder="Candidate Name" maxlength="60" value="<?php echo @$data['name'] ?>" >
            </div>
            <div class="col-md-4">
                <label class="control-label" for="father_name">
                    Father's Name :
                </label>        
                <input class="text-uppercase form-control" id="father_name" name="father_name" style="text-transform: uppercase;" type="text" placeholder="Father's Name" maxlength="60"  value="<?php echo  @$data['Fname']; ?>" > 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="bay_form" >
                    Bay Form No:
                </label>        
                <input class="text-uppercase form-control" type="text" id="bay_form" name="bay_form" maxlength="15" placeholder="Bay Form No." value="<?php echo @$data['BForm'];?>" <?php if(@$data['isNotFresh']!=0 && @$data['BForm']!="") echo "readonly='readonly'";  ?>  required="required" >
            </div>
            <div class="col-md-4">
                <label class="control-label" for="father_cnic">
                    Father's CNIC:
                </label>        
                <input class="text-uppercase form-control" id="father_cnic" name="father_cnic" type="text" placeholder="FNIC No"  value="<?php  echo @$data['FNIC'];?>" <?php if(@$data['isNotFresh']!=0 && @$data['FNIC']!="") echo "readonly='readonly'";  ?>  required="required" >
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="dob">Date of Birth:</label>
                <input class="text-uppercase form-control" type="text" name="dob" id="dob" readonly="readonly" placeholder="Date of Birth" value="<?php  echo @$data['Dob'];?>" required = "required">
            </div>
            <div class="col-md-4">
                <label class="control-label" for="mob_number">Mobile Number:</label>
                <input class="text-uppercase form-control" id="mob_number" name="mob_number" type="text" placeholder="0300-123456789" value="<?php echo  @$data['MobNo']; ?> " required="required">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="medium"> MEDIUM:</label>
                <select id="medium" class="form-control text-uppercase" name="medium">
                    <?php
                    $med = @$data['medium'];
                    // $med = 2; 
                    if($med == 1)
                    {
                        echo  "<option value='0'>None</option>
                        <option value='1' selected='selected'>Urdu</option>
                        <option value='1'>English</option>";
                    }
                    else if($med == 2)
                    {
                        echo  "<option value='0'>None</option>
                        <option value='2'>Urdu</option>
                        <option value='2' selected='selected'>English</option>";
                    }
                    else{
                        echo  "<option value='0' selected='selected'>None</option>
                        <option value='1'>Urdu</option>
                        <option value='2'>English</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="MarkOfIden"> Mark of Identification :</label>
                <input class="text-uppercase form-control" type="text" id="MarkOfIden" style="text-transform: uppercase;" name="MarkOfIden" value="<?php echo  @$data['markOfIden']; ?>" required="required" maxlength="60" >
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="nationality" >
                    Nationality :
                </label>        
                <select name="nationality" class="form-control text-uppercase" id="nationality"> 
                    <?php
                    $nat = @$data['nat'];
                    if($nat == 1)
                    {
                        echo  
                        "<option value='0'>None</option>
                        <option value='1' selected='selected'>Pakistani</option>
                        <option value='2'>Non Pakistani</option>";
                    }
                    else if ($nat == 2)
                    {
                        echo  
                        "<option value='0'>None</option><option value='1'>Pakistani</option> 
                        <option value='2' selected='selected'>Non Pakistani</option>";
                    }
                    else{
                        echo  
                        "<option value='0' selected='selected'>None</option>
                        <option value='1'>Pakistani</option> 
                        <option value='2'>Non Pakistani</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="speciality">
                    Speciality:
                </label>     
                <select id="speciality"  class="text-uppercase form-control" name="speciality">
                    <?php 
                    $spec =  @$data['Speciality'];
                    if($spec==1)
                    {
                        echo  "<option value='0' >None</option>  
                        <option value='1' selected='selected'>Deaf &amp; Dumb</option>
                        <option value='2'>Board Employee</option>
                        <option value='3'>Blind</option>";
                    }
                    else if($spec ==2)
                    {
                        echo  "<option value='0'>None</option>  
                        <option value='1'>Deaf &amp; Dumb</option>
                        <option value='2' selected='selected'>Board Employee</option>
                        <option value='3'>Blind</option>";
                    }
                    else
                    {
                        echo  "<option value='0' selected='selected'>None</option>  
                        <option value='1'>Deaf &amp; Dumb</option>
                        <option value='2'>Board Employee</option>
                        <option value='3'>Blind</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="UrbanRural" >
                    Locality : 
                </label>        
                <select name="UrbanRural" class="form-control text-uppercase" id="UrbanRural"> 
                    <?php
                    $resid = @$data['RuralORUrban'];
                    if($resid == 1 )
                    {
                        echo"
                        <option value='0'>None</option>
                        <option value='1' selected='selected'>URBAN</option> 
                        <option value='2'>RURAL</option>";
                    }
                    else if($resid == 2)
                    {
                        echo"
                        <option value='0'>None</option>
                        <option value='1'>URBAN</option> 
                        <option value='2' selected='selected'>RURAL</option>";
                    }
                    else
                    {
                        echo"
                        <option value='0' selected='selected'>None</option>
                        <option value='1' selected='selected'>URBAN</option>
                        <option value='2'>RURAL</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="gend">
                    Gender :
                </label>     
                <select name="gend" class="form-control text-uppercase" id="gend">
                    <?php
                    @$gender = @$data['sex'];
                    if($gender == 1)
                    {
                        echo"
                        <option value='0'>None</option>
                        <option value='1' selected='selected'>MALE</option> 
                        <option value='2'>FEMALE</option>";
                    }
                    else if ($gender == 2)
                    {
                        echo"
                        <option value='0'>None</option><option value='1'>MALE</option> 
                        <option value='2' selected='selected'>FEMALE</option>";
                    }
                    else{
                        echo"<option value='0' selected='selected'>None</option>
                        <option value='1'>MALE</option> 
                        <option value='2'>FEMALE</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="religion">
                    Religion : 
                </label>        
                <select name="religion" class="form-control text-uppercase" id="religion"> 
                    <?php
                    @$rel = @$data['rel'];
                    if($rel == 1)
                    {
                        echo"
                        <option value='0'>None</option>
                        <option value='1' selected='selected'>MUSLIM</option> 
                        <option value='2'>NON MUSLIM</option>";
                    }
                    else if ($rel == 2)
                    {
                        echo"
                        <option value='0'>None</option>
                        <option value='1'>MUSLIM</option> 
                        <option value='2' selected='selected'>NON MUSLIM</option>";
                    }
                    else{
                        echo"
                        <option value='0' selected='selected'>None</option>
                        <option value='1' selected='selected'>MUSLIM</option> 
                        <option value='2'>NON MUSLIM</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="hafiz" >
                    Hafiz-e-Quran :
                </label>        
                <select name="hafiz" class="form-control text-uppercase" id="hafiz"> 
                    <option value='1' selected='selected'>NO</option> 
                    <option value='2'>YES</option> 
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <label class="control-label" for="address" >
                    Address :
                </label>        
                <textarea  id="address" class="text-uppercase form-control" rows="4" name="address" required="required">
                    <?php echo $data['addr'];  ?>
                </textarea>       
            </div>
        </div>
    </div>
    <hr class="colorgraph">
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-5">
                <h4 class="bold">Examination Proposed Center Information</h4>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="pvtinfo_dist" >
                    District :
                </label>        
                <select class='form-control text-uppercase' id='pvtinfo_dist' name='pvtinfo_dist' required='required'>
                    <option value='0'>SELECT DISTRICT</option>
                    <option value='1'>GUJRANWALA</option>
                    <option value='2'>GUJRAT</option>
                    <option value='3'>HAFIZABAD</option>
                    <option value='4'>MANDI BAHA-UD-DIN</option>
                    <option value='5'>NAROWAL</option>
                    <option value='6'>SIALKOT</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="pvtinfo_teh">
                    Tehsil :
                </label>        
                <select class='form-control  text-uppercase' id='pvtinfo_teh' name='pvtinfo_teh' required='required'>
                    <option value='0'>SELECT TEHSIL</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <label class="control-label" for="pvtZone" >
                    Zone :
                </label>        
                <select id="pvtZone" class="form-control text-uppercase" name="pvtZone">
                    <option value='0'>SELECT ZONE</option>
                </select>
            </div>
        </div>
    </div>
    <div style="width: 750px;" class="pull-right" id="instruction">
        <img src="<?php echo base_url(); ?>assets/img/Instructions.jpg" class="img-responsive" alt="instructions.jpg">
    </div>
    <hr class="colorgraph">
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-5">
                <h4 class="bold">Examination Information</h4>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <label class="control-label" for="std_group" >
                    Study Group :
                </label>
                <select id="std_group" class="form-control text-uppercase" name="std_group">
                    <?php 
                    // DebugBreak();
                    $grp = $data['grp_cd'];
                    $sub7 = $data['sub7'];
                    $sub8 = $data['sub8'];
                    if(!empty($grp)){

                        if($grp == 1 && ($sub7 == 8 || $sub8 == 8))
                        {
                            echo "<option value='1' selected='selected'>SCIENCE WITH BIOLOGY</option>

                            <option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>
                            <option value='8'>SCIENCE  WITH ELECTRICAL WIRING</option>
                            <option value='2'>HUMANTIES</option>
                            <option value='5'>DEAF AND DUMB</option>
                            <option value='4'>AAMA GROUP</option>
                            <option value='9'>ADIB/ALIM GROUP </option>
                            ";  
                        }

                        if($sub7 == 78 || $sub8 == 78)
                        {
                            echo " 
                            <option value='1' >SCIENCE WITH BIOLOGY</option>
                            <option value='7'  selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>
                            <option value='8'>SCIENCE  WITH ELECTRICAL WIRING</option>
                            <option value='2'>HUMANTIES</option>
                            <option value='5'>DEAF AND DUMB</option>
                            <option value='4'>AAMA GROUP</option>
                            <option value='9'>ADIB/ALIM GROUP </option>
                            ";
                        }

                        if($grp == 2)
                        {
                            echo "<option value='2' selected='selected'>HUMANTIES</option>
                            <option value='1' >SCIENCE WITH BIOLOGY</option>
                            <option value='7' >SCIENCE  WITH COMPUTER SCIENCE</option>
                            <option value='8'>SCIENCE  WITH ELECTRICAL WIRING</option>

                            <option value='5'>DEAF AND DUMB</option>
                            <option value='4'>AAMA GROUP</option>
                            <option value='9'>ADIB/ALIM GROUP </option>
                            ";  
                        }

                        if($grp == 5)
                        {
                            echo "<option value='5' selected='selected'>DEAF AND DUMB</option>
                            <option value='2' >HUMANTIES</option>
                            <option value='1' >SCIENCE WITH BIOLOGY</option>
                            <option value='7' >SCIENCE  WITH COMPUTER SCIENCE</option>
                            <option value='8'>SCIENCE  WITH ELECTRICAL WIRING</option>
                            <option value='4'>AAMA GROUP</option>
                            <option value='9'>ADIB/ALIM GROUP </option>
                            ";  
                        }

                        if($grp==4)
                        {
                            echo "<option value='4' selected='selected'>AAMA GROUP</option>
                            <option value='5' >DEAF AND DUMB</option>
                            <option value='2' >HUMANTIES</option>
                            <option value='1' >SCIENCE WITH BIOLOGY</option>
                            <option value='7' >SCIENCE  WITH COMPUTER SCIENCE</option>
                            <option value='8'>SCIENCE  WITH ELECTRICAL WIRING</option>
                            <option value='9'>ADIB/ALIM GROUP </option>
                            ";
                        }
                    }
                    else
                    {
                        echo "<option value='0'>SELECT GROUP</option>
                        <option value='1' >SCIENCE WITH BIOLOGY</option>
                        <option value='7' >SCIENCE  WITH COMPUTER SCIENCE</option>
                        <option value='8'>SCIENCE  WITH ELECTRICAL WIRING</option>
                        <option value='2' >GENERAL</option>
                        <option value='5'>DEAF AND DUMB</option>
                        <option value='4'>AAMA GROUP</option>
                        <option value='9'>ADIB/ALIM GROUP </option>";
                    }
                    ?>
                </select>                                            
            </div>
        </div>
    </div>


    <?php
    @$exam_type = @$data['exam_type'];
    @$grp_cd = @$data['grp_cd'];
    @$oldcls = @$data['class'];
    $Status =  @$data['status'];

    ?>

    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" id="lblpart1cat" name="lblpart1cat" style="text-decoration: underline;">
                    PART-I Subjects
                </label>
            </div>
            <div class="col-md-4">
                <label class="control-label" id="lblpart2cat" name="lblpart2cat" style="text-decoration: underline;">
                    PART-II Subjects
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <select id="sub1" class="text-uppercase form-control" name="sub1"></select> 
            </div>
            <div class="col-md-4">
                <select id="sub1p2" class="text-uppercase form-control" name="sub1p2"></select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <select id="sub2" class="text-uppercase form-control" name="sub2"></select> 
            </div>
            <div class="col-md-4">
                <select id="sub2p2" class="text-uppercase form-control" name="sub2p2"></select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <select id="sub3" class="text-uppercase form-control" name="sub3"></select> 
            </div>
            <div class="col-md-4">
                <select id="sub3p2" class="text-uppercase form-control" name="sub3p2"></select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <select id="sub8" class="text-uppercase form-control" name="sub8"></select> 
            </div>
            <div class="col-md-4">
                <select id="sub8p2" class="text-uppercase form-control" name="sub8p2"></select> 
            </div>
        </div>
    </div>    
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <select id="sub4" class="text-uppercase form-control" name="sub4"></select> 
            </div>
            <div class="col-md-4">
                <select id="sub4p2" class="text-uppercase form-control" name="sub4p2"></select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <select id="sub5" class="text-uppercase form-control" name="sub5"></select> 
            </div>
            <div class="col-md-4">
                <select id="sub5p2" class="text-uppercase form-control" name="sub5p2"></select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <select id="sub6" class="text-uppercase form-control" name="sub6"></select> 
            </div>
            <div class="col-md-4">
                <select id="sub6p2" class="text-uppercase form-control" name="sub6p2"></select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <select id="sub7" class="text-uppercase form-control" name="sub7"></select> 
            </div>
            <div class="col-md-4">
                <select id="sub7p2" class="text-uppercase form-control" name="sub7p2"></select> 
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <label class="checkbox-inline">
                    <input type="checkbox" class="checkboxtext" id="terms" name="terms" value="yes">I agree with the <a href="<?php echo base_url(); ?>assets/pdfs/Instructions.jpg">Terms and Conditions </a> of Board of Intermediate & Secondary Education, Gujranwala  
                </label>
            </div>
        </div>
    </div>



    <div class="hidden">
        <input type="hidden" value="<?=  @$data['grp_cd']?>" name="pergrp">
        <input type="hidden" value="1" name="oldboardid">
        <input type="hidden" class="span3" id="oldClass" name="oldClass"  value="<?php  echo @$data['class']; ?>"/>     
        <input type="hidden" name="oldsess" id ="oldsess" value="<?php echo @$data['sess'] == 1 ? "Annual" :"Supplementary";  ?>" > 
        <input type="hidden" name="oldyear" id ="oldyear" value="<?php echo @$data['Iyear']; ?>" >
        <input type="hidden" name="category" id="category" value="<?php  ?>">
        <input type="hidden" name="strRegNo" id="strRegNo" value="<?php echo @$data['strRegNo'];?>">
        <input type="hidden" value="0" id="isotherbrd" name="isotherbrd" />
        <input type="hidden" value="1" id="isFresh" name="isFresh" />
        <input type="hidden" value="<?php if(((@$data['isNotFresh']!=0 || @$data['isNotFresh']!=""))) echo 1; else echo 0; ?>" id="isNotFresh" name="isNotFresh" />
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <input type="submit" value="Save Form" id="btnsubmitUpdateEnrol" name="btnsubmitUpdateEnrol" class="btn btn-primary btn-block" onclick="return checks_fresh_10th()">
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>assets/pdfs/Instructions.jpg" download="instructions" class="btn btn-info btn-block">Download Instruction</a>
            </div>
            <div class="col-md-3">
                <input type="button" class="btn btn-danger btn-block" value="Cancel" id="btnCancel" name="btnCancel" onclick="return CancelAlert();">
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url(); ?>assets/js_matric/jquery-1.8.3.js"></script>
<script type="text/javascript">

    function CancelAlert()
    {
        var msg = "Are You Sure You want to Cancel this Form ?"
        alertify.confirm(msg, function (e) {
            if (e) {
                // user clicked "ok"
                window.location.href ="<?php echo base_url(); ?>index.php/Admission/";
            } else {
                // user clicked "cancel"

            }
        });
    }


    function checks_fresh_10th(){
        var status  =  check_NewEnrol_validation_fresh();
        if(status == 0)
        {
            return false;    
        }
        else
        {
            $("button[type='submit']").html('Please wait ...').attr('disabled','disabled'); 
            $("#myform").submit();
            return true;
        } 
    }

    function check_NewEnrol_validation_fresh()
    {
        //debugger;
        var name =  $('#cand_name').val();
        var dist_cd= $('#pvtinfo_dist option:selected').val();
        var teh_cd= $('#pvtinfo_teh option:selected').val();
        var zone_cd= $('#pvtZone option:selected').val();
        var terms = $("input[name='terms']:checked").val();
        var sub6p1 = $('#sub6').val();
        var sub6p2 = $('#sub6p2').val();           
        var sub7p1 = $('#sub7').val();
        var sub7p2 = $('#sub7p2').val();  
        var sub8p1 = $('#sub8').val();                      
        var sub8p2 = $('#sub8p2').val();                      
        var mobNo = $('#mob_number').val();
        var bFormNo = $('#bay_form').val();
        var grp_cd = $('#std_group').val();
        var brd_cd = $('#brd_cd').val();
        var fName = $('#father_name').val();
        var FNic = $('#father_cnic').val();
        var dob = $('#dob').val();
        var medium = $('#medium').val();
        var address = $('#address').val();
        var nationality = $('#nationality').val();
        var image = $('#image').val();
        var MarkOfIdent = $('#MarkOfIden').val();
        var religion = $('#religion').val();
        var UrbanRural = $('#UrbanRural').val();
        var preResult = $('#preResult').val();
        var oldrno = $('#oldrno').val();
        var oldboardid = $('#oldboardid').val();
        var gend = $('#gend').val();
        var status = 0;
        var $img = $("#previewImg");
        var src = $img.attr("src");
        var selected_group_conversion ;

        var fuData = document.getElementById('image');
        var FileUploadPath = fuData.value;
        if (FileUploadPath == '') {
            alertify.error("Please upload an image");
            jQuery('#previewImg').removeAttr('src');
            $("#previewImg").attr("src","<?php echo base_url(); ?>assets/img/profile.png");
            $("#image").focus();
            return status;
        }

        if(grp_cd==1 || grp_cd == 5 || grp_cd ==7)
        {
            selected_group_conversion =1;
        }
        else
        {
            selected_group_conversion =grp_cd;
        }

        if(name == "" ||  name == undefined)
        {
            alertify.error("Please Enter your  Name")
            $('#cand_name').focus(); 
            return status;
        }
        else if(fName == "" || fName == undefined)
        {
            alertify.error("Please Enter your Father's Name  ") 
            $('#father_name').focus(); 
            return status;
        }   

        else if(bFormNo == "" || bFormNo == 0 || bFormNo == undefined)
        {
            alertify.error("Please Enter your bay-Form") 
            $('#bay_form').focus();  
            return status; 
        }
        else if(FNic == "" || FNic.length == undefined )
        {
            alertify.error("Please Enter your Father's CNIC") 
            $('#father_cnic').focus();  
            return status; 
        }
        else if(FNic == bFormNo  )
        {
            alertify.error("B-form Number and Father CNIC cannot be same.") 
            $('#bay_form').focus();   
            return status; 
        }

        else if(dob == "" || dob == undefined)
        {
            alertify.error("Please Enter your Date of Birth.") 
            $('#dob').focus();   
            return status;  
        }

        else if(mobNo == "" || mobNo == 0 || mobNo == undefined)
        {
            alertify.error("Please Enter your Mobile No.") 
            $('#mob_number').focus();   
            return status;  
        }

        else if(medium == "" || medium == 0 || medium == undefined)
        {
            alertify.error("Please Select Medium.") 
            $('#medium').focus();   
            return status;  
        }

        else if(preResult=="")
        {
            alertify.error("Please Write Your Previous Result First!")
            $('#preResult').focus(); 
            return status;
        }

        else if(MarkOfIdent == "" || MarkOfIdent == undefined)
        {
            alertify.error("Please Enter your Mark of Indentification") 
            $('#MarkOfIden').focus();   
            return status;  
        }

        else if(nationality == "" || nationality == 0 || nationality == undefined)
        {
            alertify.error("Please Select Nationality") 
            $('#nationality').focus();   
            return status;  
        }

        else if(gend==undefined || gend == 0)
        {
            alertify.error("Please Select Your Gender First!")
            $('#gend').focus(); 
            return status;
        }

        else if(religion == undefined || religion == 0)
        {
            alertify.error("Please Select Your Religion First!")
            $('#religion').focus();
            return status;
        }

        else if(UrbanRural == undefined || UrbanRural == 0)
        {
            alertify.error("Please Select Your Locilaty First!")
            $('#UrbanRural').focus();
            return status;
        }

        else if(address == "" || address == 0 || address.length ==undefined )
        {
            alertify.error("Please Enter your Address")
            $('#address').focus(); 
            return status;    
        }

        else if(oldrno=="")
        {
            alertify.error("Please Enter Your Old Rno First!")
            $('#oldrno').focus(); 
            return status;
        }

        else if(oldboardid==0)
        {
            alertify.error("Please Select Your Board First!")
            $('#oldboardid').focus(); 
            return status;
        }

        else  if (dist_cd < 1) 
        {
            alertify.error('Please select District '); 
            $("#pvtinfo_dist").focus();
            return status;  
        }

        else if (teh_cd < 1) 
        {
            alertify.error('Please select Tehsil');                          
            $("#pvtinfo_teh").focus();
            return status;  
        }

        else if (zone_cd < 1) 
        {
            alertify.error('Please select Zone. ');                          
            $("#pvtZone").focus();
            return status;  
        }

        else if (grp_cd == 0) 
        {
            alertify.error('Please Select your Study Group '); 
            $("#std_group").focus();
            return status;  
        }

        else if($("#terms").is(":not(:checked)"))
        {
            alertify.error("Please Accept Terms and Conditions First!")
            $('input[name="terms"]').focus(); 
            return status;
        }

        status = 1;
        return status;
    }


    $(window).load(function()
        {
            $.fancybox("#instruction");

            $('#address').each(function(){
                $(this).val($(this).val().trim());
            });

    });
    $(document).ready(function(){
        ClearALLDropDowns();

        var sub1_Pak_options = {
            1 : 'Urdu'
        }
        var sub1_NonPak_options = 
        {
            11 : 'Geogrophy Of Pakistan',
            1 : 'Urdu'
        }
        var sub3_Muslim = 
        {
            3 :'Islamyat Compulsory'
        }
        var sub3_Non_Muslim = 
        {
            51 : 'ETHICS',
            3  :'Islamyat Compulsory'
        }
        var sub5_Hum = 
        {
            92 : 'GENERAL MATHEMATICS' 
        }
        var sub6_Hum = 
        {
            9 : 'GENERAL SCIENCE'  
        }
        var sub7_Hum = 
        {
            0 : 'NOT SELECTED',
            37: 'EDUCATION',
            26: 'CIVICS',
            25: 'ECONOMICS',
            14: 'PHYSIOLOGY & HYGIENE',
            24: 'GEOGRAPHY',
            21: 'HISTORY OF PAKISTAN',

            35: 'ENGLISH LITERATURE',
            34: 'URDU LITERATURE',
            19: 'ADVANCED ISLAMIC STUDIES',
            87: 'ENVIRONMENTAL STUDIES',
            33: 'COMMERCIAL GEOGRAPHY',
            22: 'ARABIC',
            23: 'PERSIAN',
            36: 'PUNJABI',
            20: 'ISLAMIC HISTORY / MUSLIM HISTORY',
            83: 'POULTRY FARMING',
            40: 'HEALTH & PHYSICAL EDUCATION',
            78: 'COMPUTER SCIENCE',
            15 : 'GEOMETRICAL & TECHNICAL DRAWING',
            43 : 'ELECTRICAL WIRING',
            48 : 'WOOD WORK (FURNITURE MAKING)',
            90 : 'COMPUTER HARDWARE',
            89 : 'FISH FARMING',
            91 : 'BEAUTICIAN',
            74 : 'WEAVING'
        }
        var sub8_Hum = 
        {
            0 : 'NOT SELECTED',
            37: 'EDUCATION',
            26: 'CIVICS',
            25: 'ECONOMICS',
            14: 'PHYSIOLOGY & HYGIENE',
            24: 'GEOGRAPHY',
            21: 'HISTORY OF PAKISTAN',
            35: 'ENGLISH LITERATURE',
            34: 'URDU LITERATURE',
            19: 'ADVANCED ISLAMIC STUDIES',
            87: 'ENVIRONMENTAL STUDIES',
            33: 'COMMERCIAL GEOGRAPHY',
            22: 'ARABIC',
            23: 'PERSIAN',
            36: 'PUNJABI',
            20: 'ISLAMIC HISTORY / MUSLIM HISTORY ',
            83: 'POULTRY FARMING',
            40: 'HEALTH & PHYSICAL EDUCATION',
            78: 'COMPUTER SCIENCE',
            15 : 'GEOMETRICAL & TECHNICAL DRAWING',
            43 : 'ELECTRICAL WIRING',
            48 : 'WOOD WORK (FURNITURE MAKING)',
            90 : 'COMPUTER HARDWARE',
            83 : 'POULTRY FARMING',
            89 : 'FISH FARMING',
            91 : 'BEAUTICIAN',
            74 : 'WEAVING'
        }
        var sub5_Deaf = 
        {
            66: 'ARITHMETIC'
        }
        var sub6_Deaf = 
        {
            0: 'NOT SELECTED',
            72 : 'TAILORING',
            67 : 'BAKERY',
            68 : 'CARPET MAKING',
            93 : 'COMPUTER SCIENCES',
            69 : 'DRAWING',
            70 : 'EMBORIDERY',
            94 : 'HEALTH & PHYSICAL EDUCATION',
            73 : 'TYPE WRITING',
            74 : 'WEAVING'
        }
        var sub7_Deaf = 
        {
            0: 'NOT SELECTED',
            72 : 'TAILORING',
            67 : 'BAKERY',
            68 : 'CARPET MAKING',
            93 : 'COMPUTER SCIENCES',
            69 : 'DRAWING',
            70 : 'EMBORIDERY',
            94 : 'HEALTH & PHYSICAL EDUCATION',
            73 : 'TYPE WRITING',
            74 : 'WEAVING'
        }
        var sub8_Deaf = 
        {
            0: 'NOT SELECTED',
            72 : 'TAILORING',
            67 : 'BAKERY',
            68 : 'CARPET MAKING',
            93 : 'COMPUTER SCIENCES',
            69 : 'DRAWING',
            70 : 'EMBORIDERY',
            94 : 'HEALTH & PHYSICAL EDUCATION',
            73 : 'TYPE WRITING',
            74 : 'WEAVING'
        }

        var sub2_arr = {
            2:'ENGLISH'
        }
        var sub3_muslim = {
            3:'ISLAMIC EDUCATION'
        }
        var sub3_nonmuslim = {
            3:'ISLAMIC EDUCATION'
        }
        var additional_sub = {
            0 : 'NOT SELECTED',
            9:'GENERAL SCIENCE',
            10:'FOUNDATION OF EDUCATION',
            11:'GEOGRAPHY OF PAKISTAN',
            12:'HOUSE HOLD ACCOUNTS & ITS RELATED PROBLEMS',
            13:'ELEMENTS OF HOME ECONOMICS',
            14:'PHYSIOLOGY & HYGIENE15GEOMETRICAL & TECHNICAL DRAWING',
            16:'GEOLOGY17ASTRONOMY & SPACE SCIENCE',
            18:'ART/ART & MODEL DRAWING',
            19:'ISLAMIC STUDIES',
            20: 'ISLAMIC HISTORY / MUSLIM HISTORY ',
            21:'HISTORY OF PAKISTAN',
            22:'ARABIC',
            23:'PERSIAN',
            24:'GEOGRAPHY',
            25:'ECONOMICS',
            26:'CIVICS',
            27:'FOOD AND NUTRITION',
            28:'ART IN HOME ECONOMICS',
            29:'MANAGEMENT FOR BETTER HOME',
            30:'CLOTHING & TEXTILES',
            31:'CHILD DEVELOPMENT AND FAMILY LIVING',
            32:'MILITARY SCIENCE',
            33:'COMMERCIAL GEOGRAPHY',
            34:'URDU LITERATURE35ENGLISH LITERATURE',
            36:'PUNJABI',
            37:'EDUCATION',
            38:'ELEMENTARY NURSING & FIRST AID',
            39:'PHOTOGRAPHY',
            40:'HEALTH & PHYSICAL EDUCATION',
            41:'CALIGRAPHY',
            42:'LOCAL (COMMUNITY) CRAFTS',
            43:'ELECTRICAL WIRING',
            44:'RADIO ELECTRONICS',
            45:'COMMERCE',
            46:'AGRICULTURE',
            47:'BOOK KEEPING & ACCOUNTANCY',
            48:'WOOD WORK (FURNITURE MAKING)',
            49:'GENERAL AGRICULTURE',
            50:'FARM ECONOMICS',
            51:'ETHICS',
            52:'LIVE STOCK FARMING',
            53:'ANIMAL PRODUCTION',
            54:'PRODUCTIVE INSECTS AND FISH CULTURE',
            55:'HORTICULTURE',
            56:'PRINCIPLES OF HOME ECONOMICS',
            57:'RELATED ACT',
            58:'HAND AND MACHINE EMBROIDERY',
            59:'DRAFTING AND GARMENT MAKING',
            60:'HAND & MACHINE KNITTING & CROCHEING',
            61:'STUFFED TOYS AND DOLL MAKING',
            62:'CONFECTIONERY AND BAKERY',
            63:'PRESERVATION OF FRUITS,VEGETABLES & OTHER FOODS',
            64:'CARE AND GUIDENCE OF CHILDREN',
            65:'FARM HOUSE HOLD MANAGEMENT',
            66:'ARITHEMATIC',
            67:'BAKERY',
            68:'CARPET MAKING',
            69:'DRAWING',
            70:'EMBORIDERY',
            71:'HISTORY',
            72:'TAILORING',
            73:'TYPE WRITING',
            74:'WEAVING',
            75:'SECRETARIAL PRACTICE',
            76:'CANDLE MAKING',
            77:'SECRETARIAL PRACTICE AND CORRESPONDANCE',
            78:'COMPUTER SCIENCE',
            79:'WOOD WORK (BOAT MAKING)',
            80:'PRINCIPLES OF ARITHMATIC',
            81:'SEERAT-E-RASOOL',
            82:'AL-QURAAN',
            83:'POULTRY FARMING',
            84:'ART & MODEL DRAWING',
            85:'BUSINESS STUDIES',
            86:'HADEES & FIQAH',
            87:'ENVIRONMENTAL STUDIES',
            88:'REFRIGERATION AND AIR CONDITIONING',
            89:'FISH FARMING',
            90:'COMPUTER HARDWARE',
            91:'BEAUTICIAN',
            92:'GENERAL MATH',
            93:'COMPUTER SCIENCES',

        }

        var grp_cd ="<?php echo  @$data['grp_cd'] ?>";


        var sub1 ="<?php echo @$data['sub1']; ?>";
        var sub2 = "<?php echo @$data['sub2']; ?>";
        var sub3 ="<?php echo @$data['sub3']; ?>";
        var sub4 = "<?php echo @$data['sub4']; ?>";
        var sub5 = "<?php echo @$data['sub5']; ?>";
        var sub6 = "<?php echo @$data['sub6']; ?>";
        var sub7 = "<?php echo @$data['sub7']; ?>";
        var sub8 = "<?php echo @$data['sub8']; ?>";         
        // debugger;

        function remove_subjects()
        {
            $("#sub5").empty();
            $("#sub5p2").empty();
            $("#sub6").empty();
            $("#sub6p2").empty();
            $("#sub7").empty();
            $("#sub7p2").empty();
            $("#sub8").empty();
            $("#sub8p2").empty();
        }
        function load_Bio_CS_Sub()
        {
            var NationalityVal = $("input[name=nationality]:checked").val();
            $('#sub1').empty();
            $('#sub1p2').empty();

            $.each(sub1_Pak_options, function(val, text) {

                $('#sub1').append( new Option(text,val) );

                $('#sub1p2').append( new Option(text,val) );
            }); 

            if (NationalityVal == "2")
            {
                console.log("Hi Foreigner Welcom to Pakistan :) ");
                $.each(sub1_NonPak_options, function(val, text) {
                    $('#sub1').append( new Option(text,val) );

                    $('#sub1p2').append( new Option(text,val) );
                }); 
            }
            $('#sub2').empty();
            $('#sub2p2').empty();
            $("#sub2").prepend('<option selected="selected" value="2">ENGLISH</option>');

            $("#sub2p2").prepend('<option selected="selected" value="2">ENGLISH</option>');
            // Check Religion and select sub........
            $("#sub3").empty();
            $("#sub3p2").empty();
            var Religion = $("#religion").val();

            $.each(sub3_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));

                $("#sub3p2").append(new Option(text,val));
            });

            if(Religion == "2")
            {
                $.each(sub3_Non_Muslim,function(val,text){
                    $("#sub3").append(new Option(text,val));

                    $("#sub3p2").append(new Option(text,val));
                });
            }
            $("#sub8").empty();
            $("#sub8p2").empty();
            $("#sub8").prepend('<option selected="selected" value="4">PAKISTAN STUDIES</option>');

            $("#sub8p2").prepend('<option selected="selected" value="4">PAKISTAN STUDIES</option>');
            // Subject 5 ,6 ,7 and 8
            $("#sub5").empty();
            $("#sub5p2").empty();
            $("#sub6").empty();
            $("#sub6p2").empty();
            $("#sub7").empty();
            $("#sub7p2").empty();
            $("#sub4").empty();
            $("#sub4p2").empty();
            $("#sub4").append(new Option('MATHEMATICS',5));

            $("#sub4p2").append(new Option('MATHEMATICS',5));
            $("#sub5").append(new Option('PHYSICS',6));

            $("#sub5p2").append(new Option('PHYSICS',6));
            $("#sub6").append(new Option('CHEMISTRY',7));

            $("#sub6p2").append(new Option('CHEMISTRY',7));
        }
        function Hum_Deaf_Subjects()
        {
            $('#sub1').empty();
            $('#sub1p2').empty();


            $.each(sub1_Pak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );

                $('#sub1p2').append( new Option(text,val) );
            }); 

            $('#sub2').empty();
            $('#sub2p2').empty();
            $("#sub2").prepend('<option selected="selected" value="2">ENGLISH</option>');

            $("#sub2p2").prepend('<option selected="selected" value="2">ENGLISH</option>');
            // Check Religion and select sub........
            $("#sub3").empty();
            $("#sub3p2").empty();

            $.each(sub3_Muslim,function(val,text){
                $("#sub3").empty();
                $("#sub3p2").empty();
                $("#sub3").append(new Option(text,val));

                $("#sub3p2").append(new Option(text,val));
            });

            $("#sub8").empty();
            $("#sub8p2").empty();
            $("#sub8").prepend('<option selected="selected" value="4">PAKISTAN STUDIES</option>');

            $("#sub8p2").prepend('<option selected="selected" value="4">PAKISTAN STUDIES</option>');

            $("#sub4").empty();
            $("#sub4p2").empty();

            $("#sub5").empty();
            $("#sub5p2").empty();
            $("#sub6").empty();
            $("#sub6p2").empty();
            $("#sub7").empty();
            $("#sub7p2").empty();
        }
        var langascd = ['22','23','36','34','35'];

        // sub 1 change event 
        $("#sub1").change(function(){
            var sel_sub =$("#sub1").val();
            // $("#sub1p2").val(sel_sub);
        });
        $("#sub1p2").change(function(){
            var sel_sub =$("#sub1p2").val();
            //$("#sub1").val(sel_sub);
        });
        // sub 2 change event 
        $("#sub2").change(function(){
            var sel_sub =$("#sub2").val();
            //  $("#sub2p2").val(sel_sub);
        });
        $("#sub2p2").change(function(){
            var sel_sub =$("#sub2p2").val();
            // $("#sub2").val(sel_sub);
        });
        // sub 3 change event 
        $("#sub3").change(function(){
            var sel_sub =$("#sub3").val();
            //  $("#sub3p2").val(sel_sub);
        });
        $("#sub3p2").change(function(){
            var sel_sub =$("#sub3p2").val();

        });

        // sub 5 change event 
        $("#sub5").change(function(){
            var sel_sub =$("#sub5").val();
            $("#sub5p2").val(sel_sub);
        });
        $("#sub5p2").change(function(){
            var sel_sub =$("#sub5p2").val();
            $("#sub5").val(sel_sub);
        });
        // sub 6 change event
        $("#sub6").change(function(){
            // debugger;
            var sub6 = $("#sub6").val();
            var sub4 = $("#sub5").val();
            var sub6p2 = $("#sub6p2").val();
            var sub7 = $("#sub7").val();
            var sub7p2 = $("#sub7p2").val();
            var sub8 = $("#sub8").val();
            var sub8p2 = $("#sub8p2").val();

            if(sub6==0)
            {
                return true;
            }
            var a = langascd.indexOf(sub6);
            var b = langascd.indexOf(sub6p2);
            var d = langascd.indexOf(sub7);
            var c = langascd.indexOf(sub7p2);

            if(a >=0  && d>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                $("#sub6").focus();
                return;  
            }



            if((sub6 == sub7))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                return;
            }
            if((sub6 == sub4))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                return;
            }
            if ((sub6 == 19 || sub6p2 == 19) && (sub7 == 20 || sub7p2== 20))
            {
                $('#ErrMsg').show(); 
                alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                $("#sub6").focus();
                return;  
            }    
            if((sub7 == 20 && sub6 == 21) || (sub7 == 19 && sub6 == 20) || (sub7 == 19 && sub6 == 21) || (sub7 == 20 && sub6 == 19) || (sub7 == 21 && sub6 == 19)|| (sub7p2 == 20 && sub6p2 == 21) || (sub7p2 == 21 && sub6p2 == 20)  || (sub7p2 == 19 && sub6p2 == 20) || (sub7p2 == 19 && sub6p2 == 21) || (sub7p2 == 20 && sub6p2 == 19) || (sub7p2 == 21 && sub6p2 == 19))
            {
                alertify.error("Please choose Different Subjects as Double History is not allowed" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                $("#sub6").focus();
                return;
            }         
            // }
            $("#sub6p2").val(sub6);
        })
        $("#sub6p2").change(function(){
            var sub6 = $("#sub6").val();
            var sub4 = $("#sub5").val();
            var sub6p2 = $("#sub6p2").val();
            var sub7 = $("#sub7").val();
            var sub7p2 = $("#sub7p2").val();
            var sub8 = $("#sub8").val();
            var sub8p2 = $("#sub8p2").val();
            var ddlMarksImproveoptions = $("#ddlMarksImproveoptions").val();
            ////debugger;

            var a = langascd.indexOf(sub6);
            var b = langascd.indexOf(sub6p2);
            var d = langascd.indexOf(sub7);
            var c = langascd.indexOf(sub7p2);

            if(a >=0  && d>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                $("#sub6").focus();
                return;  
            }


            if((sub6p2 == sub7) )
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                return;
            }
            if((sub6p2 == sub4))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                return;
            }          
            if ((sub6 == 19 || sub6p2 == 19) && (sub7 == 20 || sub7p2== 20))
            {
                $('#ErrMsg').show(); 
                alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                $("#sub6").focus();
                return;  
            }   


            if((sub7 == 20 && sub6 == 21) || (sub7 == 19 && sub6 == 20) || (sub7 == 19 && sub6 == 21) || (sub7 == 20 && sub6 == 19) || (sub7 == 21 && sub6 == 19)|| (sub7p2 == 20 && sub6p2 == 21) || (sub7p2 == 21 && sub6p2 == 20)  || (sub7p2 == 19 && sub6p2 == 20) || (sub7p2 == 19 && sub6p2 == 21) || (sub7p2 == 20 && sub6p2 == 19) || (sub7p2 == 21 && sub6p2 == 19)){
                alertify.error("Please choose Different Subjects as Double History is not allowed" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                $("#sub6").focus();
                return;
            }         
            $("#sub6").val(sub6p2);
            // $("#sub6p2").append(new Option('COMPUTER SCIENCE',78));
            //   console.log('Hi i am sub6 dropdown :) ');
        })
        $("#sub7").change(function(){
            //debugger;
            //   console.log('Hi i am sub7 dropdown :) ');
            var sub6 = $("#sub6").val();
            var sub4 = $("#sub5").val();
            var sub7 = $("#sub7").val();
            var sub8 = $("#sub8").val();

            var a = langascd.indexOf(sub6);
            var d = langascd.indexOf(sub7);
            if(sub7==0)
            {
                return true;
            }
            if(a >=0  && d>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }


            // console.log("sub7 = "+ sub7 + "  sub8 = "+ sub8);
            if( (sub7 == sub6))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                return;
            } 
            if( (sub7 == sub4))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                return;
            }                
            if((sub7 == 20 && sub6 == 21) || (sub7 == 21 && sub6 == 20)  || (sub7 == 19 && sub6 == 20) || (sub7 == 19 && sub6 == 21) || (sub7 == 20 && sub6 == 19) || (sub7 == 21 && sub6 == 19)|| (sub7p2 == 20 && sub6p2 == 21) || (sub7p2 == 21 && sub6p2 == 20)  || (sub7p2 == 19 && sub6p2 == 20) || (sub7p2 == 19 && sub6p2 == 21) || (sub7p2 == 20 && sub6p2 == 19) || (sub7p2 == 21 && sub6p2 == 19)){
                alertify.error("Please choose Different Subjects as Double History is not allowed" );
                $("#sub7p2").val('0');
                $("#sub7").val('0');
                return;
            }
            var valtext = 0;
            for(var i =0 ; i<langascd.length; i++)
            {
                if(sub8 == langascd[i])
                {
                    valtext =1;
                }
            }
            if(valtext>0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub7").val('0');  
                $("#sub7p2").val('0');  
                return;
            }
            if ((sub6 == 19 ) && (sub7 == 20) ||(sub6 == 20 ) && (sub7 == 19))
            {
                $('#ErrMsg').show(); 
                alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }    
            $("#sub7p2").val(sub7);
        })
        $("#sub7p2").change(function(){
            // debugger;
            //console.log('Hi i am sub7 dropdown :) ');
            var sub6 = $("#sub6").val();
            var sub4 = $("#sub5").val();
            var sub6p2 = $("#sub6p2").val();
            var sub7 = $("#sub7").val();
            var sub7p2 = $("#sub7p2").val();
            var sub8 = $("#sub8").val();
            var sub8p2 = $("#sub8p2").val();

            var a = langascd.indexOf(sub6);
            var b = langascd.indexOf(sub6p2);
            var d = langascd.indexOf(sub7);
            var c = langascd.indexOf(sub7p2);

            if(b >=0  && c>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }

            if((sub7p2 == sub6)|| (sub7p2 == sub4) || (sub7p2 == sub6p2) || (sub7p2 == sub6p2))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub7p2").val('0');
                $("#sub7").val('0');
                return;
            }          
            if((sub7 == 20 && sub6 == 21) || (sub7 == 21 && sub6 == 20)  || (sub7 == 19 && sub6 == 20) || (sub7 == 19 && sub6 == 21) || (sub7 == 20 && sub6 == 19) || (sub7 == 21 && sub6 == 19)|| (sub7p2 == 20 && sub6p2 == 21) || (sub7p2 == 21 && sub6p2 == 20)  || (sub7p2 == 19 && sub6p2 == 20) || (sub7p2 == 19 && sub6p2 == 21) || (sub7p2 == 20 && sub6p2 == 19) || (sub7p2 == 21 && sub6p2 == 19)){
                alertify.error("Please choose Different Subjects as Double History is not allowed" );
                $("#sub7p2").val('0');
                $("#sub7").val('0');
                return;
            }
            var valtext = 0;
            var doublelang=0;
            for(var i =0 ; i<langascd.length; i++)
            {
                if((sub6) == langascd[i])
                {
                    doublelang++;
                }
                if((sub7) == langascd[i])
                {
                    doublelang++;
                }
            }
            if(doublelang>1)
            {
                valtext = 1; 
            }
            if(valtext>0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub7").val('0');  
                $("#sub7p2").val('0');  
                return;
            }
            if ((sub6 == 19 || sub6p2 == 19) && (sub7 == 20 || sub7p2== 20))
            {
                alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }    
            $("#sub7").val(sub7p2);
        })
        $("#sub8").change(function(){

            var sub8 = $("#sub8").val();

            $("#sub8p2").val(sub8);
        })
        $("#sub8p2").change(function(){
            var sub6 = $("#sub6").val();
            var sub6p2 = $("#sub6p2").val();
            var sub8 = $("#sub8p2").val();

            $("#sub8").val(sub8);
        })

        function Empty_All_Dropdowns(){
            $('#sub1').empty();$('#sub1p2').empty();
            $('#sub2').empty();$('#sub2p2').empty();
            $('#sub3').empty();$('#sub3p2').empty();
            $('#sub4').empty();$('#sub4p2').empty();
            $('#sub5').empty();$('#sub5p2').empty();
            $('#sub6').empty(); $('#sub6p2').empty();
            $('#sub7').empty();$('#sub7p2').empty();
            $('#sub8').empty(); $('#sub8p2').empty();
        }

        function ClearALLDropDowns() {

            Empty_All_Dropdowns();

            $("#sub1").append('<option value="0">NONE</option>');
            $("#sub1p2").append('<option value="0">NONE</option>');

            $("#sub2").append('<option value="0">NONE</option>');
            $("#sub2p2").append('<option value="0">NONE</option>');

            $("#sub3").append('<option value="0">NONE</option>');
            $("#sub3p2").append('<option value="0">NONE</option>');

            $("#sub4").append('<option value="0">NONE</option>');
            $("#sub4p2").append('<option value="0">NONE</option>');

            $("#sub5").append('<option value="0">NONE</option>');
            $("#sub5p2").append('<option value="0">NONE</option>');

            $("#sub6").append('<option value="0">NONE</option>');
            $("#sub6p2").append('<option value="0">NONE</option>');

            $("#sub7").append('<option value="0">NONE</option>');
            $("#sub7p2").append('<option value="0">NONE</option>');

            $("#sub8").append('<option value="0">NONE</option>');
            $("#sub8p2").append('<option value="0">NONE</option>');
        }

        function sub_grp_empty_PI(){
            $("#sub1").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub3").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub4").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub5").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub6").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub7").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub8").empty().append('<option selected="selected" value="0">NONE</option>');
        }
        function sub_grp_empty_PII(){

            $('#sub1p2').empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub2p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub3p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub4p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub5p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub6p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub7p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub8p2").empty().append('<option selected="selected" value="0">NONE</option>');
        }

        $('#std_group').change(function(){

            var sel_group = $("#std_group").val();

            if(sel_group == 0){
                ClearALLDropDowns();    
            }

            else if(sel_group == "1")
            {
                ClearALLDropDowns();
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('BIOLOGY',8));
                $("#sub7p2").append(new Option('BIOLOGY',8));
            }
            else if(sel_group == "7")
            {
                ClearALLDropDowns();
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('COMPUTER SCIENCE',78));

                $("#sub7p2").append(new Option('COMPUTER SCIENCE',78));
            }
            else if (sel_group == "8")
            {
                ClearALLDropDowns();
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('ELECTRICAL WIRING (OPT)',43));

                $("#sub7p2").append(new Option('ELECTRICAL WIRING (OPT)',43));

            }
            else if(sel_group=="4")
            {
                ClearALLDropDowns();
                AAMA_KHASA_sub_grp_load();
            }

            else if(sel_group=="9")
            {
                ClearALLDropDowns();
                Adib_sub_grp_load();
            }

            else if(sel_group == "2")
            {
                ClearALLDropDowns();
                Hum_Deaf_Subjects();

                $.each(sub5_Hum,function(val,text){
                    $("#sub4").append(new Option(text,val));

                    $("#sub4p2").append(new Option(text,val));
                });

                $.each(sub6_Hum,function(val,text){
                    $("#sub5").append(new Option(text,val));

                    $("#sub5p2").append(new Option(text,val));
                });

                $.each(sub7_Hum,function(val,text){
                    $("#sub6").append(new Option(text,val));

                    $("#sub6p2").append(new Option(text,val));
                });

                $.each(sub8_Hum,function(val,text){
                    $("#sub7").append(new Option(text,val));

                    $("#sub7p2").append(new Option(text,val));
                });


                var gend = $('#gend').val();
                var rel = $('#religion').val();
                if(gend == 2)
                {
                    if($('#sub7 option[value=13]').length == 0)
                    {
                        $("#sub8").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub8p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub7").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub7p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                    }
                }
                else  if(gend == 1)
                {
                    if($('#sub7 option[value=13]').length > 0)
                    {
                        $("#sub7 option[value='13']").remove();
                        $("#sub7p2 option[value='13']").remove();
                        $("#sub8 option[value='13']").remove();
                        $("#sub8p2 option[value='13']").remove();
                    }
                }

                if(rel == 1)
                {
                    $.each(sub3_Muslim,function(val,text){
                        $("#sub3").empty();
                        $("#sub3").append(new Option(text,val));
                    });
                }
                else if(rel == 2)
                {        $("#sub3").empty();
                    $.each(sub3_Non_Muslim,function(val,text){
                        $("#sub3").append(new Option(text,val));

                    });
                    $('#sub3 option:eq(1)').prop('selected', true)
                }    

                var Elecgrp ="<?php echo @$grp_cd; ?>";
                var isgovt ="<?php echo @$isgovt; ?>";
                var b = ['8'];
                var isElec = '0';
                $.each(Elecgrp,function(i,val){
                    var result=$.inArray(val,b);
                    if(result!=-1)
                    {
                        isElec = 1;
                    }
                })
                if(isgovt == 2)
                {
                    if(isElec != 1)
                    {
                        $("#sub7 option[value='43']").remove();
                        $("#sub7p2 option[value='43']").remove();
                        $("#sub8 option[value='43']").remove();
                        $("#sub8p2 option[value='43']").remove();
                    }  
                }
            }

            else if(sel_group == "5")
            {
                ClearALLDropDowns();

                Hum_Deaf_Subjects();

                $.each(sub5_Deaf,function(val,text){
                    $("#sub4").append(new Option(text,val));
                    $("#sub4p2").append(new Option(text,val));
                });
                $.each(sub6_Deaf,function(val,text){
                    $("#sub6").append(new Option(text,val));
                    $("#sub6p2").append(new Option(text,val));
                });
                $.each(sub7_Deaf,function(val,text){
                    $("#sub7").append(new Option(text,val));
                    $("#sub7p2").append(new Option(text,val));
                });
                $.each(sub8_Deaf,function(val,text){
                    $("#sub5").append(new Option(text,val));
                    $("#sub5p2").append(new Option(text,val));
                });
            }
            else if (sel_group == "0")
            {
                ClearALLDropDowns();
            }
        })

        if($("#std_group").val() == "1")
        {
            ClearALLDropDowns();
            load_Bio_CS_Sub();
            $("#sub7").append(new Option('BIOLOGY',8));
            $("#sub7p2").append(new Option('BIOLOGY',8));
        }
        else if($("#std_group").val() == "7")
        {
            ClearALLDropDowns();
            load_Bio_CS_Sub();
            $("#sub7").append(new Option('COMPUTER SCIENCE',78));
            $("#sub7p2").append(new Option('COMPUTER SCIENCE',78));
        }

        else if($("#std_group").val() == "2")
        {
            ClearALLDropDowns();
            Hum_Deaf_Subjects();

            $.each(sub5_Hum,function(val,text){
                $("#sub4").append(new Option(text,val));

                $("#sub4p2").append(new Option(text,val));
            });

            $.each(sub6_Hum,function(val,text){
                $("#sub5").append(new Option(text,val));

                $("#sub5p2").append(new Option(text,val));
            });

            $.each(sub7_Hum,function(val,text){
                $("#sub6").append(new Option(text,val));

                $("#sub6p2").append(new Option(text,val));

            }); 
            $('#sub6 option[value="<?php echo @$data['sub6'] ?>"]').prop('selected', 'selected');
            $('#sub6p2 option[value="<?php echo @$data['sub6'] ?>"]').prop('selected', 'selected'); 

            $.each(sub8_Hum,function(val,text){
                $("#sub7").append(new Option(text,val));

                $("#sub7p2").append(new Option(text,val));
            });
            $('#sub7 option[value="<?php echo @$data['sub7'] ?>"]').prop('selected', 'selected');
            $('#sub7p2 option[value="<?php echo @$data['sub7'] ?>"]').prop('selected', 'selected');



            var Elecgrp ="<?php echo @$grp_cd; ?>";
            var isgovt ="<?php echo @$isgovt; ?>";
            var b = ['8'];
            var isElec = '0';
            $.each(Elecgrp,function(i,val){
                var result=$.inArray(val,b);
                if(result!=-1)
                {
                    isElec = 1;
                }
            })
            if(isgovt == 2)
            {
                if(isElec != 1)
                {
                    $("#sub7 option[value='43']").remove();
                    $("#sub7p2 option[value='43']").remove();
                    $("#sub8 option[value='43']").remove();
                    $("#sub8p2 option[value='43']").remove();
                }  
            }
            var Gender = $("#gend").val();

            if(Gender == "2")
            {
                $("#sub6").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                $("#sub6p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                $("#sub7").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                $("#sub7p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
            }
            else
            {
                //do nothing;
            }
        }

        else if($("#std_group").val()==5)
        {
            ClearALLDropDowns();
            Hum_Deaf_Subjects();

            $.each(sub5_Deaf,function(val,text){
                $("#sub4").append(new Option(text,val));
                $("#sub4p2").append(new Option(text,val));
            });
            $.each(sub6_Deaf,function(val,text){
                $("#sub6").append(new Option(text,val));
                $("#sub6p2").append(new Option(text,val));
            });
            $.each(sub7_Deaf,function(val,text){
                $("#sub7").append(new Option(text,val));
                $("#sub7p2").append(new Option(text,val));
            });
            $.each(sub8_Deaf,function(val,text){
                $("#sub5").append(new Option(text,val));
                $("#sub5p2").append(new Option(text,val));
            });
            $("#sub7").val(<?php echo @$data['sub7'] ?>);
            $("#sub6").val(<?php echo @$data['sub6'] ?>);
            $("#sub5").val(<?php  echo @$data['sub5']; ?>);
        }
        else if($("#std_group").val()=="4")
        {
            ClearALLDropDowns();
            AAMA_KHASA_sub_grp_load();
        }
        function showallsub(){
            $('#sub4').show();
            $('#sub4p2').show();
            $('#sub5').show();
            $('#sub5p2').show();
            $('#sub6').show();
            $('#sub6p2').show();
            $('#sub7').show();
            $('#sub7p2').show();
            $('#sub3').show();
            $('#sub3p2').show();
        }
        function AAMA_KHASA_sub_grp_load()
        {
            $("#sub1").append(new Option('URDU',1));
            $("#sub1p2").append(new Option('URDU',1));
            $("#sub2").append(new Option('ENGLISH',2));
            $("#sub2p2").append(new Option('ENGLISH',2));
            $("#sub8").append(new Option('PAKISTAN STUDIES',4));
            $("#sub8p2").append(new Option('PAKISTAN STUDIES',4));
            $('#sub4').hide();
            $('#sub4p2').hide();
            $('#sub5').hide();
            $('#sub5p2').hide();
            $('#sub6').hide();
            $('#sub6p2').hide();
            $('#sub7').hide();
            $('#sub7p2').hide();
            $('#sub3').hide();
            $('#sub3p2').hide();
            //}); 
        }  
        function Adib_sub_grp_load()
        {
            $('#sub1').hide();
            $('#sub1p2').hide();
            $("#sub2").append(new Option('ENGLISH',2));
            $("#sub2p2").append(new Option('ENGLISH',2));
            $('#sub8').hide();
            $('#sub8p2').hide();
            $('#sub4').hide();
            $('#sub4p2').hide();
            $('#sub5').hide();
            $('#sub5p2').hide();
            $('#sub6').hide();
            $('#sub6p2').hide();
            $('#sub7').hide();
            $('#sub7p2').hide();
            $('#sub3').hide();
            $('#sub3p2').hide();

        }  

        function sub_grp_load(){

            ClearALLDropDowns();

            if(sub1 !="")
            {
                $("#sub1").append(new Option('<?php  echo  array_search(@$data['sub1'],$subarray); ?>',sub1));
                $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");    

                $("#sub1p2").append(new Option('<?php  echo  array_search(@$data['sub1'],$subarray); ?>',sub1));
                $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");

                $("#sub2").empty();
                $("#sub2").append(new Option('<?php  echo  array_search(@$data['sub2'],$subarray); ?>',sub2));
                $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");

                $("#sub2p2").empty();
                $("#sub2p2").append(new Option('<?php  echo  array_search(@$data['sub2'],$subarray); ?>',sub2));
                $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");

                $("#sub3").empty();
                $("#sub3").append(new Option('<?php  echo  array_search(@$data['sub3'],$subarray); ?>',sub3));
                $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");

                $("#sub3p2").empty();
                $("#sub3p2").append(new Option('<?php  echo  array_search(@$data['sub3'],$subarray); ?>',sub3));
                $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");

                $("#sub4").empty();
                $("#sub4").append(new Option('<?php  echo  array_search(@$data['sub4'],$subarray); ?>',sub4));
                $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");

                $("#sub4p2").empty();
                $("#sub4p2").append(new Option('<?php  echo  array_search(@$data['sub4'],$subarray); ?>',sub4));

                $("#sub5").empty();
                $("#sub5").append(new Option('<?php  echo  array_search(@$data['sub5'],$subarray); ?>',sub5));
                $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");

                $("#sub5p2").empty();
                $("#sub5p2").append(new Option('<?php  echo  array_search(@$data['sub5'],$subarray); ?>',sub5));
                $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");

                $("#sub6").empty();
                $("#sub6").append(new Option('<?php  echo  array_search(@$data['sub6'],$subarray); ?>',sub6));
                $("#sub6 option[value='" + sub1 + "']").attr("selected","selected");

                $("#sub6p2").empty();
                $("#sub6p2").append(new Option('<?php  echo  array_search(@$data['sub6'],$subarray); ?>',sub6));
                $("#sub6p2 option[value='" + sub6 + "']").attr("selected","selected");

                $("#sub7").empty();
                $("#sub7").append(new Option('<?php  echo  array_search(@$data['sub7'],$subarray); ?>',sub7));
                $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");

                $("#sub7p2").empty();
                $("#sub7p2").append(new Option('<?php  echo  array_search(@$data['sub7'],$subarray); ?>',sub7));
                $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");

                $("#sub8").empty();
                $("#sub8").append(new Option('<?php  echo  array_search(@$data['sub8'],$subarray); ?>',sub8));
                $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");

                $("#sub8p2").empty();
                $("#sub8p2").append(new Option('<?php  echo  array_search(@$data['sub8'],$subarray); ?>',sub8));
                $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");
            }
            // PART II Subjects ....... 
        }

        $('#religion').change(function()
            {
                if($(this).val() == 1) {

                    $("#sub3").empty(); 
                    $("#sub3").prepend('<option selected="selected" value="3"> ISLAMIYAT (COMPULSORY) </option>');
                }
                else
                {
                    $("#sub3").empty(); 
                    $("#sub3").prepend("<option selected='selected' value='51'> ETHICS </option>");
                    $("#sub3").prepend("<option  value='3'> ISLAMIYAT (COMPULSORY) </option>");
                }
        });
        $('#gend').change(function()
            {
                var std_grp =  $("#std_group").val();
                if($(this).val() == 2 && std_grp == 2)
                {

                    if($('#sub7 option[value=13]').length == 0)
                    {
                        $("#sub8").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub8p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub7").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub7p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                    }


                }
                else
                {
                    if($('#sub7 option[value=13]').length > 0)
                    {
                        $("#sub7 option[value='13']").remove();
                        $("#sub7p2 option[value='13']").remove();
                        $("#sub8 option[value='13']").remove();
                        $("#sub8p2 option[value='13']").remove();
                    }
                }
        })

        jQuery(document).ready(function () {

            sub_grp_load();
            $(document.getElementById("bay_form")).mask("99999-9999999-9", { placeholder: "_" });
            $(document.getElementById("father_cnic")).mask("99999-9999999-9", { placeholder: "_" });
            $(document.getElementById("mob_number")).mask("9999-9999999", { placeholder: "_" });
        });
    });
    $('#cand_name').keydown(function (e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });
    $('#father_name').keydown(function (e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
            e.preventDefault();
        } else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                e.preventDefault();
            }
        }
    });

</script>