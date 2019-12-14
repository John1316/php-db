<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans|Josefin+Slab&display=swap"
      rel="stylesheet"/>
    <title>Welcome</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.clr{
    clear: both;
}
nav{
    background-color: rgba(0,0,0,0.4);
}

nav ul li{
    font-size: 20px;
    padding: 20px;
float: right;
/* display: inline-block; */
list-style: none;
}
nav ul li a{
    color: white;
    text-decoration: none;
}
.home{
    height: 720px;
    text-align: center;
    /* background-image: url(images/cover12.jpg);
    background-size: 100% 100%; */
    background-color:gray;
    color: #fff;
}
.home img{
    margin: 40px 0px;
    height: 300px;
}
.home p{
    font-family: 'Dancing Script', cursive;
    font-size: 36px;
}
.home h1{
    margin-top: 10px;
    font-size: 50px;
    font-family: 'Lilita One', cursive;

}
.home button{
    margin-top: 20px;
    padding: 15px 28px;
    border: none;
    border-radius: 5px;
    font-family: "segoe ui light";
    font-weight: 600;
}
.btn{
    background-color: #c1ab84;
    cursor: pointer;
}


    </style>
  </head>
  <body>
    
<section class="home">
    <nav>
            <ul>
                    <!-- <li><a href="#"><img src="images/restaurant.png"></a></li> -->
                <li><a href="index.php">Contact us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="#home">Home</a></li>
            </ul>
            <div class="clr"></div>
        </nav>
        <h1>Happy Heels</h1>

        <img src="images/high-heel.png"> 
<p>Good shoes take you good places.</p>
<a href="products.php"><button class="btn">Learn About products</button></a>
</section>

  </body>
</html>
