<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <Form action="filePush.php" method="post">
        <input type="text" name="firstname" placeholder="First name" required><br>
        <input type="text" name="lastname" placeholder="Last name"required><br>
        <input type="text" name="email" placeholder="e-mail"required><br>
        <input type="text" name="city" placeholder="City"><br>
        <input type="text" name="state" placeholder="State"><br>
        <input type="submit" name="Submit">
    </Form>

</body>

</html>

<!-- Submit to server -->
<script>

    let xhr = new XMLHttpRequest();

    let collectedData = "..store.txt";

    if (fclose($fp) === true){

        xhr.open('POST', 'send-collectedData');

        xhr.send(null);

    }

<script/>

