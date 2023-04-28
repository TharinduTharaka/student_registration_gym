<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Get the PDF file data
    $pdf_file = $_FILES['pdf_file']['name'];
    $pdf_temp = $_FILES['pdf_file']['tmp_name'];

    // Open the PDF file and read its contents
    $pdf_data = file_get_contents($pdf_temp);

    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'db_student_gym');

    // Insert the PDF file into the database table
    $sql = "INSERT INTO medical_report_pdf_files (file_name, file_data) VALUES ('$pdf_file', '$pdf_data')";
    mysqli_query($conn, $sql);

    // Close the database connection
    mysqli_close($conn);

    // Redirect the user to a success page
    header('Location: success.php');
    exit();
}

?>