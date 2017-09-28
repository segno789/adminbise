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
                                            Date Applied
                                        </th>
                                        <th style="width:10%" class="hidden-phone">
                                           Total Fee
                                        </th>
                                        <th style="width:10%" class="hidden-phone">
                                            Paid Date 
                                        </th>
                                         <th style="width:20%" class="hidden-phone">
                                            Reason
                                        </th>
                                        <th style="width:10%" class="hidden-phone">
                                            Bank Challan No.
                                        </th>
                                          <th style="width:14%" class="hidden-phone">
                                            Bank Branch
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
                                    <td>'.substr($vals['form_ids'], 0, 98).'</td>
                                    <td>'.$vals["COUNT"].'</td>
                                    <td>'.$vals["AppliedBatchReleasedate"].'</td>
                                    <td>'.$vals["ReleaseBatchFee"].'</td> 
                                    <td>'.$vals["ReleaseBatchFee_PaidDate"].'</td> 
                                    <td>'.$vals["ReleaseReason"].'</td> 
                                    <td>'.$vals["ReleaseBatchBankChallanNo"].'</td> 
                                    <td>'.$vals["ReleaseBatchBankBranch"].'</td> 
                                   
                                    <td>';
                                    if($vals['flag']==1){
                                     echo '<button type="button" class="btn btn-danger" value="'.$vals['Batch_ID'].'" onclick="ReleaseForm_UPDATE('.$vals['Batch_ID'].','.$vals['Inst_Cd'].')">Release Batch</button>';   
                                    }
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


