<html>

<head>
    <title>Log in</title>
    <style>
    body {
        background-image: url(images/cover3.jpeg);
        background-size: cover;
        color: white;
        padding:200px 0px 200px 1220px;
    }

    fieldset {
        width: 20%;
        padding:15px;
        font-family: 'Josefin Sans', sans-serif;
        text-align:center;
    }
    input{
        border:red 1px solid;
        border-radius:15px;
        padding: 5px 10px;
        margin:10px 25px;
        color:#fff;
        background-color:transparent;
    }
    form{
        padding:5px 10px;
    }
    button{
        border:none;
        border-radius:15px;
        background-color:brown;
        color:#fff;
        padding:10px 20px;
    }
    </style>

</head>

<body>
    <fieldset>
        <legend> Login to Fashion</legend>
        <form name="login" action="read.php" method="POST">
            Username: <input type="text" name="user" /> <br>
            Password: <input type="password" name="pass" required="required" /> <br>
            <button style="margin-top:10px;" type="submit" name="submit">Login</button>
        </form>
    </fieldset>
</body>

</html>