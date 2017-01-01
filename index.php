

<?php 
session_start();
require("wheader.php"); 
?>


<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--navbar which maintains its position while we scroll down-->
<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="100" style="z-index: 10;">
<div class="container-fluid">
	 
	  <div class="navbar-header">

	  <!--toggle button -->
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_nav">
        <span class="glyphicon glyphicon-list"></span>
      </button>
      

	  <a class="navbar-brand" href="#">MyBlog</a>
	  </div>

	  <div class="collapse navbar-collapse" id="main_nav">

	  <ul class="nav navbar-nav">
	    <li class="active"><a href="#">Home </a></li>

	  </ul>

	  <ul class="nav navbar-nav navbar-right">
             
                     <li><a href="#" data-toggle="modal" data-target="#Sign-up"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
                      <li><a href="#" data-toggle="modal" data-target="#Login"><span class="glyphicon glyphicon-log-in" ></span> Login </a></li>
                      <li style="padding: 10px 5px;">
                      </li>
                 </ul>
             
        </div>

  </div>
</nav>


<div id="Login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        
<form action="wlogin.php" method="POST">
        <table> 
	<tr> 
		<td>Username  </td>
		 <td><input type="text" name="username"></td> 
	</tr> 
	<tr> 
		<td>Password  </td> 
		<td><input type="password" name="password"></td>
	 </tr> 
	 <tr> 
	 	<td colspan='2' align='center'>
	 		<input type="submit" name="submit" value="Login!" href="wlogin.php" >
	 	</td> 
	 </tr> 
	</table> 
	</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





<div id="Sign-up" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign-up</h4>
      </div>
      <div class="modal-body">
        
      <form action="wsignup.php" method="POST">
    <table>
	<tr>
		<td>Username</td>
		<td><input type='username' name='username'></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type='password' name='password1'></td>
	</tr>
	<tr>
		<td>Confirm Password</td>
		<td><input type='password' name='password2'></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>   
		<td colspan='2' align="center"><input type="submit" name="submit" value="Register!"></td> 
	</tr> 
</table>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div class="container-fluid">

	<!--start of flexslider-->
    <div style="padding:20px; margin-bottom: 75px; margin-top: 70px;">
        <div id="thumbnail-slider">
            <div class="inner">
                <ul>
                    <li>
                        <a class="thumb" href="food.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="health.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="movies.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="music.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="politics.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="tech.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="travel-budd.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="trends.png"></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!--end of flexslider-->





<div class="container-fluid">

		<div class="cat_box">
			<div class="row">

			
			<div class="col-md-3 col-sm-4 col-xs-6">	

				<div class="cat">

					<div class="item"><a href="cat_blog.html"><img class="cat_pic" src="food.jpg" ></a><h4>Food</h4></div> 

				</div>				
			</div>


			<div class="col-md-3 col-sm-4 col-xs-6">	

				<div class="cat">

					<div class="item"><a href="cat_blog.html"><img class="cat_pic" src="movies.jpg" ></a><h4>Movies</h4></div> 

				</div>				
			</div>


			<div class="col-md-3 col-sm-4 col-xs-6">	

				<div class="cat">

					<div class="item"><a href="cat_blog.html"><img class="cat_pic" src="politics.jpg" ></a><h4>Politics</h4></div> 

				</div>				
			</div>


			<div class="col-md-3 col-sm-4 col-xs-6">	

				<div class="cat">

					<div class="item"><a href="cat_blog.html"><img class="cat_pic" src="tech.jpg" ></a><h4>Technology</h4></div> 

				</div>				
			</div>


			


			<div class="col-md-3 col-sm-4 col-xs-6">	

				<div class="cat">

					<div class="item"><a href="cat_blog.html"><img class="cat_pic" src="travel.jpg" ></a><h4>Travel</h4></div> 

				</div>				
			</div>

			


			<div class="col-md-3 col-sm-4 col-xs-6">	

				<div class="cat">

					<div class="item"><a href="cat_blog.html"><img class="cat_pic"  src="trends.png" ></a><h4>Trends</h4></div> 

				</div>				
			</div>

			<div class="col-md-3 col-sm-4 col-xs-6">	

				<div class="cat">

					<div class="item"><a href="cat_blog.html"><img class="cat_pic" src="health.jpg" ></a><h4>Health</h4></div> 

				</div>				
			</div>

			


			<div class="col-md-3 col-sm-4 col-xs-6">	

				<div class="cat">

					<div class="item"><img class="cat_pic" src="music.jpg" ><h4>Music</h4></div> 

				</div>				
			</div>







			</div>

		</div>

<?php require("wfooter.php"); ?>
