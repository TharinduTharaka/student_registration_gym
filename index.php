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

    <h2 style="padding-bottom: 3%;
    font-weight: normal;
    color: white;
    font-size: xxx-large;
    font-style: normal; 
    font-family: georgia, serif;
    text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);">KIU GYM REGISTRATION</h2>
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
            <input type="text" name="fname" id="fname" placeholder="First Name" required/>
            <input type="text" name="lname" id="lname" placeholder="Last Name" required/>
            <input type="text" name="nic" id="nic" placeholder="NIC" required/>
            <input type="text" name="phoneHome" placeholder="Phone (Home)" required/>
            <input type="text" name="phonePersonal" placeholder="Phone (Personal)" required/>
            <textarea name="address" placeholder="Address" required></textarea>
            <input type="text" name="email" placeholder="Email" required/>
            <input type="number" name="age" placeholder="Age" required/>
            <input type="text" name="regNumber" placeholder="Student / Employee Number" required/>
            <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>

        <fieldset class="inputField">
            <h2 class="fs-title">Appearance</h2>
            <!--        <h3 class="fs-subtitle">Your presence on the social network</h3>-->
            <input type="number" name="height" placeholder="Height (cm)" required/>
            <input type="number" name="weight" placeholder="Weight (kg)" required/>
            <input type="number" name="bmi" placeholder="BMI" disabled required/>
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

            <p id="error"></p>
        </fieldset>

    </form>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<script src="js/index.js"></script>
<script>

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

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
        }
    });

    // Get height and weight input elements
    var heightInput = document.querySelector('input[name="height"]');
    var weightInput = document.querySelector('input[name="weight"]');
    var bmiInput = document.querySelector('input[name="bmi"]');

    // Event listener for height and weight inputs
    heightInput.addEventListener('input', calculateBMI);
    weightInput.addEventListener('input', calculateBMI);

    // Function to calculate BMI
    function calculateBMI() {
        var height = parseFloat(heightInput.value) / 100; // Convert height to meters
        var weight = parseFloat(weightInput.value);

        // Check if height and weight inputs are valid numbers
        if (!isNaN(height) && !isNaN(weight) && height > 0 && weight > 0) {
            var bmi = weight / (height * height); // Calculate BMI
            bmiInput.value = bmi.toFixed(2); // Display BMI with 2 decimal places
        } else {
            bmiInput.value = ''; // Clear BMI input if inputs are invalid
        }
    }


    $("#submitData").click(function () {

        // // Check for form errors
        // const errorFields = document.querySelectorAll('fieldset.active input:invalid');
        // if (errorFields.length > 0) {
        // // Display error message in console
        // errorFields.forEach((field) => {
        //     console.error(`Error in field: ${field.name}`);
        // });

        // // Create error message
        // const errorMessages = Array.from(errorFields).map((field) => `Error in field: ${field.name}`);
        // const errorMessage = errorMessages.join('\n');

        // // Display error message using plain text
        // const errorElement = document.getElementById('error');
        // errorElement.textContent = "Test Error: " + errorMessage;

        // // Prevent form submission
        // return false;
        // }

        console.log("Form submitted successfully");
    });


</script>
</body>
</html>
<?php


$host = "ls-c6110597522c2052e9c420a5d7b248605c1276f8.clhiumzg0ybz.ap-southeast-1.rds.amazonaws.com";
$port = 3306;
// Create connection
$con = mysqli_connect($host, 'dbmasteruser', 'nSe}R3TWvCNbM6azkgXc5J)$kO~4K*|%', 'gym_manager', $port);
if (isset($_POST['submit'])) {

    // medicalReport file
    $medicalReport_pdf_name = rand(1000, 100000) . "-" . $_FILES['medicalReportFile']['name'];
    $medicalReport_pdf_type = $_FILES['medicalReportFile']['type'];
    $medicalReport_pdf_size = $_FILES['medicalReportFile']['size'];
    $medicalReport_pdf_temp = $_FILES['medicalReportFile']['tmp_name'];
    $medicalReport_upload_to = './Upload/MedicalReportFiles/';
    move_uploaded_file($medicalReport_pdf_temp, $medicalReport_upload_to . $medicalReport_pdf_name);

    $medicalReportFilePath = $medicalReport_upload_to . $medicalReport_pdf_name;

    // payment file
    $payment_pdf_name = rand(1000, 100000) . "-" . $_FILES['paymentFile']['name'];
    $payment_pdf_type = $_FILES['paymentFile']['type'];
    $payment_pdf_size = $_FILES['paymentFile']['size'];
    $payment_pdf_temp = $_FILES['paymentFile']['tmp_name'];
    $payment_upload_to = './Upload/PaymentSlipFiles/';
    move_uploaded_file($payment_pdf_temp, $payment_upload_to . $payment_pdf_name);

    $paymentFilePath = $payment_upload_to . $payment_pdf_name;

    // Get the post records
    $txtFname = $_POST['fname'];
    $txtLname = $_POST['lname'];
    $txtName = $txtFname . " " . $txtLname;
    $txtPhoneHome = $_POST['phoneHome'];
    $txtPhonePersonal = $_POST['phonePersonal'];
    $txtEmail = $_POST['email'];
    $txtAddress = $_POST['address'];
    $txtAge = $_POST['age'];
    $txtRegNumber = strtoupper($_POST['regNumber']); // Convert to uppercase
    $txtHeight = $_POST['height'];
    $txtWeight = $_POST['weight'];
    $txtBMI = $_POST['bmi'];
    $txtExperienceChoice = $_POST['experienceChoice'];
    $txtGymName = $_POST['gymName'];
    $txtPhoneTrainer = $_POST['phoneTrainer'];
    $txtTrainerName = $_POST['trainerName'];
    $healthArray = $_POST['health'];
    $txtHealth = implode(",", $healthArray);
    $txtDoctorName = $_POST['doctor_name'];
    $txtDoctorTel = $_POST['contact_number'];
    $txtHospitalLocation = $_POST['hospital_location'];
    $txtCreatedAt = date("Y-m-d H:i:s");


    // Hash the NIC value
    $txtNIC = strtoupper($_POST['nic']); // Convert to uppercase
    // $hashedNIC = hash('sha256', $txtNIC);

    // Check for duplicates in the database
    $duplicateQuery = "SELECT * FROM members WHERE nic = '$txtNIC' OR reg_number = '$txtRegNumber' OR email = '$txtEmail'";
    $duplicateResult = mysqli_query($con, $duplicateQuery);
    $duplicateCount = mysqli_num_rows($duplicateResult);

    if ($duplicateCount > 0) {
        // Duplicates found

        $duplicateFields = array();

        // Check for duplicate NIC
        $nicQuery = "SELECT * FROM members WHERE nic = '$txtNIC'";
        $nicResult = mysqli_query($con, $nicQuery);
        if (mysqli_num_rows($nicResult) > 0) {
            $duplicateFields[] = "NIC";
        }

        // Check for duplicate regNumber
        $regNumberQuery = "SELECT * FROM members WHERE reg_number = '$txtRegNumber'";
        $regNumberResult = mysqli_query($con, $regNumberQuery);
        if (mysqli_num_rows($regNumberResult) > 0) {
            $duplicateFields[] = "Registration Number";
        }

        // Check for duplicate email
        $emailQuery = "SELECT * FROM members WHERE email = '$txtEmail'";
        $emailResult = mysqli_query($con, $emailQuery);
        if (mysqli_num_rows($emailResult) > 0) {
            $duplicateFields[] = "Email";
        }

        $errorMessage = "A member with the same " . implode(", ", $duplicateFields) . " already exists!";

        ?>

        <script>
            swal({
                title: "ERROR!",
                text: "<?php echo $errorMessage; ?>",
                icon: "error",
            });
        </script>

        <?php
    } else {
        // No duplicates found, proceed with database insert

        // Insert query
        $sql = "INSERT INTO `members` (`name`, `phone_home`, `phone_personal`, `address`,
                `age`, `email`, `reg_number`, `height`, `weight`,
                `bmi`, `gym_name`, `phone_trainer`, `trainer_name`, `health_condition`, `medical_report_file_name`,
                `doctor_name`, `hospital_contact_number`, `hospital_location`, `payment_file`, `status`, `created_at`, `nic`)
        VALUES ('$txtName', '$txtPhoneHome', '$txtPhonePersonal', '$txtAddress',
                '$txtAge', '$txtEmail', '$txtRegNumber', '$txtHeight',
                '$txtWeight', '$txtBMI', '$txtGymName', '$txtPhoneTrainer',
                '$txtTrainerName', '$txtHealth', '$medicalReport_pdf_name', '$txtDoctorName',
                '$txtDoctorTel', '$txtHospitalLocation', '$paymentFilePath', '1', '$txtCreatedAt', '$txtNIC')";

        $rs = mysqli_query($con, $sql);

        if ($rs) {
            ?>

            <script>
                swal({
                    title: "SUCCESS!",
                    text: "You have successfully registered!",
                    icon: "success",
                });
                //.then(function() {
                //     window.location.replace("success.php");
                // });
            </script>

            <?php
        }
    }

}
?>

<!-- HTML form goes here -->


<!--?>-->