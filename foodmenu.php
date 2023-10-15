<!DOCTYPE php>
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
      
          
       
        <div class="foodmenu">
          <h1 align="center">Menu</h1>
          <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from product ");
						echo"<form method='post'><table border='0' align='center'><tr>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%4==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='250' width='250' align='center'><img src='admin/images/$i' height='200' width='200'><br/>
 
 <b>Product name:</b>".$arr['pro_type'].
   "<br><b>Price:</b>&nbsp;".$arr['price'].
  "<br><a href='login.php?img=$i'><b>Buy</b></a>
   
   </td>";
  
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>	
        </div>
        <div class="review">
              <div class="first">
                <img src="img/shopimg.jpg" width="100%" height="100%" class="firstimg">
              </div>
              <div class="second">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.029404510088!2d96.1260678!3d16.8248973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194cb9d22975f%3A0xb4154d22dfc05daa!2z4YCc4YC-4YCK4YC64YC44YCQ4YCU4YC64YC44YCc4YCZ4YC64YC4LCDhgJvhgJThgLrhgIDhgK_hgJThgLo!5e0!3m2!1smy!2smm!4v1696768288187!5m2!1smy!2smm" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="third">
                  <div class="control">
                  <h3>Contact Form</h3>
                  <form metho="post">
                   <label for="name" class="input">Name:</label>
                   <input type="text" id="name" required class="input" name='Name' required/>
                   <label for="email" class="input">Email:</label>
                   <input type="email" id="email" required class="input" name="Email" required/>
                   <label for="email" class="input">Mobile :</label>
                   <input type="mobile" id="email" required class="input" name="Mobile" required/>
                   <label for="text" class="input">Feeback:</label>
                   <textarea id="text" width="80px" height="50px" name="Feeback" required></textarea>
                   <input type="submit" value="SEND" class="input a" name="sub"/>
                  </form>
                  <?php
                    error_reporting(1);
                    include("connection.php");
                    if(isset($_POST['sub']))
                    {
                      $name=$_POST['Name'];
                      $email=$_POST['Email'];
                      $mobile=$_POST['Mobile'];
                      $feeback=$_POST['Feeback'];
                      if(mysql_query("insert into contact(Name,Email,Mobile,Feeback) values('$name','$email','$mobile','$feeback')"))
                      {
                        $error="Successfully";
                      }
                    }
                  ?>
                  </div>
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