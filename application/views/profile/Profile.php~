<div class="dashboard-wrapper class wysihtml5-supported" style="background: white;">
    <div class="left-sidebar">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Institute Profile Form<a id="redgForm" data-original-title=""></a>
                        </div>
                    </div>
                    <div class="widget-body">
                     <form class="form-horizontal no-margin" action="<?php echo base_url(); ?>/index.php/Dashboard/Profile_Update" method="post" enctype="multipart/form-data">
                    <input type="hidden"   name="isGovt" value='<?php echo $isgovt; ?>'>
                    <input type="hidden"  name="isInserted" value='<?php echo $isInserted; ?>' >
                    
                      <div class='control-group stylish-lists'>
                        <div class='controls controls-row'>
                        <span class="span1"></span>
                        <ul class="span3 ">
                    <li>
                    <a style="cursor: pointer;" onclick="return ChangePwd()" ><u>Change Password</u></a>
                    </li>
                    </ul>
               </div>
            </div>
                    
                    <?php
                        if($isgovt == 1)
                        {
                            echo "  <div class='control-group'>
                        <div class='controls controls-row'>
                          <label class='control-label span1' >
                            EMIS CODE:
                             </label>
           <input class='span3' type='text' id='Profile_emis' style='text-transform: uppercase;' name='Profile_emis' placeholder='EMIS CODE' value = '$emis' required='required'>
            </div>
            </div>";
                        }
                    ?>
          
             <div class='control-group'>
                        <div class='controls controls-row'>
                          <label class='control-label span1' >
                            EMAIL:
                             </label>
           <input class='span3' type='text' id='Profile_email' style='text-transform: uppercase;' name='Profile_email' placeholder='EMAIL.' maxlength="100" value = '<?php echo $email; ?>' required='required'>
            </div>
            </div>
            <div class='control-group'>
                        <div class='controls controls-row'>
                          <label class='control-label span1' >
                            PHONE NO:
                             </label>
           <input class='span3' type='text' id='Profile_phone' style='text-transform: uppercase;' name='Profile_phone' placeholder='PHONE NO.' value = '<?php echo $phone; ?>' required='required'>
            </div>
            </div>
            <div class='control-group'>
                        <div class='controls controls-row'>
                          <label class='control-label span1' >
                            CELL NO:
                             </label>
           <input class='span3' type='text' id='Profile_cell' style='text-transform: uppercase;' name='Profile_cell' placeholder='MOBILE NO.' value = '<?php echo $cell; ?>' required='required'>
            </div>
            </div>
                    </div>
                </div>
                <div class="form-actions no-margin">
                    <button type="submit" onclick="return valid_profile()" name="btnsubmitNewEnrol" class="btn btn-large btn-info offset2">
                        Update Profile
                    </button>
                    <input type="button" class="btn btn-large btn-danger" value="Cancel" onclick="return CancelAlert()" >
                   
                    <div class="clearfix">
                    </div>
                    
                     </form>
                </div>
            </div>  
            
        </div>
    </div>
</div>
  
<script type="text/javascript">

   


  function CancelAlert()
    {
        var msg = "Are You Sure You want to Cancel this Form ?"
        alertify.confirm(msg, function (e) {
            if (e) {
                // user clicked "ok"
                window.location.href ="<?php echo base_url(); ?>index.php/Registration/index/7";
            } else {
                // user clicked "cancel"

            }
        });
    }
    function ChangePwd()
    {
        window.location.href ="<?php echo base_url(); ?>index.php/dashboard/change_pwdView";
    }
</script>