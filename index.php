<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <Form action="" method="post">
        <input type="text" name="firstname" placeholder="First name" required><br>
        <input type="text" name="lastname" placeholder="Last name"required><br>
        <input type="text" name="email" placeholder="e-mail"required><br>
        <input type="text" name="city" placeholder="City"><br>
        <input type="text" name="state" placeholder="State"><br>
        <input type="submit" name="Submit">
    </Form>
</body>
</html>


<?php

    if(isset($_POST['Submit'])){

        $fName = $_POST['firstname']. " ";

        $lName = $_POST["lastname"]. " ";

        $email = $_POST["email"]. " ";

        $city = $_POST["city"]. " ";

        $state = $_POST["state"];

        $data = [$fName, $lName, $email, $city, $state];

        $fp =fopen("store.txt","a");

        fwrite($fp, $data[0]);
        fwrite($fp, $data[1]);
        fwrite($fp, $data[2]);
        fwrite($fp, $data[3]);
        fwrite($fp, $data[4]);
    
        fclose($fp);
        
    }