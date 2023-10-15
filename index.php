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
      
          <div class="controlslide">
            <div id="demo" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/slid2.jpg" alt="Los Angeles" width="100%" height="100%">
                  <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                  </div>   
                </div>
                <div class="carousel-item">
                  <img src="img/slide1.jpg" alt="Chicago" width="" height="">
                  <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                  </div>   
                </div>
                <div class="carousel-item">
                  <img src="img/slide3.jpg" alt="New York" width="" height="">
                  <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                  </div>   
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="intro">
            <div class="left">
              <div class="lefttext">
              <h6>Welcome to</h6>
              <span>Shop Name</span>
              <h6>Address</h6>
              <ul class="ul">
                <li class="leftli">mg@gmail.com</li>
                <li class="leftli">09888888</li>
                <li class="leftli">Yangon,sanchaung</li>
              </ul>
            </div>
            </div>
            <div class="right">
              <div class="rightimg">
              <img src="img/eat.jpg"  alt="" id="img">
              </div>
            </div>
        </div>
        <h1>Food Menu</h1>
         <div class="menucontrol">
          <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from product ");
						echo"<form method='post'><table border='0' align='center' class='table'><tr>";
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
        </div>
        <div class="review">
              <div class="first">
                <img src="img/shopimg.jpg" width="100%" height="100%" class="firstimg">
              </div>
              <div class="second">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.9965173400087!2d96.12791912490854!3d16.826528868720533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195ee2ba94e5b%3A0xe4c131c10f63c7d6!2sHledan%20Skyway%20Bridge!5e0!3m2!1smy!2smm!4v1697250054218!5m2!1smy!2smm" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="third">
                  <div class="control">
                  <h3>Contact Form</h3>
                  <form method="post">
                   <label  class="input">Name:</label>
                   <input type="text"  required class="input" name="Name" required>
                   <label class="input">Email:</label>
                   <input type="email"  required class="input" name="Email" required>
                   <label class="input">Mobile:</label>
                   <input type="mobile"  required class="input" name="Mobile" required>
                   <label  class="input">Feeback:</label><br>
                   <textarea  width="80px" height="50px" name="Feeback" required></textarea>
                   <input type="submit" value="SEND" class="input a"  name="sub"/>
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