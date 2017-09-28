<div class="dashboard-wrapper class wysihtml5-supported" style="background: white;">
<div class="left-sidebar">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <div class="title">
                        9th Migration by Form No.<a id="redgForm" data-original-title=""></a>
                    </div>
                </div>
                <div class="widget-body">
                    <form class="form-horizontal no-margin" action="<?php echo base_url(); ?>BiseCorrection/migrate/9" method="post" enctype="multipart/form-data">



                        <div class='control-group'>
                            <div class='controls controls-row'>
                                <label class='control-label span2' >
                                    FORM NO:
                                </label>
                                <input class='span3' type='number' id='txtformNo_search' style='text-transform: uppercase;' name='txtformNo_search' placeholder='FORM NO.' maxlength="10"  required='required' oninput="maxLengthCheck(this)">
                                  <label class='control-label span2' >
                                   Inst. Code:
                                </label>
                                <input class='span3' type='number' id='txtinst_search' style='text-transform: uppercase;' name='txtinst_search' placeholder='Inst. Code.' maxlength="6" required='required' oninput="maxLengthCheck(this)">
                            </div>
                        </div>


                        <div class="form-actions no-margin">
                        <button type="submit" onclick="return valid_migration_form()" name="btnsubmitNewEnrol" class="btn btn-large btn-info offset2">
                            Update Form
                        </button>


                        <div class="clearfix">
                        </div>

                    </form>
                </div>
                
                  <div class="widget-body">
                        <h4>
                            All OneWindow 9th Migration Forms:
                        </h4>
                        <hr>
                        <div id="dt_example" class="example_alt_pagination">
                            <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">
                                            Sr.No.
                                        </th>
                                        <th style="width:5%">
                                            Form No.
                                        </th>
                                        <th style="width:5%">
                                            Application No.
                                        </th>
                                        <th style="width:10%">
                                            Name
                                        </th>
                                        <th style="width:10%">
                                            Father's Name
                                        </th>
                                        <th style="width:6%" class="hidden-phone">
                                            DOB
                                        </th>
                                        <th style="width:10%" class="hidden-phone">
                                            Subject Group
                                        </th>
                                         <th style="width:5%" class="hidden-phone">
                                            Picture
                                        </th>
                                        <th style="width:8%" class="hidden-phone" >
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    if($migration != false)
                                    {
                                        $n=0;  
                                        $grp_name='';                             
                                        foreach($migration as $key=>$vals):
                                        $n++;
                                        $formno = !empty($vals["formno"])?$vals["formno"]:"N/A";
                                         $app_no = !empty($vals["app_no"])?$vals["app_no"]:"N/A";
                                         $app_txt = $app_no;
                                         if($app_no == 'N/A')
                                         {
                                           $app_txt =  -1;  
                                         }
                                        $grp_name = $vals["RegGrp"];
                                        switch ($grp_name) {
                                            case '1':
                                                $grp_name = 'SCIENCE WITH BIOLOGY';
                                                break;
                                            case '7':
                                                $grp_name = 'SCIENCE  WITH COMPUTER SCIENCE';
                                                break;
                                            case '8':
                                                $grp_name = 'SCIENCE  WITH ELECTRICAL WIRING';
                                                break;
                                            case '2':
                                                $grp_name = 'General';
                                                break;
                                            case '5':
                                                $grp_name = 'Deaf and Dumb';
                                                break;
                                            default:
                                                $grp_name = "No Group Selected.";
                                        }

                                        echo '<tr  >
                                        <td>'.$n.'</td>
                                        <td>'.$formno.'</td>
                                        <td>'.$app_no.'</td>
                                        <td>'.$vals["name"].'</td>
                                        <td>'.$vals["fname"].'</td>
                                        <td>'.date("d-m-Y", strtotime($vals["Dob"])).'</td>
                                        <td>'.$grp_name.'</td>

                                        <td><img id="previewImg" style="width:40px; height: 40px;" src="'.base_url().IMAGE_PATH.$vals['Migrated_From'].'/'.$vals['PicPath'].'" alt="Candidate Image"></td>';

                                        echo'<td>
                                        <button type="button" class="btn btn-info" value="'.$formno.'" onclick="migrateto('.$formno.','.$vals['Migrated_to'].','.$app_txt.')">Update Migrate</button>
                                        </td>
                                        </tr>';
                                        endforeach;
                                    }
                                    ?>
 </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                     
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
      function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
    function migrateto(formno,inst_cd,app_no)
    {
        if(app_no == '-1')
        window.location.href ="<?php echo base_url(); ?>bisecorrection/migrate/9/"+formno+"/"+inst_cd; 
        else
        {
              window.location.href ="<?php echo base_url(); ?>bisecorrection/migrateonline/9/"+formno+"/"+inst_cd+'/'+app_no; 
        }
    }
</script>