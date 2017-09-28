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
                    <form class="form-horizontal no-margin" action="<?php echo base_url(); ?>/index.php/Dashboard/chang_PwdUpdate" method="post" enctype="multipart/form-data">
                    <input type="hidden"   name="isGovt" value='<?php echo $isgovt; ?>'>
                    <input type="hidden"  name="isInserted" value='<?php echo $isInserted; ?>' >

                    <div class='control-group'>
                        <div class='controls controls-row'>
                            <label class='control-label span2' >
                                OLD PASSWORD:
                            </label>
                            <input class='span3' type='password' data-indicator="pwindicator" id='oldPwd' style='text-transform: uppercase;' name='oldPwd' placeholder='PASSWORD' value = '' required='required'>
                        </div>
                    </div>
                    <div class='control-group'>
                        <div class='controls controls-row'>
                            <label class='control-label span2' >
                                NEW PASSWORD:
                            </label>
                            <input class='span3' type='password' data-indicator="pwindicator" id='Pwd' style='text-transform: uppercase;' name='Pwd' placeholder='NEW PASSWORD' value = '' required='required'>

                        </div>
                        <div class="row-fluid">
                            <span class="span3 offset3" style="color: #0000ff;">Valid Password: Min. 8 and Max. 13 characters, starts with an
                                alphabet.</span>
                        </div>
                        <div class='control-group'>
                            <div class='controls controls-row'>
                                <label class='control-label span2' >
                                    CONFIRM PASSWORD:
                                </label>
                                <input class='span3' type='password' id='Pwd1' style='text-transform: uppercase;' name='Pwd1' placeholder='CONFIRM PASSWORD' value = '' required='required'>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="form-actions no-margin">
                    <button type="submit" onclick="return validpwd()" name="btnsubmitNewEnrol" class="btn btn-large btn-info offset3">
                        Change Password
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
                window.location.href ="<?php echo base_url(); ?>index.php/Dashboard";
            } else {
                // user clicked "cancel"

            }
        });
    }
    
    
</script>