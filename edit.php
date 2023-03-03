<?

    <?php include("connection.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM FORM where id = '$id'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    $result = mysqli_fetch_assoc($data);
    
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
          <title>PHP CRUD operations</title>
    </head>
    
    <body>
        <div class="container">
            <div class="title">
                Update Record
            </div>
    
            <form class="form" action="#" method="POST" >
            
                <div class="input_field">
                    <label for="">First Name :</label>
                    <input type="text" class="input" name="fname" value="<?php echo $result['fname'];?>">
                </div>
                <div class="input_field">
                    <label for="">Last Name :</label>
                    <input type="text" class="input"name="lname" value="<?php echo $result['lname'];?>">
                </div>
                <div class="input_field">
                    <label for="">Password :</label>
                    <input type="password" class="input" name="password" value="<?php echo $result['password'];?>">
                </div>
                <div class="input_field">
                    <label for="">Confirm Password :</label>
                    <input type="password" class="input" name="conpassword" value="<?php echo $result['cpassword'];?>">
                </div>
                <div class="input_field">
                    <label >Gender:</label>
                    <div class="custom_select">
                        <select name="gender">
                            <option value="Not Selected">Select</option>
                            <option value="female"
                            <?php
                            if($result['gender']=='female'){
                                echo "selected";
                            }
                        ?>
                            >Female</option>
                            <option value="male" 
                                <?php
                                    if($result['gender']=='male'){
                                        echo "selected";
                                    }
                                ?>
                            >Male</option>
                        </select>
                    </div>   
                </div>
                <div class="input_field">
                    <label for="">Email Address:</label>
                    <input type="text" class="input" name="email" value="<?php echo $result['email'];?>">
                </div>
                <div class="input_field">
                    <label for="">Phone Number:</label>
                    <input type="text" class="input" name="phone" value="<?php echo $result['phone'];?>">
                </div>
                <div class="input_field">
                    <label for="">Address :</label>
                    <textarea class="textarea" name="address" ><?php   echo $result['address'];?></textarea>
                </div>
                <div class="input_field" terms>
                    <label class="check" >
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>
                <div class="input_field">
                    <input type="submit" value="Update" class="btn" name="update">
                </div>
            </form>
        </div>
    </body>
    </html>
    
    <?php
    
    if (isset($_POST['update'])) 
        {
           $fname = $_POST['fname'];
           $lname = $_POST['lname'];
           $pwd = $_POST['password'];
           $cpwd = $_POST['conpassword'];
           $gender = $_POST['gender'];
           $email = $_POST['email'];
           $phone = $_POST['phone'];
           $address = $_POST['address'];
    
           
            $query = "UPDATE FORM SET fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',gender='$gender', email='$email',phone='$phone',address='$address' where id='$id'";


            $data = mysqli_query($conn,$query);
    
            
             if($data){   
                 echo"Data Updated  Successfully into Database";
                 ?>
                 <meta http-equiv="refresh" content="3;url=http://localhost/crud/display.php"/>
                 <?php
            }
            else{
                echo"failed to update data ";
            }
    
        }
           
    ?>
?>