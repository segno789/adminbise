
<div class="container-fluid">
<div class="dashboard-container">
<div class="top-nav">
    <ul>

        <?php if($isselected == '4'){?>

            <li>
                <a style="width: 115px;" href="<?php echo base_url(); ?>/RollNoSlip" class="<?php if($isselected == '4') {echo 'selected';}?>" >
                    <div class="fs1" aria-hidden="true" data-icon="&#xe032;"> </div>
                    Roll No. Slips
                </a>
            </li>
            <?php } 
        ?>

    </ul>
    <div class="clearfix">
    </div>
</div>
<div class="sub-nav">
    <?php
    //  DebugBreak();
    if($isselected == '4'){
        ?>
        <ul >
            <li><a href="<?php echo base_url(); ?>dashboard"   data-original-title="" >Dashboard</a></li>
            <?php
            if($appconfig['isslipP1'] == 1) {
                ?>
                <li>
                    <a href="<?php echo base_url(); ?>RollNoSlip/NinthStd">
                        9th Roll No. Slip
                    </a>
                </li>
                <?php }

            if($appconfig['isslipP2'] == 1) {
                ?>

                <li>
                    <a href="<?php echo base_url(); ?>RollNoSlip/TenthStd">
                        10th Roll No. Slip
                    </a>
                </li>
                <?php }
            if($appconfig['isslipP2S'] == 1) {

                ?>
                <li>
                    <a href="<?php echo base_url(); ?>RollNoSlip/TenthStd">
                        10th Supply Roll No. Slip
                    </a>
                </li>

                <?php }?>
            <li>

                <a style="cursor: pointer" onclick="return logout();">Logout</a>
            </li>
        </ul>
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
                <a href="<?php echo base_url(); ?>dashboard" data-original-title="">
                    Dashboard
                </a>
            </li>

            <?php
            if($appconfig['isslipP1'] == 1) {

                ?>
                <li>
                    <a href="<?php echo base_url(); ?>RollNoSlip/NinthStd" data-original-title="">
                        9th Roll No. Slip
                    </a>
                </li>
                <?php }

            if($appconfig['isslipP2'] == 1) {
                ?>
                <li>
                    <a href="<?php echo base_url(); ?>RollNoSlip/TenthStd" data-original-title="">
                        10th Roll No. Slip
                    </a>
                </li>
                <?php
            }
            if($appconfig['isslipP2S'] == 1) {
                ?> 
                <li>
                    <a href="<?php echo base_url(); ?>RollNoSlip/TenthStd" data-original-title="">
                        10th Supply Roll No. Slip
                    </a>
                </li>
                <?php }?>
            <li>
                <a onclick="return logout();" data-original-title="">
                    Logout
                </a>
            </li>

        </ul>
    </div>
</div>
