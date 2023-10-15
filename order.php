<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if(isset($_POST['ord']))
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ordernumber.rand(000,999);
if(mysql_query("INSERT INTO buy(productno,price,name,phone,address,order_no) VALUES('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Online food Order system</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--slide-->
        <link rel="stylesheet" href="code/bootstrap.min.css">
        <script src="code/jquery.min.js"></script>
        <script src="code/popper.min.js"></script>
        <script src="code/bootstrap.min.js"></script>
        
        <!--slide-->
    </head>
    <body>
        <div class="header">
           <div class="logo">
                <img src="img/logo.png" alt="" class="logoimg">
           </div>
           <div class="menu">
                <ul>
                    <li class="item"><a href="index.php">Home</a></li>
                    <li class="item"><a href="foodmenu.php">Orders</a></li>
                    <li class="item"><a href="register.php">Register</a></li>
                    <li class="item"><a href="contact.php">Contact</a></li>
                </ul>
           </div>
        </div>
        <div class="order">
            <div class="ordercontrol">
             <?php
			include("connection.php");
			$sel=mysql_query("select * from product  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			
			?>
            <form  method="post">
				
                <label class="input o">Product No </label>
                <input type="text" name="prodno" id="prodno" value="<?php echo $mat['pro_type'];?>" class="input"/>
                <label class="input o">price  </label>
                <input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" class="input"/>
				 <label class="input o">Name </label>
                <input type="text" name="nam" id="nam" class="input" required/>
				 <label class="input o">Phone </label>
                <input type="text" name="pho" id="php" class="input" required/>
				 <label class="input o">Address</label>
                <textarea id="add" name="add" rows="0" cols="0" class="required" required></textarea>
				 
                <input type="submit" name="ord" id="ord" value="Sent order" class="input button" />
			
				
            </form>
            
</div>
        </div>  
           
       
        <div class="footer">
          <div class="footermenu">
          <ul>
              <li class="item fi"><a href="index.php">Home</a></li>
              <li class="item fi"><a href="foodmenu.php">Orders</a></li>
              <li class="item fi"><a href="index.php">About</a></li>
              <li class="item fi"><a href="contact.php">Contact</a></li>
              <li class="item fi"><a href="login.php">Login</a></li>
              <li class="item fi"><a href="register.php">Registers</a></li>
          </ul>
     </div>
          <center><p>@company;Jole</p></center>
        </div>
    </body>
    </html>
