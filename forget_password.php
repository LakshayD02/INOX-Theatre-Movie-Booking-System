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

  						<a href="./index.html"><img src="img/logo.png" alt="" width="250px"></a>
					</tr>
					<tr>
						<td><b>Email Id:</b></td>
					</tr>
					<tr>
						<td><input type="text" class="inputbox" id="email"/>
              <br><p id="emailerror"></p></td>
					</tr>
					<tr>
						<td><b>Old Password Id:</b></td>
					</tr>
					<tr>
						<td><input type="password" class="inputbox" id="oldpassword"/>
              <br><p id="oldpassworderror"></p></td>
					</tr>
					<tr>
						<td><b>New Password:</b></td>
					</tr>
					<tr>
						<td><input type="password" class="inputbox" id="newpassword" />
              <br><p id="newpassworderror"></p> </td>
            
					</tr>
					<tr>
						<td><b>Conform Password</b></td>
					</tr>
					<tr>
						<td><input type="password" class="inputbox" id="cpassword"/>
              <br><p id="cpassworderror"></p><div id="msg"></div></td>
					</tr>
					<tr>
						<td align="center"><br />

						 <button class="btn-normal" id="login">Submit</button>
						</td>
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
    var email = $("#email").val().trim();
    var oldpassword = $("#oldpassword").val().trim();
    var newpassword = $("#newpassword").val().trim();
    var cpassword = $("#cpassword").val().trim();

   
     if( email == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }

  if( oldpassword == "")
 {
  error = " <font color='red'>!Requrie Email.</font> ";
  document.getElementById( "oldpassworderror" ).innerHTML = error;
  return false;
 }

  if( newpassword == "")
 {
  error = " <font color='red'>!Requrie Email.</font> ";
  document.getElementById( "newpassworderror" ).innerHTML = error;
  return false;
 }

  if( cpassword == "")
 {
  error = " <font color='red'>!Requrie Email.</font> ";
  document.getElementById( "cpassworderror" ).innerHTML = error;
  return false;
 }
  if( cpassword != newpassword)
 {
  error = " <font color='red'>!Password is not Match.</font> ";
  document.getElementById( "cpassworderror" ).innerHTML = error;
  return false;
 }
    $.ajax({
      url:'forget.php',
      type:'post',
      data:{email:email,oldpassword:oldpassword,newpassword:newpassword},
      success:function(response){
          if(response == 1){
                                    window.location = "login.php";
                                }else{
                                     error = " <font color='red'>!Invalid UserId.</font> ";
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