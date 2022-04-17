<html lang="id">
<head>
    <title>Home Page</title>
</head>
<body>
<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
} else {
    die("Sorry, you cannot access this page");
}

if (!empty($name)) {
    if (!preg_match("/^[a-zA-Z \-.']*$/", $name)) {
        echo "Your input name is incorrect!
        Only letters and white space<br>";
    } else {
        $name = test_input($name);
        echo "Thanks, <b>" . $name . "</b><br><br>";
    }
} else {
    echo ("name is required <br><br>");
}

if (!empty($email)) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format! <br>";
    } else {
        $email =  test_input($email);
        echo "Your Email is: " . $email . "<br><br>";
    }
} else {
    echo ("email is required <br><br>");
}

if (!empty($website)) {
    if (!preg_match(
        "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website
        )
    ) {
        $website = test_input($website);
        echo "Your website is " . $website . "<br><br>";
    } else {
        echo "Invalid URL <br><br>";
    }
} else {
    echo ("Your website is: none <br><br>");
}

if (!empty($comment)) {
    $comment = test_input($comment);
    echo "Your comment is: " . $comment . "<br><br>";
} else {
    echo ("Your comment is: none <br><br>");
}

if (isset($_POST["gender"])) {
    $gender = $_POST["gender"];
}

if (!empty($gender)) {
    echo "You are: " . $gender . "<br><br>";
} else {
    echo ("Gender is required");
}

function test_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    return $data;
}
?>
</body>
</html>
