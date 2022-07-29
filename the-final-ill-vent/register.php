
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILLVENT</title>
    <link rel="stylesheet" href="register.css" />
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
    if(isset($_POST['submit'])){
        $Firstname = $_POST['Firstname'];
        $lastName = $_POST['lastName'];
       $email = $_POST['email'];
   
       $password = $_POST['password'];
    
   
      $street = $_POST['street'];
      $city = $_POST['city'];
     $aptNo = $_POST['aptNo'];
   
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $image = $_POST['image'];
     
   
     $sql = "INSERT INTO users (Firstname, lastName, password, email, city, street, aptNo, gender, age, image)
     VALUES ('$Firstname', '$lastName','$password', '$email','$city', '$street',  '$aptNo', '$gender', '$age', '$image')";
     if(mysqli_query($conn, $sql)){
   
       $lastId= mysqli_insert_id($conn);
    $id = $_SESSION['id']=$lastId;
   
   
    $_SESSION['city'] = $city ;
       
     } 
   else{
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
  
     
       
     }
     
     ?>
   
     
   
    <form method="post" action="register.php"  >

       
        <section>
        
        <div class="board">
          <h1>sign up </h1>
        
        <img id="thumbnail" src="" alt="image-preview-here" style="display:none" />
        </div>
        
        <div >
        
        <p >
        <a >
                            <span >
                                <i ></i>
                            </span>
                            <span>Upload image</span>
                            <input style="border:4px solid;  border-radius: 25px;   border-color: white; " name="image" type="file" accept="image/*" onchange="showMyImage(this)" value=""
                             />
                        </a>
        </p>
        </div>
        
        
        
        </section>
        
        
        
           <div>
               
                 <label>First Name</label>
                  <input type="text"  id="fn" placeholder="Ex. George" name="Firstname" required>
                 
               </div>
               <div  >
                   <label>Last Name</label>
                   <input   type="text"  id="ln"  placeholder="ex:mohamed" name="lastName" required>
                 </div>
             </div>
            
                     <div >
                           <label>Email address</label>
                           <input style="border:4px solid;  border-radius: 25px;   border-color: white; " type="email"  id="em"  placeholder="ex:gm@gmail.com" name="email" required>
                         </div>
        
               <div >
                   <label >Password</label>
                   <input style="border:3px solid ; border-radius: 25px; border-color: white; " type="password" id="Password1" placeholder="Ass99@" name="password" required>
                 </div>
        
                 <div >
                                   <label >Mobile number</label>
                                   <input style="border:4px solid ; border-radius: 25px; border-color: white; " type="number"  id="mn"  placeholder="01043534566" name="phone">
                                 </div>
                               
                                 <div >
                                 <div >
                                       <label  >City</label>
                                             <select id="city" name="city" required >
                                               <option selected>City</option>
                                               <option value="Cairo">Cairo</option>
                                               <option value="Giza">Giza</option>
                                               <option value="Alex">Alex</option>
                                             </select>
                                     </div>
                                   <div >
                                     <label >street</label>
                                     <input type="text"  id="inputAddress2" placeholder="Street" name="street" required>
                                   </div>
                                     
                                     <div >
                                         <label >Appartment number</label>
                                       <input type="text"  placeholder="appartment number" name="aptNo" required>
                                     </div>
                                </div>
                                  <div >
                                     
                                  <div >
                                             <label >Gender</label>
                                             <select  id="gender" name="gender" required>
                                               <option selected>Gender</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                             </select>
                                           </div>
        
                                           <div >
                                             <label >Age</label>
                                             <select  id="age" name="age" required>
                                               <option selected>age</option>
                                               <option value="18">18</option>
                                               <option value="19">19</option>
                                               <option value="20">20</option>
                                               <option value="21">21</option>
                                               <option value="22">22</option>
                                               <option value="23">23</option>
                                               <option value="24">24</option>
                                               <option value="25">25</option>
                                               <option value="26">26</option>
                                               <option value="27">27</option>
                                               <option value="28">28</option>
                                               <option value="29">29</option>
                                               <option value="30">30</option>
                                               <option value="31">31</option>
                                               <option value="32">32</option>
                                               <option value="33">33</option>
                                               <option value="34">34</option>
                                               <option value="35">35</option>
                                               <option value="36">36</option>
                                               <option value="37">37</option>
                                               <option value="38">38</option>
                                               <option value="39">39</option>
                                               <option value="40">40</option>
                                               <option value="41">41</option>
                                               <option value="42">42</option>
                                               <option value="43">43</option>
                                               <option value="44">44</option>
                                               <option value="45">45</option>
                                               <option value="46">46</option>
                                               <option value="47">47</option>
                                               <option value="48">48</option>
                                               <option value="49">49</option>
                                               <option value="50">50</option>
                                             </select>
                                           </div>
                                  </div>

                               <a id="fill" href="Clipboard.html"><h3>fill the clipboard</h3></a>
        </div>
               <input id="sub" type="submit" name="submit" value="Submit">
             </form>
             
         </div>
          </div>
        </div>
        
        </div>
        
        </div>
        
        </div>
        
    
</body>
</html>