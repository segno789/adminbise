<div class="dashboard-wrapper">
    <div class="left-sidebar">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            11th Corrections Application:
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
                                            Application Id.
                                        </th>
                                         <th style="width:5%">
                                            Challan No.
                                        </th>
                                         <th style="width:5%">
                                            Form No
                                        </th>
                                           <th style="width:10%">
                                            Total Fee
                                        </th>
                                        <th style="width:10%">
                                            Date Applied
                                        </th>
                                       
                                        <th style="width:10%">
                                        Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                  //  DebugBreak();
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
                                    <td>'.$vals['AppNo'].'</td>
                                    <td>'.$vals['challanNo'].'</td>
                                    <td>'.$vals['formNo'].'</td>
                                    <td>'.$vals['TotalFee'].'</td>
                                    <td>'.$vals["edate"].'</td>
                                   
                                    <td>';
                                    if($vals['IsCorr']==1){
                                     echo '<button type="button" class="btn btn-danger" value="'.$vals['AppNo'].'" onclick="Verified_Update('.$vals['AppNo'].')">Verified Correction</button>';   
                                    }
                                     echo ' <label style="color: green;    font-weight: bold;">CORRECTION UPDATED SUCCESSFULLY</label>
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


