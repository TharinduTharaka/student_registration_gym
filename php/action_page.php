<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

$finished=false;
//echo $_POST['submit'];

$con = mysqli_connect('localhost', 'root', '', 'db_student_gym');


// Check if the form has been submitted
//if (isset($_POST['submit'])) {

// Get the PDF file data
//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';



//if (!$txtExperienceChoice){
//    $txtExperienceChoice=0;
//}
//echo '<pre>';
//print_r($txtExperienceChoice);
//echo '</pre>';

// medicalReport file
$medicalReport_pdf_name = rand(1000, 100000) . "-" . $_FILES['medicalReportFile']['name'];
$medicalReport_pdf_type = $_FILES['medicalReportFile']['type'];
$medicalReport_pdf_size = $_FILES['medicalReportFile']['size'];
$medicalReport_pdf_temp = $_FILES['medicalReportFile']['tmp_name'];
$medicalReport_upload_to = '../Upload/MedicalReportFiles/';
move_uploaded_file($medicalReport_pdf_temp, $medicalReport_upload_to . $medicalReport_pdf_name);

// payment file
$payment_pdf_name = rand(1000, 100000) . "-" . $_FILES['paymentFile']['name'];
$payment_pdf_type = $_FILES['paymentFile']['type'];
$payment_pdf_size = $_FILES['paymentFile']['size'];
$payment_pdf_temp = $_FILES['paymentFile']['tmp_name'];
$payment_upload_to = '../Upload/PaymentSlipFiles/';
move_uploaded_file($payment_pdf_temp, $payment_upload_to . $payment_pdf_name);


// Open the PDF file and read its contents
//$medicalReport_pdf_data = file_get_contents($medicalReport_pdf_temp);
//$payment_pdf_data = file_get_contents($payment_pdf_temp);


// Open the PDF file and read its contents


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
$sql = "INSERT INTO `tbl` ( `name`) 
        VALUES ('$txtName')";


$sql = "INSERT INTO `tbl` ( `name`,`phoneHome`,`phonePersonal`,`address`,
                   `age`,`email`,`regNumber`,`height`,`weight`,
                   `bmi`,`gymName`,`phoneTrainer`,`trainerName`,`helth_condition`,`medicalReport_file_name`,
                   `doctor_name`,`contact_number`,`hospital_location`,`paymentFile`)
        VALUES ('$txtName','$txtPhoneHome','$txtPhonePersonal','$txtAddress',
                '$txtAge','$txtEmail','$txtRegNumber','$txtHeight',
                '$txtWeight','$txtBMI','$txtGymName','$txtPhoneTrainer',
                '$txtTrainerName','$txtHealth','$medicalReport_pdf_name','$txtDoctorName',
                '$txtDoctorTel','$txtHospitalLocation','$payment_pdf_name')";

// insert in database
$rs = mysqli_query($con, $sql);

//}

if ($rs) {
    // Redirect the user to a success page
//    header('Location: ../index.php');

//    $finished=true;
//    echo "Contact Records Inserted";

?>
    <script>
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
        });
    </script>

    <?php
}
//}
?>
