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
                                        <th style="width:7%">
                                          Type
                                        </th>
                                        <th style="width:5%">
                                          Pic.
                                        </th>
                                        <th style="width:2%" class="hidden-phone">
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
                                       $inst_cd =  substr($vals["formno"],0,6);
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
                                        <td><img id="previewImg" style="width:70px; height: 70px;" src="/'.IMAGE_PATH11.$inst_cd.'/'.$vals["formno"].'?'.rand(10000,1000000).'" alt="Candidate Image"></td>';
                                        
                                        echo'<td>
                                        <button type="button" class="btn btn-info" value="'.$vals["formno"].'" onclick="active11reg('.$vals["formno"].','.$vals["pkId"].')">Active</button>

                                        </td>
                                        </tr>';
                                        //break;
                                        endforeach;

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
    <!--  <div class="right-sidebar">

    <div class="wrapper">
    <ul class="stats">
    <li>
    <div class="left">
    <h4>
    15,859
    </h4>
    <p>
    Unique Visitors
    </p>
    </div>
    <div class="chart">
    <span id="unique-visitors"><canvas height="30" width="69" style="display: inline-block; width: 69px; height: 30px; vertical-align: top;"></canvas></span>
    </div>
    </li>
    <li>
    <div class="left">
    <h4>
    $47,830
    </h4>
    <p>
    Monthly Sales
    </p>
    </div>
    <div class="chart">
    <span id="monthly-sales"><canvas height="30" width="69" style="display: inline-block; width: 69px; height: 30px; vertical-align: top;"></canvas></span>
    </div>
    </li>
    <li>
    <div class="left">
    <h4>
    $98,846
    </h4>
    <p>
    Current balance
    </p>
    </div>
    <div class="chart">
    <span id="current-balance"><canvas height="30" width="69" style="display: inline-block; width: 69px; height: 30px; vertical-align: top;"></canvas></span>
    </div>
    </li>
    <li>
    <div class="left">
    <h4>
    18,846
    </h4>
    <p>
    Registrations
    </p>
    </div>
    <div class="chart">
    <span id="registrations"><canvas height="30" width="69" style="display: inline-block; width: 69px; height: 30px; vertical-align: top;"></canvas></span>
    </div>
    </li>
    <li>
    <div class="left">
    <h4>
    22,571
    </h4>
    <p>
    Site Visits
    </p>
    </div>
    <div class="chart">
    <span id="site-visits"><canvas height="30" width="69" style="display: inline-block; width: 69px; height: 30px; vertical-align: top;"></canvas></span>
    </div>
    </li>
    </ul>
    </div>

    <hr class="hr-stylish-1">


    <div class="wrapper">
    <div id="scrollbar">
    <div style="height: 270px;" class="scrollbar">
    <div style="height: 270px;" class="track">
    <div style="top: 0px; height: 55.4795px;" class="thumb">
    <div class="end">
    </div>
    </div>
    </div>
    </div>
    <div class="viewport">
    <div style="top: 0px;" class="overview">
    <div class="featured-articles-container">
    <h5 class="heading">
    Recent Articles
    </h5>
    <div class="articles">
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Hosting Made For WordPress
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Reinvent cutting-edge
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    partnerships models 24/7
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Eyeballs frictionless
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Empower deliver innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    B2B plug and play
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Need some interesting
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    B2B plug and play
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Need some interesting
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Need some interesting
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    B2B plug and play
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Need some interesting
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    B2B plug and play
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Need some interesting
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    </div>

    </div>

    </div>
    </div>
    </div>
    </div>

    <hr class="hr-stylish-1">

    <div class="wrapper">
    <div id="scrollbar-two">
    <div style="height: 270px;" class="scrollbar">
    <div style="height: 270px;" class="track">
    <div style="top: 0px; height: 87.4101px;" class="thumb">
    <div class="end">
    </div>
    </div>
    </div>
    </div>
    <div class="viewport">
    <div style="top: 0px;" class="overview">
    <div class="featured-articles-container">
    <h5 class="heading-blue">
    Featured posts
    </h5>
    <div class="articles">
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Hosting Made For WordPress
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Reinvent cutting-edge
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    partnerships models 24/7
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Eyeballs frictionless
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Empower deliver innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Need some interesting
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    B2B plug and play
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Need some interesting
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    B2B plug and play
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Need some interesting
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Portals technologies
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Collaborative innovate
    </a>
    <a data-original-title="" href="#">
    <span class="label-bullet-blue">
    &nbsp;
    </span>
    Mashups experiences plug
    </a>
    </div>

    </div>

    </div>
    </div>
    </div>
    </div>


    </div> -->
</div>
</div>
</div>
<script type="">
function active11res(rno)
{
     $('.mPageloader').show();
     window.location.href = '<?=base_url()?>/BiseCorrection/Res11thactive/'+rno
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
             if(json ==  1)
             {
                 $('#'+pkid).remove();
             }
         },
         error: function(request, status, error){
             alert(request.responseText);
         }
     });
}
</script>

