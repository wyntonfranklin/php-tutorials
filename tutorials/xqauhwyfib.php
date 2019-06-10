<?php
if(isset($_POST['phpform'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    echo 'You submitted a name='. $name . ' and an email='.$email;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Creation</title>
</head>
<body>

<h1>My First PHP form</h1>
<p>My first php form.</p>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        UserName:<br>
        <input type="text" name="name" value=""><br>
        Email:<br>
        <input type="text" name="email" value=""><br>
        <br>
        <input type="submit" value="Submit" name="phpform">
    </form>
</body>
</html> 