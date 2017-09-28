<div class="widget">
    <div class="widget-header">
        <div class="title">
           
        </div>

    </div>
    <div class="widget-body">

        <form class="form-horizontal no-margin" action="<?php echo base_url(); ?>/index.php/BiseCorrection/SpecPermison_9th_INSERT" method="post" >

            <div class="control-group">
                <h4 class="span4">INSTITUTE INFORMATION :</h4>
                <div class="controls controls-row">
                    <input type="hidden" class="span2 hidden" id="isReAdm" name="isReAdm" value="0">

                    <label class="control-label span2" >

                    </label> 

                </div>
            </div>
            <div class="control-group">

                <label id="ErrMsg" class="control-label span2" style=" text-align: left;"></label>
                <div class="controls controls-row">
                    <input class="span3 hidden"  type="text" placeholder="" >  
                    <label class="control-label span2">

                    </label> 
                    <input type="file" class="span4" id="image" style="display:none;" name="image" onchange="Checkfiles()">
                </div>
            </div>
            
                <div class='control-group'>
                    <div class='controls controls-row'>
                        <label class='control-label span1' >
                            INSTITUTE CODE:
                        </label>
                        <select class="span3" id="inst_cd" name="inst_cd" style="width: 509px;    font-size: 20px;    background-color: cornsilk;">
                        <option value="0" selected="selected"> PLEASE SELECT INSTITUTE </option>
                        <?php 
                        //DebugBreak();
                        
                        foreach($Inst_data as $inst)
                        {
                            if( ($inst->Inst_cd != 399901) && ($inst->Inst_cd != 399902) && ($inst->Inst_cd != 399903) && ($inst->Inst_cd != 999999))
                            {?>
                            <option value="<?php echo $inst->Inst_cd ; ?>"> <?php echo $inst->Inst_cd.'-'.$inst->Name; ?> </option>
                        <?php } }
                        ?>
                        </select>
                        

                      
                    </div>
                </div>
               
          
                <div class='control-group'>

                    <div class='controls controls-row'>  <label class='control-label span1' style='text-transform: uppercase;' > FEEDING DATE:  </label> <input class='span3' type='text' id='txt_FeedingDate' style='text-transform: uppercase;' name='txt_FeedingDate' placeholder='FEEDING DATE' value="" required='required' readonly="readonly">
                    </div>
                </div>


               


          
                <div class='control-group'>

                    <div class='controls controls-row'>
                        <label class='control-label span1' for='lblfather_name'> REGISTRATION FEE :  </label>  
                        <input class='span3' id='Reg_fee' name='Reg_fee' style='text-transform: uppercase;' type='number' placeholder="REGISTRATION FEE"  required='required'  value="1000" readonly="readonly" >
                    </div>
                </div>
               
                <div class='control-group'>

                    <div class='controls controls-row'>  <label class='control-label span1' >  PROCESSING FEE: </label>  <input class='span3'  type='number' id='Proc_Fee' name='Proc_Fee' placeholder='PROCESSING FEE'  required='required' value="100" readonly="readonly" >
                    </div>
                </div>         
  <div class='control-group'>

                    <div class='controls controls-row'>  <label class='control-label span1' >  SPECIAL FEE: </label>  <input class='span3'  type='number' id='Spec_Fee' name='Spec_Fee' placeholder='SPECIAL FEE'  required='required' value="" >
                    </div>
                </div>    
                <input type="hidden" value="1" name="IsActivated" id="IsActivated">
                 <!-- <div class='control-group'>

                    <div class='controls controls-row'>  <label class='control-label span1' >  ACTIVATED : </label>   
                    <div class="span3"><label class="span1"><input type="radio" value="1"  checked="checked" name="IsActivated" id="IsActivated" style="    width: 24px;    height: 24px;" > YES </label> <label class="span1"> <input type="radio" value="0" style="    width: 24px;    height: 24px;" name="IsActivated" id="IsActivated" >      NO</label></div>
                    
                    </div>
                </div>    -->
              
            <?php
            // DebugBreak();
           // if($field_status['zone'] == 0)
            //{ ?>
               

            <div class="form-actions no-margin">
                <button type="submit"  name="btnsubmitNewEnrol" onclick="return SpecPermission_INSERT()" class="btn btn-large btn-info offset2">
                    Save Information
                </button>

                <?php
                //onclick="return Incomplete_inst_info_INSERT()"
              // if(($field_status['cell'] != 0) && ($field_status['dist'] != 0) && ($field_status['teh'] != 0) && ($field_status['zone'] != 0) &&  ($field_status['emis'] != 0)  )
              //  {
               //     echo " <input type='button' class='btn btn-large btn-danger' value='SKIP' onclick='return CancelAlert()' >";

             //   }

                ?>

                <div class="clearfix">
                </div>
            </div>
        </form>
    </div>  

</div>

<script type="text/javascript">
    function CancelAlert()
    {
        var msg = "Are You Sure You want to SKIP this Form ?"
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
