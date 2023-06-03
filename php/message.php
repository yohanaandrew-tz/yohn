<!doctype html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>Thank you!</title>
        <style>
            #container{width: 75%; margin: auto; border: 3px outset; padding: 10px; border-radius:20px; background-color:wheat;}
            a{text-decoration:none;}
        </style>
    </head>
<body>
    
        <p style="text-align:center">Thank you for contacting me, I'll reply soon</p>
        <div id="container">
    <ul>
        <li><b>Your name:</b> <?php echo $_POST["name"] ?></li>
        <li><b>Email:</b> <?php echo $_POST["email"] ?></li>
        <li><b>Your message:</b> <?php echo $_POST["message"] ?></li>
    </ul>
    <?php
    //server name = localhost
    // username = root
    //password = empty database name
    $conn = mysqli_connect("localhost", "root", "", "yohana");
    // check connection
    if($conn === false){
        die("ERROR: Could not connect." . mysql_connect_error());
    }
    //Taking all values
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    // insert query excution
    // table name is replies
    $sql = "INSERT INTO replies VALUES (NULL,'$name', '$email', '$message')";
    if(mysqli_query($conn, $sql)){
        echo "<p>Thank you!</p>";
    }
    else {
    echo "ERROR:Hush! Sorry $sql. "
    . mysqli_error($conn);
    }

    // close connection 
    mysqli_close($conn);
     ?>
    </div>
    <p style="text-align:center;"><a href="index.html">Back to home page</a></p>
</body>
</htmml>