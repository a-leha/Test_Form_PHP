<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Some Title</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
     <?php
    if ($_POST["login"] == "" || $_POST["email"] == "" || $_POST["pass"] == "") {
        echo "<div class='nothing' >Oh no! Need input all data!</div>";
        echo "<div><a href='http://localhost/'>Retry</a></div>";
    } else {
        echo "<div class = 'out'> Your name: " . $_POST["login"] . "</div>";
        echo "<div class = 'out'> Your email: " . $_POST["email"] . "</div>";
        echo "<div class = 'out'> Your password: " . $_POST["pass"] . "</div>";
        echo "<div><a href='http://localhost/'>Try Again!</a></div>";
    }
    ?>
</body>

</html>