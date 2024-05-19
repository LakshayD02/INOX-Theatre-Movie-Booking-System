<html>
<head>
<title> Login Page</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="site.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div>
	<div class="parent-container">

		<table width="100%" height="100%">
		<tr>
			<td align="center" valign="middle">
				<div class="loginholder">
        
					<table style="background-color:white;" class="table-condensed">
					<tr>

  						<a href="./index.html"><img src="img/logo.png" alt="" width="350px"></a>
					</tr>
					<tr>
						<td><b>User Name:</b></td>
					</tr>
					<tr>
						<td><input type="text" class="inputbox" id="username"/>
              <br><p id="nameerror"></p></td>
					</tr>
					<tr>
						<td><b>Password:</b></td>
					</tr>
					<tr>
						<td><input type="password" class="inputbox" id="password" />
              <br><p id="passerror"></p><div id="msg"></div> </td>
            
					</tr>
					<tr>
						<td align="center"><br />

						 <button class="btn-normal" id="login">LOGIN</button>
						</td>
					</tr>
					<tr>
						<td align="left"><br />
						<span class="forgetpassword"><a href="admin/login.php">Admin Login</a></span></td>

					</tr>
					<tr>
						<td align="left"><br />
						<span class="forgetpassword"><a href="forget_password.php"> Forgot your Password?</a></span></td>

					</tr>
					
					<td><a href="register_form.php"> Register now</a></td>
					<tr>
						<td><hr style="background-color:blue;height:0px;margin:10px;"/></td>
					</tr>
					<tr>
						<td align="center"></td>
					</tr>
					

					</table>
        
				</div>
			</td>
		</tr>
		</table>
	</div>
</div>
<script type="text/javascript">

	$(document).ready(function(){
  $("#login").click(function(){
    var username = $("#username").val().trim();
    var password = $("#password").val().trim();

   
     if( username == "" )
 {
  error = " <font color='red'>Name Required</font> ";
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 }
  
  if( password == "")
 {
  error = " <font color='red'>Email Required</font> ";
  document.getElementById( "passerror" ).innerHTML = error;
  return false;
 }
    $.ajax({
      url:'login.php',
      type:'post',
      data:{username:username,password:password},
      success:function(response){
          if(response == 1){
                                    window.location = "index.php";
                                }else{
                                     error = " <font color='red'>Invalid Username</font> ";
                                     document.getElementById( "msg" ).innerHTML = error;
                                      return false;
                                }
        $("#message").html(response);
      }
    });
  });
});
</script>
</body>
</html>