<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <!-- #F3F6F8 -->
    <div class="w-full h-screen bg-[   ]   flex ">
           <!-- erp info section  -->
           <div class="w-[50%]  rounded-xl ">
               <div class="mt-7 font-bold text-2xl ml-10 ">
                    <a href="homepage.php">Centurion University</a>
            </div> 
          
    

                <div class="w-full h-[600px] relative mt-[60px] ">
                    <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> -->
                    <!-- <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_B8IT2MMqlO.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay></lottie-player> -->
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_fakgwenv.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay></lottie-player>
                    <div class="absolute top-[38%] left-[40%]">
                        <p class="text-3xl font-bold">Create. Login. Manage your stuffs with our ERP system </p>
                        <p class="mt-1 text-gray-600">A web based platform for our students</p>
                    </div>
                </div>
            
            


           </div>
           <!-- login form section -->
           <div class="w-[50%]  ">

            <div class=" mt-[170px] ml-[100px]">
                <form action="" method="POST" class="w-[400px] h-[460px]  bg-white shadow-lg rounded-lg px-14">
                    <div class="flex flex-col mt-10 py-10">
                        <h1 class="text-2xl font-bold">Log In</h1>
                        <p class="text-sm font-semibold">New to our erp system ? <a href="studentRegister.php" class="text-[#00C1A2]">Create Account </a></p>
                    </div>
                    <div class="w-full  flex flex-col gap-2">
                     <p class="font-semibold">Registration Number</p>   
                    <input type="text" placeholder="" class="border-2 border-[#00C1A2] px-10 h-[40px] w-full rounded-md outline-none focus:ring" name="rollno">
                    </div>
                    <div class="w-full  mt-5 flex flex-col gap-2">
                        <p class="font-semibold">Password</p>
                        <input type="password" placeholder="" class="border-2 border-[#00C1A2] px-10 h-[40px] w-full rounded-md outline-none focus:ring" name="password">
                    </div>
                    <div class="mt-7">
                        <button type="submit" name="submit" class="w-full h-[60px] border bg-[#00C1A2] text-white text-[18px] font-semibold rounded-md shadow-lg ">log in</button>
                    </div>
                </form>
            </div>
        
              
             
           </div>
    </div>
</body>
</html>


<?php
   include 'dbconnection.php';
   if(isset($_POST['submit'])){
    $rollno = $_POST['rollno'];
    $password = $_POST['password'];

    $sql = "select * from `studentinfo` where rollno='$rollno' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        header('location:erp.html');
        $rollno = $_GET['rollno'];
    } 
    else{
        echo '<script>
        alert("invalid id name or password")
        </script>
        ';
    }
 
   }
?>