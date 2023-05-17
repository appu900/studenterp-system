<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="w-full h-screen  flex  ">
        <!-- form section -->
           <div class="w-[50%]  pl-[200px]">
            <h1 class="mt-[90px] text-2xl font-semibold">Hey ,Sign up to our ERP system</h1>
            <p class="text-gray-400 text-sm mt-2">have an account in our erp <a class=" text-[#1B9C85]" href="studentLogin.php">Sign-in </a>here</p>
            <form action="" method="POST" class="mt-10">
                 
                <div class="flex flex-col gap-2 w-[350px] ">
                <p class="text-gray-600">Name</p>   
                <input type="text" placeholder="enter name" class="border-2 border-[#1B9C85] px-10 h-[50px] rounded-md outline-none focus:ring " name="name">
                </div>

                <div class="flex flex-col gap-2 w-[350px] mt-5">
                    <p class="text-gray-600">Registration Number</p>   
                    <input type="text" placeholder="enter name" class="border-2 border-[#1B9C85] px-10 h-[50px] rounded-md outline-none focus:ring" name="rollno">
                </div>

                <div class="flex flex-col gap-2 w-[350px] mt-5">
                    <p class="text-gray-600">College Email</p>   
                    <input type="email" placeholder="enter name" class="border-2 border-[#1B9C85] px-10 h-[50px] rounded-md outline-none focus:ring" name="email">
                </div>

                <div class="flex flex-col gap-2 w-[350px] mt-5">
                    <p class="text-gray-600">Password</p>   
                    <input type="password" placeholder="enter name" class="border-2 border-[#1B9C85] px-10 h-[50px] rounded-md outline-none focus:ring" name="password">
                </div>


                <div class="mt-7">
                    <button type="submit" name="submit" class="w-[350px] h-[60px] border bg-[#1B9C85] text-white text-[18px] font-semibold rounded-md shadow-lg hover:bg-blue-800">Create Account</button>
                </div>
                    
                

            </form>
           </div>

           <!-- image section -->
           <div class="w-[50%] mr-[100px] mt-10">
              <img src="html.jpg" alt="" class="h-[600px] mt-10">
           </div>
    </div>
</body>
</html>




<?php


include 'dbconnection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rollno = $_POST['rollno'];
    $password = $_POST['password'];


    $sql_query = "insert into `studentinfo` (name,rollno,email,password) values('$name','$rollno','$email','$password')";
    $result =mysqli_query($conn,$sql_query);
    if($result){
        // echo "data inserted sucessfully";
        header('location:studentLogin.php');
    }
    else{
        echo " some thing went wrong";
    }




}

?>









  

<!-- //   include 'connect.php'; -->

  <!-- if(isset($_POST['submit'])){ -->
    <!-- $name = $_POST['name']; -->
    <!-- $email = $_POST['email']; -->
    <!-- $mobile = $_POST['mobile']; -->
    <!-- $password = $_POST['password']; -->
  

  <!-- $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')" ; -->
  <!-- $result = mysqli_query($conn,$sql); -->
  <!-- if($result){ -->
    <!-- echo "data inserted sucessfully"; -->
    <!-- // header('location:display.php'); -->
  <!-- } -->
  <!-- else{ -->
    <!-- die(mysqli_error($conn)); -->
  <!-- } -->
<!-- ?>  -->