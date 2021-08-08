
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
       <div class="full-page">
        <div class="navbar">
            <div>
                <a href=''></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'></a></li>
                    <li><a href='#'></a></li>
                    <li><a href='#'></a></li>
                    <li><a href='#'></a></li>
                    <!--<li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>-->
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' action="validation.php" method="post">
                    <input type='text' name="user" class='input-field'placeholder='Username' required >
		    <input type='password' name ="password"class='input-field'placeholder='Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
		 <form action="registration.php" id='register' class='input-group-register'method="post">
		     <input type='text' name="user"class='input-field'placeholder='Username' required>
		     <input type='password' name="password"class='input-field'placeholder='Password' required>
		     <input type='checkbox'class='check-box'><span>I agree to the terms andonditions</span>
                    <button type='submit'name="save" class='submit-btn' >Register</button>
	         </form> 
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	
    
</body>
</html>