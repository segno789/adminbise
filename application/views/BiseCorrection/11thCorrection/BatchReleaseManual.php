<div class="dashboard-wrapper">
    <div class="left-sidebar">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Batch Release:
                        </div>

                    </div>
                    <div class="widget-body">
                        <div id="dt_example" class="example_alt_pagination">




                        <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">
                                            Sr.No.
                                        </th>
                                        <th style="width:5%">
                                            Batch Id.
                                        </th>
                                         <th style="width:10%">
                                            inst.CD
                                        </th>
                                         <th style="width:10%">
                                            Form No
                                        </th>
                                        <th style="width:10%">
                                            Total Forms
                                        </th>
                                        
                                        <th style="width:10%">
                                        Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   // DebugBreak();
                                  //  $errors;
                                    if($info!= false)
                                    {
                                    $n=0;  
                                    $grp_name='';                             
                                    foreach($Inst_Cd = $info as $key=>$vals):
                                    $n++;
                                    //$formno = !empty($vals["formNo"])?$vals["formNo"]:"N/A";
                                    echo '<tr  >
                                    <td>'.$n.'</td>
                                    <td>'.$vals['Batch_ID'].'</td>
                                    <td>'.$vals['Inst_Cd'].'</td>
                                    <td>'.substr($vals['form_ids'], 0, 153).'</td>
                                    <td>'.$vals["COUNT"].'</td>
                                   
                                   
                                    <td>';
                                  //  if($vals['flag'] == 'NULL'){
                                     echo '<button type="button" class="btn btn-danger" value="'.$vals['Batch_ID'].'" onclick="ReleaseForm_UPDATE('.$vals['Batch_ID'].','.$vals['Inst_Cd'].')">Release Batch</button>';   
                                  //  }
                                     echo '
                                    </td>';
                                    endforeach;
                                    
                                    //DebugBreak();
                                 
                                    }
                                    ?>



                                </tbody>
                            </table>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>


