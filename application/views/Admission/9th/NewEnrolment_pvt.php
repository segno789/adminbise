
<form method="post" enctype="multipart/form-data" name="myform" id="myform" action="<?php base_url(); ?>NewEnrolment_insert">
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
                <input class="text-uppercase form-control"  type="text" id="cand_name" style="text-transform: uppercase;" name="cand_name" placeholder="Candidate Name" maxlength="60" value="<?php echo @$data['name'] ?>"  <?php if(@$data['name']!= "") echo "readonly='readonly'";  ?>  >
            </div>
            <div class="col-md-4">
                <label class="control-label" for="father_name">
                    Father's Name :
                </label>        
                <input class="text-uppercase form-control" id="father_name" name="father_name" style="text-transform: uppercase;" type="text" placeholder="Father's Name" maxlength="60"  value="<?php echo @$data['Fname']; ?>" <?php if(@$data['Fname']!= "") echo "readonly='readonly'";  ?> > 
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


                    <option value='0' selected='selected'>None</option>
                    <option value='1' >URBAN</option> 
                    <option value='2'>RURAL</option>";


                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="gender">
                    Gender :
                </label>     
                <select  class="form-control text-uppercase" id="gender" name="gender">
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


                    <option value='0' selected='selected'>None</option>
                    <option value='1' >MUSLIM</option> 
                    <option value='2'>NON MUSLIM</option>";

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
                    <?php echo trim(@$data['addr']);  ?>
                </textarea>       
            </div>
        </div>
    </div>
    <hr class="colorgraph">
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-6">
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
    <div style="width: 750px; display:none;" class="pull-right" id="instruction" >
        <img src="<?php echo base_url(); ?>assets/img/Instructions.jpg" class="img-responsive" alt="instructions.jpg" style="width: 650px;">
    </div>
    <hr class="colorgraph">
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-6">
                <h4 class="bold">Exam Information :</h4>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <label class="control-label" for="std_group">
                    Study Group :
                </label>
                <select id="std_group" class="form-control text-uppercase" name="std_group">
                    <option value="0">SELECT GROUP</option>
                    <option value="1">SCIENCE WITH BIOLOGY</option>
                    <option value="7">SCIENCE  WITH COMPUTER SCIENCE</option>
                    <option value="2">GENERAL</option>
                    <option value="5">DEAF AND DUMB</option>
                </select>                                            
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <label class="control-label">
                    Choose Subjects(Elective Subjects are Enabled Only)
                </label>        
                <select id="sub1" class="form-control text-uppercase" name="sub1"><option value="1">Urdu</option></select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <select id="sub2"  name="sub2" class="form-control text-uppercase">
                    <option value="2">English</option></select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <select id="sub3" class="form-control text-uppercase" name="sub3"><option value="3">Islamyat Compulsory</option></select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <select id="sub8"  name="sub8" class="form-control text-uppercase">
                    <option value="4">Pakistan Studies</option></select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <select id="sub4" class="form-control text-uppercase" name="sub4"></select> 
            </div>
        </div>
    </div>    
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <select id="sub5"  name="sub5" class="form-control text-uppercase"></select> 
            </div>
        </div>
    </div> 
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <select id="sub6"  name="sub6" class="form-control text-uppercase">
                </select> 
            </div>
        </div>
    </div> 
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <select id="sub7"  name="sub7" class="form-control text-uppercase">
                </select> 
            </div>
        </div>
    </div> 
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <label class="checkbox-inline">
                    <input type="checkbox" class="checkboxtext" id="terms" name="terms" value="yes">I agree with the <a href="https://www.bisegrw.edu.pk/ssc/assets/img/Instructions.jpg" target="_blank">Terms and Conditions </a> of Board of Intermediate &amp; Secondary Education, Gujranwala  
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-3">

                <button type="submit" name="save" class="btn btn-primary btn-block" onclick="return checks();"> 
                    Save Form
                </button>
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>assets/img/Instructions.jpg" download="instructions.jpg" class="btn btn-info btn-block">Download Instruction</a>

            </div>
            <div class="col-md-3">
                <input type="button" class="btn btn-danger btn-block" value="Cancel" id="btnCancel" name="btnCancel" onclick="return CancelAlertpvt9th();">
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url(); ?>assets/js_matric/jquery-1.8.3.js"></script>
<script type="text/javascript">

    $(window).load(function()
        {
            $.fancybox("#instruction");

            $('#address').each(function(){
                $(this).val($(this).val().trim());
            });

    });


    function CancelAlertpvt9th()
    {
        var msg = "Are You Sure You want to Cancel this Form ?"
        alertify.confirm(msg, function (e) {
            if (e) {
                // user clicked "ok"
                window.location.href ="<?php echo base_url(); ?>Admission_pvt_9th";
            } else {
                // user clicked "cancel"

            }
        });
    }
    function checks(){
        var status  =  check_NewEnrol_validation();
        if(status == 0)
        {
            return false;    
        }
        else
        {
            $("button[type='submit']").html('Please wait...').attr('disabled','disabled'); 
            $('.mPageloader').show();
            $.ajax({

                type: "POST",
                url: "<?php  echo site_url('Admission_9th_pvt/frmvalidation'); ?>",
                data: $("#myform").serialize() ,
                datatype : 'html',
                cache:false,
                async: false,
                beforeSend: function() {  $('.mPageloader').show(); },
                //  complete: function() { $('.mPageloader').hide();},

                success: function(data)
                {                 


                    var obj = JSON.parse (data);
                    if(obj.excep == 'Success')
                    {
                        $("#myform").submit();
                        return false;
                    }
                    else
                    {
                        alertify.error(obj.excep);
                        $('.mPageloader').hide();
                        $("button[type='submit']").html('Save Form').removeAttr("disabled");
                        return false;     

                    }
                    //  
                },
                error: function(request, status, error){
                    alertify.error(request.responseText);
                    $('.mPageloader').hide();
                }
            });






            return false;
        } 
    }
    function  check_NewEnrol_validation(){

        var name =  $('#cand_name').val();
        var dist_cd= $('#pvtinfo_dist').val();
        var teh_cd= $('#pvtinfo_teh').val();
        var zone_cd= $('#pvtZone').val();

        //  var pp_cent= $('#pp_cent').val();           
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
        var gend = $("#gender").val();
        var religion = $('#religion').val();
        var nationality = $('#nationality').val();
        var medium = $('#medium').val();
        var UrbanRural = $('#UrbanRural').val();
        var terms = $("input[name='terms']:checked").val();
        var status = 0;
        var fuData = document.getElementById('image');
        var FileUploadPath = fuData.value;
        if (FileUploadPath == '') {
            alertify.error("Please upload an image");
            jQuery('#previewImg').removeAttr('src');
            $("#previewImg").attr("src","<?php echo base_url(); ?>assets/img/profile.png");
            $("#image").focus();
            return status;
        }

        // alert('sub6 '+sub6p1+ ' and '+ sub6p2);
        if(name == "" ||  name == undefined){
            alertify.error("Please Enter your  Name.");

            $('#cand_name').focus(); 
            return status;
        }

        else if (name.trim().length < 3 )
        {
            alertify.error("Please Enter correct valid Name ") 
            $('#cand_name').focus(); 
            return status;
        }

        else if(fName == "" || fName == undefined){
            alertify.error("Please Enter your  Father's Name.");

            $('#father_name').focus(); 
            return status;
        }   

        else if (fName.trim().length < 3 )
        {
            alertify.error("Please Enter correct Father's Name") 
            $('#father_name').focus(); 
            return status;
        }

        else if(bFormNo == "" || bFormNo == 0 || bFormNo == undefined)
        {
            alertify.error("Please Enter your  bay-Form.");
            $('#bay_form').focus();  
            return status; 
        }
        else if(FNic == "" || FNic.length == undefined )
        {
            alertify.error("Please Enter your  Father's CNIC.");

            $('#father_cnic').focus();  
            return status; 
        }
        else if(bFormNo == "" || bFormNo == 0 || bFormNo == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            $('#ErrMsg').html("<b>Please Enter your bay-Form</b>"); 
            $('#bay_form').focus();  
            return status; 
        }
        else if(FNic == bFormNo  )
        {

            alertify.error("B-form Number and Father CNIC cannot be same.") 
            $('#bay_form').focus();   
            return status; 
        }
        else if(dob == "" || dob.length == undefined)
        {
            alertify.error("Please Enter your  Date of Birth.");

            $('#dob').focus(); 
            return status;  
        }

        else if(mobNo == "" || mobNo == 0 || mobNo == undefined)
        {
            alertify.error("Please Enter your Mobile No.");

            $('#mob_number').focus();   
            return status;  
        }
        else if(medium == "" || medium == 0 || medium == undefined)
        {
            alertify.error("Please Select Medium.") 
            $('#medium').focus();   
            return status;  
        }
        else if(MarkOfIdent == "" || MarkOfIdent == 0 || MarkOfIdent == undefined)
        {
            alertify.error("Please Enter your Mark of Indentification.");
            //$('#ErrMsg').html("<b>Please Enter your Mark of Indentification</b>"); 
            $('#MarkOfIden').focus();   
            return status;  
        }
        else if(nationality == "" || nationality == 0 || nationality == undefined)
        {
            alertify.error("Please Select Nationality") 
            $('#nationality').focus();   
            return status;  
        }
        else if(UrbanRural == undefined || UrbanRural == 0)
        {
            alertify.error("Please Select Your Locilaty First!")
            $('#UrbanRural').focus();
            return status;
        }
        else if(gend == "" || gend== undefined)
        {
            alertify.error("Please Select Your Gender.");
            //$('#ErrMsg').html("<b>Please Select Your Gender.</b>"); 
            $("input[name=gender]:checked").focus();   
            return status;  
        }
        else if(religion == undefined || religion == 0)
        {
            alertify.error("Please Select Your Religion First!")
            $('#religion').focus();
            return status;
        }
        else if(address == "" || address == 0 || address.length ==undefined )
        {
            alertify.error("Please Enter your Address.");
            //$('#ErrMsg').html("<b>Please Enter your Address</b>"); 
            $('#address').focus(); 
            return status;    
        }

        else  if (dist_cd < 1) 
        {

            alertify.error("Please select District.");

            $("#pvtinfo_dist").focus();

            return status;  
        }

        else   if (teh_cd < 1) {
            alertify.error("Please select Tehsil.");
            //alert('Please select Tehsil');                          
            $("#pvtinfo_teh").focus();
            return status;  
        }
        else  if (zone_cd < 1) {
            alertify.error("Please select Zone.");
            // alert('Please select Zone. ');                          
            $("#pvtZone").focus();
            return status;  
        }


        else   if ($("#std_group").find('option:selected').val() < 1) 
        {
            alertify.error("Please Enter your Study Group.");

            // alert('Study Group not selected ');                          
            $("#std_group").focus();
            return status;  
        }
        else   if ($("#sub3").find('option:selected').val() < 1) 
        {
            alertify.error("Plesae select  Subject.");

            $("#sub3").focus();

            return status;  
        }
        else   if ($("#sub8").find('option:selected').val() < 1) 
        {
            alertify.error("Plesae select  Subject.");

            $("#sub8").focus();

            return status;  
        }
        else   if ($("#sub5").find('option:selected').val() < 1) 
        {
            alertify.error("Plesae select  Subject.");

            $("#sub5").focus();

            return status;  
        }

        else   if ($("#sub6").find('option:selected').val() < 1) 
        {
            alertify.error("Plesae select 6th Subject.");


            // alert('Plesae select 6th Subject  ');                          
            $("#sub6").focus();
            return status;  
        }

        else   if ($("#sub7").find('option:selected').val() < 1) 
        {
            alertify.error("Plesae select 7th Subject.");


            // alert('Plesae select 6th Subject  ');                          

            $("#sub7").focus();
            return status;  
        }

        else   if ($("#sub8").find('option:selected').val() < 1) 
        {
            alertify.error("Plesae select 8th Subject.");

            $("#sub8").focus();
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

</script>