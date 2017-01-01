<?php

require("wconfig.php");
$db = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase);

if(isset($_POST['submit'])) 
	{ 
		if($_POST['password1'] == $_POST['password2']) 
				{
					 $checksql = "SELECT * FROM logins 
					 WHERE username='".$_POST['username']."';";

					  $checkresult = mysqli_query($db, $checksql); 

					  $checknumrows = mysqli_num_rows($checkresult);

					  if($checknumrows == 1) 
					  		{ 
					  			header("Location: " . $config_basedir . "wsignup.php?error=taken"); 
					  		}

					  $valid_user=$_POST['username'];

					  $verify_insert="INSERT INTO logins(username, password)
					  				VALUES('".$_POST['username']."', '".$_POST['password1']
					  						."');";
						$res_verify=mysqli_query($db, $verify_insert);

		header("Location: ".$config_basedir);

	
	}

// if passwords do not match..
		else
		{
			  header("Location: ".$config_basedir."/wsignup.php?error=pass");
		}
	
	}

else
{
	require("wheader.php");

	switch(isset($_GET['error']))
	{
		case "pass":
		echo "Passwords do not match!";
		break;
		case "taken": 
		echo "Username taken, please use another."; 
		break;
		default: 
		echo "Incorrect login details!";
		break;

	}

?>


<script type="text/javascript">

function validator(){

if( document.forms[0].elements[0].value == "" )
         {
            alert( "This field is required!" );
            document.forms[0].your_name.focus() ;
            return false;
         }

if( document.forms[0].elements[1].value == "" )
         {
            alert( "This field is mandatory!" );
            document.forms[0].your_name.focus() ;
            return false;
         }
if( document.forms[0].elements[2].value == "" )
         {
            alert( "This field is required!" );
            document.forms[0].your_name.focus() ;
            return false;
         }

}



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
	require("wfooter.php");

?>