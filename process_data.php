<?php
    
    $con = mysqli_connect('localhost', 'root', '', 'pashupreet_project');

    $full_name = $_POST['full_name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $city =  $_POST['city'];
    $choice =  $_POST['choice'];
    $msg =  $_POST['msg'];


    $sql_department_insert = "INSERT INTO ngo_data (full_name, email, phone, city, choice, msg) VALUES ('$full_name', '$email', '$phone', '$city', '$choice', '$msg')";

    $res = mysqli_query( $con , $sql_department_insert ); 

    if($res)
    {
        $response['status']=1;
        $response['message'] = "Data inserted";
    }else{
        $response['status']=0;
        $response['message'] = "Data is not inserted";
    }   

    echo json_encode($response);

?>