<div class="dashboard-wrapper class wysihtml5-supported" style="background: white;">
<div class="left-sidebar">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <div class="title">
                        Search By Inst Code.<a id="redgForm" data-original-title=""></a>
                    </div>
                </div>
                <div class="widget-body">
                    <form class="form-horizontal no-margin" action="<?php echo base_url(); ?>/index.php/BiseCorrection/searchbyinst11th" method="post" enctype="multipart/form-data">



                        <div class='control-group'>
                            <div class='controls controls-row'>
                                <label class='control-label span1' >
                                    Inst Code:
                                </label>
                                <input class='span3' type='number' id='txtformNo_search' style='text-transform: uppercase;' name='txtformNo_search' value="<?= @$_POST['txtformNo_search']?>" placeholder='Inst Code.' maxlength="6"  required='required'>
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
                                        <th style="width:20%">
                                            Name
                                        </th>
                                        <th style="width:20%">
                                            Father's Name
                                        </th>
                                        <!--<th style="width:5%" class="hidden-phone">
                                            DOB
                                        </th>  -->
                                       
                                         <th style="width:4%" class="hidden-phone">
                                            Picture
                                        </th>
                                        <th style="width:18%" class="hidden-phone" >
                                            Download
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   // DebugBreak();
                                    if($data != false)
                                    {
                                    $n=0;  
                                    $grp_name='';                             
                                    foreach($data as $key=>$vals):
                                    $n++;
                                    $formno = !empty($vals["FormNo"])?$vals["FormNo"]:"N/A";
                                    $grp_name = $vals["RegGrp"];
                                                 switch ($grp_name) {
                                                            case '1':
                                                                $grp_name = 'Pre-Medical';
                                                                break;
                                                            case '2':
                                                                $grp_name = 'Pre-Engineering';
                                                                break;
                                                            case '3':
                                                                $grp_name = 'Humanities';
                                                                break;
                                                            case '4':
                                                                $grp_name = 'General Science';
                                                                break;
                                                            case '5':
                                                                $grp_name = 'Commerce';
                                                                break;
                                                            case '6':
                                                                $grp_name = 'Home Economics';
                                                                break;
                                                            default:
                                                                $grp_name = "No Group Selected.";
                                                        }

                                    echo '<tr  >
                                    <td>'.$n.'</td>
                                    <td>'.$formno.'</td>
                                    <td>'.$vals["name"].'</td>
                                    <td>'.$vals["Fname"].'</td>
                                    <td><img id="previewImg" style="width:40px; height: 40px;" src="../../'.IMAGE_PATH.'colleges/'.$vals["coll_cd"].'/'.$vals['PicPath'].'?'.rand(10000,1000000).'" alt="Candidate Image"></td>';
                                    echo'<td>
                                    <button type="button" class="btn btn-info" value="'.$formno.'" onclick="EditForm11('.$formno.')">Edit Form</button>
                                    </td>
                                    </tr>';
                                    endforeach;
                                    
                                    //<td>'.date("d-m-Y", strtotime($vals["Dob"])).'</td>
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

    function EditForm11(fromno)
    {
        
        var win = window.open('<?php echo base_url(); ?>BiseCorrection/NewEnrolment_EditForm11th_manual_corr/'+fromno, '_blank');
  win.focus();
    //     window.location.href =";
    }

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