<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="filePush.css"/>
    <title>Document</title>
</head>
<body>

<header>
    <h1>List of Collected input</h1>
</header>

<?php

    if(isset($_POST['Submit'])){

        $fName = $_POST['firstname'];

        $lName = $_POST["lastname"];

        $email = $_POST["email"];

        $city = $_POST["city"];

        $state = $_POST["state"];


        $data = array($fName, $lName, $email, $city, $state);


        $fp =fopen("store.txt","a");

        $step = fwrite($fp, implode(" ", $data));

        echo $step . '<br>';
    
        fclose($fp);
        
    }

?>
    
    
<?php

    file('store.txt');

        echo '<ol>';

            foreach ($data as $item){

                echo '<li>' . $item . '</li>';

            }

        echo '</ol>';

?>  

    
</body>
</html>