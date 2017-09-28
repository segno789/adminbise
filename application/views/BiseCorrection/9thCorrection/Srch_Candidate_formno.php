<div class="dashboard-wrapper class wysihtml5-supported" style="background: white;">
    <div class="left-sidebar">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Search Candidates through Form No.<a id="redgForm" data-original-title=""></a>
                        </div>
                    </div>
                    <div class="widget-body">
                     <form class="form-horizontal no-margin" action="<?php echo base_url(); ?>/index.php/BiseCorrection/NewEnrolment_EditForm" method="post" enctype="multipart/form-data">
                  
                   
          
             <div class='control-group'>
                        <div class='controls controls-row'>
                          <label class='control-label span1' >
                            FORM NO:
                             </label>
           <input class='span3' type='number' id='txtformNo_search' style='text-transform: uppercase;' name='txtformNo_search' placeholder='FORM NO.' maxlength="10" value = '' required='required'>
            </div>
            </div>
         
                
                <div class="form-actions no-margin">
                    <button type="submit" onclick="return valid_delete_form()" name="btnsubmitNewEnrol" class="btn btn-large btn-info offset2">
                    Show Record
                    </button>
                 
                   
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
</script>