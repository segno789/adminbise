  <?php 
$sess = '';
if(Session == '1')
    $sess =  'Annual';
else if(Session == '2')
    $sess = 'Supplementary';
?>
<div class="form-group">
    <div class="col-md-12">
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close"></a>
            <strong>Last Date of Online Admissions and Submission of Hard Copy for Matric <?php echo $sess; ?> Examination with <br> Single fee </strong>
            <?php  
            $SingleDateFee = date("d-m-Y", strtotime(SingleDateFee9th)); 
            $DoubleDateFee = date("d-m-Y", strtotime(DoubleDateFee9th)); 
            $TripleDateFee = date("d-m-Y", strtotime(TripleDateFee9th)); 
            ?>
            <b style="color: green;"> <?php echo $SingleDateFee ?> </b>
            <br>
            <strong>Double fee</strong>
            <b style="color: red;"> <?php echo $DoubleDateFee ?> </b>
            <br>
            <strong>Tripple fee</strong>
            <b style="color: blue;"> <?php echo $TripleDateFee ?> </b>
        </div>
    </div>
</div>
<div class="form-group">    
    <div class="row">
        <div class="col-md-12">
            <h3 align="center" class="bold">
                Online Admission for 9th <?php echo $sess.', '+(Year+1) ?>
            </h3>
        </div>
    </div>
</div>
<form enctype="multipart/form-data" id="options" name="options" method="post" action="" >
    <div class="form-group">
        <div class="row">
            <div class="col-md-offset-4 col-md-6">
                <label class="radio-inline">
                    <input type="radio" class="nationality_class"  id="candidate1" value="1" checked="checked" name="candidate">Private Candidate 
                </label>
                <label class="radio-inline" id="can3">
                    <input type="radio" class="nationality_class" id="candidate3" value="2" name="candidate">Regular Candidate
                </label>
            </div>
        </div>
    </div>
    <div class="form-group"><div class="row"></div></div>
    <div class="form-group">    
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <input type="button" value="Proceed to Next Step" id="proceed9th" name="proceed9th" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
    <div class="form-group">    
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <img src="<?php echo base_url(); ?>assets/img/inqurey.jpg" class="img-responsive btn-block" alt="inquiry.jpg">
                </div>
            </div>
        </div>
    </div>
</form>

<hr class="colorgraph">
<div class="form-group">    
    <div class="row">
        <div class="col-md-12">
            <h3 align="center" class="bold">Download Your Already Feeded Form</h3>
        </div>
    </div>
</div>
<form method="post" action="<?php base_url(); ?>Admission_9th_pvt/checkFormNo_then_download">
    <div class="form-group">    
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <input type="text" class="form-control" id="formid" name="formid" placeholder="Enter Form No" maxlength="6" required="required">  
            </div>         
        </div>
    </div>
    <div class="form-group">    
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <input type="button" value="Download" name="btndwnForm9th" id="btndwnForm9th"  class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
</form>
<hr class="colorgraph">
<label class="control-label">In case of any problem regarding Admissions, please send us email on</label>
<a href="mailto:complaint4bisegrw@gmail.com" class="control-label">complaint4bisegrw@gmail.com</a>









