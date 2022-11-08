<?php


session_start();






?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
    
    <style>
        body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #808080;
}
      .container {
  position: relative;
  max-width: 430px;
  width: 100%;
  padding: 35px;
  padding-right: 58px;
  border-radius: 8px;
  background-color: white;}
  .container form {
  margin-top: 30px;
  height: 370px;;
}
.container header {
  font-size: 35px;
  font-weight: 500;
  color: #333;
  font-family:verdana;
}
.container form {
  margin-top: 15px;
  height: 470px;;
}
form .input-field {
  position: relative;
  height: 45px;
  width: 100%;
}

.input-field input {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  border-radius: 8px;
  padding: 0 15px;
  border: 1px solid #d1d1d1;
}
.invalid input {
  border-color: #d93025;
}
.input-field .show-hide {
  position: absolute;
  right: 13px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 18px;
  color: #919191;
  cursor: pointer;
  padding: 3px;
}

.button input {
  color: #fff;
  font-size: 16px;
  font-weight: 400;
  background-color: rgb(104, 85, 224);
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input:hover {
  background-color: rgb(104, 85, 224);;
}
    </style>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    
    
	
</head>
<body >
<div>
<div class="wrapper">
     
    <div class="form">

    <div class="container">
      <header>Profile</header>
        <form action="" method="POST">
            <div class="input-field ">
                <label style = "font-family:georgia,garamond,serif;font-size:20px;color: #333;font-family:verdana;">First Name</label>
                <input type="email"  placeholder="First Name"  name="fn">
            </div>
            <br> 
            <br> 
                <div class="input-field ">
                <label style = "font-family:georgia,garamond,serif;font-size:20px;font-family:verdana; color: #333">Last Name</label>
                <input type="text" placeholder="Last Name"  name="ln">
            </div>  
            <br>
            <br>
                
                
            <div class="input-field ">
                <label style = "font-family:georgia,garamond,serif;font-size:20px;color: #333;font-family:verdana;">Phone Number</label>
                <input type="text" placeholder="Valid Number" name="ph">
            </div> 
            <br>
            <br>
            <div class="input-field ">
                <label style = "font-family:georgia,garamond,serif;font-size:20px;color: #333;font-family:verdana;">Address</label>
                <input type="text" placeholder="Address" name="add">
            </div> 
            <br>
            <br>
            <div class="input-field ">
                <label style = "font-family:georgia,garamond,serif;font-size:20px;color: #333;font-family:verdana;">Postal Code</label>
                <input type="text" placeholder="Valid Six Digit Code" name="ps">
            </div> 
            <br>
            <br>
            <br>
            <div class="input-field button ">
                <input type="submit" value="Register" class="btn">
            </div>

        
        </form>
        </div>
    </div>
</div>
</div>	
	
</body>
</html> 



 