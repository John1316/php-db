<?php require_once('connection.php'); 

$myusername = $_POST['user'];
$mypassword = $_POST['pass']; 

$sql = "SELECT * FROM user WHERE username = '$myusername' and pass = '$mypassword'";

$result = mysqli_query($conn,$sql); 

if(!$result) {
    echo ('check as something went wrong in the sql statement'); }
    
else {
    
    $row = mysqli_fetch_array($result); 
        
    $count = mysqli_num_rows($result);

        if($count == 1) {
       header("location: home.php");
                        } 
        else {
       echo "Your Username or Password is invalid please, back and try again.";
             }
    }

?>

<html>

<head>
    <title>Sign Up</title>
    <style>
    body {
        background-image: url(images/wrong.jpg);
        background-size: cover;
        color: white;
    }
    </style>

</head>

<body>

</body>

</html>