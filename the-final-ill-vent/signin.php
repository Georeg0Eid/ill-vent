<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Source+Sans+Pro:wght@600&display=swap"
      rel="stylesheet">
   
</head>
<body>
  <header class="header">
    <div class="header__logo-box">
      <img src="images/last-logo.png" alt="logo" class="logoSmall">
    </div>
    <div class="header__nav">
      <ul class="nav__menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="product.html">Store</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="signin.php">Sign in</a></li>
      </ul>
    </div>
  </header>
   <?php
  session_start();
  // Create connection
  $conn = new mysqli("localhost","root","", "illvent");
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 


  
  if(isset($_POST['submit']))
  {
  $Firstname = $_POST['Firstname'];
  $password = $_POST['password'];

   $query = "SELECT * FROM users WHERE  Firstname='$Firstname'AND password='$password' ";

 $result = mysqli_query($conn,$query);
 $num_row = mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
 if( $num_row ==1 )
      {
       $_SESSION['id']= $row['id'];
       $_SESSION['Firstname'] = $Firstname;

       $_SESSION['city'] = $city =$row['city'];
       $_SESSION['password'] = $password;
  header("location:index.html");
 
  exit;
  }
  else
     {
 echo '<script> alert("invalid E-mail or password");</script>';
  }
}

 
 
?>

<div class="center">
      <h1>sign in</h1>
      <form method="post" action="signin.php">
        <div class="txt_field">
          <input type="text" name="Firstname" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="submit" value="submit" >
        <div class="signup_link">
          Not a member? <a href="register.php">Signup</a>
        </div>
      </form>
    </div>
    
    
  </body>
</html>


