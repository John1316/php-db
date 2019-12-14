<html>

<head>
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">

    <style>
    body {
        font-family: 'Gelasio', serif;
        background-image: url(images/cover2.jpeg);
        background-size: 100% 100%;
        padding:130px 0px 130px 1220px;
        color: black;
        text-align:center;
        font-weight:500;

    }

    fieldset {
        width: 25%;
  

    }
    input{
        border:red 2px solid;
        border-radius:15px;
        padding: 5px 10px;
        margin:10px 25px;
        background-color:transparent;
    }
    form{
        padding:5px 10px;
    }
    button{
        border:none;
        color:#fff;
        background-color:brown;
        padding:10px 20px;
        border-radius:10px;
    }
    .btn{
        border:none;
        color:#fff;
        background-color:brown;
        padding:10px 20px;
        border-radius:10px;
        cursor: pointer;

    }
    p{
        font-family: 'Pacifico', cursive;
        font-size:25px;
        font-weight:600;
    }
    </style>

</head>

<body>
   
    <fieldset>
        <legend> Sign up</legend>
        <form name="register" action="code.php" method="POST">
            Name: <input type="text" name="name" /> 
            Username: <input type="text" name="user" /> 
            Password: <input type="password" name="pass" required="required" /> 
            <button style="margin-top:5px;" type="submit" name="submit">submit</button>
        </form>
    </fieldset>
    <p>Click here if you have an existing one.</p>
    <a href='login.php'><button class="btn">LogIn</button></a>
</body>

</html>