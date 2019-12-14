<html>

<head>
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">
    <style>
    body {
        background-image: url(images/login3.jpeg);
        background-size: cover;
        color: black;
        font-family: 'Solway', serif;
        font-weight:600;
        font-size:40px;
        text-align:center;

    }
     button{
    margin-top: 20px;
    padding: 15px 28px;
    border: none;
    font-family: "segoe ui light";
    font-weight: 600;
    font-size:20px;
    border-radius:10px;
    background-color:red;
    cursor: pointer;

}
    </style>
</head>

<body>

    <?php
require_once('connection.php'); 
$name = $_POST['name']; 
$username = $_POST['user'];
$password = $_POST['pass'];

$ins= "INSERT INTO user (name,username,pass) VALUES('$name','$username','$password')"; 
if(!mysqli_query($conn,$ins)){ 
    die('Error:'. mysqli_error($conn));
} 
else {
     echo"Your information was Inserted successfully."."<br>";
}

?>
    <p> Please press <a href='login.php'><button>here</button></a> to login </p>
</body>

</html>