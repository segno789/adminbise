<?php
    function generatepath($rno,$class,$year,$sess)
    {
        $basepath = DIRPATHMIG2;
        $clsvr = '';
        $picyear= substr($year, -2);
        $folderno = '';
        if($class == 10  OR $class == 9)
        {
            $clsvr = 'MA'; 

        }
        else if($class == 12  OR $class == 11)
        {
            $clsvr = 'IA';
        }

        if($rno>=100001 && $rno<=150000)
        {
            $folderno = '1st';
        }
        else if($rno>=150001 && $rno<=200000)
        {
            $folderno = '2nd';
        }
        else if($rno>=200001 && $rno<=250000)
        {
            $folderno = '3rd';
        }
        else if($rno>=250001 && $rno<=300000)
        {
            $folderno = '4th';
        }
        else if($rno>=300001 && $rno<=350000)
        {
            if($class ==  10 OR $class ==  9)
            $folderno = '5th';
            else if($class ==  12 OR $class ==  11)
            $folderno = '6th';
        }
        else if($rno>=350001 && $rno<400000)
        {
             if($class ==  10 OR $class ==  9)
            $folderno = '6th';
            else if($class ==  12 OR $class ==  11)
            $folderno = '7th';
        }
        else if($rno>=400001 && $rno<=450000)
        {
            if($class ==  10 OR $class ==  9)
            $folderno = '7th';
            else if($class ==  12 OR $class ==  11)
            $folderno = '8th';
           
        }
        else if($rno>=450001 && $rno<=500000)
        {
             if($class ==  10 OR $class ==  9)
            $folderno = '8th';
            else if($class ==  12 OR $class ==  11)
            $folderno = '9th';
        }
        else if($rno>=500001 && $rno<550000)
        {
            $folderno = '9th';
        }
        else if($rno>=550001 && $rno<600000)
        {
            $folderno = '10th';
        }
         else if($rno>=600001 && $rno<650000)
        {
            $folderno = '11th';
        }


        $pic = 'Pic'.$picyear.'-'.$clsvr ;

        $foldername =   $clsvr.  $folderno .$picyear;
        $basepath =  $basepath.'\\'.$pic.'\\'. $foldername.'\\';
        return  $basepath.$rno.".jpg";
    }

?>

<div class="dashboard-wrapper class wysihtml5-supported" style="background: white;">
<div class="left-sidebar">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <div class="title">
                        12th Migration by Roll No.<a id="redgForm" data-original-title=""></a>
                    </div>
                </div>
             <!--   <div class="widget-body">
                    <form class="form-horizontal no-margin" action="<?php echo base_url(); ?>BiseCorrection/migrate/12" method="post" enctype="multipart/form-data">
                        <div class='control-group'>
                            <div class='controls controls-row'>
                                <label class='control-label span2' >
                                    Roll Number:
                                </label>
                                <input class='span3' type='number' id='txtformNo_search' style='text-transform: uppercase;' name='txtformNo_search' placeholder='Roll Number.' maxlength='6' min='100001' max="399999"  required='required' oninput="maxLengthCheck(this)">
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
                </div>       -->
                
                  <div class="widget-body">
                        <h4>
                            All OneWindow 12th Migration Forms:
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
                                            Roll No.
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
                                          <th style="width:5%">
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
                                        $formno = !empty($vals["rno"])?$vals["rno"]:"N/A";
                                         $app_no = !empty($vals["app_no"])?$vals["app_no"]:"N/A";
                                         $app_txt = $app_no;
                                         if($app_no == 'N/A')
                                         {
                                           $app_txt =  -1;  
                                         }
                                          $path = generatepath($vals["rno"],11,2016,1);
                                        $type = pathinfo($path, PATHINFO_EXTENSION);
                                        $data = file_get_contents($path);
                                        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                                        
                                        
                                        echo '<tr  >
                                        <td>'.$n.'</td>
                                        <td>'.$formno.'</td>
                                        <td>'.$app_no.'</td>
                                        <td>'.$vals["name"].'</td>
                                        <td>'.$vals["fname"].'</td>';

                                        echo'<td><img id="previewImg" style="width:70px; height: 70px;" src="'.$base64.'" alt="Candidate Image"></td><td>
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
    function migrateto(formno,inst_cd,appno)
    {
        window.location.href ="<?php echo base_url(); ?>bisecorrection/migrate/12/"+formno+"/"+inst_cd+'/'+appno; 
    }
</script>