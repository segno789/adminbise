

<div class="container-fluid ">
    <div style="text-align: center; background:#3187bf; color: white;  margin-bottom: 5px; height: 40px;">
        &copy; 2017 BISE Gujranwala, All Rights Reserved. 
    </div>
</div>

</div>


<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/alertify.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/source/jquery.fancybox.pack.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/source/jquery.fancybox.js"></script>    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>

<script type="text/javascript">

    var otable =   $('#data-table').dataTable({
        "sPaginationType": "full_numbers",
        "cache": true
    });

    function issubmit_sel_cancel()
    {
        //debugger;
        var msg = "Are You Sure You want to Cancel Admissions of Selected Students ?"

        //var option =  $('input[type=radio][name=chk]:checked').val(); 
        if( $('input[name="chk[]"]:checked').length > 0 )
        {
            alertify.confirm(msg, function (e) {

                if (e) {
                    $("#isformwise").val("3");
                    $('#form_make_adm').submit();
                    // window.location.href = '<?=base_url()?>index.php/Admission_9th_reg/NewEnrolment_update/'
                } 


            });
        }
        else{  
            alertify.error("Please Select Checkbox First !")
        }


        return false;

        alertify.confirm(msg, function (e) {

            if (e) {
                // user clicked "ok"
                window.location.href = '<?=base_url()?>index.php/Admission_9th_reg/NewEnrolment_update/'
            } else {
                // user clicked "cancel"

            }
        }); 
    }
    function issubmit_all()
    {
        if($("#make_adm9th_groups").val() == ""  || $("#make_adm9th_groups").val() == 0)
        {
            alertify.error("Please Select Group First!") ;
        }
        else{
            var msg = "Are you Sure You want to make Admissions to All Students of Selected Group ?"
            //var msg = "Are You Sure You want to Cancel this Form ? <img src='<?php //echo base_url(); ?>assets/img/note_for_batch.jpg' alt='logo' style='width:30px; height: 50px;' />"
            alertify.confirm(msg, function (e) {

                if (e) {
                    $("#isformwise").val("2");
                    $('#form_make_adm').submit(); 
                } 


            });

        }
    }
    $(document).ready(function(){

        function Checkfiles_corr()
        {
            var fup = document.getElementById('image');
            var fileName = fup.value;
            // alert('File Name is = '+ fileName);
            var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
            if(ext == "jpg" )
            {
                //$("#corr_previewImg")
                $('#previewImg').attr('src');
                return true;
            } 
            else
            {
                alert("Upload  .jpg images only");
                fup.value = null;
                fup.focus();
                return false;
            }
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
            if(reason.length < 5 )
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


            window.location.href = '<?=base_url()?>Admission_9th_reg/Batchlist_INSERT/';
        }






        /* $('.check').toggle(function(){
        var allPages = otable.fnGetNodes();
        $('input[type="checkbox"]', allPages).prop('checked', true);
        $(this).text('Uncheck All')
        },function(){
        $('input[type="checkbox"]', allPages).prop('checked', false);
        $(this).text('Check All');        
        });  */


        $("#bay_form,#father_cnic").mask("99999-9999999-9",{placeholder:"_"});
        $("#dob,#dateofadmission").mask("99-99-9999",{placeholder:"_"});
        $("#mob_number").mask("9999-9999999",{placeholder:"_"});
        $( "#batch_real_PaidDate" ).datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true, changeYear: true, startDate:new Date() }).val();

        $( "#dob" ).datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true, changeYear: true, maxDate: new Date(2003, 7,1),yearRange: '1970:2003'}).val();

        var spl_cd = "<?php   echo @$spl_cd; ?>";
        var err ='<?php echo @$error; ?>';
        if(err != ""){
            alertify.error("No data found against your submitted record! Please check your informaiton again.");
        }
        else if(spl_cd != "")
        {
            if(spl_cd == "chance")
            {
                alertify.error("This Candidate is not eligible due to NO chance in this exam!");
            } //exam_type3
            else if(spl_cd == "exam_type3")
            {
                alertify.error("This Candidate is not eligible due to FULL FAIL!");
            } 
            else if(spl_cd != "3")
            {
                alertify.error("Please  rectify  "+spl_cd+" before proceeding further from MATRIC BRANCH !"); 
            }   

        } 
        var error_New_Enrolement ='<?php   if(@$excep != ""){echo @$excep['excep'];}  ?>';
        var  error_New_Enrolement_update ='<?php   if(@$data != ""){echo @$data[0]['excep'];}  ?>';
        if(error_New_Enrolement.length > 1)
        {
            if(error_New_Enrolement == "success" )
            {
                // alert('Form Submitted Successfully');
                alertify.success('Form Submitted Successfully');   
            }
            else
            {
                // alert('ehll');
                alertify.error(error_New_Enrolement);   
            }

        }
        if(error_New_Enrolement_update.length > 1)
        {
            if(error_New_Enrolement == "success" )
            {
                //alert('Form Updated Successfully');
                alertify.success('Form Updated Successfully');   
            }
            else
            {
                //  alert('ehll');
                alertify.error(error_New_Enrolement_update);   
            }

        }

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
        // $.fancybox("#center");
        $('.mPageloader').hide();
        // $( "#dob" ).datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true, changeYear: true, maxDate: new Date(2001, 7,1),yearRange: '1970:2001'}).val();

        $("#formid").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
                // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
        $("#proceed").click(function(){
            var isreg =  $('input[name=candidate]:checked', '#options').val();
            if(isreg==1){
                window.location.href='<?php  echo base_url(); ?>Admission/matric_default';
            }
            else{
                window.location.href='<?php  echo base_url(); ?>login'  
            }
            console.log(isreg);
        })

        $("#btndwnForm").click(function(){
            var formno = $("#formid").val();
            var dob = $("#dob").val();


            if(formno == "")
            {
                alertify.error("Please write Form No.");
                return false;    
            }
            else if(formno.length != 6)
            {
                alertify.error("Please write Valid Form No.");
                return false;    
            }
            else if(dob == "")
            {
                alertify.error("Please write Date of Birth.");
                return false;        
            }
            else
            {
                alertify.log("Please wait while your form is downloading....")    
                downloadform();    
            }


        })
        function downloadform(){
            //debugger;
            var formno = $("#formid").val();
            var dob = $("#dob").val();
            if(formno == ""){
                return false;
            }
            if(dob == ""){
                return false;
            }
            window.location.href='<?php  echo base_url(); ?>Admission_9th_pvt/checkFormNo_then_download/'+formno+'/'+dob;  
        }
        function ReturnForm_Final_groupwise(grp_cd){
            window.location.href = '<?=base_url()?>Admission_9th_reg/return_pdf/'+grp_cd + '/2'
        }
        // window.location.href = '<?=base_url()?>Admission_matric/revenue_pdf/'+Batch_ID
        function ReturnForm_Final_groupwise(grp_cd){
            window.location.href = window.location.href = '<?=base_url()?>Admission_matric/revenue_pdf/'+grp_cd/'2'; 
        }
        function ReturnForm_Final_Formnowise(startformno,endformno){
            window.location.href = '<?=base_url()?>Admission_9th_reg/return_pdf/'+startformno + '/3' +'/'+endformno +'/';
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
        $("#pvtinfo_dist").change(function(){
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
            //alert("hello "+tehId);
            if(tehId == 0){
                alert("Select Tehsil First");
            }
            else{

                jQuery.ajax({
                    ////debugger;
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Admission/getzone/",
                    dataType: 'json',
                    data: {tehCode: tehId},
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

                            //console.log(key)

                            $.each(data, function (index, data) {

                                // console.log('Zone Name :', data.zone_name , ' Zone Code : ' ,data.zone_cd)
                                listitems +='<option value=' + data.zone_cd + '>' + data.zone_name + '</option>';
                                //$('#pvtZone').append('<option value=' + data.zone_cd + '>' + data.zone_name + '</option>');
                                //console.log('Zone Name :', data.zone_cd)
                                //console.log('Zone Name :', data)
                            })
                        })
                        $('#pvtZone').append(listitems)
                        /*console.log(data.length);
                        for (var i = 0; i < data.length; i++) {

                        console.log(" Thesil : "+ data[i].zone_name);
                        // var checkBox = "<input type='checkbox' data-price='" + data[i].Price + "' name='" + data[i].Name + "' value='" + data[i].ID + "'/>" + data[i].Name + "<br/>";
                        // $(checkBox).appendTo('#modifiersDiv');
                        }*/
                        //if (json)
                        //{
                        //var obj = jQuery.parseJSON(json);
                        //  console.log(json.teh[0].zone_name);
                        //alert( obj['teh']['Class']);
                        //   alert(res.Sess);
                        //   alert(res.Class);
                        //   //debugger;
                        //   Show Entered Value
                        //   jQuery("div#result").show();
                        //   jQuery("div#value").html(res.username);
                        //   jQuery("div#value_pwd").html(res.pwd);
                        //}

                    },
                    error: function(request, status, error){
                        alert(request.responseText);
                    }
                });
            }

        })
        $("#pvtZone").change(function(){

            // alert("hello"); getcenter
            //  $.fancybox("#center");
            var tehId =  $("#pvtZone").val();
            var gend = $("#gen").val();
            //alert("hello "+tehId);
            if(tehId == 0){
                alert("Select Zone First");
            }
            else{
                jQuery.ajax({

                    type: "POST",
                    url: "<?php echo base_url(); ?>Admission/getcenter/",
                    dataType: 'json',
                    data: $("#myform").serialize(),
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
        $('input[type=radio][name=batch_opt]').change(function() {
            // //debugger;
            // alert(this.value + "  Transfer Thai Gayo");
            if (this.value == '1') {
                window.location.href = '<?=base_url()?>Admission_9th_reg/CreateBatch/'+'96/1/';
                // alert("Allot Thai Gayo Bhai");
            }
            else  if (this.value == '2') {
                window.location.href = '<?=base_url()?>Admission_9th_reg/CreateBatch/'+'97/2/';
                //  alert("Transfer Thai Gayo");
            }
            else  if(this.value == 3){
                window.location.href = '<?=base_url()?>Admission_9th_reg/CreateBatch/'+'98/3';
                //alert("Transfer Thai Gayo");
            }

        });
        $( "#std_groups" ).change(function () {
            if (this.value == '1') {
                // 1 biology   2 humanities   5 deaf and dumb  7 computer science  8 electrical wiring 
                window.location.href = '<?=base_url()?>Admission_9th_reg/CreateBatch/'+'96/3/1/';
                //  alert("Allot Thai Gayo Bhai");
            }
            else  if (this.value == '2') {
                window.location.href = '<?=base_url()?>Admission_9th_reg/CreateBatch/'+'97/3/2/';
                // alert("Transfer Thai Gayo");
            }
            else  if(this.value == '5'){
                window.location.href = '<?=base_url()?>Admission_9th_reg/CreateBatch/'+'98/3/5/';
                // alert("Transfer Thai Gayo");
            }
            else  if(this.value == '7'){
                window.location.href = '<?=base_url()?>Admission_9th_reg/CreateBatch/'+'98/3/7/';
                //  alert("Transfer Thai Gayo");
            }
            else  if(this.value == '8'){
                window.location.href = '<?=base_url()?>Admission_9th_reg/CreateBatch/'+'98/3/8/';
                //  alert("Transfer Thai Gayo");
            }

            else{
                $("#create_batch").attr("disabled","disabled"); 
            }

        });

    });

    var valArray = [];
    var $valuesContainer = $('#CheckedFormno');
    var $batchformSelectedid = $("#CheckedFormno_createBatch");
    //var $countContainer = $('.selectCount');

    $(document).on('change',"input:checkbox", function () {

        var value = $(this).val();

        if(this.checked) {
            valArray.push(value);    // record the value of the checkbox to valArray
        } else {
            valArray.pop(value);    // remove the recorded value of the checkbox
        }

        if(valArray.length>0)
        {
            $('#create_batch2').removeAttr("disabled").css('left', function(){ return $(this).offset().left; })
            .animate({"left":"0px"}, "slow");
            $('#create_batch').attr("disabled","disabled").css('left', function(){ return $(this).offset().left; })
            .animate({"left":"0px"}, "slow");

        }
        else
        {
            $('#create_batch2').attr("disabled", "disabled").css('left', function(){ return $(this).offset().left; })
            .animate({"left":"0px"}, "slow");
            if($("#std_groups").val() > 0)
            {
                $('#create_batch').removeAttr("disabled").css('left', function(){ return $(this).offset().left; })
                .animate({"left":"0px"}, "slow");                                                     
            }
            else
            {
                $('#create_batch').attr("disabled","disabled").css('left', function(){ return $(this).offset().left; })
                .animate({"left":"0px"}, "slow");
            }

            //console.log("none state");
        }

    });

    function issubmit_sel()
    {
        //debugger;
        var msg = "Are You Sure You want to Make Admissions of Selected Students ?"

        //var option =  $('input[type=radio][name=chk]:checked').val(); 

        if( valArray.length > 0 )
        {

            $valuesContainer.val(valArray.join(','));
            // alert(valArray);
            alertify.confirm(msg, function (e) {

                if (e) {

                    $("#isformwise").val("1");

                    /*var allPages = otable.fnGetNodes();
                    $('input[type="checkbox"]', allPages).prop('checked', true); */
                    /*var protCaseInstArray = [];
                    $(otable.fnGetNodes()).find("input[name='chk[]']:checked").each(function() { protCaseInstArray.push($(this).val()); }); 
                    console.log(protCaseInstArray);
                    */ 
                    //$('#form_make_adm').submit();

                    // $('#form_make_adm').submit(function(e){


                    $('#form_make_adm').submit();
                    // });
                    // window.location.href = '<?=base_url()?>index.php/Admission_9th_reg/NewEnrolment_update/'
                } 


            });
        }
        else{  
            alertify.error("Please Select Checkbox First !")
        }


        return false;

        alertify.confirm(msg, function (e) {

            if (e) {
                // user clicked "ok"
                window.location.href = '<?=base_url()?>index.php/Admission_9th_reg/NewEnrolment_update/'
            } else {
                // user clicked "cancel"

            }
        }); 
    }
    function ChallanForm_Adm9th_Regular(Batch_ID)
    {
        window.location.href = '<?=base_url()?>Admission_9th_reg/ChallanForm_Reg9th_Regular/'+Batch_ID
    }
    function ChallanForm_Adm10th_Regular(Batch_ID)
    {
        window.location.href = '<?=base_url()?>/index.php/Admission_9th_reg/ChallanForm_Adm10th_Regular/'+Batch_ID
    }
    function Revenue_list_batchwise_9thAdm(grp_cd){
        window.location.href =  '<?=base_url()?>Admission_9th_reg/revenue_pdf/'+grp_cd + '/9'
    }
    function Revenue_list_groupwise(grp_cd){
        window.location.href =  '<?=base_url()?>Admission_9th_reg/revenue_pdf/'+grp_cd + '/4'
    }
    function Revenue_list_Formnowise(startformno,endformno){
        window.location.href = '<?=base_url()?>Admission_9th_reg/revenue_pdf/'+startformno + '/5' +'/'+endformno+'/';
    }
    function Print_Admission_Form_Proofreading_Groupwise(grp_cd){
        window.location.href =  '<?=base_url()?>Admission_9th_reg/Print_Admission_Form_Groupwise/'+grp_cd + '/1'
    }
    function Print_Admission_Form_BatchId(grp_cd){
        window.location.href =  '<?=base_url()?>Admission_9th_reg/Print_Admission_Form_Groupwise/'+grp_cd + '/3'
    }
    function Print_Admission_Form_Proofreading_Formnowise(startformno,endformno){
        window.location.href =  '<?=base_url()?>Admission_9th_reg/Print_Admission_Form_Groupwise/'+startformno + '/2' +'/'+endformno+'/';
    }
    $( "#make_adm9th_groups" ).change(function () {
        if (this.value == '1') {
            // 1 biology   2 humanities   5 deaf and dumb  7 computer science  8 electrical wiring 
            window.location.href = '<?=base_url()?>Admission_9th_reg/StudentsData/'+'96/3/1/';
            //  alert("Allot Thai Gayo Bhai");
        }
        else  if (this.value == '2') {
            window.location.href = '<?=base_url()?>Admission_9th_reg/StudentsData/'+'97/3/2/';
            // alert("Transfer Thai Gayo");
        }
        else  if(this.value == '5'){
            window.location.href = '<?=base_url()?>Admission_9th_reg/StudentsData/'+'98/3/5/';
            // alert("Transfer Thai Gayo");
        }
        else  if(this.value == '7'){
            window.location.href = '<?=base_url()?>Admission_9th_reg/StudentsData/'+'98/3/7/';
            //  alert("Transfer Thai Gayo");
        }
        else  if(this.value == '8'){
            window.location.href = '<?=base_url()?>Admission_9th_reg/StudentsData/'+'98/3/8/';
            //  alert("Transfer Thai Gayo");
        }

    })


    function makebatch_groupwise(){

        // user clicked "ok"
        var option =  $('input[type=radio][name=batch_opt]:checked').val(); 
        if(option == "3")
        {
            if($("#std_groups").val() == ""  || $("#std_groups").val() == 0)
            {
                alertify.error("Please Select Group First!") ;
            }
            else{
                var msg = "Are You Sure you want to make Batch ?" // var msg = "<img src='<?php echo base_url(); ?>assets/img/note_for_batch.jpg' alt='logo' style='width:800px; height: auto;' />"
                //var msg = "Are You Sure You want to Cancel this Form ? <img src='<?php echo base_url(); ?>assets/img/note_for_batch.jpg' alt='logo' style='width:30px; height: 50px;' />"
                alertify.confirm(msg, function (e) {

                    if (e) {
                        window.location.href = '<?=base_url()?>Admission_9th_reg/Make_Batch_Group_wise/'+$("#std_groups").val()+'/0';
                    } 


                });
            }
        }
        else if(option == "1" || option == "2")
        {
            window.location.href = '<?=base_url()?>Admission_9th_reg/Make_Batch_Group_wise/'+'0/'+option+'/';
        }
        return false;



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
                $("#sub7").append(new Option('Biology',8));

            }
            else if(grp_cd == "7")
            {
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('COMPUTER SCIENCE',78));
                //    alert('hello  Sweet Heart ! I love You UMMMMAH :) ') 
            }
            else if (grp_cd == "8")
            {
                load_Bio_CS_Sub();
                $("#sub7").append(new Option('ELECTRICAL WIRING (OPT)',43));
                //ELECTRICAL WIRING (OPT)
            }

            else if(grp_cd == "2")
            {

                Hum_Deaf_Subjects();
                $.each(sub5_Hum,function(val,text){
                    $("#sub4").append(new Option(text,val));
                });
                $.each(sub6_Hum,function(val,text){
                    $("#sub5").append(new Option(text,val));
                });

                $.each(sub7_Hum,function(val,text){

                    $("#sub6").append(new Option(text,val));
                });
                $.each(sub8_Hum,function(val,text){

                    $("#sub7").append(new Option(text,val));
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
                        // $("#sub7")
                        //$("#sub7 option[value='43']").remove();
                        //$("#sub8 option[value='43']").remove();
                        $("#sub6 option[value='43']").remove();
                        $("#sub7 option[value='43']").remove();

                        // $("#sub7").find('option[value=43]').remove();
                        // alert("removed");
                    }  
                }


                var Gender = $("input[name=gender]:checked").val();
                //console.log(Religion);
                if(Gender == "2")
                {

                    $("#sub6").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                    $("#sub7").append(new Option('ELEMENTS OF HOME ECONOMICS',13));
                }
                else
                {
                    // alert('i am removed');
                    dropdownElement.find('sub7[value=13]').remove();


                }


            }
            else if(grp_cd == "5")
            {
                Hum_Deaf_Subjects();
                $.each(sub5_Deaf,function(val,text){
                    $("#sub4").append(new Option(text,val));
                });
                $.each(sub6_Deaf,function(val,text){
                    $("#sub5").append(new Option(text,val));
                });
                $.each(sub7_Deaf,function(val,text){
                    $("#sub6").append(new Option(text,val));
                });
                $.each(sub8_Deaf,function(val,text){
                    $("#sub7").append(new Option(text,val));
                });
            }
            else if (grp_cd == "0")
            {
                remove_subjects();
            }


    });
    function makebatch_formnowise(){

        if(valArray.length > 0 )
        {
            var msg = "Are you sure you want to make Batch ?" //var msg = "<img src='<?php echo base_url(); ?>assets/img/note_for_batch.jpg' alt='logo' style='width:800px; height: auto;' />"
            $batchformSelectedid.val(valArray.join(','));
            alertify.confirm(msg, function (e) {

                if (e) {
                    // user clicked "ok"
                    $( "#frmchk" ).submit();
                }
                else {
                    // user clicked "cancel"

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
                // user clicked "ok"
                window.location.href ='<?php echo base_url(); ?>login/logout';
            } 
        });
    }
    function EditForm(formrno)
    {
        // //debugger;
        $('#sub1').empty();
        $('#sub2').empty();
        $('#sub3').empty();
        $('#sub4').empty();
        $('#sub5').empty();
        $('#sub6').empty();
        $('#sub7').empty();
        $('#sub8').empty();
        window.location.href = '<?=base_url()?>Admission_matric/NewEnrolment_EditForm_matric/'+formrno
    }

    function NewForm(formrno)
    {
        // //debugger;
        $('#sub1').empty();
        $('#sub2').empty();
        $('#sub3').empty();
        $('#sub4').empty();
        $('#sub5').empty();
        $('#sub6').empty();
        $('#sub7').empty();
        $('#sub8').empty();
        window.location.href = '<?=base_url()?>Admission_9th_reg/NewEnrolment_EditForm/'+formrno
    }
    function DeleteForm(formrno)
    {
        // var msg = "<img src='<?php echo base_url(); ?>assets/img/note_for_batch.jpg' alt='logo' style='width:800px; height: auto;' />"
        var msg = "Are You Sure You want to Cancel this Form ?"
        alertify.confirm(msg, function (e) {

            if (e) {
                // user clicked "ok"
                window.location.href ='<?php echo base_url(); ?>Admission_9th_reg/NewEnrolment_Delete/'+formrno;
            } else {
                // user clicked "cancel"

            }
        });
        // window.location.href = '<?=base_url()?>/RollNoSlip/MatricRollNo/'+formrno
    }
    function ReturnForm(Batch_ID)
    {
        window.location.href = '<?=base_url()?>Admission_matric/Print_Admission_matric_Form_Proofreading_Groupwise/'+Batch_ID + '/3'
    }
    function RevenueForm(Batch_ID)
    {
        var option =  $('input[type=radio][name=opt]:checked').val(); 
        // alert(option);
        // return;
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

    }
    function ReleaseForm(Batch_ID)
    {
        window.location.href = '<?=base_url()?>Admission_matric/BatchRelease/'+Batch_ID

    }
    $('#get_report').click( function(){
        var option =  $('input[type=radio][name=opt]:checked').val(); 
        // alert(option);
        // return;
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
    $('#get_Proof_reg').click( function(){
        debugger;
        var option =  $('input[type=radio][name=opt]:checked').val(); 
        // alert(option);
        // return;
        if(option == "1")
        {
            var std_group = $('#std_group').val();
            if(std_group == "0"){
                alertify.error("Please Select a Group First !");
                return;
            }
            Print_Admission_Form_Proofreading_Groupwise(std_group);
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
            Print_Admission_Form_Proofreading_Formnowise(startformno,endformno);
        }
        else{
            return;
        }
    })
    $('#get_revenue').click( function()
        {
            var option =  $('input[type=radio][name=opt]:checked').val(); 
            // alert(option);
            // return;
            if(option == "1")
            {
                var std_group = $('#std_group').val();
                if(std_group == "0"){
                    alertify.error("Please Select a Group First !");
                    return;
                }
                Revenue_list_groupwise(std_group);
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
                Revenue_list_Formnowise(startformno,endformno);
            }
            else{
                return;
            }
    })


    $('input[type=radio][name=opt]').change(function() {
        if (this.value == '1') {
            // alert("Allot Thai Gayo Bhai");
            $('#formnowise_selected').css('display','none');
            $('#grp_selected').css('display','block');
        }
        else if (this.value == '2') {
            $('#grp_selected').css('display','none');
            $('#formnowise_selected').css('display','block');
            // $('.news').css('display','block');
            //  alert("Transfer Thai Gayo");
        }
    });


    function  check_NewEnrol_validation()
    {
        // debugger;
        var name =  $('#cand_name').val();
        var dist_cd= $('#pvtinfo_dist option:selected').val();
        var teh_cd= $('#pvtinfo_teh').val();
        var zone_cd= $('#pvtZone').val();
        var pp_cent= $('#pp_cent').val();           
        var sub6p1 = $('#sub6').val();
        var sub6p2 = $('#sub6p2').val();           
        var sub7p1 = $('#sub7').val();
        var sub7p2 = $('#sub7p2').val();  
        var sub8p1 = $('#sub8').val();                      
        var sub8p2 = $('#sub8p2').val();                      
        var ex_type = $('#exam_type').val();
        var mobNo = $('#mob_number').val();
        var bFormNo = $('#bay_form').val();
        var grp_cd = $('#std_group').val();
        var brd_cd = $('#brd_cd').val();
        var fName = $('#father_name').val();
        var FNic = $('#father_cnic').val();
        var dob = $('#dob').val();
        var address = $('#address').val();
        var image = $('#image').val();
        var MarkOfIdent = $('#MarkOfIden').val();
        var Inst_Rno = $('#Inst_Rno').val();
        var status = 0;
        var $img = $("#previewImg");
        var src = $img.attr("src");
        var grppre = $("#grppre").val();
        var selected_group_conversion ;
        var exam_type = $("#exam_type").val();
        if(grp_cd==1 || grp_cd == 5 || grp_cd ==7)
        {
            selected_group_conversion =1;
        }
        else
        {
            selected_group_conversion =grp_cd;
        }
        //  alert($("#pvtinfo_dist").find('option:selected').val())
        debugger;
        if(src == '') {
            $img.addClass("highlight");
            // or
            $img.css("border", "3px solid yellow");
            $('#ErrMsg').show();  
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your  Name </b>");    
            alertify.error("Please upload your Picture First.")
            $img.focus(); 
            return status;
        }
        else if(name == "" ||  name == undefined){
            $('#ErrMsg').show();  
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your  Name </b>");    
            alertify.error("Please Enter your  Name")
            $('#cand_name').focus(); 
            return status;
        }
        else if(fName == "" || fName == undefined){
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your Father's Name  </b>");   
            alertify.error("Please Enter your Father's Name  ") 
            $('#father_name').focus(); 
            return status;
        }   

        else if(bFormNo == "" || bFormNo == 0 || bFormNo == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your bay-Form</b>"); 
            alertify.error("Please Enter your bay-Form") 
            $('#bay_form').focus();  
            return status; 
        }
        else if(FNic == "" || FNic.length == undefined )
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your Father's CNIC</b>"); 
            alertify.error("Please Enter your Father's CNIC") 
            $('#father_cnic').focus();  
            return status; 
        }



        else if(mobNo == "" || mobNo == 0 || mobNo == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your Mobile No.</b>"); 
            alertify.error("Please Enter your Mobile No.") 
            $('#mob_number').focus();   
            return status;  
        }

        else if(MarkOfIdent == "" || MarkOfIdent == 0 || MarkOfIdent == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            //$('#ErrMsg').html("<b>Please Enter your Mark of Indentification</b>"); 
            alertify.error("Please Enter your Mark of Indentification") 
            $('#MarkOfIden').focus();   
            return status;  
        }
        else if(address == "" || address == 0 || address.length ==undefined )
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            $('#ErrMsg').html("<b>Please Enter your Address</b>"); 
            alertify.error("Please Enter your Address")
            $('#address').focus(); 
            return status;    
        }

        else  if (dist_cd < 1) 
        {
            alertify.error('Please select District '); 
            $("#pvtinfo_dist").focus();
            return status;  
        }

        else if (teh_cd < 1) 
        {

            alertify.error('Please select Tehsil');                          
            $("#pvtinfo_teh").focus();
            return status;  
        }
        else if (zone_cd < 1) 
        {

            alertify.error('Please select Zone. ');                          
            $("#pvtZone").focus();
            return status;  
        }
        else if (grp_cd == 0) 
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            alertify.error('Please Select your Study Group '); 
            $("#std_group").focus();
            return status;  
        }
        else if ((sub6p1 == 19 || sub6p2 == 19) && (sub7p1 == 20 || sub7p2== 20))
        {
            $('#ErrMsg').show(); 
            alertify.error('Please select One Subject from ADVANCED ISLAMIC STUDIES / ISLAMIC HISTORY / MUSLIM HISTORY ');                   
            $("#sub6").focus();
            return status;  
        }
        else if (selected_group_conversion != grppre || exam_type == 2) 
        {
            debugger;
            var ddlMarksImproveoptions = $("#ddlMarksImproveoptions").val();
            if(ddlMarksImproveoptions == 1)
            {
                if (sub6p1 == 0 )
                {
                    $('#ErrMsg').show(); 
                    alertify.error('Please select Subject ');                   
                    $("#sub6").focus();
                    return status;  
                }  
                else   if (sub7p1 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');
                    $("#sub7").focus();
                    return status;  
                }
                else if (sub8p1 == 0 )
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject '); 
                    $("#sub8").focus();
                    return status;  
                }
            }
            else if(ddlMarksImproveoptions == 2)
            {
                if (sub6p2 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');                          
                    $("#sub6p2").focus();
                    return status;  
                }
                else   if (sub7p2 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');
                    $("#sub7p2").focus();
                    return status;  
                }
                else if (sub8p2== 0 )
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject '); 
                    $("#sub8p2").focus();
                    return status;  
                }
            }
            else if (ddlMarksImproveoptions != 4 && exam_type == 2)
            {
                if (sub6p1 == 0 )
                {
                    $('#ErrMsg').show(); 
                    alertify.error('Please select Subject ');                   
                    $("#sub6").focus();
                    return status;  
                }

                else if (sub6p2 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');                          
                    $("#sub6p2").focus();
                    return status;  
                }

                else   if (sub7p1 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');
                    $("#sub7").focus();
                    return status;  
                }
                else   if (sub7p2 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');
                    $("#sub7p2").focus();
                    return status;  
                }
                else if (sub8p1 == 0 )
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject '); 
                    $("#sub8").focus();
                    return status;  
                }
                else if (sub8p2== 0 )
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject '); 
                    $("#sub8p2").focus();
                    return status;  
                }
            }
            /* $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            alertify.error('Please Select your Study Group '); 
            $("#std_group").focus();
            return status;  */
        }
        else if(exam_type==15 || exam_type == 16)
        {
            var cattype = "<?php echo @$cattype ?>";

            if(cattype == 2) 
            {
                if (sub6p1 == 0 )
                {
                    $('#ErrMsg').show(); 
                    alertify.error('Please select Subject ');                   
                    $("#sub6").focus();
                    return status;  
                }

                else if (sub6p2 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');                          
                    $("#sub6p2").focus();
                    return status;  
                }

                else   if (sub7p1 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');
                    $("#sub7").focus();
                    return status;  
                }
                else   if (sub7p2 == 0)
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject ');
                    $("#sub7p2").focus();
                    return status;  
                }
                else if (sub8p1 == 0 )
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject '); 
                    $("#sub8").focus();
                    return status;  
                }
                else if (sub8p2== 0 )
                {
                    $('#ErrMsg').show(); 
                    $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
                    alertify.error('Please select Subject '); 
                    $("#sub8p2").focus();
                    return status;  
                }
            }

        }



        /*      else if ($("#sub3p2").find('option:selected').val() == 0) 
        {
        alertify.error('Please select your Study Group ');                  
        $("#sub3p2").focus();
        return status;  
        }
        else if ($("#sub5p2").find('option:selected').val() == 0 )
        {
        $('#ErrMsg').show(); 
        alertify.error('Please select Subject ');                   
        $("#sub5p2").focus();
        return status;  
        }

        else if ($("#sub6p2").find('option:selected').val() == 0)
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject ');                          
        $("#sub6p2").focus();
        return status;  
        }

        else   if ($("#sub7p2").find('option:selected').val() == 0)
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject ');
        $("#sub7p2").focus();
        return status;  
        }

        else if ($("#sub8p2").find('option:selected').val() == 0 )
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject '); 
        $("#sub8p2").focus();
        return status;  
        }*/

        status = 1;
        return status;
    }
    function  check_NewEnrol_validation_regular()
    {
        // debugger;
        var name =  $('#cand_name').val();
        var dist_cd= $('#pvtinfo_dist option:selected').val();
        var teh_cd= $('#pvtinfo_teh').val();
        var zone_cd= $('#pvtZone').val();
        var pp_cent= $('#pp_cent').val();           
        var sub6p1 = $('#sub6').val();
        var sub6p2 = $('#sub6p2').val();           
        var sub7p1 = $('#sub7').val();
        var sub7p2 = $('#sub7p2').val();  
        var sub8p1 = $('#sub8').val();                      
        var sub8p2 = $('#sub8p2').val();                      
        var ex_type = $('#exam_type').val();
        var mobNo = $('#mob_number').val();
        var bFormNo = $('#bay_form').val();
        var grp_cd = $('#std_group').val();
        var brd_cd = $('#brd_cd').val();
        var fName = $('#father_name').val();
        var FNic = $('#father_cnic').val();
        var dob = $('#dob').val();
        var address = $('#address').val();
        var image = $('#image').val();
        var MarkOfIdent = $('#MarkOfIden').val();
        var Inst_Rno = $('#Inst_Rno').val();
        var status = 0;
        var $img = $("#previewImg");
        var src = $img.attr("src");
        var grppre = $("#grppre").val();
        var selected_group_conversion ;
        var exam_type = $("#exam_type").val();
        if(grp_cd==1 || grp_cd == 5 || grp_cd ==7)
        {
            selected_group_conversion =1;
        }
        else
        {
            selected_group_conversion =grp_cd;
        }
        //  alert($("#pvtinfo_dist").find('option:selected').val())
        debugger;
        if(src == '') {
            $img.addClass("highlight");
            // or
            $img.css("border", "3px solid yellow");
            $('#ErrMsg').show();  
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your  Name </b>");    
            alertify.error("Please upload your Picture First.")
            $img.focus(); 
            return status;
        }
        else if(name == "" ||  name == undefined){
            $('#ErrMsg').show();  
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your  Name </b>");    
            alertify.error("Please Enter your  Name")
            $('#cand_name').focus(); 
            return status;
        }
        else if(fName == "" || fName == undefined){
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your Father's Name  </b>");   
            alertify.error("Please Enter your Father's Name  ") 
            $('#father_name').focus(); 
            return status;
        }   

        else if(bFormNo == "" || bFormNo == 0 || bFormNo == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your bay-Form</b>"); 
            alertify.error("Please Enter your bay-Form") 
            $('#bay_form').focus();  
            return status; 
        }
        else if(FNic == "" || FNic.length == undefined )
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your Father's CNIC</b>"); 
            alertify.error("Please Enter your Father's CNIC") 
            $('#father_cnic').focus();  
            return status; 
        }



        else if(mobNo == "" || mobNo == 0 || mobNo == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            // $('#ErrMsg').html("<b>Please Enter your Mobile No.</b>"); 
            alertify.error("Please Enter your Mobile No.") 
            $('#mob_number').focus();   
            return status;  
        }

        else if(MarkOfIdent == "" || MarkOfIdent == 0 || MarkOfIdent == undefined)
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            //$('#ErrMsg').html("<b>Please Enter your Mark of Indentification</b>"); 
            alertify.error("Please Enter your Mark of Indentification") 
            $('#MarkOfIden').focus();   
            return status;  
        }
        else if(address == "" || address == 0 || address.length ==undefined )
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            $('#ErrMsg').html("<b>Please Enter your Address</b>"); 
            alertify.error("Please Enter your Address")
            $('#address').focus(); 
            return status;    
        }

        else  if (dist_cd < 1) 
        {
            alertify.error('Please select District '); 
            $("#pvtinfo_dist").focus();
            return status;  
        }

        else if (teh_cd < 1) {

            alertify.error('Please select Tehsil');                          
            $("#pvtinfo_teh").focus();
            return status;  
        }
        else if (zone_cd < 1) 
        {

            alertify.error('Please select Zone. ');                          
            $("#pvtZone").focus();
            return status;  
        }

        else if (grp_cd == 0) 
        {
            $('#ErrMsg').show(); 
            $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
            alertify.error('Please Select your Study Group '); 
            $("#std_group").focus();
            return status;  
        }
        /*   else if (selected_group_conversion != grppre || exam_type == 2) 
        {
        if (sub6p1 == 0 )
        {
        $('#ErrMsg').show(); 
        alertify.error('Please select Subject ');                   
        $("#sub6").focus();
        return status;  
        }

        else if (sub6p2 == 0)
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject ');                          
        $("#sub6p2").focus();
        return status;  
        }

        else   if (sub7p1 == 0)
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject ');
        $("#sub7").focus();
        return status;  
        }
        else   if (sub7p2 == 0)
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject ');
        $("#sub7p2").focus();
        return status;  
        }
        else if (sub8p1 == 0 )
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject '); 
        $("#sub8").focus();
        return status;  
        }
        else if (sub8p2== 0 )
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject '); 
        $("#sub8p2").focus();
        return status;  
        }
        /* $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please Select your Study Group '); 
        $("#std_group").focus();
        return status;  */
        /* }*/
        /*      else if ($("#sub3p2").find('option:selected').val() == 0) 
        {
        alertify.error('Please select your Study Group ');                  
        $("#sub3p2").focus();
        return status;  
        }
        else if ($("#sub5p2").find('option:selected').val() == 0 )
        {
        $('#ErrMsg').show(); 
        alertify.error('Please select Subject ');                   
        $("#sub5p2").focus();
        return status;  
        }

        else if ($("#sub6p2").find('option:selected').val() == 0)
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject ');                          
        $("#sub6p2").focus();
        return status;  
        }

        else   if ($("#sub7p2").find('option:selected').val() == 0)
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject ');
        $("#sub7p2").focus();
        return status;  
        }

        else if ($("#sub8p2").find('option:selected').val() == 0 )
        {
        $('#ErrMsg').show(); 
        $("#ErrMsg").css({ backgroundColor: '#FEFAFB', color: '#F00' });
        alertify.error('Please select Subject '); 
        $("#sub8p2").focus();
        return status;  
        }*/

        status = 1;
        return status;
    }
    function gotodefaultpage(){
        var msg = "Are you sure you want to cancel ?"
        alertify.confirm(msg, function (e) {

            if (e) {
                window.parent.location=<?php base_url() ?>'Admission';
            } 


        });

    }
    var max_file_size             = 20000; //allowed file size. (1 MB = 1048576)
    var allowed_file_types         = ['image/jpeg', 'image/pjpeg']; //allowed file types
    var result_output             = '#output'; //ID of an element for response output
    var my_form_id                 = '#upload_form'; //ID of an element for response output
    var progress_bar_id         = '#progress-wrp'; //ID of an element for response output
    var total_files_allowed     = 1; //Number files allowed to upload

    $(function(){

        $("input:file").change(function (event){

            event.preventDefault();
            var proceed = true; //set proceed flag
            var error = [];    //errors
            var total_files_size = 0;

            //reset progressbar
            $(progress_bar_id +" .progress-bar").css("width", "0%");
            $(progress_bar_id + " .status").text("0%");

            if(!window.File && window.FileReader && window.FileList && window.Blob){ //if browser doesn't supports File API
                alertify.error("Your browser does not support new File API! Please upgrade."); //push error text
            }else{
                var total_selected_files = this.files.length; //number of files

                //limit number of files allowed
                if(total_selected_files > total_files_allowed){
                    alertify.error( "You have selected "+total_selected_files+" file(s), " + total_files_allowed +" is maximum!"); //push error text
                    proceed = false; //set proceed flag to false
                }
                //iterate files in file input field
                $(this.files).each(function(i, ifile){
                    if(ifile.value !== ""){ //continue only if file(s) are selected
                        if(allowed_file_types.indexOf(ifile.type) === -1){ //check unsupported file
                            alertify.error( "<b>"+ ifile.name + "</b> is unsupported file type!"); //push error text
                            proceed = false; //set proceed flag to false
                        }

                        total_files_size = total_files_size + ifile.size; //add file size to total size
                    }
                });


                //if total file size is greater than max file size
                if(total_files_size > max_file_size && proceed == true){ 
                    alertify.error( "Allowed size is 20 KB, Try smaller file!"); //push error text
                    proceed = false; //set proceed flag to false
                }

                //  var submit_btn  = $(this).find("input[type=submit]"); //form submit button    

                //if everything looks good, proceed with jQuery Ajax
                if(proceed){

                    var form_data = new FormData( $('form')[0]); //Creates new FormData object

                    var post_url = '<?= base_url()?>Admission/uploadpic'; //get action URL of form

                    //jQuery Ajax to Post form data
                    $.ajax({
                        url : post_url,
                        type: "POST",
                        data : form_data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        xhr: function(){
                            //upload Progress
                            var xhr = $.ajaxSettings.xhr();
                            if (xhr.upload) {
                                xhr.upload.addEventListener('progress', function(event) {
                                    var percent = 0;
                                    var position = event.loaded || event.position;
                                    var total = event.total;
                                    if (event.lengthComputable) {
                                        percent = Math.ceil(position / total * 100);
                                    }
                                    //update progressbar
                                    $(progress_bar_id +" .progress-bar").css("width", + percent +"%");
                                    $(progress_bar_id + " .status").text(percent +"%");
                                    }, true);
                            }
                            return xhr;
                        },
                        mimeType:"multipart/form-data"
                    }).done(function(res){ //
                        // $(my_form_id)[0].reset(); //reset form
                        $(result_output).html(res); //output response from server
                        // submit_btn.val("Upload").prop( "disabled", false); //enable submit button once ajax is done
                    });

                }
            }

            $(result_output).html(""); //reset output 
            $(error).each(function(i){ //output any error to output element
                $(result_output).append('<div class="error">'+error[i]+"</div>");
            });
        });
    });
</script>
<script type="">
    var error = '<?php echo @$error_msg; ?>';
    if(error.length > 1){
        alertify.error("Currently there is not student against this  Group/Form No. !") ;
    }



</script>

</body>
</html>