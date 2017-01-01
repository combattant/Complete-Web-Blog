<?php 

require("wconfig.php");
require("wheader.php");
$db=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase);

if(isset($_POST['submit']))
{  session_start();

   $check_user="SELECT * FROM logins WHERE username='"
   .$_POST['username']."' AND password='".$_POST['password']."';";

   $res_check_user=mysqli_query($db,$check_user);
   $num_check_user=mysqli_num_rows($res_check_user);

   if($num_check_user==1) 
   {
      $row_check_uesr=mysqli_fetch_assoc($res_check_user);

      $_SESSION['USERNAME']=$row_check_uesr['username'];
      $_SESSION['PASSWORD']=$row_check_uesr['password'];

      header("Location: ".$config_basedir);
   }  
   else {
      header("Location: ".$config_basedir."/wlogin.php?error=1");
   }
}

else
{  
   if(isset($_GET['error'])) { 
      echo "Incorrect login, please try again!"; 
}

//validation of email id using javascript
?>



<script type="text/javascript">

function validate_Email(){

   var email = document.forms[0].email.value;
         atpos = email.indexOf("@");
         dotpos = email.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.forms[0].email.focus() ;
            return false;
         }
         return( true );
}
</script>








<?php
}

if(isset($_SESSION['USERNAME']))
{
   echo "<a href='wlogout.php'>Log out</a>";
}
 else
 { echo "<a href='wlogin.php'>Log in</a>"; } 

require("wfooter.php");  
?>