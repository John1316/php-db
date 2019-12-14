<?php
require_once('connection.php');
$product = "SELECT * FROM product";
$query = mysqli_query($conn,$product) or die("Error:".mysqli_error($conn)) ;
$result= mysqli_fetch_array($query);
do{
 ?>
 <html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Products</title>
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.shoe{
    margin-top: 20px;
    width: 25%;
    text-align: center;
    float: left;
}
.shoe img{
    border-radius: 50%;
    width: 300px;
    height: 300px;
}
.shoe p, .shoe h2{
    padding: 10px;
}
.shoe p{
    color: #868686
}
h3{
    font-family: 'Great Vibes', cursive;
font-size: 23px;
}
.brdr{
    width:25%;
    height: 2px;
    background-color: #868686;
    margin: auto;
}
</style>
</head>


        <section class="shoe">
            <img src="<?php echo $result ['image'] ;?>">
            <h2><?php echo $result ['name']; ?></h2>
            <div class="brdr"></div>
            <p>Objectively product front end action items and high standards in manufactured products.</p>
            <h3>$<?php echo $result ['price']; ?></h3>            
        </section>
 

<?php
}
while($result=mysqli_fetch_array($query));
?>
