<div class="dashboard-wrapper class wysihtml5-supported">
    <div class="left-sidebar">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            DELETING Form No. <a id="redgForm" data-original-title="" style="cursor: default;"><?php
                                echo $data[0]['formNo'];
                            ?></a>
                        </div>

                    </div>
                    <div class="widget-body">

                        <form class="form-horizontal no-margin" name="deleteForm" id="deleteForm" action="<?php  echo base_url(); ?>/index.php/BiseCorrection/Delete_candidate_UPDATE11" method="post" enctype="multipart/form-data">

                            <div class="control-group">
                                <h4 class="span4">Candidate Information :</h4>
                                <div class="controls controls-row">
                                    <input type="hidden" class="span2 hidden" id="isReAdm" name="isReAdm" value="0">
                                    <label class="control-label span2" style="width: 411px;margin-left: -199px;" >

                                    </label> 
                                    <img id="previewImg" style="width:80px; height: 80px;" class="span2" src="<?php  echo '/'.IMAGE_PATH11.$data[0]['coll_cd'].'/'.$data[0]['PicPath'];  ?>" alt="Candidate Image">
                                </div>
                            </div>
                            <div class="control-group" style="font-size: 15px;font-weight: bold;">
                                <?php echo $inst_cd.'-'.$inst_name?>
                                <div class="controls controls-row">
                                    <input class="span3 hidden"  type="text" placeholder="" >  

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Candidate Name :
                                </label>
                                <div class="controls controls-row">
                                    <input class="span3"  type="text" id="cand_name" style="text-transform: uppercase;" name="cand_name" placeholder="Candidate Name" maxlength="60"  value="<?php  echo  $data['0']['name']; ?>" <?php if($isReAdm==1) echo "readonly='readonly'";  ?>  >
                                    <label class="control-label span2" for="lblfather_name">
                                        Father's Name :
                                    </label> 
                                    <input class="span3" id="father_name" name="father_name" style="text-transform: uppercase;" type="text" placeholder="Father's Name" maxlength="60" value="<?php echo  $data['0']['Fname']; ?>" <?php if($isReAdm==1) echo "readonly='readonly'";  ?> required="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label span1" >
                                    Bay Form No :
                                </label>
                                <div class="controls controls-row">
                                    <input type="hidden" name="oldbform" value="<?php echo   $data['0']['BForm']; ?>">
                                    <input type="hidden" name="oldfform" value="<?php echo  $data['0']['FNIC']; ?>">
                                    <input class="span3" type="text" id="bay_form" name="bay_form" placeholder="Bay Form No." value="<?php echo  $data['0']['BForm']; ?>" required="required" <?php if($isReAdm==1) echo "readonly='readonly'";  ?>>
                                    <label class="control-label span2" for="father_cnic">
                                        Father's CNIC :
                                    </label> 
                                    <input class="span3" id="father_cnic" name="father_cnic" type="text" placeholder="34101-1111111-1" value="<?php echo  $data['0']['FNIC']; ?>" <?php if($isReAdm==1) echo "readonly='readonly'";  ?> required="required">
                                </div>
                            </div>

                          

                            <div class="form-actions no-margin">
                                <input type="hidden"   value="<?php  echo $data[0]['FormNo']; ?>"  name="formNo">
                                <button type="submit"  name="btnUpdateDeleteStatus" class="btn btn-large btn-info offset2">
                                    Delete Form
                                </button>
                                <input type="button" class="btn btn-large btn-danger" value="Cancel" id="btnCancel" name="btnCancel" onclick="return CancelAlert();" >
                                <div class="clearfix">
                                </div>
                            </div>


                        </form>
                        <script type="text/javascript">




                            function CancelAlert()
                            {
                                var msg = "Are You Sure You want to Cancel this Form ?"
                                alertify.confirm(msg, function (e) {
                                    if (e) {
                                        // user clicked "ok"
                                        window.location.href ='<?php echo base_url(); ?>index.php/BiseCorrection/Delete_Form11';
                                    } else {
                                        // user clicked "cancel"

                                    }
                                });
                            }
                        </script>

                    </div>  

                </div>
            </div>
        </div>
    </div>
</div>
