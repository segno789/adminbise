
<form method="post" enctype="multipart/form-data" name="myform" id="myform">

    <?php 
    $type = pathinfo(@$data[0]['picpath'], PATHINFO_EXTENSION); 
    @$image_path_selected = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents(@$data[0]['picpath']));
    ?>

    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-5">
                <img id="image_upload_preview"  class="img-responsive" style="width:130px; height: 130px;" src="<?php  echo $image_path_selected;?>" alt="Candidate Image" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-5">
                <h4 class="bold">Personal Information</h4>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="cand_name" >
                    Candidate Name:
                </label>        
                <input class="text-uppercase form-control" type="text" id="cand_name" name="cand_name" placeholder="Candidate Name" maxlength="60" readonly="readonly"  value="<?php echo $data[0]['name']; ?>">
            </div>
            <div class="col-md-4">
                <label class="control-label" for="father_name">
                    Father's Name :
                </label>        
                <input class="text-uppercase form-control" id="father_name" name="father_name" type="text" placeholder="Father's Name" maxlength="60" readonly="readonly" value="<?php echo  $data['0']['Fname']; ?>" required="required">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="bay_form" >
                    Bay Form No:
                </label>        
                <?php
                $bform = $data['0']['BForm'];

                if($bform == ""){
                    echo '<input class="text-uppercase form-control" type="text" id="bay_form" name="bay_form"  placeholder="34101-1111111-1" value=""  required="required" >';
                }
                else{
                    echo'<input class="text-uppercase form-control" type="text" id="bay_form" name="bay_form"  placeholder="34101-1111111-1" value='.@$data[0][BForm].' required="required" >';
                }
                ?>
            </div>

            <div class="col-md-4">
                <label class="control-label" for="father_cnic">
                    Father's CNIC:
                </label>        
                <?php
                $fnic = $data['0']['FNIC'];
                if($fnic== "" || $fnic== '00000-0000000-0' || $fnic== '11111-1111111-1' || $fnic== '22222-2222222-2' || 
                    $fnic== '33333-3333333-3' || $fnic== '44444-4444444-4' || $fnic== '55555-5555555-5' || $fnic== '66666-6666666-6' || $fnic== '77777-7777777-7' || $fnic== '88888-8888888-8' || $fnic== '99999-9999999-9'){
                    echo'<input class="text-uppercase form-control" id="father_cnic" name="father_cnic" type="text" placeholder="34101-1111111-1"  value=""  required="required">';        
                }
                else{
                    echo'<input class="text-uppercase form-control" id="father_cnic" name="father_cnic" type="text" placeholder="34101-1111111-1"  value='.@$data[0][FNIC].' readonly="readonly"  required="required">';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="dob">Date of Birth:</label>
                <input class="text-uppercase form-control" type="text" name="dob" placeholder="Date of Birth" readonly="readonly"  value="<?php echo $data['0']['Dob']?>" required = "required">
            </div>
            <div class="col-md-4">
                <label class="control-label" for="mob_number">Mobile Number:</label>
                <input class="text-uppercase form-control" id="mob_number" name="mob_number" type="text" value="" required="required">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="medium"> MEDIUM:</label>
                <select id="medium" class="form-control text-uppercase" name="medium">
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
            </div>
            <div class="col-md-4">
                <label class="control-label" for="MarkOfIden"> Mark of Identification:</label>
                <input class="form-control text-uppercase" type="text" id="MarkOfIden" style="text-transform: uppercase;" name="MarkOfIden" value="<?php echo  $data['0']['markOfIden']; ?>" required="required" maxlength="60" >
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="speciality">Speciality:</label>
                <select id="speciality"  class="form-control text-uppercase" name="speciality">
                    <?php
                    echo  "<option value='0' selected='selected'>None</option> 
                    <option value='1'>Deaf & Dumb</option>
                    <option value='2'>Board Employee</option>;
                    <option value='3'>Disable</option>";
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="nationality" >
                    Nationality :
                </label>        
                <select name="nationality" class="form-control text-uppercase" id="nationality"> 
                    <?php
                    $nat = $data[0]['nat'];
                    if($nat == 1)
                    {
                        echo  
                        "<option value='1' selected='selected'>Pakistani</option>
                        <option value='2'>Non Pakistani</option>";
                    }
                    else if ($nat == 2)
                    {
                        echo  
                        "<option value='1'>Pakistani</option> 
                        <option value='2' selected='selected'>Non Pakistani</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>

    <div class="hidden" id="boardEmployeeDiv">
        <div class="form-group">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <label class="control-label" for="empBrdCd" >
                        Enter Board Employee Code:
                    </label>        
                    <input class="text-uppercase form-control" type="text" id="empBrdCd" name="empBrdCd" placeholder="Board Employee Code" maxlength="4" value="">
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="gend">
                    Gender :
                </label>     
                <select name="gender" class="form-control text-uppercase" id="gend" disabled="disabled">
                    <?php
                    @$gender = $data[0]['sex'];
                    if($gender == 1)
                    {
                        echo"<option value='1' selected='selected'>MALE</option> 
                        <option value='2'>FEMALE</option>";
                    }
                    else if ($gender == 2)
                    {
                        echo"<option value='1'>MALE</option> 
                        <option value='2' selected='selected'>FEMALE</option>";
                    }
                    ?>
                </select>

            </div>
            <div class="col-md-4">
                <label class="control-label" for="UrbanRural" >
                    Locality : 
                </label>        
                <select name="UrbanRural" class="form-control text-uppercase" id="UrbanRural"> 
                    <?php
                    $resid = $data[0]['ruralOrurban'];
                    if($resid == 1 )
                    {
                        echo"<option value='1' selected='selected'>URBAN</option> 
                        <option value='2'>RURAL</option>";
                    }
                    else if($resid == 2)
                    {
                        echo"<option value='1'>URBAN</option> 
                        <option value='2' selected='selected'>RURAL</option>";
                    }
                    else
                    {
                        echo"<option value='1' selected='selected'>URBAN</option> 
                        <option value='2'>RURAL</option>";
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
                    $rel = $data[0]['rel'];
                    if($rel == 1)
                    {
                        echo"<option value='1' selected='selected'>MUSLIM</option> 
                        <option value='2'>NON MUSLIM</option>";
                    }
                    else if ($rel == 2)
                    {
                        echo"<option value='1'>MUSLIM</option> 
                        <option value='2' selected='selected'>NON MUSLIM</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="hafiz" >
                    Hafiz-e-Quran :
                </label>        
                <select name="hafiz" class="form-control text-uppercase" id="hafiz"> 
                    <option value='1'>NO</option> 
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
                    <?php echo $data[0]['addr'];  ?>
                </textarea>       
            </div>
        </div>
    </div>
    <hr class="colorgraph">
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-5 col-md-5">
                <h4 class="bold">Old Examination Information</h4>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="oldrno" >
                    Roll No :
                </label>        
                <input class="text-uppercase form-control" type="text" readonly="readonly" id="oldrno" name="oldrno" value="<?php echo  $data['0']['rno']; ?>" >
            </div>
            <div class="col-md-4">
                <label class="control-label" for="oldyear">
                    Year :
                </label>        
                <input type="text" class="text-uppercase form-control" name="oldyear" id = "oldyear" readonly="readonly" value="<?php  echo $data['0']['Iyear']; ?>"/> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="oldsess" >
                    Session :
                </label>        
                <input type="text" class="text-uppercase form-control" id="oldsess" name="oldsess" readonly="readonly" value="<?php echo $data['0']['sess'] == 1 ? "Annual" :"Supplementary"; ?>"/> 
            </div>
            <div class="col-md-4">
                <label class="control-label" for="oldboard">
                    Board :
                </label>        
                <input type="text" class="text-uppercase form-control" id="oldboard" name="oldboard" readonly="readonly" value="<?php echo $data[0]['brd_name'];?>"/>     
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
                    $grp = $data[0]['grp_cd'];
                    $sub6 = $data[0]['sub6'];
                    $sub7 = $data[0]['sub7'];
                    $sub8 = $data[0]['sub8'];
                    $chance = $data[0]['chance'];
                    $exam_type = $data[0]['exam_type'];

                    //DebugBreak();

                    if(isset($_POST))
                    {
                        @$cattype   = @$cattype;    
                    }
                    else
                    {
                        @$cattype   = @$_POST["CatType"];    
                    }

                    @$cat09_forAma =$data[0]["cat09"];
                    @$cat10_forAma =$data[0]["cat10"];
                    @$status_forAma =$data[0]["status"];

                    if($exam_type == 2 && $grp !=4)
                    {
                        if($grp == 1 && ($sub7 == 8 || $sub8 == 8))
                        {
                            echo "<option value='1' selected='selected'>SCIENCE WITH BIOLOGY</option>";  
                        }
                        else 
                        {
                            echo "<option value='1' >SCIENCE WITH BIOLOGY</option>";    
                        }
                        if($sub7 == 78 || $sub8 == 78)
                        {
                            echo "<option value='7' selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>";
                        }
                        else
                        {
                            echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>"; 
                        }
                        if($sub7 == 43 || $sub8 == 43)
                        {
                            echo "<option value='8'  selected='selected'>SCIENCE  WITH ELECTRICAL WIRING</option>";
                        }
                        else
                        {
                            echo "<option value='8'  >SCIENCE  WITH ELECTRICAL WIRING</option>";
                        }

                        if($grp == 2)
                        {
                            echo "<option value='2' selected='selected'>GENERAL</option>";  
                        }
                        else
                        {
                            echo "<option value='2'>GENERAL</option>";   
                        }
                        if($grp == 5)
                        {
                            echo "<option value='5' selected='selected'>DEAF AND DUMB</option>";  
                        }
                        else
                        {
                            echo "<option value='5'>DEAF AND DUMB</option>";  
                        }
                    }


                    if($grp == 4 && $exam_type == 2)
                    {
                        echo "<option value='4' selected='selected'>Ama Group</option>";  
                    }

                    if($exam_type == 3 OR $exam_type == 1)
                    {
                        if($grp == 1 && $sub7  == 8)
                        {
                            echo "<option value='1' selected='selected'>SCIENCE WITH BIOLOGY</option>";                                                               
                            echo "<option value='2'>GENERAL</option>";
                            echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>";  
                            echo "<option value='5'>DEAF AND DUMB</option>";  
                        }

                        if($grp == 1 && $sub7  == 78)
                        {
                            echo "<option value='1' >SCIENCE WITH BIOLOGY</option>"; 
                            echo "<option value='7' selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>";                                                               
                            echo "<option value='2'>GENERAL</option>";
                            echo "<option value='5'>DEAF AND DUMB</option>";  
                        }
                        if($grp == 1 && $sub7  == 43)
                        {
                            echo "<option value='1' >SCIENCE WITH BIOLOGY</option>";                                                                                  
                            echo "<option value='7' >SCIENCE  WITH COMPUTER SCIENCE</option>";
                            echo "<option value='8'  selected='selected' >SCIENCE  WITH ELECTRICAL WIRING</option>";
                            echo "<option value='2'>GENERAL</option>";
                            echo "<option value='5'>DEAF AND DUMB</option>";  
                        }

                        if($grp == 2)
                        {
                            if($sub6 == 43){
                                echo "<option value='1' >SCIENCE WITH BIOLOGY</option>";                                                                                  
                                echo "<option value='7' >SCIENCE  WITH COMPUTER SCIENCE</option>";
                                echo "<option value='8'  selected='selected' >SCIENCE  WITH ELECTRICAL WIRING</option>";
                                echo "<option value='2'>GENERAL</option>";
                                echo "<option value='5'>DEAF AND DUMB</option>";  
                            }
                            else{
                                echo "<option value='2' selected='selected'>GENERAL</option>";  
                                echo "<option value='1' >SCIENCE WITH BIOLOGY</option>";                                                               
                                echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>";  
                                echo "<option value='5'>DEAF AND DUMB</option>";    
                            }
                        }

                        if($grp == 5)
                        {
                            echo "<option value='5' selected='selected'>DEAF AND DUMB</option>";  
                            echo "<option value='2' >GENERAL</option>"; 
                            echo "<option value='1'>SCIENCE WITH BIOLOGY</option>";                                                               
                            echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>";  

                        }
                        if($grp == 4)
                        {
                            echo "<option value='4' selected='selected'>Ama Group</option>";  
                        }

                    }
                    if($exam_type == 4 || $exam_type == 5 || $exam_type == 6)
                    {
                        if($grp == 1 && $sub7 == 8)
                        {
                            echo "<option value='1' selected='selected'>SCIENCE WITH BIOLOGY</option>";  
                            echo "<option value='2'>GENERAL</option>";
                            echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>";  
                            echo "<option value='5'>DEAF AND DUMB</option>";  
                        }

                        if($grp == 1 && $sub7 == 78)
                        {
                            echo "<option value='7' selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>";
                            echo "<option value='1' >SCIENCE WITH BIOLOGY</option>"; 
                            echo "<option value='2'>GENERAL</option>";  
                            echo "<option value='5'>DEAF AND DUMB</option>";  
                        }
                        if($grp == 1 && $sub7 == 43)
                        {
                            echo"<option value='8' selected='selected'>SCIENCE  WITH ELECTRICAL WIRING</option>";
                            echo "<option value='2'>GENERAL</option>"; 
                            echo "<option value='1' >SCIENCE WITH BIOLOGY</option>";  
                            echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>";
                            echo "<option value='5'>DEAF AND DUMB</option>";  
                        }


                        if($grp == 2)
                        {
                            echo "<option value='2' selected='selected'>GENERAL</option>";  
                            echo "<option value='1'>SCIENCE WITH BIOLOGY</option>";  
                            echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>";
                            echo "<option value='5'>DEAF AND DUMB</option>";  
                        }

                        if($grp == 5)
                        {
                            echo "<option value='5' selected='selected'>DEAF AND DUMB</option>";  
                            echo "<option value='1'>SCIENCE WITH BIOLOGY</option>";  
                            echo "<option value='2'>GENERAL</option>";  
                            echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>";;  
                        }
                    }
                    if($exam_type == 14) 
                    {

                        if($grp == 1 && ($data[0]['sub6']== 8 || $data[0]['sub7']== 8 ))

                            echo "
                            <option value='1'  selected='selected'>SCIENCE WITH BIOLOGY</option>"; 

                        if($grp == 1 && ($data[0]['sub6']== 78 || $data[0]['sub7']== 78 ))

                            echo "
                            <option value='7'  selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>"; 

                        if($grp == 2)

                            echo"<option value='2' selected='selected'>GENERAL</option>";

                        if($grp == 5)
                            echo"<option value='5' selected='selected'>DEAF AND DUMB</option>";

                        if($grp == 7)
                            echo"<option value='7' selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>";
                    }
                    if($exam_type == 15)
                    {


                        if($grp == 1 && ($data[0]['sub6']== 8 || $data[0]['sub7']== 8 ))

                            echo "
                            <option value='1'  selected='selected'>SCIENCE WITH BIOLOGY</option>"; 

                        if($grp == 1 && ($data[0]['sub6']== 78 || $data[0]['sub7']== 78 ))

                            echo "
                            <option value='7'  selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>"; 



                        if($grp == 2)

                            echo"<option value='2'  selected='selected'>GENERAL</option>";



                        if($grp == 5)
                            echo"<option value='5' selected='selected'>DEAF AND DUMB</option>";



                        if($grp == 7)
                            echo"<option value='7' disabled='disabled' selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>";


                        if($grp == 8)
                            echo"<option value='8' disabled='disabled' selected='selected'>SCIENCE  WITH ELECTRICAL WIRING</option>";
                    }
                    if($exam_type == 16 && $cattype == 1)
                    {

                        if($grp == 1 && ($data[0]['sub6']== 8 || $data[0]['sub7']== 8 ))

                            echo "
                            <option value='1'  selected='selected'>SCIENCE WITH BIOLOGY</option>"; 

                        if($grp == 1 && ($data[0]['sub6']== 78 || $data[0]['sub7']== 78 ))

                            echo "
                            <option value='7'  selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>"; 

                        if($grp == 2)

                            echo"<option value='2' selected='selected'>GENERAL</option>";



                        if($grp == 5)
                            echo"<option value='5'  selected='selected'>DEAF AND DUMB</option>";



                        if($grp == 7)
                            echo"<option value='7' selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>";
                    }
                    if($exam_type == 16 && $cattype == 2)
                    {


                        if($grp == 1 && ($data[0]['sub6']== 8 || $data[0]['sub7']== 8 ))

                            echo "
                            <option value='1'  selected='selected'>SCIENCE WITH BIOLOGY</option>"; 

                        if($grp == 1 && ($data[0]['sub6']== 78 || $data[0]['sub7']== 78 ))

                            echo "
                            <option value='7'  selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>"; 

                        if($grp == 2)

                            echo"<option value='2' selected='selected'>GENERAL</option>";



                        if($grp == 5)
                            echo"<option value='5' selected='selected'>DEAF AND DUMB</option>";



                        if($grp == 7)
                            echo"<option value='7'  selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>";
                    }
                    $subarray = array(
                        'NONE'=>'',
                        'NONE'=>'0',
                        'Urdu' => '1',
                        'English' => '2',
                        'ISLAMIYAT (COMPULSORY)' => '3',
                        'PAKISTAN STUDIES' => '4',
                        'MATHEMATICS' => '5',
                        'PHYSICS' => '6',
                        'CHEMISTRY' => '7',
                        'BIOLOGY' => '8',
                        'GENERAL SCIENCE' => '9',
                        'FOUNDATION OF EDUCATION' => '10',
                        'GEOGRAPHY OF PAKISTAN' => '11',
                        'HOUSE HOLD ACCOUNTS & ITS RELATED PROBLEMS' => '12',
                        'ELEMENTS OF HOME ECONOMICS' => '13',
                        'PHYSIOLOGY & HYGIENE' => '14',
                        'GEOMETRICAL & TECHNICAL DRAWING' => '15',
                        'GEOLOGY' => '16',
                        'ASTRONOMY & SPACE SCIENCE' => '17',
                        'ART/ART & MODEL DRAWING' => '18',
                        'ISLAMIC STUDIES' => '19',
                        'ISLAMIC HISTORY' => '20',
                        'HISTORY OF PAKISTAN' => '21',
                        'ARABIC' => '22',
                        'PERSIAN' => '23',
                        'GEOGRAPHY' => '24',
                        'ECONOMICS' => '25',
                        'CIVICS' => '26',
                        'FOOD AND NUTRITION' => '27',
                        'ART IN HOME ECONOMICS' => '28',
                        'MANAGEMENT FOR BETTER HOME' => '29',
                        'CLOTHING & TEXTILES' => '30',
                        'CHILD DEVELOPMENT AND FAMILY LIVING' => '31',
                        'MILITARY SCIENCE' => '32',
                        'COMMERCIAL GEOGRAPHY' => '33',
                        'URDU LITERATURE' => '34',
                        'ENGLISH LITERATURE' => '35',
                        'PUNJABI' => '36',
                        'EDUCATION' => '37',
                        'ELEMENTARY NURSING & FIRST AID' => '38',
                        'PHOTOGRAPHY' => '39',
                        'HEALTH & PHYSICAL EDUCATION' => '40',
                        'CALIGRAPHY' => '41',
                        'LOCAL (COMMUNITY) CRAFTS' => '42',
                        'ELECTRICAL WIRING' => '43',
                        'RADIO ELECTRONICS' => '44',
                        'COMMERCE' => '45',
                        'AGRICULTURE' => '46',
                        'BOOK KEEPING & ACCOUNTANCY' => '47',
                        'WOOD WORK (FURNITURE MAKING)' => '48',
                        'GENERAL AGRICULTURE' => '49',
                        'FARM ECONOMICS' => '50',
                        'ETHICS' => '51',
                        'LIVE STOCK FARMING' => '52',
                        'ANIMAL PRODUCTION' => '53',
                        'PRODUCTIVE INSECTS AND FISH CULTURE' => '54',
                        'HORTICULTURE' => '55',
                        'PRINCIPLES OF HOME ECONOMICS' => '56',
                        'RELATED ACT' => '57',
                        'HAND AND MACHINE EMBROIDERY' => '58',
                        'DRAFTING AND GARMENT MAKING' => '59',
                        'HAND & MACHINE KNITTING & CROCHEING' => '60',
                        'STUFFED TOYS AND DOLL MAKING' => '61',
                        'CONFECTIONERY AND BAKERY' => '62',
                        'PRESERVATION OF FRUITS,VEGETABLES & OTHER FOODS' => '63',
                        'CARE AND GUIDENCE OF CHILDREN' => '64',
                        'FARM HOUSE HOLD MANAGEMENT' => '65',
                        'ARITHEMATIC' => '66',
                        'BAKERY' => '67',
                        'CARPET MAKING' => '68',
                        'DRAWING' => '69',
                        'EMBORIDERY' => '70',
                        'HISTORY' => '71',
                        'TAILORING' => '72',
                        'TYPE WRITING' => '73',
                        'WEAVING' => '74',
                        'SECRETARIAL PRACTICE' => '75',
                        'CANDLE MAKING' => '76',
                        'SECRETARIAL PRACTICE AND CORRESPONDANCE' => '77',
                        'COMPUTER SCIENCES' => '78',
                        'WOOD WORK (BOAT MAKING)' => '79',
                        'PRINCIPLES OF ARITHMATIC' => '80',
                        'SEERAT-E-RASOOL' => '81',
                        'AL-QURAAN' => '82',
                        'POULTRY FARMING' => '83',
                        'ART & MODEL DRAWING' => '84',
                        'BUSINESS STUDIES' => '85',
                        'HADEES & FIQAH' => '86',
                        'ENVIRONMENTAL STUDIES' => '87',
                        'REFRIGERATION AND AIR CONDITIONING' => '88',
                        'FISH FARMING' => '89',
                        'COMPUTER HARDWARE' => '90',
                        'BEAUTICIAN' => '91',
                        'GENERAL MATHEMATICS' => '92',
                        'COMPUTER SCIENCES_DFD' => '93',
                        'HEALTH & PHYSICAL EDUCATION_DFD' => '94'
                    );
                    $result =  array_search($data[0]['sub4'],$subarray); 

                    /* if($sub7 != 43){
                    unset($subarray["ELECTRICAL WIRING"]);    
                    } */

                    ?>
                </select>
            </div>
        </div>
    </div>
    <?php
    @$exam_type = $data[0]['exam_type'];
    @$grp_cd = $data[0]['grp_cd'];
    @$oldcls = $data[0]['class'];
    $Status =  $data[0]['status'];
    if($exam_type == 14 || ($cattype == 1 && $exam_type == 16)){
        echo"
        <div class='form-group'>
        <div class='row'>
        <div class='col-md-offset-2 col-md-8'>
        <label class='control-label' for='ddlMarksImproveoptions' >
        Select Type :
        </label>        
        <select id='ddlMarksImproveoptions' class='form-control' name='ddlMarksImproveoptions'>
        <option value='0' selected='selected'>Select Any One </option>
        <option value='1'>PART-1 FULL </option>
        <option value='2'>PART-2 FULL</option>                                
        <option value='3'>BOTH PART FULL</option>
        <option value='4'>SUBJECT WISE</option>            
        </select>
        </div>
        </div>
        </div> 
        ";
    }  
    if(@$exam_type == 4 || @$exam_type == 5 || @$exam_type == 6 || @$exam_type == 3)
    {
        ?>
        <div class="isFull">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <label class="checkbox-inline"  id='divIsfullApp' for="isfullAppear">
                            <input type="checkbox" id="isfullAppear" name="isfullAppear"/><span style="font-size: larger; font-weight: bold; padding: 10px;">Full Appear In Both Parts?</span>
                        </label>
                    </div> 
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" id="lblpart1cat" name="lblpart1cat" style="text-decoration: underline;">
                    <?php
                    if(($exam_type == 7 || $exam_type == 8 || $exam_type == 9 || $exam_type == 13 || $exam_type == 16 || $exam_type == 14 ) && $cattype == 1){
                        echo'Category P-1: MARKS IMPROVEMENT';
                    }
                    else if (($exam_type ==11 || $exam_type == 16 || $exam_type == 15)&& $cattype == 2){
                        echo'Category P-1: ADDITIONAL';
                    }
                    else{
                        echo'PART-I Subjects';
                    }
                    ?>
                </label>
            </div>
            <div class="col-md-4">
                <label class="control-label" id="lblpart2cat" name="lblpart2cat" style="text-decoration: underline;">
                    <?php
                    if(($exam_type == 7 || $exam_type == 8 || $exam_type == 9 || $exam_type == 13 || $exam_type == 16 || $exam_type == 14 ) && $cattype == 1){
                        echo'Category P-2: MARKS IMPROVEMENT';
                    }
                    else if (($exam_type ==11 || $exam_type == 16 || $exam_type == 15)&& $cattype == 2)
                    {
                        echo'Category P-2: ADDITIONAL';
                    }
                    else{
                        echo'PART-II Subjects';
                    }
                    ?>
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
                    <input type="checkbox" class="checkboxtext" id="terms" name="terms" value="yes">I agree with the <a href="<?php echo base_url(); ?>assets/img/Instructions.jpg" target="_blank">Terms and Conditions </a> of Board of Intermediate & Secondary Education, Gujranwala  
                </label>
            </div>
        </div>
    </div>

    <div class="hidden">
        <input type="hidden" class="hidden" name="preSpec" id="preSpec" value="<?php echo @$data[0]['Spec'] ?>">
        <input type="hidden" class="hidden" name="category" id="category" value="<?php  echo @$cattype ?>">
        <input type="hidden" class="hidden" value="<?=  $data[0]['grp_cd']?>" name="pergrp" id="pergrp">
        <input type="hidden" class="hidden" id="oldClass" name="oldClass"  value="<?php echo $data[0]['class'];?>"/>     
        <input type="hidden" class="hidden" id="oldboardid" name="oldboardid"  value="<?php  echo $data[0]['Brd_cd'];?>"/>    
        <input type="hidden" class="hidden" name="gend" value="<?php echo @$gender; ?>">
        <input class="hidden" type="hidden" value="<?=  $data[0]['picpath']?>" name="pic">
        <input class="hidden" type="hidden" value="0" id="isotherbrd" name="isotherbrd" />
        <input class="hidden" type="hidden" value="0" id="isFresh" name="isFresh" />
        <input type="hidden" class="hidden" name="oldclass" id="oldclass" value="<?php echo @$oldcls; ?>">
        <input type="hidden" class="hidden" name="exam_type" id="exam_type" value="<?php echo @$exam_type = $data[0]['exam_type']; ?>">
        <input type="hidden" class="hidden" name="exam_type_static" id="exam_type_static" value="<?php echo @$exam_type = $data[0]['exam_type']; ?>">
        <input type="hidden" class="hidden" name="oldexam_type" id="oldexam_type">                    
        <input type="hidden" class="hidden" name="grppre" id="grppre" value="<?php if(($exam_type == 16)){ if( ($data[0]['sub7'] == 78) ||($data[0]['sub6'] == 78)  ) { @$grp_cd = 7; }} else {echo @$grp_cd = $data[0]['grp_cd']; }  ?>">
        <input type="hidden" class="hidden" name="grppre_extra" id="grppre_extra" value="<?php  if( ($data[0]['sub7'] == 78) ||($data[0]['sub6'] == 78)  ) { @$grp_cd = 7; } else {echo @$grp_cd = $data[0]['grp_cd']; }  ?>">
        <input type="hidden" class="hidden" name="strRegNo" id="strRegNo" value="<?php  echo $data[0]['strRegNo']; ?>">
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <input type="submit" value="Save Form" id="btnsubmitUpdateEnrol" name="btnsubmitUpdateEnrol" class="btn btn-primary btn-block" onclick="return checks_Matric()">
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>assets/img/Instructions.jpg" download="instructions.jpg" class="btn btn-info btn-block">Download Instruction</a>
            </div>
            <div class="col-md-3">
                <input type="button" class="btn btn-danger btn-block" value="Cancel" id="btnCancel" name="btnCancel" onclick="return CancelAlert();" >
            </div>
        </div>
    </div>
</form>

<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
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
    $(window).load(function(){
        $.fancybox("#instruction");

        $('#address').each(function(){
            $(this).val($(this).val().trim());
        });
    });

    $(document).ready(function(){

        var sub1_Pak_options = {
            1 : 'URDU'
        }
        var sub1_NonPak_options = 
        {
            11 : 'GEOGROPHY OF PAKISTAN',
            1 : 'URDU'
        }
        var sub3_Muslim = 
        {
            3 :'ISLAMYAT COMPULSORY'
        }
        var sub3_Non_Muslim = 
        {
            51 : 'ETHICS',
            3  :'ISLAMYAT COMPULSORY'
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
            //43 : 'ELECTRICAL WIRING',
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
            //43 : 'ELECTRICAL WIRING',
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
            93 : 'COMPUTER SCIENCES ',
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
        /*var sub1 = {
        1:'URDU'
        }*/
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
            6 : 'PHYSICS',
            7 : 'CHEMISTRY',
            8 : 'BIOLOGY',
            9 :'GENERAL SCIENCE',
            10:'FOUNDATION OF EDUCATION',
            11:'GEOGRAPHY OF PAKISTAN',
            12:'HOUSE HOLD ACCOUNTS & ITS RELATED PROBLEMS',
            13:'ELEMENTS OF HOME ECONOMICS',
            14:'PHYSIOLOGY & HYGIENE',
            15: 'GEOMETRICAL & TECHNICAL DRAWING',
            16:'GEOLOGY',
            17:'ASTRONOMY & SPACE SCIENCE',
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
            //43:'ELECTRICAL WIRING',
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
            93:'COMPUTER SCIENCES (For Deaf and Dumb)',
        }

        var grp_cd ="<?php echo  @$data[0]['grp_cd'] ?>";


        var sub1 ="<?php echo @$data[0]['sub1']; ?>";
        var sub2 = "<?php echo @$data[0]['sub2']; ?>";
        var sub3 ="<?php echo @$data[0]['sub3']; ?>";
        var sub4 = "<?php echo @$data[0]['sub4']; ?>";
        var sub5 = "<?php echo @$data[0]['sub5']; ?>";
        var sub6 = "<?php echo @$data[0]['sub6']; ?>";
        var sub7 = "<?php echo @$data[0]['sub7']; ?>";
        var sub8 = "<?php echo @$data[0]['sub8']; ?>";
        // Part 1 Subjects Pass fail .
        var sub1pf1 = "<?php  echo @$data[0]['sub1pf1']; ?>";
        var sub2pf1 ="<?php echo @$data[0]['sub2pf1']; ?>";
        var sub3pf1 = "<?php echo @$data[0]['sub3pf1']; ?>";
        var sub4pf1 = "<?php echo @$data[0]['sub4pf1']; ?>";
        var sub5pf1 ="<?php echo @$data[0]['sub5pf1']; ?>";
        var sub6pf1 = "<?php echo @$data[0]['sub6pf1']; ?>";
        var sub7pf1 = "<?php echo @$data[0]['sub7pf1']; ?>";
        var sub8pf1 = "<?php echo @$data[0]['sub8pf1']; ?>";
        // Part 2 Subjects Pass Fail.
        var sub1pf2 = "<?php echo @$data[0]['sub1Pf2']; ?>";
        var sub2pf2 = "<?php echo @$data[0]['sub2pf2']; ?>";
        var sub3pf2 = "<?php echo @$data[0]['sub3pf2']; ?>";
        var sub4pf2 = "<?php echo @$data[0]['sub4pf2']; ?>";
        var sub5pf2 = "<?php echo @$data[0]['sub5pf2']; ?>";
        var sub6pf2 = "<?php echo @$data[0]['sub6pf2']; ?>";
        var sub7pf2 = "<?php echo @$data[0]['sub7pf2']; ?>";
        var sub8pf2 = "<?php echo @$data[0]['sub8pf2']; ?>";
        // Part 1 Subjects Present and Absent Status
        var sub1st1 = "<?php echo @$data[0]['sub1st1']; ?>";
        var sub2st1 ="<?php echo @$data[0]['sub2st1']; ?>";
        var sub3st1 = "<?php echo @$data[0]['sub3st1']; ?>";
        var sub4st1 ="<?php echo @$data[0]['sub4st1']; ?>";
        var sub5st1 ="<?php echo @$data[0]['sub5st1']; ?>";
        var sub6st1 = "<?php echo @$data[0]['sub6st1']; ?>";
        var sub7st1 = "<?php echo @$data[0]['sub7st1']; ?>";
        var sub8st1 = "<?php echo @$data[0]['sub8st1']; ?>";
        // Part 2 Subjects Present and Absent Status
        var sub1st2 = "<?php echo @$data[0]['sub1St2']; ?>";
        var sub2st2 = "<?php echo @$data[0]['sub2st2']; ?>";
        var sub3st2 ="<?php echo @$data[0]['sub3st2']; ?>";
        var sub4st2 = "<?php echo @$data[0]['sub4st2']; ?>";
        var sub5st2 = "<?php echo @$data[0]['sub5st2']; ?>";
        var sub6st2 = "<?php echo @$data[0]['sub6st2']; ?>";
        var sub7st2 ="<?php echo @$data[0]['sub7st2']; ?>";
        var sub8st2 ="<?php  echo @$data[0]['sub8st2']; ?>";
        var exam_type = "<?php echo @$data[0]['exam_type']; ?>";
        // 
        var Gender = "<?php echo @$gender; ?>";
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
            var NationalityVal = $("#nationality").val();
            $('#sub1').empty();
            $('#sub1p2').empty();
            if(NationalityVal == "1")
            {
                $.each(sub1_Pak_options, function(val, text) {
                    $('#sub1').append( new Option(text,val) );
                    $('#sub1p2').append( new Option(text,val) );
                }); 
            }
            else if (NationalityVal == "2")
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

            if(Religion == "1")
            {
                $.each(sub3_Muslim,function(val,text){
                    $("#sub3").append(new Option(text,val));
                    $("#sub3p2").append(new Option(text,val));
                });
            }
            else if(Religion == "2")
            {
                $.each(sub3_Non_Muslim,function(val,text){
                    $("#sub3").append(new Option(text,val));
                    $("#sub3p2").append(new Option(text,val));
                });
            }
            $("#sub4").empty();
            $("#sub4p2").empty();
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

            $("#sub4").append(new Option('MATHEMATICS',5));
            $("#sub4p2").append(new Option('MATHEMATICS',5));
            $("#sub5").append(new Option('PHYSICS',6));
            $("#sub5p2").append(new Option('PHYSICS',6));
            $("#sub6").append(new Option('CHEMISTRY',7));
            $("#sub6p2").append(new Option('CHEMISTRY',7));
        }
        function Hum_Deaf_Subjects()
        {
            //alert(isElec);
            var NationalityVal = $("#nationality").val();
            console.log(NationalityVal);
            $('#sub1').empty();
            $('#sub1p2').empty();
            if(NationalityVal == "1")
            {
                console.log("Hi Pakistani ");
                $.each(sub1_Pak_options, function(val, text) {
                    $('#sub1').append( new Option(text,val) );
                    $('#sub1p2').append( new Option(text,val) );
                }); 
            }
            else if (NationalityVal == "2")
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

            if(Religion == "1")
            {

                $.each(sub3_Muslim,function(val,text){
                    $("#sub3").empty();
                    $("#sub3p2").empty();
                    $("#sub3").append(new Option(text,val));
                    $("#sub3p2").append(new Option(text,val));
                });
            }
            else if(Religion == "2")
            {
                $.each(sub3_Non_Muslim,function(val,text){
                    $("#sub3").append(new Option(text,val));
                    $("#sub3p2").append(new Option(text,val));
                    //$("#sub3").prop('selectedIndex', 2);
                });
            }
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
            // $("#sub8").empty();
            //  $("#sub8p2").empty();
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

        function Empty_All_Dropdowns(){
            showallsub();
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

        var langascd = ['22','23','36','34','35'];

        // sub 1 change event 
        $("#sub1").change(function(){
            var sel_sub =$("#sub1").val();
            if(exam_type != "3"){
                $("#sub1p2").val(sel_sub);
            }
        });
        $("#sub1p2").change(function(){
            var sel_sub =$("#sub1p2").val();
            $("#sub1").val(sel_sub);
        });
        // sub 2 change event 
        $("#sub2").change(function(){


            var sel_sub =$("#sub2").val();
            if(exam_type != "3"){
                $("#sub2p2").val(sel_sub);    
            }

        });
        $("#sub2p2").change(function(){
            var sel_sub =$("#sub2p2").val();
            $("#sub2").val(sel_sub);
        });
        // sub 3 change event 
        $("#sub3").change(function(){

            var sel_sub =$("#sub3").val();

            if(exam_type != "3"){
                $("#sub3p2").val(sel_sub);
            }
        });
        $("#sub3p2").change(function(){
            var sel_sub =$("#sub3p2").val();
            $("#sub3").val(sel_sub);
        });
        // sub 4 change event 
        $("#sub4").change(function(){
            var sel_sub =$("#sub4").val();
            if(exam_type != "3"){
                $("#sub4p2").val(sel_sub);
            }
        });
        $("#sub4p2").change(function(){
            var sel_sub =$("#sub4p2").val();
            $("#sub4").val(sel_sub);
        });
        // sub 5 change event 
        $("#sub5").change(function(){

            debugger;

            var sel_sub =$("#sub5").val();
            if(exam_type != "3"){
                $("#sub5p2").val(sel_sub);
            }
        });
        $("#sub5p2").change(function(){
            var sel_sub =$("#sub5p2").val();
            $("#sub5").val(sel_sub);
        });
        // sub 6 change event
        $("#sub6").change(function(){
            // 
            var sub6 = $("#sub6").val();
            var sub6p2 = $("#sub6p2").val();
            var sub7 = $("#sub7").val();
            var sub7p2 = $("#sub7p2").val();
            var sub5 = $("#sub5").val();
            var sub5p2 = $("#sub5p2").val();
            // if(sub6 !=0 || sub7 != 0 || sub8 != 0 || sub6p2 != 0 || sub7p2 != 0 || sub8p2 != 0)
            // {

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

            if((sub6 == sub7 && sub6 != "0") || (sub6 == sub5 && sub6 != "0"))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                return;
            }
            if((sub6 == sub7p2 && sub6 != "0"))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                return;
            }
            if ((sub6 == 19 || sub6p2 == 19) && (sub7 == 20 || sub7p2== 20))
            {
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
            if(exam_type != "3"){
                $("#sub6p2").val(sub6);
            }
        })
        $("#sub6p2").change(function(){
            var sub6 = $("#sub6").val();
            var sub6p2 = $("#sub6p2").val();
            var sub7 = $("#sub7").val();
            var sub7p2 = $("#sub7p2").val();
            var sub5 = $("#sub5").val();
            var sub5p2 = $("#sub5p2").val();
            var ddlMarksImproveoptions = $("#ddlMarksImproveoptions").val();
            ////
            //   debugger;
            var a = langascd.indexOf(sub6);
            var b = langascd.indexOf(sub6p2);
            var d = langascd.indexOf(sub7);
            var c = langascd.indexOf(sub7p2);

            if(b >=0  && d>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                $("#sub6").focus();
                return;  
            }


            if((sub6p2 == sub7) || (sub6p2 == sub5) )
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub6").val('0');
                $("#sub6p2").val('0');
                return;
            }
            if((sub6p2 == sub7p2))
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


            //   console.log('Hi i am sub7 dropdown :) ');
            var sub6 = $("#sub6").val();
            var sub7 = $("#sub7").val();
            var sub5 = $("#sub5").val();

            var a = langascd.indexOf(sub6);
            var d = langascd.indexOf(sub7);

            if(a >=0  && d>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }

            // console.log("sub7 = "+ sub7 + "  sub8 = "+ sub8);
            if( (sub7 == sub6 && sub7 != "0")|| (sub7 == sub5 && sub7 != "0"))
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
                if(sub5 == langascd[i])
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

            if(exam_type != "3"){
                $("#sub7p2").val(sub7);
            }
        })
        $("#sub7p2").change(function(){
            // 
            //console.log('Hi i am sub7 dropdown :) ');
            var sub6 = $("#sub6").val();
            var sub6p2 = $("#sub6p2").val();
            var sub7 = $("#sub7").val();
            var sub7p2 = $("#sub7p2").val();
            var sub5 = $("#sub5").val();
            var sub5p2 = $("#sub5p2").val();
            //console.log("sub7 = "+ sub7 + "  sub8 = "+ sub8);

            var a = langascd.indexOf(sub6);
            var b = langascd.indexOf(sub6p2);
            var d = langascd.indexOf(sub7);
            var c = langascd.indexOf(sub7p2);

            if(a >=0  && c>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }


            if((sub7p2 == sub6)|| (sub7p2 == sub6) || (sub7p2 == sub6p2) || (sub7p2 == sub6p2)|| (sub7p2 == sub5p2))
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
                $('#ErrMsg').show(); 
                alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }    
            $("#sub7").val(sub7p2);
        })
        $("#sub5").change(function(){

            //   console.log('Hi i am sub8 dropdown :) ');
            var sub6 = $("#sub6").val();
            var sub5 = $("#sub5").val();
            var sub7 = $("#sub7").val();

            var a = langascd.indexOf(sub6);
            var d = langascd.indexOf(sub7);

            if(a >=0  && d>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub5").val('0');
                $("#sub5p2").val('0');
                $("#sub5").focus();
                return;  
            }


            // console.log("sub8 = "+ sub8 + "  sub8 = "+ sub8);

            if( (sub5 == sub6 && sub5 != "0")||(sub5 == sub7 && sub5 != "0"))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub5").val('0');
                $("#sub5p2").val('0');
                return;
            }

            if((sub5 == 20 && sub6 == 21) || (sub5 == 21 && sub6 == 20)  || (sub5 == 19 && sub6 == 20) || (sub5 == 19 && sub6 == 21) || (sub5 == 20 && sub6 == 19) || (sub5 == 21 && sub6 == 19)|| (sub5p2 == 20 && sub6p2 == 21) || (sub5p2 == 21 && sub6p2 == 20)  || (sub5p2 == 19 && sub6p2 == 20) || (sub5p2 == 19 && sub6p2 == 21) || (sub5p2 == 20 && sub6p2 == 19) || (sub5p2 == 21 && sub6p2 == 19)){
                alertify.error("Please choose Different Subjects as Double History is not allowed" );
                $("#sub5p2").val('0');
                $("#sub5").val('0');
                return;
            }
            var valtext = 0;
            for(var i =0 ; i<langascd.length; i++)
            {
                if(sub5 == langascd[i])
                {
                    valtext =1;
                }
            }
            if(valtext>0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub5").val('0');  
                $("#sub5p2").val('0');  
                return;
            }
            if ((sub6 == 19 ) && (sub5 == 20) ||(sub6 == 20 ) && (sub5 == 19))
            {
                $('#ErrMsg').show(); 
                alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
                $("#sub5").val('0');
                $("#sub5p2").val('0');
                $("#sub5").focus();
                return;  
            }    
            if(exam_type != "3"){
                $("#sub5p2").val(sub5);
            }
        })
        $("#sub5p2").change(function(){
            // 
            //console.log('Hi i am sub5 dropdown :) ');
            var sub6 = $("#sub6").val();
            var sub6p2 = $("#sub6p2").val();
            var sub5 = $("#sub5").val();
            var sub5p2 = $("#sub5p2").val();
            var sub7 = $("#sub7").val();
            var sub7p2 = $("#sub7p2").val();
            //console.log("sub5 = "+ sub5 + "  sub5 = "+ sub5);

            var a = langascd.indexOf(sub6);
            var b = langascd.indexOf(sub6p2);
            var d = langascd.indexOf(sub5);
            var c = langascd.indexOf(sub5p2);

            if(a >=0  && d>=0)
            {
                alertify.error("Please choose Different Subjects as Double Language is not allowed" );
                $("#sub5").val('0');
                $("#sub5p2").val('0');
                $("#sub5").focus();
                return;  
            }


            if((sub5p2 == sub6)|| (sub5p2 == sub6) || (sub5p2 == sub6p2) || (sub5p2 == sub6p2))
            {
                alertify.error("Please choose Different Subjects" );
                $("#sub5p2").val('0');
                $("#sub5").val('0');
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
                $('#ErrMsg').show(); 
                alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }    
            $("#sub5").val(sub5p2);
        })
        $("#sub8").change(function(){
            var sel_sub =$("#sub8").val();
            if(exam_type != "3"){
                $("#sub8p2").val(sel_sub);
            }
        });
        $("#sub8p2").change(function(){
            var sel_sub =$("#sub8p2").val();
            $("#sub8").val(sel_sub);
        });
        /*$("#sub8").change(function(){

        var sub6 = $("#sub6").val();
        var sub6p2 = $("#sub6p2").val();
        var sub7 = $("#sub7").val();
        var sub7p2 = $("#sub7p2").val();
        var sub8 = $("#sub8").val();
        var sub8p2 = $("#sub8p2").val();
        console.log("sub7 = "+ sub7 + "  sub8 = "+ sub8);
        if((sub7 == sub8)|| (sub8 == sub6))
        {
        alertify.error("Please choose Different Subjects" );
        $("#sub8").val('0');
        $("#sub8p2").val('0');


        return;
        }
        if((sub7 == 20 && sub8 == 21) || (sub7 == 21 && sub8 == 20)  || (sub7 == 19 && sub8 == 20) || (sub7 == 19 && sub8 == 21) || (sub7 == 20 && sub8 == 19) || (sub7 == 21 && sub8 == 19)){
        alertify.error("Please choose Different Subjects as Double History is not allowed" );
        $("#sub8").val('0');
        $("#sub8p2").val('0');

        return;
        }
        var valtext = 0;
        var doublelang=0;
        for(var i =0 ; i<langascd.length; i++)
        {
        if((sub8) == langascd[i])
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
        $("#sub8").val('0');  
        $("#sub8p2").val('0');  
        return;
        }
        $("#sub8p2").val(sub8);

        })
        $("#sub8p2").change(function(){

        var sub6 = $("#sub6").val();
        var sub6p2 = $("#sub6p2").val();
        var sub7 = $("#sub7").val();
        var sub7p2 = $("#sub7p2").val();
        var sub8 = $("#sub8").val();
        var sub8p2 = $("#sub8p2").val();

        if((sub8p2 == sub6)|| (sub7p2 == sub8p2)|| (sub8p2 == sub6p2))
        {
        alertify.error("Please choose Different Subjects" );
        $("#sub8p2").val('0');
        $("#sub8").val('0');

        return;
        }
        if((sub7 == 20 && sub8 == 21) || (sub7 == 21 && sub8 == 20)  || (sub7 == 19 && sub8 == 20) || (sub7 == 19 && sub8 == 21) || (sub7 == 20 && sub8 == 19) || (sub7 == 21 && sub8 == 19)){
        alertify.error("Please choose Different Subjects as Double History is not allowed" );
        $("#sub8p2").val('0');
        $("#sub8").val('0');

        return;
        }
        var valtext = 0;
        for(var i =0 ; i<langascd.length; i++)
        {
        if(sub8p2 == langascd[i])
        {
        valtext =1;
        }
        }
        if(valtext>0)
        {
        alertify.error("Please choose Different Subjects as Double Language is not allowed" );
        $("#sub8").val('0');  
        $("#sub8p2").val('0');  
        return;
        }
        $("#sub8").val(sub8p2);
        })    */
        function IsFullAppear(){
            $("#sub1").empty();
            $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");

            $("#sub1p2").empty();
            $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");
            /* }
            else
            {   $("#sub1").empty();
            $("#sub1").append('<option value="0">NONE</option>');
            } */
            // Subject 2 
            /* if((sub2pf1 == "1"))
            {*/
            $("#sub2").empty();
            $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");

            $("#sub2p2").empty();
            $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");
            /* }
            else
            {
            $("#sub2").empty();
            $("#sub2").append('<option value="0">NONE</option>');
            }      */
            // subject 3 
            /* if((sub3pf1 == "1"))
            {*/
            $("#sub3").empty();
            $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub3p2").empty();
            $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub8").empty();
            $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");


            $("#sub8p2").empty();
            $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");                                    

            $("#sub4").empty();
            $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub4p2").empty();
            $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4p2 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub5").empty();
            $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");

            $("#sub5p2").empty();
            $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");

            $("#sub6").empty();
            $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6 option[value='" + sub1 + "']").attr("selected","selected");

            $("#sub6p2").empty();
            $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6p2 option[value='" + sub1 + "']").attr("selected","selected");

            $("#sub7").empty();
            $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");

            $("#sub7p2").empty();
            $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");
        }
        $("#isfullAppear").change( function(){

            //debugger;

            var old_exam =  $('#oldexam_type').val();
            var crnt_exam =  $('#exam_type').val();

            var oldGrp = "<?php echo @$_POST['std_group'] ?>";
            var changeCurGrp = "<?php echo @$_POST['grppre'] ?>";

            if(this.checked)
            {
                if(crnt_exam == 4 || crnt_exam == 5 || crnt_exam == 6)
                {
                    $('#oldexam_type').val(crnt_exam)
                    $('#exam_type').val(2)
                }

                IsFullAppear();     
            }
            else
            {
                if(crnt_exam == 2 && (old_exam == 4 || old_exam == 5 || old_exam == 6 ||  old_exam == 3))
                {
                    $('#oldexam_type').val(2)
                    $('#exam_type').val(old_exam)
                }

                sub_grp_load();
            }
        })
        //Category P-1: MARKS IMPROVEMENT
        function sub_grp_load(){
            //debugger;
            <?php 
            // DebugBreak();
            if($exam_type == 14 || ($cattype == 1 && $exam_type == 16)){
                echo "$('#lblpart1cat').text('Category P-1: MARKS IMPROVEMENT')
                $('#lblpart2cat').text('Category P-2: MARKS IMPROVEMENT')";    
            }
            if($exam_type == 15 || ($exam_type == 16 && $cattype == 2)){
                echo"$('#lblpart1cat').text('Category P-1: ADDITIONAL')
                $('#lblpart2cat').text('Category P-2: ADDITIONAL')";  
            }
            ?>

            // 
            // check Pass Fail status first
            var ex_type= '<?php echo $data[0]['exam_type']; ?>'
            if((sub1pf1 == "3") || (sub1st1 == "2"))
            {
                $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
                $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");
            }
            else
            {   $("#sub1").empty();
                $("#sub1").append('<option value="0">NONE</option>');
            }
            if((sub1pf2 == "3") || (sub1st2 == "2") || ex_type==3 || ex_type==1)
            {
                $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
                $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");
            }
            else
            {   $("#sub1p2").empty();
                $("#sub1p2").append('<option value="0">NONE</option>');
            }
            // Subject 2 
            if((sub2pf1 == "3") || (sub2st1 == "2") )
            {
                $("#sub2").empty();
                $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
                $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub2").empty();
                $("#sub2").append('<option value="0">NONE</option>');
            }
            if((sub2pf2 == "3") || (sub2st2 == "2") || ex_type==3 || ex_type==1)
            {
                $("#sub2p2").empty();
                $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
                $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub2p2").empty();
                $("#sub2p2").append('<option value="0">NONE</option>');
            }
            // subject 3 
            if((sub3pf1 == "3") || (sub3st1 == "2"))
            {
                $("#sub3").empty();
                $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
                $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub3").empty();
                $("#sub3").append('<option value="0">NONE</option>');
            }
            if((sub3pf2 == "3") || (sub3st2 == "2") || ex_type==3 || ex_type==1)
            {
                $("#sub3p2").empty();
                $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
                $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub3p2").empty();
                $("#sub3p2").append('<option value="0">NONE</option>');
            }
            if((sub4pf1 == "3") || (sub4st1 == "2"))
            {
                $("#sub4").empty();
                $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
                $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub4").empty();
                $("#sub4").append('<option value="0">NONE</option>');
            }
            if((sub4pf2 == "3") || (sub4st2 == "2") || ex_type==3 || ex_type==1)
            {
                $("#sub4p2").empty();
                $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
                $("#sub4p2 option[value='" + sub4 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub4p2").empty();
                $("#sub4p2").append('<option value="0">NONE</option>');
            }
            if((sub5pf1 == "3") || (sub5st1 == "2"))
            {
                $("#sub5").empty();
                $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
                $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub5").empty();
                $("#sub5").append('<option value="0">NONE</option>');
            }
            if((sub5pf2 == "3") || (sub5st2 == "2") || ex_type==3 || ex_type==1)
            {
                $("#sub5p2").empty();
                $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
                $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub5p2").empty();
                $("#sub5p2").append('<option value="0">NONE</option>');
            }
            if((sub6pf1 == "3") || (sub6st1 == "2"))
            {
                $("#sub6").empty();
                $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
                $("#sub6 option[value='" + sub1 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub6").empty();
                $("#sub6").append('<option value="0">NONE</option>');
            }
            if((sub6pf2 == "3") || (sub6st2 == "2") || ex_type==3 || ex_type==1)
            {
                $("#sub6p2").empty();
                $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
                $("#sub6p2 option[value='" + sub6 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub6p2").empty();
                $("#sub6p2").append('<option value="0">NONE</option>');
            }
            if((sub7pf1 == "3") || (sub7st1 == "2"))
            {
                $("#sub7").empty();
                $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
                $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub7").empty();
                $("#sub7").append('<option value="0">NONE</option>');
            }
            if((sub7pf2 == "3") || (sub7st2 == "2") || ex_type==3 || ex_type==1)
            {
                $("#sub7p2").empty();
                $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
                $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub7p2").empty();
                $("#sub7p2").append('<option value="0">NONE</option>');
            }
            if((sub8pf1 == "3") || (sub8st1 == "2"))
            {
                $("#sub8").empty();
                $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
                $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub8").empty();
                $("#sub8").append('<option value="0">NONE</option>');
            }
            if((sub8pf2 == "3") || (sub8st2 == "2") || ex_type==3 || ex_type==1)
            {
                $("#sub8p2").empty();
                $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
                $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub8p2").empty();
                $("#sub8p2").append('<option value="0">NONE</option>');
            }
            // PART II Subjects ....... 
        }

        function sub_grp_load_forexamtype2(){
            //
            <?php 
            if($exam_type == 14 || ($cattype == 1 && $exam_type == 16)){
                echo "$('#lblpart1cat').text('Category P-1: MARKS IMPROVEMENT')
                $('#lblpart2cat').text('Category P-2: MARKS IMPROVEMENT')";    
            }
            if($exam_type == 15 || ($exam_type == 16 && $cattype == 2)){
                echo"$('#lblpart1cat').text('Category P-1: ADDITIONAL')
                $('#lblpart2cat').text('Category P-2: ADDITIONAL')";  
            }
            ?>

            $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");

            $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");
            //$("#sub1p2").append('<option value='+sub1p2+'>'+sub1p2+'</option>');

            $("#sub2").empty();
            $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");

            $("#sub2p2").empty();
            $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");

            $("#sub3").empty();
            $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub3p2").empty();
            $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub4").empty();
            $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub4p2").empty();
            $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4p2 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub5").empty();
            $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");

            $("#sub5p2").empty();
            $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");


            $("#sub6").empty();
            $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6 option[value='" + sub1 + "']").attr("selected","selected");


            $("#sub6p2").empty();
            $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6p2 option[value='" + sub6 + "']").attr("selected","selected");

            $("#sub7").empty();
            $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");



            $("#sub7p2").empty();
            $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");


            $("#sub8").empty();
            $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");



            $("#sub8p2").empty();
            $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");
        }

        function sub_grp_load_forexamtype2grp2(){
            <?php 
            if($exam_type == 14 || ($cattype == 1 && $exam_type == 16)){
                echo "$('#lblpart1cat').text('Category P-1: MARKS IMPROVEMENT')
                $('#lblpart2cat').text('Category P-2: MARKS IMPROVEMENT')";    
            }
            if($exam_type == 15 || ($exam_type == 16 && $cattype == 2)){
                echo"$('#lblpart1cat').text('Category P-1: ADDITIONAL')
                $('#lblpart2cat').text('Category P-2: ADDITIONAL')";  
            }
            ?>

            $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");

            $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");
            //$("#sub1p2").append('<option value='+sub1p2+'>'+sub1p2+'</option>');

            $("#sub2").empty();
            $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");

            $("#sub2p2").empty();
            $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");

            $("#sub3").empty();
            $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub3p2").empty();
            $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub4").empty();
            $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub4p2").empty();
            $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4p2 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub5").empty();
            $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");

            $("#sub5p2").empty();
            $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");

            $("#sub6").empty();
            $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6 option[value='" + sub6 + "']").attr("selected","selected");

            $("#sub6p2").empty();
            $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6p2 option[value='" + sub6 + "']").attr("selected","selected");

            $("#sub7").empty();
            $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");

            $("#sub7p2").empty();
            $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");

            $.each(sub8_Hum,function(val,text){


                $("#sub6").append(new Option(text,val));
                $("#sub6p2").append(new Option(text,val));
            });
            if(Gender == "2")
            {
                $("#sub6").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                $("#sub6p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));

            }

            $.each(sub7_Hum,function(val,text){

                $("#sub7").append(new Option(text,val));
                $("#sub7p2").append(new Option(text,val));
            });
            if(Gender == "2")
            {
                $("#sub7").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                $("#sub7p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
            }
            $("#sub8").empty();
            $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");

            $("#sub8p2").empty();
            $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");
            /* $.each(sub8_Hum,function(val,text){
            $("#sub8").append(new Option(text,val));
            $("#sub8p2").append(new Option(text,val));
            });*/

        }




        function additional_sub_grp_load(){
            //Category P-1: ADDITIONAL

            $('#lblpart1cat').text('Category P-1: ADDITIONAL')
            $('#lblpart2cat').text('Category P-2: ADDITIONAL');  


            $.each(additional_sub, function(val, text) {

                $('#sub1').hide();
                $('#sub1p2').hide();
                $('#sub2').hide();
                $('#sub2p2').hide();
                $('#sub3').hide();
                $('#sub3p2').hide();
                $('#sub4').hide();
                $('#sub4p2').hide();



                $('#sub5').append( new Option(text,val) );
                $('#sub5p2').append( new Option(text,val) );

                $('#sub6').append( new Option(text,val) );
                $('#sub6p2').append( new Option(text,val) );

                $('#sub7').append( new Option(text,val) );
                $('#sub7p2').append( new Option(text,val) );



                $('#sub8').hide();
                $('#sub8p2').hide();
            });  

            var Gender = $("#gend").val();
            if(Gender == "1")
            {
                $("select#sub5 option[value='13']").remove(); 
                $("select#sub5p2 option[value='13']").remove(); 
                $("select#sub6 option[value='13']").remove(); 
                $("select#sub6p2 option[value='13']").remove(); 
                $("select#sub7 option[value='13']").remove(); 
                $("select#sub7p2 option[value='13']").remove(); 

            }


            $("#sub5 option[value='"+sub5+"']").remove(); 
            $("#sub5p2 option[value='"+sub5+"']").remove();
            $("#sub5 option[value='"+sub6+"']").remove(); 
            $("#sub5p2 option[value='"+sub6+"']").remove();
            $("#sub5 option[value='"+sub7+"']").remove(); 
            $("#sub5p2 option[value='"+sub7+"']").remove();

            $("#sub6 option[value='"+sub5+"']").remove(); 
            $("#sub6p2 option[value='"+sub5+"']").remove(); 
            $("#sub6 option[value='"+sub6+"']").remove(); 
            $("#sub6p2 option[value='"+sub6+"']").remove();
            $("#sub6 option[value='"+sub7+"']").remove(); 
            $("#sub6p2 option[value='"+sub7+"']").remove();

            $("#sub7 option[value='"+sub5+"']").remove(); 
            $("#sub7p2 option[value='"+sub5+"']").remove();
            $("#sub7 option[value='"+sub6+"']").remove(); 
            $("#sub7p2 option[value='"+sub6+"']").remove();
            $("#sub7 option[value='"+sub7+"']").remove(); 
            $("#sub7p2 option[value='"+sub7+"']").remove(); 



        }

        function AAMA_KHASA_sub_grp_load()
        {
            //Category P-1: ADDITIONAL

            $("#lblpart1cat").text("Category P-1: FULL");
            $("#lblpart2cat").text("Category P-2: FULL");

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

        <?php 
        //DebugBreak();

        if($exam_type == 2 && ($grp_cd == 1||$grp_cd == 5||$grp_cd == 7))
        {

            echo 'sub_grp_load_forexamtype2()';

        }
        else if($exam_type == 2 && $grp_cd == 2)
        {
            // echo 'sub_grp_load()';
            echo'sub_grp_load_forexamtype2grp2()';
        }
        else if(($cat09_forAma==4 && $cat10_forAma==4) && (($Status == 2) || ($Status == 4) || ($Status == 3)))
        {

            echo "AAMA_KHASA_sub_grp_load()";
        }
        else if($exam_type == 15 || ($exam_type == 16 && $cattype == 2))
        {
            echo "additional_sub_grp_load();";
        }
        else if($exam_type == 3)
        {
            //DebugBreak();
            echo "sub_grp_load_P1_supply_PII_full_exam_type_3()";
        }
        else
        {
            echo 'sub_grp_load()';
        }    
        ?>

        function sub_grp_load_P1_supply_PII_full_exam_type_3()
        {

            $("#sub1").empty();
            if(sub1pf1 == "2" || sub1pf1 == "3" )
            {
                $("#sub1").empty();
                $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
                $("#sub1 option[value='" + sub1 + "']").attr("selected","selected"); 

            }
            $("#sub1").append(new Option('NONE',0));
            $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");
            //$("#sub1p2").append('<option value='+sub1p2+'>'+sub1p2+'</option>');

            $("#sub2").empty();
            if(sub2pf1 == "2" || sub2pf1 == "3")
            {
                $("#sub2").empty();
                $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));

                $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");    
            }
            $("#sub2").append(new Option('NONE',0));

            $("#sub2p2").empty();
            $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");

            $("#sub3").empty();
            if(sub3pf1 == "2" || sub3pf1 == "3")
            {
                $("#sub3").empty();
                $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
                $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");    

            }
            $("#sub3").append(new Option('NONE',0));

            $("#sub3p2").empty();
            $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub4").empty();
            if(sub4pf1 == "2" || sub4pf1 == "3")
            {
                $("#sub4").empty();
                $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
                $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");    

            }
            $("#sub4").append(new Option('NONE',0));

            $("#sub4p2").empty();
            $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4p2 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub5").empty();
            if(sub5pf1 == "2" || sub5pf1 == "3")
            {
                $("#sub5").empty();
                $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
                $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");   

            }
            $("#sub5").append(new Option('NONE',0)); 

            $("#sub5p2").empty();
            $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");

            $("#sub6").empty();
            if(sub6pf1 == "2" || sub6pf1 == "3")
            {
                $("#sub6").empty();
                $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
                $("#sub6 option[value='" + sub1 + "']").attr("selected","selected");   

            }
            $("#sub6").append(new Option('NONE',0)); 


            $("#sub6p2").empty();
            $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6p2 option[value='" + sub6 + "']").attr("selected","selected");

            $("#sub7").empty();
            if(sub7pf1 == "2" || sub7pf1 == "3")
            {
                $("#sub7").empty();
                $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
                $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");    

            }
            $("#sub7").append(new Option('NONE',0)); 



            $("#sub7p2").empty();
            $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");

            $("#sub8").empty();
            if(sub8pf1 == "2" || sub8pf1 == "3")
            {
                $("#sub8").empty();
                $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
                $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");

            }
            $("#sub8").append(new Option('NONE',0)); 



            $("#sub8p2").empty();
            $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");
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
            //$("#sub1p2").empty();
            $('#sub1p2').empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub2p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub3p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub4p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub5p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub6p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub7p2").empty().append('<option selected="selected" value="0">NONE</option>');
            $("#sub8p2").empty().append('<option selected="selected" value="0">NONE</option>');
        }

        function sub_grp_load_MarksImp_PI(){
            // debugger;
            // check Pass Fail status first
            sub_grp_empty_PII();
            $("#sub1").empty();
            $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");
            /* }
            else
            {   $("#sub1").empty();
            $("#sub1").append('<option value="0">NONE</option>');
            } */
            // Subject 2 
            /* if((sub2pf1 == "1"))
            {*/
            $("#sub2").empty();
            $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");
            /* }
            else
            {
            $("#sub2").empty();
            $("#sub2").append('<option value="0">NONE</option>');
            }      */
            // subject 3 
            /* if((sub3pf1 == "1"))
            {*/
            $("#sub3").empty();
            $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub8").empty();
            $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");
            $("#sub4").empty();
            $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");
            /*}
            else
            {
            $("#sub4").empty();
            $("#sub4").append('<option value="0">NONE</option>');
            }      */
            /*if((sub5pf1 == "1"))
            {*/
            $("#sub5").empty();
            $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");
            /*}
            else
            {
            $("#sub5").empty();
            $("#sub5").append('<option value="0">NONE</option>');
            }   */
            /* if((sub6pf1 == "1"))
            { */
            $("#sub6").empty();
            $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6 option[value='" + sub1 + "']").attr("selected","selected");
            /*}
            else
            {
            $("#sub6").empty();
            $("#sub6").append('<option value="0">NONE</option>');
            }    */
            /*if((sub7pf1 == "1"))
            {*/
            $("#sub7").empty();
            $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");
            /* }
            else
            {
            $("#sub7").empty();
            $("#sub7").append('<option value="0">NONE</option>');
            }  */
            /*  if((sub8pf1 == "1"))
            { */

            /* }
            else
            {
            $("#sub8").empty();
            $("#sub8").append('<option value="0">NONE</option>');
            }  */
            // PART II Subjects ....... 
        }
        function sub_grp_load__MarksImp_PII(){
            //
            // check Pass Fail status first
            sub_grp_empty_PI();
            //if((sub1pf2 == "1") )
            //{
            $("#sub1p2").empty();
            $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");
            //$("#sub1p2").append('<option value='+sub1p2+'>'+sub1p2+'</option>');
            // }
            /*  else
            {   $("#sub1p2").empty();
            $("#sub1p2").append('<option value="0">NONE</option>');
            }  */
            // Subject 2 
            /*if((sub2pf2 == "1"))
            { */
            $("#sub2p2").empty();
            $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");
            /*}
            else
            {
            $("#sub2p2").empty();
            $("#sub2p2").append('<option value="0">NONE</option>');
            }     */
            // subject 3 
            /*if((sub3pf2 == "1"))
            { */
            $("#sub3p2").empty();
            $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");

            $("#sub8p2").empty();
            $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");

            $("#sub4p2").empty();
            $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4p2 option[value='" + sub4 + "']").attr("selected","selected");
            /*}
            else
            {
            $("#sub4p2").empty();
            $("#sub4p2").append('<option value="0">NONE</option>');
            }  */
            /*  if((sub5pf2 == "1"))
            {*/
            $("#sub5p2").empty();
            $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");
            /* $.each(sub5, function(val, text) {
            $('#sub5p2').append( new Option(text,val) );
            $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");
            }); */
            /*}
            else
            {
            $("#sub5p2").empty();
            $("#sub5p2").append('<option value="0">NONE</option>');
            }      */
            /* if((sub6pf2 == "1"))
            {*/
            $("#sub6p2").empty();
            $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6p2 option[value='" + sub6 + "']").attr("selected","selected");
            /* }
            else
            {
            $("#sub6p2").empty();
            $("#sub6p2").append('<option value="0">NONE</option>');
            }    */
            /* if((sub7pf2 == "1"))
            {*/
            $("#sub7p2").empty();
            $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");
            /* }
            else
            {
            $("#sub7p2").empty();
            $("#sub7p2").append('<option value="0">NONE</option>');
            }     */
            /*if((sub8pf2 == "1"))
            {*/

            /* }
            else
            {
            $("#sub8p2").empty();
            $("#sub8p2").append('<option value="0">NONE</option>');
            }    */
            // PART II Subjects ....... 
        }

        function sub_grp_load_MarksImp_FULL(){

            $("#sub1").empty();
            $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");


            $("#sub1p2").empty();
            $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");

            $("#sub2").empty();
            $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");


            $("#sub2p2").empty();
            $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
            $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");

            $("#sub3").empty();
            $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");


            $("#sub3p2").empty();
            $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");


            $("#sub4").empty();
            $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub4p2").empty();
            $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            $("#sub4p2 option[value='" + sub4 + "']").attr("selected","selected");

            $("#sub5").empty();
            $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");
            //  else{

            $("#sub5p2").empty();
            $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");


            $("#sub6").empty();
            $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6 option[value='" + sub1 + "']").attr("selected","selected");

            $("#sub6p2").empty();
            $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            $("#sub6p2 option[value='" + sub6 + "']").attr("selected","selected");

            $("#sub7").empty();
            $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");


            $("#sub7p2").empty();
            $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
            $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");

            $("#sub8").empty();
            $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");

            $("#sub8p2").empty();
            $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");

        }

        function sub_grp_load_MarksImp_Subj_wise(){
            //
            // check Pass Fail status first
            if((sub1pf1 == "2" || sub1pf2 == "2") )
            {
                $("#sub1").empty();
                $("#sub1p2").empty();
                $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
                $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");
                $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
                $("#sub1p2 option[value='" + sub1 + "']").attr("selected","selected");
            }
            else
            {   $("#sub1p2").empty();
                $("#sub1p2").append('<option value="0">NONE</option>');
                $("#sub1p2").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
                $("#sub1").empty();
                $("#sub1").append('<option value="0">NONE</option>');
                $("#sub1").append(new Option('<?php  echo  array_search($data[0]['sub1'],$subarray); ?>',sub1));
            }

            // Subject 2 
            if((sub2pf1 == "2" || sub2pf2 == "2"))
            {
                $("#sub2").empty();
                $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
                $("#sub2 option[value='" + sub2 + "']").attr("selected","selected");
                $("#sub2p2").empty();
                $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
                $("#sub2p2 option[value='" + sub2 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub2p2").empty();
                $("#sub2p2").append('<option value="0">NONE</option>');
                $("#sub2p2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));
                $("#sub2").empty();
                $("#sub2").append('<option value="0">NONE</option>');
                $("#sub2").append(new Option('<?php  echo  array_search($data[0]['sub2'],$subarray); ?>',sub2));  
            }

            // subject 3 
            if((sub3pf1 == "2" || sub3pf2 == "2"))
            {
                $("#sub3").empty();
                $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
                $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");
                $("#sub3p2").empty();
                $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
                $("#sub3p2 option[value='" + sub3 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub3p2").empty();
                $("#sub3p2").append('<option value="0">NONE</option>');
                $("#sub3p2").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
                $("#sub3").empty();
                $("#sub3").append('<option value="0">NONE</option>'); 
                $("#sub3").append(new Option('<?php  echo  array_search($data[0]['sub3'],$subarray); ?>',sub3));
            }

            if((sub4pf1 == "2" || sub4pf2 == "2"))
            {
                $("#sub4").empty();
                $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
                $("#sub4 option[value='" + sub4 + "']").attr("selected","selected");
                $("#sub4p2").empty();
                $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
                $("#sub4p2 option[value='" + sub4 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub4p2").empty();
                $("#sub4p2").append('<option value="0">NONE</option>');
                $("#sub4p2").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
                $("#sub4").empty();
                $("#sub4").append('<option value="0">NONE</option>');
                $("#sub4").append(new Option('<?php  echo  array_search($data[0]['sub4'],$subarray); ?>',sub4));
            }

            if((sub5pf1 == "2" || sub5pf2 == "2"))
            {
                $("#sub5").empty();
                $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
                $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");
                $("#sub5p2").empty();
                $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
                $("#sub5p2 option[value='" + sub5 + "']").attr("selected","selected");
                //  else{
                // }
                /*$.each(sub5, function(val, text) {
                $('#sub5').append( new Option(text,val) );
                $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");
                }); */
            }
            else
            {
                $("#sub5p2").empty();
                $("#sub5p2").append('<option value="0">NONE</option>');
                $("#sub5p2").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
                $("#sub5").empty();
                $("#sub5").append('<option value="0">NONE</option>');
                $("#sub5").append(new Option('<?php  echo  array_search($data[0]['sub5'],$subarray); ?>',sub5));
            }

            if((sub6pf1 == "2" || sub6pf2 == "2"))
            {
                $("#sub6").empty();
                $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
                $("#sub6 option[value='" + sub1 + "']").attr("selected","selected");
                $("#sub6p2").empty();
                $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
                $("#sub6p2 option[value='" + sub6 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub6p2").empty();
                $("#sub6p2").append('<option value="0">NONE</option>');
                $("#sub6p2").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
                $("#sub6").empty();
                $("#sub6").append('<option value="0">NONE</option>');
                $("#sub6").append(new Option('<?php  echo  array_search($data[0]['sub6'],$subarray); ?>',sub6));
            }

            if((sub7pf1 == "2" || sub7pf2 == "2"))
            {
                $("#sub7").empty();
                $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
                $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");
                $("#sub7p2").empty();
                $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
                $("#sub7p2 option[value='" + sub7 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub7p2").empty();
                $("#sub7p2").append('<option value="0">NONE</option>');
                $("#sub7p2").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7));
                $("#sub7").empty();
                $("#sub7").append('<option value="0">NONE</option>');
                $("#sub7").append(new Option('<?php  echo  array_search($data[0]['sub7'],$subarray); ?>',sub7)); 
            }

            if((sub8pf1 == "2" || sub8pf2 == "3"))
            {
                $("#sub8").empty();
                $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
                $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");
                $("#sub8p2").empty();
                $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
                $("#sub8p2 option[value='" + sub8 + "']").attr("selected","selected");
            }
            else
            {
                $("#sub8").empty();
                $("#sub8").append('<option value="0">NONE</option>');
                $("#sub8").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
                $("#sub8p2").empty();
                $("#sub8p2").append('<option value="0">NONE</option>');
                $("#sub8p2").append(new Option('<?php  echo  array_search($data[0]['sub8'],$subarray); ?>',sub8));
            }

            // PART II Subjects ....... 
        }

        $("#ddlMarksImproveoptions").change(function(){
            //
            //debugger;

            var cat =  $("#ddlMarksImproveoptions").val();
            if(cat== 0){
                sub_grp_empty_PI();
                sub_grp_empty_PII();
            }
            else if(cat== 1){
                sub_grp_load_MarksImp_PI();
            }
            else if(cat== 2){
                sub_grp_load__MarksImp_PII();

            }
            else if(cat== 3){
                sub_grp_load_MarksImp_FULL();

            }
            else if(cat== 4){
                sub_grp_load_MarksImp_Subj_wise();

            }
        })

        $("#religion").change(function()
            {
                var rel = $("#religion").val();
                var exam_type = $('#exam_type').val();
                if(exam_type == 2)
                {
                    if(rel == 1) 
                    {
                        $("#sub3").empty(); 
                        $("#sub3").prepend('<option selected="selected" value="3"> ISLAMIYAT (COMPULSORY) </option>');
                    }
                    else
                    {
                        $("#sub3").empty(); 
                        $("#sub3").prepend("<option selected='selected' value='51'> ETHICS </option>");
                        $("#sub3").prepend("<option  value='3'> ISLAMIYAT (COMPULSORY) </option>");
                    }
                }
        });
        $('#gend').change(function()
            {
                var exam_type = $('#exam_type').val();
                if(exam_type == 2)
                {
                    if($(this).val() == 2)
                    {
                        $("#sub6").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub6p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub7").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                        $("#sub7p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                    }
                    else
                    {
                        dropdownElement.find('sub8[value=13]').remove();
                        dropdownElement.find('sub8p2[value=13]').remove();
                    }
                }

        })
        $('#std_group').change(function(){

            //debugger;

            ClearALLDropDowns();

            var sel_group = $('#std_group').val();
            var old_exam =  $('#oldexam_type').val();
            var crnt_exam =  $('#exam_type').val();

            var oldGrp = "<?php echo @$_POST['std_group'] ?>";
            var changeCurGrp = "<?php echo @$_POST['grppre'] ?>";

            if(crnt_exam == 4 || crnt_exam == 5 || crnt_exam == 6 || crnt_exam == 3)
            {
                $('#oldexam_type').val(crnt_exam)
                $('#exam_type').val(2);
            }
            else if(crnt_exam == 2 && (old_exam == 4 || old_exam == 5 || old_exam == 6))
            {
                $('#oldexam_type').val(2)
                $('#exam_type').val(old_exam);
            }

            var exam_type_static = $("#exam_type_static").val();
            if(((((grp_cd == 1 && sub7 == "8") && sel_group ==1) || ((grp_cd == 1 && sub7 == "78") && sel_group ==7) || ((grp_cd == 1 && sub7 == "43") && sel_group ==8) || ((grp_cd == 2) && sel_group ==2) || ((grp_cd == 1 && sub7 == "78")) && sel_group ==7 || ((grp_cd == 1 && sub7 == "43") && sel_group ==8)) || (grp_cd == 2 && sel_group ==2)) && exam_type_static != 2)
            {
                if(exam_type_static==3 && oldGrp != changeCurGrp)
                {
                    if($("#isfullAppear").attr("check",false));
                    $("#isfullAppear").attr("disabled",true);

                    $("#divIsfullApp").hide();
                    $("#isfullAppear").hide();

                    sub_grp_load_P1_supply_PII_full_exam_type_3();
                    return false;
                }
                else
                {
                    $("#isfullAppear").attr("disabled",false);
                    $("#divIsfullApp").show();
                    $("#isfullAppear").show();

                    if($("#isfullAppear").is(":checked"))
                    {
                        IsFullAppear();
                    }
                    else
                    {
                        sub_grp_load();
                    }
                }

                return false; 
            }
            else
            {

                if($("#isfullAppear").attr("check",false));
                $("#isfullAppear").attr("disabled",true);

                $("#divIsfullApp").hide();
                $("#isfullAppear").hide();
            } 

            if(sel_group == "1")
            {
                // Check Nationality and select appropriate Subject1 against candidate Nationality :)
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('BIOLOGY',8));
                $("#sub7p2").append(new Option('BIOLOGY',8));
            }
            else if(sel_group == "7")
            {
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('COMPUTER SCIENCE',78));
                $("#sub7p2").append(new Option('COMPUTER SCIENCE',78));
            }
            else if (sel_group == "8")
            {
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('ELECTRICAL WIRING (OPT)',43));
                $("#sub7p2").append(new Option('ELECTRICAL WIRING (OPT)',43));
                //ELECTRICAL WIRING (OPT)
            }
            else if(sel_group == "2")
            {
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

                if(Gender == "2")
                {
                    $("#sub6").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                    $("#sub6p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                    $("#sub7").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                    $("#sub7p2").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                }
                else
                {
                    dropdownElement.find('sub8[value=13]').remove();
                    dropdownElement.find('sub8p2[value=13]').remove();
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
                        $("#sub6 option[value='43']").remove();
                        $("#sub6p2 option[value='43']").remove();
                    }  
                }
            }
            else if(sel_group == "5")
            {
                Hum_Deaf_Subjects();
                $.each(sub5_Deaf,function(val,text){
                    $("#sub4").append(new Option(text,val));
                    $("#sub4p2").append(new Option(text,val));
                });
                $.each(sub6_Deaf,function(val,text){
                    $("#sub5").append(new Option(text,val));
                    $("#sub5p2").append(new Option(text,val));
                });
                $.each(sub6_Deaf,function(val,text){
                    $("#sub6").append(new Option(text,val));
                    $("#sub6p2").append(new Option(text,val));
                });
                $.each(sub7_Deaf,function(val,text){
                    $("#sub7").append(new Option(text,val));
                    $("#sub7p2").append(new Option(text,val));
                });
            }
            else if (sel_group == "0")
            {
                remove_subjects();
            }
        })

    })
    function checks_Matric(){

        $('#btnsubmitUpdateEnrol').attr("disabled", "disabled");
        var status  =  check_NewEnrol_validation_matric();
        if(status == 0)
        {
            $('#btnsubmitUpdateEnrol').removeAttr("disabled");
            return false;    
        }
        else
        {

            $('#btnsubmitUpdateEnrol').attr("disabled", "disabled");

            $.ajax({

                type: "POST",
                url: "<?php  echo site_url('Admission/frmvalidation'); ?>",
                data: $("#myform").serialize() ,
                datatype : 'html',
                cache:false,

                beforeSend: function() {  $('.mPageloader').show(); },
                complete: function() { $('.mPageloader').hide();},

                success: function(data)
                {                    
                    var obj = JSON.parse (data);
                    if(obj.excep == 'Success')
                    {
                        $.ajax({

                            type: "POST",
                            url: "<?php echo base_url(); ?>" + "Admission/NewEnrolment_insert/",
                            data: $("#myform").serialize() ,
                            datatype : 'html',
                            cache:false,

                            beforeSend: function() {  $('.mPageloader').show(); },
                            complete: function() { $('.mPageloader').hide();},

                            success: function(data){

                                var obj = JSON.parse(data);
                                if(obj.error ==  1)
                                {
                                    window.location.href ='<?php echo base_url(); ?>Admission/formdownloaded/'+obj.formno
                                    alertify.success('Your Application is Submit Successfully');
                                    return true;
                                } 

                                else
                                {
                                    alertify.error(obj.error);
                                    $('#btnsubmitUpdateEnrol').removeAttr("disabled");
                                    return false; 

                                }
                            },

                            error: function(request, status, error){
                                alertify.error(request.responseText);
                                $('#btnsubmitUpdateEnrol').removeAttr("disabled");
                            }
                        });


                        return false;

                    }
                    else
                    {
                        alertify.error(obj.excep);
                        $('#btnsubmitUpdateEnrol').removeAttr("disabled");
                        return false;     

                    }
                }
            });


            return false;   

        }
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