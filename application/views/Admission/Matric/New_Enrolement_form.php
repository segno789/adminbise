
<?php 
$type = pathinfo(@$data[0]['picpath'], PATHINFO_EXTENSION); 
@$image_path_selected = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents(@$data[0]['picpath']));
?>
<div class="dashboard-wrapper class wysihtml5-supported">
    <div class="left-sidebar">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Admission form<a id="redgForm" data-original-title=""></a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <form method="post" enctype="multipart/form-data" name="newfrom" id="newfrom">
                            <div class="control-group">
                                <h4 class="span4">Personal Information :</h4>
                                <div class="controls controls-row">
                                    <input type="hidden" class="span2 hidden" id="isReAdm" name="isReAdm" value="0">
                                    <label class="control-label span2" >
                                    </label> 
                                    <img id="previewImg" src="<?php  echo $image_path_selected;?>" style="width:130px; height: 130px;" class="span2" alt="Candidate Image">
                                    <input type="hidden" value="<?php echo $path;?>" name="pic">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Candidate Name :
                                </label>
                                <div class="controls controls-row">
                                    <input class="span3"  type="text" id="cand_name" readonly="readonly" style="text-transform: uppercase;" name="cand_name" placeholder="Candidate Name" maxlength="60"  value="<?php  echo  $data['0']['name']; ?>" <?php if($isReAdm==1) echo "readonly='readonly'";  ?>  >
                                    <label class="control-label span2" for="father_name">
                                        Father's Name :
                                    </label> 
                                    <input class="span3" id="father_name" name="father_name" readonly="readonly" style="text-transform: uppercase;" type="text" placeholder="Father's Name" maxlength="60" value="<?php echo  $data['0']['Fname']; ?>" <?php if($isReAdm==1) echo "readonly='readonly'";  ?> required="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Bay Form No :
                                </label>
                                <div class="controls controls-row">
                                    <?php
                                    $bformLen = strlen($data['0']['BForm']);
                                    $fnicLen = strlen($data['0']['FNIC']);

                                    $bay_form = $data['0']['BForm'];
                                    $bay_form = explode(' ',trim($bay_form));
                                    $bay_form = $bay_form[0][0];

                                    $FNIC = @$data['0']['FNIC'];
                                    $FNIC = explode(' ',trim($FNIC));
                                    $FNIC = $FNIC[0][0];
                                    ?>
                                    <input class="span3" type="text" id="bay_form" name="bay_form" value="<?php echo  $data['0']['BForm']; ?>" required="required" <?php if ($bformLen == 15 && $bay_form != '0') { echo "readonly='readonly'"; }  ?> >
                                    <label class="control-label span2" for="father_cnic">
                                        Father's CNIC :
                                    </label> 
                                    <input class="span3" id="father_cnic" name="father_cnic" type="text" value="<?php echo  $data['0']['FNIC']; ?>" <?php if ($fnicLen == 15 && $FNIC != '0')  { echo "readonly='readonly'"; } ?> required="required">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label span1" >
                                    Date of Birth:(dd-mm-yyyy)
                                </label>
                                <?php
                                $source = $data['0']['Dob'];
                                $date = new DateTime($source);
                                $trim =  trim($date->format('d-m-Y')," "); 
                                ?>
                                <div class="controls controls-row">
                                    <input class="span3" type="text" id="dob" name="dob" style="text-align: left;" placeholder="DOB" value="<?php echo $trim; ?>" required="required" readonly="readonly" disabled="disabled">
                                    <label class="control-label span2" >
                                        Mobile Number :
                                    </label> 
                                    <input class="span3" id="mob_number" name="mob_number" type="text" placeholder="0300-123456789" value="<?php  echo  $data['0']['MobNo']; ?>" required="required">
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
                                        Class Roll No :
                                    </label> 
                                    <input class="span3" id="Inst_Rno" type="text"  style="text-transform: uppercase;" name="Inst_Rno" placeholder="" value="<?php echo  $data['0']['classRno']; ?>" required="required" maxlength="8">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Mark Of Identification :
                                </label>
                                <div class="controls controls-row">
                                    <input class="span3" type="text" id="MarkOfIden" style="text-transform: uppercase;" name="MarkOfIden" value="<?php echo  $data['0']['markOfIden']; ?>" required="required" maxlength="60" >
                                    <label class="control-label span2" >
                                        Speciality:
                                    </label> 
                                    <select id="speciality"  class="span3" name="speciality">
                                        <?php 
                                        $spec = $data['0']['Spec'] ;

                                        if($spec == 0)
                                        {
                                            echo  "<option value='0' selected='selected'>None</option>  <option value='1'>Deaf &amp; Dumb</option> <option value='2'>Board Employee</option>";
                                        }
                                        else if($spec == 1)
                                        {
                                            echo  "<option value='0' >None</option>  <option value='1' selected='selected'>Deaf &amp; Dumb</option> <option value='2'>Board Employee</option>";
                                        }
                                        else if($spec == 2){
                                            echo  "<option value='0' >None</option>  <option value='1' >Deaf &amp; Dumb</option> <option value='2' selected='selected'>Board Employee</option>";                                           
                                        }
                                        ?>           
                                    </select>
                                </div>
                            </div>

                            <div class="hidden" id="boardEmployeeDiv">
                                <div class="control-group">
                                    <label class="control-label span4"></label>
                                    <div class="controls controls-row">
                                        <label class="control-label span2" >
                                            Employee Code:
                                        </label> 
                                        <input class="span3" type="text" id="empBrdCd" name="empBrdCd" placeholder="Enter Board Employee Code" maxlength="4" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label span1" >
                                    Nationality :
                                </label>
                                <div class="controls controls-row">  
                                    <?php
                                    $nat = $data[0]['nat'];
                                    if($nat == 1)
                                    {
                                        echo  " <label class='radio inline span1'><input type='radio' value='1' id='nationality' checked='checked' name='nationality'> Pakistani
                                        </label><label class='radio inline span2'><input type='radio'  id='nationality1' value='2' name='nationality'>  Non Pakistani</label>" ;
                                    }
                                    else if ($nat == 2)
                                    {
                                        echo  "<label class='radio inline span1'><input type='radio' value='1' id='nationality'  name='nationality'> Pakistani
                                        </label><label class='radio inline span2'><input type='radio'  id='nationality1' checked='checked' value='2' name='nationality'>  Non Pakistani</label>" ;
                                    }
                                    ?>

                                    <label class="control-label span2" for="gender1">
                                        Gender :
                                    </label> 
                                    <?php
                                    $gender = $data[0]['sex'];
                                    if($gender == 1)
                                    {
                                        echo " <label class='radio inline span1'><input type='radio' id='gender1' value='1' checked='checked'  disabled='disabled' name='gender'> Male</label> 
                                        <label class='radio inline span1'><input type='radio' id='gender2' value='2'  name='gender'  disabled='disabled'> Female </label> " ;
                                    }
                                    else if ($gender == 2)
                                    {
                                        echo " <label class='radio inline span1'><input type='radio' id='gender1' value='1'  disabled='disabled' name='gender'> Male</label> 
                                        <label class='radio inline span1'><input type='radio' id='gender2' value='2'  checked='checked'  disabled='disabled'  name='gender'> Female </label> " ;
                                    }
                                    ?>
                                    <input type="hidden" name="gender" value="<?php echo $gender; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Hafiz-e-Quran :
                                </label>
                                <div class="controls controls-row">
                                    <?php

                                    if($isReAdm == 1)
                                    {
                                        echo " <label class='radio inline span1'><input type='radio' id='hafiz1' value='1'  name='hafiz'> No</label>
                                        <label class='radio inline span1'><input type='radio' id='hafiz2' value='2' checked='checked' name='hafiz'> Yes</label>";
                                    }
                                    else
                                    {
                                        echo " <label class='radio inline span1'><input type='radio' id='hafiz1' value='1' checked='checked' name='hafiz'> No</label>
                                        <label class='radio inline span1'><input type='radio' id='hafiz2' value='2' name='hafiz'> Yes</label>";
                                    }    
                                    ?>
                                    <label class="control-label span3" >
                                        Religion :
                                    </label> 
                                    <?php
                                    $rel = $data[0]['rel'];
                                    if($rel == 1)
                                    {
                                        echo " <label class='radio inline span1'><input type='radio' id='religion' class='rel_class' value='1' checked='checked' name='religion'> Muslim
                                        </label><label class='radio inline span1'><input type='radio' id='religion1' class='rel_class' value='2' name='religion'> Non Muslim</label>" ;
                                    }
                                    else if ($rel == 2)
                                    {
                                        echo " <label class='radio inline span1'><input type='radio' id='religion' class='rel_class' value='1'  name='religion'> Muslim
                                        </label><label class='radio inline span1'><input type='radio' id='religion1' class='rel_class' value='2' checked='checked' name='religion'> Non Muslim</label>" ;
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label span1" >
                                    Internal Grade :
                                </label>
                                <div class="controls controls-row">  
                                    <input class="span3" id="Inst_grd" type="text"  style="text-transform: uppercase;" name="SchGrade" placeholder="" value="<?php echo  $data['0']['SchGrade']; ?>" required="required" maxlength="2">

                                </div>
                            </div>
                            <input type="hidden" name='UrbanRural' value="<?=$data[0]['RuralORUrban']?>">

                            <div class="control-group">
                                <label class="control-label span1" >
                                    Address :
                                </label>
                                <div class="controls controls-row">
                                    <textarea style="height:150px; text-transform: uppercase;"  id="address" class="span8" name="address" required="required"><?php
                                        echo $data[0]['addr'];
                                    ?></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="control-group">
                                <h4 class="span4">Exam Information :</h4>
                                <div class="controls controls-row">
                                    <input type="hidden" class="span2 hidden" id="isReAdm" name="isReAdm" value="0">
                                    <label class="control-label span2">

                                    </label> 

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Study Group :
                                </label>
                                <div class="controls controls-row">
                                    <select id="std_group" class="dropdown span6"  name="std_group" disabled="disabled">
                                        <?php
                                        $grp = $data[0]['grp_cd'];
                                        $sub7 = $data[0]["sub7"];
                                        if($grp==1 && $sub7==78)
                                        {
                                            $grp = 7;
                                        }
                                        if($grp == 1 && $sub7 == 43){
                                            $grp = 8;
                                        }
                                        if($grp == 1 && $sub7 == 8){
                                            $grp = 1;
                                        }
                                        //$grp_cd = '1,2,5,7,8';
                                        $subgroups[] = 1;// split(',',$grp_cd);
                                        $subgroups[] = 2;// split(',',$grp_cd);
                                        $subgroups[] = 5;// split(',',$grp_cd);
                                        $subgroups[] = 7;// split(',',$grp_cd);
                                        $subgroups[] = 8;// split(',',$grp_cd);
                                        echo "<option value='0' >SELECT GROUP</option>";
                                        if($isReAdm == 1 )
                                        {
                                            echo "<option value='1' >SCIENCE WITH BIOLOGY</option>
                                            <option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>
                                            <option value='8' >SCIENCE  WITH ELECTRICAL WIRING</option>
                                            <option value='2'>GENERAL</option>
                                            <option value='5'>DEAF AND DUMB</option>
                                            ";  
                                        }
                                        if($isReAdm != 1)
                                        {
                                            for($i =0 ; $i<count($subgroups); $i++)
                                            {
                                                if($subgroups[$i] == 1)
                                                {
                                                    if($grp == 1)
                                                    {
                                                        echo "<option value='1' selected='selected'>SCIENCE WITH BIOLOGY</option>";  
                                                    }
                                                    else 
                                                    {
                                                        echo "<option value='1' >SCIENCE WITH BIOLOGY</option>";    
                                                    }
                                                }
                                                else if($subgroups[$i] == 7)
                                                {
                                                    if($grp == 7)
                                                    {
                                                        echo "<option value='7' selected='selected'>SCIENCE  WITH COMPUTER SCIENCE</option>";
                                                    }
                                                    else
                                                    {
                                                        echo "<option value='7'>SCIENCE  WITH COMPUTER SCIENCE</option>"; 
                                                    }

                                                }
                                                else if($subgroups[$i] == 8)
                                                {
                                                    if($grp == 8)
                                                    {
                                                        echo "<option value='8' selected='selected'>SCIENCE  WITH ELECTRICAL WIRING</option>";  
                                                    }
                                                    else
                                                    {
                                                        echo "<option value='8'>SCIENCE  WITH ELECTRICAL WIRING</option>";  
                                                    }

                                                }
                                                else if($subgroups[$i] == 2)
                                                {
                                                    if($grp == 2)
                                                    {
                                                        echo "<option value='2' selected='selected'>GENERAL</option>";  
                                                    }
                                                    else
                                                    {
                                                        echo "<option value='2'>GENERAL</option>";   
                                                    }

                                                }
                                                else if($subgroups[$i] == 5)
                                                {
                                                    if($grp == 5)
                                                    {
                                                        echo "<option value='5' selected='selected'>DEAF AND DUMB</option>";  
                                                    }
                                                    else
                                                    {
                                                        echo "<option value='5'>DEAF AND DUMB</option>";  
                                                    }

                                                }
                                            } 
                                        }
                                        $subarray = array(
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
                                        ?>
                                    </select>                                            
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span12" style="width: 366px; font-weight: bold;" >
                                    Choose Subjects(Elective Subjects are Enabled Only)   
                                </label> 
                            </div>
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
                                    <?php
                                    if($data[0]['exam_type'] != 2){
                                        ?> 
                                        <select id="sub1" class="span3 dropdown" name="sub1">
                                            <?php if($data[0]['sub1pf1']==2){ ?>
                                                <option value="<?php  echo $data[0]['sub1'];?>"><?php
                                                    echo array_search($data[0]['sub1'],$subarray);
                                                ?></option>
                                                <?php } ?>
                                            <?php if($data[0]['sub1st1']==1) {?>
                                                <option value="0" <?php   if($data[0]['sub1pf1']==1) echo 'selected' ?> >NONE</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <select id="sub1" class="span3 dropdown" name="sub1">
                                            <option value="<?php  echo $data[0]['sub1'];?>"><?php
                                                echo array_search($data[0]['sub1'],$subarray);
                                            ?></option>
                                        </select>
                                        <?php
                                    }
                                    ?>
                                    <select id="sub1p2" class="span3 dropdown" name="sub1p2">
                                        <option value="<?php echo $data[0]['sub1'];?>"><?php
                                            echo array_search($data[0]['sub1'],$subarray);
                                        ?></option>
                                    </select> 
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >
                                    </label>
                                    <?php
                                    if($data[0]['exam_type'] != 2){
                                        ?>   
                                        <select id="sub2" class="span3 dropdown" name="sub2">
                                            <?php if($data[0]['sub2pf1']==2){ ?>
                                                <option value="<?php  echo $data[0]['sub2'];?>"><?php
                                                    echo array_search($data[0]['sub2'],$subarray);
                                                ?></option>
                                                <?php } ?>
                                            <?php if($data[0]['sub2st1']==1) {?>
                                                <option value="0" <?php  if($data[0]['sub2pf1']==1) echo 'selected' ?> >NONE</option>
                                                <?php
                                            }
                                            ?>
                                        </select> 
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <select id="sub2" class="span3 dropdown" name="sub2">
                                            <option value="<?php  echo $data[0]['sub2'];?>"><?php
                                                echo array_search($data[0]['sub2'],$subarray);
                                            ?></option>
                                        </select> 
                                        <?php
                                    }
                                    ?>
                                    <select id="sub2p2" class="span3 dropdown" name="sub2p2">
                                        <option value="<?php echo $data[0]['sub2'];?>"><?php
                                            echo array_search($data[0]['sub2'],$subarray);
                                        ?></option>
                                    </select> 
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >
                                    </label>
                                    <?php
                                    if($data[0]['exam_type'] != 2){
                                        ?>  
                                        <select id="sub3" class="span3 dropdown" name="sub3">
                                            <?php if($data[0]['sub3pf1']==2){ ?>
                                                <option value="<?php  echo $data[0]['sub3'];?>"><?php
                                                    echo array_search($data[0]['sub3'],$subarray);
                                                ?></option>
                                                <?php } ?>
                                            <?php if($data[0]['sub3st1']==1) {?>
                                                <option value="0" <?php if($data[0]['sub3pf1']==1) echo 'selected' ?> >NONE</option>
                                                <?php
                                            }
                                            ?>
                                        </select> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <select id="sub3" class="span3 dropdown" name="sub3">
                                            <option value="<?php  echo $data[0]['sub3'];?>"><?php
                                                echo array_search($data[0]['sub3'],$subarray);
                                            ?></option>
                                        </select> 
                                        <?php 
                                    }
                                    ?>
                                    <select id="sub3p2" class="span3 dropdown" name="sub3p2">
                                        <option value="<?php echo $data[0]['sub3'];?>"><?php
                                            echo array_search($data[0]['sub3'],$subarray);
                                        ?></option>
                                    </select> 
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <?php
                                    if($data[0]['exam_type'] != 2){
                                        ?>  
                                        <select id="sub4" class="span3 dropdown" name="sub4">
                                            <?php if($data[0]['sub4pf1']==2){ ?>
                                                <option value="<?php  echo $data[0]['sub4'];?>"><?php
                                                    echo array_search($data[0]['sub4'],$subarray);
                                                ?></option>
                                                <?php } ?>
                                            <?php if($data[0]['sub4st1']==1) {?>
                                                <option value="0" <?php   if($data[0]['sub4pf1']==1) echo 'selected' ?> >NONE</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <select id="sub4" class="span3 dropdown" name="sub4">
                                            <option value="<?php  echo $data[0]['sub4'];?>"><?php
                                                echo array_search($data[0]['sub4'],$subarray);
                                            ?></option>
                                        </select>
                                        <?php
                                    }  
                                    ?>
                                    <select id="sub4p2" class="span3 dropdown" name="sub4p2">
                                        <option value="<?php echo $data[0]['sub4'];?>"><?php
                                            echo array_search($data[0]['sub4'],$subarray);
                                        ?></option>
                                    </select> 
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >

                                    </label>
                                    <?php
                                    if($data[0]['exam_type'] != 2){
                                        ?>
                                        <select id="sub5" class="span3 dropdown" name="sub5">
                                            <?php if($data[0]['sub5pf1']==2){ ?>
                                                <option value="<?php  echo $data[0]['sub5'];?>"><?php
                                                    echo array_search($data[0]['sub5'],$subarray);
                                                ?></option>
                                                <?php } ?>
                                            <?php if($data[0]['sub5st1']==1) {?>
                                                <option value="0" <?php if($data[0]['sub5pf1']==1) echo 'selected' ?> >NONE</option>
                                                <?php
                                            }
                                            ?>
                                        </select> 
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <select id="sub5" class="span3 dropdown" name="sub5">
                                            <option value="<?php  echo $data[0]['sub5'];?>"><?php
                                                echo array_search($data[0]['sub5'],$subarray);
                                            ?></option>
                                        </select> 
                                        <?php }
                                    ?>
                                    <select id="sub5p2" class="span3 dropdown" name="sub5p2" selected="selected">
                                        <option value="<?php echo $data[0]['sub5'];?>"><?php
                                            echo array_search($data[0]['sub5'],$subarray);
                                        ?></option>
                                    </select> 
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >
                                    </label>
                                    <?php
                                    if($data[0]['exam_type'] != 2){
                                        ?>
                                        <select id="sub6" class="span3 dropdown" name="sub6">
                                            <?php if($data[0]['sub6pf1']==2){ ?>
                                                <option value="<?php  echo $data[0]['sub6'];?>"><?php
                                                    echo array_search($data[0]['sub6'],$subarray);
                                                ?></option>
                                                <?php } ?>
                                            <?php if($data[0]['sub6st1']==1) {?>
                                                <option value="0" <?php   if($data[0]['sub6pf1']==1) echo 'selected' ?> >NONE</option>
                                                <?php
                                            }
                                            ?>
                                        </select> 
                                        <?php
                                    }else{
                                        ?>
                                        <select id="sub6" class="span3 dropdown" name="sub6">
                                            <option value="<?php  echo $data[0]['sub6'];?>"><?php
                                                echo array_search($data[0]['sub6'],$subarray);
                                            ?></option>
                                        </select> 
                                        <?php }
                                    ?>
                                    <select id="sub6p2"  name="sub6p2" class="span3 dropdown" selected="selected">
                                        <option value="<?php echo $data[0]['sub6'];?>"><?php
                                            echo array_search($data[0]['sub6'],$subarray);
                                        ?></option>
                                    </select>
                                </div>
                                <div class="control row controls-row">
                                    <label class="control-label span1" >
                                    </label>
                                    <?php
                                    if($data[0]['exam_type'] != 2){
                                        ?>
                                        <select id="sub7" class="span3 dropdown" name="sub7">
                                            <?php if($data[0]['sub7pf1']==2){ ?>
                                                <option value="<?php  echo $data[0]['sub7'];?>"><?php
                                                    echo array_search($data[0]['sub7'],$subarray);
                                                ?></option>
                                                <?php } ?>
                                            <?php if($data[0]['sub7st1']==1) {?>
                                                <option value="0" <?php   if($data[0]['sub7pf1']==1) echo 'selected' ?> >NONE</option>
                                                <?php
                                            }
                                            ?>
                                        </select> 
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <select id="sub7" class="span3 dropdown" name="sub7">
                                            <option value="<?php  echo $data[0]['sub7'];?>"><?php
                                                echo array_search($data[0]['sub7'],$subarray);
                                            ?></option>
                                        </select> 
                                        <?php 
                                    }
                                    ?>
                                    <select id="sub7p2" class="span3 dropdown" name="sub7p2" selected="selected">
                                        <option value="<?php echo $data[0]['sub7'];?>"><?php
                                            echo array_search($data[0]['sub7'],$subarray);
                                        ?></option>
                                    </select> 
                                </div> 
                                <div class="control row controls-row">
                                    <label class="control-label span1" >
                                    </label>

                                    <?php
                                    if($data[0]['exam_type'] != 2){
                                        ?>

                                        <select id="sub8" class="span3 dropdown" name="sub8">
                                            <?php if($data[0]['sub8pf1']==2){ ?>
                                                <option value="<?php  echo $data[0]['sub8'];?>"><?php
                                                    echo array_search($data[0]['sub8'],$subarray);
                                                ?></option>
                                                <?php } ?>
                                            <?php if($data[0]['sub8st1']==1) {?>
                                                <option value="0" <?php   if($data[0]['sub8pf1']==1) echo 'selected' ?> >NONE</option>
                                                <?php
                                            }
                                            ?>
                                        </select> 
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <select id="sub8" class="span3 dropdown" name="sub8">
                                            <option value="<?php  echo $data[0]['sub8'];?>"><?php
                                                echo array_search($data[0]['sub8'],$subarray);
                                            ?></option>
                                        </select>    
                                        <?php
                                    }
                                    ?>
                                    <select id="sub8p2"  name="sub8p2" class="span3 dropdown">
                                        <option value="<?php echo $data[0]['sub8'];?>"><?php
                                            echo array_search($data[0]['sub8'],$subarray);
                                        ?></option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-actions no-margin">
                                <input type="hidden"   value="<?php  echo  $data[0]['formNo']; ?>"  name="formNo">
                                <input type="hidden"   value="<?php  echo  $isReAdm; ?>"  name="IsReAdm">
                                <input type="hidden"   value="<?php  echo $data[0]['rno']; ?>"  name="OldRno"> 
                                <input type="hidden"   value="<?php echo   $data[0]['Iyear'];  ?>"  name="Oldyear">
                                <input type="hidden"   value="<?php echo   $data[0]['sess'];  ?>"  name="Oldsess">
                                <input type="hidden"   value="<?php echo   $data[0]['Brd_cd'];  ?>"  name="Oldbrd">
                                <input type="hidden"   value="<?php echo   $gender;  ?>"  name="sex">
                                <input type="hidden"   value="<?php  echo  $data['0']['name']; ?>"  name="cand_name_hidden">
                                <input type="hidden"   value="<?php  echo  $data['0']['Fname']; ?>"  name="father_name_hidden">
                                <input type="hidden"   value="<?php  echo  $date->format('d-m-Y');  ?>"  name="dob_hidden">
                                <input type="hidden"   value="<?php  echo  $grp; ?>"  name="std_group_hidden">
                                <input type="hidden"   value="<?php  echo  $data[0]['sub1']; ?>"  name="sub1_hidden">
                                <input type="hidden"   value="<?php  echo  $data[0]['sub2']; ?>"  name="sub2_hidden">
                                <input type="hidden"   value="<?php  echo  $data['0']['sub3']; ?>"  name="sub3_hidden">
                                <input type="hidden"   value="<?php  echo  $data['0']['sub4']; ?>"  name="sub4_hidden">
                                <input type="hidden"   value="<?php  echo  $data['0']['sub5']; ?>"  name="sub5_hidden">
                                <input type="hidden"   value="<?php  echo  $data['0']['sub6']; ?>"  name="sub6_hidden">
                                <input type="hidden"   value="<?php  echo  $data['0']['sub7']; ?>"  name="sub7_hidden">
                                <input type="hidden"   value="<?php  echo  $data['0']['sub8']; ?>"  name="sub8_hidden">
                                <input type="submit" value="Save Form" id="btnsubmitUpdateEnrol" name="btnsubmitUpdateEnrol" class="btn btn-large btn-info offset2" onclick="return checksRegularMatric()">
                                <input type="button" class="btn btn-large btn-danger" value="Cancel" id="btnCancel" name="btnCancel" onclick="return CancelAlert();" >
                                <div class="clearfix">
                                </div>
                            </div>                                                                             
                        </form>

                        <script type="text/javascript">

                            function  check_NewEnrol_validation_regular_matric()
                            {
                                var name =  $('#cand_name').val();
                                var dist_cd= $('#pvtinfo_dist option:selected').val();
                                var teh_cd= $('#pvtinfo_teh').val();
                                var zone_cd= $('#pvtZone').val();
                                var pp_cent= $('#pp_cent').val();           
                                var sub6p1 = $('#sub6').val();
                                var sub6p2 = $('#sub6p2').val();           
                                var sub7p1 = $('#sub7').val();
                                var sub7p2 = $('#sub7p2').val();  
                                var sub8p1 = $('#sub8').val();                      
                                var sub8p2 = $('#sub8p2').val();                      
                                var ex_type = $('#exam_type').val();
                                var mobNo = $('#mob_number').val();
                                var bFormNo = $('#bay_form').val();
                                var grp_cd = $('#std_group').val();
                                var Inst_grd = $('#Inst_grd').val();
                                var brd_cd = $('#brd_cd').val();
                                var fName = $('#father_name').val();
                                var FNic = $('#father_cnic').val();
                                var dob = $('#dob').val();
                                var address = $('#address').val();
                                var image = $('#image').val();
                                var MarkOfIdent = $('#MarkOfIden').val();
                                var Inst_Rno = $('#Inst_Rno').val();
                                var status = 0;
                                var $img = $("#previewImg");
                                var src = $img.attr("src");
                                var grppre = $("#grppre").val();
                                var selected_group_conversion ;
                                var exam_type = $("#exam_type").val();

                                var empBrdCd = $('#empBrdCd').val();
                                var speciality = $('#speciality').val();

                                if(grp_cd==1 || grp_cd == 5 || grp_cd ==7 || grp_cd ==8 )
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

                                else if(bFormNo == "" || bFormNo.length != 15 )
                                {
                                    alertify.error("Please Enter your bay-Form") 
                                    $('#bay_form').focus();  
                                    return status; 
                                }
                                else if(FNic == "" || FNic.length != 15 )
                                {
                                    alertify.error("Please Enter your Father's CNIC") 
                                    $('#father_cnic').focus();  
                                    return status; 
                                }

                                else if(mobNo == "" || mobNo == 0 || mobNo == undefined || mobNo == "0000-0000000")
                                {                                                                
                                    alertify.error("Please Enter your Mobile No.") 
                                    $('#mob_number').focus();   
                                    return status;  
                                }

                                else if(Inst_Rno == "" || Inst_Rno == 0 || Inst_Rno == undefined)
                                {                                                                
                                    alertify.error("Please Enter Institute Roll No") 
                                    $('#Inst_Rno').focus();   
                                    return status;  
                                }

                                else if(Inst_grd == "" || Inst_grd == 0 || Inst_grd == undefined)
                                {                                                                
                                    alertify.error("Please Enter Institute Grade") 
                                    $('#Inst_grd').focus();   
                                    return status;  
                                }


                                else if(MarkOfIdent == "" || MarkOfIdent == 0 || MarkOfIdent == undefined)
                                {                                                                            
                                    alertify.error("Please Enter your Mark of Indentification") 
                                    $('#MarkOfIden').focus();   
                                    return status;  
                                }


                                else if(speciality == 2 && empBrdCd.trim() == "")
                                {
                                    alertify.error("Please Enter Employee Code") 
                                    $("#empBrdCd").val('');
                                    $('#empBrdCd').prop('readonly', false);
                                    $('#empBrdCd').focus();   
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

                                else if(address == "" || address == 0 || address.length ==undefined )
                                {
                                    alertify.error("Please Enter your Address")
                                    $('#address').focus(); 
                                    return status;    
                                }

                                else  if (dist_cd < 1) 
                                {
                                    alertify.error('Please select District '); 
                                    $("#pvtinfo_dist").focus();
                                    return status;  
                                }

                                else if (teh_cd < 1) {

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

                                status = 1;
                                return status;
                            }


                            function checksRegularMatric()
                            {   
                                $('#btnsubmitUpdateEnrol').attr("disabled", "disabled");
                                var status  =  check_NewEnrol_validation_regular_matric();

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
                                        url: "<?php  echo site_url('Admission_matric/frmvalidation'); ?>",
                                        data: $("#newfrom").serialize() ,
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
                                                    url: "<?php echo base_url(); ?>" + "Admission_matric/NewEnrolment_INSERT_matric/",
                                                    data: $("#newfrom").serialize() ,
                                                    datatype : 'html',
                                                    cache:false,

                                                    beforeSend: function() {  $('.mPageloader').show(); },
                                                    complete: function() { $('.mPageloader').hide();},

                                                    success: function(data){

                                                        var obj = JSON.parse(data);
                                                        if(obj.error ==  "1")
                                                        {
                                                            window.location.href ='<?php echo base_url(); ?>Admission_matric/EditForms'
                                                            alertify.success("Data Saved Successfully");
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
                                        window.location.href ='<?php echo base_url(); ?>index.php/Admission_matric/StudentsData';
                                    } else {
                                        // user clicked "cancel"

                                    }
                                });
                            }
                            function readURL(input) {
                                var res_field = input.value;   
                                var extension = res_field.substr(res_field.lastIndexOf('.') + 1).toLowerCase();
                                var allowedExtensions = ['jpg','jpeg'];
                                if (res_field.length > 0)
                                {
                                    if (allowedExtensions.indexOf(extension) === -1) 
                                    {
                                        alert('Invalid file Format. Only ' + allowedExtensions.join(', ') + ' are allowed.');
                                        return false;
                                    }
                                }

                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    var fileName = $(input).val().toLowerCase();

                                    reader.onload = function (e) {
                                        $('#previewImg').attr('src', e.target.result);
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            function hasExtension(input, exts) {
                                var fileName = document.getElementById(inputID).value;
                                return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
                            } 
                        </script>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>