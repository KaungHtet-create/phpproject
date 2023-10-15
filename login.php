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
        
            <div class="login">
                <div class="loginform">
       
                <form method="post">
                    <label class="loginitem" >Email :</label>
                    <input type="email" class="loginitem" name="email" required>
                   
                    <label class="loginitem">Password :</label>
                    <input type="password" class="loginitem" name="password" required>
                    <input type="submit" class="loginbt" name="sub" value="LOGIN">
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
    <?php
        session_start();
        error_reporting(1);
        include("connection.php");
        $i=$_REQUEST['img'];
        if(isset($_POST['sub'])){
        if($_POST['email']=="" || $_POST['password']=="")
        {
            $err="Please enter your email and password";
        }
        else{
            $d=mysql_query("select * from foodregister where Email='{$_POST['email']}'");
            $row=mysql_fetch_object($d);
            $fid=$row->Email;
            $fpwd=$row->Password;
            if($fid==$_POST['email'] && $fpwd==$_POST['password'])
            {
                $_SESSION['semail']=$_POST['email'];
                header("location:order.php?img=$i");
            }
            else{
                $err="your email or password is correct";
            }
        }
         }
        ?>
