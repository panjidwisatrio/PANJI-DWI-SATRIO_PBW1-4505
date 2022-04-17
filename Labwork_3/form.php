<html lang="id">
<head>
    <title>Student Union Form</title>
</head>
</html>
<body>

<h2>Student Union Form</h2>
<form method="post" action="proses.php">
    Name: <label>
        <input type="text" name="name">
    </label>

    <br><br>

    E-mail: <label>
        <input type="text" name="email">
    </label>

    <br><br>

    Website: <label>
        <input type="text" name="website">
    </label>

    <br><br>

    Comment: <label>
        <textarea name="comment" rows="5" cols="40"></textarea>
    </label>

    <br><br>

    Gender:
    <label>
        <input type="radio" name="gender" value="female">
    </label>Female

    <label>
        <input type="radio" name="gender" value="male">
    </label>Male

    <label>
        <input type="radio" name="gender" value="other">
    </label>Other

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>
</body>