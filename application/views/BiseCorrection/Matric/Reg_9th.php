<div class="dashboard-wrapper">
    <div class="left-sidebar">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            9th Registration Session <?php
                                                               echo sessReg;
                                                           ?> 
                        </div>

                    </div>
                    <div class="widget-body">
                             <div class="control-group">
                                <label class="control-label span2" >
                                    Registration Date:
                                </label>

                                <div class="controls controls-row">
                                    <input class="span3" type="text" id="RegDate" name="RegDate" placeholder="Set Reg Date" readonly="readonly"  value="<?php echo @$data['0']['Dob']?>" required = "required">
                                    <span class="span2"></span>
                                    <label class="control-label span2" >
                                        Registration Status :
                                    </label> 
                                     <select class='span3' id='pvtinfo_dist' name='pvtinfo_dist' required='required'>
                                        <option value='0'>OFF</option>
                                        <option value='1'>ON</option>
                                    </select>
                                    
                                </div>
                                 <div class="form-actions no-margin">
                                 <button type="submit" onclick="return checks()" name="btnsubmitUpdateEnrol" class="btn btn-large btn-info offset5" >
                                    Save
                                </button>
                                 <input type="button" class="btn btn-large btn-danger" value="Cancel" id="btnCancel" name="btnCancel" onclick="return CancelAlert();" >
                                 </div>
                            </div>
                            
                        <div id="dt_example" class="example_alt_pagination">




                      
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
function activeslip(rno)
{
     $('.mPageloader').show();
     window.location.href = '<?=base_url()?>/index.php/BiseCorrection/slip9thactive/'+rno
}
</script>

