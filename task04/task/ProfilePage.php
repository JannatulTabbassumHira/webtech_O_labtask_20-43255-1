<?php
$name = $n = $e = $g = $db =$im = ""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
    header("location:LoginPage.php");
}

            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
            if($un==$name){
               $n = $Info->Name;
               $e = $Info->Email ;
               $g = $Info->Gender ;
               $db =$Info->Date_of_Birth ;
               $im = $Info->Image ;

              }
            }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">

</head>
<body >
    <div class="full-page">
            <header class="navigation-bar">
                <div class="logo">
                    <h1>Foodie</span></h1>
                </div>>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href='ProfilePage.php'>Logged in as <?php echo $name?>   | </a></li>
                        <li><a href='LogOut.php'>Logout | </a></li>
                    </ul>
                </nav>
                </header>
        <div style="border: 1px solid white; width: 25%; height: 500px;margin-top: 140px; color: white; font-size: 30px; float: left">
                    <ul>
                        <li ><a href='Dashboard.php' style= "color:white;">Dashboard </a></li>
                        <li ><a href='ProfilePage.php' style= "color:white;">View Profile  </a></li>
                        <li ><a href='EditProfile.php' style= "color:white;">Edit Profile  </a></li>
                        <li ><a href='ChangeProfilePicture.php' style= "color:white;">Change Profile Picture </a></li>
                        <li ><a href='ChangePassword.php' style= "color:white;">Change Password  </a></li>
                        <li ><a href='LogOut.php' style= "color:white;">Logout  </a></li>
                    </ul>        	
</div>
        <div style="border: 1px solid white; width: 74%; height: 500px;margin-top: 140px;color: white; font-size: 25px;background: rgba(0,0,0,0.6); float: left; padding-left: 10px">
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h2 class="main-heading">Profile</h2> </legend>
        <div div style="border: 1px solid white; width:250px; height:250px; color: white; float:right;">
        <img src="<?php echo $im?> " alt = "<?php echo $n?> ">
        <a href="ChangeProfilePicture.php" style= "color:cyan;">Change</a></div>
        <label for="name">Name  : <?php echo $n?> </label><br>
        <span class="underline">______________________</span><br> 
        <label for="email">Email  : <?php echo $e?> </label><br>
        <span class="underline">______________________</span><br> 
        <label for="gender">Gender  : <?php echo $g?> </label><br>
        <span class="underline">______________________</span><br>
        <label for="dob">Date of Birth  : <?php echo $db?> </label><br>
        <span class="underline">______________________</span><br><br>          
        <a href="EditProfile.php" style= "color:cyan;">Edit Profile</a>
    </fieldset>

        </div>
 </div>
  <footer>
   <p>Copyright @ 2017</p>
 </footer>           
</body>
</html>