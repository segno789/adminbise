<div class="dashboard-wrapper">
    <div class="left-sidebar">



        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            9th Re-Admission Result Cancel :
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

                                        <th style="width:5%">
                                           Formno
                                        </th>
                                        <th style="width:5%">
                                           Rno
                                        </th>
                                        <th style="width:10%">
                                            Name 
                                        </th>
                                         <th style="width:10%">
                                            Father Name 
                                        </th>
                                         
                                        <th style="width:10%">
                                           DOB
                                        </th>

                                        <th style="width:2%" class="hidden-phone">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   // DebugBreak();
                                    $n=0;  
                                    $grp_name='';                             
                                    foreach($data as $key=>$vals):
                                        $n++;
                                       

                                        echo '<tr>
                                        <td>'.$n.'</td>
                                        <td>'.$vals["formno"].'</td>
                                        <td>'.$vals["rno"].'</td>
                                        <td>'.$vals["name"].'</td>
                                        <td>'.$vals["fname"].'</td>
                                        <td>'.$vals["dob"].'</td>

                                        ';

                                        echo'<td>
                                        <button type="button" class="btn btn-info" value="'.$vals["formno"].'" onclick="activeres('.$vals["formno"].')">Active</button>

                                        </td>
                                        </tr>';
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
function activeres(rno)
{
     $('.mPageloader').show();
     window.location.href = '<?=base_url()?>BiseCorrection/Reg9thActive/'+rno
}
</script>

