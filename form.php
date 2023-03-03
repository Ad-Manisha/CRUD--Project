<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
      <title>PHP CRUD operations</title>
      <style>
        #display-btn{
        background-color:green;
        position:relative;
        left:1400px;
        bottom:10px;
        color:white;
        border :0;
        outline:none;
        border-radius: 5px;
        height:23px;
        width: 100px;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
        }

        #display-btn:hover{
                background-color:white;
                color: #abd3e6;
        }
      
      </style>
</head>

<body>
    <div class="container">
        <div class="title">
            Registration Form
        </div>

        <form class="form" action="#" method="POST" >
        
            <div class="input_field">
                <label for="">First Name :</label>
                <input type="text" class="input" name="fname">
            </div>
            <div class="input_field">
                <label for="">Last Name :</label>
                <input type="text" class="input"name="lname">
            </div>
            <div class="input_field">
                <label for="">Password :</label>
                <input type="password" class="input" name="password">
            </div>
            <div class="input_field">
                <label for="">Confirm Password :</label>
                <input type="password" class="input" name="conpassword">
            </div>
            <div class="input_field">
                <label >Gender:</label>
                <div class="custom_select">
                    <select name="gender">
                        <option value="Not Selected">Select</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                </div>   
            </div>
            <div class="input_field">
                <label for="">Email Address:</label>
                <input type="text" class="input" name="email">
            </div>
            <div class="input_field">
                <label for="">Phone Number:</label>
                <input type="text" class="input" name="phone">
            </div>
            <div class="input_field">
                <label for="">Address :</label>
                <textarea class="textarea" name="address"></textarea>
            </div>
            <div class="input_field" terms>
                <label class="check" >
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="Register">
            </div>
        </form>
    </div>
</body>
</html>

<?php

if (isset($_POST['Register'])) 
    {
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $pwd = $_POST['password'];
       $cpwd = $_POST['conpassword'];
       $gender = $_POST['gender'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];

       $query = "INSERT INTO  FORM (fname,lname,password,cpassword,gender,email,phone,address)values('$fname','$lname', '$pwd','$cpwd','$gender','$email','$phone','$address')";
        $data = mysqli_query($conn,$query);

         if($data){   
             echo"Data Inserted into Database";
        }
        else{
            echo"failed";
        }
    }     

?>
<div><a href="./display.php" ><button id="display-btn">Display Table </button></a> </div>
 