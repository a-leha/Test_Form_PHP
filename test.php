<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Some Title</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <?php
    
    $users = [];

    class User
    {
        public $login, $email, $pass;
        function __construct($login, $email, $pass)
        {
            $this->login = $login;
            $this->email = $email;
            $this->pass = $pass;
        }

        function getInfo()
        {
            echo "<div class = 'out'> Your name: " . $this->login . "</div>";
            echo "<div class = 'out'> Your email: " . $this->email . "</div>";
            echo "<div class = 'out'> Your password: " . $this->pass . "</div>";
        }
    }

    if ($_POST["login"] == "" || $_POST["email"] == "" || $_POST["pass"] == "") {
        echo "<div class='nothing' >Oh no! Need input all data!</div>";
        echo "<div><a href='http://localhost/'>Retry</a></div>";
    } else {
        if ($_POST["pass"] == $_POST["pass_confirm"]) {

            array_push($users, new User($_POST["login"], $_POST["email"], $_POST["pass"]));
            foreach ($users as $value) {
                $value->getInfo();
            }
        } else {
            echo "<div class='nothing' >Passwords don't match :(</div>";
        }
        echo "<div><a href='http://localhost/'>Try again!</a></div>";
    }

    ?>
</body>

</html>