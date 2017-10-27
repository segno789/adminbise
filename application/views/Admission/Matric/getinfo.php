
<form enctype="multipart/form-data" id="ReturnStatus" name="ReturnStatus" method="post" action="<?php echo base_url() ?>Admission/Pre_Matric_data" >

    <div class="form-group">    
        <div class="row">
            <div class="col-md-12">
                <h3 align="center" class="bold">1- Please Provide Your Previous Exam Information</h3>
            </div>
        </div>
    </div>
    <?php   

    //DebugBreak();

    @$error = '';

    if(@$_GET['nrno'] >0)
    {
        if(@$_GET['nsession'] == 1)
        {
            $sname = "Annual";
        }
        else if(@$_GET['nsession'] == 2)
        {
            $sname = "Supplementary";
        }
        $error = "You are appeared in  <b>$sname, ".$_GET['nyear']."</b> with Roll Number: <b>".$_GET['nrno']."</b>";    
    }
    if(@$_GET['nsplc'] != '')
    {
        $error = "You are <b>".$_GET['nsplc']."</b></br> Please clear your objection from Matric Branch B.I.S.E Gujranwala";   
    }

    if(@$exam_type == 17){
        $error = 'You have Already Appeared in Marks Improve and Additional Subjects'; 
    }

    else if(@$exam_type == 18){
        $error = 'Your Result is not Clear';  
    }

    if(@$spl_cd['error_msg'] != '') 
    {
        $error = $spl_cd['error_msg'];
    }
    else if(@$grp_cd == 4 && @$status ==1 ) 
    {
        $error = 'You can not improve marks';
    }
    else if(@$NextRno_Sess_Year != '' || @$NextRno_Sess_Year != null ) {

        @$parts = explode(",", @$NextRno_Sess_Year);
        @$nxtrno = @$parts[0];
        @$nxtsess = @$parts[1];
        @$nxtyear = @$parts[2];
        if(@$nxtsess == '1'){ @$nxtsess = 'Matric Annual'; } else{@$nxtsess = 'Matric Supplementary'; }
        $error = 'You have already appeared in '.' '. $nxtsess.' '.$nxtyear.' Against Roll No  =  '.$nxtrno;
    }
    if($error != ''){
        //DebugBreak();
        ?>
        <div class="form-group">
            <div class="col-md-12">
                <div class="alert alert-danger" align="center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">x</a>
                    <strong><?php echo $error; ?></strong>
                </div>
            </div>
        </div>
        <?php
    }

    else if(@$data['error'] != ''){
        ?>
        <div class="form-group">
            <div class="col-md-12">
                <div class="alert alert-danger" align="center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">x</a>
                    <strong><?php echo @$spl_cd['error_msg']; ?></strong>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="form-group">    
        <div class="row">
            <div class="col-md-offset-3 col-md-3">
                <label class="control-label" for="dob" >Date of Birth</label>
                <input type="text" class="form-control"  id="dob" name="dob"  value="<?= @$dob?>">
            </div>
            <div class="col-md-3">
                <label class="control-label" for="oldRno" >Old Roll No</label>
                <input class="form-control" required="required" type="text" id="oldRno" name="oldRno" value="<?= @$oldRno ?>" maxlength="6" />
            </div>
        </div>
    </div>
    <div class="form-group">    
        <div class="row">
            <div class="col-md-offset-3 col-md-3">
                <label class="control-label" for="oldClass" >Last Appearing Class</label>
                <select id="oldClass" class="form-control" name="oldClass">
                    <?php if(Session == 1) {?>
                        <option value="9" <?php if(@$oldClass == 9) echo 'selected'?> >9th</option>
                        <?php }?>
                    <option value="10" <?php if(@$oldClass == 10) echo 'selected'?>>10th</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="control-label" for="oldYear" >Last Appearing Year</label>
                <select id="oldYear" class="form-control" name="oldYear">
                    <option value="2017" <?php if(@$oldYear == 2017) echo 'selected' ?>>2017</option>
                    <option value="2016" <?php if(@$oldYear == 2016) echo 'selected' ?>>2016</option>
                    <?php if(Session == 1) {?>
                        <option value="2015" <?php if(@$oldYear == 2015) echo 'selected' ?> >2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <?php }?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">    
        <div class="row">
            <div class="col-md-offset-3 col-md-3">
                <label class="control-label" for="oldSess" >Last Appearing Session</label>
                <select id="oldSess" class="form-control" name="oldSess">
                    <option value="1"  <?php if(@$oldSess == 1) echo 'selected' ?> >Annual</option>
                    <option value="2"  <?php if(@$oldSess == 2) echo 'selected' ?>>Supplementary</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="control-label" for="oldBrd_cd" >Last Appearing Board</label>
                <select id="sec_board" class="form-control" name="oldBrd_cd">
                    <option value="1" <?php if(@$oldBrd_cd == 1) echo 'selected' ?>>BISE, GUJRANWALA</option>
                    <?php if(Session == 1) {?>
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
                        <?php }?>
                </select>
            </div>
        </div>
    </div>
    <?php
    if(@$exam_type == 16){
        ?>
        <div class="form-group" id="option">
            <div class="row">
                <div class="col-md-offset-5 col-md-5">
                    <label class="radio-inline" for="CatType1">
                        <input type="radio" class="nationality_class" id="CatType1" value="1" checked="checked" name="CatType">Marks Improvement
                    </label>
                    <label class="radio-inline" for="CatType2">
                        <input type="radio" class="nationality_class" id="CatType2" value="2" name="CatType">Additional
                    </label>
                </div>
            </div>
        </div>
        <?php } ?>
    <div class="form-group">    
        <div class="row">
            <div class="col-md-offset-3 col-md-3">
                <input type="submit" value="Proceed" id="getinfoproceed"  name="getinfoproceed" onclick="return checkrno()" class="btn btn-primary btn-block">
            </div>
            <div class="col-md-3">
                <input type="button" value="Cancel" onclick="return CancelAlert();"  class="btn btn-danger btn-block">
            </div>
        </div>
    </div>
</form>
<?php
if(Session == '1'){
    echo "
    <hr class = 'colorgraph'>
    <div class='form-group'>    
    <div class='row'>
    <div class='col-md-12'>
    <h3 align='center' class='bold'>2- Click Below Button for Other Application </h3>
    </div>
    </div>
    </div>
    <div class='form-group'>    
    <div class='row'>
    <div class='col-md-offset-3 col-md-6'>
    <div class='alert alert-info'>
    <ul>
    <li>For Fresh Composite(9th & 10th)</li>
    <li>Candidates Migrated From Other Boards</li>
    <li>Aama Passed Candidates</li>
    <li>Deaf And Dumb Candidates</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class='form-group'>    
    <div class='row'>
    <div class='col-md-offset-3 col-md-3'>
    <input type='button' class='btn btn-primary btn-block' id='btnother' value='Other Board Click Here'>
    </div>
    <div class='col-md-3'>
    <input type='button' class='btn btn-primary btn-block' id='btnfresh' value='Fresh Candidate Click Here'>
    </div>
    </div>
    <hr class = 'colorgraph'>
    ";
}
else{
    echo "<hr class = 'colorgraph'>";
}
?>
<div class="form-group">    
    <div class="row">
        <div class="col-md-12">
            <h3 align="center" class="bold">3- Please follow this fee structure</h3>
        </div>
    </div>
</div>
<div class="row">
    <img style="margin: 0 auto;" src="<?php echo base_url(); ?>assets/css_matric/images/matric_fee.png" class="img-responsive"   alt="matric_fee.png" />
</div>
<br class="break">
<div class='form-group'>    
    <div class='row'>
        <div class='col-md-offset-3 col-md-6'>
            <div class='alert alert-info'>
                <ul>
                    <li>Submit above fee + form fee+ processing fee+ Certificate Fee=100+195+550</li>
                    <li>Result will be RL-FEE if any student submit less fee than above criteria</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr class = 'colorgraph'>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/alertify.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/source/jquery.fancybox.pack.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/source/jquery.fancybox.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    //$("#oldRno").mask("999999",{placeholder:"_"});
    function CancelAlert()
    {
        var msg = "Are You Sure You want to Cancel this Form ?"
        alertify.confirm(msg, function (e) {
            if (e) {
                window.location.href ='<?php echo base_url(); ?>Admission/index';
            } else {
            }
        });
    }

    $("#btnother").click(function(){
        window.location.href ='<?php echo base_url(); ?>Admission/matric_otherboard' ;
    });
    $("#btnfresh").click(function(){
        window.location.href ='<?php echo base_url(); ?>Admission/matric_fresh' ;
    });

    function checkrno()
    {
        var rno = document.getElementById("oldRno").value;
        var dob = document.getElementById("dob").value;
        if(dob == "")
        {
            alertify.error("Please write your Date of birth.");
            document.getElementById("dob").focus();
            return false;
        }
        else if(rno == "0" || rno == '')
        {
            alertify.error("Please provide a valid Roll Number.");
            document.getElementById("oldRno").focus();
            return false;  
        }
    }
</script>