<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    $grades=$_POST['grades'];


$con=new mysqli('localhost','root','','employee_form');

if($con){
    //echo"Connection successful";
    $sql="insert into `data`(name,email,studentid,grades)
    values('$name','$email','$id','$grades')";

    $result=mysqli_query($con,$sql);
     if($result) {
        echo"Data submitted successfully";
     }else{
        die(mysqli_error($con));
     }

}else{
    die(mysqli_error($con));
}

}
?>