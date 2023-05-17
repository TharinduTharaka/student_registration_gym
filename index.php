<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<video autoplay muted loop class="myVideo">
    <source src="Image/m5.mp4" type="video/mp4">
</video>

<!-- multistep form -->
<div id="msform">

    <h2 style="padding-bottom: 3%; font-weight: normal; color: white; font-size: xxx-large; font-style: normal;  font-family: georgia, serif; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);">KIU GYM REGISTRATION</h2>
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Personal Details</li>
        <li>Appearance</li>
        <li>GYM Experience</li>
        <li>Health History</li>
        <li>Medical Report</li>
        <li>Payments</li>
    </ul>
    <form method="POST" enctype="multipart/form-data">

        <fieldset class="inputField">
            <h2 class="fs-title">Personal Details</h2>
            <input type="text" name="fname" id="fname" placeholder="First Name"/>
            <input type="text" name="lname" id="lname" placeholder="Last Name"/>
            <input type="text" name="phoneHome" placeholder="Phone (Home)"/>
            <input type="text" name="phonePersonal" placeholder="Phone (Personal)"/>
            <textarea name="address" placeholder="Address"></textarea>
            <input type="text" name="email" placeholder="Email"/>
            <input type="number" name="age" placeholder="Age"/>
            <input type="text" name="regNumber" placeholder="Student / Employee Number"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>

        <fieldset class="inputField">
            <h2 class="fs-title">Appearance</h2>
            <!--        <h3 class="fs-subtitle">Your presence on the social network</h3>-->
            <input type="number" name="height" placeholder="Height"/>
            <input type="number" name="weight" placeholder="Weight"/>
            <input type="number" name="bmi" placeholder="BMI"/>
            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>

        <fieldset class="inputField">
            <h2 class="fs-title">Past GYM Experience</h2>
            <h3 class="fs-subtitle" style="text-align: start">Have you ever had gym exercises ?</h3>
            <div style="display: flex; text-align: start">
                <div style="display: flex; padding-right: 10px">
                    <div style="width: 25px;">
                        <input style="padding-bottom: 5px;" type="radio" id="experienceChoice1"
                               name="experienceChoice"
                               value="1"/>
                    </div>

                    <label style="padding-bottom: 20px;">&nbsp Yes</label>
                </div>
                <div style="display: flex;">
                    <div style="width: 25px;">
                        <input type="radio" id="experienceChoice2" name="experienceChoice" value="0" checked/>
                    </div>
                    <label style="padding-bottom: 15px;">&nbsp; No</label>
                </div>
            </div>
            <div id="gymExperienceField">
                <input type="text" name="gymName" placeholder="Gym Name"/>
                <input type="tel" name="phoneTrainer" placeholder="Phone (Trainer)"/>
                <input type="text" name="trainerName" placeholder="Trainer Name"/>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>

        <fieldset class="inputField">
            <h2 class="fs-title">Health History</h2>
            <h3 class="fs-subtitle" style="text-align: start">Select Your Health Condition</h3>
            <div style="display: flex;">
                <div style="width: 25px; padding-right: 10px">
                    <input type="checkbox" name="health[]" value="1"/>
                </div>
                <p class="para"> Yes dfhth tr tr trytrhyu ttttttt trtr yutry errrrrr rrrrrr rrrrr tytytytytyt
                    ytytyty
                    tytyt
                    ytytyt ytytyty asdfsdg</p>
            </div>
            <div style="padding-right: 10px; display: flex;">
                <div style="width: 25px; padding-right: 10px">
                    <input type="checkbox" name="health[]" value="2"/>
                </div>
                <p class="para">Yes dfhth tr tr trytrhyu ttttttt trtr yutry errrr rrrrr rrrrrrr rtytytytytyty
                    tytytytyt
                    ytytytyt ytytyty asdfsdg</p>
            </div>
            <div style="display: flex;">
                <div style="width: 25px; padding-right: 10px">
                    <input type="checkbox" name="health[]" value="3"/>
                </div>
                <p class="para"> Yes dfhth tr tr trytrhyu ttttttt trtr yutry errrrrr rrrrrr rrrrr tytytytytyt
                    ytytyty
                    tytyt
                    ytytyt ytytyty asdfsdg</p>
            </div>
            <div style="padding-right: 10px; display: flex;">
                <div style="width: 25px; padding-right: 10px">
                    <input type="checkbox" name="health[]" value="4"/>
                </div>
                <p class="para">Yes dfhth tr tr trytrhyu ttttttt trtr yutry errrr rrrrr rrrrrrr rtytytytytyty
                    tytytytyt
                    ytytytyt ytytyty asdfsdg</p>
            </div>
            <div style="display: flex;">
                <div style="width: 25px; padding-right: 10px">
                    <input type="checkbox" name="health[]" value="5"/>
                </div>
                <p class="para"> Yes dfhth tr tr trytrhyu ttttttt trtr yutry errrrrr rrrrrr rrrrr tytytytytyt
                    ytytyty
                    tytyt
                    ytytyt ytytyty asdfsdg</p>
            </div>
            <div style="padding-right: 10px; display: flex;">
                <div style="width: 25px; padding-right: 10px">
                    <input type="checkbox" name="health[]" value="6"/>
                </div>
                <p class="para">Yes dfhth tr tr trytrhyu ttttttt trtr yutry errrr rrrrr rrrrrrr rtytytytytyty
                    tytytytyt
                    ytytytyt ytytyty asdfsdg</p>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>

        <fieldset class="inputField">
            <h2 class="fs-title">Medical Report</h2>
            <h3 class="fs-subtitle" style="text-align: start">Upload your Medical Report</h3>
            <div class="uploadArea">
                <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px">
                    <input type="file" id="medicalReportFile" name="medicalReportFile">
                </div>
            </div>
            <div style="padding-top: 10px">
                <input type="text" name="doctor_name" placeholder="Doctor Name"/>
                <input type="text" name="contact_number" placeholder="Contact Number"/>
                <input type="text" name="hospital_location" placeholder="Hospital (Name/Location)"/>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>

        <fieldset class="inputField">
            <h2 class="fs-title">Payments</h2>
            <h3 class="fs-subtitle" style="text-align: start">Upload your Payment Receipt</h3>
            <div class="uploadArea">
                <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px">
                    <input type="file" id="paymentReceipt" name="paymentFile">
                </div>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous"/>
            <button type="submit" name="submit" class="action-button" id="submitData">Submit</button>
        </fieldset>

    </form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<script src="js/index.js"></script>
<script>

    // $(document).ready(function(){
    //
    //     $("#submitData").click(function(){
    //         // var username = $("#txt_uname").val();
    //         var fname = $("#fname").val();
    //         var lname = $("#lname").val();
    //         // var email = $("#txt_email").val();
    //
    //         $.ajax({
    //             url:'./php/action_page.php',
    //             type:'post',
    //             data:{
    //                 fname:fname,
    //                 lname:lname
    //             },
    //             success:function(response){
    //                 console.log(response);
    //                 // location.reload(); // reloading page
    //             }
    //         });
    //         return false;
    //     });
    // });
    // $("form").submit(function(){
    //     $.post($(this).attr("action"), $(this).serialize());
    //     return false;
    // });

    $(document).ready(function () {
        $('#gymExperienceField').hide();
        // $('#external_type').hide();

    });

    $("#experienceChoice1").click(function () {
        $('#gymExperienceField').show();
        var val = $("#experienceChoice1").val();
        // if (val){
        //     $('#gymExperienceField').show();
        // }
    });
    $("#experienceChoice2").click(function () {
        $('#gymExperienceField').hide();
        var val = $("#experienceChoice2").val();
    });


</script>
</body>
</html>
<?php
$con = mysqli_connect('localhost', 'root', '', 'gym_manager');
if (isset($_POST['submit'])) {


    // medicalReport file
    $medicalReport_pdf_name = rand(1000, 100000) . "-" . $_FILES['medicalReportFile']['name'];
    $medicalReport_pdf_type = $_FILES['medicalReportFile']['type'];
    $medicalReport_pdf_size = $_FILES['medicalReportFile']['size'];
    $medicalReport_pdf_temp = $_FILES['medicalReportFile']['tmp_name'];
    $medicalReport_upload_to = './Upload/MedicalReportFiles/';
    move_uploaded_file($medicalReport_pdf_temp, $medicalReport_upload_to . $medicalReport_pdf_name);

// payment file
    $payment_pdf_name = rand(1000, 100000) . "-" . $_FILES['paymentFile']['name'];
    $payment_pdf_type = $_FILES['paymentFile']['type'];
    $payment_pdf_size = $_FILES['paymentFile']['size'];
    $payment_pdf_temp = $_FILES['paymentFile']['tmp_name'];
    $payment_upload_to = './Upload/PaymentSlipFiles/';
    move_uploaded_file($payment_pdf_temp, $payment_upload_to . $payment_pdf_name);


    // get the post records
    $txtFname = $_POST['fname'];
    $txtLname = $_POST['lname'];

    $txtName = $txtFname . " " . $txtLname;

    $txtPhoneHome = $_POST['phoneHome'];
    $txtPhonePersonal = $_POST['phonePersonal'];
    $txtAddress = $_POST['address'];
    $txtAge = $_POST['age'];
    $txtEmail = $_POST['email'];
    $txtRegNumber = $_POST['regNumber'];

    $txtHeight = $_POST['height'];
    $txtWeight = $_POST['weight'];
    $txtBMI = $_POST['bmi'];

    $txtExperienceChoice = $_POST['experienceChoice'];
    $txtGymName = $_POST['gymName'];
    $txtPhoneTrainer = $_POST['phoneTrainer'];
    $txtTrainerName = $_POST['trainerName'];

    $txtHealth = $_POST['health'];

    $txtDoctorName = $_POST['doctor_name'];
    $txtDoctorTel = $_POST['contact_number'];
    $txtHospitalLocation = $_POST['hospital_location'];

// database insert SQL code
    $sql = "INSERT INTO `members` ( `name`,`phone_home`,`phone_personal`,`address`,
                   `age`,`email`,`reg_number`,`height`,`weight`,
                   `bmi`,`gym_name`,`phone_trainer`,`trainer_name`,`health_condition`,`medical_report_file_name`,
                   `doctor_name`,`hospital_contact_number`,`hospital_location`,`payment_file`)
        VALUES ('$txtName','$txtPhoneHome','$txtPhonePersonal','$txtAddress',
                '$txtAge','$txtEmail','$txtRegNumber','$txtHeight',
                '$txtWeight','$txtBMI','$txtGymName','$txtPhoneTrainer',
                '$txtTrainerName','$txtHealth','$medicalReport_pdf_name','$txtDoctorName',
                '$txtDoctorTel','$txtHospitalLocation','$payment_pdf_name')";


    $rs = mysqli_query($con, $sql);

    if ($rs) {
        ?>

        <script>
            swal({
                title: "SUCCESS !",
                text: "You Have Successfully Registered!",
                icon: "success",
            });
        </script>

        <?php
    }
}
?>


<!--?>-->