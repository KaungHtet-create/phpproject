<!DOCTYPE php>
<php>
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
        <div class="intro">
            <div class="left">
              <div class="location">
              <h6>Address :</h6>
              <ul class="ul">
                <li class="leftli">mg@gmail.com</li>
                <li class="leftli">09888888</li>
                <li class="leftli">Yangon,sanchaung</li>
              </ul>
            </div>
            </div>
            <div class="right">
                <div class="contactform">
                    <h4>Contact Information</h4>
                    <p>Send Message </p>
                    <?php
                    error_reporting(1);
                    include("connection.php");
                    if(isset($_POST['sub'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $mobile=$_POST['mobile'];
                    $feeback=$_POST['feeback'];
                    if(mysql_query("insert into contact (Name,Email,Mobile,Feeback) values('$name','$email','$mobile','$feeback')"))
                    {$err="Your contact sent successfully";}
        
                    }

                    ?>
                    <form class="ctform" method="post">
                     <label for="name" class="contactitem">Name:</label>
                     <input type="text" id="name" required class="contactitem" name="name" required/>
                     <label for="email" class="contactitem">Email:</label>
                     <input type="email" id="email" required class="contactitem" name="email" required/>
                     <label for="email" class="contactitem">Mobile :</label>
                     <input type="mobile" id="email" required class="contactitem" name="mobile" required/>
                     <label for="text" class="contactitem">Feeback:</label>
                     <textarea id="text" width="200px" height="50px" name="feeback" required></textarea><br><br>
                     <input type="submit" value="SEND"  class="contactitem" name="sub"/>
                    </form>
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
</php>