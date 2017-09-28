<div class="dashboard-wrapper">
    <div class="left-sidebar">



        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            List of Candidates Elegibility:
                        </div>

                    </div>
                    <div class="widget-body">
                        <div id="dt_example" class="example_alt_pagination">




                            <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">

                                <thead>
                                    <tr>
                                        <th style="width: .3%;">
                                            Sr.No.
                                        </th>

                                        <th style="width:.5%">
                                            Matric Roll No.
                                        </th>
                                         <th style="width:.5%">
                                            Matric Year of Pass.
                                        </th>
                                         <th style="width:.5%">
                                            Matric Session of Pass.
                                        </th>
                                        <th style="width:.5%">
                                            Form No.
                                        </th>
                                        
                                         <th style="width:7%">
                                           Name
                                        </th>
                                        <th style="width:7%">
                                         Father  Name
                                        </th>
                                        <th style="width:7%">
                                           Inst. Name
                                        </th>
                                        <th style="width:5%">
                                          Type
                                        </th>
                                        
                                        <th style="width:5%" class="hidden-phone">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   
                                    $n=0;  
                                    $grp_name='';                             
                                    foreach($data as $key=>$vals):
                                        $n++;
                                        // DebugBreak();
                                       $inst_cd =  $vals["coll_cd"];
                                        echo '<tr id="row_'.$vals["pkId"].'">
                                        <td>'.$n.'</td>
                                        <td>'.$vals["matRno"].'</td>
                                        <td>'.$vals["yearOfPass"].'</td>
                                        <td>'.$vals["sessOfPass"].'</td>
                                        <td>'.$vals["formno"].'</td>
                                        <td>'.$vals["name"].'</td>
                                        <td>'.$vals["fname"].'</td>
                                        <td>'.$vals["InstName"].'</td>
                                        <td>'.$vals["type"].'</td>
                                        ';
                                        
                                        echo'<td>
                                         <button type="button" class="btn btn-info" value="'.$vals["formno"].'" onclick="viewPic('.$inst_cd.','.$vals["formno"].')">View Pic</button>
                                        <button type="button" class="btn btn-info" value="'.$vals["formno"].'" onclick="active11reg('.$vals["formno"].','.$vals["pkId"].')">Active</button>
                                        

                                        </td>
                                        </tr>';
                                        //break;
                                        endforeach;

                                    ?>



                                </tbody>
                            </table>
                             <div id="instruction" style="display:none; width:250px;height: 250px;" >
                                <img id='picid'  border="0" style="margin-left: 60px;    margin-top: 50px;height: 156px;" alt="admission_form.jpg">
                            </div>
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
<script type="">
function active11res(rno)
{
     $('.mPageloader').show();
     window.location.href = '<?=base_url()?>/BiseCorrection/Res11thactive/'+rno
}
function viewPic(inst_cd,picname)
{
  $("#picid").attr("src",'')
    $("#picid").attr("src",'../<?=IMAGE_PATH11?>'+inst_cd+'/'+picname+'.jpg');
    
     $.fancybox("#instruction");
}
function active11reg(formno,pkid)
{
     $.ajax({
         type: "POST",
         url: "<?php echo base_url(); ?>BiseCorrection/Reg11thactive/",
         dataType: 'json',
         data: {'formno':formno,'pkid':pkid},
         beforeSend: function() {  $('.mPageloader').show(); },
         complete: function() { $('.mPageloader').hide();},
         success: function(json) {
             //console.log(json)
             var str = json;
            // str = str.trim();
             if(str ==  1)
             {
                 
                   var oTable = $('#data-table').DataTable();
                    var target_row = $('#row_'+pkid).closest("tr").get(0); // this line did the trick
                    var aPos = oTable.fnGetPosition(target_row); 

                    oTable.fnDeleteRow(aPos);
                 
                 //$('#row_'+pkid).remove();
             }
             else
             {
                 alert("Error in Remove")
             }
         },
         error: function(request, status, error){
             alert(request.responseText);
         }
     });
}
</script>

