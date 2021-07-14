<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
		
        $username_err = 'Please enter username.';
    } else{
		
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
		
        $password_err = 'Please enter your password.';
    } else{
		
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){ 
				
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $password);
                    if(mysqli_stmt_fetch($stmt)){
						
                        if($password){
							
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location:AdminPage.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
               body {
	      margin: 0;
		  padding: 0;
		  font-family: sans-serif;
		  background: url(n9.jpg);
		  background-size: cover;
		 
	 
    }
	
.box {
	    position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50% , -50%);
		width: 400px;
		padding: 40px;
		background: rgba(66, 235, 244 , 0.3);
		box-sizing: border-box;
		box-shadow: 0 15px 25px rgba(0,0,0,0.5);
		border-radius: 10px;
		  
     }
	 
.box h2 {
	
	       margin: 0 0 30px;
		   padding: 0;
		   color: BLUE;
		   font-family:Arial;
		   font-size:55px;
		   text-align: center;
       }
	   
.box .inputBox {
	               position: relative;
               }
			   
.box .inputBox input {
	                   width: 100%;
					   padding: 10px 0;
					   font-size: 16px;
					   color: #fff;
					   letter-spacing: 1px;
					   margin-bottom: 30px;
					   border: none;
					   border-bottom: 1px solid #fff;
					   outline: none;
					   background: transparent;
                    }
			   
			   
.box .inputBox label {
	                    position: absolute;
                        top: 0;
                        left: 0;
                        padding: 10px 0;
                        font-size: 16px;
                        color: black;
						letter-spacing: 1px;
                        pointer-events: none;
                        transition: 0.5s;						
                     }
					 
.box .inputBox input:focus ~ label ,
.box .inputBox input:valid ~ label {
	                                   top: -18px;
									   left: 10px;
									   font-size: 12px;
                                   }
								 
.box input[type=submit] {
	
	                         background: #136ad4;
							 border: none;
							 outline: none;
							 padding: 10px 20px;
							 color: black;
							 cursor: pointer;
							 border-radius: 5px;
							 
                        }
			   
			   a{
				   color:blue;
			   }
		
    </style>
</head>
<body>
    <div class="logo"><a href="Final1.html"><img src="logonew.png"></a></div>

    <div class="box">
        <h2>Admin Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="inputBox <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                
                <input type="text" name="username" required = "" value="<?php echo $username; ?>">
				<label>Username</label>
                <span class="help-block"><?register.phpphp echo $username_err; ?></span>
            </div>    
            <div class="inputBox <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                
                <input type="password" name="password" required = "">
				<label>Password</label>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
           
                <input type="submit"  value="Login">
           
           
        </form>
    </div>    
</body>
</html>