
<form method="post" enctype="multipart/form-data" name="myform" id="myform">
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
                <input class="text-uppercase form-control"  type="text" id="cand_name" name="cand_name" placeholder="Candidate Name" maxlength="60" value="<?php echo @$data['name'] ?>" >
            </div>
            <div class="col-md-4">
                <label class="control-label" for="father_name">
                    Father's Name :
                </label>        
                <input class="text-uppercase form-control" id="father_name" name="father_name"  type="text" placeholder="Father's Name" maxlength="60"  value="<?php echo  @$data['Fname']; ?>" > 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="bay_form" >
                    Bay Form No:
                </label>        
                <input class="text-uppercase form-control" type="text" id="bay_form" name="bay_form" maxlength="15" placeholder="Bay Form No." value="<?php echo @$data['BForm'];?>" required="required" >
            </div>
            <div class="col-md-4">
                <label class="control-label" for="father_cnic">
                    Father's CNIC:
                </label>        
                <input class="text-uppercase form-control" id="father_cnic" name="father_cnic" type="text" placeholder="34101-1111111-1"  value="<?php  echo @$data['FNIC'];?>" required="required" >
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
                    $med = @$data['medium'];
                    // $med = 2; 
                    if($med == 1)
                    {
                        echo  "
                        <option value='0'>None</option>
                        <option value='1' selected='selected'>Urdu</option>
                        <option value='1'>English</option>";
                    }
                    else if($med == 2)
                    {
                        echo  "<option value='0'>None</option>
                        <option value='1'>Urdu</option>
                        <option value='2' selected='selected'>English</option>";
                    }
                    else{
                        echo  "<option value='0'selected='selected'>None</option>
                        <option value='1'>Urdu</option>
                        <option value='2'>English</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label" for="preResult">Previous Result:</label>
                <input type="text" class="text-uppercase form-control" name="preResult" required="required" maxlength="4" id="preResult" value="<?php echo  @$data['preResult'] ; ?>" placeholder="i.e 350 or E,U">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <label class="control-label" for="MarkOfIden">Mark of Identification :</label>
                <input class="text-uppercase form-control" type="text" id="MarkOfIden"  name="MarkOfIden" value="<?php echo  @$data['markOfIden']; ?>" required="required" maxlength="60" >
            </div>
            <div class="col-md-4">
                <label class="control-label" for="speciality">Speciality:</label> 
                <select id="speciality"  class="text-uppercase form-control" name="speciality">
                    <?php
                    $spec =  @$data['Speciality'];
                    if($spec==1)
                    {
                        echo  "<option value='0'>None</option>  
                        <option value='1' selected='selected'>Deaf &amp; Dumb</option>
                        <option value='2'>Board Employee</option>
                        <option value='3'>Disable</option>";
                    }
                    else if($spec ==2)
                    {
                        echo"<option value='0'>None</option>
                        <option value='1'>Deaf &amp; Dumb</option>
                        <option value='2' selected='selected'>Board Employee</option>
                        <option value='3'>Disable</option>";
                    }
                    else
                    {
                        echo"<option value='0' selected='selected'>None</option>  
                        <option value='1'>Deaf &amp; Dumb</option>
                        <option value='2'>Board Employee</option>
                        <option value='3'>Disable</option>";
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
                        "<option value='0'>None</option>
                        <option value='1'>Pakistani</option> 
                        <option value='2' selected='selected'>Non Pakistani</option>";
                    }
                    else
                    {
                        echo  
                        "<option value='0'selected='selected'>None</option>
                        <option value='1'>Pakistani</option> 
                        <option value='2'>Non Pakistani</option>";
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
                        <option value='0'>None</option>
                        <option value='1'>MALE</option> 
                        <option value='2' selected='selected'>FEMALE</option>";
                    }
                    else
                    {
                        echo"
                        <option value='0'selected='selected'>None</option>
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
                    $rel = @$data['rel'];
                    if($rel == 1)
                    {
                        echo"
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
                        <option value='1'  selected='selected' >MUSLIM</option> 
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
                        <option value='0'selected='selected'>None</option>
                        <option value='1'>URBAN</option> 
                        <option value='2'>RURAL</option>";
                    }
                    ?>
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
                <h4 class="bold">Old Examination Information</h4>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4"><label class="control-label">Roll No :</label>
                <input class="text-uppercase form-control" type="text" id="oldrno" name="oldrno" value="<?php echo @$data['rno']; ?>" required="required" maxlength="10">
            </div>
            <div class="col-md-4">
                <label class="control-label">Year:</label> 
                <select class="text-uppercase form-control"  name="oldyear" id = "oldyear" >
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                </select> 
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-4"><label class="control-label">Session :</label>
                <select class="text-uppercase form-control" id="oldsess" name="oldsess">
                    <?php if(@$data['sess']==1)
                    {
                        echo "<option selected='selected' value='1'>Annual</option> <option  value='2'>Supplementary</option>";
                    }
                    else  if(@$data['sess']==2)
                    {
                        echo "<option  value='1'>Annual</option> <option selected='selected' value='2'>Supplementary</option>";
                    }
                    else
                    {
                        echo "<option selected='selected' value='1'>Annual</option> <option  value='2'>Supplementary</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label">Board:</label> 
                <select class="text-uppercase form-control" id="oldboardid" name="oldboardid">
                    <option value="0" <?php if(@$data['Brd_cd'] == 0) echo 'selected' ?>>Please Select</option>
                    <option value="2" <?php if(@$data['Brd_cd'] == 2) echo 'selected' ?>>BISE,  LAHORE</option>
                    <option value="3" <?php if(@$data['Brd_cd'] == 3) echo 'selected' ?>>BISE,  RAWALPINDI</option>
                    <option value="4" <?php if(@$data['Brd_cd'] == 4) echo 'selected' ?>>BISE,  MULTAN</option>
                    <option value="5" <?php if(@$data['Brd_cd'] == 5) echo 'selected' ?>>BISE,  FAISALABAD</option>
                    <option value="6" <?php if(@$data['Brd_cd'] == 6) echo 'selected' ?>>BISE,  BAHAWALPUR</option>
                    <option value="7" <?php if(@$data['Brd_cd'] == 7) echo 'selected' ?>>BISE,  SARGODHA</option>
                    <option value="8" <?php if(@$data['Brd_cd'] == 8) echo 'selected' ?>>BISE,  DERA GHAZI KHAN</option>
                    <option value="9" <?php if(@$data['Brd_cd'] == 9) echo 'selected' ?>>FBISE, ISLAMABAD</option>
                    <option value="10" <?php if(@$data['Brd_cd'] == 10) echo 'selected' ?>>BISE, MIRPUR</option>
                    <option value="11" <?php if(@$data['Brd_cd'] == 11) echo 'selected' ?>>BISE, ABBOTTABAD</option>
                    <option value="12" <?php if(@$data['Brd_cd'] == 12) echo 'selected' ?>>BISE, PESHAWAR</option>
                    <option value="13" <?php if(@$data['Brd_cd'] == 13) echo 'selected' ?>>BISE, KARACHI</option>
                    <option value="14" <?php if(@$data['Brd_cd'] == 14) echo 'selected' ?>>BISE, QUETTA</option>
                    <option value="15" <?php if(@$data['Brd_cd'] == 15) echo 'selected' ?>>BISE, MARDAN</option>
                    <option value="17" <?php if(@$data['Brd_cd'] == 17) echo 'selected' ?>>CAMBRIDGE</option>
                    <option value="18" <?php if(@$data['Brd_cd'] == 18) echo 'selected' ?>>AIOU, ISLAMABAD</option>
                    <option value="19" <?php if(@$data['Brd_cd'] == 19) echo 'selected' ?>>BISE, KOHAT</option>
                    <option value="20" <?php if(@$data['Brd_cd'] == 20) echo 'selected' ?>>KARAKURUM</option>
                    <option value="21" <?php if(@$data['Brd_cd'] == 21) echo 'selected' ?>>MALAKAN</option>
                    <option value="22" <?php if(@$data['Brd_cd'] == 22) echo 'selected' ?>>BISE, BANNU</option>
                    <option value="23" <?php if(@$data['Brd_cd'] == 23) echo 'selected' ?>>BISE, D.I.KHAN</option>
                    <option value="24" <?php if(@$data['Brd_cd'] == 24) echo 'selected' ?>>AKUEB, KARACHI</option>
                    <option value="25" <?php if(@$data['Brd_cd'] == 25) echo 'selected' ?>>BISE, HYDERABAD</option>
                    <option value="26" <?php if(@$data['Brd_cd'] == 26) echo 'selected' ?>>BISE, LARKANA</option>
                    <option value="27" <?php if(@$data['Brd_cd'] == 27) echo 'selected' ?>>BISE, MIRPUR(SINDH)</option>
                    <option value="28" <?php if(@$data['Brd_cd'] == 28) echo 'selected' ?>>BISE, SUKKUR</option>
                    <option value="29" <?php if(@$data['Brd_cd'] == 29) echo 'selected' ?>>BISE, SWAT</option>
                    <option value="30" <?php if(@$data['Brd_cd'] == 30) echo 'selected' ?>>SBTE KARACHI</option>
                    <option value="31" <?php if(@$data['Brd_cd'] == 31) echo 'selected' ?>>PBTE, LAHORE</option>
                    <option value="32" <?php if(@$data['Brd_cd'] == 32) echo 'selected' ?>>AFBHE RAWALPINDI</option>
                    <option value="33" <?php if(@$data['Brd_cd'] == 33) echo 'selected' ?>>BIE, KARACHI</option>
                    <option value="34" <?php if(@$data['Brd_cd'] == 34) echo 'selected' ?>>BISE SAHIWAL</option>
                </select>
            </div>
        </div>
    </div>
    <?php
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
        //'ELECTRICAL WIRING' => '43',
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
    ?>
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
                            <option value='2'>HUMANTIES</option>
                            <option value='5'>DEAF AND DUMB</option>
                            <option value='4'>AAMA GROUP</option>
                            ";  
                        }

                        if($sub7 == 78 || $sub8 == 78)
                        {
                            echo " 
                            <option value='1' >SCIENCE WITH BIOLOGY</option>
                            <option value='7'  selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>
                            <option value='2'>HUMANTIES</option>";
                        }

                        if($grp == 2)
                        {
                            echo "<option value='2' selected='selected'>HUMANTIES</option>
                            <option value='1' >SCIENCE WITH BIOLOGY</option>
                            <option value='7' >SCIENCE  WITH COMPUTER SCIENCE</option>
                            ";  
                        }
                    }
                    else{
                        echo "<option value='0'>SELECT GROUP</option>
                        <option value='1' >SCIENCE WITH BIOLOGY</option>
                        <option value='7' >SCIENCE  WITH COMPUTER SCIENCE</option>
                        <option value='2' >GENERAL</option>
                        ";
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
    <div class="hidden">
        <input class="hidden" type="hidden" value="1" id="isotherbrd" name="isotherbrd" />
        <input class="hidden" type="hidden" value="0" id="isFresh" name="isFresh" />
        <input class="hidden" type="hidden" value="<?php  if(!empty($data['name'])) echo 1; else echo 0; ?>" id="isNotFresh" name="isNotFresh" />   
        <input type="hidden" class="hidden" id="oldClass" name="oldClass">
        <input type="hidden" class="hidden" name="category" id="category" value="<?php  ?>">
        <input type="hidden" class="hidden" value="<?=  $data[0]['grp_cd']?>" name="pergrp" id="pergrp">
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
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-3">
                <input type="submit" value="Save Form" id="btnsubmitUpdateEnrol" name="btnsubmitUpdateEnrol" class="btn btn-primary btn-block" onclick="return checksOtherBoard10th()">
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>assets/img/Instructions.jpg" download="instructions.jpg" class="btn btn-info btn-block">Download Instruction</a>
            </div>
            <div class="col-md-3">
                <input type="button" class="btn btn-danger btn-block" value="Cancel" id="btnCancel" name="btnCancel" onclick="return gotodefaultpage();">
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url(); ?>assets/js_matric/jquery-1.8.3.js"></script>
<script type="text/javascript">

    function checksOtherBoard10th(){
        $('#btnsubmitUpdateEnrol').attr("disabled", "disabled");
        var status  =  check_NewEnrol_validation_otherBoard10th();
        if(status == 0)
        {           $('#btnsubmitUpdateEnrol').removeAttr("disabled");
            return false;    
        }
        else
        {
            $('#btnsubmitUpdateEnrol').attr("disabled", "disabled");
            $.ajax({

                type: "POST",
                url: "<?php  echo site_url('Admission/frmvalidation_otherBoard'); ?>",
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
                                    $('#btnsubmitUpdateEnrol').removeAttr("disabled");
                                    alertify.error(obj.error);
                                    return false; 
                                }
                            },

                            error: function(request, status, error){

                                alertify.error(request.responseText);
                                $('#btnsubmitUpdateEnrol').removeAttr("disabled");
                            }
                        });

                        return false
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
    function  check_NewEnrol_validation_otherBoard10th()
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
        var sub6p2 = $('#sub6p2').val();
        var sub7p2 = $('#sub7p2').val();
        var status = 0;
        var $img = $("#previewImg");
        var src = $img.attr("src");
        var selected_group_conversion ;
        var empBrdCd = $('#empBrdCd').val();
        var speciality = $('#speciality').val();

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

        else if (name.trim().length < 3 )
        {
            alertify.error("Please Enter your correct Name ") 
            $('#cand_name').focus(); 
            return status;
        }

        else if(fName == "" || fName == undefined)
        {
            alertify.error("Please Enter your Father's Name  ") 
            $('#father_name').focus(); 
            return status;
        }   

        else if (fName.trim().length < 3 )
        {
            alertify.error("Please Enter your correct Father's Name") 
            $('#father_name').focus(); 
            return status;
        }

        else if(bFormNo == "" || bFormNo == 0 || bFormNo == undefined)
        {
            alertify.error("Please Enter your bay-Form") 
            $('#bay_form').focus();  
            return status; 
        }

        else if(bFormNo == "00000-0000000-0" || bFormNo == "11111-1111111-1" || bFormNo == "22222-2222222-2" ||  bFormNo == "33333-3333333-3" ||
            bFormNo == "44444-4444444-4" || bFormNo == "55555-5555555-5" || bFormNo == "66666-6666666-6" ||  bFormNo == "77777-7777777-7" ||
            bFormNo == "88888-8888888-8" || bFormNo == "99999-9999999-9" )
            {
                alertify.error("Please Enter your valid bay-Form") 
                $('#bay_form').focus();  
                return status; 
            }

            else if(FNic == "" || FNic.length == undefined )
            {
                alertify.error("Please Enter your Father's CNIC") 
                $('#father_cnic').focus();  
                return status; 
            }

            else if(FNic == "00000-0000000-0" || FNic == "11111-1111111-1" || FNic == "22222-2222222-2" ||  FNic == "33333-3333333-3" ||
                FNic == "44444-4444444-4" || FNic == "55555-5555555-5" || FNic == "66666-6666666-6" ||  FNic == "77777-7777777-7" ||
                FNic == "88888-8888888-8" || FNic == "99999-9999999-9" )
                {
                    alertify.error("Please Enter your valid Father CNIC") 
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

                else if(mobNo == "0000-0000000")
                {
                    alertify.error("Please Enter correct Mobile No.") 
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

                else if(speciality == 2 && empBrdCd.trim() != fName.trim())
                {
                    alertify.error("Please Enter Valid Employee Code") 
                    $("#empBrdCd").val('');
                    $('#empBrdCd').prop('readonly', false);
                    $('#empBrdCd').focus();   
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


                else if(sub6p2 == '' || sub6p2 == 0)
                {
                    alertify.error('Please Select all the PART-II Subjects '); 
                    $("#sub6p2").focus();
                    return status;  
                }

                else if(sub7p2 == '' || sub7p2 == 0)
                {
                    alertify.error('Please Select all the PART-II Subjects '); 
                    $("#sub7p2").focus();
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
            30: 'CLOTHING & TEXTILES',
            35: 'ENGLISH LITERATURE',
            34: 'URDU LITERATURE',
            19: 'ADVANCED ISLAMIC STUDIES',
            87: 'ENVIRONMENTAL STUDIES',
            33: 'COMMERCIAL GEOGRAPHY',
            27:'FOOD AND NUTRITION',
            22: 'ARABIC',
            23: 'PERSIAN',
            36: 'PUNJABI',
            20: 'ISLAMIC HISTORY / MUSLIM HISTORY',
            83: 'POULTRY FARMING',
            40: 'HEALTH & PHYSICAL EDUCATION',
            78: 'COMPUTER SCIENCE',
            15 : 'GEOMETRICAL & TECHNICAL DRAWING',
            // 43 : 'ELECTRICAL WIRING',
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
            30: 'CLOTHING & TEXTILES',
            35: 'ENGLISH LITERATURE',
            34: 'URDU LITERATURE',
            19: 'ADVANCED ISLAMIC STUDIES',
            87: 'ENVIRONMENTAL STUDIES',
            33: 'COMMERCIAL GEOGRAPHY',
            27:'FOOD AND NUTRITION',
            22: 'ARABIC',
            23: 'PERSIAN',
            36: 'PUNJABI',
            20: 'ISLAMIC HISTORY / MUSLIM HISTORY ',
            83: 'POULTRY FARMING',
            40: 'HEALTH & PHYSICAL EDUCATION',
            78: 'COMPUTER SCIENCE',
            15 : 'GEOMETRICAL & TECHNICAL DRAWING',
            //   43 : 'ELECTRICAL WIRING',
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
        // APPREARNESS  
        var sub1ap1 ="<?php echo @$data['sub1ap1']; ?>";
        var sub2ap1 = "<?php echo @$data['sub2ap1']; ?>";
        var sub3ap1 ="<?php echo @$data['sub3ap1']; ?>";
        var sub4ap1 = "<?php echo @$data['sub4ap1']; ?>";
        var sub5ap1 = "<?php echo @$data['sub5ap1']; ?>";
        var sub6ap1 = "<?php echo @$data['sub6ap1']; ?>";
        var sub7ap1 = "<?php echo @$data['sub7ap1']; ?>";
        var sub8ap1 = "<?php echo @$data['sub8ap1']; ?>";          
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

            var NationalityVal = $("#nationality").val();
            $('#sub1').empty();
            $('#sub1p2').empty();

            $.each(sub1_Pak_options, function(val, text) {

                $('#sub1').append( new Option(text,val) );

                $('#sub1p2').append( new Option(text,val) );
            });
            debugger;
            if(sub1ap1==0)
            {
                $("#sub1").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub1').append( new Option("NONE",0) );
            } 


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
            // $('#sub2').append( new Option("NONE",0) );
            $("#sub2p2").prepend('<option selected="selected" value="2">ENGLISH</option>');
            // Check Religion and select sub........    
            if(sub2ap1==0)
            {
                $("#sub2").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub2').append( new Option("NONE",0) );
            } 
            $("#sub3").empty();
            $("#sub3p2").empty();
            var Religion = $("#religion").val();
            //console.log(Religion);
            //console.log(Religion);

            $.each(sub3_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));

                $("#sub3p2").append(new Option(text,val));
            });
            // $('#sub3').append( new Option("NONE",0) );
            if(sub3ap1==0)
            {
                $("#sub3").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub3').append( new Option("NONE",0) );
            } 
            if(Religion == "2")
            {
                //debugger;
                $.each(sub3_Non_Muslim,function(val,text){
                    $("#sub3").append(new Option(text,val));

                    $("#sub3p2").append(new Option(text,val));
                });
            }
            $("#sub8").empty();
            $("#sub8p2").empty();
            $("#sub8").prepend('<option selected="selected" value="4">PAKISTAN STUDIES</option>');
            //$('#sub8').append( new Option("NONE",0) );
            if(sub8ap1==0)
            {
                $("#sub8").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub8').append( new Option("NONE",0) );
            }

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
            //$('#sub4').append( new Option("NONE",0) );
            if(sub4ap1==0)
            {
                $("#sub4").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub4').append( new Option("NONE",0) );
            }
            $("#sub4p2").append(new Option('MATHEMATICS',5));
            $("#sub5").append(new Option('PHYSICS',6));
            //$('#sub5').append( new Option("NONE",0) );
            if(sub5ap1==0)
            {
                $("#sub5").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub5').append( new Option("NONE",0) );
            }
            $("#sub5p2").append(new Option('PHYSICS',6));
            $("#sub6").append(new Option('CHEMISTRY',7));
            //$('#sub6').append( new Option("NONE",0) );
            if(sub6ap1==0)
            {
                $("#sub6").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub6').append( new Option("NONE",0) );
            }
            $("#sub6p2").append(new Option('CHEMISTRY',7));
        }
        function Hum_Deaf_Subjects()
        {
            //alert(isElec);
            // var NationalityVal = $("input[name=nationality]:checked").val();
            //console.log(NationalityVal);
            $('#sub1').empty();
            $('#sub1p2').empty();
            var Religion = $("#religion").val();

            $.each(sub1_Pak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );

                $('#sub1p2').append( new Option(text,val) );
            }); 
            // $('#sub1').append( new Option("NONE",0) );
            if(sub1ap1==0)
            {
                $("#sub1").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub1').append( new Option("NONE",0) );
            } 

            /*if (NationalityVal == "2")
            {
            console.log("Hi Foreigner Welcom to Pakistan :) ");
            $.each(sub1_NonPak_options, function(val, text) {
            $('#sub1').append( new Option(text,val) );
            $('#sub1p2').append( new Option(text,val) );
            }); 
            }     */
            $('#sub2').empty();
            $('#sub2p2').empty();
            $("#sub2").prepend('<option selected="selected" value="2">ENGLISH</option>');
            //$('#sub2').append( new Option("NONE",0) );
            if(sub2ap1==0)
            {
                $("#sub2").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub2').append( new Option("NONE",0) );
            } 
            $("#sub2p2").prepend('<option selected="selected" value="2">ENGLISH</option>');
            // Check Religion and select sub........
            $("#sub3").empty();
            $("#sub3p2").empty();


            if(Religion == "2")
            {
                //debugger;
                $.each(sub3_Non_Muslim,function(val,text){

                    $("#sub3").append(new Option(text,val));

                    $("#sub3p2").append(new Option(text,val));
                });
            }
            else
            {
                $.each(sub3_Muslim,function(val,text){

                    $("#sub3").append(new Option(text,val));

                    $("#sub3p2").append(new Option(text,val));
                });
            }

            $('#sub3').append( new Option("NONE",0) );
            if(sub3ap1==0)
            {
                $("#sub3").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub3').append( new Option("NONE",0) );
            } 





            /*if(Religion == "2")
            {
            $.each(sub3_Non_Muslim,function(val,text){
            $("#sub3").append(new Option(text,val));
            $("#sub3p2").append(new Option(text,val));
            //$("#sub3").prop('selectedIndex', 2);
            });
            }          */
            $("#sub8").empty();
            $("#sub8p2").empty();
            $("#sub8").prepend('<option selected="selected" value="4">PAKISTAN STUDIES</option>');
            //$('#sub8').append( new Option("NONE",0) );
            if(sub8ap1==0)
            {
                $("#sub8").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub8').append( new Option("NONE",0) );
            } 

            $("#sub8p2").prepend('<option selected="selected" value="4">PAKISTAN STUDIES</option>');

            $("#sub4").empty();
            $("#sub4p2").empty();
            if(sub4ap1==0)
            {
                $("#sub4").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub4').append( new Option("NONE",0) );
            } 
            //$('#sub4').append( new Option("NONE",0) );    
            $("#sub5").empty();
            if(sub5ap1==0)
            {
                $("#sub5").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub5').append( new Option("NONE",0) );
            } 
            //$('#sub5').append( new Option("NONE",0) );
            $("#sub5p2").empty();
            $("#sub6").empty();
            //  $('#sub6').append( new Option("NONE",0) );
            if(sub6ap1==0)
            {
                $("#sub6").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub6').append( new Option("NONE",0) );
            } 
            $("#sub6p2").empty();
            $("#sub7").empty();
            // $('#sub7').append( new Option("NONE",0) );
            if(sub7ap1==0)
            {
                $("#sub7").append('<option selected="selected" value="0">NONE</option>');
            }
            else{
                $('#sub7').append( new Option("NONE",0) );
            } 
            $("#sub7p2").empty();
            // $("#sub8").empty();
            //  $("#sub8p2").empty();
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
            //  $("#sub3").val(sel_sub);
        });

        $("#sub5").change(function(){
            var sel_sub =$("#sub5").val();
            //   $("#sub5p2").val(sel_sub);
        });
        $("#sub5p2").change(function(){
            var sel_sub =$("#sub5p2").val();
            // $("#sub5").val(sel_sub);
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
            // if(sub6 !=0 || sub7 != 0 || sub8 != 0 || sub6p2 != 0 || sub7p2 != 0 || sub8p2 != 0)
            // {
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
            $("#sub6").val(0);
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

                alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
                $("#sub7").val('0');
                $("#sub7p2").val('0');
                $("#sub7").focus();
                return;  
            }    
            $("#sub7p2").val(sub7);
        })
        $("#sub7p2").change(function(){
            //console.log('Hi i am sub7 dropdown :) ');
            var sub6 = $("#sub6").val();
            var sub4 = $("#sub5").val();
            var sub6p2 = $("#sub6p2").val();
            var sub7 = $("#sub7").val();
            var sub7p2 = $("#sub7p2").val();
            var sub8 = $("#sub8").val();
            var sub8p2 = $("#sub8p2").val();
            //console.log("sub7 = "+ sub7 + "  sub8 = "+ sub8);

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
            $("#sub7").val(0);
        })
        $("#sub8").change(function(){

            var sub8 = $("#sub8").val();

            $("#sub8p2").val(sub8);
        })
        $("#sub8p2").change(function(){

            var sub6 = $("#sub6").val();
            var sub6p2 = $("#sub6p2").val();
            var sub8 = $("#sub8p2").val();

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

        $('#std_group').change(function(){

            ClearALLDropDowns();

            var sel_group = $("#std_group").val();

            if(sel_group == "0"){
                ClearALLDropDowns();
            }
            else if(sel_group == "1")
            {
                ClearALLDropDowns();
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('BIOLOGY',8));
                if(sub7ap1==0)
                {
                    $("#sub7").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub7').append( new Option("NONE",0) );
                } 
                $("#sub7p2").append(new Option('BIOLOGY',8));
            }
            else if(sel_group == "7")
            {
                ClearALLDropDowns();
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('COMPUTER SCIENCE',78));
                if(sub7ap1==0)
                {
                    $("#sub7").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub7').append( new Option("NONE",0) );
                } 
                $("#sub7p2").append(new Option('COMPUTER SCIENCE',78));
            }
            else if (sel_group == "8")
            {
                ClearALLDropDowns();
                load_Bio_CS_Sub();
                //$("#sub7").append(new Option('ELECTRICAL WIRING (OPT)',43));
                if(sub7ap1==0)
                {
                    $("#sub7").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub7').append( new Option("NONE",0) );
                } 
                //$("#sub7p2").append(new Option('ELECTRICAL WIRING (OPT)',43));
                //ELECTRICAL WIRING (OPT)
            } 
            else if(sel_group=="4")
            {
                ClearALLDropDowns();
                AAMA_KHASA_sub_grp_load();
            }

            else if(sel_group == "2")
            {
                ClearALLDropDowns();
                Hum_Deaf_Subjects();

                $.each(sub5_Hum,function(val,text){
                    $("#sub4").append(new Option(text,val));

                    $("#sub4p2").append(new Option(text,val));
                });
                if(sub4ap1==0)
                {
                    $("#sub4").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub4').append( new Option("NONE",0) );
                } 

                $.each(sub6_Hum,function(val,text){
                    $("#sub5").append(new Option(text,val));

                    $("#sub5p2").append(new Option(text,val));
                });
                if(sub5ap1==0)
                {
                    $("#sub5").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub5').append( new Option("NONE",0) );
                } 



                $.each(sub7_Hum,function(val,text){
                    $("#sub6").append(new Option(text,val));

                    $("#sub6p2").append(new Option(text,val));
                });
                if(sub6ap1==0)
                {
                    $("#sub6").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub6').append( new Option("NONE",0) );
                } 



                $.each(sub8_Hum,function(val,text){
                    $("#sub7").append(new Option(text,val));

                    $("#sub7p2").append(new Option(text,val));
                });
                if(sub7ap1==0)
                {
                    $("#sub7").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub7').append( new Option("NONE",0) );
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
            }
            else if(sel_group == "5")
            {
                ClearALLDropDowns();
                Hum_Deaf_Subjects();

                $.each(sub5_Deaf,function(val,text){
                    $("#sub4").append(new Option(text,val));
                    $("#sub4p2").append(new Option(text,val));
                });
                if(sub4ap1==0)
                {
                    $("#sub4").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub4').append( new Option("NONE",0) );
                } 
                $.each(sub6_Deaf,function(val,text){
                    $("#sub6").append(new Option(text,val));
                    $("#sub6p2").append(new Option(text,val));
                });
                if(sub6ap1==0)
                {
                    $("#sub6").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub6').append( new Option("NONE",0) );
                }
                $.each(sub7_Deaf,function(val,text){
                    $("#sub7").append(new Option(text,val));
                    $("#sub7p2").append(new Option(text,val));
                });
                if(sub7ap1==0)
                {
                    $("#sub7").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub7').append( new Option("NONE",0) );
                }
                $.each(sub8_Deaf,function(val,text){
                    $("#sub5").append(new Option(text,val));
                    $("#sub5p2").append(new Option(text,val));
                });
                if(sub5ap1==0)
                {
                    $("#sub5").append('<option selected="selected" value="0">NONE</option>');
                }
                else{
                    $('#sub5').append( new Option("NONE",0) );
                }
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
            if(sub7ap1==0)
            {
                $("#sub7").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub7').append( new Option("NONE",0) );
            }
            $("#sub7p2").append(new Option('BIOLOGY',8));
        }
        else if($("#std_group").val() == "7")
        {
            ClearALLDropDowns();
            load_Bio_CS_Sub();
            $("#sub7").append(new Option('COMPUTER SCIENCE',78));
            if(sub7ap1==0)
            {
                $("#sub7").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub7').append( new Option("NONE",0) );
            }
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
            if(sub4ap1==0)
            {
                $("#sub4").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub4').append( new Option("NONE",0) );
            }



            $.each(sub6_Hum,function(val,text){
                $("#sub5").append(new Option(text,val));

                $("#sub5p2").append(new Option(text,val));
            });
            if(sub5ap1==0)
            {
                $("#sub5").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub5').append( new Option("NONE",0) );
            }

            $.each(sub7_Hum,function(val,text){
                $("#sub6").append(new Option(text,val));

                $("#sub6p2").append(new Option(text,val));

            });
            if(sub6ap1==0)
            {
                $("#sub6").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub6').append( new Option("NONE",0) );
            } 

            $('#sub6p2 option[value="<?php echo @$data['sub6'] ?>"]').prop('selected', 'selected'); 

            $.each(sub8_Hum,function(val,text){
                $("#sub7").append(new Option(text,val));

                $("#sub7p2").append(new Option(text,val));


            });
            if(sub7ap1==0)
            {
                $("#sub7").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub7').append( new Option("NONE",0) );
            }

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
            if(sub4ap1==0)
            {
                $("#sub4").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub4').append( new Option("NONE",0) );
            }
            $.each(sub6_Deaf,function(val,text){
                $("#sub6").append(new Option(text,val));
                $("#sub6p2").append(new Option(text,val));
            });
            if(sub6ap1==0)
            {
                $("#sub6").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub6').append( new Option("NONE",0) );
            }
            $.each(sub7_Deaf,function(val,text){
                $("#sub7").append(new Option(text,val));
                $("#sub7p2").append(new Option(text,val));
            });
            if(sub7ap1==0)
            {
                $("#sub7").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub7').append( new Option("NONE",0) );
            }
            $.each(sub8_Deaf,function(val,text){
                $("#sub5").append(new Option(text,val));
                $("#sub5p2").append(new Option(text,val));
            });
            if(sub5ap1==0)
            {
                $("#sub5").append('<option selected="selected" value="0">NONE</option>');
            }
            else
            {
                $('#sub5').append( new Option("NONE",0) );
            }
            $("#sub7").val(<?php echo @$data['sub7'] ?>);
            $("#sub6").val(<?php echo @$data['sub6'] ?>);
            $("#sub5").val(<?php  echo @$data['sub5']; ?>);
        }

        else if($("#std_group").val()==4)
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

        jQuery(document).ready(function (){

            $(document.getElementById("bay_form")).mask("99999-9999999-9", { placeholder: "_" });
            $(document.getElementById("father_cnic")).mask("99999-9999999-9", { placeholder: "_" });
            $(document.getElementById("mob_number")).mask("9999-9999999", { placeholder: "_" });
        });
    });

    $('#religion').change(function()
        {

            var std_group = $('#std_group').val();

            if($(this).val() == 1 && std_group > 0) {

                $("#sub3").empty(); 
                $("#sub3").prepend('<option selected="selected" value="0">NONE</option>');
                $("#sub3").prepend('<option value="3"> ISLAMIYAT (COMPULSORY) </option>');
            }
            else if($(this).val() == 2 && std_group > 0) {
                $("#sub3").empty(); 
                $("#sub3").prepend('<option selected="selected" value="0">NONE</option>');
                $("#sub3").prepend("<option value='51'> ETHICS </option>");
                $("#sub3").prepend("<option value='3'> ISLAMIYAT (COMPULSORY) </option>");

                $("#sub3p2").empty(); 
                $("#sub3p2").prepend("<option selected='selected' value='51'> ETHICS </option>");
                $("#sub3p2").prepend("<option  value='3'> ISLAMIYAT (COMPULSORY) </option>");
            }
    });
    $('#gend').change(function()
        {
            if($(this).val() == 0)
            {    
                var distId =  $("#pvtinfo_dist").val();
                $('#pvtinfo_teh').empty();
                $('#pvtinfo_teh').append('<option value="0">SELECT TEHSIL</option>');
                $('#pvtZone').empty();
                $('#pvtZone').append('<option value="0">SELECT ZONE</option>');
                if(distId == 1){
                    $("#pvtinfo_teh").append('<option value="1">KAMOKE</option>');
                    $("#pvtinfo_teh").append('<option value="2">GUJRANWALA</option>');
                    $("#pvtinfo_teh").append('<option value="3">WAZIRABAD</option>');
                    $("#pvtinfo_teh").append('<option value="4">NOWSHERA VIRKAN</option>'); 
                }
                else if(distId == 2){
                    $("#pvtinfo_teh").append('<option value="5">GUJRAT</option>');
                    $("#pvtinfo_teh").append('<option value="6">KHARIAN</option>');
                    $("#pvtinfo_teh").append('<option value="7">SARAI ALAMGIR</option>');
                }
                else if(distId == 3){
                    $("#pvtinfo_teh").append('<option value="8">HAFIZABAD</option>');
                    $("#pvtinfo_teh").append('<option value="9">PINDI BHATTIAN</option>');
                }
                else if(distId == 4){
                    $("#pvtinfo_teh").append('<option value="10">MANDI BAHA-UD-DIN</option>');
                    $("#pvtinfo_teh").append('<option value="11">PHALIA</option>');
                    $("#pvtinfo_teh").append('<option value="12">MALAKWAL</option>');
                }
                else if(distId == 5){
                    $("#pvtinfo_teh").append('<option value="13">NAROWAL</option>');
                    $("#pvtinfo_teh").append('<option value="14">SHAKARGARH</option>');
                    $("#pvtinfo_teh").append('<option value="19">ZAFARWAL</option>');
                }
                else if(distId == 6){
                    $("#pvtinfo_teh").append('<option value="15">SIALKOT</option>');
                    $("#pvtinfo_teh").append('<option value="16">PASRUR</option>');
                    $("#pvtinfo_teh").append('<option value="17">DASKA</option>');
                    $("#pvtinfo_teh").append('<option value="18">SAMBRIAL</option>');
                } 
            }

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
    })
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