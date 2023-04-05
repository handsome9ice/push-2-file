<?php

    if(isset($_POST['Submit'])){

        $fName = $_POST['firstname'];

        $lName = $_POST["lastname"];

        $email = $_POST["email"];

        $city = $_POST["city"];

        $state = $_POST["state"];


        $data = array($fName, $lName, $email, $city, $state);


        $fp =fopen("store.txt","a");

        fwrite($fp, implode(" ", $data));
    
        fclose($fp);


        $displayFile = fopen("store.txt", "r");
    
        $readFile = fread($displayFile, filesize("store.txt"));

        fclose($displayFile);

        echo($readFile);
        
    }

    