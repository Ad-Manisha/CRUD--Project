<html>
<head>
    <title>Display</title>
<style>
    body{
        background:#abd3e6;
    }
    table{
        background-color: white;
    }
    .update, .delete,#add-btn{
        background-color:green;
        color:white;
        border :0;
        outline:none;
        border-radius: 5px;
        height:23px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
    }
    .delete{
        background-color:maroon;
    }

    #add-btn:hover{
        background-color:white;
        color: #abd3e6;
    }
    #add-btn{
        position:absolute;
        left:1400px;
        bottom:300px;
    }
</style>
</head>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total != 0){
    
    ?>
    <h2 align="center">Displaying all the records from the DB</h2>
    <table border = "1" cellspacing="7" align="center">
        <tr>
            <th width="3%">Id</th>
            <th width="8%">First Name</th>
            <th width="7%">Last Name</th>
            <th width="5%">Gender</th>
            <th width="20%">Email</th>
            <th width="15%">Phone</th>
            <th width="20%">Address</th>
            <th width="22%">Action</th>
        
        </tr>
        
    <?php
    while($result = mysqli_fetch_assoc($data)){
        echo " <tr>
                <td>".$result['id']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['address']."</td>
                <td><a href='edit.php?id={$result['id']}'><input type='submit' value='Update' class='update'></a>  

                <a href='delete.php?id={$result['id']}'><input type='submit' value='Delete' class='delete'></a></td>  
            </tr>
            ";
    }
}
else{
    echo "No records found";
}
?>

<div><a href="./form.php" ><button id="add-btn">Add Data</button></a> </div>
</table>
</html>
