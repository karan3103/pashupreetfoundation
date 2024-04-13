<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$con = mysqli_connect('localhost', 'root', '', 'pashupreet_project');

// if (!$con) {
//     die('Not connected.' . mysqli_error($con));
// }

echo "Connected to database successfully.<br>";

if (isset($_POST['btn_submit'])) 
{
    echo "Form submitted.<br>";
    
    // Sanitize inputs to prevent SQL injection
    // $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    // $email = mysqli_real_escape_string($con, $_POST['email']);
    // $phone = mysqli_real_escape_string($con, $_POST['phone']);
    // $city = mysqli_real_escape_string($con, $_POST['city']);
    // $choice = mysqli_real_escape_string($con, $_POST['choice']);
    // $msg = mysqli_real_escape_string($con, $_POST['msg']);

    $full_name = $_POST['full_name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $city =  $_POST['city'];
    $choice =  $_POST['choice'];
    $msg =  $_POST['msg'];

    // Debugging: Print the sanitized inputs
    echo "Full Name: " . $full_name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "City: " . $city . "<br>";
    echo "Choice: " . $choice . "<br>";
    echo "Message: " . $msg . "<br>";

    $sql_department_insert = "INSERT INTO ngo_data (full_name, email, phone, city, choice, msg) VALUES ($full_name, $email, $phone, $city, $choice, $msg)";

    // echo  $sql_department_insert;
    $rs_department_insert = mysqli_query($con, $sql_department_insert);


    $response = array(
        'action' => 'Success',
        'message' => 'Form submission successful',
    );

    echo json_encode($response);


    if (!$rs_department_insert) {
        die('Not Inserted...!' . mysqli_error($con));
    } else {
        echo "Data Inserted";
    }
} else
{
    echo "Form not submitted.<br>";
}
?>
