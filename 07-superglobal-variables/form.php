<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in php</title>
</head>
<body>

    <h1>Form in PHP</h1>
    <!-- action is the place where i go -->
    <form method="GET" action="get-info.php">
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </p>

        <p>
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname">
        </p>

        <p>
            <input type="submit" name="" id="" value="Send data">
        </p>

    </form>
    
</body>
</html>