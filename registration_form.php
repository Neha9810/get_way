
<html>
    <head>
        <title>
            Registration form
        </title>
    </head>
    <body>
        <h1>
            Registration
        </h1>
        <form method="post" action="registration_submit.php">
            Name:     <input type="text" name="Name"/><br><br/>
            Email:    <input type="text" name="email"/><br><br/>
            Password: <input type="password" name="Password"/><br><br/>
            <input type="submit" name="submit" value="Submit"/> <br/>
        </form>
    </body>
</html>


<?php
error_reporting(0);
if( isset($name) || isset($email) || isset($password)) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    echo $name . "<br/>";
    echo $email . "<br/>";
    echo $password . "<br/>";
};
?>


<html>
    <head>
        <title>
            Login form 
        </title>   
    </head>
    <body>
        <h1>
            Login
        </h1>  
        <form method="post" action="login_submit.php">
            Email:    <input type="text" name="email"/> <br><br/>
            Password: <input type="password" name="password"/> <br></br>
            <input type="submit" name="submit" value="Submit"/><br></br>
        </form>
    </body>
</html>


<?php
error_reporting(0);
if( isset($email) || isset($password)) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    echo $name . "<br/";
    echo $password . "<br/>";
};
?>    