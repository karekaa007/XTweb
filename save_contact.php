<?php
if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']))
{

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    $added_date = date('Y-m-d H:i:s');

    if (empty($name) || empty($email) || empty($subject) || empty($message))
    {
        echo 'error';
        exit;
    }

    include('includes/db_con.php');


    $sql = "INSERT INTO contact (name, email, subject, message, added_date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);


    if ($stmt === false)
    {
        echo 'error: ' . $con->error;
        exit;
    }

    $stmt->bind_param("sssss", $name, $email, $subject, $message, $added_date);

    if ($stmt->execute())
    {
        echo 'success';
    } else
    {
        echo 'error: ' . $stmt->error;
    }


    $stmt->close();
    $con->close();
}
?>