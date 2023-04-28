<?php


//echo $txtName;

$con = mysqli_connect('localhost', 'root', '', 'db_student_gym');


// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Get the PDF file data

    // medicalReport
    $medicalReport_pdf_file = $_FILES['medicalReportFile']['name'];
    $medicalReport_pdf_temp = $_FILES['pdf_file']['tmp_name'];

    // payment
    $payment_pdf_file = $_FILES['paymentFile']['name'];
    $payment_pdf_temp = $_FILES['pdf_file']['tmp_name'];


    // Open the PDF file and read its contents
    $medicalReport_pdf_data = file_get_contents($medicalReport_pdf_temp);
    $payment_pdf_data = file_get_contents($payment_pdf_temp);



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

    $txtGymName = $_POST['gymName'];
    $txtPhoneTrainer = $_POST['phoneTrainer'];
    $txtTrainerName = $_POST['trainerName'];

//    $txtMedicalReportFile = $_POST['medicalReportFile'];
    $txtDoctorName = $_POST['doctor_name'];
    $txtDoctorTel = $_POST['contact_number'];
    $txtHospitalLocation = $_POST['hospital_location'];

//    $txtPaymentFile = $_POST['paymentFile'];

// database insert SQL code
    $sql = "INSERT INTO `tbl` ( `name`,`phoneHome`,`phonePersonal`,`address`,
                   `age`,`email`,`regNumber`,`height`,`weight`,
                   `bmi`,`gymName`,`phoneTrainer`,`trainerName`,`medicalReport_file_name`,`medicalReport_file_data`,
                   `doctor_name`,`contact_number`,`hospital_location`,`paymentFile`) 
        VALUES ('$txtName','$txtPhoneHome','$txtPhonePersonal','$txtAddress','$txtAge','$txtEmail','$txtRegNumber',
                '$txtHeight','$txtWeight','$txtBMI','$txtGymName',
                '$txtPhoneTrainer','$txtTrainerName','$medicalReport_pdf_file','$medicalReport_pdf_data','$txtDoctorName',
                '$txtDoctorTel','$txtHospitalLocation','$payment_pdf_file','$payment_pdf_data')";

// insert in database
    $rs = mysqli_query($con, $sql);

}

if ($rs) {
    echo "Contact Records Inserted";
}

?>
