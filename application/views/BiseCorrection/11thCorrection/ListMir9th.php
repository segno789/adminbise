<div class="dashboard-wrapper class wysihtml5-supported" style="background: white;">
<div class="left-sidebar">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <div class="title">
                        List of 9th Migration <a id="redgForm" data-original-title=""></a>
                    </div>
                </div>
           
                  <div class="widget-body">
                        <h4>
                            All 9th Migration Forms:
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
                                        <th style="width:10%">
                                            Name
                                        </th>
                                        <th style="width:10%">
                                            Father's Name
                                        </th>
                                        <th style="width:6%">
                                            New Inst.code
                                        </th>
                                        <th style="width:6%">
                                            Old Inst.code
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
                                        <td>'.$vals["name"].'</td>
                                        <td>'.$vals["fname"].'</td>
                                        <td>'.$vals["sch_cd"].'</td>
                                        <td>'.$vals["oldinst_cd"].'</td>
                                        <td>'.date("d-m-Y", strtotime($vals["Dob"])).'</td>
                                        <td>'.$grp_name.'</td>

                                        <td><img id="previewImg" style="width:40px; height: 40px;" src="'.base_url().IMAGE_PATH.$vals['sch_cd'].'/'.$vals['PicPath'].'" alt="Candidate Image"></td>';

                                        echo'<td>
                                        <button type="button" class="btn btn-info" value="'.$formno.'" onclick="migrateto('.$formno.','.$vals['oldinst_cd'].','.$vals['oldinst_cd'].')">Restore</button>
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
    function migrateto(formno,inst_cd,oldinst)
    {
        window.location.href ="<?php echo base_url(); ?>bisecorrection/restoreMigration/9/"+formno+"/"+inst_cd; 
    }
</script>