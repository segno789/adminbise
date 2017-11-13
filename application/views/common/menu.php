<html>
    <body>
        <div class="container-fluid">
        <div class="dashboard-container">
        <div class="top-nav">
            <ul>
                <li>
                    <a href="<?php echo base_url(); ?>dashboard" class="<?php if($isselected == '1') {echo 'selected';}?>" >
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0a0;"> </div>
                        Dashboard
                    </a>
                </li>

                <?php 
                if($appconfig['isreg'] == 1 ){?>
                    <li>
                        <a href="<?php echo base_url(); ?>Registration" class="<?php if($isselected == '2') {echo 'selected';}?>" >
                            <div class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></div>
                            9th Registration
                        </a>
                    </li>
                      <li>
                    <a href="<?php echo base_url(); ?>NinthCorrection/EditForms" class="<?php if($isselected == '7') {echo 'selected';}?>" >
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0c4;"></div>
                    9th Correction
                    </a>
                    </li>
                    <?php } 
                if($appconfig['isadmP1'] == 1){?>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission_9th_reg" class="<?php if($isselected == '14') {echo 'selected';}?>" >
                            <div class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></div>
                            9th Admission
                        </a>
                    </li>
                    <?php } 
                if($appconfig['isadmP2'] == 1 || $appconfig['isadmP2S'] == 1){

                    ?>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission_matric" class="<?php if($isselected == '9') {echo 'selected';}?>" >
                            <div class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></div>
                            10th Admission
                        </a>
                    </li>
                    <?php }
                if( $appconfig['isslipP1'] == 1 || $appconfig['isslipP2'] == 1 || $appconfig['isslipP2S'] == 1){?>

                    <li>
                        <a style="width: 115px;" href="<?php echo base_url(); ?>RollNoSlip" class="<?php if($isselected == '4') {echo 'selected';}?>" >
                            <div class="fs1" aria-hidden="true" data-icon="&#xe032;"> </div>
                            Roll No. Slips
                        </a>
                    </li>
                    <?php } 
                if( $appconfig['isresultP2'] == 1){?>

                    <li>
                        <a style="width: 115px;" href="<?php echo base_url(); ?>Result/dashboard10th" class="<?php if($isselected == '5') {echo 'selected';}?>" >
                            <div class="fs1" aria-hidden="true" data-icon="&#xe032;"> </div>
                            Result Cards
                        </a>
                    </li>
                    <?php } ?>



            </ul>
            <div class="clearfix">
            </div>
        </div>
        <div class="sub-nav">
            <?php

            if($isselected == '0') { 
                ?>
                <ul >
                    <li><a href="<?php echo base_url(); ?>BiseCorrection/reg9thcorrections"   data-original-title="" class="<?php if($isselected == '2') {echo 'heading';}?>">9th Registration</a></li>

                    <li>
                        <a href="<?php echo base_url(); ?>BiseCorrection/BatchRelease">
                            Online Batch Release
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>BiseCorrection/BatchRestoreManual">
                            Manual Batch Release
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>BiseCorrection/BatchRestore">
                            Batch Restore
                        </a>
                    </li>
                    <!--   <li>
                    <a href="<?php echo base_url(); ?>BiseCorrection/NewEnrolment">
                    9th New Enrolment
                    </a>
                    </li>
                    <li>
                    <a href="<?php echo base_url(); ?>BiseCorrection/tracebyfromno">
                    Trace by FormNo
                    </a>
                    </li>
                    <li>
                    <a href="<?php echo base_url(); ?>BiseCorrection/tracebyinstcode">
                    Trace by Institute Code
                    </a>
                    </li>
                    <li>
                    <a href="<?php echo base_url(); ?>BiseCorrection/migration">
                    9th Migration
                    </a>
                    </li>-->
                    <li>
                        <a onclick="return logout();">Logout</a>
                    </li>
                    <!--  <li>
                    <a href="<?php echo base_url(); ?>Registration/ProofReading">
                    Proof Reading
                    </a>
                    </li>-->
                </ul>
                <?php
            }
            if($isselected == '1') { 
                ?>
                <ul >
                    <li><a href="<?php echo base_url(); ?>Dashboard"  data-original-title="" class="<?php if($isselected == '1') {echo 'heading';}?>">Dashboard</a></li>
                    <li>
                        <a onclick="return logout();">Logout</a>
                    </li>
                </ul>
                <?php
            }
            // 9th Registration
            if($isselected == '2') { 
                ?>
                <ul >
                    <li><a href="<?php echo base_url(); ?>Registration"   data-original-title="" class="<?php if($isselected == '2') {echo 'heading';}?>">Registration</a></li>
                    
                     
                    <?php  if( $isfeedingallow == 1) {?>
                        
                         <?php if( ISREADMISSION == 1) {?>
                           <li >
                        <a href="<?php echo base_url(); ?>Registration/ReAdmission"> 
                        Re-Admissions  <img src="<?php echo base_url(); ?>assets/img/new.gif" border="0" width="19" height="7" alt="new.gif">
                        </a>
                       
                        </li>
                        <?php } ?>
                        <li>
                            <a href="<?php echo base_url(); ?>Registration/NewEnrolment">
                                New Enrolement
                            </a>
                        </li>
                        <!--<li>
                        <a href="<?php //echo base_url(); ?>Registration/ReAdmission">
                        Re-Admissions
                        </a>
                        </li>-->
                        <li>
                            <a href="<?php echo base_url(); ?>Registration/EditForms">
                                Edit Forms
                            </a>
                        </li> 
                        <li>
                            <a href="<?php echo base_url(); ?>Registration/CreateBatch">
                                Create Batch
                            </a>
                        </li>
                        <?php }?>
                        
                    <!--
                    <li>
                    <a href="<?php //echo base_url(); ?>Registration/EditPicForms">
                    Edit Pictures Forms
                    </a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url(); ?>Registration/batchlist">
                            Batch List
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Registration/FormPrinting">
                            Proof Form Printing
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Registration/Profile">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a style="cursor: pointer" onclick="return logout();">Logout</a>
                    </li>
                    <!--  <li>
                    <a href="<?php echo base_url(); ?>Registration/ProofReading">
                    Proof Reading
                    </a>
                    </li>-->
                </ul>
                <?php
            }
            ?>
            <?php   // 9th admission
            if($isselected == '3'){
                ?>
                <ul >
                    <li><a href="<?php echo base_url(); ?>Admission"   data-original-title="" >Admission</a></li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission/StudentsData">
                            Students Data
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission/EditForms">
                            Edit Forms
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission/CreateBatch">
                            Create Batch
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission/BatchList">
                            Batch List
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission/FormPrinting">
                            Form Printing
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission/ProofReading">
                            Proof Reading
                        </a>
                    </li>
                    <li>
                        <a onclick="return logout();">Logout</a>
                    </li>
                </ul>
                <?php
            }
            ?>
            <?php   // 9th admission
            if($isselected == '14'){
                ?>
                <ul >
                    <li><a href="<?php echo base_url(); ?>Admission_9th_reg"   data-original-title="" >Admission</a></li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission_9th_reg/StudentsData">
                            Students Data
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission_9th_reg/EditForms">
                            Edit Forms
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>Admission_9th_reg/CreateBatch">
                            Create Batch
                        </a>
                    </li>
                  
                    <li>
                        <a href="<?php echo base_url(); ?>Admission_9th_reg/BatchList">
                            Batch List
                        </a>
                 
                    
                    </li>
                    <li>
                        <a onclick="return logout();" style="cursor: pointer;">Logout</a>
                    </li>

                </ul>
                <?php
            }
            ?>
            <?php
            if($isselected == '4'){
                ?>
                <ul >
                    <li><a href="<?php echo base_url(); ?>RollNoSlip"   data-original-title="" >Roll No. Slips: </a></li>

                    <?php if($appconfig['isslipP1'] == 1) {?>
                        <li>
                            <a href="<?php echo base_url(); ?>RollNoSlip/NinthStd">
                                9th Roll No. Slip
                            </a>
                        </li>
                        <?php } if($appconfig['isslipP2'] == 1) {?>
                        <li>
                            <a href="<?php echo base_url(); ?>RollNoSlip/TenthStd">
                                10th Roll No. Slip
                            </a>
                        </li>

                        <?php } if($appconfig['isslipP2S'] == 1) {?>

                        <li>
                            <a href="<?php echo base_url(); ?>RollNoSlip/TenthStd">
                                10th Supply Roll No. Slip
                            </a>
                        </li>
                        <?php }?>
                    <li>
                        <a onclick="return logout();">Logout</a>
                    </li>


                </ul>
                <?php
            }

            if($isselected == '7'){
                ?>
                <ul >

                    <li><a href="<?php echo base_url(); ?>NinthCorrection"   data-original-title="" class="<?php if($isselected == '7') {echo 'heading';}?>">9th Correction </a></li>
                    <li><a href="<?php echo base_url(); ?>NinthCorrection/EditForms"   data-original-title="" >Apply for Correction </a></li>
                    <li>
                        <a href="<?php echo base_url(); ?>NinthCorrection/Applied">
                            Applications
                        </a>
                    </li>
                    <li>
                        <a onclick="return logout();">Logout</a>
                    </li>
                </ul>
                <?php
            }
            ?>

            <?php
            // Matric Admission
            if($isselected == '9') { 
                ?>
                <ul >
                    <li><a href="<?php echo base_url(); ?>Admission_matric"   data-original-title="" class="<?php if($isselected == '9') {echo 'heading';}?>">Admission</a></li>


                    <li>
                        <a href="<?php echo base_url(); ?>Admission_matric/StudentsData">
                            Old Students 
                        </a>
                    </li>
                    <!-- <li>
                    <a href="<?php //echo base_url(); ?>Admission_matric/ReAdmission">
                    Re-Admissions
                    </a>
                    </li>-->

                    <li>
                        <a href="<?php echo base_url(); ?>Admission_matric/EditForms">
                            Edit Forms
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission_matric/CreateBatch">
                            Create Batch
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission_matric/batchlist">
                            Batch List
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Admission_matric/FormPrinting">
                            Proof Printing 
                        </a>
                    </li>

                    <li>
                        <a style="cursor: pointer" onclick="return logout();">Logout</a>
                    </li>
                </ul>
                <?php }?>



            <?php
            if($isselected == '5'){
                ?>
                <ul >
                    <li><a   data-original-title="" >Result Cards: </a></li>

                    <?php if($appconfig['isresultP2'] == 1 ) {?>
                        <li>
                            <a href="<?php echo base_url(); ?>Result/dashboard10th">
                                10th Result Cards
                            </a>
                        </li>
                        <?php }
                      //  DebugBreak() ;
                    if($appconfig['isresultP1'] == 1 ) {?>
                        <li>
                            <a href="<?php echo base_url(); ?>Result/dashboard9th">
                                9th Result Cards
                            </a>
                        </li>
                        <?php } ?>
                </ul >
                <?php
            } 
            ?> 



            <div class="btn-group pull-right">
                <button class="btn btn-primary">
                    Main Menu
                </button>
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                    <span class="caret">
                    </span>
                </button>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="<?php echo base_url(); ?>Dashboard" data-original-title="">
                            Dashboard
                        </a>
                    </li>
                    <?php if($appconfig['isreg'] == 1) {?>
                        <li>
                            <a href="<?php echo base_url(); ?>Registration" data-original-title="">
                                Registration
                            </a>
                        </li>
                        <?php }?>
                    <?php if($appconfig['isadmP1'] == 1) {?>
                        <li>
                            <a href="<?php echo base_url(); ?>Admission_9th_reg" data-original-title="">
                                9th Admission
                            </a>
                        </li>
                        <?php }?>
                    <?php if($appconfig['isadmP2'] == 1 || $appconfig['isadmP2S'] == 1) {?>
                        <li>
                            <a href="<?php echo base_url(); ?>Admission_matric" data-original-title="">
                                Admission
                            </a>
                        </li>
                        <?php }?>
                    <?php if( $appconfig['isslipP1'] == 1 || $appconfig['isslipP2'] == 1 || $appconfig['isslipP2S'] == 1) {?>
                        <li>
                            <a href="<?php echo base_url(); ?>RollNoSlip" data-original-title="">
                                Roll No. Slips
                            </a>
                        </li>
                        <?php }?>
                    <li>
                        <a href="<?php echo base_url(); ?>Registration/Profile" data-original-title="">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a style="cursor: pointer" onclick="return logout();">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
