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
        
            <div class="register">
                <div class="registerform">
        
                <form method="post">
                    <label class="registeritem" >Name :</label>
                    <input type="text" class="registeritem bg" name="name" required>
                    <label class="registeritem" >Email :</label>
                    <input type="email" class="registeritem bg" name="email" required>
                    <label class="registeritem">Phone :</label>
                    <input type="mobile" class="registeritem bg" name="phone" required>
                    <label class="registeritem">Password :</label>
                    <input type="text" class="registeritem bg" name="password" required>
                    <label class="registeritem">City :</label>
                    <input type="text" class="registeritem bg" name="city" required>
                    <label class="registeritem">Country</label>
                    <input type="text" class="registeritem bg" name="country" required><br>
                    <input type="submit" value="Register" clas="button" name="sub">
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
</php>
<?php
                    error_reporting(1);
                    include('connection.php');
                    if(isset($_POST['sub']))
                    {
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $password=$_POST['password'];
                        $city=$_POST['city'];
                        $country=$_POST['country'];
                        if(mysql_query("insert into foodregister(name,email,phone,password,city,country) values('$name','$email','$phone','$password','$city','$country')"))
                        {
                          header("location:register_sucess.php?name=$name & email=$email");
                        }
                        else{
                            $err="User already exit";
                        }
                    }
?>