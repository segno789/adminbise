
<div class="container-fluid ">
    <div style="text-align: center; background:#003a6a; color: white;  margin-bottom: 5px; height: 40px;">
        &copy; 2017 BISE Gujranwala, All Rights Reserved. 
    </div>
</div>

</div>



<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/exporting.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/alertify.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/source/jquery.fancybox.pack.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/source/jquery.fancybox.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function(){ 
        $('.mPageloader').hide();
        $('#data-table').dataTable({
            "sPaginationType": "full_numbers",
            "cache": false
        });
        $('#data-tablereg').dataTable({
            "sPaginationType": "full_numbers",
            "cache": false
        });
        drawChart3();
        $('.mPageloader').hide();
    });

    function drawChart3() {
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Dashboard/getstats/",
            beforeSend: function() {  $('.mPageloader').show(); },
            complete: function() { $('.mPageloader').hide();},
            success: function(data) {
                var parsed = $.parseJSON(data) ;

                Highcharts.chart('columnChart', {
                    chart: {
                        type: 'column'
                    },
                    colors: ['#74b749', '#0daed3', '#ed6d49', '#ffb400', '#f63131'],
                    title: {
                        text: 'School Information'
                    },
                    subtitle: {
                        text: 'Source: bisegrw.com'
                    },
                    xAxis: {
                        categories: parsed.iyear,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'No. of Students'
                        },
                        max:1500,
                        tickInterval: 100,
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.05,
                            borderWidth: .45
                        }
                    },
                    credits: {
                        enabled: false
                    },
                    series: parsed.states
                });


                Highcharts.chart('area_chart', {
                    chart: {
                        type: 'area'
                    },
                    title: {
                        text: 'School Ranking'
                    },
                    subtitle: {
                        text: 'Source: <a href="http:www.bisegrw.com">' +
                        'bisegrw.com</a>'
                    },

                    credits: {
                        enabled: false
                    },
                    xAxis: {
                        min: 2012,
                        max:2016,
                        tickInterval: 1,
                        allowDecimals: false,
                        labels: {
                            formatter: function () {
                                return this.value; // clean, unformatted number for year
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Grading'
                        },
                        max:10,
                        tickInterval: .5,
                    },
                    tooltip: {
                        pointFormat: '{series.name} is <b>{point.y}</b><br/> in {point.x}'
                    },
                    plotOptions: {
                        area: {
                            pointStart: 2012,
                            marker: {
                                enabled: false,
                                symbol: 'circle',
                                radius: 2,
                                states: {
                                    hover: {
                                        enabled: true
                                    }
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'School Rnaking',
                        data:  parsed.grading
                    } ]
                });


            },
            error: function(request, status, error){
                alert(request.responseText);
            }
        });
    }

    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    };
    function Incomplete_inst_info_INSERT()
    {

        var emis ="<?php  echo @$field_status['emis']; ?>";
        var email = "<?php  echo @$field_status['email']; ?>";
        var phone = "<?php echo @$field_status['phone']; ?>";
        var cell = "<?php echo @$field_status['cell']; ?>";
        var dist = "<?php echo @$field_status['dist']; ?>";
        var teh = "<?php echo @$field_status['teh']; ?>";
        var zone = "<?php echo @$field_status['zone']; ?>";



        if(emis == 0)
        {
            if($('#Info_emis').val() < 4)
            {
                alertify.error("Please write Your Institute EMIS Code.");
                $('#Info_emis').focus();
                return false;
            }

        }
        if(email == 0){

            if($('#Info_email').val() < 2)
            {
                alertify.error("Please write Your Institute Email.");
                $('#Info_email').focus();
                return false;    
            }
            if( !isValidEmailAddress($('#Info_email').val()) ) 
            { 
                alertify.error("Please write Your VALID Institute Email.");
                $('#Info_email').focus();
                return false;
            }

        }

        if(phone == 0){
            if($('#info_phone').val() <3)
            {
                alertify.error("Please write Your Institute Phone.");
                $('#info_phone').focus();
                return false;    
            }

        }
        if(cell == 0){
            if($('#info_cellNo').val()<3)
            {
                alertify.error("Please write Your Institute Mobile No.");
                $('#info_cellNo').focus();
                return false;    
            }

        }
        if(dist == 0){
            if($('#info_dist').val() == 0)
            {
                alertify.error("Please Select Your Institute District.");
                $('#info_dist').focus();
                return false;    
            }

        }
        if(teh == 0){
            if($('#info_teh').val() == 0)
            {
                alertify.error("Please Select Your Institute Tehsil.");
                $('#info_teh').focus();
                return false;    
            }

        }
        if(zone == 0){
            if($('#info_zone').val() == 0)
            {
                alertify.error("Please Select Your Institute Zone.");
                $('#info_zone').focus();
                return false;    
            }

        }

        window.location.href = '<?=base_url()?>/Registration/Incomplete_inst_info_INSERT/';
    }
    function BatchRelease_INSERT()
    {

        var Batch_Id = $('#batch_real_Id').val();
        var reason  = $('#batch_real_reason').val();;
        var bank_branch  = $('#batch_real_bankbranch').val();;
        var bank_challan  = $('#batch_real_challanno').val();;
        var paidAmount  = $('#batch_real_PaidAmount').val();;
        var paidDate  = $('#batch_real_PaidDate').val();;


        if(Batch_Id == 0)
        {

            alertify.error("Please Select Batch Again From Batch List.");
            $('#batch_real_Id').focus();
            return false;


        }
        if(reason.length < 5)
        {

            alertify.error("Please Give Strong Reason.(More than 5 words..)");
            $('#batch_real_reason').focus();
            return false;


        }
        if(bank_branch == 0)
        {

            alertify.error("Please Select Bank Branch.");
            $('#batch_real_bankbranch').focus();
            return false;


        }
        if(bank_challan == 0)
        {

            alertify.error("Please Give Bank Challan.");
            $('#batch_real_challanno').focus();
            return false;


        }
        if(paidAmount == 0)
        {

            alertify.error("Please Give Bank Paid Amount.");
            $('#batch_real_PaidAmount').focus();
            return false;


        }
        if(paidDate == '')
        {

            alertify.error("Please Give Bank Paid Amount.");
            $('#batch_real_PaidDate').focus();
            return false;
        }
    }
    function downloadslip(rno,isdownload)
    {
        $('.mPageloader').show();
        window.location.href = '<?=base_url()?>/RollNoSlip/MatricRollNo/'+rno+'/'+isdownload

        if(isdownload == 1)
        {
            $('.mPageloader').hide();
        }
    }
    function downloadslip9th(rno,isdownload)
    {
        $('.mPageloader').show();
        window.location.href = '<?=base_url()?>/RollNoSlip/NinthRollNo/'+rno+'/'+isdownload
        if(isdownload == 1)
        {
            $('.mPageloader').hide();
        }
    }
    function downloadgroupwise(isdownload)
    {
        $('.mPageloader').show();
        window.location.href = '<?=base_url()?>/RollNoSlip/MatricRollNoGroupwise/'+$("#std_group").val()+'/'+isdownload

        if(isdownload == 1)
        {
            $('.mPageloader').hide();
        }
    }
    function downloadgroupwise12(isdownload)
    {
        $('.mPageloader').show();
        window.location.href = '<?=base_url()?>/RollNoSlip/InterRollNoGroupwise/'+$("#std_group").val()+'/'+isdownload

        if(isdownload == 1)
        {
            $('.mPageloader').hide();
        }
    }
    function downloadgroupwise9th(isdownload)
    {
        $('.mPageloader').show();
        window.location.href = '<?=base_url()?>/RollNoSlip/NinthRollNoGroupwise/'+$("#std_group").val()+'/'+isdownload
        if(isdownload == 1)
        {
            $('.mPageloader').hide();
        }
    }


    $( "#dob" ).datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true, changeYear: true, maxDate: new Date(2005, 7,1),yearRange: '1970:2005'}).val();
    $( "#batch_real_PaidDate" ).datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true, changeYear: true, startDate:new Date() }).val();
    var myOptions = {
        val1 : 'text1',
        val2 : 'text2'
    };
    var sub1_Pak_options = {
        1 : 'Urdu'
    }
    var sub1_NonPak_options = 
    {
        11 : 'Geogrophy Of Pakistan',
        1 : 'Urdu'
    }
    var sub3_Muslim = 
    {
        3 :'Islamyat Compulsory'
    }
    var sub3_Non_Muslim = 
    {
        51 : 'ETHICS',
        3  :'Islamyat Compulsory'
    }
    var sub5_Hum = 
    {
        92 : 'GENERAL MATHEMATICS' 
    }
    var sub6_Hum = 
    {
        9 : 'GENERAL SCIENCE'  
    }
    var sub7_Hum = 
    {
        0 : 'NOT SELECTED',
        37: 'EDUCATION',
        26: 'CIVICS',
        25: 'ECONOMICS',
        14: 'PHYSIOLOGY & HYGIENE',
        24: 'GEOGRAPHY',
        21: 'HISTORY OF PAKISTAN',
        35: 'ENGLISH LITERATURE',
        34: 'URDU LITERATURE',
        19: 'ADVANCED ISLAMIC STUDIES',
        87: 'ENVIRONMENTAL STUDIES',
        33: 'COMMERCIAL GEOGRAPHY',
        22: 'ARABIC',
        23: 'PERSIAN',
        36: 'PUNJABI',
        20: 'ISLAMIC HISTORY / MUSLIM HISTORY',
        83: 'POULTRY FARMING',
        40: 'HEALTH & PHYSICAL EDUCATION',
        78: 'COMPUTER SCIENCE',
        15 : 'GEOMETRICAL & TECHNICAL DRAWING',
        43 : 'ELECTRICAL WIRING',
        48 : 'WOOD WORK (FURNITURE MAKING)',
        90 : 'COMPUTER HARDWARE',
        83 : 'POULTRY FARMING',
        89 : 'FISH FARMING',
        91 : 'BEAUTICIAN',
        74 : 'WEAVING'
    }
    var sub8_Hum = 
    {
        0 : 'NOT SELECTED',
        37: 'EDUCATION',
        26: 'CIVICS',
        25: 'ECONOMICS',
        14: 'PHYSIOLOGY & HYGIENE',
        24: 'GEOGRAPHY',
        21: 'HISTORY OF PAKISTAN',
        35: 'ENGLISH LITERATURE',
        34: 'URDU LITERATURE',
        19: 'ADVANCED ISLAMIC STUDIES',
        87: 'ENVIRONMENTAL STUDIES',
        33: 'COMMERCIAL GEOGRAPHY',
        22: 'ARABIC',
        23: 'PERSIAN',
        36: 'PUNJABI',
        20: 'ISLAMIC HISTORY / MUSLIM HISTORY ',
        83: 'POULTRY FARMING',
        40: 'HEALTH & PHYSICAL EDUCATION',
        78: 'COMPUTER SCIENCE',
        15 : 'GEOMETRICAL & TECHNICAL DRAWING',
        43 : 'ELECTRICAL WIRING',
        48 : 'WOOD WORK (FURNITURE MAKING)',
        90 : 'COMPUTER HARDWARE',
        83 : 'POULTRY FARMING',
        89 : 'FISH FARMING',
        91 : 'BEAUTICIAN',
        74 : 'WEAVING'
    }
    var sub5_Deaf = 
    {
        66: 'ARITHMETIC'

    }
    var sub6_Deaf = 
    {
        0: 'NOT SELECTED',
        72 : 'TAILORING',
        67 : 'BAKERY',
        68 : 'CARPET MAKING',
        93 : 'COMPUTER SCIENCES',
        69 : 'DRAWING',
        70 : 'EMBORIDERY',
        94 : 'HEALTH & PHYSICAL EDUCATION',
        73 : 'TYPE WRITING',
        74 : 'WEAVING'
    }
    var sub7_Deaf = 
    {
        0: 'NOT SELECTED',
        72 : 'TAILORING',
        67 : 'BAKERY',
        68 : 'CARPET MAKING',
        93 : 'COMPUTER SCIENCES',
        69 : 'DRAWING',
        70 : 'EMBORIDERY',
        94 : 'HEALTH & PHYSICAL EDUCATION',
        73 : 'TYPE WRITING',
        74 : 'WEAVING'
    }
    var sub8_Deaf = 
    {
        0: 'NOT SELECTED',
        72 : 'TAILORING',
        67 : 'BAKERY',
        68 : 'CARPET MAKING',
        93 : 'COMPUTER SCIENCES',
        69 : 'DRAWING',
        70 : 'EMBORIDERY',
        94 : 'HEALTH & PHYSICAL EDUCATION',
        73 : 'TYPE WRITING',
        74 : 'WEAVING'
    }

    function downloadslip(rno)
    {
        window.location.href = '<?=base_url()?>/RollNoSlip/MatricRollNo/'+rno
    }
    function downloadslip_Inter(rno)
    {
        window.location.href = '<?=base_url()?>/RollNoSlip/InterRollNo/'+rno+'/2'
    }
    function EditForm(formrno)
    {
        $('#sub1').empty();
        $('#sub2').empty();
        $('#sub3').empty();
        $('#sub4').empty();
        $('#sub5').empty();
        $('#sub6').empty();
        $('#sub7').empty();
        $('#sub8').empty();
        window.location.href = '<?=base_url()?>/Registration/NewEnrolment_EditForm/'+formrno
    }
    function ReturnForm(Batch_ID)
    {
        window.location.href = '<?=base_url()?>/Registration/return_pdf/'+Batch_ID + '/1'
    }
    function ReturnForm_Final_groupwise(grp_cd){
        window.location.href = '<?=base_url()?>/Registration/return_pdf/'+grp_cd + '/2'
    }
    function ReturnForm_Final_Formnowise(startformno,endformno){
        window.location.href = '<?=base_url()?>/Registration/return_pdf/'+startformno + '/3' +'/'+endformno +'/';
    }
    function ReturnForm_ProofReading_groupwise(grp_cd){
        window.location.href =  '<?=base_url()?>/Registration/return_pdf/'+grp_cd + '/4'
    }
    function ReturnForm_ProofReading_Formnowise(startformno,endformno){
        window.location.href = '<?=base_url()?>/Registration/return_pdf/'+startformno + '/5' +'/'+endformno+'/';
    }

    function Print_Registration_Form_Proofreading_Groupwise(grp_cd){
        window.location.href =  '<?=base_url()?>/Registration/Print_Registration_Form_Proofreading_Groupwise/'+grp_cd + '/1'
    }
    function Print_Registration_Form_Proofreading_Formnowise(startformno,endformno){
        window.location.href =  '<?=base_url()?>/Registration/Print_Registration_Form_Proofreading_Groupwise/'+startformno + '/2' +'/'+endformno+'/';
    }
    $('#get_report').click( function(){
        var option =  $('input[type=radio][name=opt]:checked').val(); 

        if(option == "1")
        {
            var std_group = $('#std_group').val();
            if(std_group == "0"){
                alertify.error("Please Select a Group First !");
                return;
            }
            ReturnForm_Final_groupwise(std_group);
        }
        else if(option =="2")
        {
            var startformno = $('#strt_formNo').val();
            var endformno = $('#ending_formNo').val();
            if((startformno.length < 10 ||  startformno.length > 10) && (endformno.length < 10 ||  endformno.length > 10))
            {
                alertify.error("Invalid Form No.");
                return;
            }
            ReturnForm_Final_Formnowise(startformno,endformno);
        }
        else{
            return;
        }
    })
    $('#get_Proof').click( function(){
        var option =  $('input[type=radio][name=opt]:checked').val(); 

        if(option == "1")
        {
            var std_group = $('#std_group').val();
            if(std_group == "0"){
                alertify.error("Please Select a Group First !");
                return;
            }
            ReturnForm_ProofReading_groupwise(std_group);
        }
        else if(option =="2")
        {
            var startformno = $('#strt_formNo').val();
            var endformno = $('#ending_formNo').val();
            if((startformno.length < 10 ||  startformno.length > 10) && (endformno.length < 10 ||  endformno.length > 10))
            {
                alertify.error("Invalid Form No.");
                return;
            }
            ReturnForm_ProofReading_Formnowise(startformno,endformno);
        }
        else{
            return;
        }
    })
    $('#get_Proof_reg').click( function(){
        var option =  $('input[type=radio][name=opt]:checked').val(); 

        if(option == "1")
        {
            var std_group = $('#std_group').val();
            if(std_group == "0"){
                alertify.error("Please Select a Group First !");
                return;
            }
            Print_Registration_Form_Proofreading_Groupwise(std_group);
        }
        else if(option =="2")
        {
            var startformno = $('#strt_formNo').val();
            var endformno = $('#ending_formNo').val();
            if((startformno.length < 10 ||  startformno.length > 10) && (endformno.length < 10 ||  endformno.length > 10))
            {
                alertify.error("Invalid Form No.");
                return;
            }
            Print_Registration_Form_Proofreading_Formnowise(startformno,endformno);
        }
        else{
            return;
        }
    })

    function valid_profile()
    {
        var msg = "Are You Sure You want to SKIP this Form ?"

        var emis = $('#Profile_emis').val();
        var password = $('#Profile_password').val();
        var con_password = $('#Profile_conf_password').val();
        var phone = $('#Profile_phone').val();
        var cell = $('#Profile_cell').val();
        var email = $('#Profile_email').val();

        if(emis == ""){
            alertify.error("Please write Your Institute EMIS Code.");
            $('#Profile_emis').focus();
            return false;
        }
        if(email == ""){
            alertify.error("Please write Your Institute Email Address.");
            $('#Profile_email').focus();
            return false;
        }
        if(!isValidEmailAddress(email)){
            alertify.error("Please write Your VALID Institute Email Address.");
            $('#Profile_email').focus();
            return false;
        }
        if(password == ""){
            alertify.error("Please write Your Institute Password.");
            $('#Profile_password').focus();
            return false;
        }
        if(con_password == ""){
            alertify.error("Please write Confirm Password.");
            $('#Profile_conf_password').focus();
            return false;
        }
        if(password.length < 7){
            alertify.error("Please write Your Institute Password AT LEAST 7 CHARACTERS LONG.");
            $('#Profile_password').focus();
            return false;
        }
        if((password != con_password) || (con_password != password) ){
            alertify.error("Please write SAME PASSWORDS.");
            $('#Profile_password').focus();
            return false;
        }
        if(phone == ""){
            alertify.error("Please write Your Institute Phone No.");
            $('#Profile_phone').focus();
            return false;
        }
        if(cell == ""){
            alertify.error("Please write Your Institute Mobile No.");
            $('#Profile_cell').focus();
            return false;
        }
    }

    function ChallanForm_Reg9th_Regular(Batch_ID)
    {
        window.location.href = '<?=base_url()?>/Registration/ChallanForm_Reg9th_Regular/'+Batch_ID
    }
    function RevenueForm(Batch_ID)
    {
        window.location.href = '<?=base_url()?>/Registration/revenue_pdf/'+Batch_ID
    }
    function ReleaseForm(Batch_ID)
    {
        window.location.href = '<?=base_url()?>/Registration/BatchRelease/'+Batch_ID

    }
    function ReleaseForm_UPDATE(Batch_ID,Inst_Cd)
    {
        var msg = "Are You Sure You want to Delete this Batch ?"
        alertify.confirm(msg, function (e) {

            if (e) {
                
                window.location.href = '<?=base_url()?>BiseCorrection/BatchRelease_update/'+Batch_ID +'/'+Inst_Cd+'/'
            } else {
                

            }
        });

    }
    function RestoreBatch(Batch_ID)
    {
        window.location.href = '<?=base_url()?>/Registration/BatchRelease/'+Batch_ID

    }
    function RestoreBatch_UPDATE(Batch_ID,Inst_Cd)
    {
        var msg = "Are You Sure You want to Restore this Batch ?"
        alertify.confirm(msg, function (e) {

            if (e) {
                
                window.location.href = '<?=base_url()?>BiseCorrection/BatchRestore_update/'+Batch_ID +'/'+Inst_Cd+'/'
            } else {
                

            }
        });

    }

    function load_Bio_CS_Sub_NewEnrolement(sub1,sub3,sub5,sbu6,sbu7,sub8)
    {
        var NationalityVal = $("input[name=nationality]:checked").val();
        $('#sub1').empty();

        if(NationalityVal == "1")
        {
            $.each(sub1_Pak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );

                $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");
            }); 

        }
        else if (NationalityVal == "2")
        {
            var sub1 =  "<?php echo @$data[0]['sub1']; ?>";
            $.each(sub1_NonPak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );
                $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");
            }); 
        }

        // Check Religion and select sub........
        $("#sub3").empty();
        var Religion = $("input[name=religion]:checked").val();
        //console.log(Religion);
        console.log(Religion);
        if(Religion == "1")
        {

            $.each(sub3_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));
                $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");
            });

        }
        else if(Religion == "2")
        {
            var sub3 =  "<?php echo @$data[0]['sub3']; ?>";

            $.each(sub3_Non_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));
                $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");
            });
        }

        // Subject 5 ,6 ,7 and 8
        $("#sub5").empty();
        $("#sub6").empty();
        $("#sub7").empty();
        $("#sub8").empty();

        $("#sub5").append(new Option('MATHEMATICS',5));
        $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");
        $("#sub6").append(new Option('PHYSICS',6));
        $("#sub6 option[value='" + sub6 + "']").attr("selected","selected");
        $("#sub7").append(new Option('CHEMISTRY',7));
        $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");
        $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");
    }

    function Hum_Deaf_Subjects_NewEnrolement(sub6,sub7,sub8)
    {

        //debugger;
        var a = ['volvo','random data'];
        var b = ['random data'];
        $.each(a,function(i,val){
            var result=$.inArray(val,b);
            if(result!=-1)
                alert(result); 
        })
        var Elecgrp ="<?php echo @$grp_cd; ?>";

        var NationalityVal = $("input[name=nationality]:checked").val();
        console.log(NationalityVal);
        $('#sub1').empty();
        if(NationalityVal == "1")
        {
            console.log("Hi Pakistani ");
            $.each(sub1_Pak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );
                $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");
            }); 

        }
        else if (NationalityVal == "2")
        {
            console.log("Hi Foreigner Welcom to Pakistan :) ");
            $.each(sub1_NonPak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );
                $("#sub1 option[value='" + sub1 + "']").attr("selected","selected");
            }); 
        }

        // Check Religion and select sub........
        $("#sub3").empty();
        var Religion = $("input[name=religion]:checked").val();
        //console.log(Religion);
        console.log(Religion);
        if(Religion == "1")
        {
            console.log("Hi Muslim :)");
            $.each(sub3_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));
                $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");
            });

        }
        else if(Religion == "2")
        {
            console.log("Hi Non-Muslim :)");
            $.each(sub3_Non_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));
                $("#sub3 option[value='" + sub3 + "']").attr("selected","selected");
            });
        }

        $("#sub5").empty();
        $("#sub5 option[value='" + sub5 + "']").attr("selected","selected");
        $("#sub6").empty();
        $("#sub6 option[value='" + sub6 + "']").attr("selected","selected");
        $("#sub7").empty();
        $("#sub7 option[value='" + sub7 + "']").attr("selected","selected");
        $("#sub8").empty();
        $("#sub8 option[value='" + sub8 + "']").attr("selected","selected");


    }
    $(document).ready(function() {


        var error_BatchRelease = "<?php  echo @$BatchRelease_excep; ?>";
        var success_BatchRelease = "<?php  echo @$errors['BatchRelease_excep']; ?>";
        var BatchRelease_Op = "<?php  echo @$errors_RB_update; ?>";
        var BatchRestore_Op = "<?php  echo @$errors_RB_restore; ?>";
        if(BatchRelease_Op != "")
        {
            if(BatchRelease_Op == "success")
            {
                alertify.success("Batch Release Successfully");    
            }
            else if(BatchRelease_Op == "Fail")
            {
                alertify.error("A Problem occur, Please Try Again later.");
            }

        } 
        if(BatchRestore_Op != "")
        {
            if(BatchRelease_Op == "success")
            {
                alertify.success("Batch Restored Successfully");    
            }
            else if(BatchRelease_Op == "Fail")
            {
                alertify.error("A Problem occur, Please Try Again later.");
            }

        } 
        if(success_BatchRelease != "")
        {
            alertify.success(success_BatchRelease);
        } 
        if(error_BatchRelease != "")
        {
            alertify.error(error_BatchRelease);
        }  

        var msg = "<?php echo @$msg;?>";

        if(msg == 'success')
        {
            alertify.success('Profile Updated Successfully!');
        }
        else if(msg == 'error')
        {
            alertify.error('Profile Not Updated. Please try again latter.');
        }
        $(function () {
            $('#cand_name').keydown(function (e) {
                if (e.shiftKey || e.ctrlKey || e.altKey) {
                    e.preventDefault();
                } else {
                    var key = e.keyCode;
                    if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                        e.preventDefault();
                    }
                }
            });
        });
        $(function () {
            $('#father_name').keydown(function (e) {
                if (e.shiftKey || e.ctrlKey || e.altKey) {
                    e.preventDefault();
                } else {
                    var key = e.keyCode;
                    if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                        e.preventDefault();
                    }
                }
            });
        });
        $(function () {
            $('#MarkOfIden').keydown(function (e) {
                if (e.shiftKey || e.ctrlKey || e.altKey) {
                    e.preventDefault();
                } else {
                    var key = e.keyCode;
                    if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                        e.preventDefault();
                    }
                }
            });
        });
        //MarkOfIden
        $('#cand_name').focusout(function() 
            {

                var  name =  $('#cand_name').val();

                if ((name.toUpperCase().indexOf("MOHAMMAD") >= 0) || (name.toUpperCase().indexOf("MOHAMAD") >= 0) || (name.toUpperCase().indexOf("MUHAMAD") >= 0) || (name.toUpperCase().indexOf("MOOHAMMAD") >= 0) || (name.toUpperCase().indexOf("MOOHAMAD") >= 0) || (name.toUpperCase().indexOf("MOHD") >= 0) ) {
                    alertify.error("Incorrect Speccling of MUHAMMAD");
                    $('#cand_name').focus();                                    }
        })
        $('#father_name').focusout(function() 
            {

                var  name =  $('#father_name').val();

                if ((name.toUpperCase().indexOf("MOHAMMAD") >= 0) || (name.toUpperCase().indexOf("MOHAMAD") >= 0) || (name.toUpperCase().indexOf("MUHAMAD") >= 0) || (name.toUpperCase().indexOf("MOOHAMMAD") >= 0) || (name.toUpperCase().indexOf("MOOHAMAD") >= 0) || (name.toUpperCase().indexOf("MOHD") >= 0)  ) {
                    alertify.error("Incorrect Speccling of MUHAMMAD");
                    $('#father_name').focus();
                }
        })
        $('input[type=radio][name=opt]').change(function() {
            if (this.value == '1') {

                $('#formnowise_selected').css('display','none');
                $('#grp_selected').css('display','block');
            }
            else if (this.value == '2') {
                $('#grp_selected').css('display','none');
                $('#formnowise_selected').css('display','block');

            }
        });

        if($("#std_group").val() == "1")
        {
            load_Bio_CS_Sub_NewEnrolement();
            $("#sub8").append(new Option('Biology',8));
        }
        else if($("#std_group").val() == "7"){

            load_Bio_CS_Sub_NewEnrolement();
            $("#sub8").append(new Option('COMPUTER SCIENCE',78));
        }
        else if($("#std_group").val() == "8"){

            load_Bio_CS_Sub_NewEnrolement();
            $("#sub8").append(new Option('ELECTRICAL WIRING (OPT)',43));
        }
        else if($("#std_group").val() == "2"){


            $.each(sub7_Hum,function(val,text){

                $("#sub7").append(new Option(text,val));
            });
            $.each(sub8_Hum,function(val,text){

                $("#sub8").append(new Option(text,val));
            });

            var Elecgrp ="<?php echo @$grp_cd; ?>";
            var isgovt ="<?php echo @$isgovt; ?>";
            var sub7_selected ="<?php  echo @$data[0]['sub7']; ?>";
            var sub8_selected ="<?php echo @$data[0]['sub8']; ?>";
            var b = ['8'];
            var isElec = '0';
            $.each(Elecgrp,function(i,val){
                var result=$.inArray(val,b);

                if(result!=-1)
                {
                    isElec = 1;
                }
            })

            if(isgovt == 2)
            {
                if(isElec != 1)
                {
                    $("#sub7 option[value='43']").remove();
                    $("#sub8 option[value='43']").remove();
                }  
            }
            $("#sub7").val(sub7_selected);
            $("#sub8").val(sub8_selected);

        }
        var error_New_Enrolement ='<?php   if(@$excep != ""){echo @$excep['excep'];}  ?>';
        var  error_New_Enrolement_update ='<?php   if(@$data != ""){echo @$data[0]['excep'];}  ?>';

        if(error_New_Enrolement == 1)
        {
            alertify.success('Password Change Successfully');   
        }
        if(error_New_Enrolement.length > 1)
        {
            if(error_New_Enrolement == "success" )
            {
                alertify.success('Form Submitted Successfully');   
            }
            else
            {
                alertify.error(error_New_Enrolement);   
            }

        }
        if(error_New_Enrolement_update.length > 1)
        {
            if(error_New_Enrolement == "success" )
            {
                alertify.success('Form Updated Successfully');   
            }
            else
            {
                alertify.error(error_New_Enrolement_update);   
            }

        }
    });

    function DeleteForm(formrno)
    {
        var msg = "Are You Sure You want to Cancel this Form ?"
        alertify.confirm(msg, function (e) {

            if (e) {
                
                window.location.href ='<?php echo base_url(); ?>Registration/NewEnrolment_Delete/'+formrno;
            } else {
                

            }
        });
    }
    function downloadslip9th(rno)
    {
        window.location.href = '<?=base_url()?>/RollNoSlip/NinthRollNo/'+rno
    }
    function downloadgroupwise()
    {
        window.location.href = '<?=base_url()?>/RollNoSlip/MatricRollNoGroupwise/'+$("#std_group").val()
    }

    function load_Bio_CS_Sub()
    {
        var NationalityVal = $("input[name=nationality]:checked").val();
        $('#sub1').empty();
        if(NationalityVal == "1")
        {
            $.each(sub1_Pak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );
            }); 

        }
        else if (NationalityVal == "2")
        {
            console.log("Hi Foreigner Welcom to Pakistan :) ");
            $.each(sub1_NonPak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );
            }); 
        }

        // Check Religion and select sub........
        $("#sub3").empty();
        var Religion = $("input[name=religion]:checked").val();
        console.log(Religion);
        if(Religion == "1")
        {
            console.log("Hi Muslim :)");
            $.each(sub3_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));
            });

        }
        else if(Religion == "2")
        {
            console.log("Hi Non-Muslim :)");
            $.each(sub3_Non_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));
            });
        }

        // Subject 5 ,6 ,7 and 8
        $("#sub5").empty();
        $("#sub6").empty();
        $("#sub7").empty();
        $("#sub8").empty();

        $("#sub5").append(new Option('MATHEMATICS',5));
        $("#sub6").append(new Option('PHYSICS',6));
        $("#sub7").append(new Option('CHEMISTRY',7));

    }

    function Hum_Deaf_Subjects()
    {

        //alert(isElec);
        var NationalityVal = $("input[name=nationality]:checked").val();
        console.log(NationalityVal);
        $('#sub1').empty();
        if(NationalityVal == "1")
        {
            console.log("Hi Pakistani ");
            $.each(sub1_Pak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );
            }); 

        }
        else if (NationalityVal == "2")
        {
            console.log("Hi Foreigner Welcom to Pakistan :) ");
            $.each(sub1_NonPak_options, function(val, text) {
                $('#sub1').append( new Option(text,val) );
            }); 
        }

        // Check Religion and select sub........
        $("#sub3").empty();
        var Religion = $("input[name=religion]:checked").val();
        //console.log(Religion);
        console.log(Religion);
        if(Religion == "1")
        {
            console.log("Hi Muslim :)");
            $.each(sub3_Muslim,function(val,text){
                $("#sub3").empty();
                $("#sub3").append(new Option(text,val));
            });

        }
        else if(Religion == "2")
        {
            console.log("Hi Non-Muslim :)");
            $.each(sub3_Non_Muslim,function(val,text){
                $("#sub3").append(new Option(text,val));
                //$("#sub3").prop('selectedIndex', 2);
            });
        }

        $("#sub5").empty();
        $("#sub6").empty();
        $("#sub7").empty();
        $("#sub8").empty();




    }
    $("#sub6").change(function(){
        var sub6 = $("#sub6").val();
        var sub7 = $("#sub7").val();
        var sub8 = $("#sub8").val();
        if((sub6 == sub7)|| (sub6 == sub8))
        {
            alertify.error("Please choose Different Subjects" );
            $("#sub6").val('0');
            return;
        }
        console.log('Hi i am sub6 dropdown :) ');
    })

    $("#sub7").change(function(){
        console.log('Hi i am sub7 dropdown :) ');
        var sub6 = $("#sub6").val();
        var sub7 = $("#sub7").val();
        var sub8 = $("#sub8").val();

        console.log("sub7 = "+ sub7 + "  sub8 = "+ sub8);
        if((sub7 == sub8)|| (sub7 == sub6))
        {
            alertify.error("Please choose Different Subjects" );
            $("#sub7").val('0');
            return;
        }
        if((sub7 == 20 && sub8 == 21) || (sub7 == 21 && sub8 == 20)){
            alertify.error("Please choose Different Subjects as Double History is not allowed" );
            $("#sub7").val('0');
            return;
        }
    })

    $("#sub8").change(function(){
        var sub6 = $("#sub6").val();
        var sub7 = $("#sub7").val();
        var sub8 = $("#sub8").val();
        console.log("sub7 = "+ sub7 + "  sub8 = "+ sub8);
        if((sub7 == sub8)|| (sub8 == sub6))
        {
            alertify.error("Please choose Different Subjects" );
            $("#sub8").val('0');
            //$('sub8').trigger('change');
            // $("sub8")[0].selectedIndex = 0;
            return;
        }
        if((sub7 == 20 && sub8 == 21) || (sub7 == 21 && sub8 == 20)){
            alertify.error("Please choose Different Subjects as Double History is not allowed" );
            $("#sub8").val('0');
            // $('sub8 option:first-child').attr("selected", "selected");

            //$('sub8').trigger('change');
            // $("sub8")[0].selectedIndex = 0;
            return;
        }
        console.log('Hi i am sub8 dropdown :) ');
    })
    function remove_subjects()
    {
        $("#sub5").empty();
        $("#sub5p2").empty();
        $("#sub6").empty();
        $("#sub6p2").empty();
        $("#sub7").empty();
        $("#sub7p2").empty();
        $("#sub8").empty();
        $("#sub8p2").empty();
    }
    $("#pvtinfo_dist").change(function()
        {
            var distId =  $("#pvtinfo_dist").val();
            $('#pvtinfo_teh').empty();
            $('#pvtinfo_teh').append('<option value="0">SELECT TEHSIL</option>');
            $('#pvtZone').empty();
            $('#pvtZone').append('<option value="0">SELECT ZONE</option>');
            if(distId == 1){
                $("#pvtinfo_teh").append('<option value="1">KAMOKE</option>');
                $("#pvtinfo_teh").append('<option value="2">GUJRANWALA</option>');
                $("#pvtinfo_teh").append('<option value="3">WAZIRABAD</option>');
                $("#pvtinfo_teh").append('<option value="4">NOWSHERA VIRKAN</option>'); 
            }
            else if(distId == 2){
                $("#pvtinfo_teh").append('<option value="5">GUJRAT</option>');
                $("#pvtinfo_teh").append('<option value="6">KHARIAN</option>');
                $("#pvtinfo_teh").append('<option value="7">SARAI ALAMGIR</option>');
            }
            else if(distId == 3){
                $("#pvtinfo_teh").append('<option value="8">HAFIZABAD</option>');
                $("#pvtinfo_teh").append('<option value="9">PINDI BHATTIAN</option>');
            }
            else if(distId == 4){
                $("#pvtinfo_teh").append('<option value="10">MANDI BAHA-UD-DIN</option>');
                $("#pvtinfo_teh").append('<option value="11">PHALIA</option>');
                $("#pvtinfo_teh").append('<option value="12">MALAKWAL</option>');
            }
            else if(distId == 5){
                $("#pvtinfo_teh").append('<option value="13">NAROWAL</option>');
                $("#pvtinfo_teh").append('<option value="14">SHAKARGARH</option>');
                $("#pvtinfo_teh").append('<option value="19">ZAFARWAL</option>');
            }
            else if(distId == 6){
                $("#pvtinfo_teh").append('<option value="15">SIALKOT</option>');
                $("#pvtinfo_teh").append('<option value="16">PASRUR</option>');
                $("#pvtinfo_teh").append('<option value="17">DASKA</option>');
                $("#pvtinfo_teh").append('<option value="18">SAMBRIAL</option>');
            }


    });
    $("#pvtinfo_teh").change(function(){

        // alert("hello");
        var tehId =  $("#pvtinfo_teh").val();
        var gend = $("input[name=gender]:checked").val();
        //alert("hello "+tehId);
        if( gend==undefined)
        {
            alertify.error("Select Gender First.");
            $("#pvtinfo_teh").val(0);
            return false; 
        }
        else if(tehId == 0){
            alertify.error("Select Tehsil First.");
            $("#pvtinfo_teh").val(0);
            return false; 

        }
        else{

            jQuery.ajax({
                ////debugger;
                type: "POST",
                url: "<?php echo base_url(); ?>" + "Admission_9th_pvt/getzone/",
                dataType: 'json',
                data: {tehCode: tehId,gend:gend},
                beforeSend: function() {  $('.mPageloader').show(); },
                complete: function() { $('.mPageloader').hide();},
                success: function(json) {
                    var listitems;
                    //alert('Hi i am success');
                    // console.log("I am console");
                    // console.log(url);
                    $('#pvtZone').empty();
                    $('#pvtZone').append('<option value="0">SELECT ZONE</option>');
                    $.each(json, function (key, data) {

                        $.each(data, function (index, data) {
                            listitems +='<option value=' + data.zone_cd + '>' + data.zone_name + '</option>';

                        })
                    })
                    $('#pvtZone').append(listitems)


                },
                error: function(request, status, error){
                    alert(request.responseText);
                }
            });
        }

    })
    $("#pvtZone").change(function(){

        var tehId =  $("#pvtZone").val();

        var gend = $("input[name=gender]:checked").val();
        //alert("hello "+tehId);
        if( gend==undefined)
        {
            alertify.error("Select Gender First.");
            $("#pvtinfo_teh").val(0);
            $("#pvtZone").val(0);
            return false; 
        }

        else if(tehId == 0){
            alertify.error("Select Zone First.");
            $("#pvtinfo_teh").val(0);
            $("#pvtZone").val(0);
            return false; 

        }
        else{
            jQuery.ajax({

                type: "POST",
                url: "<?php echo base_url(); ?>Admission_9th_pvt/getcenter/",
                dataType: 'json',
                data: {pvtZone:tehId,gend:gend},
                beforeSend: function() {  $('.mPageloader').show(); },
                complete: function() { $('.mPageloader').hide();},
                success: function(json) {
                    var listitems='';
                    $.each(json.center, function (key, data) {

                        console.log(data);
                        listitems +='<label style="text-align: left; margin-top: -23px;">'+data.CENT_CD + '-' + data.CENT_NAME+'</label><br>';
                    })
                    $('#instruction').html('<h1 style="    margin-bottom: 28px;">Selected Zone Centre List </h1>'+listitems); 
                    $.fancybox("#instruction");
                },
                error: function(request, status, error){
                    alert(request.responseText);
                }
            });

        }

    })

    $("#pvtinfo_distr").change(function()
        {
            var distId =  $("#pvtinfo_distr").val();
            $('#pvtinfo_tehr').empty();
            $('#pvtinfo_tehr').append('<option value="0">SELECT TEHSIL</option>');
            $('#pvtZoner').empty();
            $('#pvtZoner').append('<option value="0">SELECT ZONE</option>');
            if(distId == 1){
                $("#pvtinfo_tehr").append('<option value="1">KAMOKE</option>');
                $("#pvtinfo_tehr").append('<option value="2">GUJRANWALA</option>');
                $("#pvtinfo_tehr").append('<option value="3">WAZIRABAD</option>');
                $("#pvtinfo_tehr").append('<option value="4">NOWSHERA VIRKAN</option>'); 
            }
            else if(distId == 2){
                $("#pvtinfo_tehr").append('<option value="5">GUJRAT</option>');
                $("#pvtinfo_tehr").append('<option value="6">KHARIAN</option>');
                $("#pvtinfo_tehr").append('<option value="7">SARAI ALAMGIR</option>');
            }
            else if(distId == 3){
                $("#pvtinfo_tehr").append('<option value="8">HAFIZABAD</option>');
                $("#pvtinfo_tehr").append('<option value="9">PINDI BHATTIAN</option>');
            }
            else if(distId == 4){
                $("#pvtinfo_tehr").append('<option value="10">MANDI BAHA-UD-DIN</option>');
                $("#pvtinfo_tehr").append('<option value="11">PHALIA</option>');
                $("#pvtinfo_tehr").append('<option value="12">MALAKWAL</option>');
            }
            else if(distId == 5){
                $("#pvtinfo_tehr").append('<option value="13">NAROWAL</option>');
                $("#pvtinfo_tehr").append('<option value="14">SHAKARGARH</option>');
                $("#pvtinfo_tehr").append('<option value="19">ZAFARWAL</option>');
            }
            else if(distId == 6){
                $("#pvtinfo_tehr").append('<option value="15">SIALKOT</option>');
                $("#pvtinfo_tehr").append('<option value="16">PASRUR</option>');
                $("#pvtinfo_tehr").append('<option value="17">DASKA</option>');
                $("#pvtinfo_tehr").append('<option value="18">SAMBRIAL</option>');
            }


    });
    $("#pvtinfo_tehr").change(function(){

        var tehId =  $("#pvtinfo_tehr").val();
        var gend =  $("#gend").val();


        if(gend ==0  || gend == '' || gend == null || gend==undefined)
        {
            alertify.error("Select Gender First.");
            $("#pvtinfo_tehr").val(0);
            return false; 
        }
        else if(tehId == 0){
            alertify.error("Select Zone First.");
            return false;
        }
        else{

            jQuery.ajax({

                type: "POST",
                url: "<?php echo base_url(); ?>" + "Admission_9th_pvt/getzone/",
                dataType: 'json',
                data: {tehCode: tehId,gend:gend},
                beforeSend: function() {  $('.mPageloader').show(); },
                complete: function() { $('.mPageloader').hide();},
                success: function(json) {
                    var listitems;

                    $('#pvtZoner').empty();
                    $('#pvtZoner').append('<option value="0">SELECT ZONE</option>');
                    $.each(json, function (key, data) {

                        $.each(data, function (index, data) {
                            listitems +='<option value=' + data.zone_cd + '>' + data.zone_name + '</option>';
                        })
                    })
                    $('#pvtZoner').append(listitems)
                },
                error: function(request, status, error){
                    alert(request.responseText);
                }
            });
        }

    })
    $("#pvtZoner").change(function(){

        var tehId =  $("#pvtZoner").val();

        var gend =  $("#gend").val();

        if(gend ==0  || gend == '' || gend == null || gend==undefined)
        {
            alertify.error("Select Gender First.");
            $("#pvtZoner").val(0);
            return false; 
        }
        else if(tehId == 0){
            alertify.error("Select Zone First.");
            return false;
        }

        else{
            jQuery.ajax({

                type: "POST",
                url: "<?php echo base_url(); ?>Admission_9th_pvt/getcenter/",
                dataType: 'json',
                data: {pvtZone:tehId,gend:gend},
                beforeSend: function() {  $('.mPageloader').show(); },
                complete: function() { $('.mPageloader').hide();},
                success: function(json) {
                    var listitems='';
                    //$('#instruction').empty();
                    $.each(json.center, function (key, data) {

                        console.log(data);
                        listitems +='<label style="text-align: left; margin-top: -23px;">'+data.CENT_CD + '-' + data.CENT_NAME+'</label><br>';
                    })
                    $('#instruction').html('<h1 style="    margin-bottom: 28px;">Selected Zone Centre List </h1>'+listitems); 
                    $.fancybox("#instruction");
                },
                error: function(request, status, error){
                    alert(request.responseText);
                }
            });

        }

    })

    function examchecks()
    {
        var pvtinfo_distr = $("#pvtinfo_distr").val();
        var pvtinfo_tehr = $("#pvtinfo_tehr").val();
        var pvtZoner = $("#pvtZoner").val();

        if(pvtinfo_distr == 0)
        {
            alertify.error("Please Select District.");

            $('#pvtinfo_distr').focus();
            return false;   
        }
        else if(pvtinfo_tehr == 0)
        {
            alertify.error("Please Select Tehsil.");
            $('#pvtinfo_tehr').focus();
            return false;   
        }
        else if(pvtZoner == 0)
        {
            alertify.error("Please Select Zone.");
            $('#pvtZoner').focus();
            return false;   
        }
    }

    function validateForm() 
    {

        var x = document.forms["registration"]["matrno"].value;
        var y = document.forms["registration"]["formid"].value;
        if (x == null || x == "") {
            $("#matrno").css('border', '1px solid red');
            return false;
        }
        if (y == null || y == "") {
            $("#formid").css('border', '1px solid red');
            return false;
        }
    }
    $("#std_group").change(function()
        {


            var grp_cd = $("#std_group").val();
            //alert(grp_cd);

            // If Science with Biology group selected then 
            if(grp_cd == "1")
            {

                // Check Nationality and select appropriate Subject1 against candidate Nationality :)
                load_Bio_CS_Sub();
                $("#sub8").append(new Option('Biology',8));

            }
            else if(grp_cd == "7")
            {
                load_Bio_CS_Sub();
                $("#sub8").append(new Option('COMPUTER SCIENCE',78));
                //    alert('hello  Sweet Heart ! I love You UMMMMAH :) ') 
            }
            else if (grp_cd == "8")
            {
                load_Bio_CS_Sub();
                $("#sub8").append(new Option('ELECTRICAL WIRING (OPT)',43));
                //ELECTRICAL WIRING (OPT)
            }

            else if(grp_cd == "2")
            {

                Hum_Deaf_Subjects();
                $.each(sub5_Hum,function(val,text){
                    $("#sub5").append(new Option(text,val));
                });
                $.each(sub6_Hum,function(val,text){
                    $("#sub6").append(new Option(text,val));
                });

                $.each(sub7_Hum,function(val,text){

                    $("#sub7").append(new Option(text,val));
                });
                $.each(sub8_Hum,function(val,text){

                    $("#sub8").append(new Option(text,val));
                });
                var Elecgrp ="<?php echo @$grp_cd; ?>";
                var isgovt ="<?php echo @$isgovt; ?>";
                var b = ['8'];
                var isElec = '0';
                $.each(Elecgrp,function(i,val){
                    var result=$.inArray(val,b);

                    if(result!=-1)
                    {
                        isElec = 1;
                    }
                })

                if(isgovt == 2)
                {
                    if(isElec != 1)
                    {
                        $("#sub7 option[value='43']").remove();
                        $("#sub8 option[value='43']").remove();
                    }  
                }


                var Gender = $("input[name=gender]:checked").val();

                if(Gender == "2")
                {

                    $("#sub8").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                    $("#sub7").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                }
                else
                {
                    dropdownElement.find('sub8[value=13]').remove();
                }


            }
            else if(grp_cd == "5")
            {
                Hum_Deaf_Subjects();
                $.each(sub5_Deaf,function(val,text){
                    $("#sub5").append(new Option(text,val));
                });
                $.each(sub6_Deaf,function(val,text){
                    $("#sub6").append(new Option(text,val));
                });
                $.each(sub7_Deaf,function(val,text){
                    $("#sub7").append(new Option(text,val));
                });
                $.each(sub8_Deaf,function(val,text){
                    $("#sub8").append(new Option(text,val));
                });
            }
            else if (grp_cd == "0")
            {
                remove_subjects();
            }


    });

    var phone = "<?php echo @$field_status['phone']; ?>";
    var cell = "<?php echo @$field_status['cell']; ?>";
    var emis = "<?php echo @$field_status['emis']; ?>";
    $("#bay_form,#father_cnic").mask("99999-9999999-9",{placeholder:"_"});
    $("#dob,#dateofadmission").mask("99-99-9999",{placeholder:"_"});
    $("#mob_number").mask("9999-9999999",{placeholder:"_"});
    $("#Profile_cell").mask("9999-9999999",{placeholder:"_"});
    $("#Profile_phone").mask("999-9999999",{placeholder:"_"});

    if(phone =='0'){
        $("#info_phone").mask("999-9999999",{placeholder:"_"});
    }
    if(cell == '0'){
        $("#info_cellNo").mask("9999-9999999",{placeholder:"_"});
    }
    if(cell == '0'){
        $("#Info_emis").mask("99999990",{placeholder:""});
    }

    var nationality = $('input:radio[name="nationality"]:checked').val();
    if(nationality == 1) {
        $("#bay_form","#father_cnic").mask("99999-9999999-9",{placeholder:"_"});
    }else{
        $("#bay_form","#father_cnic").mask("****************************",{placeholder:""});
    }

    $('input:radio[name="nationality"]').change(function(){
        if($(this).val() == 1) {
            $("#father_cnic").mask("99999-9999999-9",{placeholder:"_"});
            $("#bay_form").mask("99999-9999999-9",{placeholder:"_"});
            $("#sub1").empty(); 
            $("#sub1").prepend('<option selected="selected" value="1"> URDU </option>');

        }
        else
        {
            $("#father_cnic").unmask();
            $("#bay_form").unmask();
            $("#sub1").empty(); 
            $("#sub1").prepend("<option selected='selected' value='11'> GEOGRAPHY OF PAKISTAN </option>");
            $("#sub1").prepend("<option  value='1'> URDU </option>");
        }
    });

    $('input:radio[name="religion"]').change(function(){
        if($(this).val() == 1) {

            $("#sub3").empty(); 
            $("#sub3").prepend('<option selected="selected" value="3"> ISLAMIYAT (COMPULSORY) </option>');
        }else{

            $("#sub3").empty(); 
            $("#sub3").prepend("<option selected='selected' value='51'> ETHICS </option>");
            $("#sub3").prepend("<option  value='3'> ISLAMIYAT (COMPULSORY) </option>");
        }
    });

    var is_muslim    = $('input:radio[name="religion"]:checked').val();  
    var is_pakistani = $('input:radio[name="nationality"]:checked').val(); 
    var gender = $('input:radio[name="gender"]:checked').val(); 
    var id           = $('#std_group').val();

    $('input[type=radio][name=batch_opt]').change(function() {
        if (this.value == '1') {
            window.location.href = '<?=base_url()?>/Registration/CreateBatch/'+'96/1/';
        }
        else  if (this.value == '2') {
            window.location.href = '<?=base_url()?>/Registration/CreateBatch/'+'97/2/';
        }
        else  if(this.value == 3){
            window.location.href = '<?=base_url()?>/Registration/CreateBatch/'+'98/3';
        }

    });

    $( "#std_groups" ).change(function () {
        if (this.value == '1') {
            // 1 biology   2 humanities   5 deaf and dumb  7 computer science  8 electrical wiring 
            window.location.href = '<?=base_url()?>/Registration/CreateBatch/'+'96/3/1/';
        }
        else  if (this.value == '2') {
            window.location.href = '<?=base_url()?>/Registration/CreateBatch/'+'97/3/2/';
        }
        else  if(this.value == '5'){
            window.location.href = '<?=base_url()?>/Registration/CreateBatch/'+'98/3/5/';
        }
        else  if(this.value == '7'){
            window.location.href = '<?=base_url()?>/Registration/CreateBatch/'+'98/3/7/';
        }
        else  if(this.value == '8'){
            window.location.href = '<?=base_url()?>/Registration/CreateBatch/'+'98/3/8/';
        }

    })
</script>

<script type="text/javascript">
    var msg_cd = "<?php  echo @$msg_status;  ?>";
    if(msg_cd == "0")
    {

    }
    else if(msg_cd == "success")
    {
        alertify.success('Form Updated Successfully! ');
    }
    else if(msg_cd == "3")
    {
        alertify.error("No Students in this Group!");
    }
    function makebatch_groupwise(){

        
        var option =  $('input[type=radio][name=batch_opt]:checked').val(); 
        if(option == "3")
        {
            if($("#std_groups").val() == ""  || $("#std_groups").val() == 0)
            {
                alertify.error("Please Select Group First!") ;
            }
            else{
                var msg = "<img src='<?php echo base_url(); ?>assets/img/note_for_batch.jpg' alt='logo' style='width:800px; height: auto;' />"
                alertify.confirm(msg, function (e) {

                    if (e) {
                        window.location.href = '<?=base_url()?>/Registration/Make_Batch_Group_wise/'+$("#std_groups").val()+'/0';
                    } 


                });
            }
        }
        else if(option == "1" || option == "2")
        {
            window.location.href = '<?=base_url()?>/Registration/Make_Batch_Group_wise/'+'0/'+option+'/';
        }
        return false;



    }
    function makebatch_formnowise(){

        if( $('input[name="chk[]"]:checked').length > 0 )
        {
            var msg = "<img src='<?php echo base_url(); ?>assets/img/note_for_batch.jpg' alt='logo' style='width:800px; height: auto;' />"

            alertify.confirm(msg, function (e) {

                if (e) {
                    
                    $( "#frmchk" ).submit();
                }
                else {
                    

                }
            });

        }
        else
        {
            alertify.error("Please Select Forms First!") ;
            return false;
        }
    }
    function logout(){
        var msg = "Are you Sure You want to LOGOUT?"

        alertify.confirm(msg, function (e) {

            if (e) {
                
                window.location.href ='<?php echo base_url(); ?>login/logout';
            } 
        });
    }
</script>
<script type="text/javascript">
    var error = '<?php echo @$error_msg; ?>';
    if(error > 0){
        alertify.error("Currently there is not student against this subject group.!") ;
    }

    function uplaodpics()
    {
        $( "#uplodpics" ).submit();
    }

</script>

</body>
</html>